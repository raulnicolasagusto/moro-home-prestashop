{**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *}
<div id="js-product-list-header">
  {if $listing.pagination.items_shown_from == 1}
    <div class="category__header">
      <div class="moro-category-banner">
        {if !empty($category.cover.bySize.category_cover.url)}
          {* Usamos la imagen ORIGINAL subida (img/c/{id}.jpg) y no la variante
             generada (category_cover): la variante se genera "contenida" con
             barras negras a los lados y baja resolución (1000x200).
             Con object-fit: cover en el CSS, el original llena el banner sin perder calidad. *}
          <img
            class="moro-category-banner__image"
            src="{$urls.img_cat_url}{$category.id}.jpg"
            alt="{if !empty($category.cover.legend)}{$category.cover.legend}{else}{$category.name}{/if}"
            fetchpriority="high"
          >
          <div class="moro-category-banner__overlay" aria-hidden="true"></div>
          <div class="moro-category-banner__content">
            <h1 class="moro-category-banner__title">{$category.name}</h1>
            {if $category.description}
              <div class="moro-category-banner__description rich-text">{$category.description nofilter}</div>
            {/if}
          </div>
        {else}
          <div class="moro-category-banner__content moro-category-banner__content--no-image">
            <h1 class="moro-category-banner__title">{$category.name}</h1>
            {if $category.description}
              <div class="moro-category-banner__description rich-text">{$category.description nofilter}</div>
            {/if}
          </div>
        {/if}
      </div>

      {if isset($subcategories) && $subcategories|@count > 0}
        {include file='catalog/_partials/subcategories.tpl' subcategories=$subcategories}
      {/if}
    </div>
  {/if}
</div>
