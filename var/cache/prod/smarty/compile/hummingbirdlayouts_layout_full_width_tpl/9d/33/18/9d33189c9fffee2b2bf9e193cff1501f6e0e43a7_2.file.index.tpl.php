<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:02:59
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c3c0def6_50492203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d33189c9fffee2b2bf9e193cff1501f6e0e43a7' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\index.tpl',
      1 => 1784413148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73c3c0def6_50492203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17959219766a5d73c3c05650_17075406', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13437338396a5d73c3c06747_89097501', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_17959219766a5d73c3c05650_17075406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_17959219766a5d73c3c05650_17075406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_15514585456a5d73c3c07066_73613072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_content_top'} */
class Block_10193735276a5d73c3c092b7_20174101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_6902318816a5d73c3c09ea5_46988106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8201675546a5d73c3c09a23_99238196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6902318816a5d73c3c09ea5_46988106', 'hook_home', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15234555976a5d73c3c08e35_69369160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="content" class="page-content page-content--home">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10193735276a5d73c3c092b7_20174101', 'page_content_top', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8201675546a5d73c3c09a23_99238196', 'page_content', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'content'} */
class Block_21297986756a5d73c3c08991_84461769 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15234555976a5d73c3c08e35_69369160', 'page_content_container', $this->tplIndex);
?>

      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_18450941026a5d73c3c07ca0_81342311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21297986756a5d73c3c08991_84461769', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_19150676346a5d73c3c0d302_68731330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_13437338396a5d73c3c06747_89097501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_13437338396a5d73c3c06747_89097501',
  ),
  'left_column' => 
  array (
    0 => 'Block_15514585456a5d73c3c07066_73613072',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_18450941026a5d73c3c07ca0_81342311',
  ),
  'content' => 
  array (
    0 => 'Block_21297986756a5d73c3c08991_84461769',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15234555976a5d73c3c08e35_69369160',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10193735276a5d73c3c092b7_20174101',
  ),
  'page_content' => 
  array (
    0 => 'Block_8201675546a5d73c3c09a23_99238196',
  ),
  'hook_home' => 
  array (
    0 => 'Block_6902318816a5d73c3c09ea5_46988106',
  ),
  'right_column' => 
  array (
    0 => 'Block_19150676346a5d73c3c0d302_68731330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15514585456a5d73c3c07066_73613072', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18450941026a5d73c3c07ca0_81342311', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19150676346a5d73c3c0d302_68731330', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
