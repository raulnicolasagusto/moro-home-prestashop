<div class="moro-opc">
  <main class="moro-opc__main">
    <section class="moro-opc__forms">
      <div class="moro-opc__steps">
        {block name='checkout_process'}
          {render file='checkout/checkout-process.tpl' ui=$checkout_process}
        {/block}
      </div>
    </section>

    <aside class="moro-opc__summary">
      <div class="moro-opc__summary-inner">
        <h2 class="moro-opc__summary-title">{l s='Tu pedido' d='Shop.Theme.Checkout'}</h2>

        <div id="js-checkout-summary" class="js-cart moro-opc__cart" data-refresh-url="{$urls.pages.cart}?ajax=1&action=refresh">

          <div class="moro-opc__cart-products">
            <div class="moro-opc__cart-count">{$cart.summary_string}</div>

            <div class="moro-opc__cart-products-list">
              {foreach from=$cart.products item=product}
                <div class="moro-opc__cart-item">
                  <div class="moro-opc__cart-item-image">
                    <span class="moro-opc__cart-item-badge">{$product.quantity}</span>
                    <a href="{$product.url}" title="{$product.name|escape:'html':'UTF-8'}">
                      {if $product.default_image}
                        <img src="{$product.default_image.bySize.default_xs.url}"
                             srcset="{$product.default_image.bySize.default_xs.url}, {$product.default_image.bySize.default_sm.url} 2x"
                             alt="{$product.name|escape:'html':'UTF-8'}"
                             loading="lazy"
                             class="moro-opc__cart-item-img">
                      {else}
                        <img src="{$urls.no_picture_image.bySize.default_xs.url}"
                             alt=""
                             loading="lazy"
                             class="moro-opc__cart-item-img">
                      {/if}
                    </a>
                  </div>
                  <div class="moro-opc__cart-item-info">
                    <a class="moro-opc__cart-item-name" href="{$product.url}">{$product.name}</a>
                    {if !empty($product.attributes)}
                      <div class="moro-opc__cart-item-attributes">
                        {foreach from=$product.attributes key="attribute" item="value"}
                          <span class="moro-opc__cart-item-attr">{$attribute}: {$value}</span>
                        {/foreach}
                      </div>
                    {/if}
                    <div class="moro-opc__cart-item-meta">
                      <span class="moro-opc__cart-item-total">{$product.total}</span>
                    </div>
                  </div>
                </div>
              {/foreach}
            </div>
          </div>

          <div class="moro-opc__cart-subtotals">
            {foreach from=$cart.subtotals item="subtotal"}
              {if $subtotal && $subtotal.value|count_characters > 0 && $subtotal.type !== 'tax'}
                <div class="moro-opc__cart-line">
                  <span class="moro-opc__cart-label">{$subtotal.label}</span>
                  <span class="moro-opc__cart-value">{if 'discount' == $subtotal.type}-&nbsp;{/if}{$subtotal.value}</span>
                </div>
              {/if}
            {/foreach}
          </div>

          <div class="moro-opc__cart-totals">
            <div class="moro-opc__cart-line moro-opc__cart-line--total">
              <span class="moro-opc__cart-label">{$cart.totals.total.label}</span>
              <span class="moro-opc__cart-value">{$cart.totals.total.value}</span>
            </div>
            {if $cart.subtotals.tax}
              <div class="moro-opc__cart-line moro-opc__cart-line--tax">
                <span class="moro-opc__cart-label">{$cart.subtotals.tax.label}</span>
                <span class="moro-opc__cart-value">{$cart.subtotals.tax.value}</span>
              </div>
            {/if}
          </div>

          {include file='checkout/_partials/cart-voucher.tpl'}
        </div>

        {hook h='displayReassurance'}
      </div>
    </aside>
  </main>

  {include file='checkout/_partials/modal-terms.tpl'}
</div>
