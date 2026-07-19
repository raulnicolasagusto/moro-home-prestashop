<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:24
  from 'module:productcommentsviewstemplateshookproductcommentitemprototype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c20041648d0_84460597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductcommentitemprototype.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c20041648d0_84460597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-comment-list-item comment" data-ps-ref="product-comment-item" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
  <div class="comment__top">
    <div class="comment__author">
      @CUSTOMER_NAME@
    </div>

    <div class="comment__date">
      @COMMENT_DATE@
    </div>
  </div>

  <div class="comment__infos">
    <div class="grade-stars" data-ps-ref="grade-stars" data-grade="@COMMENT_GRADE@" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rated','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 @COMMENT_GRADE@ <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'out of 5 stars','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
"></div>
    <p class="comment__title">@COMMENT_TITLE@</p>
  </div>

  <div class="comment__content">
    <p class="comment__text">@COMMENT_COMMENT@</p>
  </div>

  <div class="comment__buttons">
    <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
      <button class="useful-review btn btn-sm btn-outline-primary" data-ps-ref="useful-review">
        <i class="material-icons fs-6" aria-hidden="true">&#xE8DC;</i>
        <span class="useful-review-value" data-ps-ref="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
        <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'useful review(s). Mark this review as useful.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
      </button>
      <button class="not-useful-review btn btn-sm btn-outline-primary" data-ps-ref="not-useful-review">
        <i class="material-icons fs-6" aria-hidden="true">&#xE8DB;</i>
        <span class="not-useful-review-value" data-ps-ref="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
        <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'not useful review(s). Mark this review as not useful.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
      </button>
    <?php }?>
    <button class="report-abuse btn btn-sm btn-outline-primary" data-ps-ref="report-abuse">
      <i class="material-icons fs-6" aria-hidden="true">&#xE153;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </button>
  </div>
</div>
<?php }
}
