{**
 * Moro Cart Drawer — marcado del aside lateral.
 *
 * Estado vacio por defecto. Los items se inyectan via JS en
 * [data-ps-target="cart-items"] usando el template [data-ps-template="cart-item"].
 *}

<aside
  id="moro-cart-drawer"
  class="moro-cart-drawer"
  role="dialog"
  aria-modal="true"
  aria-label="Tu carrito"
  aria-hidden="true"
  hidden
  data-ps-component="moro-cart-drawer"
  data-ps-data='{$moro_cart_drawer_ps_data}'
>
  <div class="moro-cart-drawer__overlay"
       data-ps-action="close-cart-drawer"
       aria-hidden="true"></div>

  <div class="moro-cart-drawer__panel"
       data-ps-ref="cart-panel"
       role="document">

    {* ---- Drawer Header ---- *}
    <div class="moro-cart-drawer__header">
      <h2 class="moro-cart-drawer__title">Tu Carrito</h2>
      <button type="button"
              class="moro-cart-drawer__close"
              aria-label="Cerrar carrito"
              data-ps-action="close-cart-drawer">
        <span class="material-symbols-outlined" aria-hidden="true">close</span>
      </button>
    </div>

    {* ---- Drawer Body ---- *}
    <div class="moro-cart-drawer__body" data-ps-ref="cart-body">

      {* Estado vacio (visible por defecto) *}
      <div class="moro-cart-drawer__empty" data-ps-ref="cart-empty">
        <div class="moro-cart-drawer__empty-icon">
          <span class="material-symbols-outlined" aria-hidden="true">shopping_bag</span>
        </div>
        <h3 class="moro-cart-drawer__empty-title">Tu carrito esta vacio.</h3>
        <p class="moro-cart-drawer__empty-text">No sabes por donde empezar? Descubri nuestras ultimas novedades curadas.</p>
        <a class="moro-cart-drawer__empty-link"
           href="{$moro_cart_drawer_new_url}">
          Ver Novedades
        </a>
      </div>

      {* Lista de items (oculta por defecto; JS la llena y muestra) *}
      <div class="moro-cart-drawer__items" data-ps-target="cart-items" hidden></div>

      {if $moro_cart_drawer_shipping_enabled}
      {* ---- Calculador de envio (ref designe/cart-con-envio.html linea 259) ---- *}
      <div class="moro-cart-drawer__shipping"
           data-ps-ref="cart-shipping"
           hidden>
        <button type="button"
                class="moro-cart-drawer__shipping-trigger"
                data-ps-action="toggle-shipping-calc">
          <span class="material-symbols-outlined" aria-hidden="true">local_shipping</span>
          <span class="moro-cart-drawer__shipping-label">Calcular costo de env&iacute;o</span>
        </button>
        <form class="moro-cart-drawer__shipping-form"
              data-ps-ref="cart-shipping-form"
              novalidate>
          <input type="text"
                 inputmode="numeric"
                 class="moro-cart-drawer__shipping-input"
                 placeholder="C&oacute;digo Postal"
                 aria-label="C&oacute;digo Postal"
                 maxlength="8"
                 data-ps-ref="cart-shipping-postcode" />
          <button type="submit"
                  class="moro-cart-drawer__shipping-submit"
                  data-ps-action="calculate-shipping">
            Calcular
          </button>
        </form>
      </div>
      {/if}
    </div>

    {* ---- Drawer Footer ---- *}
    <div class="moro-cart-drawer__footer" data-ps-ref="cart-footer" hidden>
      <div class="moro-cart-drawer__subtotal">
        <span class="moro-cart-drawer__subtotal-label">Subtotal</span>
        <span class="moro-cart-drawer__subtotal-value" data-ps-ref="cart-subtotal">$0,00</span>
      </div>
      <div class="moro-cart-drawer__actions">
        <a class="moro-cart-drawer__btn moro-cart-drawer__btn--secondary"
           href="{$moro_cart_drawer_cart_url}">
          Ver Carrito
        </a>
        <a class="moro-cart-drawer__btn moro-cart-drawer__btn--primary"
           href="{$moro_cart_drawer_order_url}">
          Finalizar Compra
        </a>
      </div>
    </div>
  </div>

  {* ---- Template de item (clonado por JS) ---- *}
  <template data-ps-template="cart-item">
    <div class="moro-cart-drawer__item">
      <a class="moro-cart-drawer__item-image-wrap" href="#" data-ps-ref="cart-item-image-link">
        <img class="moro-cart-drawer__item-image" src="" alt="" loading="lazy" data-ps-ref="cart-item-image">
      </a>
      <div class="moro-cart-drawer__item-details">
        <a class="moro-cart-drawer__item-name" href="#" data-ps-ref="cart-item-name-link"></a>
        <p class="moro-cart-drawer__item-price" data-ps-ref="cart-item-price"></p>
        <p class="moro-cart-drawer__item-variant" data-ps-ref="cart-item-variant"></p>
        <div class="moro-cart-drawer__item-actions">
          <div class="moro-cart-drawer__qty">
            <button type="button" class="moro-cart-drawer__qty-btn" aria-label="Quitar una unidad" data-ps-action="decrease-qty">
              <span class="material-symbols-outlined" aria-hidden="true">remove</span>
            </button>
            <span class="moro-cart-drawer__qty-value" data-ps-ref="cart-item-qty">1</span>
            <button type="button" class="moro-cart-drawer__qty-btn" aria-label="Agregar una unidad" data-ps-action="increase-qty">
              <span class="material-symbols-outlined" aria-hidden="true">add</span>
            </button>
          </div>
          <button type="button" class="moro-cart-drawer__item-remove" data-ps-action="remove-item">
            Quitar
          </button>
        </div>
      </div>
    </div>
  </template>
</aside>
