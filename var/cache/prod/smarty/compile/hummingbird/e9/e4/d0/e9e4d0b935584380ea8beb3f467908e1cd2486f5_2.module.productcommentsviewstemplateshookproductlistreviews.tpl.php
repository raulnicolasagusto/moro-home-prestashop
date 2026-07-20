<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:02:59
  from 'module:productcommentsviewstemplateshookproductlistreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c321c232_18459454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductlistreviews.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73c321c232_18459454 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-list-review" data-ps-ref="product-list-review" data-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
  <div class="grade-stars small-stars" data-ps-ref="grade-stars"></div>
  <div class="product-list-comments-number" data-ps-ref="product-list-comments-number">
    <span class="visually-hidden">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rated','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 <span data-ps-ref="grade-value"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'out of 5 stars based on ','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </span>
    <span data-ps-ref="number-value"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'review(s)','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

  </div>
</div>
<?php }
}
