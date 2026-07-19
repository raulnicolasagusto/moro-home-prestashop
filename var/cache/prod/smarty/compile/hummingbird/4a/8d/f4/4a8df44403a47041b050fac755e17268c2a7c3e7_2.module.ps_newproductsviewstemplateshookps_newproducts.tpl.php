<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:18
  from 'module:ps_newproductsviewstemplateshookps_newproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50ea9714d9_14784048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproductsviewstemplateshookps_newproducts.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 1,
  ),
),false)) {
function content_6a5d50ea9714d9_14784048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8888698616a5d50ea96c7b3_49782865', 'module_products_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13165394486a5d50ea96d7b8_14705956', 'module_products_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_630580406a5d50ea96fa59_06590027', 'module_products_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/module-products.tpl");
}
/* {block 'module_products_name'} */
class Block_8888698616a5d50ea96c7b3_49782865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_name' => 
  array (
    0 => 'Block_8888698616a5d50ea96c7b3_49782865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ps-newproducts<?php
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_13165394486a5d50ea96d7b8_14705956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_title' => 
  array (
    0 => 'Block_13165394486a5d50ea96d7b8_14705956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest arrivals','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable5), 0, false);
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_footer'} */
class Block_630580406a5d50ea96fa59_06590027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_footer' => 
  array (
    0 => 'Block_630580406a5d50ea96fa59_06590027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="btn btn-outline-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['allNewProductsLink']->value), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <i class="material-icons" aria-hidden="true">&#xE315;</i>
  </a>
<?php
}
}
/* {/block 'module_products_footer'} */
}
