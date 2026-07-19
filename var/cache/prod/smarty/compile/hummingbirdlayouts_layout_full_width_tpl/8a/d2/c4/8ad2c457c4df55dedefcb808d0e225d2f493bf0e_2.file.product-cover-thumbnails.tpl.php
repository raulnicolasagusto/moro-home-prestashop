<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:18
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1ffe800e37_84777688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ad2c457c4df55dedefcb808d0e225d2f493bf0e' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 2,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_6a5c1ffe800e37_84777688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="product__images js-images-container">
  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 0) {?>
    <div
      id="product-images-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
      class="product__carousel carousel slide js-product-carousel"
    >
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="carousel-inner">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16876246246a5c1ffe7d1de7_56171403', 'product_cover');
?>

      </div>

      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
        <button class="carousel-control-prev outline outline--rounded" type="button" data-bs-target="#product-images-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous image','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        </button>

        <button class="carousel-control-next outline outline--rounded" type="button" data-bs-target="#product-images-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next image','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        </button>
      <?php }?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20715148306a5c1ffe7e7b00_86759011', 'product_images_modal_button');
?>

    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5894166796a5c1ffe7e8fb7_40154760', 'product_images');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

  <?php } else { ?>
    <div class="product__no-image">
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

      <picture>
        <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xl']['sources']['avif']))) {?>
          <source 
            srcset="
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xl']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 400w,
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 720w"
            sizes="(min-width: 992px) 50vw, (min-width: 360px) 33vw, 100vw"
            type="image/avif"
          >
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xl']['sources']['webp']))) {?>
          <source 
            srcset="
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xl']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 400w,
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 720w"
            sizes="(min-width: 992px) 50vw, (min-width: 360px) 33vw, 100vw"
            type="image/webp"
          >
        <?php }?>

        <img
          class="img-fluid"
          srcset="
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xl']['url']), ENT_QUOTES, 'UTF-8');?>
 400w,
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['url']), ENT_QUOTES, 'UTF-8');?>
 720w"
          sizes="(min-width: 992px) 50vw, (min-width: 360px) 33vw, 100vw"
          width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['width']), ENT_QUOTES, 'UTF-8');?>
"
          height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['height']), ENT_QUOTES, 'UTF-8');?>
"
          src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xl']['url']), ENT_QUOTES, 'UTF-8');?>
" 
          loading="lazy"
          alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
        >
      </picture>
    </div>
  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8323411406a5c1ffe7ffbd0_24516824', 'product_images_modal');
?>

</div>
<?php }
/* {block 'product_cover'} */
class Block_16876246246a5c1ffe7d1de7_56171403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_16876246246a5c1ffe7d1de7_56171403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'key', 'productImages', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['index'];
?>
            <div class="carousel-item<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> active<?php }?>">
              <picture>
                <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['sources']['avif']))) {?>
                  <source 
                    srcset="
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 400w,
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 720w"
                    sizes="(min-width: 992px) 50vw, (min-width: 360px) 33vw, 100vw"
                    type="image/avif"
                  >
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['sources']['webp']))) {?>
                  <source 
                    srcset="
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 400w,
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 720w"
                    sizes="(min-width: 992px) 50vw, (min-width: 360px) 33vw, 100vw"
                    type="image/webp"
                  >
                <?php }?>

                <img
                  class="img-fluid w-100"
                  srcset="
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['url']), ENT_QUOTES, 'UTF-8');?>
 400w,
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['url']), ENT_QUOTES, 'UTF-8');?>
 720w"
                  sizes="(min-width: 992px) 50vw, (min-width: 360px) 33vw, 100vw"
                  src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['url']), ENT_QUOTES, 'UTF-8');?>
" 
                  width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['width']), ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['height']), ENT_QUOTES, 'UTF-8');?>
"
                  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['first'] : null)) {?>
                    fetchpriority="high"
                  <?php } else { ?>
                    loading="lazy"
                  <?php }?>
                  alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                  data-full-size-image-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                >
              </picture>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images_modal_button'} */
class Block_20715148306a5c1ffe7e7b00_86759011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal_button' => 
  array (
    0 => 'Block_20715148306a5c1ffe7e7b00_86759011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="product__zoom btn btn-tertiary outline outline--rounded btn-square-icon" data-bs-toggle="modal" data-bs-target="#product-modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open zoomed product image gallery','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open zoomed product image gallery','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
          <i class="material-icons">&#xE8B6;</i>
        </button>
      <?php
}
}
/* {/block 'product_images_modal_button'} */
/* {block 'product_images'} */
class Block_5894166796a5c1ffe7e8fb7_40154760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_5894166796a5c1ffe7e8fb7_40154760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product__thumbnails">
        <ul class="product__thumbnails-list">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'key', 'productThumbnails', array (
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <button
              class="product__thumbnail focus-ring js-thumb-container<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> active<?php }?>"
              data-bs-target="#product-images-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
              data-bs-slide-to="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['key']->value), ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?>
                aria-current="true"
              <?php }?>
              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slide to product image %number%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%number%'=>$_smarty_tpl->tpl_vars['key']->value+1)),$_smarty_tpl ) );?>
"
            >
              <picture>
                <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['sources']['avif']))) {?>
                  <source 
                    srcset="
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
,
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 2x"
                    type="image/avif"
                  >
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['sources']['webp']))) {?>
                  <source 
                    srcset="
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
,
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 2x"
                    type="image/webp"
                  >
                <?php }?>

                <img
                  class="product__thumbnail-image outline outline--rounded img-fluid js-thumb<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> js-thumb-selected<?php }?>"
                  srcset="
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['url']), ENT_QUOTES, 'UTF-8');?>
,
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xl']['url']), ENT_QUOTES, 'UTF-8');?>
 2x"
                  width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['width']), ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_xs']['height']), ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                  alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                >
              </picture>
            </button>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_images_modal'} */
class Block_8323411406a5c1ffe7ffbd0_24516824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_8323411406a5c1ffe7ffbd0_24516824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'product_images_modal'} */
}
