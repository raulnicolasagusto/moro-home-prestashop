<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:09
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73cd185971_31849275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc11ef5feb8cea91ed8f2d74eb87cfbb2ba6b01' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\page-loader.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73cd185971_31849275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-loader');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15029385606a5d73cd184589_63984476', 'page_loader');
?>

<?php }
/* {block 'page_loader'} */
class Block_15029385606a5d73cd184589_63984476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loader' => 
  array (
    0 => 'Block_15029385606a5d73cd184589_63984476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="page-loader js-page-loader d-none">
    <div class="spinner-border text-primary-emphasis" role="status">
      <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </div>
  </div>
<?php
}
}
/* {/block 'page_loader'} */
}
