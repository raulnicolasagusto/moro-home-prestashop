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
  {literal}
  <style>
    .moro-header .material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 100,'GRAD' 0,'opsz' 24!important}
    .moro-mobile-drawer .material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 100,'GRAD' 0,'opsz' 24!important}
    .moro-header__right{align-items:center!important;gap:4px!important}
    .moro-header__right #_desktop_ps_languageselector,
    .moro-header__right #_desktop_ps_currencyselector{display:none!important}
    .moro-header__right #_desktop_ps_customersignin,
    .moro-header__right #_desktop_ps_shoppingcart,
    .moro-header__right .ps-customersignin,
    .moro-header__right .ps-shoppingcart,
    .moro-header__right .header-block{display:flex!important;align-items:center!important;margin:0!important;padding:0!important}
    .moro-header__right .header-block__action-btn,
    .moro-header__right .moro-header__wishlist{display:inline-flex!important;align-items:center!important;justify-content:center!important;width:40px!important;height:40px!important;margin:0!important;padding:8px!important;position:relative!important}
    .moro-header__right #_desktop_ps_customersignin{margin-right:-8px!important}
    .moro-header__right .header-block__action-btn{gap:0!important}
    .moro-header__right .header-block__badge{position:absolute!important;top:2px!important;right:0!important;min-width:16px!important;height:16px!important;padding:0 4px!important;font-size:10px!important;line-height:1!important}
    @media(min-width:768px){.moro-header__right{gap:6px!important}}
  </style>
  {/literal}
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
            <i class="material-symbols-outlined moro-header__icon" aria-hidden="true">search</i>
            <span class="moro-header__icon-label d-none d-md-inline">BUSCAR</span>
          </button>

          {* Toggle menú mobile *}
          <button
            type="button"
            class="moro-header__icon-btn moro-header__menu-toggle"
            aria-label="{l s='Toggle menu' d='Shop.Theme.Actions'}"
            aria-expanded="false"
            aria-controls="mobile-menu"
            data-ps-action="toggle-mobile-drawer"
          >
            <i class="material-symbols-outlined" aria-hidden="true">menu</i>
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
          Los movimos dentro de .moro-header__right para que los iconos
          mobile aparezcan en la barra header, nunca abajo.
          Ocultamos idioma/moneda desde CSS para reducir ruido visual.
        *}
        <div class="moro-header__right">
          {if !empty($smarty.capture.header_nav_2)}
            {$smarty.capture.header_nav_2 nofilter}
          {/if}

          {* Placeholders mobile: el toggler mete content aquí en < md *}
          <div id="_mobile_ps_customersignin" class="d-md-none d-flex col-auto"></div>
          {if !$configuration.is_catalog}
            <div id="_mobile_ps_shoppingcart" class="d-md-none d-flex col-auto"></div>
          {/if}

          {* Wishlist (heart icon) — conectado al módulo blockwishlist *}
          <a
            class="moro-header__icon-btn moro-header__wishlist"
            href="{$link->getModuleLink('blockwishlist', 'lists')}"
            aria-label="{l s='My wishlists' d='Modules.Blockwishlist.Shop'}"
            title="{l s='My wishlists' d='Modules.Blockwishlist.Shop'}"
          >
            <i class="material-symbols-outlined" aria-hidden="true">favorite</i>
          </a>
        </div>
      </div>

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

                {* Columna derecha: solo subcategorías con imagen de portada cargada (sin productos) *}
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
            <i class="material-symbols-outlined moro-search-dialog__search-icon" aria-hidden="true">search</i>
            <input type="search"
                   name="s"
                   id="moro-search-dialog-input"
                   class="moro-search-dialog__input"
                   data-ps-ref="search-input"
                   aria-label="{l s='Search' d='Shop.Theme.Actions'}"
                   placeholder="¿Qué estás buscando?"
                   autocomplete="off" />
          </form>

          <button type="button"
                  id="moro-search-dialog-close"
                  class="moro-search-dialog__close"
                  aria-label="{l s='Close' d='Shop.Theme.Actions'}"
                  data-ps-action="close-search-dialog">
              <i class="material-symbols-outlined" aria-hidden="true">close</i>
          </button>

        </div>

        {* ===== Panel de resultados en vivo (módulo moromegamedia) ===== *}
        {include file='module:moromegamedia/views/templates/hook/search-results.tpl'}

      </div>

    </div>
  </header>

  {* ===== Mobile drawer (data from moromegamedia, outside header to avoid backdrop-filter containing block) — desgine/header.html:329-350 ===== *}
  {if !empty($mega_menu_categories)}
    <div class="moro-mobile-drawer__overlay"
         data-ps-action="close-mobile-drawer"
         aria-hidden="true">
    </div>

    <aside id="mobile-menu"
           class="moro-mobile-drawer"
           role="dialog"
           aria-modal="true"
           aria-label="{l s='Menu' d='Shop.Theme.Menu'}"
           data-ps-component="mobile-menu"
           aria-hidden="true"
           hidden>

      <div class="moro-mobile-drawer__header">
        <button type="button"
                class="moro-mobile-drawer__close"
                data-ps-action="close-mobile-drawer"
                aria-label="{l s='Close menu' d='Shop.Theme.Actions'}">
          <i class="material-symbols-outlined" aria-hidden="true">close</i>
        </button>
      </div>

      <div class="moro-mobile-drawer__panels">

        {* Panel principal: lista de categorías *}
        <div class="moro-mobile-drawer__main"
             data-ps-target="mobile-main">
          <ul class="moro-mobile-drawer__list" role="list">
            {foreach from=$mega_menu_categories item=cat name=moroDrawerLoop}
              <li class="moro-mobile-drawer__item">
                {if !empty($cat.subs) || !empty($mega_menu_media[$cat.id_category])}
                  <button type="button"
                          class="moro-mobile-drawer__link"
                          data-ps-action="open-mobile-subpanel"
                          data-ps-data='{ldelim}"category":"{$cat.id_category}"{rdelim}'>
                    <span>{$cat.name|escape:'html':'UTF-8'}</span>
                    <i class="material-symbols-outlined" aria-hidden="true">chevron_right</i>
                  </button>
                {else}
                  <a class="moro-mobile-drawer__link" href="{$cat.url}">
                    <span>{$cat.name|escape:'html':'UTF-8'}</span>
                  </a>
                {/if}
              </li>
            {/foreach}
          </ul>
        </div>

        {* Sub-panel: contenido de la categoría *}
        <div class="moro-mobile-drawer__sub"
             data-ps-target="mobile-sub"
             aria-hidden="true"
             hidden>
          <button type="button"
                  class="moro-mobile-drawer__back"
                  data-ps-action="close-mobile-subpanel">
            <i class="material-symbols-outlined" aria-hidden="true">chevron_left</i>
            <span data-ps-ref="mobile-sub-title"></span>
          </button>
          <div class="moro-mobile-drawer__sub-content"
               data-ps-target="mobile-sub-content">
          </div>
        </div>

      </div>

    </aside>
  {/if}

  {capture name="nav_full_width"}{hook h='displayNavFullWidth'}{/capture}
  {if !empty($smarty.capture.nav_full_width)}
    <div class="{$headerNavFullWidth}">
      {$smarty.capture.nav_full_width nofilter}
    </div>
  {/if}
{/block}
