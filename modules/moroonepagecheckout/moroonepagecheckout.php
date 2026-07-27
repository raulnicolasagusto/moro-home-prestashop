<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Moroonepagecheckout extends Module
{
    public function __construct()
    {
        $this->name = 'moroonepagecheckout';
        $this->tab = 'checkout';
        $this->version = '2.0.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Moro One Page Checkout', [], 'Modules.Moroonepagecheckout.Admin');
        $this->description = $this->trans('Activa una vista de checkout de una sola pagina para Moro Home.', [], 'Modules.Moroonepagecheckout.Admin');
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

        $this->context->smarty->assign([
            'moro_onepagecheckout_enabled' => true,
        ]);
    }

    public function hookActionFrontControllerSetMedia()
    {
        if (!$this->isOrderController()) {
            return;
        }

        $this->context->smarty->assign([
            'moro_onepagecheckout_enabled' => true,
        ]);

        $this->context->controller->registerStylesheet(
            'module-moroonepagecheckout-front',
            'modules/' . $this->name . '/views/css/front-v10.css',
            [
                'media' => 'all',
                'priority' => 210,
            ]
        );

        $this->context->controller->registerJavascript(
            'module-moroonepagecheckout-front',
            'modules/' . $this->name . '/views/js/front.js',
            [
                'position' => 'bottom',
                'priority' => 210,
            ]
        );
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

        if (isset($this->context->controller) && get_class($this->context->controller) === 'OrderController') {
            return true;
        }

        return false;
    }
}
