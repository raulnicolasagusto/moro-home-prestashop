{**
 * Moro Product Card — bloque inferior: nombre + resumen (50 chars) + opciones
 * de color + precio.
 *
 * - Swatches de color (círculos clickeables) cuando el producto tiene colores.
 *   Los agotados se muestran grises, no clickeables, con tooltip.
 * - "+ opciones" (solo visual) cuando hay variaciones sin colores.
 * - Producto simple: espacio reservado para no romper la grilla.
 * - El resumen viene del campo "Resumen" del producto; si no está cargado,
 *   el espacio queda reservado (min-height en CSS).
 *}

{* Fuente de variantes de color: dato del módulo (con stock) o fallback core *}
{if isset($product.moro_color_variants) && $product.moro_color_variants|@count > 0}
  {assign var='moro_color_variants' value=$product.moro_color_variants}
{elseif $product.main_variants|@count > 0}
  {assign var='moro_color_variants' value=$product.main_variants}
{else}
  {assign var='moro_color_variants' value=[]}
{/if}

{* Mapa combinación → imágenes.
   Prioridad: mapa completo del módulo (sin filtro por combinación);
   fallback: construido desde $product.images (filtrado por el core). *}
{if isset($product.moro_card_images.combos) && $product.moro_card_images.combos|@count > 0}
  {assign var='moro_combo_map' value=$product.moro_card_images.combos}
{else}
  {assign var='moro_combo_map' value=[]}
  {if $moro_color_variants|@count > 0}
    {foreach from=$product.images item=moroImg}
      {if isset($moroImg.bySize.default_lg.url)}
        {foreach from=$moroImg.associatedVariants item=moroComboId}
          {if !isset($moro_combo_map[$moroComboId])}
            {$moro_combo_map[$moroComboId] = [
              'sm' => $moroImg.bySize.default_sm.url,
              'md' => $moroImg.bySize.default_md.url,
              'lg' => $moroImg.bySize.default_lg.url,
              'hover' => ''
            ]}
          {elseif empty($moro_combo_map[$moroComboId].hover)}
            {$moro_combo_map[$moroComboId] = [
              'sm' => $moroImg.bySize.default_sm.url,
              'md' => $moroImg.bySize.default_md.url,
              'lg' => $moroImg.bySize.default_lg.url,
              'hover' => $moroImg.bySize.default_lg.url
            ]}
          {/if}
        {/foreach}
      {/if}
    {/foreach}
  {/if}
{/if}

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

    {if $moro_color_variants|@count > 0}
      <div class="moro-product-card__options" data-ps-data='{$moro_combo_map|@json_encode nofilter}'>
        <div class="moro-product-card__swatches" role="radiogroup" aria-label="{l s='Color' d='Modules.Moroproductcard.Shop'}">
          {foreach from=$moro_color_variants item=moroVariant}
            {if $moroVariant.id_product_attribute == $product.id_product_attribute}
              {assign var='moro_selected' value=true}
            {else}
              {assign var='moro_selected' value=false}
            {/if}

            <button
              type="button"
              class="moro-product-card__swatch{if $moro_selected} is-selected{/if}{if isset($moroVariant.qty) && $moroVariant.qty <= 0} is-disabled{/if}"
              data-ps-action="moro-select-color"
              data-combination-id="{$moroVariant.id_product_attribute}"
              {if isset($moroVariant.qty) && $moroVariant.qty <= 0}
                aria-disabled="true"
                tabindex="-1"
                data-tooltip="{l s='Sin stock para esta variante' d='Modules.Moroproductcard.Shop'}"
              {else}
                {if $moro_selected}aria-pressed="true"{else}aria-pressed="false"{/if}
              {/if}
              aria-label="{$moroVariant.name}"
              {if $moroVariant.texture}style="background-image: url({$moroVariant.texture})"{elseif $moroVariant.html_color_code}style="background-color: {$moroVariant.html_color_code}"{/if}
            >
              <span class="visually-hidden">{$moroVariant.name}</span>
            </button>
          {/foreach}
        </div>
      </div>
    {elseif $product.id_product_attribute > 0}
      <div class="moro-product-card__options">
        <span class="moro-product-card__more-options">+ opciones</span>
      </div>
    {else}
      <div class="moro-product-card__options" aria-hidden="true"></div>
    {/if}

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
