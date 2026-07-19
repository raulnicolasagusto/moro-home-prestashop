<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:33
  from 'module:ps_contactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50bd0c2cc7_58061800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfonav.tpl',
      1 => 1784413140,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50bd0c2cc7_58061800 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_ps_contactinfo">
  <div class="ps-contactinfo">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <a class="ps-contactinfo__phone" href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us at: %phone%','sprintf'=>array('%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: %phone%','sprintf'=>array('%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </a>
    <?php } else { ?>
      <a class="ps-contactinfo__email" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['contact']), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </a>
    <?php }?>
  </div>
</div>
<?php }
}
