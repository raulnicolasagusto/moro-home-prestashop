<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:29
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50b968be61_00416151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c493e253a208ed33e5f8ffe1cab10a0c88bf2ef7' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\layouts\\layout-left-column.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50b968be61_00416151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2236265556a5d50b9686022_37564814', "content_columns");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block "container_class"} */
class Block_20427911926a5d50b9686918_41953499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block "container_class"} */
/* {block "left_column"} */
class Block_11429355996a5d50b9687414_55618693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="left-column" class="left-column col-md-4 col-lg-3">
          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

          <?php }?>
        </div>
      <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_9972950126a5d50b968a195_10003467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
          <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_1974455326a5d50b96896b2_58088833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="center-column" class="center-column page col-md-8 col-lg-9">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9972950126a5d50b968a195_10003467', "content", $this->tplIndex);
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

        </div>
      <?php
}
}
/* {/block "content_wrapper"} */
/* {block 'right_column'} */
class Block_2812964286a5d50b968b213_99416551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "content_columns"} */
class Block_2236265556a5d50b9686022_37564814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_2236265556a5d50b9686022_37564814',
  ),
  'container_class' => 
  array (
    0 => 'Block_20427911926a5d50b9686918_41953499',
  ),
  'left_column' => 
  array (
    0 => 'Block_11429355996a5d50b9687414_55618693',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_1974455326a5d50b96896b2_58088833',
  ),
  'content' => 
  array (
    0 => 'Block_9972950126a5d50b968a195_10003467',
  ),
  'right_column' => 
  array (
    0 => 'Block_2812964286a5d50b968b213_99416551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20427911926a5d50b9686918_41953499', "container_class", $this->tplIndex);
?>
">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11429355996a5d50b9687414_55618693', "left_column", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1974455326a5d50b96896b2_58088833', "content_wrapper", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2812964286a5d50b968b213_99416551', 'right_column', $this->tplIndex);
?>

    </div>
  </div>
<?php
}
}
/* {/block "content_columns"} */
}
