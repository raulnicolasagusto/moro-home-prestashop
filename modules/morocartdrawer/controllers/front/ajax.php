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
                case 'selectShipping':
                    $this->ajaxSelectShipping();
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

        $showHome = (int) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_HOME');
        $showBranch = (int) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH');
        if ((string) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_HOME') === '') {
            $showHome = 0;
        }
        if ((string) Configuration::get('MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH') === '') {
            $showBranch = 1;
        }

        if ($showHome === 0 && $showBranch === 0) {
            echo json_encode([
                'success' => false,
                'error' => 'Las opciones de envío están desactivadas.',
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

        $options = $this->formatRates($ratesResponse['data']['rates']);
        if (empty($options)) {
            echo json_encode([
                'success' => false,
                'error' => 'Correo Argentino no devolvió tarifas disponibles para esta dirección.',
            ]);
            return;
        }

        // Filtro de display segun toggles del Back Office
        if ($showHome === 0) {
            $options = array_values(array_filter($options, function (array $o): bool {
                return $o['type'] !== 'home';
            }));
        }

        if ($showBranch === 0) {
            $options = array_values(array_filter($options, function (array $o): bool {
                return $o['type'] !== 'branch';
            }));
        }

        if (empty($options)) {
            echo json_encode([
                'success' => false,
                'error' => 'No hay opciones de envío disponibles para ese código postal.',
            ]);
            return;
        }

        // Sucursal primero, luego por precio
        usort($options, function (array $left, array $right): int {
            if ($left['type'] === $right['type']) {
                return $left['priceAmount'] <=> $right['priceAmount'];
            }

            return $left['type'] === 'branch' ? -1 : 1;
        });

        $options[0]['selected'] = true;
        $selected = $options[0];

        $subtotal = (float) $cart->getOrderTotal(false, 1);
        $total = $subtotal + (float) $selected['priceAmount'];

        echo json_encode([
            'success' => true,
            'postalCode' => $postalCode,
            'subtotal' => $this->formatPrice($subtotal),
            'subtotalAmount' => $subtotal,
            'shipping' => $this->formatPrice((float) $selected['priceAmount']),
            'shippingAmount' => (float) $selected['priceAmount'],
            'total' => $this->formatPrice($total),
            'totalAmount' => $total,
            'options' => $options,
        ]);
    }

    /**
     * @param array<int, array<string, mixed>> $rates
     *
     * @return array<int, array{
     *     id: string,
     *     type: string,
     *     deliveryType: string,
     *     productType: string,
     *     label: string,
     *     serviceName: string,
     *     delay: string,
     *     price: string,
     *     priceAmount: float,
     *     selected: bool
     * }>
     */
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
                ? 'Correo Argentino - Retiro en sucursal'
                : 'Correo Argentino - Envío a domicilio';

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

    private function ajaxSelectShipping(): void
    {
        $deliveryType = (string) Tools::getValue('delivery_type');
        $price = (float) Tools::getValue('price', 0);
        $productType = (string) Tools::getValue('product_type', 'CP');
        $productName = (string) Tools::getValue('product_name', 'Correo Argentino');
        $agencyId = trim((string) Tools::getValue('agency_id', ''));
        $agencyName = trim((string) Tools::getValue('agency_name', ''));
        $agencyAddress = trim((string) Tools::getValue('agency_address', ''));
        $agencyPostalCode = trim((string) Tools::getValue('agency_postal_code', ''));

        if (!in_array($deliveryType, ['S', 'D'], true) || $price < 0) {
            echo json_encode([
                'success' => false,
                'error' => 'La opción de envío seleccionada no es válida.',
            ]);
            return;
        }

        if ($deliveryType === 'S' && $agencyId === '') {
            echo json_encode([
                'success' => false,
                'error' => 'Seleccioná una sucursal para retirar el pedido.',
            ]);
            return;
        }

        $cookie = $this->context->cookie;
        $cookie->__set('moro_spc_shipping_type', $deliveryType);
        $cookie->__set('moro_spc_shipping_price', (string) $price);
        $cookie->__set('moro_spc_shipping_product_type', $productType);
        $cookie->__set('moro_spc_shipping_product_name', $productName);
        $cookie->__set('moro_spc_shipping_agency_id', $deliveryType === 'S' ? $agencyId : '');
        $cookie->__set('moro_spc_shipping_agency_name', $deliveryType === 'S' ? $agencyName : '');
        $cookie->__set('moro_spc_shipping_agency_address', $deliveryType === 'S' ? $agencyAddress : '');
        $cookie->__set('moro_spc_shipping_agency_postal_code', $deliveryType === 'S' ? $agencyPostalCode : '');
        $cookie->write();

        $cart = $this->context->cart;
        if (!Validate::isLoadedObject($cart)) {
            echo json_encode(['success' => true]);
            return;
        }

        Db::getInstance()->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'moro_spc_shipping_selection`
            (`id_cart`, `delivery_type`, `price`, `product_type`, `product_name`, `agency_id`, `agency_name`, `agency_address`, `agency_postal_code`, `date_add`, `date_upd`)
            VALUES (
                ' . (int) $cart->id . ',
                "' . pSQL($deliveryType) . '",
                ' . (float) $price . ',
                "' . pSQL($productType) . '",
                "' . pSQL($productName) . '",
                "' . pSQL($deliveryType === 'S' ? $agencyId : '') . '",
                "' . pSQL($deliveryType === 'S' ? $agencyName : '') . '",
                "' . pSQL($deliveryType === 'S' ? $agencyAddress : '') . '",
                "' . pSQL($deliveryType === 'S' ? $agencyPostalCode : '') . '",
                NOW(),
                NOW()
            )
            ON DUPLICATE KEY UPDATE
                `delivery_type` = VALUES(`delivery_type`),
                `price` = VALUES(`price`),
                `product_type` = VALUES(`product_type`),
                `product_name` = VALUES(`product_name`),
                `agency_id` = VALUES(`agency_id`),
                `agency_name` = VALUES(`agency_name`),
                `agency_address` = VALUES(`agency_address`),
                `agency_postal_code` = VALUES(`agency_postal_code`),
                `date_upd` = NOW()'
        );

        try {
            $idCarrierCorreo = (int) Db::getInstance()->getValue(
                'SELECT `id_carrier`
                FROM `' . _DB_PREFIX_ . 'correoargentino_rates`
                WHERE `service_type` = "' . pSQL($productType) . '"
                  AND `delivered_type` = "' . pSQL($deliveryType) . '"'
            );

            if ($idCarrierCorreo > 0 && (int) $cart->id_address_delivery > 0) {
                $cart->id_carrier = $idCarrierCorreo;
                $cart->setDeliveryOption([
                    (int) $cart->id_address_delivery => $idCarrierCorreo . ',',
                ]);
                $cart->update();
            }

            $freshCart = new Cart((int) $cart->id);

            if ($deliveryType === 'S' && $idCarrierCorreo > 0 && Validate::isLoadedObject($freshCart) && (int) $freshCart->id_address_delivery > 0) {
                $address = new Address((int) $freshCart->id_address_delivery);
                $stateIsoCode = '';

                if (Validate::isLoadedObject($address) && (int) $address->id_state > 0) {
                    $state = new State((int) $address->id_state);
                    if (Validate::isLoadedObject($state)) {
                        $stateIsoCode = (string) $state->iso_code;
                    }
                }

                Hook::exec('actionValidateStepComplete', [
                    'step_name' => 'delivery',
                    'cart' => $freshCart,
                    'request_params' => [
                        'correoargentino_branch_id_' . $idCarrierCorreo => $agencyId,
                        'correoargentino_state_id_' . $idCarrierCorreo => $stateIsoCode,
                    ],
                ]);
            }
        } catch (Throwable $exception) {
            PrestaShopLogger::addLog(
                'Moro Cart Drawer shipping select failed: ' . $exception->getMessage(),
                3,
                null,
                'Cart',
                (int) $cart->id,
                true
            );
        }

        echo json_encode([
            'success' => true,
            'shipping' => $this->formatPrice($price),
            'shippingAmount' => $price,
            'deliveryType' => $deliveryType,
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

        $points = $this->getPickupPointsForPostalCode(
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
     * Puntos de retiro para un CP, resolviendo la provincia antes de llamar a la API.
     *
     * Prioridad de resolución de provincia (mismo criterio que el módulo SPC):
     * 1. Dirección de envío del carrito (id_address_delivery) → provincia exacta.
     * 2. Primera letra del CP si viene con letra (CPA completo, ej. X5000ABC).
     * 3. Fallback: recorrer las provincias usando el caché por provincia.
     *
     * @return array<int, array{id:string,name:string,address:string,city:string,province:string,postalCode:string,hours:string,latitude:string,longitude:string}>
     */
    private function getPickupPointsForPostalCode(string $baseUrl, string $token, string $customerId, string $postalCode): array
    {
        $provinceCode = $this->resolveProvinceCode($postalCode);
        if ($provinceCode === '') {
            return $this->fetchPickupPointsAcrossProvinces($baseUrl, $token, $customerId, $postalCode);
        }

        $points = $this->fetchPickupPointsByProvince($baseUrl, $token, $customerId, $provinceCode);

        return $this->filterPickupPointsByPostalCode($points, $postalCode);
    }

    /**
     * Resuelve el provinceCode de la API MiCorreo desde el CP o la dirección del carrito.
     */
    private function resolveProvinceCode(string $postalCode): string
    {
        $cart = $this->context->cart;
        if (Validate::isLoadedObject($cart) && (int) $cart->id_address_delivery > 0) {
            $address = new Address((int) $cart->id_address_delivery);
            if (Validate::isLoadedObject($address)) {
                $province = $this->getProvinceCodeFromAddress($address);
                if ($province !== '') {
                    return $province;
                }
            }
        }

        $trimmed = trim($postalCode);
        if (preg_match('/^([A-Za-z])/', $trimmed, $matches)) {
            return strtoupper($matches[1]);
        }

        return '';
    }

    /**
     * Código de provincia desde una dirección (mismo criterio que el módulo SPC):
     * ISO 3166-2:AR → primera letra del iso_code del State.
     */
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

    /**
     * Todas las sucursales de una provincia, cacheadas en disco por provincia (TTL 24hs).
     * Todos los CPs de la misma provincia comparten el mismo caché → 1 sola llamada a la API.
     *
     * @return array<int, array{id:string,name:string,address:string,city:string,province:string,postalCode:string,hours:string,latitude:string,longitude:string}>
     */
    private function fetchPickupPointsByProvince(string $baseUrl, string $token, string $customerId, string $provinceCode): array
    {
        $cacheKey = 'pickup_prov_' . $provinceCode;
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

        $points = $this->parseAgencies($response['data']);
        $this->writeCache($cacheKey, $points, 86400);

        return $points;
    }

    /**
     * Fallback: CP de solo 4 dígitos sin dirección. Recorre las provincias usando
     * el caché por provincia; la primera vez es la única llamada costosa, después
     * se lee de disco.
     */
    private function fetchPickupPointsAcrossProvinces(string $baseUrl, string $token, string $customerId, string $postalCode): array
    {
        $all = [];
        foreach (self::AGENCY_PROVINCE_CODES as $provinceCode) {
            $points = $this->fetchPickupPointsByProvince($baseUrl, $token, $customerId, $provinceCode);
            foreach ($points as $point) {
                $all[] = $point;
            }
        }

        return $this->filterPickupPointsByPostalCode($all, $postalCode);
    }

    /**
     * Parseo de agencias (independiente del CP) para poder cachearlas por provincia.
     *
     * @param array<int, array<string, mixed>> $agencies
     *
     * @return array<int, array{id:string,name:string,address:string,city:string,province:string,postalCode:string,hours:string,latitude:string,longitude:string}>
     */
    private function parseAgencies(array $agencies): array
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

            $location = is_array($agency['location'] ?? null) ? $agency['location'] : [];
            $address = is_array($location['address'] ?? null)
                ? $location['address']
                : $location;

            $seen[$agencyCode] = true;
            $points[] = [
                'id' => $agencyCode,
                'name' => trim((string) ($agency['name'] ?? $agency['agency_name'] ?? 'Sucursal Correo Argentino')),
                'address' => trim((string) ($address['streetName'] ?? $address['street_name'] ?? '')) . ' ' . trim((string) ($address['streetNumber'] ?? $address['street_number'] ?? '')),
                'city' => trim((string) ($address['city'] ?? $address['locality'] ?? $address['city_name'] ?? '')),
                'province' => trim((string) ($address['province'] ?? $address['state_name'] ?? '')),
                'postalCode' => (string) ($address['postalCode'] ?? $address['zip_code'] ?? ''),
                'hours' => $this->formatAgencyHours($agency['hours'] ?? $agency['open_hours'] ?? null),
                'latitude' => trim((string) ($location['latitude'] ?? '')),
                'longitude' => trim((string) ($location['longitude'] ?? '')),
            ];
        }

        return $points;
    }

    /**
     * Filtra los puntos (ya cacheados) por coincidencia de CP, en PHP, sin llamar a la API.
     *
     * @param array<int, array<string, mixed>> $points
     *
     * @return array<int, array<string, mixed>>
     */
    private function filterPickupPointsByPostalCode(array $points, string $postalCode): array
    {
        $filtered = [];
        foreach ($points as $point) {
            if (!is_array($point)) {
                continue;
            }

            $raw = (string) ($point['postalCode'] ?? '');
            if ($this->extractPostalCodeDigits($raw) !== $postalCode) {
                continue;
            }

            $filtered[] = $point;
        }

        return $filtered;
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
        return rtrim(_PS_CACHE_DIR_, '/\\') . DIRECTORY_SEPARATOR . 'morocartdrawer' . DIRECTORY_SEPARATOR . $key . '.json';
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
