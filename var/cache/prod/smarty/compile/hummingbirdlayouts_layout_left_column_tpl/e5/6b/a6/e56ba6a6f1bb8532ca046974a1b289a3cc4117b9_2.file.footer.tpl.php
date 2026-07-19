<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:41
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c55ea4f9_73925193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56ba6a6f1bb8532ca046974a1b289a3cc4117b9' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\footer.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/copyright.tpl' => 1,
  ),
),false)) {
function content_6a5d50c55ea4f9_73925193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_before", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_before')) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18550562106a5d50c55db370_26134609', 'hook_footer_before');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3221980796a5d50c55dc8c8_03132198', 'footer_main');
?>

<?php }
/* {block 'hook_footer_before'} */
class Block_18550562106a5d50c55db370_26134609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_18550562106a5d50c55db370_26134609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="footer footer__before">
      <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_before');?>

    </div>
  <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_main'} */
class Block_17573067656a5d50c55dee23_39997740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="footer__main-top row">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_top');?>

          </div>
        <?php
}
}
/* {/block 'hook_footer_main'} */
/* {block 'hook_footer_after'} */
class Block_13656384156a5d50c55e81e9_86981927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="footer__main-bottom row">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom');?>

          </div>
        <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'footer_main'} */
class Block_3221980796a5d50c55dc8c8_03132198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_main' => 
  array (
    0 => 'Block_3221980796a5d50c55dc8c8_03132198',
  ),
  'hook_footer_main' => 
  array (
    0 => 'Block_17573067656a5d50c55dee23_39997740',
  ),
  'hook_footer_after' => 
  array (
    0 => 'Block_13656384156a5d50c55e81e9_86981927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer footer__main">
    <div class="container">
      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_main_top", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
      <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_top')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17573067656a5d50c55dee23_39997740', 'hook_footer_main', $this->tplIndex);
?>

      <?php }?>

      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_main_bottom", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
      <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13656384156a5d50c55e81e9_86981927', 'hook_footer_after', $this->tplIndex);
?>

      <?php }?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
<?php
}
}
/* {/block 'footer_main'} */
}
