<?php

class MorosinglepagecheckoutCheckoutModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();
        $idCountry = (int) Country::getByIso('AR') ?: (int) Configuration::get('PS_COUNTRY_DEFAULT');

        $this->context->smarty->assign([
            'moro_spc_preview_mode' => false,
            'moro_spc_urls' => [
                'address' => $this->context->link->getModuleLink($this->module->name, 'ajaxaddress'),
                'carriers' => $this->context->link->getModuleLink($this->module->name, 'ajaxcarriers'),
                'carrier_select' => $this->context->link->getModuleLink($this->module->name, 'ajaxcarrierselect'),
                'shipping_quote' => $this->context->link->getModuleLink($this->module->name, 'ajaxshippingquote'),
                'shipping_select' => $this->context->link->getModuleLink($this->module->name, 'ajaxshippingselect'),
                'pickup_points' => $this->context->link->getModuleLink($this->module->name, 'ajaxpickuppoints'),
                'discount' => $this->context->link->getModuleLink($this->module->name, 'ajaxdiscount'),
            ],
            'moro_spc_token' => Tools::getToken(false),
            'moro_spc_id_country' => $idCountry,
            'moro_spc_states' => State::getStatesByIdCountry($idCountry),
            'moro_spc_payment_options' => $this->getPaymentOptions(),
        ]);

        $this->setTemplate('module:morosinglepagecheckout/views/templates/front/checkout.tpl');
    }

    private function getPaymentOptions(): array
    {
        $cart = $this->context->cart;
        if (!Validate::isLoadedObject($cart)) {
            return [];
        }

        $hookOptions = Hook::exec('paymentOptions', ['cart' => $cart], null, true);
        if (!is_array($hookOptions)) {
            return [];
        }

        $paymentOptions = [];
        $index = 0;
        foreach ($hookOptions as $moduleOptions) {
            if (!is_array($moduleOptions)) {
                continue;
            }

            foreach ($moduleOptions as $option) {
                if (!is_object($option) || !method_exists($option, 'toArray')) {
                    continue;
                }

                $optionData = $option->toArray();
                $index++;
                $optionData['id'] = 'moro-spc-payment-option-' . $index;
                $optionData['selected'] = $index === 1;
                $optionData['inputs'] = $this->normalizePaymentInputs($optionData['inputs'] ?? []);
                $paymentOptions[] = $optionData;
            }
        }

        return $paymentOptions;
    }

    private function normalizePaymentInputs($inputs): array
    {
        if (!is_array($inputs)) {
            return [];
        }

        $normalizedInputs = [];
        foreach ($inputs as $name => $input) {
            if (is_array($input)) {
                $normalizedInputs[] = [
                    'type' => (string) ($input['type'] ?? 'hidden'),
                    'name' => (string) ($input['name'] ?? $name),
                    'value' => (string) ($input['value'] ?? ''),
                ];
                continue;
            }

            $normalizedInputs[] = [
                'type' => 'hidden',
                'name' => (string) $name,
                'value' => (string) $input,
            ];
        }

        return $normalizedInputs;
    }
}
