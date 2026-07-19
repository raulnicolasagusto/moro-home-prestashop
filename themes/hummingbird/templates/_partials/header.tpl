{**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Moro Home — header rediseño (v1.0.0).
 * Layout de 2 filas:
 *   Fila 1: [search + mobile-toggle] [LOGO] [displayNav2 (account, cart…)]
 *   Fila 2: [displayTop → ps_mainmenu (categorías + dropdown hover)]
 * Conserva los hooks originales y los #_mobile_ps_customersignin /
 * #_mobile_ps_shoppingcart que el JS del tema reemplaza en viewport < md.
 *}

{$headerBanner = 'header-banner'}
{$headerNavFullWidth = 'header-nav-full-width'}

{capture name="header_banner"}{hook h='displayBanner'}{/capture}
{capture name="header_nav_1"}{hook h='displayNav1'}{/capture}
{capture name="header_nav_2"}{hook h='displayNav2'}{/capture}

{block name='header_banner'}
  {if !empty($smarty.capture.header_banner)}
    <div class="{$headerBanner}">
      {$smarty.capture.header_banner nofilter}
    </div>
  {/if}
{/block}

{block name='header_bottom'}
  <header class="moro-header{if !empty($mega_menu_categories)} moro-header--has-mega-menu{/if}" data-ps-ref="moro-header">
    <div class="moro-header__inner">

      {* ===== Fila 1: top bar ===== *}
      <div class="moro-header__top">

        {* --- Izquierda: search + toggle mobile --- *}
        <div class="moro-header__left">
          {*
            Botón de búsqueda. En desktop (≥md) abre el offcanvas de
            ps_searchbar vía Bootstrap offcanvas. El offcanvas #searchCanvas
            es renderizado por ps_searchbar dentro del hook displayTop.
          *}
          <button
            type="button"
            id="moro-search-toggle"
            class="moro-header__icon-btn"
            aria-label="{l s='Search' d='Shop.Theme.Actions'}"
            aria-expanded="false"
          >
            <i class="material-icons moro-header__icon" aria-hidden="true">&#xE8B6;</i>
            <span class="moro-header__icon-label d-none d-md-inline">{l s='Search' d='Shop.Theme.Actions'}</span>
          </button>

          {* Toggle menú mobile *}
          <button
            type="button"
            class="moro-header__icon-btn moro-header__menu-toggle d-xl-none"
            aria-label="{l s='Toggle menu' d='Shop.Theme.Actions'}"
            aria-expanded="false"
            aria-controls="mobile-menu"
          >
            <i class="material-icons" aria-hidden="true">&#xE5D2;</i>
          </button>
        </div>

        {* --- Centro: logo --- *}
        <div class="moro-header__brand">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}<h1 class="moro-header__h1">{/if}
              {renderLogo}
            {if $page.page_name == 'index'}</h1>{/if}
          {/if}
        </div>

        {* --- Derecha: displayNav2 + placeholders mobile --- *}
        {*
          displayNav2 inyecta ps_languageselector, ps_currencyselector,
          ps_customersignin y ps_shoppingcart. En desktop se renderizan acá.
          En mobile (< md), los #_mobile_ps_* placeholders reciben las
          versiones responsivas vía el JS de Hummingbird.
          Ocultamos idioma/moneda desde CSS para reducir ruido visual.
        *}
        <div class="moro-header__right">
          {if !empty($smarty.capture.header_nav_2)}
            {$smarty.capture.header_nav_2 nofilter}
          {/if}

          {* Wishlist (heart icon) — conectado al módulo blockwishlist *}
          <a
            class="moro-header__icon-btn moro-header__wishlist"
            href="{$link->getModuleLink('blockwishlist', 'lists')}"
            aria-label="{l s='My wishlists' d='Modules.Blockwishlist.Shop'}"
            title="{l s='My wishlists' d='Modules.Blockwishlist.Shop'}"
          >
            <i class="material-icons" aria-hidden="true">&#xE87D;</i>
          </a>
        </div>
      </div>

      {* ===== Placeholders mobile ===== *}
      <div id="_mobile_ps_customersignin" class="d-md-none d-flex col-auto"></div>
      {if !$configuration.is_catalog}
        <div id="_mobile_ps_shoppingcart" class="d-md-none d-flex col-auto"></div>
      {/if}

      {* ===== Fila 2: navegación de categorías =====
         El hook displayTop sigue inyectando ps_mainmenu (su offcanvas
         mobile se conserva intacto) y ps_searchbar (invisible, solo para
         assets y template de resultados). El nav desktop viejo de
         ps_mainmenu se oculta por CSS y se reemplaza por el nav propio
         del mega menu, mucho más visual. *}
      <div class="moro-header__nav-wrapper">
        {hook h='displayTop'}
      </div>

      {* ===== Nav del mega menu (desktop ≥ xl) =====
         Solo se renderiza si el módulo moromegamedia inyectó categorías.
         Los botones usan data-ps-action + data-ps-data (AGENTS.md §5). *}
      {if !empty($mega_menu_categories)}
        <nav class="moro-mega-menu-nav" data-ps-component="moro-mega-menu" aria-label="{l s='Main navigation' d='Shop.Theme.Menu'}">
          {foreach from=$mega_menu_categories item=cat name=megaNavLoop}
            <button
              type="button"
              class="moro-mega-menu-nav__btn"
              data-ps-action="toggle-mega-menu"
              data-ps-data='{ldelim}"category":"{$cat.id_category}"{rdelim}'
              aria-expanded="false"
              aria-controls="moro-mega-panel-{$cat.id_category}">
              {$cat.name|escape:'html':'UTF-8'}
            </button>
          {/foreach}
        </nav>
      {/if}
    </div>

    {* ===== Mega menu panel (grid animation) — estructura de desgine/header.html:206-211 ===== *}
    {if !empty($mega_menu_categories)}
      <div id="moro-mega-menu"
           class="moro-mega-menu"
           data-ps-target="mega-menu"
           aria-label="{l s='Categories' d='Shop.Theme.Menu'}"
           hidden>

        <div class="moro-mega-menu__grid-inner">

          {foreach from=$mega_menu_categories item=cat}
            <div
              id="moro-mega-panel-{$cat.id_category}"
              class="moro-mega-menu__panel-content moro-mega-menu--hidden-content"
              data-ps-target="mega-panel"
              data-ps-data='{ldelim}"category":"{$cat.id_category}"{rdelim}'
              hidden>

              <div class="moro-mega-menu__content">
                {* Columna izquierda: links de subcategorías *}
                {if !empty($cat.subs)}
                  <div class="moro-mega-menu__links">
                    <div class="moro-mega-menu__group">
                      <h3 class="moro-mega-menu__group-title">{l s='Destacado' d='Shop.Theme.Menu'}</h3>
                      <a class="moro-mega-menu__sublink moro-mega-menu__sublink--all" href="{$cat.url}">
                        {l s='Ver todo' d='Shop.Theme.Menu'} {$cat.name|escape:'html':'UTF-8'}
                      </a>
                    </div>
                    <div class="moro-mega-menu__group">
                      <h3 class="moro-mega-menu__group-title">{$cat.name|escape:'html':'UTF-8'}</h3>
                      {foreach from=$cat.subs item=sub}
                        <a class="moro-mega-menu__sublink" href="{$sub.url}">
                          {$sub.name|escape:'html':'UTF-8'}
                        </a>
                      {/foreach}
                    </div>
                  </div>
                {/if}

                {* Columna derecha: imágenes dinámicas (subcats/portadas de productos) *}
                {if !empty($mega_menu_media[$cat.id_category])}
                  <div class="moro-mega-menu__media">
                    {foreach from=$mega_menu_media[$cat.id_category] item=media}
                      <a class="moro-mega-menu__card" href="{$media.url}">
                        <div class="moro-mega-menu__image-wrap">
                          <img class="moro-mega-menu__image"
                               src="{$media.image}"
                               alt="{$media.label|escape:'html':'UTF-8'}"
                               loading="lazy" />
                        </div>
                        <p class="moro-mega-menu__card-label">{$media.label|escape:'html':'UTF-8'}</p>
                      </a>
                    {/foreach}
                  </div>
                {/if}
              </div>

            </div>
          {/foreach}

        </div>

      </div>
    {/if}

    {* ===== Search bar con grid animation — desgine/header.html:200-212 ===== *}
    <div id="moro-search-dialog"
         class="moro-search-dialog"
         role="dialog"
         aria-modal="true"
         aria-label="{l s='Search' d='Shop.Theme.Actions'}"
         data-ps-component="search-dialog">

      <div class="moro-search-dialog__grid-inner">

        <div class="moro-search-dialog__bar-content moro-search-dialog--hidden-content"
             id="moro-search-dialog-inner">

          <form action="{$urls.pages.search}"
                method="get"
                class="moro-search-dialog__input-group"
                role="search">
            <i class="material-icons moro-search-dialog__search-icon" aria-hidden="true">&#xE8B6;</i>
            <input type="search"
                   name="s"
                   id="moro-search-dialog-input"
                   class="moro-search-dialog__input"
                   aria-label="{l s='Search' d='Shop.Theme.Actions'}"
                   placeholder="{l s='Search for...' d='Shop.Theme.Actions'}"
                   autocomplete="off" />
          </form>

          <button type="button"
                  id="moro-search-dialog-close"
                  class="moro-search-dialog__close"
                  aria-label="{l s='Close' d='Shop.Theme.Actions'}"
                  data-ps-action="close-search-dialog">
            <i class="material-icons" aria-hidden="true">&#xE14C;</i>
          </button>

        </div>

      </div>

    </div>
  </header>

  {capture name="nav_full_width"}{hook h='displayNavFullWidth'}{/capture}
  {if !empty($smarty.capture.nav_full_width)}
    <div class="{$headerNavFullWidth}">
      {$smarty.capture.nav_full_width nofilter}
    </div>
  {/if}
{/block}
