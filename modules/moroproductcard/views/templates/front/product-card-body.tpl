{**
 * Moro Product Card — bloque inferior: nombre + resumen (50 chars) + precio.
 * El resumen viene del campo "Resumen" del producto; si no está cargado,
 * el espacio queda reservado (min-height en CSS) para no romper la grilla.
 *}
<div class="moro-product-card__body">
  <div class="moro-product-card__info">
    <a
      class="moro-product-card__name"
      href="{$product.url}"
      aria-label="{l s='View product %product_name%' sprintf=['%product_name%' => $product.name] d='Shop.Theme.Catalog'}"
    >
      {$product.name|escape:'html':'UTF-8'}
    </a>

    <p class="moro-product-card__summary"{if empty($product.description_short)} aria-hidden="true"{/if}>
      {if $product.description_short}
        {$product.description_short|strip_tags|truncate:50:'…'|escape:'html':'UTF-8'}
      {/if}
    </p>

    {block name='product_reviews'}
      {hook h='displayProductListReviews' product=$product}
    {/block}
  </div>

  {if $product.show_price}
    <div class="moro-product-card__prices">
      {hook h='displayProductPriceBlock' product=$product type="before_price"}

      <div class="moro-product-card__price" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
        {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
        {if '' !== $smarty.capture.custom_price}
          {$smarty.capture.custom_price nofilter}
        {else}
          {$product.price}
        {/if}
      </div>

      {if $product.has_discount}
        <div class="moro-product-card__regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">
          {$product.regular_price}
        </div>
      {/if}
    </div>
  {/if}
</div>
