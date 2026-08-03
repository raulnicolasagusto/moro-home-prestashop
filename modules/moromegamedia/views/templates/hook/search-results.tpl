{**
 * Moro Home — Search results panel (live search).
 * Incluido desde header.tpl dentro de #moro-search-dialog__grid-inner.
 * Estructura/estilo: designe/search-input.html <main> (adaptada a Moro).
 * El JS (moro-search-results.js) llena la grilla clonando #moro-search-result-card.
 *}

<div class="moro-search-results"
     data-ps-target="search-results"
     data-ps-observe="search-results"
     hidden>

  <div class="moro-search-results__inner">

    {* Columna izquierda: Sugerencias (solo título por ahora) *}
    <aside class="moro-search-results__aside">
      <h3 class="moro-search-results__aside-title">{l s='Sugerencias' d='Modules.Moromegadmedia.Shop'}</h3>
    </aside>

    {* Columna derecha: Productos *}
    <section class="moro-search-results__section">
      <h4 class="moro-search-results__heading">{l s='Productos' d='Modules.Moromegadmedia.Shop'}</h4>

      <p class="moro-search-results__state" data-ps-ref="search-loading" role="status" aria-live="polite" hidden>
        {l s='Buscando…' d='Modules.Moromegadmedia.Shop'}
      </p>
      <p class="moro-search-results__state" data-ps-ref="search-empty" role="status" aria-live="polite" hidden>
        {l s='No se encontraron productos' d='Modules.Moromegadmedia.Shop'}
      </p>
      <p class="moro-search-results__state" data-ps-ref="search-error" role="status" aria-live="polite" hidden>
        {l s='No se pudo completar la búsqueda' d='Modules.Moromegadmedia.Shop'}
      </p>

      <div class="moro-search-results__grid"
           data-ps-target="search-products-grid"
           aria-label="{l s='Resultados de búsqueda' d='Modules.Moromegadmedia.Shop'}">
      </div>

      <a class="moro-search-results__all"
         data-ps-ref="search-all-link"
         href="{$urls.pages.search}?s="
         hidden>
        {l s='Ver todos los resultados' d='Modules.Moromegadmedia.Shop'}
      </a>
    </section>

  </div>
</div>

{* Template de card de producto (clonado por el JS) *}
<template id="moro-search-result-card">
  <a class="moro-search-results__card" href="#">
    <div class="moro-search-results__card-media">
      <span class="moro-search-results__card-badge" data-ps-ref="card-badge" hidden>{l s='Oferta' d='Modules.Moromegadmedia.Shop'}</span>
      <img class="moro-search-results__card-image" src="" alt="" loading="lazy">
    </div>
    <h5 class="moro-search-results__card-title" data-ps-ref="card-title"></h5>
    <p class="moro-search-results__card-price" data-ps-ref="card-price">
      <span class="moro-search-results__card-price-now" data-ps-ref="card-price-now"></span>
      <span class="moro-search-results__card-price-old" data-ps-ref="card-price-old"></span>
    </p>
  </a>
</template>
