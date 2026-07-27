<?php

class MorosinglepagecheckoutCheckoutModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign([
            'moro_spc_preview_mode' => false,
            'moro_spc_urls' => [
                'address' => $this->context->link->getModuleLink($this->module->name, 'ajaxaddress'),
                'carriers' => $this->context->link->getModuleLink($this->module->name, 'ajaxcarriers'),
                'carrier_select' => $this->context->link->getModuleLink($this->module->name, 'ajaxcarrierselect'),
                'discount' => $this->context->link->getModuleLink($this->module->name, 'ajaxdiscount'),
            ],
        ]);

        $this->setTemplate('module:morosinglepagecheckout/views/templates/front/checkout.tpl');
    }
}
