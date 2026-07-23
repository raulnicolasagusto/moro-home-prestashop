<?php
/**
 * Moro Cart Drawer.
 *
 * Renderiza un cart lateral (drawer) que se abre al clickear el icono de carrito
 * del header. Front-end primero: en esta etapa el drawer muestra el estado vacío.
 * Los items se inyectan via JS (window.moroCart.renderItems) o, más adelante,
 * via AJAX contra ps_shoppingcart.
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroCartDrawer extends Module
{
    public function __construct()
    {
        $this->name = 'morocartdrawer';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = false;

        parent::__construct();

        $this->displayName = $this->trans('Moro Cart Drawer', [], 'Modules.Morocartdrawer.Admin');
        $this->description = $this->trans(
            'Provides a slide-in cart drawer triggered by the header cart icon.',
            [],
            'Modules.Morocartdrawer.Admin'
        );
        $this->ps_versions_compliancy = ['min' => '8.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayHeader')
            && $this->registerHook('displayFooter');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->registerJavascript(
            'moro-cart-drawer',
            'modules/' . $this->name . '/views/js/moro-cart-drawer.js',
            ['position' => 'bottom', 'priority' => 150]
        );

        return '';
    }

    public function hookDisplayFooter()
    {
        $cartUrl = $this->context->link->getPageLink('cart');
        $orderUrl = $this->context->link->getPageLink('order');
        $newProductsUrl = $this->context->link->getCategoryLink(
            (int) Configuration::get('PS_ROOT_CATEGORY'),
            'new',
            (int) $this->context->language->id
        );

        $ajaxUrl = $this->context->link->getModuleLink(
            'morocartdrawer', 'ajax', [], true
        );

        $this->context->smarty->assign([
            'moro_cart_drawer_cart_url'   => $cartUrl,
            'moro_cart_drawer_order_url'  => $orderUrl,
            'moro_cart_drawer_new_url'    => $newProductsUrl,
            'moro_cart_drawer_ajax_url'   => $ajaxUrl,
            'moro_cart_drawer_ps_data'    => json_encode([
                'ajaxUrl' => $ajaxUrl,
            ]),
        ]);

        return $this->display(__FILE__, 'views/templates/hook/cartdrawer.tpl');
    }
}
