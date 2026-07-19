<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:38
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\subcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c206cbf2_08944976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5927ee77b12216c3aa1afb031f1a4743c7276f3' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\subcategories.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c206cbf2_08944976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'subcategory');?>

<?php if (!empty($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('displaySubcategoryImages', false);?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['thumbnail'])) && !empty($_smarty_tpl->tpl_vars['category']->value['thumbnail'])) {?>
      <?php $_smarty_tpl->_assignInScope('displaySubcategoryImages', true);?>
      <?php break 1;?>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__list<?php if ($_smarty_tpl->tpl_vars['displaySubcategoryImages']->value) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__list--with-images<?php }?>">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
        <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__link<?php if ($_smarty_tpl->tpl_vars['displaySubcategoryImages']->value) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__link--with-image<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subcategory']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
          <?php if ($_smarty_tpl->tpl_vars['displaySubcategoryImages']->value) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['url'])) && !empty($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['url'])) {?>
              <picture>
                <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['sources']['avif']))) {?>
                  <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
" type="image/avif">
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['sources']['webp']))) {?>
                  <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
" type="image/webp">
                <?php }?>

                <img
                  class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__thumbnail img-fluid"
                  src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                  width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['width']), ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subcategory']->value['thumbnail']['bySize']['category_default']['height']), ENT_QUOTES, 'UTF-8');?>
"
                  alt="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                >
              </picture>
            <?php } else { ?>
              <img
                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__thumbnail img-fluid"
                src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['width']), ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['height']), ENT_QUOTES, 'UTF-8');?>
"
                alt="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"
                loading="lazy"
              >
            <?php }?>
          <?php }?>

          <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__name"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
