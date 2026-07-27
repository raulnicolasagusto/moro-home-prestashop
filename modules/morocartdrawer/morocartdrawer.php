<?php
/**
 * Moro Cart Drawer.
 *
 * Renderiza un cart lateral (drawer) que se abre al clickear el icono de carrito
 * del header. Front-end primero: en esta etapa el drawer muestra el estado vacio.
 * Los items se inyectan via JS (window.moroCart.renderItems) o, mas adelante,
 * via AJAX contra ps_shoppingcart.
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroCartDrawer extends Module
{
    private const SHIPPING_ENABLED_KEY = 'MORO_CARTDRAWER_SHIPPING_ENABLED';
    private const SHIPPING_MODULE_KEY = 'MORO_CARTDRAWER_SHIPPING_MODULE';
    private const SHIPPING_SHOW_HOME_KEY = 'MORO_CARTDRAWER_SHIPPING_SHOW_HOME';
    private const SHIPPING_SHOW_BRANCH_KEY = 'MORO_CARTDRAWER_SHIPPING_SHOW_BRANCH';
    private const SHIPPING_SHOW_PICKUP_POINTS_KEY = 'MORO_CARTDRAWER_SHIPPING_SHOW_PICKUP_POINTS';

    private const KNOWN_CARRIER_LABELS = [
        'correoargentino' => 'Correo Argentino',
    ];

    public function __construct()
    {
        $this->name = 'morocartdrawer';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = true;

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

        // Shipping calc: solo se pasa al Smarty si el toggle esta activo
        // Y el carrier previamente elegido sigue instalado/activo (re-check en vivo).
        $shippingEnabled = false;
        if ((int) Configuration::get(self::SHIPPING_ENABLED_KEY) === 1) {
            $savedCode = (string) Configuration::get(self::SHIPPING_MODULE_KEY);
            $available = $this->getAvailableCarrierModules();
            $validCodes = array_column($available, 'code');
            if ($savedCode !== '' && in_array($savedCode, $validCodes, true)) {
                $shippingEnabled = true;
            }
        }

        $showHome = (int) Configuration::get(self::SHIPPING_SHOW_HOME_KEY);
        $showBranch = (int) Configuration::get(self::SHIPPING_SHOW_BRANCH_KEY);
        $showPickupPoints = (int) Configuration::get(self::SHIPPING_SHOW_PICKUP_POINTS_KEY);

        if ((string) Configuration::get(self::SHIPPING_SHOW_HOME_KEY) === '') {
            $showHome = 0;
        }

        if ((string) Configuration::get(self::SHIPPING_SHOW_BRANCH_KEY) === '') {
            $showBranch = 1;
        }

        if ((string) Configuration::get(self::SHIPPING_SHOW_PICKUP_POINTS_KEY) === '') {
            $showPickupPoints = 1;
        }

        if ($shippingEnabled && $showHome === 0 && $showBranch === 0) {
            $showBranch = 1;
        }

        if ($showBranch !== 1) {
            $showPickupPoints = 0;
        }

        $this->context->smarty->assign([
            'moro_cart_drawer_cart_url'   => $cartUrl,
            'moro_cart_drawer_order_url'  => $orderUrl,
            'moro_cart_drawer_new_url'    => $newProductsUrl,
            'moro_cart_drawer_ajax_url'   => $ajaxUrl,
            'moro_cart_drawer_shipping_enabled' => $shippingEnabled,
            'moro_cart_drawer_shipping_show_home' => (bool) $showHome,
            'moro_cart_drawer_shipping_show_branch' => (bool) $showBranch,
            'moro_cart_drawer_shipping_show_pickup_points' => (bool) $showPickupPoints,
            'moro_cart_drawer_ps_data'    => json_encode([
                'ajaxUrl' => $ajaxUrl,
                'shipping' => [
                    'enabled' => $shippingEnabled,
                    'showHome' => (bool) $showHome,
                    'showBranch' => (bool) $showBranch,
                    'showPickupPoints' => (bool) $showPickupPoints,
                ],
            ]),
        ]);

        return $this->display(__FILE__, 'views/templates/hook/cartdrawer.tpl');
    }

    /* ================================================================
       Back-office config
       ================================================================ */

    public function getContent()
    {
        $output = '';

        if (Tools::isSubmit('submitMoroCartDrawer')) {
            $enabled = (int) Tools::getValue(self::SHIPPING_ENABLED_KEY, 0);
            $moduleCode = (string) Tools::getValue(self::SHIPPING_MODULE_KEY, '');
            $showHome = (int) Tools::getValue(self::SHIPPING_SHOW_HOME_KEY, 0);
            $showBranch = (int) Tools::getValue(self::SHIPPING_SHOW_BRANCH_KEY, 1);
            $showPickupPoints = (int) Tools::getValue(self::SHIPPING_SHOW_PICKUP_POINTS_KEY, 1);

            $available = $this->getAvailableCarrierModules();
            $validCodes = array_column($available, 'code');

            if ($enabled === 1 && count($validCodes) === 0) {
                $enabled = 0;
                $output .= $this->displayError($this->trans(
                    'No hay ningún método de envío instalado.',
                    [],
                    'Modules.Morocartdrawer.Admin'
                ));
            }

            if ($enabled === 1 && !in_array($moduleCode, $validCodes, true)) {
                $moduleCode = $validCodes[0] ?? '';
            }

            if ($enabled === 1 && $showHome === 0 && $showBranch === 0) {
                $showBranch = 1;
                $output .= $this->displayError($this->trans(
                    'Debes activar al menos una opción: envío a domicilio o envío a sucursal.',
                    [],
                    'Modules.Morocartdrawer.Admin'
                ));
            }

            if ($showBranch !== 1) {
                $showPickupPoints = 0;
            }

            Configuration::updateValue(self::SHIPPING_ENABLED_KEY, $enabled);
            Configuration::updateValue(self::SHIPPING_MODULE_KEY, $enabled === 1 ? $moduleCode : '');
            Configuration::updateValue(self::SHIPPING_SHOW_HOME_KEY, $showHome);
            Configuration::updateValue(self::SHIPPING_SHOW_BRANCH_KEY, $showBranch);
            Configuration::updateValue(self::SHIPPING_SHOW_PICKUP_POINTS_KEY, $showPickupPoints);

            $output .= $this->displayConfirmation($this->trans('Settings updated.', [], 'Admin.Notifications.Success'));
        }

        return $output . $this->renderForm();
    }

    private function renderForm(): string
    {
        $available = $this->getAvailableCarrierModules();
        $hasCarriers = count($available) > 0;
        $enabled = (int) Configuration::get(self::SHIPPING_ENABLED_KEY);
        $moduleCode = (string) Configuration::get(self::SHIPPING_MODULE_KEY);
        $showHome = (int) Configuration::get(self::SHIPPING_SHOW_HOME_KEY);
        $showBranch = (int) Configuration::get(self::SHIPPING_SHOW_BRANCH_KEY);
        $showPickupPoints = (int) Configuration::get(self::SHIPPING_SHOW_PICKUP_POINTS_KEY);

        if ((string) Configuration::get(self::SHIPPING_SHOW_HOME_KEY) === '') {
            $showHome = 0;
        }

        if ((string) Configuration::get(self::SHIPPING_SHOW_BRANCH_KEY) === '') {
            $showBranch = 1;
        }

        if ((string) Configuration::get(self::SHIPPING_SHOW_PICKUP_POINTS_KEY) === '') {
            $showPickupPoints = 1;
        }

        if ($showBranch !== 1) {
            $showPickupPoints = 0;
        }

        $inputs = [];

        $inputs[] = [
            'type' => 'switch',
            'label' => $this->trans('Mostrar el calculador de costos de envío en el carrito', [], 'Modules.Morocartdrawer.Admin'),
            'name' => self::SHIPPING_ENABLED_KEY,
            'is_bool' => true,
            'desc' => $hasCarriers
                ? $this->trans('Cuando esta activo, debajo del ultimo item del carrito aparece una seccion para que el cliente calcule el costo de envio ingresando su codigo postal.', [], 'Modules.Morocartdrawer.Admin')
                : $this->trans('Necesitas instalar al menos un metodo de envio para activar esta opcion.', [], 'Modules.Morocartdrawer.Admin'),
            'disabled' => !$hasCarriers,
            'values' => [
                ['id' => 'shipping_on', 'value' => 1, 'label' => $this->trans('Yes', [], 'Admin.Global')],
                ['id' => 'shipping_off', 'value' => 0, 'label' => $this->trans('No', [], 'Admin.Global')],
            ],
        ];

        if ($hasCarriers) {
            $inputs[] = [
                'type' => 'select',
                'label' => $this->trans('Metodo de envio a conectar', [], 'Modules.Morocartdrawer.Admin'),
                'name' => self::SHIPPING_MODULE_KEY,
                'options' => [
                    'query' => $available,
                    'id' => 'code',
                    'name' => 'label',
                ],
            ];

            $inputs[] = [
                'type' => 'switch',
                'label' => $this->trans('Mostrar envio a domicilio', [], 'Modules.Morocartdrawer.Admin'),
                'name' => self::SHIPPING_SHOW_HOME_KEY,
                'is_bool' => true,
                'desc' => $this->trans('Esta opción queda preparada para una etapa siguiente.', [], 'Modules.Morocartdrawer.Admin'),
                'values' => [
                    ['id' => 'show_home_on', 'value' => 1, 'label' => $this->trans('Yes', [], 'Admin.Global')],
                    ['id' => 'show_home_off', 'value' => 0, 'label' => $this->trans('No', [], 'Admin.Global')],
                ],
            ];

            $inputs[] = [
                'type' => 'switch',
                'label' => $this->trans('Mostrar envio a sucursal', [], 'Modules.Morocartdrawer.Admin'),
                'name' => self::SHIPPING_SHOW_BRANCH_KEY,
                'is_bool' => true,
                'desc' => $this->trans('Esta opción es la que funciona por ahora.', [], 'Modules.Morocartdrawer.Admin'),
                'values' => [
                    ['id' => 'show_branch_on', 'value' => 1, 'label' => $this->trans('Yes', [], 'Admin.Global')],
                    ['id' => 'show_branch_off', 'value' => 0, 'label' => $this->trans('No', [], 'Admin.Global')],
                ],
            ];

            $inputs[] = [
                'type' => 'switch',
                'label' => $this->trans('Mostrar lista de puntos de retiro', [], 'Modules.Morocartdrawer.Admin'),
                'name' => self::SHIPPING_SHOW_PICKUP_POINTS_KEY,
                'is_bool' => true,
                'desc' => $this->trans('Esta opción depende de "Mostrar envio a sucursal".', [], 'Modules.Morocartdrawer.Admin'),
                'disabled' => $showBranch !== 1,
                'values' => [
                    ['id' => 'show_pickup_points_on', 'value' => 1, 'label' => $this->trans('Yes', [], 'Admin.Global')],
                    ['id' => 'show_pickup_points_off', 'value' => 0, 'label' => $this->trans('No', [], 'Admin.Global')],
                ],
            ];

            if ($enabled === 1 && $moduleCode !== '') {
                $resolvedLabel = self::KNOWN_CARRIER_LABELS[$moduleCode] ?? ucfirst($moduleCode);
                $inputs[] = [
                    'type' => 'html',
                    'label' => '',
                    'name' => 'moro_cartdrawer_shipping_status',
                    'html_content' => '<div class="alert alert-info" style="margin-top:8px;">'
                        . $this->trans('Conectado a:', [], 'Modules.Morocartdrawer.Admin')
                        . ' <strong>' . htmlspecialchars($resolvedLabel, ENT_QUOTES, 'UTF-8') . '</strong> &#10003;'
                        . '</div>',
                ];
            }
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = (int) Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int) Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitMoroCartDrawer';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name
            . '&tab_module=' . $this->tab
            . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->fields_value[self::SHIPPING_ENABLED_KEY] = $enabled;
        $helper->fields_value[self::SHIPPING_MODULE_KEY] = $moduleCode;
        $helper->fields_value[self::SHIPPING_SHOW_HOME_KEY] = $showHome;
        $helper->fields_value[self::SHIPPING_SHOW_BRANCH_KEY] = $showBranch;
        $helper->fields_value[self::SHIPPING_SHOW_PICKUP_POINTS_KEY] = $showPickupPoints;

        return $helper->generateForm([[
            'form' => [
                'legend' => [
                    'title' => $this->trans('Moro Cart Drawer settings', [], 'Modules.Morocartdrawer.Admin'),
                    'icon' => 'icon-shopping-cart',
                ],
                'input' => $inputs,
                'submit' => [
                    'title' => $this->trans('Save', [], 'Admin.Actions'),
                ],
            ],
        ]]);
    }

    private function getAvailableCarrierModules(): array
    {
        $idLang = (int) $this->context->language->id;

        $carriers = Carrier::getCarriers(
            $idLang,
            true,
            false,
            false,
            null,
            Carrier::CARRIERS_MODULE
        );

        $out = [];
        $seen = [];
        if (is_array($carriers)) {
            foreach ($carriers as $c) {
                $code = (string) ($c['external_module_name'] ?? '');
                if ($code === '' || $code === '0' || isset($seen[$code])) {
                    continue;
                }
                $seen[$code] = true;
                $label = self::KNOWN_CARRIER_LABELS[$code] ?? ucfirst($code);
                $out[] = ['code' => $code, 'label' => $label];
            }
        }

        return $out;
    }
}
