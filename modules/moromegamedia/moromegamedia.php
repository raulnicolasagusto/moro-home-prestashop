<?php
/**
 * Moro Mega Media — fetch de imágenes nativas para el mega menu del header.
 *
 * Lee la configuración MOD_BLOCKTOPMENU_ITEMS (la misma que usa ps_mainmenu),
 * arma el árbol de categorías top-level + subcategorías + media (imágenes
 * nativas de subcat / productos) y lo pasa a Smarty.
 *
 * - No escribe en BD.
 * - No agrega campos nuevos en el BO.
 * - No crea tabla nueva.
 * - Solo consume clases nativas del core: Configuration, Category, Link, Context.
 *
 * Shim temporal hasta que ps_mainmenu exponga imágenes nativamente (ver AGENTS.md §7.3).
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroMegaMedia extends Module
{
    public function __construct()
    {
        $this->name = 'moromegamedia';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Moro Home';
        $this->need_instance = 0;
        $this->bootstrap = false;

        parent::__construct();

        $this->displayName = $this->trans('Moro Mega Menu Media', [], 'Modules.Moromegamedia.Admin');
        $this->description = $this->trans(
            'Provides native subcategory and product images for the Moro Home mega menu header. Read-only, no database changes.',
            [],
            'Modules.Moromegamedia.Admin'
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

    /**
     * Hook displayHeader: arma $mega_menu_categories + $mega_menu_media.
     */
    public function hookDisplayHeader()
    {
        $id_lang = (int) $this->context->language->id;
        $id_shop = (int) $this->context->shop->id;

        $configuredCategoryIds = $this->getConfiguredCategoryIds();
        if (empty($configuredCategoryIds)) {
            $this->context->smarty->assign([
                'mega_menu_categories' => [],
                'mega_menu_media'      => [],
            ]);
            return '';
        }

        $mega_menu_categories = [];
        $mega_menu_media = [];

        foreach ($configuredCategoryIds as $catId) {
            $cat = new Category((int) $catId, (int) $id_lang, (int) $id_shop);
            if (!Validate::isLoadedObject($cat)) {
                continue;
            }
            if (!$cat->active) {
                continue;
            }

            // Subcategorías directas (ordenadas por position ASC por getChildren)
            $rawSubs = Category::getChildren((int) $catId, (int) $id_lang, true, (int) $id_shop);

            $subNodes = [];
            foreach ($rawSubs as $sub) {
                $subNodes[] = [
                    'id_category' => (int) $sub['id_category'],
                    'name'        => $sub['name'],
                    'url'         => $this->context->link->getCategoryLink(
                        (int) $sub['id_category'], $sub['link_rewrite'], (int) $id_lang
                    ),
                    'link_rewrite' => $sub['link_rewrite'],
                ];
            }

            $mega_menu_categories[] = [
                'id_category' => (int) $cat->id,
                'name'        => $cat->name,
                'url'         => $cat->getLink(),
                'subs'        => $subNodes,
            ];

            // Media: fallback subcats con imagen → productos con imagen → [] (vacío)
            $mega_menu_media[(int) $cat->id] = $this->buildMedia(
                $cat, $rawSubs, (int) $id_lang
            );
        }

        $this->context->smarty->assign([
            'mega_menu_categories' => $mega_menu_categories,
            'mega_menu_media'      => $mega_menu_media,
        ]);

        return '';
    }

    /**
     * Lee MOD_BLOCKTOPMENU_ITEMS (mismo config que ps_mainmenu) y devuelve
     * el array de IDs de categorías top-level configuradas.
     *
     * @return int[]
     */
    private function getConfiguredCategoryIds(): array
    {
        $shops = Shop::getContextListShopID();
        $conf = '';
        if (count($shops) > 1) {
            foreach ($shops as $key => $shop_id) {
                $shop_group_id = Shop::getGroupFromShop($shop_id);
                $conf .= (string) ($key > 0 ? ',' : '') .
                    Configuration::get('MOD_BLOCKTOPMENU_ITEMS', null, $shop_group_id, $shop_id);
            }
        } else {
            $shop_id = (int) $shops[0];
            $shop_group_id = Shop::getGroupFromShop($shop_id);
            $conf = (string) Configuration::get('MOD_BLOCKTOPMENU_ITEMS', null, $shop_group_id, $shop_id);
        }

        if (!strlen($conf)) {
            return [];
        }

        $ids = [];
        foreach (explode(',', $conf) as $item) {
            $item = trim($item);
            if (preg_match('/^CAT(\d+)$/', $item, $m)) {
                $ids[] = (int) $m[1];
            }
        }
        return $ids;
    }

    /**
     * Construye el array de media (imágenes) para una categoría top-level,
     * aplicando el fallback: hasta 3 subcats con imagen → productos con imagen.
     *
     * @return array<int, array{image: string, label: string, url: string}>
     */
    private function buildMedia(Category $cat, array $rawSubs, int $id_lang): array
    {
        $images = [];
        $maxImages = 3;

        // 1) Subcategorías con imagen de portada cargada
        foreach ($rawSubs as $sub) {
            if (count($images) >= $maxImages) {
                break;
            }
            $catId = (int) $sub['id_category'];
            if (!$this->categoryHasImage($catId)) {
                continue;
            }
            $images[] = [
                'image' => $this->context->link->getCatImageLink(
                    $sub['link_rewrite'], $catId, 'category_default'
                ),
                'label' => $sub['name'],
                'url'   => $this->context->link->getCategoryLink(
                    $catId, $sub['link_rewrite'], $id_lang
                ),
            ];
        }

        // 2) Si faltan, completar con productos de la categoría
        $remaining = $maxImages - count($images);
        if ($remaining > 0) {
            $products = $cat->getProducts($id_lang, 1, $remaining, 'position', 'ASC');
            if (is_array($products)) {
                foreach ($products as $prod) {
                    if (count($images) >= $maxImages) {
                        break;
                    }
                    $idImage = (int) ($prod['id_image'] ?? 0);
                    if ($idImage <= 0) {
                        continue;
                    }
                    $images[] = [
                        'image' => $this->context->link->getImageLink(
                            (string) $prod['link_rewrite'],
                            (int) $prod['id_product'] . '-' . $idImage,
                            'medium_default'
                        ),
                        'label' => $prod['name'],
                        'url'   => $this->context->link->getProductLink(
                            (int) $prod['id_product'],
                            (string) $prod['link_rewrite'],
                            null,
                            null,
                            $id_lang,
                            (int) $this->context->shop->id
                        ),
                    ];
                }
            }
        }

        return $images;
    }

    /**
     * Detecta si una categoría tiene imagen de portada cargada.
     * Las imágenes de categoría se guardan en _PS_CAT_IMG_DIR_ . {id}.jpg
     * con variantes como {id}-category_default.jpg.
     * Mismo approach que usa ps_mainmenu (líneas 805-819 del módulo).
     */
    private function categoryHasImage(int $catId): bool
    {
        $base = _PS_CAT_IMG_DIR_ . $catId . '.jpg';
        $variant = _PS_CAT_IMG_DIR_ . $catId . '-category_default.jpg';
        return (file_exists($base) && is_file($base))
            || (file_exists($variant) && is_file($variant));
    }
}