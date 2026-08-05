<?php
/**
 * Moro Product Card — card de producto con hover.
 *
 * Activa la card Moro (segunda imagen en hover, "Agregar rápido" y
 * "Ver detalles") en todos los listados donde se renderiza una
 * product card del tema (categorías, búsqueda, best sellers, etc.).
 *
 * El markup lo renderiza el tema (miniatures/product.tpl) cuando la
 * variable Smarty $moro_product_card está seteada; este módulo solo
 * asigna el flag y registra el CSS.
 *
 * - No escribe en BD.
 * - No agrega campos nuevos en el BO.
 * - Los botones reutilizan el add-to-cart nativo del core
 *   ([data-button-action="add-to-cart"] + form POST JSON).
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroProductCard extends Module
{
    public function __construct()
    {
        $this->name = 'moroproductcard';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = false;

        parent::__construct();

        $this->displayName = $this->trans('Moro Product Card', [], 'Modules.Moroproductcard.Admin');
        $this->description = $this->trans(
            'Card de producto con hover: segunda imagen, "Agregar rápido" y "Ver detalles".',
            [],
            'Modules.Moroproductcard.Admin'
        );
        $this->ps_versions_compliancy = ['min' => '8.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function enable($force_all = false)
    {
        if (parent::enable($force_all)) {
            return $this->registerHook('displayHeader');
        }
        return false;
    }

    public function hookDisplayHeader()
    {
        $this->context->smarty->assign('moro_product_card', true);

        $this->context->controller->registerStylesheet(
            'moro-product-card',
            'modules/' . $this->name . '/views/css/moro-product-card.css',
            ['media' => 'all', 'priority' => 150, 'version' => '1.0.2']
        );

        return '';
    }
}
