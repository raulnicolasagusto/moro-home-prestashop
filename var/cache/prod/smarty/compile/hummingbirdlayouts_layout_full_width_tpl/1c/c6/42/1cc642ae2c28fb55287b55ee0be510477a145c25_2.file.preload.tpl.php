<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:01
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\preload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c5b24c69_44547162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc642ae2c28fb55287b55ee0be510477a145c25' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\preload.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73c5b24c69_44547162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('themeDir', _PS_THEME_DIR_);
$_smarty_tpl->_assignInScope('preloadFilePath', ((string)$_smarty_tpl->tpl_vars['themeDir']->value)."assets/preload.html");
$_smarty_tpl->_assignInScope('assetsUrl', $_smarty_tpl->tpl_vars['urls']->value['theme_assets']);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['preloadFilePath']->value)) {?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "preloadBlock", null, null);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['preloadFilePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'preloadBlock'),'href="../',"href=\"".((string)$_smarty_tpl->tpl_vars['assetsUrl']->value));?>

<?php }
}
}
