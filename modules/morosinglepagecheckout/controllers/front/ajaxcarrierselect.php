<?php

class MorosinglepagecheckoutAjaxcarrierselectModuleFrontController extends ModuleFrontController
{
    public $ajax = true;
    public $ssl = true;

    public function postProcess()
    {
        header('Content-Type: application/json');

        if (Tools::getValue('token') !== Tools::getToken(false)) {
            $this->renderJson([
                'success' => false,
                'message' => $this->module->l('La sesión expiró. Actualizá la página e intentá de nuevo.'),
            ]);
        }

        $cart = $this->context->cart;
        $optionKey = (string) Tools::getValue('delivery_option');

        if (!Validate::isLoadedObject($cart) || !(int) $cart->id_address_delivery) {
            $this->renderJson([
                'success' => false,
                'message' => $this->module->l('Guardá la dirección antes de seleccionar el envío.'),
            ]);
        }

        $deliveryOptionList = $cart->getDeliveryOptionList(null, true);
        $idAddress = (int) $cart->id_address_delivery;

        if (!isset($deliveryOptionList[$idAddress][$optionKey])) {
            $this->renderJson([
                'success' => false,
                'message' => $this->module->l('El método de envío seleccionado ya no está disponible.'),
            ]);
        }

        $cart->setDeliveryOption([$idAddress => $optionKey]);
        $cart->update();

        $this->renderJson([
            'success' => true,
            'selected_option' => $optionKey,
            'message' => $this->module->l('Método de envío seleccionado.'),
            'totals' => [
                'shipping' => Tools::displayPrice((float) $cart->getOrderTotal(true, Cart::ONLY_SHIPPING)),
                'total' => Tools::displayPrice((float) $cart->getOrderTotal(true, Cart::BOTH)),
            ],
        ]);
    }

    private function renderJson(array $payload)
    {
        exit(json_encode($payload));
    }
}
