<?php
/**
 * Moro Product Card — card de producto con hover.
 *
 * Activa la card Moro (segunda imagen en hover, "Agregar", "Ver detalles",
 * swatches de color con stock) en todos los listados donde se renderiza una
 * product card del tema (categorías, búsqueda, best sellers, etc.).
 *
 * El markup lo renderiza el tema (miniatures/product.tpl) cuando la
 * variable Smarty $moro_product_card está seteada; este módulo asigna el
 * flag, registra CSS/JS y provee el dato de variantes de color con stock
 * ($product.moro_color_variants) vía el hook actionPresentProduct.
 *
 * - No escribe en BD.
 * - No agrega campos nuevos en el BO.
 * - Los botones reutilizan el add-to-cart nativo del core
 *   ([data-button-action="add-to-cart"] + form POST JSON).
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;

class MoroProductCard extends Module
{
    public function __construct()
    {
        $this->name = 'moroproductcard';
        $this->tab = 'front_office_features';
        $this->version = '1.2.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = false;

        parent::__construct();

        $this->displayName = $this->trans('Moro Product Card', [], 'Modules.Moroproductcard.Admin');
        $this->description = $this->trans(
            'Card de producto con hover: segunda imagen, "Agregar", "Ver detalles" y opciones de color con stock.',
            [],
            'Modules.Moroproductcard.Admin'
        );
        $this->ps_versions_compliancy = ['min' => '8.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayHeader')
            && $this->registerHook('actionPresentProduct')
            && $this->registerHook('actionPresentProductListing');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function enable($force_all = false)
    {
        if (parent::enable($force_all)) {
            return $this->registerHook('displayHeader')
                && $this->registerHook('actionPresentProduct')
                && $this->registerHook('actionPresentProductListing');
        }
        return false;
    }

    public function hookDisplayHeader()
    {
        $this->context->smarty->assign('moro_product_card', true);

        $this->context->controller->registerStylesheet(
            'moro-product-card',
            'modules/' . $this->name . '/views/css/moro-product-card.css',
            ['media' => 'all', 'priority' => 150, 'version' => '1.2.0']
        );

        $this->context->controller->registerJavascript(
            'moro-product-card',
            'modules/' . $this->name . '/views/js/moro-product-card.js',
            ['position' => 'bottom', 'priority' => 150, 'version' => '1.2.1']
        );

        return '';
    }

    /**
     * Provee $product.moro_color_variants: colores del producto con su stock
     * por combinación (incluye los agotados, para poder mostrarlos grises).
     * Se ejecuta por cada producto presentado; solo hace queries si el
     * producto tiene combinaciones.
     */
    /**
     * Hook del LISTADO de productos (categorías, búsqueda, etc.).
     * En PrestaShop 9 los listados usan ProductListingPresenter, que dispara
     * actionPresentProductListing — NO actionPresentProduct.
     */
    public function hookActionPresentProductListing(array $params)
    {
        $this->enrichPresentedProduct($params);
    }

    /**
     * Hook de la página de producto / carrito (ProductPresenter).
     * No aplica a las cards pero registramos el dato por consistencia.
     */
    public function hookActionPresentProduct(array $params)
    {
        $this->enrichPresentedProduct($params);
    }

    /**
     * Provee $product.moro_color_variants (colores con stock por combinación)
     * y $product.moro_card_images (hover = 2da imagen sin filtrar + mapa
     * completo combo → imágenes). Cada proveedor en su propio try/catch:
     * si uno falla, el otro igual corre.
     */
    private function enrichPresentedProduct(array $params): void
    {
        if (!isset($params['presentedProduct'])) {
            return;
        }

        $product = &$params['presentedProduct'];

        // Productos simples no pagan las queries
        if (empty($product['id_product_attribute'])) {
            return;
        }

        $idProduct = (int) ($product['id_product'] ?? 0);
        if ($idProduct <= 0) {
            return;
        }

        // Diagnóstico temporal: escribe a /tmp (no depende del error_log de PHP).
        $debugLog = function (string $msg): void {
            @file_put_contents(
                '/tmp/moroproductcard.log',
                date('c') . ' ' . $msg . PHP_EOL,
                FILE_APPEND
            );
        };

        $debugLog('hook start id=' . $idProduct);

        try {
            $variants = $this->getColorVariantsWithStock($idProduct);
            if (!empty($variants)) {
                $product['moro_color_variants'] = $variants;
                $debugLog('variants OK count=' . count($variants));
            } else {
                $debugLog('variants EMPTY');
            }
        } catch (Throwable $e) {
            $debugLog('variants ERROR: ' . $e->getMessage());
        }

        try {
            $cardImages = $this->getCardImages($idProduct);
            if (!empty($cardImages)) {
                $product['moro_card_images'] = $cardImages;
                $debugLog(
                    'images OK combos=' . count($cardImages['combos'])
                    . ' hover=' . (!empty($cardImages['hover']) ? 'yes' : 'no')
                );
            } else {
                $debugLog('images EMPTY');
            }
        } catch (Throwable $e) {
            $debugLog('images ERROR: ' . $e->getMessage());
        }
    }

    /**
     * Imágenes del producto sin filtrar por combinación.
     *
     * @return array{
     *   hover: array{sm: string, md: string, lg: string}|null,
     *   combos: array<int, array{sm: string, md: string, lg: string, hover: string}>
     * }
     */
    private function getCardImages(int $idProduct): array
    {
        $retriever = new ImageRetriever($this->context->link);
        $allImages = $retriever->getAllProductImages(
            ['id_product' => $idProduct],
            $this->context->language
        );

        if (empty($allImages)) {
            return [];
        }

        $combos = [];
        foreach ($allImages as $image) {
            if (!isset($image['bySize']['default_lg']['url'])) {
                continue;
            }

            $imageUrls = [
                'sm' => $image['bySize']['default_sm']['url'],
                'md' => $image['bySize']['default_md']['url'],
                'lg' => $image['bySize']['default_lg']['url'],
            ];

            foreach ($image['associatedVariants'] as $comboId) {
                if (!isset($combos[$comboId])) {
                    $combos[$comboId] = [
                        'sm' => $imageUrls['sm'],
                        'md' => $imageUrls['md'],
                        'lg' => $imageUrls['lg'],
                        'hover' => '',
                    ];
                } elseif (empty($combos[$comboId]['hover'])) {
                    $combos[$comboId]['hover'] = $imageUrls['lg'];
                }
            }
        }

        $hover = null;
        if (isset($allImages[1], $allImages[1]['bySize']['default_lg']['url'])) {
            $hover = [
                'sm' => $allImages[1]['bySize']['default_sm']['url'],
                'md' => $allImages[1]['bySize']['default_md']['url'],
                'lg' => $allImages[1]['bySize']['default_lg']['url'],
            ];
        }

        return [
            'hover' => $hover,
            'combos' => $combos,
        ];
    }

    /**
     * Lista de colores del producto (is_color_group = 1) con su combinación
     * y stock. Misma lógica de query que Product::getAttributesColorList pero
     * SIN filtrar los agotados e incluyendo quantity por variante.
     *
     * @return array<int, array{
     *   id_product_attribute: int,
     *   id_attribute: int,
     *   name: string,
     *   html_color_code: string,
     *   texture: string,
     *   qty: int
     * }>
     */
    private function getColorVariantsWithStock(int $idProduct): array
    {
        $idLang = (int) $this->context->language->id;
        $idShop = (int) $this->context->shop->id;

        $rows = Db::getInstance()->executeS(
            'SELECT MIN(pac.`id_product_attribute`) AS id_product_attribute, a.`color`, a.`id_attribute`, al.`name`
             FROM `' . _DB_PREFIX_ . 'product_attribute` pa
             ' . Shop::addSqlAssociation('product_attribute', 'pa') . '
             JOIN `' . _DB_PREFIX_ . 'product_attribute_combination` pac
               ON (pac.`id_product_attribute` = product_attribute_shop.`id_product_attribute`)
             JOIN `' . _DB_PREFIX_ . 'attribute` a
               ON (a.`id_attribute` = pac.`id_attribute`)
             JOIN `' . _DB_PREFIX_ . 'attribute_lang` al
               ON (a.`id_attribute` = al.`id_attribute` AND al.`id_lang` = ' . (int) $idLang . ')
             JOIN `' . _DB_PREFIX_ . 'attribute_group` ag
               ON (a.`id_attribute_group` = ag.`id_attribute_group`)
             WHERE pa.`id_product` = ' . (int) $idProduct . '
               AND ag.`is_color_group` = 1
             GROUP BY pa.`id_product`, a.`id_attribute`
             ORDER BY a.`position` ASC'
        );

        if (empty($rows)) {
            return [];
        }

        $variants = [];
        foreach ($rows as $row) {
            $texture = '';

            if (@filemtime(_PS_COL_IMG_DIR_ . $row['id_attribute'] . '.jpg')) {
                $texture = _THEME_COL_DIR_ . $row['id_attribute'] . '.jpg';
            } elseif (Tools::isEmpty($row['color'])) {
                continue;
            }

            $variants[] = [
                'id_product_attribute' => (int) $row['id_product_attribute'],
                'id_attribute' => (int) $row['id_attribute'],
                'name' => $row['name'],
                'html_color_code' => $row['color'],
                'texture' => $texture,
                'qty' => (int) StockAvailable::getQuantityAvailableByProduct(
                    $idProduct,
                    (int) $row['id_product_attribute'],
                    $idShop
                ),
            ];
        }

        return $variants;
    }
}
