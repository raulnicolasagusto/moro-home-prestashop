(function () {
  'use strict';

  var root = document.querySelector('[data-ps-component="moro-single-page-checkout"]');

  if (!root) {
    return;
  }

  root.addEventListener('click', function (event) {
    var action = event.target.closest('[data-ps-action]');

    if (!action) {
      return;
    }

    if (action.getAttribute('data-ps-action') === 'preview-submit') {
      event.preventDefault();
    }
  });
}());
