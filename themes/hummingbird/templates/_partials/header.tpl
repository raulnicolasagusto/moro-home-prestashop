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
  <header class="moro-header" data-ps-ref="moro-header">
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

      {* ===== Fila 2: navegación de categorías (desktop ≥ xl) =====
         displayTop inyecta ps_mainmenu (menú de categorías con dropdown
         on-hover, <nav> con .ps-mainmenu--desktop, offcanvas mobile) y
         ps_searchbar. El wrapper .moro-header__nav-wrapper solo provee
         layout visual, no toca la lógica JS ni los data-ps-*. *}
      <div class="moro-header__nav-wrapper">
        {hook h='displayTop'}
      </div>
    </div>

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
