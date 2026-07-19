<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:19
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50eb1dd2d2_51918913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34dfe7ffcf9df7fa4d0f210f2b92e8a77321cb62' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\layouts\\layout-full-width.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50eb1dd2d2_51918913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4840591306a5d50eb1d76f2_59771770', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'container_class'} */
class Block_7105393716a5d50eb1d7fc9_92578900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_1103742466a5d50eb1d8d91_00311222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_398367466a5d50eb1da7d1_13069728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_8883354416a5d50eb1d9926_14199368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page page--full-width">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_398367466a5d50eb1da7d1_13069728', 'content', $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_5758300286a5d50eb1dc0d6_42907405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_4840591306a5d50eb1d76f2_59771770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_4840591306a5d50eb1d76f2_59771770',
  ),
  'container_class' => 
  array (
    0 => 'Block_7105393716a5d50eb1d7fc9_92578900',
  ),
  'left_column' => 
  array (
    0 => 'Block_1103742466a5d50eb1d8d91_00311222',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_8883354416a5d50eb1d9926_14199368',
  ),
  'content' => 
  array (
    0 => 'Block_398367466a5d50eb1da7d1_13069728',
  ),
  'right_column' => 
  array (
    0 => 'Block_5758300286a5d50eb1dc0d6_42907405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7105393716a5d50eb1d7fc9_92578900', 'container_class', $this->tplIndex);
?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1103742466a5d50eb1d8d91_00311222', 'left_column', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8883354416a5d50eb1d9926_14199368', 'content_wrapper', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5758300286a5d50eb1dc0d6_42907405', 'right_column', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_columns'} */
}
