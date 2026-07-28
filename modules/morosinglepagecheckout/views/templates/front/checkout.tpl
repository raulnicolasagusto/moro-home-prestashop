{extends file='page.tpl'}

{block name='page_title'}
  {l s='Checkout' d='Modules.Morosinglepagecheckout.Shop'}
{/block}

{block name='breadcrumb'}{/block}

{block name='page_content_container'}
  <main
    class="moro-spc"
    data-ps-component="moro-single-page-checkout"
    data-ps-data="{$moro_spc_urls|json_encode|escape:'html':'UTF-8'}"
    data-ps-token="{$moro_spc_token|escape:'html':'UTF-8'}"
  >
    <section class="moro-spc__panel moro-spc__panel--form" aria-labelledby="moro-spc-contact-title">
      <div class="moro-spc__panel-inner moro-spc__panel-inner--form">
        <form class="moro-spc__form" data-ps-ref="checkout-form" novalidate>
          <input type="hidden" name="id_country" value="{$moro_spc_id_country|intval}" data-ps-ref="id-country">

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
                aria-describedby="moro-spc-email-error"
                required
              >
              <p id="moro-spc-email-error" class="moro-spc__error" data-ps-error-for="email"></p>
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
                <input id="moro-spc-firstname" class="moro-spc__input" name="firstname" type="text" autocomplete="given-name" data-ps-ref="firstname" aria-describedby="moro-spc-firstname-error" required>
                <p id="moro-spc-firstname-error" class="moro-spc__error" data-ps-error-for="firstname"></p>
              </div>

              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-lastname">
                  {l s='Apellido' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-lastname" class="moro-spc__input" name="lastname" type="text" autocomplete="family-name" data-ps-ref="lastname" aria-describedby="moro-spc-lastname-error" required>
                <p id="moro-spc-lastname-error" class="moro-spc__error" data-ps-error-for="lastname"></p>
              </div>

              <div class="moro-spc__field moro-spc__field--wide">
                <label class="moro-spc__label" for="moro-spc-address1">
                  {l s='Dirección' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-address1" class="moro-spc__input" name="address1" type="text" autocomplete="address-line1" data-ps-ref="address1" aria-describedby="moro-spc-address1-error" required>
                <p id="moro-spc-address1-error" class="moro-spc__error" data-ps-error-for="address1"></p>
              </div>

              <div class="moro-spc__field moro-spc__field--wide">
                <label class="moro-spc__label" for="moro-spc-address2">
                  {l s='Apartamento, piso, lote, etc. (opcional)' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-address2" class="moro-spc__input" name="address2" type="text" autocomplete="address-line2" data-ps-ref="address2" aria-describedby="moro-spc-address2-error">
                <p id="moro-spc-address2-error" class="moro-spc__error" data-ps-error-for="address2"></p>
              </div>

              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-city">
                  {l s='Ciudad' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-city" class="moro-spc__input" name="city" type="text" autocomplete="address-level2" data-ps-ref="city" aria-describedby="moro-spc-city-error" required>
                <p id="moro-spc-city-error" class="moro-spc__error" data-ps-error-for="city"></p>
              </div>

              {if isset($moro_spc_states) && $moro_spc_states|count > 0}
                <div class="moro-spc__field">
                  <label class="moro-spc__label" for="moro-spc-id-state">
                    {l s='Provincia' d='Modules.Morosinglepagecheckout.Shop'}
                  </label>
                  <select id="moro-spc-id-state" class="moro-spc__input" name="id_state" data-ps-ref="id-state" aria-describedby="moro-spc-id-state-error" required>
                    <option value="">{l s='Seleccioná una provincia' d='Modules.Morosinglepagecheckout.Shop'}</option>
                    {foreach from=$moro_spc_states item=state}
                      <option value="{$state.id_state|intval}">{$state.name|escape:'html':'UTF-8'}</option>
                    {/foreach}
                  </select>
                  <p id="moro-spc-id-state-error" class="moro-spc__error" data-ps-error-for="id_state"></p>
                </div>
              {/if}

              <div class="moro-spc__field">
                <label class="moro-spc__label" for="moro-spc-postcode">
                  {l s='Código postal' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-postcode" class="moro-spc__input" name="postcode" type="text" autocomplete="postal-code" inputmode="numeric" data-ps-ref="postcode" aria-describedby="moro-spc-postcode-error" required>
                <p id="moro-spc-postcode-error" class="moro-spc__error" data-ps-error-for="postcode"></p>
              </div>

              <div class="moro-spc__field moro-spc__field--wide">
                <label class="moro-spc__label" for="moro-spc-phone">
                  {l s='Teléfono' d='Modules.Morosinglepagecheckout.Shop'}
                </label>
                <input id="moro-spc-phone" class="moro-spc__input" name="phone" type="tel" autocomplete="tel" data-ps-ref="phone" aria-describedby="moro-spc-phone-error" required>
                <p id="moro-spc-phone-error" class="moro-spc__error" data-ps-error-for="phone"></p>
              </div>
            </div>
          </fieldset>

          <section class="moro-spc__section" aria-labelledby="moro-spc-shipping-title">
            <h2 id="moro-spc-shipping-title" class="moro-spc__title">
              {l s='Envío' d='Modules.Morosinglepagecheckout.Shop'}
            </h2>
            <div class="moro-spc__shipping-calc">
              <p class="moro-spc__helper">
                {l s='Calculá el envío con el código postal de la dirección cargada.' d='Modules.Morosinglepagecheckout.Shop'}
              </p>
              <button class="moro-spc__secondary-button moro-spc__secondary-button--wide" type="button" data-ps-action="calculate-shipping">
                {l s='Calcular envío' d='Modules.Morosinglepagecheckout.Shop'}
              </button>
            </div>
            <div class="moro-spc__pending" data-ps-target="carrier-options" data-ps-state="idle">
              {l s='Todavía no calculaste el envío.' d='Modules.Morosinglepagecheckout.Shop'}
            </div>
          </section>
        </form>

        <section class="moro-spc__section moro-spc__section--payment" aria-labelledby="moro-spc-payment-title">
          <h2 id="moro-spc-payment-title" class="moro-spc__title">
            {l s='Pago' d='Modules.Morosinglepagecheckout.Shop'}
          </h2>

          {if isset($moro_spc_payment_options) && $moro_spc_payment_options|count > 0}
            <div class="moro-spc__payment-list" data-ps-target="payment-options">
              {foreach from=$moro_spc_payment_options item=option name=moro_spc_payment_options}
                <article class="moro-spc__payment-card{if $option.selected} is-selected{/if}" data-ps-ref="payment-card">
                  <label class="moro-spc__payment-option" for="{$option.id|escape:'html':'UTF-8'}">
                    <input
                      id="{$option.id|escape:'html':'UTF-8'}"
                      class="moro-spc__payment-radio"
                      type="radio"
                      name="payment-option"
                      data-ps-action="select-payment-option"
                      data-module-name="{$option.module_name|escape:'html':'UTF-8'}"
                      {if $option.selected}checked{/if}
                    >
                    <span class="moro-spc__payment-main">
                      <span class="moro-spc__payment-title">{$option.call_to_action_text|escape:'html':'UTF-8'}</span>
                    </span>
                    {if $option.logo}
                      <img class="moro-spc__payment-logo" src="{$option.logo|escape:'html':'UTF-8'}" alt="" loading="lazy">
                    {/if}
                  </label>

                  {if $option.additionalInformation}
                    <div id="{$option.id|escape:'html':'UTF-8'}-additional-information" class="moro-spc__payment-additional js-additional-information" {if !$option.selected}hidden{/if}>
                      {$option.additionalInformation nofilter}
                    </div>
                  {/if}

                  <div id="pay-with-{$option.id|escape:'html':'UTF-8'}-form" class="moro-spc__payment-form js-payment-option-form" {if !$option.selected}hidden{/if}>
                    {if $option.form}
                      {$option.form nofilter}
                    {elseif $option.action}
                      <form method="POST" action="{$option.action nofilter}">
                        {foreach from=$option.inputs item=input}
                          <input type="{$input.type|escape:'html':'UTF-8'}" name="{$input.name|escape:'html':'UTF-8'}" value="{$input.value|escape:'html':'UTF-8'}">
                        {/foreach}
                        <button id="pay-with-{$option.id|escape:'html':'UTF-8'}" type="submit" hidden></button>
                      </form>
                    {/if}
                  </div>
                </article>
              {/foreach}
            </div>

            <div id="payment-confirmation" class="moro-spc__payment-confirmation js-payment-confirmation">
              <button class="moro-spc__button" type="submit" data-ps-action="submit-payment-option">
                {l s='Completar pedido' d='Modules.Morosinglepagecheckout.Shop'}
              </button>
            </div>
          {else}
            <div class="moro-spc__pending" data-ps-target="payment-options">
              {l s='No hay métodos de pago disponibles por el momento.' d='Modules.Morosinglepagecheckout.Shop'}
            </div>
          {/if}
        </section>
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
          {assign var=moro_spc_has_shipping_line value=false}
          {if isset($cart.subtotals)}
            {foreach from=$cart.subtotals item=subtotal}
              {if $subtotal && $subtotal.value|count_characters > 0 && $subtotal.type !== 'tax'}
                <div class="moro-spc__total-line">
                  <span>{$subtotal.label|escape:'html':'UTF-8'}</span>
                  {if $subtotal.type === 'shipping'}
                    {assign var=moro_spc_has_shipping_line value=true}
                  {/if}
                  <span
                    {if $subtotal.type === 'shipping'}data-ps-total="shipping"{/if}
                    {if $subtotal.type === 'products' && isset($subtotal.amount)}data-ps-total="subtotal" data-ps-amount="{$subtotal.amount|floatval}"{/if}
                  >{if $subtotal.type === 'discount'}-&nbsp;{/if}{$subtotal.value|escape:'html':'UTF-8'}</span>
                </div>
              {/if}
            {/foreach}
          {/if}

          {if !$moro_spc_has_shipping_line}
            <div class="moro-spc__total-line">
              <span>{l s='Envío' d='Modules.Morosinglepagecheckout.Shop'}</span>
              <span data-ps-total="shipping">{l s='Pendiente' d='Modules.Morosinglepagecheckout.Shop'}</span>
            </div>
          {/if}

          {if isset($cart.totals.total)}
            <div class="moro-spc__total-line moro-spc__total-line--grand">
              <span>{$cart.totals.total.label|escape:'html':'UTF-8'}</span>
              <span data-ps-total="total">{$cart.totals.total.value|escape:'html':'UTF-8'}</span>
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
