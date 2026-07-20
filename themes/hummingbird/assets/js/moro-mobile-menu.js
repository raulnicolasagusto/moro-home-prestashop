/**
 * Moro Home — Mobile Drawer
 *
 * Drawer lateral izquierdo con panel principal de categorías + sub-panel
 * por categoría. Reutiliza los datos del mega-menu desktop (desktop panels
 * en header.tpl) para construir el sub-panel sin duplicar contenido.
 *
 * Animaciones copiadas de desgine/header.html:559-709:
 *   - Cascadeo staggered de items (opacity + translateX con delay)
 *   - Slide lateral drawer: translateX(-100%) ↔ 0
 *   - Sub-panel: translateX(100%) ↔ 0, main pushed -30%
 *   - Overlay: opacity fade
 *
 * Arquitectura (AGENTS.md §5):
 *   - data-ps-action="toggle-mobile-drawer"  → abrir/cerrar
 *   - data-ps-action="close-mobile-drawer"   → cerrar (botón + overlay)
 *   - data-ps-action="open-mobile-subpanel"  → abrir sub-panel
 *   - data-ps-action="close-mobile-subpanel" → cerrar sub-panel (back button)
 *   - Escape key
 */
(function () {
  'use strict';

  /* ---- selectores ---- */

  var TOGGLE_ACTION = 'toggle-mobile-drawer';
  var CLOSE_ACTION = 'close-mobile-drawer';
  var OPEN_SUB_ACTION = 'open-mobile-subpanel';
  var CLOSE_SUB_ACTION = 'close-mobile-subpanel';

  var DRAWER_ID = 'mobile-menu';
  var MAIN_TARGET = 'mobile-main';
  var SUB_TARGET = 'mobile-sub';
  var SUB_CONTENT_TARGET = 'mobile-sub-content';
  var SUB_TITLE_REF = 'mobile-sub-title';

  var CLASS_OPEN = 'is-open';
  var CLASS_PUSHED = 'is-pushed';
  var BODY_OPEN_CLASS = 'moro-mobile-drawer-open';

  var TRANSITION_MS = 400;   // drawer slide
  var SUB_TRANSITION_MS = 350;  // sub-panel slide
  var OVERLAY_MS = 300;      // overlay fade

  /* ---- state ---- */

  var overlay = null;
  var drawer = null;
  var mainEl = null;
  var subEl = null;
  var subContent = null;
  var subTitleEl = null;
  var isOpen = false;
  var subOpen = false;

  /* ---- init ---- */

  function init() {
    overlay = document.querySelector('.moro-mobile-drawer__overlay');
    drawer = document.getElementById(DRAWER_ID);
    if (!drawer) return;

    mainEl = document.querySelector('[data-ps-target="' + MAIN_TARGET + '"]');
    subEl = document.querySelector('[data-ps-target="' + SUB_TARGET + '"]');
    subContent = document.querySelector('[data-ps-target="' + SUB_CONTENT_TARGET + '"]');
    subTitleEl = document.querySelector('[data-ps-ref="' + SUB_TITLE_REF + '"]');

    document.addEventListener('click', onDocumentClick);
    document.addEventListener('keydown', onDocumentKeydown);
  }

  /* ---- event delegation ---- */

  function onDocumentClick(event) {
    var closest = event.target.closest('[data-ps-action]');
    if (!closest) return;
    var action = closest.getAttribute('data-ps-action');
    if (!action) return;

    switch (action) {
      case TOGGLE_ACTION:
        event.preventDefault();
        if (isOpen) {
          closeDrawer();
        } else {
          openDrawer();
        }
        break;
      case CLOSE_ACTION:
        event.preventDefault();
        closeDrawer();
        break;
      case OPEN_SUB_ACTION:
        event.preventDefault();
        var btn = event.target.closest('[data-ps-action="' + OPEN_SUB_ACTION + '"]');
        var raw = (btn && btn.getAttribute('data-ps-data')) || '{}';
        console.log('[MoroMobileMenu] subpanel click, raw data:', raw);
        var category = null;
        try { category = JSON.parse(raw).category; } catch (_) {
          console.warn('[MoroMobileMenu] JSON parse failed for:', raw);
          return;
        }
        console.log('[MoroMobileMenu] parsed category:', category);
        openSubPanel(category);
        break;
      case CLOSE_SUB_ACTION:
        event.preventDefault();
        closeSubPanel();
        break;
    }
  }

  function onDocumentKeydown(event) {
    if (event.key !== 'Escape') return;
    if (!isOpen) return;

    if (subOpen) {
      closeSubPanel();
    } else {
      closeDrawer();
    }
  }

  /* ---- open / close drawer ---- */

  function openDrawer() {
    // Cerrar mega-menu y search panel si están abiertos
    if (typeof window.closeMoroMegaMenu === 'function') { window.closeMoroMegaMenu(); }
    if (typeof window.closeMoroSearchPanel === 'function') { window.closeMoroSearchPanel(); }

    // Reset sub-panel si estaba abierto
    if (subOpen) { resetSubPanel(); }

    // Mostrar overlay
    showElement(overlay);
    requestAnimationFrame(function () {
      overlay.classList.add(CLASS_OPEN);
    });

    // Mostrar drawer
    showElement(drawer);
    drawer.setAttribute('aria-hidden', 'false');
    requestAnimationFrame(function () {
      drawer.classList.add(CLASS_OPEN);
    });

    // Animación de cascada en los items: .is-open en el padre dispara las transiciones
    // con stagger via --moro-stagger en cada item

    // Scroll lock
    document.body.classList.add(BODY_OPEN_CLASS);

    // Actualizar toggle button aria
    var toggleBtn = document.querySelector('[data-ps-action="' + TOGGLE_ACTION + '"]');
    if (toggleBtn) { toggleBtn.setAttribute('aria-expanded', 'true'); }

    isOpen = true;

    // Focus trap inicial: el botón close
    setTimeout(function () {
      var closeBtn = drawer.querySelector('[data-ps-action="' + CLOSE_ACTION + '"]');
      if (closeBtn) { closeBtn.focus(); }
    }, 100);
  }

  function closeDrawer() {
    if (!isOpen) return;

    // Ocultar overlay
    overlay.classList.remove(CLASS_OPEN);
    setTimeout(function () {
      if (!isOpen) { hideElement(overlay); }
    }, OVERLAY_MS);

    // Ocultar drawer
    drawer.classList.remove(CLASS_OPEN);
    drawer.setAttribute('aria-hidden', 'true');
    setTimeout(function () {
      if (!isOpen) {
        hideElement(drawer);
        resetSubPanel();
      }
    }, TRANSITION_MS);

    // Scroll unlock
    document.body.classList.remove(BODY_OPEN_CLASS);

    // Actualizar toggle button aria
    var toggleBtn = document.querySelector('[data-ps-action="' + TOGGLE_ACTION + '"]');
    if (toggleBtn) {
      toggleBtn.setAttribute('aria-expanded', 'false');
      toggleBtn.focus();
    }

    isOpen = false;
  }

  /* ---- sub-panel ---- */

  function openSubPanel(category) {
    console.log('[MoroMobileMenu] openSubPanel category:', category);

    // Obtener contenido del mega menu desktop (mismo ID que usa moro-mega-menu.js)
    var desktopPanel = document.getElementById('moro-mega-panel-' + category);
    console.log('[MoroMobileMenu] desktopPanel:', desktopPanel);
    if (!desktopPanel) {
      console.warn('[MoroMobileMenu] desktopPanel not found for category:', category);
      // Listar todos los IDs de mega-panel disponibles
      var allPanels = document.querySelectorAll('[id^="moro-mega-panel-"]');
      console.log('[MoroMobileMenu] available panel IDs:', Array.prototype.map.call(allPanels, function (p) { return p.id; }));
      return;
    }

    // Clonar y adaptar para mobile
    buildSubContent(category, desktopPanel);

    // Actualizar título en el botón volver — iterar botones (evita escaping de JSON en selectores CSS)
    var title = 'Categoría';
    var buttons = drawer.querySelectorAll('[data-ps-action="' + OPEN_SUB_ACTION + '"]');
    for (var i = 0; i < buttons.length; i++) {
      var b = buttons[i];
      var bRaw = b.getAttribute('data-ps-data') || '{}';
      var bCat = null;
      try { bCat = JSON.parse(bRaw).category; } catch (_) {}
      if (String(bCat) === String(category)) {
        var span = b.querySelector('span');
        if (span) { title = span.textContent.trim(); }
        break;
      }
    }
    if (subTitleEl) { subTitleEl.textContent = title; }

    // Mostrar sub-panel
    showElement(subEl);
    subEl.setAttribute('aria-hidden', 'false');

    // Forzar reflow: el browser calcula display:flex + translateX(100%)
    // antes de agregar .is-open, para que la transición CSS dispare.
    void subEl.offsetHeight;

    // Animar al estado visible
    subEl.classList.add(CLASS_OPEN);
    if (mainEl) { mainEl.classList.add(CLASS_PUSHED); }

    subOpen = true;
    if (subEl) { subEl.scrollTop = 0; }
  }

  function closeSubPanel() {
    if (!subOpen) return;

    subEl.classList.remove(CLASS_OPEN);
    if (mainEl) { mainEl.classList.remove(CLASS_PUSHED); }
    subEl.setAttribute('aria-hidden', 'true');

    setTimeout(function () {
      if (!subOpen) {
        hideElement(subEl);
        if (subContent) { subContent.innerHTML = ''; }
      }
    }, SUB_TRANSITION_MS);

    subOpen = false;
  }

  function resetSubPanel() {
    subOpen = false;
    if (subEl) {
      subEl.classList.remove(CLASS_OPEN);
      subEl.setAttribute('aria-hidden', 'true');
      hideElement(subEl);
    }
    if (mainEl) { mainEl.classList.remove(CLASS_PUSHED); }
    if (subContent) { subContent.innerHTML = ''; }
  }

  /* ---- construye sub-contenido desde el mega menu desktop ---- */

  function buildSubContent(category, desktopPanel) {
    if (!subContent) {
      console.warn('[MoroMobileMenu] subContent is null, cannot build');
      return;
    }
    subContent.innerHTML = '';

    // Buscar links (moro-mega-menu__links)
    var linksWrap = desktopPanel.querySelector('.moro-mega-menu__links');
    console.log('[MoroMobileMenu] linksWrap found:', !!linksWrap);
    if (linksWrap) {
      var groups = linksWrap.querySelectorAll('.moro-mega-menu__group');
      groups.forEach(function (group) {
        var div = document.createElement('div');
        div.className = 'moro-mobile-drawer__sub-group';

        // Título del grupo
        var h3 = group.querySelector('.moro-mega-menu__group-title');
        if (h3) {
          var titleEl = document.createElement('h3');
          titleEl.className = 'moro-mobile-drawer__sub-group-title';
          titleEl.textContent = h3.textContent;
          div.appendChild(titleEl);
        }

        // Links
        var links = group.querySelectorAll('.moro-mega-menu__sublink');
        links.forEach(function (link) {
          var a = document.createElement('a');
          a.href = link.href;
          a.className = 'moro-mobile-drawer__sub-link';
          if (link.classList.contains('moro-mega-menu__sublink--all')) {
            a.classList.add('moro-mobile-drawer__sub-link--all');
          }
          a.textContent = link.textContent;
          div.appendChild(a);
        });

        if (links.length > 0) {
          subContent.appendChild(div);
        }
      });
    }

    // Buscar media (moro-mega-menu__media) — hasta 2 imágenes
    var mediaWrap = desktopPanel.querySelector('.moro-mega-menu__media');
    console.log('[MoroMobileMenu] mediaWrap found:', !!mediaWrap, ', subContent children:', subContent.children.length);
    if (mediaWrap) {
      var cards = mediaWrap.querySelectorAll('.moro-mega-menu__card');
      var cardArr = Array.prototype.slice.call(cards, 0, 2);
      if (cardArr.length > 0) {
        var mediaDiv = document.createElement('div');
        mediaDiv.className = 'moro-mobile-drawer__sub-media';

        cardArr.forEach(function (card) {
          var imgWrap = card.querySelector('.moro-mega-menu__image-wrap');
          var img = card.querySelector('.moro-mega-menu__image');
          var label = card.querySelector('.moro-mega-menu__card-label');

          var a = document.createElement('a');
          a.href = card.href;
          a.className = 'moro-mobile-drawer__sub-card';

          var iw = document.createElement('div');
          iw.className = 'moro-mobile-drawer__sub-image-wrap';

          var i = document.createElement('img');
          i.className = 'moro-mobile-drawer__sub-image';
          i.src = img ? img.src : '';
          i.alt = img ? img.alt : '';
          i.loading = 'lazy';

          iw.appendChild(i);
          a.appendChild(iw);

          if (label) {
            var p = document.createElement('p');
            p.className = 'moro-mobile-drawer__sub-card-label';
            p.textContent = label.textContent;
            a.appendChild(p);
          }

          mediaDiv.appendChild(a);
        });

        subContent.appendChild(mediaDiv);
      }
    }
  }

  /* ---- helpers ---- */

  function showElement(el) {
    if (!el) return;
    el.removeAttribute('hidden');
  }

  function hideElement(el) {
    if (!el) return;
    el.setAttribute('hidden', '');
  }

  /* ---- hook público ---- */

  window.closeMoroMobileDrawer = closeDrawer;

  /* ---- boot ---- */

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
