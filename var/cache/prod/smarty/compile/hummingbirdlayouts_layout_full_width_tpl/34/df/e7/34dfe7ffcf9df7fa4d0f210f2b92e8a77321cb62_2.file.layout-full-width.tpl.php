<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:00
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c4098548_02351096',
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
function content_6a5d73c4098548_02351096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3099258326a5d73c40853b5_32897197', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'container_class'} */
class Block_18632272896a5d73c4085e08_51168899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_9303056256a5d73c4086c98_86941366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_19542458636a5d73c408c756_18740509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_3529968736a5d73c408b344_96628055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page page--full-width">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19542458636a5d73c408c756_18740509', 'content', $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_8025607236a5d73c4097367_83127692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_3099258326a5d73c40853b5_32897197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_3099258326a5d73c40853b5_32897197',
  ),
  'container_class' => 
  array (
    0 => 'Block_18632272896a5d73c4085e08_51168899',
  ),
  'left_column' => 
  array (
    0 => 'Block_9303056256a5d73c4086c98_86941366',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_3529968736a5d73c408b344_96628055',
  ),
  'content' => 
  array (
    0 => 'Block_19542458636a5d73c408c756_18740509',
  ),
  'right_column' => 
  array (
    0 => 'Block_8025607236a5d73c4097367_83127692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18632272896a5d73c4085e08_51168899', 'container_class', $this->tplIndex);
?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9303056256a5d73c4086c98_86941366', 'left_column', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3529968736a5d73c408b344_96628055', 'content_wrapper', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8025607236a5d73c4097367_83127692', 'right_column', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_columns'} */
}
