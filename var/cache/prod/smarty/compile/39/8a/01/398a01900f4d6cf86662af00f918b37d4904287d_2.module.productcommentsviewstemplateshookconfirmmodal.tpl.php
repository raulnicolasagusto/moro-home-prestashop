<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:24
  from 'module:productcommentsviewstemplateshookconfirmmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2004906b08_55614920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '398a01900f4d6cf86662af00f918b37d4904287d' => 
    array (
      0 => 'module:productcommentsviewstemplateshookconfirmmodal.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c2004906b08_55614920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('icon', (($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'check' ?? null : $tmp));
$_smarty_tpl->_assignInScope('modal_message', (($tmp = $_smarty_tpl->tpl_vars['modal_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['modal_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="modal fade product-comment-modal" tabindex="-1" aria-labelledby="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['modal_id']->value), ENT_QUOTES, 'UTF-8');?>
-title"
  aria-hidden="true" data-ps-ref="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->tpl_vars['data_ps_ref']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['modal_id']->value ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="h2 modal-title" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['modal_id']->value), ENT_QUOTES, 'UTF-8');?>
-title">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['modal_title']->value), ENT_QUOTES, 'UTF-8');?>

        </p>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"></button>
      </div>

      <div class="modal-body">
        <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['modal_id']->value), ENT_QUOTES, 'UTF-8');?>
-message">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['modal_message']->value), ENT_QUOTES, 'UTF-8');?>

        </div>
      </div>

      <div class="modal-footer">
        <div class="post-comment-buttons">
          <button type="button" class="btn btn-outline-primary me-2 refuse-button" data-bs-dismiss="modal" data-ps-ref="refuse-button"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>
          <button type="button" class="btn btn-primary confirm-button" data-bs-dismiss="modal" data-ps-ref="confirm-button"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
