<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:28
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\section-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e280a73d9_20702255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '937935655ae29619c39a30ca84367bd9e0ef6cc1' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\section-title.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e280a73d9_20702255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '19540437306a5c1e280a3653_69865834';
$_smarty_tpl->_assignInScope('componentName', 'section-title');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10114401716a5c1e280a5ce8_89946920', 'section_title');
?>

<?php }
/* {block 'section_title'} */
class Block_10114401716a5c1e280a5ce8_89946920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'section_title' => 
  array (
    0 => 'Block_10114401716a5c1e280a5ce8_89946920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h2>
<?php
}
}
/* {/block 'section_title'} */
}
