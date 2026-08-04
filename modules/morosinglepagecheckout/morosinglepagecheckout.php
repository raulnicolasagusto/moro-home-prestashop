<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Morosinglepagecheckout extends Module
{
    private static $processingOrders = [];

    public function __construct()
    {
        $this->name = 'morosinglepagecheckout';
        $this->tab = 'checkout';
        $this->version = '1.1.4';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Moro Single Page Checkout', [], 'Modules.Morosinglepagecheckout.Admin');
        $this->description = $this->trans('Checkout custom de una sola pagina para Moro Home.', [], 'Modules.Morosinglepagecheckout.Admin');
        $this->ps_versions_compliancy = [
            'min' => '8.0.0',
            'max' => _PS_VERSION_,
        ];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('actionFrontControllerInitAfter')
            && $this->registerHook('actionFrontControllerSetMedia')
            && $this->registerHook('actionValidateOrder')
            && $this->registerHook('actionOrderStatusPostUpdate')
            && $this->installDb();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function enable($force_all = false)
    {
        if (parent::enable($force_all)) {
            $this->registerHook('actionFrontControllerInitAfter');
            $this->registerHook('actionFrontControllerSetMedia');
            $this->registerHook('actionValidateOrder');
            $this->registerHook('actionOrderStatusPostUpdate');
            $this->installDb();
            return true;
        }

        return false;
    }

    public function hookActionValidateOrder(array $params)
    {
        try {
            if (empty($params['order']) || !Validate::isLoadedObject($params['order'])) {
                return;
            }

            /** @var Order $order */
            $order = $params['order'];
            $cart = !empty($params['cart']) && Validate::isLoadedObject($params['cart'])
                ? $params['cart']
                : new Cart((int) $order->id_cart);

            $this->importCorreoShipmentForOrder($order, $cart, 'validate_order');
            $this->clearShippingCookies();
        } catch (Throwable $exception) {
            PrestaShopLogger::addLog('Moro SPC Correo import throwable: ' . $exception->getMessage(), 3, null, 'Order', isset($order) ? (int) $order->id : 0, true);
        }
    }

    private function clearShippingCookies(): void
    {
        $cookie = $this->context->cookie;
        foreach (['type', 'price', 'product_type', 'product_name', 'delay', 'agency_id', 'agency_name', 'agency_address', 'agency_postal_code', 'agency_hours'] as $suffix) {
            $cookie->__unset('moro_spc_shipping_' . $suffix);
        }
        $cookie->write();
    }

    public function hookActionOrderStatusPostUpdate(array $params)
    {
        if (empty($params['id_order'])) {
            return;
        }

        $order = new Order((int) $params['id_order']);
        if (!Validate::isLoadedObject($order) || !$this->isPaidOrder($order)) {
            return;
        }

        $cart = new Cart((int) $order->id_cart);
        $this->hookActionValidateOrder([
            'order' => $order,
            'cart' => $cart,
        ]);
    }

    public function hookActionFrontControllerInitAfter()
    {
        if (!$this->isOrderController()) {
            return;
        }

        Tools::redirect($this->context->link->getModuleLink($this->name, 'checkout'));
    }

    public function hookActionFrontControllerSetMedia()
    {
        if (!$this->isSinglePageCheckoutController()) {
            return;
        }

        $this->context->controller->registerStylesheet(
            'module-morosinglepagecheckout-front',
            'modules/' . $this->name . '/views/css/front-v9.css',
            [
                'media' => 'all',
                'priority' => 210,
                'version' => $this->version,
            ]
        );

        $this->context->controller->registerJavascript(
            'module-morosinglepagecheckout-front',
            'modules/' . $this->name . '/views/js/front-v11.js',
            [
                'position' => 'bottom',
                'priority' => 210,
                'version' => $this->version,
            ]
        );

        $this->registerMercadoPagoAssets();
    }

    private function registerMercadoPagoAssets()
    {
        if (!Module::isEnabled('mercadopago')) {
            return;
        }

        $modulePath = _PS_MODULE_DIR_ . 'mercadopago/';
        if (!is_dir($modulePath)) {
            return;
        }

        $cssFiles = [
            'views/client/css/checkout-shared.css',
            'views/client/css/card-checkout.css',
            'views/client/css/preference-checkout.css',
            'views/client/css/pix-checkout.css',
            'views/client/css/ticket-payment.css',
            'views/client/css/pse-checkout.css',
            'views/client/css/yape-checkout.css',
        ];

        foreach ($cssFiles as $index => $cssFile) {
            if (!file_exists($modulePath . $cssFile)) {
                continue;
            }

            $this->context->controller->registerStylesheet(
                'moro-spc-mercadopago-css-' . $index,
                'modules/mercadopago/' . $cssFile,
                [
                    'media' => 'all',
                    'priority' => 220 + $index,
                ]
            );
        }

        $this->context->controller->registerJavascript(
            'moro-spc-mercadopago-sdk',
            'https://sdk.mercadopago.com/js/v2',
            [
                'position' => 'head',
                'priority' => 5,
                'server' => 'remote',
            ]
        );

        $jsFiles = [
            'views/client/js/masks.js',
            'views/client/js/document-validator.js',
            'views/client/js/card-checkout.js',
            'views/client/js/preference-checkout.js',
            'views/client/js/pix-checkout.js',
            'views/client/js/ticket-checkout.js',
            'views/client/js/pse-checkout.js',
            'views/client/js/yape-checkout.js',
        ];

        foreach ($jsFiles as $index => $jsFile) {
            if (!file_exists($modulePath . $jsFile)) {
                continue;
            }

            $this->context->controller->registerJavascript(
                'moro-spc-mercadopago-js-' . $index,
                'modules/mercadopago/' . $jsFile,
                [
                    'position' => 'bottom',
                    'priority' => 220 + $index,
                ]
            );
        }
    }

    private function installDb()
    {
        $selectionTable = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'moro_spc_shipping_selection` (
            `id_cart` INT UNSIGNED NOT NULL,
            `delivery_type` CHAR(1) NOT NULL,
            `price` DECIMAL(20,6) NOT NULL DEFAULT 0.000000,
            `product_type` VARCHAR(32) NOT NULL DEFAULT "CP",
            `product_name` VARCHAR(255) NOT NULL DEFAULT "",
            `agency_id` VARCHAR(64) NOT NULL DEFAULT "",
            `agency_name` VARCHAR(255) NOT NULL DEFAULT "",
            `agency_address` VARCHAR(255) NOT NULL DEFAULT "",
            `agency_postal_code` VARCHAR(16) NOT NULL DEFAULT "",
            `date_add` DATETIME NOT NULL,
            `date_upd` DATETIME NOT NULL,
            PRIMARY KEY (`id_cart`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8mb4;';

        $shipmentTable = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'moro_spc_correo_shipments` (
            `id_order` INT UNSIGNED NOT NULL,
            `id_cart` INT UNSIGNED NOT NULL,
            `delivery_type` CHAR(1) NOT NULL DEFAULT "",
            `agency_id` VARCHAR(64) NOT NULL DEFAULT "",
            `tracking_number` VARCHAR(128) NOT NULL DEFAULT "",
            `status` VARCHAR(32) NOT NULL DEFAULT "",
            `payload` MEDIUMTEXT NULL,
            `response` MEDIUMTEXT NULL,
            `error` TEXT NULL,
            `date_add` DATETIME NOT NULL,
            `date_upd` DATETIME NOT NULL,
            PRIMARY KEY (`id_order`),
            KEY `idx_moro_spc_cart` (`id_cart`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8mb4;';

        return Db::getInstance()->execute($selectionTable)
            && Db::getInstance()->execute($shipmentTable);
    }

    private function shouldImportCorreoShipment(Order $order, Cart $cart)
    {
        $existing = Db::getInstance()->getRow(
            'SELECT `status`, `tracking_number`
            FROM `' . _DB_PREFIX_ . 'moro_spc_correo_shipments`
            WHERE `id_order` = ' . (int) $order->id
        );

        if (is_array($existing) && $existing['status'] === 'created') {
            return false;
        }

        return (int) $cart->id_carrier > 0 || (float) $order->total_shipping_tax_incl >= 0;
    }

    private function importCorreoShipmentForOrder(Order $order, Cart $cart, $source)
    {
        $idOrder = (int) $order->id;
        if ($idOrder <= 0 || isset(self::$processingOrders[$idOrder])) {
            return;
        }

        self::$processingOrders[$idOrder] = true;

        try {
            if (!Validate::isLoadedObject($cart) || !$this->installDb() || !$this->shouldImportCorreoShipment($order, $cart)) {
                return;
            }

            $selection = $this->getShippingSelection((int) $cart->id);
            if (empty($selection) || !in_array($selection['delivery_type'], ['S', 'D'], true)) {
                $this->recordShipmentAttempt($order, $cart, null, null, 'skipped', 'No hay seleccion de envio Correo Argentino para este carrito. Fuente: ' . (string) $source);
                return;
            }

            if (!$this->isPaidOrRecoverableMercadoPagoOrder($order, $cart)) {
                return;
            }

            $this->recoverMercadoPagoOrderStateIfNeeded($order, $cart);

            $address = new Address((int) $order->id_address_delivery);
            $customer = new Customer((int) $order->id_customer);
            if (!Validate::isLoadedObject($address) || !Validate::isLoadedObject($customer)) {
                $this->recordShipmentAttempt($order, $cart, $selection, null, 'error', 'No se pudo cargar direccion o cliente del pedido.');
                return;
            }

            $authContext = $this->getCorreoAuthContext();
            if (!$authContext['ok']) {
                $this->recordShipmentAttempt($order, $cart, $selection, null, 'error', $authContext['error']);
                return;
            }

            $payload = $this->buildShippingImportPayload($order, $cart, $customer, $address, $selection, $authContext['customerId']);
            $response = $this->doJsonRequest(
                $authContext['baseUrl'] . '/shipping/import',
                $payload,
                [
                    'Authorization: Bearer ' . $authContext['token'],
                    'Content-Type: application/json',
                ],
                'POST',
                20
            );

            if (!$response['ok']) {
                $error = $this->extractApiError($response);
                $this->recordShipmentAttempt($order, $cart, $selection, $payload, 'error', $error, $response['data']);
                PrestaShopLogger::addLog('Moro SPC Correo import failed for order ' . $idOrder . ': ' . $error, 3, null, 'Order', $idOrder, true);
                return;
            }

            $trackingNumber = $this->extractTrackingNumber($response['data']);
            $this->recordShipmentAttempt($order, $cart, $selection, $payload, 'created', '', $response['data'], $trackingNumber);
            $this->updateOrderCarrierTracking($idOrder, $trackingNumber);
            $this->addOrderPrivateMessage($order, $this->buildShipmentSuccessMessage($selection, $response['data'], $trackingNumber));
        } catch (Throwable $exception) {
            PrestaShopLogger::addLog('Moro SPC Correo import failed in ' . (string) $source . ': ' . $exception->getMessage(), 3, null, 'Order', $idOrder, true);
        } finally {
            unset(self::$processingOrders[$idOrder]);
        }
    }

    private function isPaidOrder(Order $order)
    {
        $state = new OrderState((int) $order->current_state);

        return Validate::isLoadedObject($state) && (bool) $state->paid;
    }

    private function isPaidOrRecoverableMercadoPagoOrder(Order $order, Cart $cart)
    {
        if ($this->isPaidOrder($order)) {
            return true;
        }

        if (!$this->isMercadoPagoOrder($order)) {
            return false;
        }

        if ((int) $order->current_state !== 0) {
            return false;
        }

        $requestStatus = strtolower((string) Tools::getValue('status'));
        $requestCollectionStatus = strtolower((string) Tools::getValue('collection_status'));
        if (in_array($requestStatus, ['approved', 'processed'], true) || in_array($requestCollectionStatus, ['approved', 'processed'], true)) {
            return true;
        }

        $transaction = $this->getMercadoPagoTransaction((int) $cart->id);
        if (is_array($transaction)) {
            $status = strtolower((string) ($transaction['payment_status'] ?? ''));
            if (in_array($status, ['approved', 'processed'], true)) {
                return true;
            }
        }

        return (float) $order->total_paid > 0 && (float) $cart->getOrderTotal(true, Cart::BOTH) > 0;
    }

    private function recoverMercadoPagoOrderStateIfNeeded(Order $order, Cart $cart)
    {
        if (!$this->isMercadoPagoOrder($order) || (int) $order->current_state !== 0) {
            return;
        }

        $idState = (int) Configuration::get('MERCADOPAGO_STATUS_1');
        if ($idState <= 0) {
            $idState = (int) Configuration::get('PS_OS_PAYMENT');
        }

        $state = new OrderState($idState);
        if ($idState <= 0 || !Validate::isLoadedObject($state)) {
            PrestaShopLogger::addLog('Moro SPC could not recover Mercado Pago order state for order ' . (int) $order->id, 3, null, 'Order', (int) $order->id, true);
            return;
        }

        $history = new OrderHistory();
        $history->id_order = (int) $order->id;
        $history->changeIdOrderState($idState, (int) $order->id, true);
        $history->addWithemail(true);

        $order->current_state = $idState;
        $order->update();

        Db::getInstance()->update(
            'mp_transactions',
            [
                'payment_status' => pSQL('approved'),
                'payment_id' => pSQL((string) Tools::getValue('payment_id')),
                'received_webhook' => 1,
            ],
            '`cart_id` = ' . (int) $cart->id . ' AND (`payment_status` IS NULL OR `payment_status` != "approved")'
        );

        PrestaShopLogger::addLog('Moro SPC recovered Mercado Pago order state for order ' . (int) $order->id . ' to state ' . $idState, 1, null, 'Order', (int) $order->id, true);
    }

    private function isMercadoPagoOrder(Order $order)
    {
        if (stripos((string) $order->payment, 'Mercado Pago') !== false) {
            return true;
        }

        return is_array($this->getMercadoPagoTransaction((int) $order->id_cart));
    }

    private function getMercadoPagoTransaction($idCart)
    {
        return Db::getInstance()->getRow(
            'SELECT *
            FROM `' . _DB_PREFIX_ . 'mp_transactions`
            WHERE `cart_id` = ' . (int) $idCart . '
            ORDER BY `id_mp_transaction` DESC'
        );
    }

    private function getShippingSelection($idCart)
    {
        $selection = Db::getInstance()->getRow(
            'SELECT *
            FROM `' . _DB_PREFIX_ . 'moro_spc_shipping_selection`
            WHERE `id_cart` = ' . (int) $idCart
        );

        if (is_array($selection) && !empty($selection['delivery_type'])) {
            return $selection;
        }

        $cookie = $this->context->cookie;
        $deliveryType = (string) $cookie->__get('moro_spc_shipping_type');
        if (!in_array($deliveryType, ['S', 'D'], true)) {
            return [];
        }

        return [
            'delivery_type' => $deliveryType,
            'price' => (float) $cookie->__get('moro_spc_shipping_price'),
            'product_type' => (string) $cookie->__get('moro_spc_shipping_product_type') ?: 'CP',
            'product_name' => (string) $cookie->__get('moro_spc_shipping_product_name') ?: 'Correo Argentino',
            'agency_id' => (string) $cookie->__get('moro_spc_shipping_agency_id'),
            'agency_name' => (string) $cookie->__get('moro_spc_shipping_agency_name'),
            'agency_address' => (string) $cookie->__get('moro_spc_shipping_agency_address'),
            'agency_postal_code' => (string) $cookie->__get('moro_spc_shipping_agency_postal_code'),
        ];
    }

    private function buildShippingImportPayload(Order $order, Cart $cart, Customer $customer, Address $address, array $selection, $customerId)
    {
        $addressParts = $this->splitStreetAndNumber((string) $address->address1);
        $dimensions = $this->buildCartDimensions($cart->getProducts());
        $deliveryType = (string) $selection['delivery_type'];

        return [
            'customerId' => (string) $customerId,
            'extOrderId' => (string) $order->id,
            'orderNumber' => (string) $order->reference,
            'sender' => [
                'name' => null,
                'phone' => null,
                'cellPhone' => null,
                'email' => null,
                'originAddress' => [
                    'streetName' => null,
                    'streetNumber' => null,
                    'floor' => null,
                    'apartment' => null,
                    'city' => null,
                    'provinceCode' => null,
                    'postalCode' => null,
                ],
            ],
            'recipient' => [
                'name' => trim((string) $address->firstname . ' ' . (string) $address->lastname),
                'phone' => (string) $address->phone,
                'cellPhone' => (string) $address->phone_mobile,
                'email' => (string) $customer->email,
            ],
            'shipping' => [
                'deliveryType' => $deliveryType,
                'agency' => $deliveryType === 'S' ? (string) $selection['agency_id'] : null,
                'address' => [
                    'streetName' => $addressParts['streetName'],
                    'streetNumber' => $addressParts['streetNumber'],
                    'floor' => substr((string) $address->address2, 0, 3),
                    'apartment' => '',
                    'city' => (string) $address->city,
                    'provinceCode' => $this->getProvinceCodeFromAddress($address),
                    'postalCode' => preg_replace('/\D+/', '', (string) $address->postcode),
                ],
                'productType' => (string) ($selection['product_type'] ?: 'CP'),
                'weight' => (int) $dimensions['weight'],
                'declaredValue' => (float) max(1, $order->total_products_wt),
                'height' => (int) $dimensions['height'],
                'length' => (int) $dimensions['length'],
                'width' => (int) $dimensions['width'],
            ],
        ];
    }

    private function recordShipmentAttempt(Order $order, Cart $cart, $selection, $payload, $status, $error = '', $response = null, $trackingNumber = '')
    {
        Db::getInstance()->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'moro_spc_correo_shipments`
            (`id_order`, `id_cart`, `delivery_type`, `agency_id`, `tracking_number`, `status`, `payload`, `response`, `error`, `date_add`, `date_upd`)
            VALUES (
                ' . (int) $order->id . ',
                ' . (int) $cart->id . ',
                "' . pSQL(is_array($selection) ? (string) ($selection['delivery_type'] ?? '') : '') . '",
                "' . pSQL(is_array($selection) ? (string) ($selection['agency_id'] ?? '') : '') . '",
                "' . pSQL((string) $trackingNumber) . '",
                "' . pSQL((string) $status) . '",
                ' . ($payload === null ? 'NULL' : '"' . pSQL(json_encode($payload)) . '"') . ',
                ' . ($response === null ? 'NULL' : '"' . pSQL(json_encode($response)) . '"') . ',
                "' . pSQL((string) $error) . '",
                NOW(),
                NOW()
            )
            ON DUPLICATE KEY UPDATE
                `delivery_type` = VALUES(`delivery_type`),
                `agency_id` = VALUES(`agency_id`),
                `tracking_number` = VALUES(`tracking_number`),
                `status` = VALUES(`status`),
                `payload` = VALUES(`payload`),
                `response` = VALUES(`response`),
                `error` = VALUES(`error`),
                `date_upd` = NOW()'
        );
    }

    private function getCorreoAuthContext()
    {
        $username = (string) Configuration::get('CORREOARGENTINO_USERNAME_MICORREO');
        $password = (string) Configuration::get('CORREOARGENTINO_PASSWORD_MICORREO');
        $authHash = trim((string) Configuration::get('CORREOARGENTINO_AUTH_HASH'));
        $customerId = (string) Configuration::get('CORREOARGENTINO_CUSTOMER_ID');

        $basicAuthHeader = '';
        if ($username !== '' && $password !== '') {
            $basicAuthHeader = 'Basic ' . base64_encode($username . ':' . $password);
        } elseif ($authHash !== '') {
            $basicAuthHeader = strpos(strtolower($authHash), 'basic ') === 0 ? $authHash : 'Basic ' . $authHash;
        }

        if ($basicAuthHeader === '') {
            return ['ok' => false, 'error' => 'Faltan credenciales de Correo Argentino.', 'baseUrl' => '', 'token' => '', 'customerId' => ''];
        }

        $sandbox = (int) Configuration::get('CORREOARGENTINO_SANDBOX_MODE') === 1;
        $baseUrl = $sandbox ? 'https://apitest.correoargentino.com.ar/micorreo/v1' : 'https://api.correoargentino.com.ar/micorreo/v1';
        $tokenResponse = $this->doJsonRequest($baseUrl . '/token', [], ['Authorization: ' . $basicAuthHeader, 'Content-Type: application/json'], 'POST');

        if (!$tokenResponse['ok'] || empty($tokenResponse['data']['token'])) {
            return ['ok' => false, 'error' => 'No se pudo autenticar con Correo Argentino.', 'baseUrl' => '', 'token' => '', 'customerId' => ''];
        }

        if ($customerId === '') {
            return ['ok' => false, 'error' => 'Falta CORREOARGENTINO_CUSTOMER_ID.', 'baseUrl' => '', 'token' => '', 'customerId' => ''];
        }

        return ['ok' => true, 'error' => '', 'baseUrl' => $baseUrl, 'token' => (string) $tokenResponse['data']['token'], 'customerId' => $customerId];
    }

    private function doJsonRequest($url, array $payload, array $headers, $method = 'POST', $timeout = 12)
    {
        $ch = curl_init($url);
        if ($ch === false) {
            return ['ok' => false, 'data' => null, 'httpCode' => 0];
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, (int) $timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, min(5, (int) $timeout));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if ($method !== 'GET') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        }

        $raw = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $decoded = is_string($raw) ? json_decode($raw, true) : null;

        return [
            'ok' => is_array($decoded) && $httpCode >= 200 && $httpCode < 300,
            'data' => is_array($decoded) ? $decoded : ['raw' => (string) $raw],
            'httpCode' => $httpCode,
        ];
    }

    private function buildCartDimensions(array $products)
    {
        $weightGrams = 0;
        $height = 1;
        $width = 1;
        $length = 1;

        foreach ($products as $product) {
            $qty = (int) ($product['cart_quantity'] ?? 1);
            $weightGrams += (int) round((float) ($product['weight'] ?? 0) * 1000 * max(1, $qty));
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

    private function getProvinceCodeFromAddress(Address $address)
    {
        if (!(int) $address->id_state) {
            return '';
        }

        $state = new State((int) $address->id_state);
        if (!Validate::isLoadedObject($state)) {
            return '';
        }

        $isoCode = strtoupper(trim((string) $state->iso_code));
        if (strpos($isoCode, '-') !== false) {
            $parts = explode('-', $isoCode);
            $isoCode = strtoupper((string) end($parts));
        }

        return substr($isoCode, 0, 1);
    }

    private function splitStreetAndNumber($address)
    {
        $address = trim((string) $address);
        if (preg_match('/^(.*?)[,\s]+(\d+[A-Za-z]?)\s*$/', $address, $matches)) {
            return [
                'streetName' => trim($matches[1]) ?: $address,
                'streetNumber' => trim($matches[2]) ?: '0',
            ];
        }

        return [
            'streetName' => $address,
            'streetNumber' => '0',
        ];
    }

    private function extractApiError(array $response)
    {
        $data = is_array($response['data'] ?? null) ? $response['data'] : [];
        $message = (string) ($data['message'] ?? $data['error'] ?? '');

        if ($message === '') {
            $message = 'Correo Argentino rechazo la importacion del envio.';
        }

        return 'HTTP ' . (int) ($response['httpCode'] ?? 0) . ' - ' . $message;
    }

    private function extractTrackingNumber($response)
    {
        if (!is_array($response)) {
            return '';
        }

        return (string) ($response['trackingNumber'] ?? $response['shippingId'] ?? $response['id'] ?? '');
    }

    private function updateOrderCarrierTracking($idOrder, $trackingNumber)
    {
        if ($trackingNumber === '') {
            return;
        }

        Db::getInstance()->update(
            'order_carrier',
            ['tracking_number' => pSQL($trackingNumber)],
            '`id_order` = ' . (int) $idOrder
        );
    }

    private function addOrderPrivateMessage(Order $order, $message)
    {
        $msg = new Message();
        $msg->id_order = (int) $order->id;
        $msg->message = $message;
        $msg->private = 1;
        $msg->add();
    }

    private function buildShipmentSuccessMessage(array $selection, $response, $trackingNumber)
    {
        $message = 'Envio importado en MiCorreo. Modalidad: ' . ((string) $selection['delivery_type'] === 'S' ? 'Retiro en sucursal' : 'Domicilio') . '.';

        if ((string) $selection['delivery_type'] === 'S') {
            $message .= ' Sucursal: ' . (string) $selection['agency_id'] . ' - ' . (string) $selection['agency_name'] . '.';
        }

        if ($trackingNumber !== '') {
            $message .= ' Tracking/Shipping ID: ' . $trackingNumber . '.';
        }

        if (is_array($response) && isset($response['createdAt'])) {
            $message .= ' Creado: ' . (string) $response['createdAt'] . '.';
        }

        return $message;
    }

    private function isSinglePageCheckoutController()
    {
        if (!isset($this->context->controller)) {
            return false;
        }

        return get_class($this->context->controller) === 'MorosinglepagecheckoutCheckoutModuleFrontController';
    }

    private function isOrderController()
    {
        if (!isset($this->context->controller)) {
            return false;
        }

        if (isset($this->context->controller->php_self) && $this->context->controller->php_self === 'order') {
            return true;
        }

        if (Tools::getValue('controller') === 'order') {
            return true;
        }

        return get_class($this->context->controller) === 'OrderController';
    }
}
