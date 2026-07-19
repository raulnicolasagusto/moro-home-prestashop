<?php
/* Smarty version 4.5.5, created on 2026-07-18 23:39:59
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c38ff72a173_69851416',
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
function content_6a5c38ff72a173_69851416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1000771226a5c38ff712935_83617774', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14131307556a5c38ff713b86_81764060', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_1000771226a5c38ff712935_83617774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1000771226a5c38ff712935_83617774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_15619523206a5c38ff714481_11039826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_content_top'} */
class Block_6226156126a5c38ff721d73_87543270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7222645656a5c38ff724f32_88791078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5179991586a5c38ff7240d6_80132878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7222645656a5c38ff724f32_88791078', 'hook_home', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19572376836a5c38ff716ee7_05696481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="content" class="page-content page-content--home">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6226156126a5c38ff721d73_87543270', 'page_content_top', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5179991586a5c38ff7240d6_80132878', 'page_content', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'content'} */
class Block_8367243726a5c38ff7166f3_89258033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19572376836a5c38ff716ee7_05696481', 'page_content_container', $this->tplIndex);
?>

      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_16071330976a5c38ff7150e4_60713293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8367243726a5c38ff7166f3_89258033', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_8624093746a5c38ff728f39_76290249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_14131307556a5c38ff713b86_81764060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_14131307556a5c38ff713b86_81764060',
  ),
  'left_column' => 
  array (
    0 => 'Block_15619523206a5c38ff714481_11039826',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_16071330976a5c38ff7150e4_60713293',
  ),
  'content' => 
  array (
    0 => 'Block_8367243726a5c38ff7166f3_89258033',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19572376836a5c38ff716ee7_05696481',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6226156126a5c38ff721d73_87543270',
  ),
  'page_content' => 
  array (
    0 => 'Block_5179991586a5c38ff7240d6_80132878',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7222645656a5c38ff724f32_88791078',
  ),
  'right_column' => 
  array (
    0 => 'Block_8624093746a5c38ff728f39_76290249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15619523206a5c38ff714481_11039826', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16071330976a5c38ff7150e4_60713293', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8624093746a5c38ff728f39_76290249', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
