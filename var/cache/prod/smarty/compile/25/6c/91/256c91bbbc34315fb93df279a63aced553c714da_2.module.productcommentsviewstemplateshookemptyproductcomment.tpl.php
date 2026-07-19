<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:23
  from 'module:productcommentsviewstemplateshookemptyproductcomment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2003ef8a55_19920520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256c91bbbc34315fb93df279a63aced553c714da' => 
    array (
      0 => 'module:productcommentsviewstemplateshookemptyproductcomment.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c2003ef8a55_19920520 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="empty-product-comment" data-ps-ref="empty-product-comment" class="product-comment-list-item py-3">
  <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value == 1) {?>
    <button class="btn btn-outline-primary post-product-comment" id="product-footer-review-button" type="button" data-bs-toggle="modal" data-bs-target="#post-product-comment-modal" data-ps-ref="product-post-review-button">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </button>
  <?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

  <?php }?>
</div>
<?php }
}
