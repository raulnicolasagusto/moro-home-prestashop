<?php
/**
 * Moro Announcement Bar.
 *
 * Shows a configurable rotating announcement bar above the Moro Home header.
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroAnnouncementBar extends Module
{
    private const CONFIG_KEY = 'MORO_ANNOUNCEMENT_BAR_ITEMS';
    private const INTERVAL_KEY = 'MORO_ANNOUNCEMENT_BAR_INTERVAL';
    private const ENABLED_KEY = 'MORO_ANNOUNCEMENT_BAR_ENABLED';

    public function __construct()
    {
        $this->name = 'moroannouncementbar';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Moro Announcement Bar', [], 'Modules.Moroannouncementbar.Admin');
        $this->description = $this->trans(
            'Displays a rotating announcement bar above the header.',
            [],
            'Modules.Moroannouncementbar.Admin'
        );
        $this->ps_versions_compliancy = ['min' => '8.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayBanner')
            && $this->registerHook('displayHeader')
            && Configuration::updateValue(self::ENABLED_KEY, 1)
            && Configuration::updateValue(self::INTERVAL_KEY, 5000)
            && Configuration::updateValue(self::CONFIG_KEY, json_encode($this->getDefaultItems()));
    }

    public function uninstall()
    {
        Configuration::deleteByName(self::ENABLED_KEY);
        Configuration::deleteByName(self::INTERVAL_KEY);
        Configuration::deleteByName(self::CONFIG_KEY);

        return parent::uninstall();
    }

    public function getContent()
    {
        $output = '';

        if (Tools::isSubmit('submitMoroAnnouncementBar')) {
            $enabled = (int) Tools::getValue(self::ENABLED_KEY, 0);
            $interval = max(1000, (int) Tools::getValue(self::INTERVAL_KEY, 5000));

            $items = [];
            for ($index = 0; $index < 4; ++$index) {
                $items[] = [
                    'message' => trim((string) Tools::getValue('MORO_ANNOUNCEMENT_MESSAGE_' . $index, '')),
                    'url' => trim((string) Tools::getValue('MORO_ANNOUNCEMENT_URL_' . $index, '')),
                    'background' => trim((string) Tools::getValue('MORO_ANNOUNCEMENT_BACKGROUND_' . $index, '#4c5f65')),
                    'color' => trim((string) Tools::getValue('MORO_ANNOUNCEMENT_COLOR_' . $index, '#ffffff')),
                ];
            }

            Configuration::updateValue(self::ENABLED_KEY, $enabled);
            Configuration::updateValue(self::INTERVAL_KEY, $interval);
            Configuration::updateValue(self::CONFIG_KEY, json_encode($items));

            $output .= $this->displayConfirmation($this->trans('Settings updated.', [], 'Admin.Notifications.Success'));
        }

        return $output . $this->renderForm();
    }

    public function hookDisplayHeader()
    {
        if (!(bool) Configuration::get(self::ENABLED_KEY)) {
            return '';
        }

        $this->context->controller->registerStylesheet(
            'moro-announcement-bar',
            'modules/' . $this->name . '/views/css/moro-announcement-bar-v3.css',
            ['media' => 'all', 'priority' => 150]
        );

        $this->context->controller->registerJavascript(
            'moro-announcement-bar',
            'modules/' . $this->name . '/views/js/moro-announcement-bar.js',
            ['position' => 'bottom', 'priority' => 150]
        );

        return '';
    }

    public function hookDisplayBanner()
    {
        if (!(bool) Configuration::get(self::ENABLED_KEY)) {
            return '';
        }

        $items = array_values(array_filter($this->getItems(), static function (array $item): bool {
            return $item['message'] !== '';
        }));

        if (empty($items)) {
            return '';
        }

        $this->context->smarty->assign([
            'moro_announcement_items' => $items,
            'moro_announcement_interval' => max(1000, (int) Configuration::get(self::INTERVAL_KEY)),
        ]);

        return $this->display(__FILE__, 'views/templates/hook/announcementbar.tpl');
    }

    private function renderForm(): string
    {
        $items = $this->getItems();

        $fields = [
            [
                'type' => 'switch',
                'label' => $this->trans('Enabled', [], 'Admin.Global'),
                'name' => self::ENABLED_KEY,
                'is_bool' => true,
                'values' => [
                    ['id' => 'enabled_on', 'value' => 1, 'label' => $this->trans('Yes', [], 'Admin.Global')],
                    ['id' => 'enabled_off', 'value' => 0, 'label' => $this->trans('No', [], 'Admin.Global')],
                ],
            ],
            [
                'type' => 'text',
                'label' => $this->trans('Rotation interval in milliseconds', [], 'Modules.Moroannouncementbar.Admin'),
                'name' => self::INTERVAL_KEY,
            ],
        ];

        for ($index = 0; $index < 4; ++$index) {
            $number = $index + 1;
            $fields[] = [
                'type' => 'text',
                'label' => $this->trans('Message %number%', ['%number%' => $number], 'Modules.Moroannouncementbar.Admin'),
                'name' => 'MORO_ANNOUNCEMENT_MESSAGE_' . $index,
            ];
            $fields[] = [
                'type' => 'text',
                'label' => $this->trans('Optional link %number%', ['%number%' => $number], 'Modules.Moroannouncementbar.Admin'),
                'name' => 'MORO_ANNOUNCEMENT_URL_' . $index,
            ];
            $fields[] = [
                'type' => 'color',
                'label' => $this->trans('Background color %number%', ['%number%' => $number], 'Modules.Moroannouncementbar.Admin'),
                'name' => 'MORO_ANNOUNCEMENT_BACKGROUND_' . $index,
            ];
            $fields[] = [
                'type' => 'color',
                'label' => $this->trans('Text color %number%', ['%number%' => $number], 'Modules.Moroannouncementbar.Admin'),
                'name' => 'MORO_ANNOUNCEMENT_COLOR_' . $index,
            ];
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = (int) Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int) Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitMoroAnnouncementBar';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name
            . '&tab_module=' . $this->tab
            . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->fields_value[self::ENABLED_KEY] = (int) Configuration::get(self::ENABLED_KEY);
        $helper->fields_value[self::INTERVAL_KEY] = (int) Configuration::get(self::INTERVAL_KEY);
        foreach ($items as $index => $item) {
            $helper->fields_value['MORO_ANNOUNCEMENT_MESSAGE_' . $index] = $item['message'];
            $helper->fields_value['MORO_ANNOUNCEMENT_URL_' . $index] = $item['url'];
            $helper->fields_value['MORO_ANNOUNCEMENT_BACKGROUND_' . $index] = $item['background'];
            $helper->fields_value['MORO_ANNOUNCEMENT_COLOR_' . $index] = $item['color'];
        }

        return $helper->generateForm([[
            'form' => [
                'legend' => [
                    'title' => $this->trans('Announcement bar settings', [], 'Modules.Moroannouncementbar.Admin'),
                    'icon' => 'icon-bullhorn',
                ],
                'input' => $fields,
                'submit' => [
                    'title' => $this->trans('Save', [], 'Admin.Actions'),
                ],
            ],
        ]]);
    }

    /**
     * @return array<int, array{message: string, url: string, background: string, color: string}>
     */
    private function getItems(): array
    {
        $raw = (string) Configuration::get(self::CONFIG_KEY);
        $decoded = json_decode($raw, true);
        if (!is_array($decoded)) {
            return $this->getDefaultItems();
        }

        $items = [];
        foreach ($decoded as $item) {
            if (!is_array($item)) {
                continue;
            }
            $items[] = [
                'message' => (string) ($item['message'] ?? ''),
                'url' => (string) ($item['url'] ?? ''),
                'background' => (string) ($item['background'] ?? '#4c5f65'),
                'color' => (string) ($item['color'] ?? '#ffffff'),
            ];
        }

        return array_pad(array_slice($items, 0, 4), 4, [
            'message' => '',
            'url' => '',
            'background' => '#4c5f65',
            'color' => '#ffffff',
        ]);
    }

    /**
     * @return array<int, array{message: string, url: string, background: string, color: string}>
     */
    private function getDefaultItems(): array
    {
        return [
            [
                'message' => 'Envíos gratis para compras superiores a $120.000',
                'url' => '',
                'background' => '#4c5f65',
                'color' => '#ffffff',
            ],
            [
                'message' => '15% de descuento pagando con transferencia',
                'url' => '',
                'background' => '#925a49',
                'color' => '#ffffff',
            ],
            [
                'message' => '3 cuotas sin interés en toda la web',
                'url' => '',
                'background' => '#d46211',
                'color' => '#ffffff',
            ],
            [
                'message' => 'Visitá nuestro catálogo mayorista',
                'url' => 'https://www.canva.com/design/DAGxH9y2w5Q/gSP_4_gS49mnlt5sADCRjg/edit',
                'background' => '#f3eee0',
                'color' => '#1c1b1b',
            ],
        ];
    }
}
