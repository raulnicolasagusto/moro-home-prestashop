<?php
/**
 * Moro Cart Drawer — AJAX controller.
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MoroCartDrawerAjaxModuleFrontController extends ModuleFrontController
{
    public $ajax;

    public function init()
    {
        parent::init();
        $this->ajax = Tools::getValue('ajax') == 1;
    }

    public function display()
    {
        if ($this->ajax) {
            $this->displayAjax();
        } else {
            parent::display();
        }
    }

    public function displayAjax()
    {
        header('Content-Type: application/json; charset=utf-8');

        try {
            $action = Tools::getValue('action', 'getCart');

            switch ($action) {
                case 'getCart':
                    $this->ajaxGetCart();
                    break;
                case 'updateQty':
                    $this->ajaxUpdateQty();
                    break;
                case 'removeItem':
                    $this->ajaxRemoveItem();
                    break;
                default:
                    $this->ajaxGetCart();
                    break;
            }
        } catch (Throwable $e) {
            echo json_encode([
                'success' => false,
                'error'   => $e->getMessage(),
            ]);
        }
        exit;
    }

    private function formatPrice(float $amount): string
    {
        $iso = $this->context->currency->iso_code;
        return $this->context->getCurrentLocale()->formatPrice($amount, $iso);
    }

    private function ajaxGetCart(): void
    {
        $cart = $this->context->cart;
        $products = $cart->getProducts();
        $items = [];

        foreach ($products as $product) {
            $idProduct = (int) $product['id_product'];
            $idProductAttribute = (int) ($product['id_product_attribute'] ?? 0);
            $idImage = (int) ($product['id_image'] ?? $idProduct);

            $imageUrl = '';
            if ($idImage > 0) {
                $imageUrl = $this->context->link->getImageLink(
                    (string) ($product['link_rewrite'] ?? ''),
                    $idProduct . '-' . $idImage,
                    'cart_default'
                );
            }

            $items[] = [
                'id_product'           => $idProduct,
                'id_product_attribute' => $idProductAttribute,
                'name'                 => $product['name'],
                'price'                => $this->formatPrice($product['price_wt']),
                'quantity'             => (int) $product['cart_quantity'],
                'image'                => $imageUrl,
                'url'                  => $this->context->link->getProductLink(
                    $idProduct,
                    $product['link_rewrite'] ?? null,
                    $product['category'] ?? null,
                    null,
                    (int) $this->context->language->id,
                    (int) $this->context->shop->id,
                    $idProductAttribute
                ),
                'variant' => !empty($product['attributes_small'])
                    ? $product['attributes_small']
                    : '',
            ];
        }

        $subtotal = $cart->getOrderTotal(false, 1);

        echo json_encode([
            'success'  => true,
            'items'    => $items,
            'count'    => $cart->nbProducts(),
            'subtotal' => $this->formatPrice($subtotal),
            'empty'    => empty($items),
        ]);
    }

    private function ajaxUpdateQty(): void
    {
        $idProduct = (int) Tools::getValue('id_product', 0);
        $idProductAttribute = (int) Tools::getValue('id_product_attribute', 0);
        $qty = (int) Tools::getValue('qty', 1);
        $op = Tools::getValue('op', 'up');

        if ($idProduct <= 0) {
            echo json_encode(['success' => false, 'error' => 'Invalid product']);
            return;
        }

        $cart = $this->context->cart;

        if ($qty <= 0) {
            $cart->deleteProduct($idProduct, $idProductAttribute);
        } else {
            $cart->updateQty($qty, $idProduct, $idProductAttribute, 0, $op);
        }

        $this->ajaxGetCart();
    }

    private function ajaxRemoveItem(): void
    {
        $idProduct = (int) Tools::getValue('id_product', 0);
        $idProductAttribute = (int) Tools::getValue('id_product_attribute', 0);

        if ($idProduct <= 0) {
            echo json_encode(['success' => false, 'error' => 'Invalid product']);
            return;
        }

        $cart = $this->context->cart;
        $cart->deleteProduct($idProduct, $idProductAttribute);

        $this->ajaxGetCart();
    }
}
