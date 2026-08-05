{**
 * Moro Product Card — bloque media: imagen principal + segunda imagen en hover
 * + overlay + acciones (Agregar rápido / Ver detalles).
 * Estructura y animaciones de desgine/product-cart.html; datos reales de $product.
 *}
<div class="moro-product-card__media">
  <a
    href="{$product.url}"
    class="moro-product-card__image-link"
    aria-label="{l s='View product %product_name%' sprintf=['%product_name%' => $product.name] d='Shop.Theme.Catalog'}"
  >
    {if $product.cover}
      <img
        class="moro-product-card__image"
        srcset="
          {$product.cover.bySize.default_sm.url} 216w,
          {$product.cover.bySize.default_md.url} 261w,
          {$product.cover.bySize.default_lg.url} 336w"
        sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
        src="{$product.cover.bySize.default_md.url}"
        width="{$product.cover.bySize.default_md.width}"
        height="{$product.cover.bySize.default_md.height}"
        loading="lazy"
        alt="{$product.cover.legend}"
        data-full-size-image-url="{$product.cover.bySize.home_default.url}"
      >
    {else}
      <img
        class="moro-product-card__image"
        src="{$urls.no_picture_image.bySize.default_md.url}"
        width="{$urls.no_picture_image.bySize.default_md.width}"
        height="{$urls.no_picture_image.bySize.default_md.height}"
        loading="lazy"
        alt="{l s='No image available' d='Shop.Theme.Catalog'}"
      >
    {/if}
  </a>

  {if isset($product.moro_card_images.hover.lg) && $product.moro_card_images.hover.lg}
    <img
      class="moro-product-card__image-hover"
      src="{$product.moro_card_images.hover.lg}"
      width="{$product.cover.bySize.default_md.width}"
      height="{$product.cover.bySize.default_md.height}"
      loading="eager"
      decoding="async"
      alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name}{/if}"
    >
  {elseif isset($product.images[1].bySize.default_lg.url)}
    <img
      class="moro-product-card__image-hover"
      src="{$product.images[1].bySize.default_lg.url}"
      width="{$product.images[1].bySize.default_md.width}"
      height="{$product.images[1].bySize.default_md.height}"
      loading="eager"
      decoding="async"
      alt="{if !empty($product.images[1].legend)}{$product.images[1].legend}{else}{$product.name}{/if}"
    >
  {/if}

  <div class="moro-product-card__overlay" aria-hidden="true"></div>

  {* Detección de falta de stock con el flag nativo del core (misma condición
     que usa PrestaShop para el cartel "Sin stock" y para deshabilitar la compra). *}
  {assign var='product_out_of_stock' value=false}
  {foreach from=$product.flags item=flag}
    {if $flag.type == 'out_of_stock'}
      {$product_out_of_stock = true}
    {/if}
  {/foreach}

  <div class="moro-product-card__actions">
    {if !$product_out_of_stock}
      <form class="moro-product-card__form" action="{$urls.pages.cart}" method="post">
        <input type="hidden" name="id_product" value="{$product.id_product}">
        <input type="hidden" name="id_product_attribute" value="" class="moro-product-card__combo-input">
        <input type="hidden" name="qty" value="1">
        <input type="hidden" name="token" value="{$static_token}">
        <button
          type="submit"
          class="moro-product-card__add"
          data-button-action="add-to-cart"
          data-ps-ref="add-to-cart"
          aria-label="{l s='Add to cart %product_name%' sprintf=['%product_name%' => $product.name] d='Shop.Theme.Actions'}"
        >
          {l s='Agregar' d='Modules.Moroproductcard.Shop'}
        </button>
      </form>
    {/if}
    <a
      class="moro-product-card__details"
      href="{$product.url}"
      aria-label="{l s='View product %product_name%' sprintf=['%product_name%' => $product.name] d='Shop.Theme.Catalog'}"
    >
      {l s='Ver detalles' d='Modules.Moroproductcard.Shop'}
    </a>
  </div>
</div>
