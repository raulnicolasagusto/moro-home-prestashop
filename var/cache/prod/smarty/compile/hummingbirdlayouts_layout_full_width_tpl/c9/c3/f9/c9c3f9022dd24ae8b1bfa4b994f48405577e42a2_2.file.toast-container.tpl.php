<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:09
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\toast-container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73cd2d6479_70261362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9c3f9022dd24ae8b1bfa4b994f48405577e42a2' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\toast-container.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/toast.tpl' => 1,
  ),
),false)) {
function content_6a5d73cd2d6479_70261362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast-container');?>

<div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
 position-fixed top-0 end-0 p-3" id="js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender('file:components/toast.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
