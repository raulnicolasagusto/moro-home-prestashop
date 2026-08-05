{**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *}
{extends file='catalog/listing/product-list.tpl'}

{block name='product_list_header'}
  {* El header de categoría se renderiza arriba de las columnas (banner full-width),
     no dentro del contenido. *}
{/block}

{block name='product_list_footer'}
  {include file='catalog/_partials/category-footer.tpl' listing=$listing category=$category}
{/block}

{* Página de categoría: banner full-width arriba de todo, y debajo la fila con
   la columna izquierda (filtros) + listado de productos. El árbol de categorías
   (ps_categorytree) se oculta solo visualmente vía CSS en esta página. *}
{block name='content_columns'}
  <div class="columns-container container">
    {block name='category_page_banner'}
      {include file='catalog/_partials/category-header.tpl' listing=$listing category=$category}
    {/block}

    <div class="row">
      {block name='left_column'}
        <div id="left-column" class="left-column col-md-4 col-lg-3">
          {hook h='displayLeftColumn'}
        </div>
      {/block}

      {block name='content_wrapper'}
        <div id="center-column" class="center-column page col-md-8 col-lg-9">
          {hook h='displayContentWrapperTop'}
          {block name='content'}{/block}
          {hook h='displayContentWrapperBottom'}
        </div>
      {/block}

      {block name='right_column'}{/block}
    </div>
  </div>
{/block}
