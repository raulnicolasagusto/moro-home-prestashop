<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:23
  from 'module:productcommentsviewstemplateshookproductcommentslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2003896fa8_59299620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5994852a9960d76ab827d262a62165c31e86d3b8' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductcommentslist.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:productcomments/views/templates/hook/average-grade-stars.tpl' => 1,
    'module:productcomments/views/templates/hook/empty-product-comment.tpl' => 1,
    'module:productcomments/views/templates/hook/product-comment-item-prototype.tpl' => 1,
    'module:productcomments/views/templates/hook/alert-modal.tpl' => 3,
    'module:productcomments/views/templates/hook/confirm-modal.tpl' => 1,
  ),
),false)) {
function content_6a5c2003896fa8_59299620 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-comments-wrapper">
  <?php echo '<script'; ?>
 type="text/javascript">
    var productCommentUpdatePostErrorMessage = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your review appreciation cannot be sent.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) ),'javascript' ));?>
';
    var productCommentAbuseReportErrorMessage = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your abuse report cannot be sent.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) ),'javascript' ));?>
';
  <?php echo '</script'; ?>
>

  <div id="product-comments-list-header">
    <h2 class="section-title">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['nb_comments']->value), ENT_QUOTES, 'UTF-8');?>
)
    </h2>
    <?php $_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/average-grade-stars.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['average_grade']->value,'showGradeAverage'=>true,'showNbComments'=>false), 0, false);
?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['nb_comments']->value > 0 && $_smarty_tpl->tpl_vars['post_allowed']->value) {?>
    <div id="product-comments-list-btn-group">
      <button class="w-100 w-sm-auto btn btn-outline-primary post-product-comment" id="product-comments-list-review-button" type="button" data-bs-toggle="modal" data-bs-target="#post-product-comment-modal" data-ps-ref="product-post-review-button">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

      </button>
    </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['nb_comments']->value == 0) {?>
    <?php $_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/empty-product-comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>

  <?php ob_start();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/product-comment-item-prototype.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('comment_prototype', ob_get_clean());
?>

  <div id="product-comments-list" class="<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value > 0) {?>has-comments<?php }?>"
    data-ps-ref="product-comments-list"
    data-list-comments-url="<?php echo $_smarty_tpl->tpl_vars['list_comments_url']->value;?>
"
    data-update-comment-usefulness-url="<?php echo $_smarty_tpl->tpl_vars['update_comment_usefulness_url']->value;?>
"
    data-report-comment-url="<?php echo $_smarty_tpl->tpl_vars['report_comment_url']->value;?>
"
    data-comment-item-prototype="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['comment_prototype']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-current-page="1"
    data-total-pages="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['list_total_pages']->value), ENT_QUOTES, 'UTF-8');?>
"
    aria-live="polite"></div>

  <?php if ($_smarty_tpl->tpl_vars['list_total_pages']->value > 1) {?>
    <div id="product-comments-list-footer">
      <nav id="product-comments-list-pagination" data-ps-ref="product-comments-pagination" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product comments pagination','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled" data-ps-ref="pagination-item" data-ps-action="prev">
            <button class="page-link btn prev" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to previous page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
              <i class="material-icons" aria-hidden="true">&#xE5CB;</i>
            </button>
          </li>
          <?php
$_smarty_tpl->tpl_vars['pageCount'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['pageCount']->step = 1;$_smarty_tpl->tpl_vars['pageCount']->total = (int) ceil(($_smarty_tpl->tpl_vars['pageCount']->step > 0 ? $_smarty_tpl->tpl_vars['list_total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['list_total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['pageCount']->step));
if ($_smarty_tpl->tpl_vars['pageCount']->total > 0) {
for ($_smarty_tpl->tpl_vars['pageCount']->value = 1, $_smarty_tpl->tpl_vars['pageCount']->iteration = 1;$_smarty_tpl->tpl_vars['pageCount']->iteration <= $_smarty_tpl->tpl_vars['pageCount']->total;$_smarty_tpl->tpl_vars['pageCount']->value += $_smarty_tpl->tpl_vars['pageCount']->step, $_smarty_tpl->tpl_vars['pageCount']->iteration++) {
$_smarty_tpl->tpl_vars['pageCount']->first = $_smarty_tpl->tpl_vars['pageCount']->iteration === 1;$_smarty_tpl->tpl_vars['pageCount']->last = $_smarty_tpl->tpl_vars['pageCount']->iteration === $_smarty_tpl->tpl_vars['pageCount']->total;?>
            <li class="page-item <?php if ($_smarty_tpl->tpl_vars['pageCount']->value == 1) {?>active<?php }?>" data-ps-ref="pagination-item" data-ps-action="page" data-ps-data="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['pageCount']->value), ENT_QUOTES, 'UTF-8');?>
">
              <button class="page-link btn" <?php if ($_smarty_tpl->tpl_vars['pageCount']->value == 1) {?>aria-current="page"<?php }?> aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to page %pageCount%','d'=>'Modules.Productcomments.Shop','sprintf'=>array('%pageCount%'=>$_smarty_tpl->tpl_vars['pageCount']->value)),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['pageCount']->value), ENT_QUOTES, 'UTF-8');?>
</button>
            </li>
          <?php }
}
?>
          <li class="page-item" data-ps-ref="pagination-item" data-ps-action="next">
            <button class="page-link btn next" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to next page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
              <i class="material-icons" aria-hidden="true">&#xE5CC;</i>
            </button>
          </li>
        </ul>
      </nav>
    </div>
  <?php }?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review appreciation cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'update-comment-usefulness-post-error','data_ps_ref'=>'update-comment-usefulness-post-error','modal_title'=>$_prefixVariable5,'icon'=>'error'), 0, false);
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report comment','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this comment?','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/confirm-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'report-comment-confirmation','data_ps_ref'=>'report-comment-confirmation','modal_title'=>$_prefixVariable6,'modal_message'=>$_prefixVariable7,'icon'=>'feedback'), 0, false);
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your report has been submitted and will be considered by a moderator.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'report-comment-posted','data_ps_ref'=>'report-comment-post-success','modal_title'=>$_prefixVariable8,'modal_message'=>$_prefixVariable9), 0, true);
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your report cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'report-comment-post-error','data_ps_ref'=>'report-comment-post-error','modal_title'=>$_prefixVariable10,'icon'=>'error'), 0, true);
?>
</div>
<?php }
}
