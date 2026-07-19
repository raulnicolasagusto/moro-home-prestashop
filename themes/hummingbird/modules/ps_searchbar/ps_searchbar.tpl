{**
 * Moro Home — override mínimo de ps_searchbar.
 * El buscador visual se reemplaza por moro-search-dialog.
 * Este template solo conserva los data-* atributos y el <template>
 * necesarios para el predictivo en vivo (fase 2).
 *}

<div id="ps_searchbar"
     class="ps-searchbar js-search-widget"
     data-search-controller-url="{$search_controller_url}"
     hidden>

  <template id="ps_searchbar_result" class="js-search-template">
    <a data-ps-ref="searchbar-result-link" class="ps-searchbar__result-link" id="" href="">
      <img src="" alt="" class="ps-searchbar__result-image">
      <p class="ps-searchbar__result-name"></p>
    </a>
  </template>

</div>
