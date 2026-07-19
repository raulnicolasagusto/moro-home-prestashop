<?php
/* Smarty version 4.5.5, created on 2026-07-19 13:16:21
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\listing\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5cf855938a80_27054876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7fd4f7c09ca025b3937c60bd16f2cc6d657f38e' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\listing\\search.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
    'file:components/page-title-section.tpl' => 1,
  ),
),false)) {
function content_6a5cf855938a80_27054876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19284695386a5cf855919cb9_18819525', 'product_list');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14517169596a5cf855922b39_41899555', 'error_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12138005766a5cf855926409_85286348', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list'} */
class Block_19284695386a5cf855919cb9_18819525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_19284695386a5cf855919cb9_18819525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list'} */
/* {block 'error_content'} */
class Block_14517169596a5cf855922b39_41899555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_content' => 
  array (
    0 => 'Block_14517169596a5cf855922b39_41899555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php
}
}
/* {/block 'error_content'} */
/* {block 'product_list_header'} */
class Block_12138005766a5cf855926409_85286348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_12138005766a5cf855926409_85286348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (empty($_smarty_tpl->tpl_vars['search_string']->value)) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Nothing to search for','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable1);?>
  <?php } else { ?>
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search results for "%search_term%"','sprintf'=>array('%search_term%'=>$_smarty_tpl->tpl_vars['search_string']->value),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable2);?>
    <?php } else { ?>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No search results for "%search_term%"','sprintf'=>array('%search_term%'=>$_smarty_tpl->tpl_vars['search_string']->value),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable3);?>
    <?php }?>
  <?php }?>

  <div id="js-product-list-header">
    <?php $_smarty_tpl->_subTemplateRender('file:components/page-title-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
  </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
