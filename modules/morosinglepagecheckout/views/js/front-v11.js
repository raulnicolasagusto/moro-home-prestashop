(function () {
  'use strict';

  var root = document.querySelector('[data-ps-component="moro-single-page-checkout"]');

  if (!root) {
    return;
  }

  root.setAttribute('data-ps-spc-assets-version', 'front-v11');

  var config = {};
  var token = root.getAttribute('data-ps-token') || '';
  var form = root.querySelector('[data-ps-ref="checkout-form"]');
  var carrierTarget = root.querySelector('[data-ps-target="carrier-options"]');
  var paymentTarget = root.querySelector('[data-ps-target="payment-options"]');
  var saveTimer = 0;
  var shippingQuote = null;
  var pickupPoints = [];
  var selectedPickupPoint = null;
  var storageKey = 'moro_spc_checkout_form';
  var addressFields = ['email', 'firstname', 'lastname', 'address1', 'address2', 'city', 'id_state', 'postcode', 'phone', 'newsletter'];

  try {
    config = JSON.parse(root.getAttribute('data-ps-data') || '{}');
  } catch (error) {
    config = {};
  }

  function clearErrors() {
    root.querySelectorAll('[data-ps-error-for]').forEach(function (errorNode) {
      errorNode.textContent = '';
    });

    root.querySelectorAll('[aria-invalid="true"]').forEach(function (input) {
      input.removeAttribute('aria-invalid');
    });
  }

  function setErrors(errors) {
    Object.keys(errors || {}).forEach(function (field) {
      if (field === 'form') {
        return;
      }

      var errorNode = root.querySelector('[data-ps-error-for="' + field + '"]');
      var input = form ? form.elements[field] : null;

      if (errorNode) {
        errorNode.textContent = errors[field];
      }

      if (input) {
        input.setAttribute('aria-invalid', 'true');
      }
    });
  }

  function escapeHtml(value) {
    return String(value || '')
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;');
  }

  function updateTotals(totals) {
    if (!totals) {
      return;
    }

    var shipping = root.querySelector('[data-ps-total="shipping"]');
    var total = root.querySelector('[data-ps-total="total"]');

    if (shipping && totals.shipping) {
      shipping.textContent = totals.shipping;
    }

    if (total && totals.total) {
      total.textContent = totals.total;
    }
  }

  function getStoredFormData() {
    try {
      return JSON.parse(window.localStorage.getItem(storageKey) || '{}');
    } catch (error) {
      return {};
    }
  }

  function storeFormData() {
    if (!form || !window.localStorage) {
      return;
    }

    var data = {};
    addressFields.forEach(function (field) {
      var element = form.elements[field];

      if (!element) {
        return;
      }

      data[field] = element.type === 'checkbox' ? element.checked : element.value;
    });

    try {
      window.localStorage.setItem(storageKey, JSON.stringify(data));
    } catch (error) {}
  }

  function restoreFormData() {
    if (!form || !window.localStorage) {
      return;
    }

    var data = getStoredFormData();
    addressFields.forEach(function (field) {
      var element = form.elements[field];

      if (!element || typeof data[field] === 'undefined') {
        return;
      }

      if (element.type === 'checkbox') {
        element.checked = Boolean(data[field]);
        return;
      }

      if (element.value === '') {
        element.value = data[field];
      }
    });
  }

  function renderCarrierOptions(payload) {
    if (!carrierTarget) {
      return;
    }

    if (!payload.success) {
      carrierTarget.className = 'moro-spc__pending';
      carrierTarget.textContent = payload.error || 'No pudimos calcular el envío.';
      return;
    }

    shippingQuote = payload;
    pickupPoints = payload.pickupPoints || [];
    selectedPickupPoint = null;

    if (!payload.options || !payload.options.length) {
      carrierTarget.className = 'moro-spc__pending';
      carrierTarget.textContent = 'No hay métodos de envío disponibles para esta dirección.';
      updateTotals(payload);
      return;
    }

    carrierTarget.className = 'moro-spc__carrier-list';
    carrierTarget.innerHTML = payload.options.map(function (option) {
      var checked = option.selected ? ' checked' : '';
      var selectedClass = option.selected ? ' is-selected' : '';
      var delay = option.delay
        ? '<span class="moro-spc__carrier-delay">' + escapeHtml(option.delay) + '</span>'
        : '';
      var serviceName = option.serviceName
        ? '<span class="moro-spc__carrier-delay">' + escapeHtml(option.serviceName) + '</span>'
        : '';
      var pickupPanel = option.deliveryType === 'S'
        ? [
          '<div class="moro-spc__pickup-panel" data-ps-target="pickup-panel" data-ps-state="' + (option.selected ? 'active' : 'hidden') + '">',
          '<label class="moro-spc__pickup-label" for="moro-spc-pickup-select">Punto de retiro</label>',
          '<select id="moro-spc-pickup-select" class="moro-spc__pickup-select" data-ps-action="select-pickup-point"' + (pickupPoints.length ? '' : ' disabled') + '>',
          '<option value="">Elegí una sucursal...</option>',
          '</select>',
          '<div class="moro-spc__pickup-status" data-ps-target="pickup-status"></div>',
          '<div class="moro-spc__pickup-detail" data-ps-target="pickup-detail" hidden></div>',
          '</div>'
        ].join('')
        : '';

      return [
        '<div class="moro-spc__carrier-card' + selectedClass + '" data-ps-ref="shipping-card" data-ps-delivery-type="' + escapeHtml(option.deliveryType) + '">',
        '<label class="moro-spc__carrier-option">',
        '<input class="moro-spc__carrier-radio" type="radio" name="delivery_option" value="' + escapeHtml(option.id) + '" data-ps-action="select-quoted-shipping" data-ps-shipping-price="' + escapeHtml(option.priceAmount) + '" data-ps-shipping-label="' + escapeHtml(option.label) + '" data-ps-delivery-type="' + escapeHtml(option.deliveryType) + '" data-ps-product-type="' + escapeHtml(option.productType) + '" data-ps-product-name="' + escapeHtml(option.serviceName) + '"' + checked + '>',
        '<span class="moro-spc__carrier-main">',
        '<span class="moro-spc__carrier-name">' + escapeHtml(option.label || 'Envío') + '</span>',
        serviceName,
        delay,
        '</span>',
        '<span class="moro-spc__carrier-price">' + escapeHtml(option.price) + '</span>',
        '</label>',
        pickupPanel,
        '</div>'
      ].join('');
    }).join('');

    updateTotals(payload);

    var selectedBranch = carrierTarget.querySelector('[data-ps-action="select-quoted-shipping"][data-ps-delivery-type="S"]:checked');
    if (selectedBranch) {
      renderPickupPoints();
    }
  }

  function setSelectedShippingCard(input) {
    if (!carrierTarget) {
      return;
    }

    carrierTarget.querySelectorAll('[data-ps-ref="shipping-card"]').forEach(function (card) {
      var isSelected = card.contains(input);
      card.classList.toggle('is-selected', isSelected);

      var panel = card.querySelector('[data-ps-target="pickup-panel"]');
      if (panel) {
        panel.setAttribute('data-ps-state', isSelected && input.getAttribute('data-ps-delivery-type') === 'S' ? 'active' : 'hidden');
      }
    });
  }

  function getCurrentShippingInput() {
    return carrierTarget
      ? carrierTarget.querySelector('[data-ps-action="select-quoted-shipping"]:checked')
      : null;
  }

  function getPickupStatus() {
    return carrierTarget ? carrierTarget.querySelector('[data-ps-target="pickup-status"]') : null;
  }

  function formatPickupLabel(point) {
    return [
      point.name || 'Sucursal Correo Argentino',
      point.address || '',
      point.city || '',
      point.province || ''
    ].filter(function (chunk) {
      return String(chunk || '').trim() !== '';
    }).join(' - ');
  }

  function renderPickupDetail(point) {
    if (!carrierTarget) {
      return;
    }

    var detail = carrierTarget.querySelector('[data-ps-target="pickup-detail"]');
    if (!detail) {
      return;
    }

    if (!point) {
      detail.hidden = true;
      detail.innerHTML = '';
      return;
    }

    var address = point.address
      ? '<span class="moro-spc__pickup-address">' + escapeHtml(point.address) + '</span>'
      : '';
    var city = point.city
      ? '<span class="moro-spc__pickup-meta">' + escapeHtml(point.city) + '</span>'
      : '';
    var hours = point.hours
      ? '<span class="moro-spc__pickup-hours">' + escapeHtml(point.hours) + '</span>'
      : '<span class="moro-spc__pickup-hours">Horarios no informados por Correo Argentino.</span>';

    detail.hidden = false;
    detail.innerHTML = [
      '<span class="moro-spc__pickup-name">' + escapeHtml(point.name || 'Sucursal Correo Argentino') + '</span>',
      address,
      city,
      hours
    ].join('');
  }

  function renderPickupPoints() {
    if (!carrierTarget) {
      return;
    }

    var select = carrierTarget.querySelector('[data-ps-action="select-pickup-point"]');
    var statusNode = getPickupStatus();

    if (!select) {
      return;
    }

    if (statusNode) {
      statusNode.textContent = pickupPoints.length
        ? 'Elegí la sucursal donde querés retirar.'
        : 'No encontramos sucursales para ese código postal.';
    }

    select.disabled = !pickupPoints.length;
    select.innerHTML = '<option value="">Elegí una sucursal...</option>' + pickupPoints.map(function (point) {
      var selected = selectedPickupPoint && selectedPickupPoint.id === point.id ? ' selected' : '';

      return '<option value="' + escapeHtml(point.id) + '"' + selected + '>' + escapeHtml(formatPickupLabel(point)) + '</option>';
    }).join('');

    renderPickupDetail(selectedPickupPoint);
  }

  function saveQuotedShipping(input, pickupPoint) {
    if (!config.shipping_select || !input) {
      return;
    }

    var formData = new FormData();
    var selectedPrice = parseFloat(input.getAttribute('data-ps-shipping-price') || '0');
    formData.append('token', token);
    formData.append('delivery_type', input.getAttribute('data-ps-delivery-type') || '');
    formData.append('price', String(selectedPrice));
    formData.append('product_type', input.getAttribute('data-ps-product-type') || 'CP');
    formData.append('product_name', input.getAttribute('data-ps-product-name') || 'Correo Argentino');

    if (pickupPoint) {
      formData.append('agency_id', pickupPoint.id || '');
      formData.append('agency_name', pickupPoint.name || '');
      formData.append('agency_address', pickupPoint.address || '');
      formData.append('agency_postal_code', pickupPoint.postalCode || '');
    }

    fetch(config.shipping_select, {
      method: 'POST',
      body: formData,
      credentials: 'same-origin'
    }).catch(function () {});
  }

  function calculateShipping() {
    if (!config.shipping_quote || !carrierTarget) {
      return;
    }

    var selectedSummary = root.querySelector('[data-ps-ref="shipping-selected"]');
    if (selectedSummary) {
      selectedSummary.hidden = true;
    }

    var button = root.querySelector('[data-ps-action="calculate-shipping"]');
    var buttonText = button ? button.textContent : '';

    if (button) {
      button.disabled = true;
      button.setAttribute('data-ps-state', 'loading');
      button.textContent = 'Calculando envío...';
    }

    carrierTarget.className = 'moro-spc__pending';
    carrierTarget.textContent = 'Calculando métodos de envío...';

    var formData = new FormData();
    formData.append('token', token);

    fetch(config.shipping_quote, {
      method: 'POST',
      body: formData,
      credentials: 'same-origin'
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (payload) {
        renderCarrierOptions(payload);
      })
      .catch(function () {
        carrierTarget.className = 'moro-spc__pending';
        carrierTarget.textContent = 'No pudimos calcular el envío. Intentá nuevamente.';
      })
      .finally(function () {
        if (button) {
          button.disabled = false;
          button.removeAttribute('data-ps-state');
          button.textContent = buttonText || 'Calcular envío';
        }
      });
  }

  function selectCarrier(input) {
    if (!config.carrier_select || !input) {
      return;
    }

    var formData = new FormData();
    formData.append('token', token);
    formData.append('delivery_option', input.value);

    fetch(config.carrier_select, {
      method: 'POST',
      body: formData,
      credentials: 'same-origin'
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (payload) {
        if (!payload.success) {
          if (carrierTarget) {
            carrierTarget.className = 'moro-spc__pending';
            carrierTarget.textContent = payload.message || 'No pudimos seleccionar este envío.';
          }
          return;
        }

        updateTotals(payload.totals);
      })
      .catch(function () {
        if (carrierTarget) {
          carrierTarget.className = 'moro-spc__pending';
          carrierTarget.textContent = 'No pudimos seleccionar este envío. Intentá nuevamente.';
        }
      });
  }

  function selectQuotedShipping(input) {
    if (!shippingQuote || !shippingQuote.options || !input) {
      return;
    }

    var selectedOption = null;
    var selectedPrice = input ? parseFloat(input.getAttribute('data-ps-shipping-price') || '0') : 0;
    var subtotal = parseFloat(shippingQuote.subtotalAmount || '0');

    shippingQuote.options.forEach(function (option) {
      if (option.id === input.value) {
        selectedOption = option;
      }
    });

    if (!selectedOption) {
      return;
    }

    setSelectedShippingCard(input);

    var shipping = root.querySelector('[data-ps-total="shipping"]');
    var total = root.querySelector('[data-ps-total="total"]');

    if (shipping) {
      shipping.textContent = selectedOption.price;
    }

    if (total && subtotal > 0) {
      total.textContent = (subtotal + selectedPrice).toLocaleString('es-AR', {
        style: 'currency',
        currency: 'ARS'
      });
    }

    if (input.getAttribute('data-ps-delivery-type') === 'S') {
      renderPickupPoints();
      return;
    }

    selectedPickupPoint = null;
    saveQuotedShipping(input, null);
  }

  function selectPickupPoint(select) {
    var pickupId = select ? select.value : '';
    var currentInput = getCurrentShippingInput();

    selectedPickupPoint = null;
    pickupPoints.forEach(function (point) {
      if (point.id === pickupId) {
        selectedPickupPoint = point;
      }
    });

    if (!selectedPickupPoint || !currentInput) {
      renderPickupDetail(null);
      return;
    }

    renderPickupDetail(selectedPickupPoint);
    saveQuotedShipping(currentInput, selectedPickupPoint);
  }

  function selectPaymentOption(input) {
    if (!paymentTarget || !input) {
      return;
    }

    var selectedId = input.id;

    paymentTarget.querySelectorAll('[data-ps-ref="payment-card"]').forEach(function (card) {
      var cardInput = card.querySelector('[data-ps-action="select-payment-option"]');
      var isSelected = cardInput && cardInput.id === selectedId;
      var additional = card.querySelector('.js-additional-information');
      var paymentForm = card.querySelector('.js-payment-option-form');

      card.classList.toggle('is-selected', Boolean(isSelected));

      if (additional) {
        additional.hidden = !isSelected;
        additional.style.display = isSelected ? '' : 'none';
      }

      if (paymentForm) {
        paymentForm.hidden = !isSelected;
        paymentForm.style.display = isSelected ? '' : 'none';
      }
    });
  }

  function submitSelectedPaymentOption() {
    if (!paymentTarget) {
      return;
    }

    var selectedInput = paymentTarget.querySelector('[data-ps-action="select-payment-option"]:checked');
    if (!selectedInput) {
      return;
    }

    var selectedCard = selectedInput.closest('[data-ps-ref="payment-card"]');
    var paymentFormWrapper = selectedCard ? selectedCard.querySelector('.js-payment-option-form') : null;
    var paymentForm = paymentFormWrapper ? paymentFormWrapper.querySelector('form') : null;

    if (!paymentForm) {
      return;
    }

    if (paymentForm.id && paymentForm.id.indexOf('mp-') === 0) {
      return;
    }

    var hiddenSubmit = paymentForm.querySelector('button[type="submit"], input[type="submit"]');
    if (hiddenSubmit) {
      hiddenSubmit.click();
      return;
    }

    paymentForm.submit();
  }

  function shouldSaveAddress() {
    if (!form) {
      return false;
    }

    var fields = ['email', 'firstname', 'lastname', 'address1', 'city', 'postcode', 'phone'];

    if (form.elements.id_state) {
      fields.push('id_state');
    }

    return fields.every(function (field) {
      return form.elements[field] && form.elements[field].value.trim() !== '';
    });
  }

  function saveAddress() {
    if (!form || !config.address || !shouldSaveAddress()) {
      return;
    }

    clearErrors();
    var formData = new FormData(form);
    formData.append('token', token);

    fetch(config.address, {
      method: 'POST',
      body: formData,
      credentials: 'same-origin'
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (payload) {
        if (!payload.success) {
          setErrors(payload.errors || {});
        }
      })
      .catch(function () {});
  }

  function scheduleAddressSave() {
    window.clearTimeout(saveTimer);
    saveTimer = window.setTimeout(saveAddress, 650);
  }

  if (form) {
    restoreFormData();
    form.addEventListener('change', scheduleAddressSave);
    form.addEventListener('input', scheduleAddressSave);
    form.addEventListener('change', storeFormData);
    form.addEventListener('input', storeFormData);

    if (shouldSaveAddress()) {
      storeFormData();
      scheduleAddressSave();
    }
  }

  if (carrierTarget) {
    carrierTarget.addEventListener('change', function (event) {
      var input = event.target.closest('[data-ps-action="select-carrier"]');

      if (input) {
        selectCarrier(input);
      }

      input = event.target.closest('[data-ps-action="select-quoted-shipping"]');

      if (input) {
        selectQuotedShipping(input);
      }
    });

    carrierTarget.addEventListener('change', function (event) {
      var select = event.target.closest('select[data-ps-action="select-pickup-point"]');

      if (select) {
        selectPickupPoint(select);
      }
    });
  }

  if (paymentTarget) {
    paymentTarget.addEventListener('change', function (event) {
      var input = event.target.closest('[data-ps-action="select-payment-option"]');

      if (input) {
        selectPaymentOption(input);
      }
    });
  }

  root.addEventListener('click', function (event) {
    var action = event.target.closest('[data-ps-action]');

    if (!action) {
      return;
    }

    if (action.getAttribute('data-ps-action') === 'preview-submit') {
      event.preventDefault();
    }

    if (action.getAttribute('data-ps-action') === 'calculate-shipping') {
      event.preventDefault();
      calculateShipping();
    }

    if (action.getAttribute('data-ps-action') === 'submit-payment-option') {
      submitSelectedPaymentOption();
    }

  });
}());
