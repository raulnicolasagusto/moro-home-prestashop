<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:17
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\miniatures\product-image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50e93a7bb4_58552163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983daaab2ade9d029eebff309e54d16ffb1e4361' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\miniatures\\product-image.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50e93a7bb4_58552163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16283064786a5d50e9381e30_73652223', 'product_miniature_image');
?>

<?php }
/* {block 'product_miniature_image'} */
class Block_16283064786a5d50e9381e30_73652223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_image' => 
  array (
    0 => 'Block_16283064786a5d50e9381e30_73652223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__image-container thumbnail-container">
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__image-link outline outline--rounded">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
        <picture>
          <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['avif']))) {?>
            <source
              srcset="
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_sm']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 216w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 261w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_lg']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 336w"
              sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
              type="image/avif"
            >
          <?php }?>

          <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['webp']))) {?>
            <source
              srcset="
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_sm']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 216w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 261w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_lg']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 336w"
              sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
              type="image/webp"
            >
          <?php }?>

          <img
            class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__image"
            srcset="
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_sm']['url']), ENT_QUOTES, 'UTF-8');?>
 216w,
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
 261w,
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_lg']['url']), ENT_QUOTES, 'UTF-8');?>
 336w"
            sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
            src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
"
            width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['width']), ENT_QUOTES, 'UTF-8');?>
"
            height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['height']), ENT_QUOTES, 'UTF-8');?>
"
            loading="lazy"
            alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
          >
        </picture>
      <?php } else { ?>
        <picture>
          <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['avif']))) {?>
            <source
              srcset="
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_sm']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 216w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 261w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_lg']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 336w"
              sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
              type="image/avif"
            >
          <?php }?>

          <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['webp']))) {?>
            <source
              srcset="
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_sm']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 216w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 261w,
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_lg']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 336w"
              sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
              type="image/webp"
            >
          <?php }?>

          <img
            class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__image"
            srcset="
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_sm']['url']), ENT_QUOTES, 'UTF-8');?>
 216w,
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
 261w,
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_lg']['url']), ENT_QUOTES, 'UTF-8');?>
 336w"
            sizes="(min-width: 992px) 25vw, (min-width: 360px) 50vw, 100vw"
            width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['width']), ENT_QUOTES, 'UTF-8');?>
"
            height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['height']), ENT_QUOTES, 'UTF-8');?>
"
            src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
"
            loading="lazy"
            alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
            data-full-size-image-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
          >
        </picture>
      <?php }?>
    </a>
  </div>
<?php
}
}
/* {/block 'product_miniature_image'} */
}
