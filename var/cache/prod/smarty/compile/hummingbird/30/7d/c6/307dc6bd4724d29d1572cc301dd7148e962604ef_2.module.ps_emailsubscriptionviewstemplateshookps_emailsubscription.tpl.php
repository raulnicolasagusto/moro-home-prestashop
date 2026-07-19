<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:35
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2f1028b0_70445596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1784413140,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2f1028b0_70445596 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ps-emailsubscription bg-body-tertiary py-3 py-lg-4" id="emailsubscription_anchor_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['hookName']->value), ENT_QUOTES, 'UTF-8');?>
">
  <div class="container">
    <div class="row justify-content-center">
      <p class="h3 col-lg-4">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get our latest news and special sales','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </p>

      <form class="col-lg-6" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
#emailsubscription_anchor_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['hookName']->value), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
          <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?> alert-dismissible fade show mb-2" role="alert" tabindex="0">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['msg']->value), ENT_QUOTES, 'UTF-8');?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php }?>
        <div class="d-flex gap-2 align-items-center mb-2">
          <input class="form-control flex-grow-1" type="email" name="email" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
" autocomplete="email" required />
          <input class="btn btn-primary" type="submit" name="submitNewsletter" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe to our newsletter','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
" />
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "display_gdpr_consent", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'display_gdpr_consent') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'display_gdpr_consent')) {?>
          <div class="fs-6 mb-2">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'display_gdpr_consent');?>

          </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
          <p class="fs-6 text-body-secondary mb-0"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['conditions']->value), ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>


        <input type="hidden" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['hookName']->value), ENT_QUOTES, 'UTF-8');?>
" name="blockHookName" />
        <input type="hidden" name="action" value="0" />
      </form>
    </div>
  </div>
</section>
<?php }
}
