/**
 * Moro Home — Mega Menu (moro-mega-menu.js)
 * Vanilla JS, data-ps-* architecture (AGENTS.md §5).
 * Grid animation 0fr ↔ 1fr (copia de desgine/header.html:452-531).
 * Cross-fade 150ms al cambiar de categoría. aria-expanded actualizado.
 */
(function () {
  'use strict';

  const ACTION = 'toggle-mega-menu';
  const PANEL_TARGET_ATTR = 'mega-panel';
  const MEGA_MENU_TARGET = 'mega-menu';
  const HIDDEN_CONTENT_CLASS = 'moro-mega-menu--hidden-content';
  const IS_OPEN_CLASS = 'is-open';
  const BODY_OPEN_CLASS = 'moro-mega-menu-open';
  const CROSS_FADE_MS = 150;
  const ITEM_ANIM_MS = 450;   // duración animación de cada item del panel
  const ITEM_STAGGER_MS = 175; // delay incremental entre items consecutivos

  let panel = null;
  let inner = null;
  let isOpen = false;
  let activeCategory = null;

  function init() {
    panel = document.querySelector('[data-ps-target="' + MEGA_MENU_TARGET + '"]');
    if (!panel) return;

    inner = panel.querySelector('.moro-mega-menu__grid-inner');

    document.addEventListener('click', onDocumentClick);
    document.addEventListener('keydown', onDocumentKeydown);
  }

  function onDocumentClick(event) {
    const btn = event.target.closest('[data-ps-action="' + ACTION + '"]');
    if (btn) {
      event.preventDefault();
      const data = btn.getAttribute('data-ps-data') || '{}';
      let category = null;
      try {
        category = JSON.parse(data).category;
      } catch (_) {
        return;
      }
      toggle(category);
      return;
    }

    // Click fuera del header → cerrar
    if (isOpen) {
      const header = document.querySelector('.moro-header');
      if (header && !header.contains(event.target)) {
        close();
      }
    }
  }

  function onDocumentKeydown(event) {
    if (event.key === 'Escape' && isOpen) {
      close();
    }
  }

  function toggle(category) {
    if (!isOpen) {
      open(category);
      return;
    }
    if (String(category) === String(activeCategory)) {
      close();
      return;
    }
    switchCategory(category);
  }

  function animatePanelItems(panelEl) {
    if (!panelEl) return;
    const reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion) return;

    const items = panelEl.querySelectorAll('.moro-mega-menu__sublink, .moro-mega-menu__card');
    for (let i = 0; i < items.length; i++) {
      if (typeof items[i].getAnimations === 'function') {
        items[i].getAnimations().forEach((anim) => anim.cancel());
      }
      if (typeof items[i].animate !== 'function') continue;
      items[i].animate(
        [
          { opacity: '0', transform: 'translateY(8px)' },
          { opacity: '1', transform: 'translateY(0)' },
        ],
        {
          duration: ITEM_ANIM_MS,
          delay: i * ITEM_STAGGER_MS,
          easing: 'ease-out',
          fill: 'both',
        }
      );
    }
  }

  function open(category) {
    // Cerrar el search panel y mobile drawer si están abiertos
    if (typeof window.closeMoroSearchPanel === 'function') {
      window.closeMoroSearchPanel();
    }
    if (typeof window.closeMoroMobileDrawer === 'function') {
      window.closeMoroMobileDrawer();
    }

    showPanel(category);
    panel.removeAttribute('hidden');
    // Forzar reflow para disparar la transición del grid
    void panel.offsetWidth;
    panel.classList.add(IS_OPEN_CLASS);

    // Stagger de aparición de subcategorías (misma mecánica que el drawer mobile)
    animatePanelItems(document.getElementById('moro-mega-panel-' + category));

    // Quitar fade-out del contenido
    forEachPanelContent(function (c) {
      if (!c.hasAttribute('hidden')) {
        c.classList.remove(HIDDEN_CONTENT_CLASS);
      }
    });

    document.body.classList.add(BODY_OPEN_CLASS);
    isOpen = true;
    activeCategory = category;
    updateAriaExpanded(category);
  }

  function switchCategory(category) {
    if (!inner) return;
    // Cross-fade breve
    inner.classList.add('moro-mega-menu--cross-fade');
    forEachVisiblePanelContent(function (c) {
      c.classList.add(HIDDEN_CONTENT_CLASS);
    });

    setTimeout(function () {
      showPanel(category);
      forEachVisiblePanelContent(function (c) {
        c.classList.remove(HIDDEN_CONTENT_CLASS);
      });
      inner.classList.remove('moro-mega-menu--cross-fade');

      // Stagger de aparición de las subcategorías del nuevo panel
      animatePanelItems(document.getElementById('moro-mega-panel-' + category));
    }, CROSS_FADE_MS);

    activeCategory = category;
    updateAriaExpanded(category);
  }

  function close() {
    if (!isOpen) return;
    panel.classList.remove(IS_OPEN_CLASS);

    forEachVisiblePanelContent(function (c) {
      c.classList.add(HIDDEN_CONTENT_CLASS);
    });

    setTimeout(function () {
      if (!isOpen) {
        panel.setAttribute('hidden', '');
        hideAllPanels();
      }
    }, 500);

    document.body.classList.remove(BODY_OPEN_CLASS);
    isOpen = false;
    activeCategory = null;
    updateAriaExpanded(null);
  }

  function showPanel(category) {
    hideAllPanels();
    const p = document.getElementById('moro-mega-panel-' + category);
    if (p) {
      p.removeAttribute('hidden');
    }
  }

  function hideAllPanels() {
    forEachPanelContent(function (p) {
      p.setAttribute('hidden', '');
      p.classList.add(HIDDEN_CONTENT_CLASS);
    });
  }

  function forEachPanelContent(callback) {
    document.querySelectorAll('[data-ps-target="' + PANEL_TARGET_ATTR + '"]').forEach(function (p) {
      callback(p);
    });
  }

  function forEachVisiblePanelContent(callback) {
    forEachPanelContent(function (p) {
      if (!p.hasAttribute('hidden')) callback(p);
    });
  }

  function updateAriaExpanded(activeCat) {
    document.querySelectorAll('[data-ps-action="' + ACTION + '"]').forEach(function (btn) {
      const raw = btn.getAttribute('data-ps-data') || '{}';
      let btnCat = null;
      try {
        btnCat = JSON.parse(raw).category;
      } catch (_) {
        return;
      }
      const isActive = activeCat !== null && String(btnCat) === String(activeCat);
      btn.setAttribute('aria-expanded', isActive ? 'true' : 'false');
    });
  }

  document.addEventListener('DOMContentLoaded', init);
  window.closeMoroMegaMenu = close;
})();