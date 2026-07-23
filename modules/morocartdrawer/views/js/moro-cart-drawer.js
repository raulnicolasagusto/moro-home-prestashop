/**
 * Moro Cart Drawer — JS.
 *
 * Arquitectura data-ps-* (AGENTS.md §5).
 *
 * Flujo:
 *   1. MutationObserver sobre el badge del carrito → detecta producto agregado
 *      y abre el drawer automáticamente (opción A).
 *   2. Al abrir el drawer llama al endpoint AJAX del módulo para obtener
 *      los items reales del carrito.
 *   3. Botones +/- y Quitar hacen POST AJAX contra el controller del módulo
 *      que a su vez manipula $cart del core de PrestaShop.
 */
(() => {
  'use strict';

  /**
   * @typedef {Object} CartItem
   * @property {number}  id_product
   * @property {number}  id_product_attribute
   * @property {string}  name
   * @property {string}  price
   * @property {number}  quantity
   * @property {string}  image
   * @property {string}  url
   * @property {string}  [variant]
   */

  /** @type {CartItem[]} */
  let items = [];

  let ajaxUrl = '';
  let lastBadgeCount = -1;
  let isOpen = false;

  const drawerSel = '[data-ps-component="moro-cart-drawer"]';
  /** @type {HTMLElement | null} */
  let drawer = null;

  const $ = (/** @type {string} */ sel, /** @type {ParentNode | null} */ root = null) =>
    (root || drawer || document).querySelector(sel);

  /* =================================================================
     AJAX
     ================================================================= */

  const fetchCart = () => {
    const url = ajaxUrl + (ajaxUrl.includes('?') ? '&' : '?') + 'ajax=1&action=getCart';
    console.log('[moroCart] fetching:', url);
    return fetch(url)
      .then(r => {
        if (!r.ok) throw new Error('HTTP ' + r.status + ' ' + r.statusText);
        return r.json();
      })
      .then(/** @param {{items: CartItem[], count: number, subtotal: string, empty: boolean}} data */ data => {
        console.log('[moroCart] fetchCart response items:', data.items ? data.items.length : 0);
        if (!data || !data.success) return;
        renderItems(data.items);
        updateSubtotal(data.subtotal || formatSubtotal());
      })
      .catch((err) => { console.error('[moroCart] fetchCart failed:', err); });
  };

  const updateQtyAjax = (/** @type {CartItem} */ item, /** @type {number} */ newQty) => {
    const params = new URLSearchParams();
    params.append('ajax', '1');
    params.append('action', 'updateQty');
    params.append('id_product', String(item.id_product));
    params.append('id_product_attribute', String(item.id_product_attribute));
    params.append('qty', String(newQty));
    params.append('op', 'up');

    return fetch(ajaxUrl, { method: 'POST', body: params })
      .then(r => r.json())
      .then(/** @param {{items: CartItem[], count: number, subtotal: string}} data */ data => {
        if (!data || !data.success) return;
        renderItems(data.items);
        updateSubtotal(data.subtotal || formatSubtotal());
        updateBadge(data.count);
      })
      .catch((err) => { console.error('[moroCart] updateQty failed:', err); });
  };

  const removeItemAjax = (/** @type {CartItem} */ item) => {
    const params = new URLSearchParams();
    params.append('ajax', '1');
    params.append('action', 'removeItem');
    params.append('id_product', String(item.id_product));
    params.append('id_product_attribute', String(item.id_product_attribute));

    return fetch(ajaxUrl, { method: 'POST', body: params })
      .then(r => r.json())
      .then(/** @param {{items: CartItem[], count: number, subtotal: string}} data */ data => {
        if (!data || !data.success) return;
        renderItems(data.items);
        updateSubtotal(data.subtotal || formatSubtotal());
        updateBadge(data.count);
      })
      .catch((err) => { console.error('[moroCart] removeItem failed:', err); });
  };

  /* =================================================================
     Render
     ================================================================= */

  const renderItems = (/** @type {CartItem[]} */ newItems) => {
    items = Array.isArray(newItems)
      ? newItems.map(it => ({ ...it, quantity: it.quantity || 1 }))
      : [];
    const container = $('[data-ps-target="cart-items"]');
    const tpl = $('template[data-ps-template="cart-item"]');
    if (!container || !tpl) return;

    container.innerHTML = '';

    items.forEach((item, idx) => {
      const el = /** @type {HTMLElement | null} */ (tpl.content.cloneNode(true)).firstElementChild;
      if (!el) return;

      const imgLink = el.querySelector('[data-ps-ref="cart-item-image-link"]');
      const img = el.querySelector('[data-ps-ref="cart-item-image"]');
      const nameLink = el.querySelector('[data-ps-ref="cart-item-name-link"]');
      const priceEl = el.querySelector('[data-ps-ref="cart-item-price"]');
      const variantEl = el.querySelector('[data-ps-ref="cart-item-variant"]');
      const qtyEl = el.querySelector('[data-ps-ref="cart-item-qty"]');

      const url = item.url || '#';
      if (imgLink) imgLink.setAttribute('href', url);
      if (img) { img.setAttribute('src', item.image || ''); img.setAttribute('alt', item.name || ''); }
      if (nameLink) { nameLink.textContent = item.name || ''; nameLink.setAttribute('href', url); }
      if (priceEl) priceEl.textContent = item.price || '';
      if (variantEl) { variantEl.hidden = !item.variant; if (item.variant) variantEl.textContent = item.variant; }
      if (qtyEl) qtyEl.textContent = String(item.quantity);

      el.dataset.itemIndex = String(idx);
      container.appendChild(el);
    });

    syncEmptyState();
  };

  const formatSubtotal = () => {
    let total = 0;
    items.forEach(it => {
      const n = parseFloat(String(it.price).replace(/[^0-9,]/g, '').replace(/\./g, '').replace(',', '.')) || 0;
      total += n * (it.quantity || 1);
    });
    return '$ ' + total.toLocaleString('es-AR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  };

  const updateSubtotal = (/** @type {string} */ val) => {
    const el = $('[data-ps-ref="cart-subtotal"]');
    if (el) el.textContent = val;
  };

  const updateBadge = (/** @type {number} */ count) => {
    const badge = document.querySelector('.header-block__badge');
    if (badge) {
      badge.textContent = String(count);
      lastBadgeCount = count;
    }
  };

  const syncEmptyState = () => {
    const emptyEl = $('[data-ps-ref="cart-empty"]');
    const itemsEl = $('[data-ps-target="cart-items"]');
    const footerEl = $('[data-ps-ref="cart-footer"]');
    if (!emptyEl || !itemsEl || !footerEl) return;
    const has = items.length > 0;
    emptyEl.hidden = has;
    itemsEl.hidden = !has;
    footerEl.hidden = !has;
  };

  /* =================================================================
     Open / Close
     ================================================================= */

  const openDrawer = () => {
    if (!drawer) return;
    // Always refresh cart data when opening
    fetchCart();
    drawer.classList.add('is-open');
    drawer.setAttribute('aria-hidden', 'false');
    drawer.hidden = false;
    document.body.classList.add('moro-cart-drawer-open');
    isOpen = true;
    const closeBtn = $('[data-ps-action="close-cart-drawer"]');
    if (closeBtn instanceof HTMLElement) closeBtn.focus();
  };

  const closeDrawer = () => {
    if (!drawer) return;
    drawer.classList.remove('is-open');
    drawer.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('moro-cart-drawer-open');
    isOpen = false;
    window.setTimeout(() => {
      if (!drawer.classList.contains('is-open')) drawer.hidden = true;
    }, 500);
  };

  /* =================================================================
     Badge observer → auto-open cuando se agrega un producto
     ================================================================= */

  const setupBadgeObserver = () => {
    const badge = document.querySelector('.header-block__badge');
    if (!badge) { window.setTimeout(setupBadgeObserver, 500); return; }

    lastBadgeCount = parseInt(badge.textContent || '0', 10) || 0;

    const observer = new MutationObserver(() => {
      const newCount = parseInt(badge.textContent || '0', 10) || 0;
      if (newCount > lastBadgeCount) {
        // Producto agregado → auto-open
        lastBadgeCount = newCount;
        if (!isOpen) openDrawer();
      }
      lastBadgeCount = newCount;
    });

    observer.observe(badge, { characterData: true, subtree: true, childList: true });
  };

  /* =================================================================
     Event delegation
     ================================================================= */

  const targetEl = (/** @type {Event} */ ev) => {
    let node = /** @type {HTMLElement | null} */ (ev.target);
    while (node && node !== document.body) {
      if (node.dataset.psAction) return node;
      node = node.parentElement;
    }
    return null;
  };

  const onClick = (/** @type {MouseEvent} */ e) => {
    if (!drawer) return;
    const target = targetEl(e);
    if (!target) return;

    switch (target.dataset.psAction) {
      case 'open-cart-drawer':
        e.preventDefault();
        openDrawer();
        break;
      case 'close-cart-drawer':
        e.preventDefault();
        closeDrawer();
        break;
      case 'increase-qty': {
        e.preventDefault();
        const itemEl = target.closest('.moro-cart-drawer__item');
        const idx = itemEl ? parseInt(/** @type {HTMLElement} */ (itemEl).dataset.itemIndex || '', 10) : -1;
        if (Number.isFinite(idx) && items[idx]) {
          const newQty = (items[idx].quantity || 1) + 1;
          updateQtyAjax(items[idx], newQty);
        }
        break;
      }
      case 'decrease-qty': {
        e.preventDefault();
        const itemEl = target.closest('.moro-cart-drawer__item');
        const idx = itemEl ? parseInt(/** @type {HTMLElement} */ (itemEl).dataset.itemIndex || '', 10) : -1;
        if (Number.isFinite(idx) && items[idx]) {
          const newQty = Math.max(1, (items[idx].quantity || 1) - 1);
          updateQtyAjax(items[idx], newQty);
        }
        break;
      }
      case 'remove-item': {
        e.preventDefault();
        const itemEl = target.closest('.moro-cart-drawer__item');
        const idx = itemEl ? parseInt(/** @type {HTMLElement} */ (itemEl).dataset.itemIndex || '', 10) : -1;
        if (Number.isFinite(idx) && items[idx]) {
          removeItemAjax(items[idx]);
        }
        break;
      }
    }
  };

  const onKeydown = (/** @type {KeyboardEvent} */ e) => {
    if (e.key === 'Escape' && drawer && isOpen) {
      closeDrawer();
    }
  };

  /* =================================================================
     Init
     ================================================================= */

  const initTick = () => {
    drawer = document.querySelector(drawerSel);
    if (!drawer) { window.setTimeout(initTick, 200); return; }

    // Cargar URL del endpoint AJAX desde data-ps-data
    try {
      const raw = drawer.getAttribute('data-ps-data');
      if (raw) {
        const parsed = JSON.parse(raw);
        ajaxUrl = parsed.ajaxUrl || '';
        console.log('[moroCart] ajaxUrl:', ajaxUrl);
      }
    } catch (_) {}

    document.addEventListener('click', onClick, true);
    document.addEventListener('keydown', onKeydown);
    syncEmptyState();

    // Load initial cart data in background
    if (ajaxUrl) {
      fetchCart().then(() => {
        // Prevent auto-open on page load
        const badge = document.querySelector('.header-block__badge');
        if (badge) lastBadgeCount = parseInt(badge.textContent || '0', 10) || 0;
      });
    }

    // Start observing badge for add-to-cart detection
    setupBadgeObserver();

    // Public API
    window.moroCart = {
      open: openDrawer,
      close: closeDrawer,
      refresh: fetchCart,
    };
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTick);
  } else {
    initTick();
  }
})();
