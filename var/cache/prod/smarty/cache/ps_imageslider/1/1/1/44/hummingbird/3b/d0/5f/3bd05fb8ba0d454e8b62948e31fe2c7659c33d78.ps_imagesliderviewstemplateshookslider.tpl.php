<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:24
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e24a970c9_69778879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6a5c1e24a970c9_69778879 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <section class="ps-imageslider">
    <div
      id="ps_imageslider"
      class="carousel slide"
      data-bs-ride="carousel"                >
      <div class="carousel-indicators">
                  <button
            type="button"
            data-bs-target="#ps_imageslider"
            data-bs-slide-to="0"
            aria-label="Ir a la diapositiva 1"
            class="outline active"
            aria-current="true"          ></button>
                  <button
            type="button"
            data-bs-target="#ps_imageslider"
            data-bs-slide-to="1"
            aria-label="Ir a la diapositiva 2"
            class="outline "
                      ></button>
                  <button
            type="button"
            data-bs-target="#ps_imageslider"
            data-bs-slide-to="2"
            aria-label="Ir a la diapositiva 3"
            class="outline "
                      ></button>
              </div>

      <div class="carousel-inner" role="list" aria-label="Contenedor carrusel ">
                  <div class="carousel-item active" role="listitem" data-bs-interval="5000">
            <a class="ps-imageslider__link outline d-block h-100 text-body" href="https://www.prestashop-project.org">              <figure class="ps-imageslider__figure">
                <img class="w-100" src="http://localhost:8080/more-home/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1" fetchpriority="high" width="1110" height="340">

                                  <figcaption class="ps-imageslider__figcaption carousel-caption d-none d-lg-block fs-5">
                    <h2 class="h1 text-uppercase">Sample 1</h2>                    <div><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>                  </figcaption>
                              </figure>
            </a>          </div>
                  <div class="carousel-item" role="listitem" data-bs-interval="5000">
            <a class="ps-imageslider__link outline d-block h-100 text-body" href="https://www.prestashop-project.org">              <figure class="ps-imageslider__figure">
                <img class="w-100" src="http://localhost:8080/more-home/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2" loading="lazy" width="1110" height="340">

                                  <figcaption class="ps-imageslider__figcaption carousel-caption d-none d-lg-block fs-5">
                    <h2 class="h1 text-uppercase">Sample 2</h2>                    <div><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>                  </figcaption>
                              </figure>
            </a>          </div>
                  <div class="carousel-item" role="listitem" data-bs-interval="5000">
            <a class="ps-imageslider__link outline d-block h-100 text-body" href="https://www.prestashop-project.org">              <figure class="ps-imageslider__figure">
                <img class="w-100" src="http://localhost:8080/more-home/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3" loading="lazy" width="1110" height="340">

                                  <figcaption class="ps-imageslider__figcaption carousel-caption d-none d-lg-block fs-5">
                    <h2 class="h1 text-uppercase">Sample 3</h2>                    <div><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>                  </figcaption>
                              </figure>
            </a>          </div>
              </div>

      <button class="carousel-control-prev outline outline--rounded" type="button" data-bs-target="#ps_imageslider" data-bs-slide="prev" aria-label="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>

      <button class="carousel-control-next outline outline--rounded" type="button" data-bs-target="#ps_imageslider" data-bs-slide="next" aria-label="Siguiente">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </section>
<?php }
}
