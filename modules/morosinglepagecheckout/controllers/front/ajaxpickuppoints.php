<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MorosinglepagecheckoutAjaxpickuppointsModuleFrontController extends ModuleFrontController
{
    private const AGENCY_PROVINCE_CODES = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M',
        'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
    ];

    public $ajax = true;
    public $ssl = true;

    public function postProcess()
    {
        header('Content-Type: application/json; charset=utf-8');

        if (Tools::getValue('token') !== Tools::getToken(false)) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('La sesión expiró. Actualizá la página e intentá de nuevo.'),
            ]);
        }

        $cart = $this->context->cart;
        if (!Validate::isLoadedObject($cart) || !(int) $cart->id_address_delivery) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Primero guardá la dirección para ver sucursales.'),
            ]);
        }

        $address = new Address((int) $cart->id_address_delivery);
        $postalCode = Validate::isLoadedObject($address)
            ? $this->extractPostalCodeDigits((string) $address->postcode)
            : '';

        if (!preg_match('/^\d{4}$/', $postalCode)) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Ingresá un código postal válido de 4 cifras.'),
            ]);
        }

        $authContext = $this->getCorreoAuthContext();
        if (!$authContext['ok']) {
            $this->renderJson([
                'success' => false,
                'error' => $authContext['error'],
            ]);
        }

        $points = $this->fetchPickupPointsByPostalCode(
            $authContext['baseUrl'],
            $authContext['token'],
            $authContext['customerId'],
            $postalCode
        );

        $this->renderJson([
            'success' => true,
            'postalCode' => $postalCode,
            'points' => $points,
            'count' => count($points),
        ]);
    }

    private function getCorreoAuthContext(): array
    {
        $username = (string) Configuration::get('CORREOARGENTINO_USERNAME_MICORREO');
        $password = (string) Configuration::get('CORREOARGENTINO_PASSWORD_MICORREO');
        $authHash = trim((string) Configuration::get('CORREOARGENTINO_AUTH_HASH'));
        $customerId = (string) Configuration::get('CORREOARGENTINO_CUSTOMER_ID');

        $basicAuthHeader = '';
        if ($username !== '' && $password !== '') {
            $basicAuthHeader = 'Basic ' . base64_encode($username . ':' . $password);
        } elseif ($authHash !== '') {
            $basicAuthHeader = strpos(strtolower($authHash), 'basic ') === 0
                ? $authHash
                : 'Basic ' . $authHash;
        }

        if ($basicAuthHeader === '') {
            return ['ok' => false, 'error' => $this->module->l('No encontramos credenciales de Correo Argentino en la configuración.'), 'baseUrl' => '', 'token' => '', 'customerId' => ''];
        }

        $baseUrl = (int) Configuration::get('CORREOARGENTINO_SANDBOX_MODE') === 1
            ? 'https://apitest.correoargentino.com.ar/micorreo/v1'
            : 'https://api.correoargentino.com.ar/micorreo/v1';

        $tokenResponse = $this->doJsonRequest($baseUrl . '/token', [], [
            'Authorization: ' . $basicAuthHeader,
            'Content-Type: application/json',
        ]);

        if (!$tokenResponse['ok'] || empty($tokenResponse['data']['token'])) {
            return ['ok' => false, 'error' => $this->module->l('No se pudo autenticar con Correo Argentino.'), 'baseUrl' => '', 'token' => '', 'customerId' => ''];
        }

        $token = (string) $tokenResponse['data']['token'];

        if ($customerId === '' && $username !== '' && $password !== '') {
            $customerId = $this->resolveCustomerId($baseUrl, $token, $username, $password);
        }

        if ($customerId === '') {
            return ['ok' => false, 'error' => $this->module->l('No se pudo resolver el customerId de Correo Argentino.'), 'baseUrl' => '', 'token' => '', 'customerId' => ''];
        }

        return ['ok' => true, 'error' => '', 'baseUrl' => $baseUrl, 'token' => $token, 'customerId' => $customerId];
    }

    private function fetchPickupPointsByPostalCode(string $baseUrl, string $token, string $customerId, string $postalCode): array
    {
        $points = [];
        $seen = [];

        foreach (self::AGENCY_PROVINCE_CODES as $provinceCode) {
            $query = http_build_query([
                'customerId' => $customerId,
                'provinceCode' => $provinceCode,
                'services' => 'pickup_availability',
            ]);

            $response = $this->doJsonRequest($baseUrl . '/agencies?' . $query, [], [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ], 'GET');

            if (!$response['ok'] || !is_array($response['data'])) {
                continue;
            }

            foreach ($response['data'] as $agency) {
                if (!is_array($agency)) {
                    continue;
                }

                $agencyCode = trim((string) ($agency['code'] ?? ''));
                if ($agencyCode === '' || isset($seen[$agencyCode])) {
                    continue;
                }

                $status = strtoupper((string) ($agency['status'] ?? ''));
                if ($status !== '' && $status !== 'ACTIVE') {
                    continue;
                }

                $services = $agency['services'] ?? null;
                if (is_array($services) && array_key_exists('pickupAvailability', $services) && !$services['pickupAvailability']) {
                    continue;
                }

                $address = is_array($agency['location']['address'] ?? null) ? $agency['location']['address'] : [];
                $agencyPostalCodeRaw = (string) ($address['postalCode'] ?? '');
                if ($this->extractPostalCodeDigits($agencyPostalCodeRaw) !== $postalCode) {
                    continue;
                }

                $seen[$agencyCode] = true;
                $points[] = [
                    'id' => $agencyCode,
                    'name' => trim((string) ($agency['name'] ?? 'Sucursal Correo Argentino')),
                    'address' => trim((string) ($address['streetName'] ?? '')) . ' ' . trim((string) ($address['streetNumber'] ?? '')),
                    'city' => trim((string) ($address['city'] ?? $address['locality'] ?? '')),
                    'province' => trim((string) ($address['province'] ?? '')),
                    'postalCode' => $agencyPostalCodeRaw,
                    'hours' => $this->formatAgencyHours($agency['hours'] ?? null),
                ];
            }
        }

        return $points;
    }

    private function formatAgencyHours($hours): string
    {
        if (!is_array($hours)) {
            return '';
        }

        $labels = ['monday' => 'Lun', 'tuesday' => 'Mar', 'wednesday' => 'Mié', 'thursday' => 'Jue', 'friday' => 'Vie', 'saturday' => 'Sáb'];
        $chunks = [];
        foreach ($labels as $key => $label) {
            if (!is_array($hours[$key] ?? null)) {
                continue;
            }
            $start = $this->formatHourValue((string) ($hours[$key]['start'] ?? ''));
            $end = $this->formatHourValue((string) ($hours[$key]['end'] ?? ''));
            if ($start !== '' && $end !== '') {
                $chunks[] = $label . ' ' . $start . '-' . $end;
            }
        }

        return implode(' | ', $chunks);
    }

    private function formatHourValue(string $value): string
    {
        $digits = preg_replace('/\D+/', '', $value);
        if (!is_string($digits) || strlen($digits) !== 4) {
            return '';
        }

        return substr($digits, 0, 2) . ':' . substr($digits, 2, 2);
    }

    private function doJsonRequest(string $url, array $payload, array $headers, string $method = 'POST'): array
    {
        $ch = curl_init($url);
        if ($ch === false) {
            return ['ok' => false, 'data' => null];
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        if ($method !== 'GET') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        }

        $raw = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($raw === false || $raw === null || $httpCode < 200 || $httpCode >= 300) {
            return ['ok' => false, 'data' => null];
        }

        $decoded = json_decode((string) $raw, true);
        return is_array($decoded) ? ['ok' => true, 'data' => $decoded] : ['ok' => false, 'data' => null];
    }

    private function resolveCustomerId(string $baseUrl, string $token, string $username, string $password): string
    {
        $response = $this->doJsonRequest($baseUrl . '/users/validate', [
            'email' => $username,
            'password' => $password,
        ], [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json',
        ]);

        $customerId = $response['ok'] && is_array($response['data'])
            ? (string) ($response['data']['customerId'] ?? '')
            : '';

        if ($customerId !== '') {
            Configuration::updateValue('CORREOARGENTINO_CUSTOMER_ID', $customerId);
        }

        return $customerId;
    }

    private function extractPostalCodeDigits(string $postalCode): string
    {
        $digits = preg_replace('/\D+/', '', $postalCode);
        return is_string($digits) && strlen($digits) >= 4 ? substr($digits, 0, 4) : '';
    }

    private function renderJson(array $payload): void
    {
        exit(json_encode($payload));
    }
}
