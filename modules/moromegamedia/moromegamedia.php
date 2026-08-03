<?php
/**
 * Moro Mega Media — fetch de imágenes nativas para el mega menu del header.
 *
 * Lee dinámicamente todas las categorías top-level activas (hijas de Home),
 * arma el árbol categorías + subcategorías + media (imágenes nativas de
 * subcat / productos) y lo pasa a Smarty.
 *
 * - No escribe en BD.
 * - No agrega campos nuevos en el BO.
 * - No crea tabla nueva.
 * - Solo consume clases nativas del core: Category, Link, Context.
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
     * Hook displayHeader: arma $mega_menu_categories + $mega_menu_media
     * y registra los assets del buscador en vivo (moro-search-results).
     */
    public function hookDisplayHeader()
    {
        $this->context->controller->registerStylesheet(
            'moro-search-results',
            'modules/' . $this->name . '/views/css/moro-search-results-v3.css',
            ['media' => 'all', 'priority' => 150]
        );

        $this->context->controller->registerJavascript(
            'moro-search-results',
            'modules/' . $this->name . '/views/js/moro-search-results.js',
            ['position' => 'bottom', 'priority' => 150]
        );

        $id_lang = (int) $this->context->language->id;
        $id_shop = (int) $this->context->shop->id;

        $topCategoryIds = $this->getTopLevelCategoryIds();
        if (empty($topCategoryIds)) {
            $this->context->smarty->assign([
                'mega_menu_categories' => [],
                'mega_menu_media'      => [],
            ]);
            return '';
        }

        $mega_menu_categories = [];
        $mega_menu_media = [];

        foreach ($topCategoryIds as $catId) {
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
     * Devuelve los IDs de las categorías top-level activas (hijas directas
     * de la categoría "Inicio" / Home, id_category = 2 por convención de
     * PrestaShop), ordenadas por position ASC.
     *
     * Es dinámico: cuando desde el BO se crea una nueva categoría hija de
     * Home, aparece acá automáticamente sin tocar configuración manual.
     *
     * @return int[]
     */
    private function getTopLevelCategoryIds(): array
    {
        $id_lang = (int) $this->context->language->id;
        $id_shop = (int) $this->context->shop->id;

        // id_category = 2 es "Inicio" / Home por convención en PrestaShop.
        // Usamos getChildren (activo=true) que ya ordena por position ASC.
        $rows = Category::getChildren(2, (int) $id_lang, true, (int) $id_shop);

        $ids = [];
        foreach ($rows as $row) {
            $ids[] = (int) $row['id_category'];
        }
        return $ids;
    }

    /**
     * Construye el array de media (imágenes) para una categoría top-level.
     * Solo incluye subcategorías con imagen de portada cargada en el BO.
     * Máximo 3 cards. Si ninguna subcats tiene imagen, retorna array vacío.
     *
     * @return array<int, array{image: string, label: string, url: string}>
     */
    private function buildMedia(Category $cat, array $rawSubs, int $id_lang): array
    {
        $images = [];
        $maxImages = 3;

        // Solo subcategorías con imagen de portada cargada
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
                    $sub['link_rewrite'], $catId, 'default_lg'
                ),
                'label' => $sub['name'],
                'url'   => $this->context->link->getCategoryLink(
                    $catId, $sub['link_rewrite'], $id_lang
                ),
            ];
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