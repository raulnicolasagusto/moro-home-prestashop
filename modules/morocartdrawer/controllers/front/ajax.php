<?php
/**
 * Moro Cart Drawer — AJAX controller.
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroCartDrawerAjaxModuleFrontController extends ModuleFrontController
{
    /** @var array<int, string> */
    private const AGENCY_PROVINCE_CODES = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M',
        'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
    ];

    public $ajax;

    public function init()
    {
        parent::init();
        $this->ajax = Tools::getValue('ajax') == 1;
    }

    public function display()
    {
        if ($this->ajax) {
            $this->displayAjax();
        } else {
            parent::display();
        }
    }

    public function displayAjax()
    {
        header('Content-Type: application/json; charset=utf-8');

        try {
            $action = Tools::getValue('action', 'getCart');

            switch ($action) {
                case 'getCart':
                    $this->ajaxGetCart();
                    break;
                case 'updateQty':
                    $this->ajaxUpdateQty();
                    break;
                case 'removeItem':
                    $this->ajaxRemoveItem();
                    break;
                case 'estimateShipping':
                    $this->ajaxEstimateShipping();
                    break;
                case 'getPickupPoints':
                    $this->ajaxGetPickupPoints();
                    break;
                default:
                    $this->ajaxGetCart();
                    break;
            }
        } catch (Throwable $e) {
            echo json_encode([
                'success' => false,
                'error'   => $e->getMessage(),
            ]);
        }
        exit;
    }

    private function formatPrice(float $amount): string
    {
        $iso = $this->context->currency->iso_code;
        return $this->context->getCurrentLocale()->formatPrice($amount, $iso);
    }

    private function ajaxGetCart(): void
    {
        $cart = $this->context->cart;
        $products = $cart->getProducts();
        $items = [];

        foreach ($products as $product) {
            $idProduct = (int) $product['id_product'];
            $idProductAttribute = (int) ($product['id_product_attribute'] ?? 0);
            $idImage = (int) ($product['id_image'] ?? $idProduct);

            $imageUrl = '';
            if ($idImage > 0) {
                $imageUrl = $this->context->link->getImageLink(
                    (string) ($product['link_rewrite'] ?? ''),
                    $idProduct . '-' . $idImage,
                    'cart_default'
                );
            }

            $items[] = [
                'id_product'           => $idProduct,
                'id_product_attribute' => $idProductAttribute,
                'name'                 => $product['name'],
                'price'                => $this->formatPrice($product['price_wt']),
                'quantity'             => (int) $product['cart_quantity'],
                'image'                => $imageUrl,
                'url'                  => $this->context->link->getProductLink(
                    $idProduct,
                    $product['link_rewrite'] ?? null,
                    $product['category'] ?? null,
                    null,
                    (int) $this->context->language->id,
                    (int) $this->context->shop->id,
                    $idProductAttribute
                ),
                'variant' => !empty($product['attributes_small'])
                    ? $product['attributes_small']
                    : '',
            ];
        }

        $subtotal = $cart->getOrderTotal(false, 1);

        echo json_encode([
            'success'  => true,
            'items'    => $items,
            'count'    => $cart->nbProducts(),
            'subtotal' => $this->formatPrice($subtotal),
            'empty'    => empty($items),
        ]);
    }

    private function ajaxUpdateQty(): void
    {
        $idProduct = (int) Tools::getValue('id_product', 0);
        $idProductAttribute = (int) Tools::getValue('id_product_attribute', 0);
        $qty = (int) Tools::getValue('qty', 1);
        $op = Tools::getValue('op', 'up');

        if ($idProduct <= 0) {
            echo json_encode(['success' => false, 'error' => 'Invalid product']);
            return;
        }

        $cart = $this->context->cart;

        if ($qty <= 0) {
            $cart->deleteProduct($idProduct, $idProductAttribute);
        } else {
            $cart->updateQty($qty, $idProduct, $idProductAttribute, 0, $op);
        }

        $this->ajaxGetCart();
    }

    private function ajaxRemoveItem(): void
    {
        $idProduct = (int) Tools::getValue('id_product', 0);
        $idProductAttribute = (int) Tools::getValue('id_product_attribute', 0);

        if ($idProduct <= 0) {
            echo json_encode(['success' => false, 'error' => 'Invalid product']);
            return;
        }

        $cart = $this->context->cart;
        $cart->deleteProduct($idProduct, $idProductAttribute);

        $this->ajaxGetCart();
    }

    private function ajaxEstimateShipping(): void
    {
        $postalCode = trim((string) Tools::getValue('postal_code', ''));
        if (!preg_match('/^\d{4}$/', $postalCode)) {
            echo json_encode([
                'success' => false,
                'error' => 'Ingresá un código postal válido de 4 cifras.',
            ]);
            return;
        }

        $showBranch = (int) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH');
        if ((string) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH') === '') {
            $showBranch = 1;
        }

        if ($showBranch !== 1) {
            echo json_encode([
                'success' => false,
                'error' => 'La opción de envío a sucursal está desactivada.',
            ]);
            return;
        }

        $postalCodeOrigin = preg_replace('/\D+/', '', (string) Configuration::get('CORREOARGENTINO_ZIP_CODE'));

        if ($postalCodeOrigin === '') {
            echo json_encode([
                'success' => false,
                'error' => 'Falta el código postal de origen en la configuración de Correo Argentino.',
            ]);
            return;
        }

        $authContext = $this->getCorreoAuthContext();
        if (!$authContext['ok']) {
            echo json_encode([
                'success' => false,
                'error' => $authContext['error'],
            ]);
            return;
        }

        $baseUrl = $authContext['baseUrl'];
        $token = $authContext['token'];
        $customerId = $authContext['customerId'];

        $cart = $this->context->cart;
        $dimensions = $this->buildCartDimensions($cart->getProducts());

        $ratesPayload = [
            'customerId' => $customerId,
            'postalCodeOrigin' => $postalCodeOrigin,
            'postalCodeDestination' => $postalCode,
            'deliveredType' => 'S',
            'dimensions' => $dimensions,
        ];

        $ratesResponse = $this->doJsonRequest(
            $baseUrl . '/rates',
            $ratesPayload,
            [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ],
            'POST'
        );

        if (!$ratesResponse['ok'] || empty($ratesResponse['data']['rates']) || !is_array($ratesResponse['data']['rates'])) {
            echo json_encode([
                'success' => false,
                'error' => 'No encontramos opciones de envío para ese código postal.',
            ]);
            return;
        }

        $branchRate = null;
        foreach ($ratesResponse['data']['rates'] as $rate) {
            if (($rate['deliveredType'] ?? '') === 'S') {
                $branchRate = $rate;
                break;
            }
        }

        if ($branchRate === null) {
            echo json_encode([
                'success' => false,
                'error' => 'No hay tarifa de retiro en sucursal para ese código postal.',
            ]);
            return;
        }

        $shippingAmount = (float) ($branchRate['price'] ?? 0);
        $subtotal = (float) $cart->getOrderTotal(false, 1);
        $total = $subtotal + $shippingAmount;

        $optionLabel = !empty($branchRate['productName'])
            ? (string) $branchRate['productName']
            : 'Correo Argentino';

        echo json_encode([
            'success' => true,
            'postalCode' => $postalCode,
            'subtotal' => $this->formatPrice($subtotal),
            'subtotalAmount' => $subtotal,
            'shipping' => $this->formatPrice($shippingAmount),
            'shippingAmount' => $shippingAmount,
            'total' => $this->formatPrice($total),
            'totalAmount' => $total,
            'options' => [[
                'id' => 'branch',
                'type' => 'branch',
                'label' => 'Correo Argentino - Retiro en sucursal',
                'serviceName' => $optionLabel,
                'price' => $this->formatPrice($shippingAmount),
                'priceAmount' => $shippingAmount,
                'selected' => true,
            ]],
        ]);
    }

    private function ajaxGetPickupPoints(): void
    {
        $postalCode = trim((string) Tools::getValue('postal_code', ''));
        if (!preg_match('/^\d{4}$/', $postalCode)) {
            echo json_encode([
                'success' => false,
                'error' => 'Ingresá un código postal válido de 4 cifras.',
            ]);
            return;
        }

        $showBranch = (int) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH');
        if ((string) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH') === '') {
            $showBranch = 1;
        }

        if ($showBranch !== 1) {
            echo json_encode([
                'success' => false,
                'error' => 'La opción de envío a sucursal está desactivada.',
            ]);
            return;
        }

        $showPickupPoints = (int) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_PICKUP_POINTS');
        if ((string) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_PICKUP_POINTS') === '') {
            $showPickupPoints = 1;
        }

        if ($showPickupPoints !== 1) {
            echo json_encode([
                'success' => false,
                'error' => 'La lista de puntos de retiro está desactivada.',
            ]);
            return;
        }

        $authContext = $this->getCorreoAuthContext();
        if (!$authContext['ok']) {
            echo json_encode([
                'success' => false,
                'error' => $authContext['error'],
            ]);
            return;
        }

        $points = $this->fetchPickupPointsByPostalCode(
            $authContext['baseUrl'],
            $authContext['token'],
            $authContext['customerId'],
            $postalCode
        );

        echo json_encode([
            'success' => true,
            'postalCode' => $postalCode,
            'points' => $points,
            'count' => count($points),
        ]);
    }

    /**
     * @return array{ok:bool,error:string,baseUrl:string,token:string,customerId:string}
     */
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
            $basicAuthHeader = str_starts_with(strtolower($authHash), 'basic ')
                ? $authHash
                : 'Basic ' . $authHash;
        }

        if ($basicAuthHeader === '') {
            return [
                'ok' => false,
                'error' => 'No encontramos credenciales de Correo Argentino en la configuración.',
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
                'error' => 'No se pudo autenticar con Correo Argentino.',
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
                    'error' => 'Falta customerId en Correo Argentino y no hay usuario/contraseña para resolverlo automáticamente.',
                    'baseUrl' => '',
                    'token' => '',
                    'customerId' => '',
                ];
            }

            $customerId = $this->resolveCustomerId($baseUrl, $token, $username, $password);
            if ($customerId === '') {
                return [
                    'ok' => false,
                    'error' => 'No se pudo resolver el customerId de Correo Argentino con las credenciales cargadas.',
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

    /**
     * @return array<int, array{id:string,name:string,address:string,city:string,province:string,postalCode:string,hours:string,latitude:string,longitude:string}>
     */
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

            $agenciesResponse = $this->doJsonRequest(
                $baseUrl . '/agencies?' . $query,
                [],
                [
                    'Authorization: Bearer ' . $token,
                    'Content-Type: application/json',
                ],
                'GET'
            );

            if (!$agenciesResponse['ok'] || !is_array($agenciesResponse['data'])) {
                continue;
            }

            foreach ($agenciesResponse['data'] as $agency) {
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

                $address = is_array($agency['location']['address'] ?? null)
                    ? $agency['location']['address']
                    : [];

                $agencyPostalCodeRaw = (string) ($address['postalCode'] ?? '');
                $agencyPostalCode4 = $this->extractPostalCodeDigits($agencyPostalCodeRaw);
                if ($agencyPostalCode4 !== $postalCode) {
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
                    'latitude' => trim((string) ($agency['location']['latitude'] ?? '')),
                    'longitude' => trim((string) ($agency['location']['longitude'] ?? '')),
                ];
            }
        }

        return $points;
    }

    private function extractPostalCodeDigits(string $postalCode): string
    {
        $digits = preg_replace('/\D+/', '', $postalCode);
        if (!is_string($digits) || strlen($digits) < 4) {
            return '';
        }

        return substr($digits, 0, 4);
    }

    private function formatAgencyHours($hours): string
    {
        if (!is_array($hours)) {
            return '';
        }

        $dayLabels = [
            'monday' => 'Lun',
            'tuesday' => 'Mar',
            'wednesday' => 'Mié',
            'thursday' => 'Jue',
            'friday' => 'Vie',
            'saturday' => 'Sáb',
        ];

        $chunks = [];
        foreach ($dayLabels as $dayKey => $dayLabel) {
            $dayData = $hours[$dayKey] ?? null;
            if (!is_array($dayData)) {
                continue;
            }

            $start = $this->formatHourValue((string) ($dayData['start'] ?? ''));
            $end = $this->formatHourValue((string) ($dayData['end'] ?? ''));
            if ($start === '' || $end === '') {
                continue;
            }

            $chunks[] = $dayLabel . ' ' . $start . '-' . $end;
        }

        return implode(' | ', $chunks);
    }

    private function formatHourValue(string $value): string
    {
        $value = preg_replace('/\D+/', '', $value);
        if (!is_string($value) || strlen($value) !== 4) {
            return '';
        }

        return substr($value, 0, 2) . ':' . substr($value, 2, 2);
    }

    /**
     * @param array<int, array<string, mixed>> $products
     *
     * @return array{weight:int, height:int, width:int, length:int}
     */
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

        $weightGrams = max(1, min(25000, $weightGrams));
        $height = max(1, min(150, $height));
        $width = max(1, min(150, $width));
        $length = max(1, min(150, $length));

        return [
            'weight' => $weightGrams,
            'height' => $height,
            'width' => $width,
            'length' => $length,
        ];
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<int, string> $headers
     *
     * @return array{ok:bool,data:array<string,mixed>|null}
     */
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
        if (!is_array($decoded)) {
            return ['ok' => false, 'data' => null];
        }

        return ['ok' => true, 'data' => $decoded];
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
}
