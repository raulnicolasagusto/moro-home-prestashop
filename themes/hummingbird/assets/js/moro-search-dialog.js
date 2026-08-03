/**
 * Moro Home — Search Dialog
 * Grid animation: grid-template-rows 0fr ↔ 1fr (copia de desgine/header.html:291-333)
 * Fase 1: submit manual (Enter → página de resultados).
 */
(function () {
  'use strict';

  const TOGGLE_ID = 'moro-search-toggle';
  const PANEL_ID = 'moro-search-dialog';
  const CLOSE_ID = 'moro-search-dialog-close';
  const INPUT_ID = 'moro-search-dialog-input';

  var toggleBtn = null;
  var closeBtn = null;
  var panel = null;
  var input = null;
  var isOpen = false;

  function init() {
    toggleBtn = document.getElementById(TOGGLE_ID);
    panel = document.getElementById(PANEL_ID);
    closeBtn = document.getElementById(CLOSE_ID);
    input = document.getElementById(INPUT_ID);

    if (!toggleBtn || !panel) return;

    toggleBtn.addEventListener('click', function () {
      isOpen ? close() : open();
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', close);
    }

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && isOpen) close();
    });
  }

  function open() {
    // Cerrar el mega menu y mobile drawer si están abiertos
    if (typeof window.closeMoroMegaMenu === 'function') {
      window.closeMoroMegaMenu();
    }
    if (typeof window.closeMoroMobileDrawer === 'function') {
      window.closeMoroMobileDrawer();
    }
    isOpen = true;
    panel.classList.add('is-open');
    document.body.classList.add('moro-search-dialog-open');
    toggleBtn.setAttribute('aria-expanded', 'true');
    if (input) {
      input.value = '';
      // Disparar 'input' para que moro-search-results.js resetee el panel.
      input.dispatchEvent(new Event('input', { bubbles: true }));
    }
    setTimeout(function () {
      if (input) input.focus();
    }, 350);
  }

  function close() {
    isOpen = false;
    panel.classList.remove('is-open');
    document.body.classList.remove('moro-search-dialog-open');
    toggleBtn.setAttribute('aria-expanded', 'false');
    if (input) {
      input.value = '';
      // Disparar 'input' para que moro-search-results.js reseteé el panel.
      input.dispatchEvent(new Event('input', { bubbles: true }));
    }
  }
  window.closeMoroSearchPanel = close;

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
