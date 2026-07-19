<?php
/* Smarty version 4.5.5, created on 2026-07-18 23:40:10
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\copyright.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c390a87a0f9_27539856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15c6830edcd34e89d0d4fe0fa9a5b84b2965d4b' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\copyright.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c390a87a0f9_27539856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14558369466a5c390a8761a2_99075593', 'copyright');
?>

<?php }
/* {block 'copyright_link'} */
class Block_18435012616a5c390a876da9_37467560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="https://www.prestashop-project.org/" target="_blank" rel="noopener noreferrer nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </a>
    <?php
}
}
/* {/block 'copyright_link'} */
/* {block 'copyright'} */
class Block_14558369466a5c390a8761a2_99075593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright' => 
  array (
    0 => 'Block_14558369466a5c390a8761a2_99075593',
  ),
  'copyright_link' => 
  array (
    0 => 'Block_18435012616a5c390a876da9_37467560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="copyright">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18435012616a5c390a876da9_37467560', 'copyright_link', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'copyright'} */
}
