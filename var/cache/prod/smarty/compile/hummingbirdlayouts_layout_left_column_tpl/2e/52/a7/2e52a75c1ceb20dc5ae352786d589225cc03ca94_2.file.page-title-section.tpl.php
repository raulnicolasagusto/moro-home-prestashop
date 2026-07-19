<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:37
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\page-title-section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c1cc0479_52993273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e52a75c1ceb20dc5ae352786d589225cc03ca94' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\page-title-section.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c1cc0479_52993273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-title-section');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16239975696a5d50c1cbece6_29564297', 'page_title_section');
?>

<?php }
/* {block 'page_title_section'} */
class Block_16239975696a5d50c1cbece6_29564297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title_section' => 
  array (
    0 => 'Block_16239975696a5d50c1cbece6_29564297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h1>
<?php
}
}
/* {/block 'page_title_section'} */
}
