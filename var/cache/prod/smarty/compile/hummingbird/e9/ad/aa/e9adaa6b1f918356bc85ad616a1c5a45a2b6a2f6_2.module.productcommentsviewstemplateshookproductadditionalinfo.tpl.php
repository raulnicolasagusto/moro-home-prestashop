<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:22
  from 'module:productcommentsviewstemplateshookproductadditionalinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c20025ae010_33023350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9adaa6b1f918356bc85ad616a1c5a45a2b6a2f6' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductadditionalinfo.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:productcomments/views/templates/hook/average-grade-stars.tpl' => 1,
  ),
),false)) {
function content_6a5c20025ae010_33023350 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0 || $_smarty_tpl->tpl_vars['post_allowed']->value == 1) {?>
  <?php if ($_smarty_tpl->tpl_vars['nb_comments']->value > 0) {?>
    <div class="product-comments-additional-info">
      <a href="#product-comments-list-header"
        aria-label="<?php ob_start();
echo htmlspecialchars((string) (round((float) $_smarty_tpl->tpl_vars['average_grade']->value, (int) 1, (int) 1)), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rated %average_grade% out of 5 stars. Go to reviews section','sprintf'=>array('%average_grade%'=>$_prefixVariable4),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
        <?php $_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/average-grade-stars.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['average_grade']->value,'showGradeAverage'=>true), 0, false);
?>
      </a>
    </div>
  <?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value) {?>
      <div class="product-comments-additional-info">
        <button class="btn btn-outline-primary post-product-comment" id="product-additional-info-review-button" type="button" data-bs-toggle="modal" data-bs-target="#post-product-comment-modal" data-ps-ref="product-post-review-button">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

        </button>
      </div>
    <?php }?>
  <?php }
}
}
}
