<?php

class MorosinglepagecheckoutAjaxcarriersModuleFrontController extends ModuleFrontController
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

        if (!Validate::isLoadedObject($cart) || !(int) $cart->id_address_delivery) {
            $this->renderJson([
                'success' => false,
                'message' => $this->module->l('Guardá la dirección para ver los métodos de envío.'),
            ]);
        }

        $options = $this->formatDeliveryOptions($cart);

        $this->renderJson([
            'success' => true,
            'id_address' => (int) $cart->id_address_delivery,
            'selected_option' => $this->getSelectedOption($cart),
            'options' => $options,
            'totals' => $this->formatCartTotals($cart),
        ]);
    }

    private function formatDeliveryOptions(Cart $cart)
    {
        $deliveryOptionList = $cart->getDeliveryOptionList(null, true);
        $idAddress = (int) $cart->id_address_delivery;

        if (!isset($deliveryOptionList[$idAddress])) {
            return [];
        }

        $options = [];

        foreach ($deliveryOptionList[$idAddress] as $key => $option) {
            $carrierNames = [];
            $carrierDelay = [];
            $logo = null;

            foreach ($option['carrier_list'] as $carrierData) {
                if (!isset($carrierData['instance']) || !Validate::isLoadedObject($carrierData['instance'])) {
                    continue;
                }

                $carrierNames[] = $carrierData['instance']->name;

                if (is_array($carrierData['instance']->delay) && !empty($carrierData['instance']->delay[(int) $this->context->language->id])) {
                    $carrierDelay[] = $carrierData['instance']->delay[(int) $this->context->language->id];
                } elseif (is_string($carrierData['instance']->delay) && $carrierData['instance']->delay !== '') {
                    $carrierDelay[] = $carrierData['instance']->delay;
                }

                if (!$logo && !empty($carrierData['logo'])) {
                    $logo = $carrierData['logo'];
                }
            }

            $options[] = [
                'key' => $key,
                'name' => implode(' + ', $carrierNames),
                'delay' => implode(' ', array_unique($carrierDelay)),
                'price' => $option['is_free']
                    ? $this->module->l('Gratis')
                    : Tools::displayPrice((float) $option['total_price_with_tax']),
                'is_free' => (bool) $option['is_free'],
                'is_best_price' => (bool) $option['is_best_price'],
                'is_best_grade' => (bool) $option['is_best_grade'],
                'logo' => $logo,
            ];
        }

        return $options;
    }

    private function getSelectedOption(Cart $cart)
    {
        $selected = $cart->getDeliveryOption(null, true, false);

        if (is_array($selected) && isset($selected[(int) $cart->id_address_delivery])) {
            return $selected[(int) $cart->id_address_delivery];
        }

        return null;
    }

    private function formatCartTotals(Cart $cart)
    {
        return [
            'shipping' => Tools::displayPrice((float) $cart->getOrderTotal(true, Cart::ONLY_SHIPPING)),
            'total' => Tools::displayPrice((float) $cart->getOrderTotal(true, Cart::BOTH)),
        ];
    }

    private function renderJson(array $payload)
    {
        exit(json_encode($payload));
    }
}
