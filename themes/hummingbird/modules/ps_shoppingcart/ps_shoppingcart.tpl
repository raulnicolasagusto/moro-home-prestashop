{**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Override Moro Home — el bot\u00f3n nativo del cart abre el drawer lateral
 * (data-ps-action="open-cart-drawer") gestionado por el m\u00f3dulo
 * morocartdrawer. El href real se mantiene como fallback por si JS no carga.
 *}

<div id="_desktop_ps_shoppingcart">
  <div class="ps-shoppingcart">
    <div class="header-block d-flex align-items-center blockcart cart-preview {if $cart.products_count> 0}header-block--active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
      {if $cart.products_count> 0}
        <a class="header-block__action-btn pe-md-0"
           rel="nofollow"
           href="{$cart_url}"
           aria-label="{l s='View cart (%d products)' d='Shop.Theme.Checkout' sprintf=[$cart.products_count]}"
           data-ps-action="open-cart-drawer">
      {else}
        <button type="button"
                class="header-block__action-btn pe-md-0"
                aria-label="{l s='View cart' d='Shop.Theme.Checkout'}"
                data-ps-action="open-cart-drawer">
      {/if}

      <i class="material-symbols-outlined header-block__icon" aria-hidden="true">shopping_bag</i>
      <span class="header-block__badge">{$cart.products_count}</span>

      {if $cart.products_count> 0}
        </a>
      {else}
        </button>
      {/if}
    </div>
  </div>
</div>
