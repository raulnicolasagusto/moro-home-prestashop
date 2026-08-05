/**
 * Moro Product Card — selección de color (swatches).
 *
 * data-ps-* architecture (AGENTS.md §5):
 *   - [data-ps-action="moro-select-color"] → swatch de color
 *   - data-ps-data (JSON) en .moro-product-card__options → mapa combinación → imágenes
 *
 * Al clickear un swatch con stock:
 *   - marca la selección visual (is-selected / aria-pressed)
 *   - setea el hidden input id_product_attribute del form de la card
 *     (el core serializa el form y CartController agrega esa combinación)
 *   - cambia la imagen principal y la de hover del combo elegido
 * Los swatches sin stock (aria-disabled) ignoran el click.
 */
(function () {
  'use strict';

  var SELECTOR_SWATCH = '[data-ps-action="moro-select-color"]';

  /**
   * Lee y valida el JSON de data-ps-data (mapa combo → imágenes).
   * @param {HTMLElement} swatch
   * @returns {Object|null}
   */
  function readComboMap(swatch) {
    var options = swatch.closest('.moro-product-card__options');
    if (!options) return null;

    var raw = options.getAttribute('data-ps-data');
    if (!raw) return null;

    try {
      var data = JSON.parse(raw);
      return data && typeof data === 'object' && !Array.isArray(data) ? data : null;
    } catch (_) {
      return null;
    }
  }

  /**
   * @param {HTMLElement} swatch
   * @returns {HTMLElement|null}
   */
  function getCard(swatch) {
    return swatch.closest('.js-product-miniature');
  }

  function setSelected(card, swatch) {
    var container = swatch.closest('.moro-product-card__swatches');
    if (!container) return;

    var swatches = container.querySelectorAll('.moro-product-card__swatch');
    for (var i = 0; i < swatches.length; i++) {
      swatches[i].classList.remove('is-selected');
      if (!swatches[i].hasAttribute('aria-disabled')) {
        swatches[i].setAttribute('aria-pressed', 'false');
      }
    }

    swatch.classList.add('is-selected');
    swatch.setAttribute('aria-pressed', 'true');
  }

  function updateForm(card, comboId) {
    var input = card.querySelector('.moro-product-card__combo-input');
    if (input) {
      input.value = comboId;
    }
  }

  function swapImages(card, comboData) {
    if (!comboData || !comboData.lg) return;

    var primary = card.querySelector('.moro-product-card__image');
    var hover = card.querySelector('.moro-product-card__image-hover');

    if (primary) {
      primary.src = comboData.lg;
      primary.srcset = comboData.sm + ' 216w, ' + comboData.md + ' 261w, ' + comboData.lg + ' 336w';
    }

    // El hover solo se reemplaza si el combo tiene segunda imagen propia.
    // Si no la tiene, se conserva la imagen hover actual (la 2da imagen del
    // producto): ocultarla dejaría el hover en gris.
    if (hover && comboData.hover) {
      hover.src = comboData.hover;
    }
  }

  document.addEventListener('click', function (event) {
    var target = event.target.closest ? event.target.closest(SELECTOR_SWATCH) : null;
    if (!target) return;

    // Sin stock: no clickeable
    if (target.hasAttribute('aria-disabled')) return;

    event.preventDefault();

    var comboId = target.getAttribute('data-combination-id');
    if (!comboId) return;

    var card = getCard(target);
    if (!card) return;

    var map = readComboMap(target);
    var comboData = map ? map[comboId] : null;

    setSelected(card, target);
    updateForm(card, comboId);
    swapImages(card, comboData);
  });
})();
