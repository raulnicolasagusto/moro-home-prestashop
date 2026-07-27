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
  let shippingConfig = { enabled: false, showHome: false, showBranch: true, showPickupPoints: true };
  let shippingEstimate = null;
  const pickupPointsCache = new Map();
  const PICKUP_POINTS_CACHE_TTL_MS = 10 * 60 * 1000;

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

  const estimateShippingAjax = (/** @type {string} */ postalCode) => {
    const params = new URLSearchParams();
    params.append('ajax', '1');
    params.append('action', 'estimateShipping');
    params.append('postal_code', postalCode);

    return fetch(ajaxUrl, { method: 'POST', body: params })
      .then(r => r.json())
      .then(data => {
        if (!data || !data.success) {
          showShippingError(data && data.error ? data.error : 'No pudimos calcular el envío en este momento.');
          return;
        }
        renderShippingResult(data);
      })
      .catch(() => {
        showShippingError('No pudimos calcular el envío en este momento.');
      });
  };

  const getPickupPointsAjax = (/** @type {string} */ postalCode) => {
    const params = new URLSearchParams();
    params.append('ajax', '1');
    params.append('action', 'getPickupPoints');
    params.append('postal_code', postalCode);

    return fetch(ajaxUrl, { method: 'POST', body: params })
      .then(r => r.json());
  };

  const getCachedPickupPoints = (/** @type {string} */ postalCode) => {
    const cached = pickupPointsCache.get(postalCode);
    if (!cached || !cached.ts || !Array.isArray(cached.points)) {
      return null;
    }

    if ((Date.now() - cached.ts) > PICKUP_POINTS_CACHE_TTL_MS) {
      pickupPointsCache.delete(postalCode);
      return null;
    }

    return cached.points;
  };

  const setCachedPickupPoints = (/** @type {string} */ postalCode, /** @type {Array<{id:string,name:string,address:string,city:string,province:string,postalCode:string,hours:string}>} */ points) => {
    pickupPointsCache.set(postalCode, {
      points,
      ts: Date.now(),
    });
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
    updateGrandTotal();
  };

  const parseMoney = (/** @type {string} */ value) => {
    const normalized = String(value || '')
      .replace(/[^0-9,.-]/g, '')
      .replace(/\./g, '')
      .replace(',', '.');
    const parsed = parseFloat(normalized);
    return Number.isFinite(parsed) ? parsed : 0;
  };

  const formatMoney = (/** @type {number} */ amount) =>
    '$ ' + Number(amount || 0).toLocaleString('es-AR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

  const updateGrandTotal = () => {
    const subtotalEl = $('[data-ps-ref="cart-subtotal"]');
    const shippingValueEl = $('[data-ps-ref="cart-shipping-value"]');
    const totalEl = $('[data-ps-ref="cart-total-value"]');
    const shippingRow = $('[data-ps-ref="cart-shipping-total"]');
    const grandTotalRow = $('[data-ps-ref="cart-grand-total"]');

    if (!subtotalEl || !totalEl || !shippingRow || !grandTotalRow || !shippingValueEl) return;

    const subtotalAmount = parseMoney(subtotalEl.textContent || '0');
    const shippingAmount = parseMoney(shippingValueEl.textContent || '0');
    const total = subtotalAmount + shippingAmount;

    totalEl.textContent = formatMoney(total);
    const hasShipping = shippingAmount > 0;
    shippingRow.hidden = !hasShipping;
    grandTotalRow.hidden = !hasShipping;
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
    const shippingEl = $('[data-ps-ref="cart-shipping"]');
    if (!emptyEl || !itemsEl || !footerEl) return;
    const has = items.length > 0;
    emptyEl.hidden = has;
    itemsEl.hidden = !has;
    footerEl.hidden = !has;
    if (shippingEl) {
      shippingEl.hidden = !has || !shippingConfig.enabled || !shippingConfig.showBranch;
    }

    if (!has) {
      resetShippingResult();
    }
  };

  const resetShippingResult = () => {
    const result = $('[data-ps-ref="cart-shipping-result"]');
    const options = $('[data-ps-ref="cart-shipping-options"]');
    const error = $('[data-ps-ref="cart-shipping-error"]');
    const shippingValueEl = $('[data-ps-ref="cart-shipping-value"]');
    const pickupLink = $('[data-ps-ref="cart-pickup-points-link"]');

    if (result) result.hidden = true;
    if (options) options.innerHTML = '';
    if (error) {
      error.hidden = true;
      error.textContent = '';
    }
    if (shippingValueEl) shippingValueEl.textContent = '$0,00';
    if (pickupLink) pickupLink.hidden = true;

    shippingEstimate = null;
    closePickupPointsModal();
    updateGrandTotal();
  };

  const setShippingLoading = (/** @type {boolean} */ isLoading) => {
    const button = /** @type {HTMLButtonElement|null} */ ($('[data-ps-action="calculate-shipping"]'));
    if (!button) return;

    if (!button.dataset.defaultLabel) {
      button.dataset.defaultLabel = button.textContent || 'Calcular';
    }

    button.disabled = isLoading;
    button.classList.toggle('is-loading', isLoading);
    button.setAttribute('aria-busy', isLoading ? 'true' : 'false');
    button.textContent = isLoading ? 'Consultando...' : (button.dataset.defaultLabel || 'Calcular');
  };

  const showShippingError = (/** @type {string} */ message) => {
    const result = $('[data-ps-ref="cart-shipping-result"]');
    const error = $('[data-ps-ref="cart-shipping-error"]');
    const options = $('[data-ps-ref="cart-shipping-options"]');
    if (result) result.hidden = false;
    if (options) options.innerHTML = '';
    if (error) {
      error.hidden = false;
      error.textContent = message;
    }
  };

  const renderShippingResult = (/** @type {{postalCode:string,shipping:string,total:string,options:Array<{label:string,price:string,selected:boolean}>}} */ data) => {
    const result = $('[data-ps-ref="cart-shipping-result"]');
    const cpLabel = $('[data-ps-ref="cart-shipping-postcode-label"]');
    const options = $('[data-ps-ref="cart-shipping-options"]');
    const error = $('[data-ps-ref="cart-shipping-error"]');
    const shippingValueEl = $('[data-ps-ref="cart-shipping-value"]');
    const pickupLink = $('[data-ps-ref="cart-pickup-points-link"]');

    if (!result || !cpLabel || !options || !shippingValueEl) return;

    cpLabel.textContent = 'Entregas para el CP: ' + data.postalCode;
    options.innerHTML = '';
    if (error) {
      error.hidden = true;
      error.textContent = '';
    }

    (data.options || []).forEach((option) => {
      const row = document.createElement('label');
      row.className = 'moro-cart-drawer__shipping-option' + (option.selected ? ' is-selected' : '');

      const left = document.createElement('div');
      left.className = 'moro-cart-drawer__shipping-option-left';

      const radio = document.createElement('span');
      radio.className = 'moro-cart-drawer__shipping-option-radio' + (option.selected ? ' is-selected' : '');
      left.appendChild(radio);

      const text = document.createElement('span');
      text.className = 'moro-cart-drawer__shipping-option-text';
      text.textContent = option.label || '';
      left.appendChild(text);

      const price = document.createElement('span');
      price.className = 'moro-cart-drawer__shipping-option-price';
      price.textContent = option.price || '$0,00';

      row.appendChild(left);
      row.appendChild(price);
      options.appendChild(row);
    });

    shippingValueEl.textContent = data.shipping || '$0,00';
    result.hidden = false;
    shippingEstimate = data;
    if (pickupLink) {
      const canShowPickupLink = Boolean(shippingConfig.showPickupPoints) && (data.options || []).length > 0;
      pickupLink.hidden = !canShowPickupLink;
    }
    updateGrandTotal();
  };

  const closePickupPointsModal = () => {
    const modal = /** @type {HTMLDialogElement|null} */ ($('[data-ps-ref="pickup-points-modal"]'));
    if (modal && modal.open) {
      modal.close();
    }
  };

  const renderPickupPointsList = (/** @type {Array<{id:string,name:string,address:string,city:string,province:string,postalCode:string,hours:string}>} */ points) => {
    const container = $('[data-ps-target="pickup-points-list"]');
    if (!container) return;

    if (!Array.isArray(points) || points.length === 0) {
      container.innerHTML = '<p class="moro-cart-drawer__pickup-empty">No encontramos puntos de retiro para este código postal.</p>';
      return;
    }

    const fragment = document.createDocumentFragment();
    points.forEach((point) => {
      const card = document.createElement('article');
      card.className = 'moro-cart-drawer__pickup-point';

      const name = document.createElement('h4');
      name.className = 'moro-cart-drawer__pickup-point-name';
      name.textContent = point.name || 'Sucursal Correo Argentino';

      const address = document.createElement('p');
      address.className = 'moro-cart-drawer__pickup-point-address';
      const addressLine = [point.address, point.city, point.province].filter(Boolean).join(' - ');
      address.textContent = addressLine + (point.postalCode ? ' (' + point.postalCode + ')' : '');

      card.appendChild(name);
      card.appendChild(address);

      if (point.hours) {
        const hours = document.createElement('p');
        hours.className = 'moro-cart-drawer__pickup-point-hours';
        hours.textContent = point.hours;
        card.appendChild(hours);
      }

      fragment.appendChild(card);
    });

    container.innerHTML = '';
    container.appendChild(fragment);
  };

  const openPickupPointsModal = () => {
    if (!shippingConfig.showPickupPoints) return;

    const modal = /** @type {HTMLDialogElement|null} */ ($('[data-ps-ref="pickup-points-modal"]'));
    const cpLabel = $('[data-ps-ref="pickup-points-postcode"]');
    const list = $('[data-ps-target="pickup-points-list"]');
    const input = /** @type {HTMLInputElement|null} */ ($('[data-ps-ref="cart-shipping-postcode"]'));
    const postalCode = shippingEstimate && shippingEstimate.postalCode
      ? String(shippingEstimate.postalCode)
      : (input ? input.value.trim() : '');

    if (!modal || !/^[0-9]{4}$/.test(postalCode)) {
      showShippingError('Primero calculá el envío para un código postal válido.');
      return;
    }

    if (cpLabel) cpLabel.textContent = 'Código postal: ' + postalCode;
    if (!modal.open) {
      modal.showModal();
    }

    const cachedPoints = getCachedPickupPoints(postalCode);
    if (cachedPoints) {
      renderPickupPointsList(cachedPoints);
      return;
    }

    if (list) list.innerHTML = '<p class="moro-cart-drawer__pickup-loading">Buscando puntos de retiro...</p>';

    getPickupPointsAjax(postalCode)
      .then((data) => {
        if (!data || !data.success) {
          if (list) {
            list.innerHTML = '<p class="moro-cart-drawer__pickup-error">' + (data && data.error ? data.error : 'No pudimos cargar los puntos de retiro.') + '</p>';
          }
          return;
        }
        const points = Array.isArray(data.points) ? data.points : [];
        setCachedPickupPoints(postalCode, points);
        renderPickupPointsList(points);
      })
      .catch(() => {
        if (list) {
          list.innerHTML = '<p class="moro-cart-drawer__pickup-error">No pudimos cargar los puntos de retiro.</p>';
        }
      });
  };

  /* =================================================================
     Open / Close
     ================================================================= */

  const openDrawer = () => {
    if (!drawer) return;
    fetchCart();
    // Quitar hidden primero para que el navegador renderice el elemento
    drawer.hidden = false;
    // Forzar reflow: el navegador registra el estado inicial (panel en translateX(100%))
    // antes de agregar .is-open que lo lleva a translateX(0) → la transici\u00f3n se ejecuta.
    void drawer.offsetWidth;
    drawer.classList.add('is-open');
    drawer.setAttribute('aria-hidden', 'false');
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
    // Esperar que termine la transici\u00f3n CSS antes de ocultar con hidden
    const onTransitionEnd = () => {
      if (!drawer.classList.contains('is-open')) drawer.hidden = true;
      drawer.removeEventListener('transitionend', onTransitionEnd);
    };
    drawer.addEventListener('transitionend', onTransitionEnd);
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
      case 'toggle-shipping-calc': {
        e.preventDefault();
        const input = /** @type {HTMLInputElement|null} */ ($('[data-ps-ref="cart-shipping-postcode"]'));
        if (input) input.focus();
        break;
      }
      case 'calculate-shipping': {
        // No prevenir default acá: el submit real del form lo maneja
        // onShippingSubmit(), que dispara la consulta AJAX.
        break;
      }
      case 'change-shipping-postcode': {
        e.preventDefault();
        const input = /** @type {HTMLInputElement|null} */ ($('[data-ps-ref="cart-shipping-postcode"]'));
        resetShippingResult();
        if (input) {
          input.focus();
          input.select();
        }
        break;
      }
      case 'view-pickup-points': {
        e.preventDefault();
        openPickupPointsModal();
        break;
      }
      case 'close-pickup-points-modal': {
        e.preventDefault();
        closePickupPointsModal();
        break;
      }
    }
  };

  const onShippingSubmit = (/** @type {Event} */ ev) => {
    ev.preventDefault();
    const form = /** @type {HTMLFormElement | null} */ (ev.target);
    if (!form) return;
    const input = form.querySelector('[data-ps-ref="cart-shipping-postcode"]');
    const cp = input ? /** @type {HTMLInputElement} */ (input).value.trim() : '';
    if (!/^\d{4}$/.test(cp)) {
      setShippingLoading(false);
      showShippingError('Ingresá un código postal válido de 4 cifras.');
      return;
    }

    setShippingLoading(true);
    estimateShippingAjax(cp).finally(() => {
      setShippingLoading(false);
    });
  };

  const onKeydown = (/** @type {KeyboardEvent} */ e) => {
    const modal = /** @type {HTMLDialogElement|null} */ ($('[data-ps-ref="pickup-points-modal"]'));
    if (e.key === 'Escape' && modal && modal.open) {
      closePickupPointsModal();
      return;
    }

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
        if (parsed.shipping) {
          shippingConfig = {
            enabled: Boolean(parsed.shipping.enabled),
            showHome: Boolean(parsed.shipping.showHome),
            showBranch: Boolean(parsed.shipping.showBranch),
            showPickupPoints: parsed.shipping.showPickupPoints !== false,
          };
        }
        console.log('[moroCart] ajaxUrl:', ajaxUrl);
      }
    } catch (_) {}

    document.addEventListener('click', onClick, true);
    document.addEventListener('keydown', onKeydown);

    // Listener de submit del form del calculador de envío (Fase 1: prevent only).
    const shippingForm = $('form[data-ps-ref="cart-shipping-form"]');
    if (shippingForm instanceof HTMLFormElement) {
      shippingForm.addEventListener('submit', onShippingSubmit);
    }

    const pickupModal = /** @type {HTMLDialogElement|null} */ ($('[data-ps-ref="pickup-points-modal"]'));
    if (pickupModal) {
      pickupModal.addEventListener('click', (ev) => {
        const rect = pickupModal.getBoundingClientRect();
        const isOutside = ev.clientX < rect.left || ev.clientX > rect.right || ev.clientY < rect.top || ev.clientY > rect.bottom;
        if (isOutside) {
          closePickupPointsModal();
        }
      });
    }

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
