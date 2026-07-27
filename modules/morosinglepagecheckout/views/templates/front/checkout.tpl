{extends file='page.tpl'}

{block name='page_title'}
  {l s='Checkout' d='Modules.Morosinglepagecheckout.Shop'}
{/block}

{block name='page_content_container'}
  <main
    class="moro-spc"
    data-ps-component="moro-single-page-checkout"
    data-ps-data="{$moro_spc_urls|json_encode|escape:'html':'UTF-8'}"
  >
    <section class="moro-spc__panel moro-spc__panel--form" aria-labelledby="moro-spc-contact-title">
      <div class="moro-spc__panel-inner moro-spc__panel-inner--form">
        <form class="moro-spc__form" data-ps-ref="checkout-form" novalidate>
          <fieldset class="moro-spc__section">
            <legend id="moro-spc-contact-title" class="moro-spc__title">
              {l s='Información de contacto' d='Modules.Morosinglepagecheckout.Shop'}
            </legend>

            <div class="moro-spc__field">
              <label class="moro-spc__label" for="moro-spc-email">
                {l s='Correo electrónico' d='Modules.Morosinglepagecheckout.Shop'}
              </label>
              <input
                id="moro-spc-email"
                class="moro-spc__input"
                name="email"
                type="email"
                autocomplete="email"
                placeholder="{l s='tu@email.com' d='Modules.Morosinglepagecheckout.Shop'}"
                data-ps-ref="email"
                required
              >
            </div>

            <div class="moro-spc__check">
              <input
                id="moro-spc-newsletter"
                class="moro-spc__checkbox"
                name="newsletter"
                type="checkbox"
                data-ps-ref="newsletter"
              >
              <label class="moro-spc__check-label" for="moro-spc-newsletter">
                {l s='Enviarme noticias y ofertas exclusivas' d='Modules.Morosinglepagecheckout.Shop'}
              </label>
            </div>
          </fieldset>

          <fieldset class="moro-spc__section">
            <legend class="moro-spc__title">
              {l s='Dirección de envío' d='Modules.Morosinglepagecheckout.Shop'}
            </legend>

            <div class="moro-spc__grid">
              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-firstname">
                  {l s='Nombre' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-firstname" class="moro-spc__input" name="firstname" type="text" autocomplete="given-name" data-ps-ref="firstname" required>
              </div>

              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-lastname">
                  {l s='Apellido' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-lastname" class="moro-spc__input" name="lastname" type="text" autocomplete="family-name" data-ps-ref="lastname" required>
              </div>

              <div class="moro-spc__field moro-spc__field--wide">
                <label class="moro-spc__label" for="moro-spc-address1">
                  {l s='Dirección' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-address1" class="moro-spc__input" name="address1" type="text" autocomplete="address-line1" data-ps-ref="address1" required>
              </div>

              <div class="moro-spc__field moro-spc__field--wide">
                <label class="moro-spc__label" for="moro-spc-address2">
                  {l s='Apartamento, piso, lote, etc. (opcional)' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-address2" class="moro-spc__input" name="address2" type="text" autocomplete="address-line2" data-ps-ref="address2">
              </div>

              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-city">
                  {l s='Ciudad' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-city" class="moro-spc__input" name="city" type="text" autocomplete="address-level2" data-ps-ref="city" required>
              </div>

              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-postcode">
                  {l s='Código postal' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-postcode" class="moro-spc__input" name="postcode" type="text" autocomplete="postal-code" inputmode="numeric" data-ps-ref="postcode" required>
              </div>

              <div class="moro-spc__field moro-spc__field--wide">
                <label class="moro-spc__label" for="moro-spc-phone">
                  {l s='Teléfono' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-phone" class="moro-spc__input" name="phone" type="tel" autocomplete="tel" data-ps-ref="phone" required>
              </div>
            </div>
          </fieldset>

          <section class="moro-spc__section" aria-labelledby="moro-spc-shipping-title">
            <h2 id="moro-spc-shipping-title" class="moro-spc__title">
              {l s='Envío' d='Modules.Morosinglepagecheckout.Shop'}
            </h2>
            <div class="moro-spc__pending" data-ps-target="carrier-options">
              {l s='En la próxima etapa se mostrarán los métodos disponibles según la dirección ingresada.' d='Modules.Morosinglepagecheckout.Shop'}
            </div>
          </section>

          <section class="moro-spc__section" aria-labelledby="moro-spc-payment-title">
            <h2 id="moro-spc-payment-title" class="moro-spc__title">
              {l s='Pago' d='Modules.Morosinglepagecheckout.Shop'}
            </h2>
            <p class="moro-spc__helper">
              {l s='Todas las transacciones se procesarán con los módulos de pago instalados.' d='Modules.Morosinglepagecheckout.Shop'}
            </p>
            <div class="moro-spc__pending" data-ps-target="payment-options">
              {l s='En la próxima etapa se conectarán las opciones reales de pago.' d='Modules.Morosinglepagecheckout.Shop'}
            </div>
          </section>

          <button class="moro-spc__button" type="button" data-ps-action="preview-submit" disabled>
            {l s='Completar pedido' d='Modules.Morosinglepagecheckout.Shop'}
          </button>
        </form>
      </div>
    </section>

    <aside class="moro-spc__panel moro-spc__panel--summary" aria-labelledby="moro-spc-summary-title">
      <div class="moro-spc__panel-inner moro-spc__panel-inner--summary">
        <h2 id="moro-spc-summary-title" class="moro-spc__title">
          {l s='Resumen del pedido' d='Modules.Morosinglepagecheckout.Shop'}
        </h2>

        <div class="moro-spc__cart" data-ps-target="cart-summary">
          {if isset($cart.products) && $cart.products|count > 0}
            <p class="moro-spc__cart-count">
              {$cart.summary_string|escape:'html':'UTF-8'}
            </p>

            <ul class="moro-spc__cart-list" aria-label="{l s='Productos en el carrito' d='Modules.Morosinglepagecheckout.Shop'}">
              {foreach from=$cart.products item=product}
                <li class="moro-spc__cart-item">
                  <div class="moro-spc__cart-image-wrap">
                    <span class="moro-spc__cart-badge">
                      {$product.quantity|intval}
                    </span>
                    <a href="{$product.url|escape:'html':'UTF-8'}" aria-label="{$product.name|escape:'html':'UTF-8'}">
                      {if isset($product.default_image.bySize.default_xs.url)}
                        <img
                          class="moro-spc__cart-image"
                          src="{$product.default_image.bySize.default_xs.url|escape:'html':'UTF-8'}"
                          {if isset($product.default_image.bySize.default_sm.url)}
                            srcset="{$product.default_image.bySize.default_xs.url|escape:'html':'UTF-8'} 1x, {$product.default_image.bySize.default_sm.url|escape:'html':'UTF-8'} 2x"
                          {/if}
                          alt="{$product.name|escape:'html':'UTF-8'}"
                          loading="lazy"
                        >
                      {elseif isset($urls.no_picture_image.bySize.default_xs.url)}
                        <img
                          class="moro-spc__cart-image"
                          src="{$urls.no_picture_image.bySize.default_xs.url|escape:'html':'UTF-8'}"
                          alt=""
                          loading="lazy"
                        >
                      {/if}
                    </a>
                  </div>

                  <div class="moro-spc__cart-info">
                    <a class="moro-spc__cart-name" href="{$product.url|escape:'html':'UTF-8'}">
                      {$product.name|escape:'html':'UTF-8'}
                    </a>

                    {if isset($product.attributes) && $product.attributes|count > 0}
                      <dl class="moro-spc__cart-attributes">
                        {foreach from=$product.attributes key=attribute item=value}
                          <div class="moro-spc__cart-attribute">
                            <dt>{$attribute|escape:'html':'UTF-8'}</dt>
                            <dd>{$value|escape:'html':'UTF-8'}</dd>
                          </div>
                        {/foreach}
                      </dl>
                    {/if}
                  </div>

                  <div class="moro-spc__cart-price">
                    {$product.total|escape:'html':'UTF-8'}
                  </div>
                </li>
              {/foreach}
            </ul>
          {else}
            <div class="moro-spc__pending moro-spc__pending--summary">
              {l s='Tu carrito está vacío.' d='Modules.Morosinglepagecheckout.Shop'}
            </div>
          {/if}
        </div>

        <div class="moro-spc__discount" aria-label="{l s='Código de descuento' d='Modules.Morosinglepagecheckout.Shop'}">
          <input
            class="moro-spc__input moro-spc__input--discount"
            name="discount_name"
            type="text"
            placeholder="{l s='Código de descuento' d='Modules.Morosinglepagecheckout.Shop'}"
            data-ps-ref="discount-name"
            disabled
          >
          <button class="moro-spc__secondary-button" type="button" data-ps-action="preview-discount" disabled>
            {l s='Aplicar' d='Modules.Morosinglepagecheckout.Shop'}
          </button>
        </div>

        <div class="moro-spc__totals" data-ps-target="cart-totals">
          {if isset($cart.subtotals)}
            {foreach from=$cart.subtotals item=subtotal}
              {if $subtotal && $subtotal.value|count_characters > 0 && $subtotal.type !== 'tax'}
                <div class="moro-spc__total-line">
                  <span>{$subtotal.label|escape:'html':'UTF-8'}</span>
                  <span>{if $subtotal.type === 'discount'}-&nbsp;{/if}{$subtotal.value|escape:'html':'UTF-8'}</span>
                </div>
              {/if}
            {/foreach}
          {/if}

          {if isset($cart.totals.total)}
            <div class="moro-spc__total-line moro-spc__total-line--grand">
              <span>{$cart.totals.total.label|escape:'html':'UTF-8'}</span>
              <span>{$cart.totals.total.value|escape:'html':'UTF-8'}</span>
            </div>
          {/if}

          {if isset($cart.subtotals.tax) && $cart.subtotals.tax.value|count_characters > 0}
            <div class="moro-spc__total-line moro-spc__total-line--tax">
              <span>{$cart.subtotals.tax.label|escape:'html':'UTF-8'}</span>
              <span>{$cart.subtotals.tax.value|escape:'html':'UTF-8'}</span>
            </div>
          {/if}
        </div>
      </div>
    </aside>
  </main>
{/block}
