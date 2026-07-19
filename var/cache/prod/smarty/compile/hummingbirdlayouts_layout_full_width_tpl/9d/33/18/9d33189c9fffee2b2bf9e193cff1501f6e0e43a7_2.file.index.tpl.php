<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:18
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50eacd7f70_42523818',
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
function content_6a5d50eacd7f70_42523818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15134716566a5d50eaccf8c0_75440598', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1793050806a5d50eacd0672_22541190', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_15134716566a5d50eaccf8c0_75440598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_15134716566a5d50eaccf8c0_75440598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_18500674356a5d50eacd0cd9_47638543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_content_top'} */
class Block_9673251056a5d50eacd2b15_26568736 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19523853106a5d50eacd36f0_69503004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14448866186a5d50eacd3270_29330606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19523853106a5d50eacd36f0_69503004', 'hook_home', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8285665716a5d50eacd2675_90829040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="content" class="page-content page-content--home">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9673251056a5d50eacd2b15_26568736', 'page_content_top', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14448866186a5d50eacd3270_29330606', 'page_content', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'content'} */
class Block_5545814896a5d50eacd20e9_07409440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8285665716a5d50eacd2675_90829040', 'page_content_container', $this->tplIndex);
?>

      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_7117931806a5d50eacd1497_94664977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5545814896a5d50eacd20e9_07409440', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_4518458876a5d50eacd72d6_10157924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_1793050806a5d50eacd0672_22541190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_1793050806a5d50eacd0672_22541190',
  ),
  'left_column' => 
  array (
    0 => 'Block_18500674356a5d50eacd0cd9_47638543',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_7117931806a5d50eacd1497_94664977',
  ),
  'content' => 
  array (
    0 => 'Block_5545814896a5d50eacd20e9_07409440',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8285665716a5d50eacd2675_90829040',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9673251056a5d50eacd2b15_26568736',
  ),
  'page_content' => 
  array (
    0 => 'Block_14448866186a5d50eacd3270_29330606',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19523853106a5d50eacd36f0_69503004',
  ),
  'right_column' => 
  array (
    0 => 'Block_4518458876a5d50eacd72d6_10157924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18500674356a5d50eacd0cd9_47638543', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7117931806a5d50eacd1497_94664977', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4518458876a5d50eacd72d6_10157924', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
