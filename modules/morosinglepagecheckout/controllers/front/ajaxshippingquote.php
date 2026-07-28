<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MorosinglepagecheckoutAjaxshippingquoteModuleFrontController extends ModuleFrontController
{
    public $ajax = true;
    public $ssl = true;

    public function postProcess()
    {
        header('Content-Type: application/json; charset=utf-8');

        $cart = $this->context->cart;
        if (!Validate::isLoadedObject($cart) || !(int) $cart->id_address_delivery) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Primero guardá la dirección para calcular el envío.'),
            ]);
        }

        $address = new Address((int) $cart->id_address_delivery);
        if (!Validate::isLoadedObject($address)) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('No pudimos leer la dirección de envío.'),
            ]);
        }

        $postalCode = $this->extractPostalCodeDigits((string) $address->postcode);
        if (!preg_match('/^\d{4}$/', $postalCode)) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Ingresá un código postal válido de 4 cifras.'),
            ]);
        }

        $postalCodeOrigin = preg_replace('/\D+/', '', (string) Configuration::get('CORREOARGENTINO_ZIP_CODE'));
        if (!is_string($postalCodeOrigin) || $postalCodeOrigin === '') {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Falta el código postal de origen en la configuración de Correo Argentino.'),
            ]);
        }

        $authContext = $this->getCorreoAuthContext();
        if (!$authContext['ok']) {
            $this->renderJson([
                'success' => false,
                'error' => $authContext['error'],
            ]);
        }

        $ratesPayload = [
            'customerId' => $authContext['customerId'],
            'postalCodeOrigin' => $postalCodeOrigin,
            'postalCodeDestination' => $postalCode,
            'dimensions' => $this->buildCartDimensions($cart->getProducts()),
        ];

        $ratesResponse = $this->doJsonRequest(
            $authContext['baseUrl'] . '/rates',
            $ratesPayload,
            [
                'Authorization: Bearer ' . $authContext['token'],
                'Content-Type: application/json',
            ],
            'POST'
        );

        if (!$ratesResponse['ok'] || empty($ratesResponse['data']['rates']) || !is_array($ratesResponse['data']['rates'])) {
            PrestaShopLogger::addLog(
                'Moro single page checkout shipping quote failed for CP ' . $postalCode,
                2,
                null,
                'Cart',
                (int) $cart->id,
                true
            );

            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('No encontramos opciones de envío para ese código postal.'),
            ]);
        }

        $options = $this->formatRates($ratesResponse['data']['rates']);
        if (empty($options)) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Correo Argentino no devolvió tarifas disponibles para esta dirección.'),
            ]);
        }

        $pickupPoints = $this->fetchPickupPointsForAddress(
            $authContext['baseUrl'],
            $authContext['token'],
            $authContext['customerId'],
            $address,
            $postalCode
        );

        usort($options, function (array $left, array $right): int {
            if ($left['type'] === $right['type']) {
                return $left['priceAmount'] <=> $right['priceAmount'];
            }

            return $left['type'] === 'branch' ? -1 : 1;
        });

        $selected = $options[0];
        foreach ($options as &$option) {
            $option['selected'] = $option['id'] === $selected['id'];
        }
        unset($option);

        $subtotal = (float) $cart->getOrderTotal(false, Cart::ONLY_PRODUCTS);
        $total = $subtotal + (float) $selected['priceAmount'];

        $this->context->cookie->__set('moro_spc_shipping_type', $selected['deliveryType']);
        $this->context->cookie->__set('moro_spc_shipping_price', (string) $selected['priceAmount']);
        $this->context->cookie->__set('moro_spc_shipping_product_type', $selected['productType']);
        $this->context->cookie->__set('moro_spc_shipping_product_name', $selected['serviceName']);
        $this->context->cookie->write();

        $this->renderJson([
            'success' => true,
            'postalCode' => $postalCode,
            'subtotal' => $this->formatPrice($subtotal),
            'subtotalAmount' => $subtotal,
            'shipping' => $this->formatPrice((float) $selected['priceAmount']),
            'shippingAmount' => (float) $selected['priceAmount'],
            'total' => $this->formatPrice($total),
            'totalAmount' => $total,
            'options' => $options,
            'pickupPoints' => $pickupPoints,
        ]);
    }

    private function formatRates(array $rates): array
    {
        $options = [];

        foreach ($rates as $rate) {
            if (!is_array($rate)) {
                continue;
            }

            $deliveredType = (string) ($rate['deliveredType'] ?? '');
            if (!in_array($deliveredType, ['S', 'D'], true)) {
                continue;
            }

            $price = (float) ($rate['price'] ?? 0);
            $serviceName = (string) ($rate['productName'] ?? 'Correo Argentino');
            $deliveryMin = (string) ($rate['deliveryTimeMin'] ?? '');
            $deliveryMax = (string) ($rate['deliveryTimeMax'] ?? '');
            $type = $deliveredType === 'S' ? 'branch' : 'home';

            $label = $type === 'branch'
                ? $this->module->l('Correo Argentino - Retiro en sucursal')
                : $this->module->l('Correo Argentino - Envío a domicilio');

            $delay = '';
            if ($deliveryMin !== '' || $deliveryMax !== '') {
                $delay = trim($deliveryMin . ' a ' . $deliveryMax . ' días hábiles');
            }

            $options[] = [
                'id' => $type . '-' . (string) ($rate['productType'] ?? 'CP'),
                'type' => $type,
                'deliveryType' => $deliveredType,
                'productType' => (string) ($rate['productType'] ?? 'CP'),
                'label' => $label,
                'serviceName' => $serviceName,
                'delay' => $delay,
                'price' => $this->formatPrice($price),
                'priceAmount' => $price,
                'selected' => false,
            ];
        }

        return $options;
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
            return [
                'ok' => false,
                'error' => $this->module->l('No encontramos credenciales de Correo Argentino en la configuración.'),
                'baseUrl' => '',
                'token' => '',
                'customerId' => '',
            ];
        }

        $sandbox = (int) Configuration::get('CORREOARGENTINO_SANDBOX_MODE') === 1;
        $baseUrl = $sandbox
            ? 'https://apitest.correoargentino.com.ar/micorreo/v1'
            : 'https://api.correoargentino.com.ar/micorreo/v1';

        $tokenResponse = $this->doJsonRequest(
            $baseUrl . '/token',
            [],
            [
                'Authorization: ' . $basicAuthHeader,
                'Content-Type: application/json',
            ],
            'POST'
        );

        if (!$tokenResponse['ok'] || empty($tokenResponse['data']['token'])) {
            return [
                'ok' => false,
                'error' => $this->module->l('No se pudo autenticar con Correo Argentino.'),
                'baseUrl' => '',
                'token' => '',
                'customerId' => '',
            ];
        }

        $token = (string) $tokenResponse['data']['token'];

        if ($customerId === '') {
            if ($username === '' || $password === '') {
                return [
                    'ok' => false,
                    'error' => $this->module->l('Falta customerId en Correo Argentino y no hay usuario/contraseña para resolverlo automáticamente.'),
                    'baseUrl' => '',
                    'token' => '',
                    'customerId' => '',
                ];
            }

            $customerId = $this->resolveCustomerId($baseUrl, $token, $username, $password);
            if ($customerId === '') {
                return [
                    'ok' => false,
                    'error' => $this->module->l('No se pudo resolver el customerId de Correo Argentino con las credenciales cargadas.'),
                    'baseUrl' => '',
                    'token' => '',
                    'customerId' => '',
                ];
            }
        }

        return [
            'ok' => true,
            'error' => '',
            'baseUrl' => $baseUrl,
            'token' => $token,
            'customerId' => $customerId,
        ];
    }

    private function fetchPickupPointsForAddress(string $baseUrl, string $token, string $customerId, Address $address, string $postalCode): array
    {
        $provinceCode = $this->getProvinceCodeFromAddress($address);
        if ($provinceCode === '') {
            return [];
        }

        $cacheKey = 'moro_spc_pickup_' . sha1($customerId . '|' . $provinceCode . '|' . $postalCode);
        $cached = $this->readCache($cacheKey);
        if (is_array($cached)) {
            return $cached;
        }

        $query = http_build_query([
            'customerId' => $customerId,
            'provinceCode' => $provinceCode,
            'services' => 'pickup_availability',
        ]);

        $response = $this->doJsonRequest(
            $baseUrl . '/agencies?' . $query,
            [],
            [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ],
            'GET',
            7
        );

        if (!$response['ok'] || !is_array($response['data'])) {
            return [];
        }

        $points = $this->filterPickupPointsByPostalCode($response['data'], $postalCode);
        $this->writeCache($cacheKey, $points, 86400);

        return $points;
    }

    private function getProvinceCodeFromAddress(Address $address): string
    {
        if (!(int) $address->id_state) {
            return '';
        }

        $state = new State((int) $address->id_state);
        if (!Validate::isLoadedObject($state)) {
            return '';
        }

        $isoCode = strtoupper(trim((string) $state->iso_code));
        if ($isoCode === '') {
            return '';
        }

        if (strpos($isoCode, '-') !== false) {
            $parts = explode('-', $isoCode);
            $isoCode = strtoupper((string) end($parts));
        }

        return substr($isoCode, 0, 1);
    }

    private function filterPickupPointsByPostalCode(array $agencies, string $postalCode): array
    {
        $points = [];
        $seen = [];

        foreach ($agencies as $agency) {
            if (!is_array($agency)) {
                continue;
            }

            $agencyCode = trim((string) ($agency['code'] ?? $agency['agency_id'] ?? ''));
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

            if (array_key_exists('pickup_availability', $agency) && !$agency['pickup_availability']) {
                continue;
            }

            $address = is_array($agency['location']['address'] ?? null)
                ? $agency['location']['address']
                : (is_array($agency['location'] ?? null) ? $agency['location'] : []);

            $agencyPostalCodeRaw = (string) ($address['postalCode'] ?? $address['zip_code'] ?? '');
            if ($this->extractPostalCodeDigits($agencyPostalCodeRaw) !== $postalCode) {
                continue;
            }

            $seen[$agencyCode] = true;
            $points[] = [
                'id' => $agencyCode,
                'name' => trim((string) ($agency['name'] ?? $agency['agency_name'] ?? 'Sucursal Correo Argentino')),
                'address' => trim((string) ($address['streetName'] ?? $address['street_name'] ?? '')) . ' ' . trim((string) ($address['streetNumber'] ?? $address['street_number'] ?? '')),
                'city' => trim((string) ($address['city'] ?? $address['locality'] ?? $address['city_name'] ?? '')),
                'province' => trim((string) ($address['province'] ?? $address['state_name'] ?? '')),
                'postalCode' => $agencyPostalCodeRaw,
                'hours' => $this->formatAgencyHours($agency['hours'] ?? $agency['open_hours'] ?? null, (string) ($agency['schedule'] ?? '')),
            ];
        }

        return $points;
    }

    private function buildCartDimensions(array $products): array
    {
        $weightGrams = 0;
        $height = 1;
        $width = 1;
        $length = 1;

        foreach ($products as $product) {
            $qty = (int) ($product['cart_quantity'] ?? 1);
            $weightKg = (float) ($product['weight'] ?? 0);
            $weightGrams += (int) round($weightKg * 1000 * max(1, $qty));

            $height = max($height, (int) ceil((float) ($product['height'] ?? 1)));
            $width = max($width, (int) ceil((float) ($product['width'] ?? 1)));
            $length = max($length, (int) ceil((float) ($product['depth'] ?? 1)));
        }

        return [
            'weight' => max(1, min(25000, $weightGrams)),
            'height' => max(1, min(150, $height)),
            'width' => max(1, min(150, $width)),
            'length' => max(1, min(150, $length)),
        ];
    }

    private function formatAgencyHours($hours, string $schedule = ''): string
    {
        if ($schedule !== '') {
            return $schedule;
        }

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

    private function doJsonRequest(string $url, array $payload, array $headers, string $method = 'POST', int $timeout = 12): array
    {
        $ch = curl_init($url);
        if ($ch === false) {
            return ['ok' => false, 'data' => null];
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, min(4, $timeout));
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
        if (!is_array($decoded)) {
            return ['ok' => false, 'data' => null];
        }

        return ['ok' => true, 'data' => $decoded];
    }

    private function readCache(string $key)
    {
        $path = $this->getCachePath($key);
        if (!is_file($path)) {
            return null;
        }

        $raw = file_get_contents($path);
        if (!is_string($raw) || $raw === '') {
            return null;
        }

        $payload = json_decode($raw, true);
        if (!is_array($payload) || (int) ($payload['expires'] ?? 0) < time()) {
            return null;
        }

        return $payload['data'] ?? null;
    }

    private function writeCache(string $key, array $data, int $ttl): void
    {
        $path = $this->getCachePath($key);
        $dir = dirname($path);
        if (!is_dir($dir)) {
            @mkdir($dir, 0775, true);
        }

        @file_put_contents($path, json_encode([
            'expires' => time() + $ttl,
            'data' => $data,
        ]));
    }

    private function getCachePath(string $key): string
    {
        return rtrim(_PS_CACHE_DIR_, '/\\') . DIRECTORY_SEPARATOR . 'morosinglepagecheckout' . DIRECTORY_SEPARATOR . $key . '.json';
    }

    private function resolveCustomerId(string $baseUrl, string $token, string $username, string $password): string
    {
        $response = $this->doJsonRequest(
            $baseUrl . '/users/validate',
            [
                'email' => $username,
                'password' => $password,
            ],
            [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ],
            'POST'
        );

        if (!$response['ok'] || !is_array($response['data'])) {
            return '';
        }

        $customerId = (string) ($response['data']['customerId'] ?? '');
        if ($customerId !== '') {
            Configuration::updateValue('CORREOARGENTINO_CUSTOMER_ID', $customerId);
        }

        return $customerId;
    }

    private function extractPostalCodeDigits(string $postalCode): string
    {
        $digits = preg_replace('/\D+/', '', $postalCode);
        if (!is_string($digits) || strlen($digits) < 4) {
            return '';
        }

        return substr($digits, 0, 4);
    }

    private function formatPrice(float $amount): string
    {
        return $this->context->getCurrentLocale()->formatPrice($amount, $this->context->currency->iso_code);
    }

    private function renderJson(array $payload): void
    {
        exit(json_encode($payload));
    }
}
