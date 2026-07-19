<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:19
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1fff3ace05_76757935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fec5b7ef605a6aefc639dc747f660d43b01672' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1fff3ace05_76757935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="product-images-modal modal fade js-product-images-modal" id="product-modal" tabindex="-1" aria-labelledby="product-modal-images-title" data-ps-ref="product-images-modal">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="h2 modal-title visually-hidden" id="product-modal-images-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'images','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="product-images-modal__body modal-body">
        <div
          id="product-images-modal-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
          class="product-images-modal__carousel carousel slide js-product-images-modal-carousel"
          data-ps-ref="product-images-modal-carousel"
        >
          <div class="carousel-inner">
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
                  <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['default_md']['sources']['avif']))) {?>
                    <source 
                      srcset="
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_md']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 320w,
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 720w,
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main_2x']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 1440w"
                      sizes="(min-width: 1200px) 1440px, (min-width: 768px) 720px, 100vw" 
                      type="image/avif"
                    >
                  <?php }?>

                  <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['default_md']['sources']['webp']))) {?>
                    <source 
                      srcset="
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_md']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 320w,
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 720w,
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main_2x']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 1440w"
                      sizes="(min-width: 1200px) 1440px, (min-width: 768px) 720px, 100vw" 
                      type="image/webp"
                    >
                  <?php }?>

                  <img
                    class="img-fluid"
                    srcset="
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
 320w,
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['url']), ENT_QUOTES, 'UTF-8');?>
 720w,
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main_2x']['url']), ENT_QUOTES, 'UTF-8');?>
 1440w"
                    sizes="(min-width: 1200px) 1440px, (min-width: 768px) 720px, 100vw" 
                    src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main']['url']), ENT_QUOTES, 'UTF-8');?>
" 
                    width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main_2x']['width']), ENT_QUOTES, 'UTF-8');?>
"
                    height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['product_main_2x']['height']), ENT_QUOTES, 'UTF-8');?>
"
                    loading="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productImages']->value['first'] : null)) {?>eager<?php } else { ?>lazy<?php }?>"
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
          </div>

          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
            <button class="carousel-control-prev outline outline--rounded" type="button" data-bs-target="#product-images-modal-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous image','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            </button>

            <button class="carousel-control-next outline outline--rounded" type="button" data-bs-target="#product-images-modal-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next image','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            </button>
          <?php }?>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
}
