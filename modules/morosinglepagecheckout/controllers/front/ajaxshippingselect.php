<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MorosinglepagecheckoutAjaxshippingselectModuleFrontController extends ModuleFrontController
{
    public $ajax = true;
    public $ssl = true;

    public function postProcess()
    {
        header('Content-Type: application/json; charset=utf-8');

        $deliveryType = (string) Tools::getValue('delivery_type');
        $price = (float) Tools::getValue('price');
        $productType = (string) Tools::getValue('product_type', 'CP');
        $productName = (string) Tools::getValue('product_name', 'Correo Argentino');
        $agencyId = trim((string) Tools::getValue('agency_id', ''));
        $agencyName = trim((string) Tools::getValue('agency_name', ''));
        $agencyAddress = trim((string) Tools::getValue('agency_address', ''));
        $agencyPostalCode = trim((string) Tools::getValue('agency_postal_code', ''));

        if (!in_array($deliveryType, ['S', 'D'], true) || $price < 0) {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('La opción de envío seleccionada no es válida.'),
            ]);
        }

        if ($deliveryType === 'S' && $agencyId === '') {
            $this->renderJson([
                'success' => false,
                'error' => $this->module->l('Seleccioná una sucursal para retirar el pedido.'),
            ]);
        }

        $this->context->cookie->__set('moro_spc_shipping_type', $deliveryType);
        $this->context->cookie->__set('moro_spc_shipping_price', (string) $price);
        $this->context->cookie->__set('moro_spc_shipping_product_type', $productType);
        $this->context->cookie->__set('moro_spc_shipping_product_name', $productName);
        $this->context->cookie->__set('moro_spc_shipping_agency_id', $deliveryType === 'S' ? $agencyId : '');
        $this->context->cookie->__set('moro_spc_shipping_agency_name', $deliveryType === 'S' ? $agencyName : '');
        $this->context->cookie->__set('moro_spc_shipping_agency_address', $deliveryType === 'S' ? $agencyAddress : '');
        $this->context->cookie->__set('moro_spc_shipping_agency_postal_code', $deliveryType === 'S' ? $agencyPostalCode : '');
        $this->context->cookie->write();

        $cart = $this->context->cart;
        if (Validate::isLoadedObject($cart)) {
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
        }

        $this->renderJson(['success' => true]);
    }

    private function renderJson(array $payload): void
    {
        exit(json_encode($payload));
    }
}
