/**
 * Moro Home — Search results (live search)
 * Consume el SearchController nativo de PrestaShop vía AJAX (ajax=1 → JSON).
 * Sin jQuery. Arquitectura data-ps-* (AGENTS.md §5).
 * Debounce 300ms, dispara desde la 1ª letra. Máximo 6 productos.
 */
(function () {
  'use strict';

  const INPUT_REF = 'search-input';
  const RESULTS_TARGET = 'search-results';
  const GRID_TARGET = 'search-products-grid';
  const CARD_TEMPLATE_ID = 'moro-search-result-card';
  const CARD_BADGE_REF = 'card-badge';
  const CARD_TITLE_REF = 'card-title';
  const CARD_PRICE_REF = 'card-price';
  const CARD_PRICE_NOW_REF = 'card-price-now';
  const CARD_PRICE_OLD_REF = 'card-price-old';
  const STATE_LOADING_REF = 'search-loading';
  const STATE_EMPTY_REF = 'search-empty';
  const STATE_ERROR_REF = 'search-error';
  const ALL_LINK_REF = 'search-all-link';

  const DEBOUNCE_MS = 300;
  const MAX_RESULTS = 6;

  let input = null;
  let results = null;
  let grid = null;
  let cardTemplate = null;
  let stateLoading = null;
  let stateEmpty = null;
  let stateError = null;
  let allLink = null;
  let debounceTimer = null;
  let activeController = null;
  let lastQuery = '';

  function init() {
    input = document.querySelector('[data-ps-ref="' + INPUT_REF + '"]');
    results = document.querySelector('[data-ps-target="' + RESULTS_TARGET + '"]');
    if (!input || !results) return;

    grid = results.querySelector('[data-ps-target="' + GRID_TARGET + '"]');
    cardTemplate = document.getElementById(CARD_TEMPLATE_ID);
    stateLoading = results.querySelector('[data-ps-ref="' + STATE_LOADING_REF + '"]');
    stateEmpty = results.querySelector('[data-ps-ref="' + STATE_EMPTY_REF + '"]');
    stateError = results.querySelector('[data-ps-ref="' + STATE_ERROR_REF + '"]');
    allLink = results.querySelector('[data-ps-ref="' + ALL_LINK_REF + '"]');

    input.addEventListener('input', onInput);
  }

  function resetPanel() {
    if (!input || !results) return;
    input.value = '';
    results.hidden = true;
    hideStates();
    grid.innerHTML = '';
    if (allLink) allLink.hidden = true;
    lastQuery = '';
    abort();
  }

  window.addEventListener('pageshow', resetPanel);

  function onInput() {
    clearTimeout(debounceTimer);

    const query = input.value.trim();
    if (query.length === 0) {
      abort();
      hideStates();
      grid.innerHTML = '';
      if (allLink) allLink.hidden = true;
      results.hidden = true;
      lastQuery = '';
      return;
    }

    results.hidden = false;
    debounceTimer = setTimeout(function () {
      search(query);
    }, DEBOUNCE_MS);
  }

  function search(query) {
    abort();
    lastQuery = query;
    showState(stateLoading);

    const controller = new AbortController();
    activeController = controller;

    const url = buildUrl(query);

    fetch(url, {
      headers: { Accept: 'application/json' },
      signal: controller.signal,
      credentials: 'same-origin',
    })
      .then(function (resp) {
        if (!resp.ok) throw new Error('HTTP ' + resp.status);
        return resp.json();
      })
      .then(function (data) {
        if (lastQuery !== query) return; // respuesta desactualizada
        render((data && data.products) || []);
      })
      .catch(function (err) {
        if (err.name === 'AbortError') return;
        if (lastQuery !== query) return;
        showState(stateError);
      });
  }

  function buildUrl(query) {
    // El form del dialog tiene action = {$urls.pages.search}
    const base = getSearchBase();
    const sep = base.indexOf('?') === -1 ? '?' : '&';
    return base + sep + 'ajax=1&s=' + encodeURIComponent(query) + '&resultsPerPage=' + MAX_RESULTS;
  }

  function buildAllUrl(query) {
    // Misma base, pero URL de página completa (sin ajax ni resultsPerPage).
    const base = getSearchBase();
    const sep = base.indexOf('?') === -1 ? '?' : '&';
    return base + sep + 's=' + encodeURIComponent(query);
  }

  function getSearchBase() {
    const form = input.closest('form');
    return form && form.getAttribute('action') ? form.getAttribute('action') : '';
  }

  function render(products) {
    if (!products.length) {
      showState(stateEmpty);
      if (allLink) allLink.hidden = true;
      return;
    }

    hideStates();
    grid.innerHTML = '';

    products.slice(0, MAX_RESULTS).forEach(function (product) {
      grid.appendChild(buildCard(product));
    });

    if (allLink) {
      allLink.setAttribute('href', buildAllUrl(lastQuery));
      allLink.hidden = false;
    }
  }

  function buildCard(product) {
    const node = cardTemplate.content.firstElementChild.cloneNode(true);
    const link = node.querySelector('a') || node;
    const badge = node.querySelector('[data-ps-ref="' + CARD_BADGE_REF + '"]');
    const title = node.querySelector('[data-ps-ref="' + CARD_TITLE_REF + '"]');
    const priceEl = node.querySelector('[data-ps-ref="' + CARD_PRICE_REF + '"]');
    const priceNow = node.querySelector('[data-ps-ref="' + CARD_PRICE_NOW_REF + '"]');
    const priceOld = node.querySelector('[data-ps-ref="' + CARD_PRICE_OLD_REF + '"]');
    const img = node.querySelector('img');

    link.setAttribute('href', product.canonical_url || product.url || '#');

    if (title) {
      title.textContent = product.name || '';
    }

    if (img) {
      const cover = product.cover && product.cover.bySize;
      const imgUrl = cover && cover.medium_default
        ? cover.medium_default.url
        : '';
      if (imgUrl) {
        img.setAttribute('src', imgUrl);
        img.setAttribute('alt', product.name || '');
      } else {
        img.remove();
      }
    }

    if (badge) {
      badge.hidden = !product.has_discount;
    }

    if (priceEl) {
      priceEl.classList.toggle('moro-search-results__card-price--discount', !!product.has_discount);
    }

    if (priceNow) {
      priceNow.textContent = product.price || '';
    }

    if (priceOld) {
      priceOld.textContent = product.has_discount && product.regular_price
        ? product.regular_price
        : '';
    }

    return node;
  }

  function showState(el) {
    [stateLoading, stateEmpty, stateError].forEach(function (s) {
      if (s) s.hidden = s !== el;
    });
  }

  function hideStates() {
    [stateLoading, stateEmpty, stateError].forEach(function (s) {
      if (s) s.hidden = true;
    });
  }

  function abort() {
    if (activeController) {
      activeController.abort();
      activeController = null;
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
