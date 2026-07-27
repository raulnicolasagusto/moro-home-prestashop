<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Morosinglepagecheckout extends Module
{
    public function __construct()
    {
        $this->name = 'morosinglepagecheckout';
        $this->tab = 'checkout';
        $this->version = '1.0.0';
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
            && $this->registerHook('actionFrontControllerSetMedia');
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
            return true;
        }

        return false;
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
            'modules/' . $this->name . '/views/css/front-v2.css',
            [
                'media' => 'all',
                'priority' => 210,
                'version' => $this->version,
            ]
        );

        $this->context->controller->registerJavascript(
            'module-morosinglepagecheckout-front',
            'modules/' . $this->name . '/views/js/front.js',
            [
                'position' => 'bottom',
                'priority' => 210,
                'version' => $this->version,
            ]
        );
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
