<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:29
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50b91f20b9_16474819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ac89153e5e2692cc8610ed881ad6e0e0a784c6' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:components/page-title-section.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_6a5d50b91f20b9_16474819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6884083496a5d50b91cfc41_31056497', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13054283616a5d50b91d1314_37439989', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_6884083496a5d50b91cfc41_31056497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_6884083496a5d50b91cfc41_31056497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_11734793676a5d50b91d1851_74549593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="js-product-list-header">
      <?php $_smarty_tpl->_subTemplateRender('file:components/page-title-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['listing']->value['label']), 0, false);
?>
    </div>
  <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_21154561466a5d50b91d4686_28618799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
      <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_13894218506a5d50b91d6a47_93755444 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

      <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_11498003506a5d50b91dcfd4_24956417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
      <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_12312710306a5d50b91e2c35_43071042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
      <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_footer'} */
class Block_942450306a5d50b91ede10_60876242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_13054283616a5d50b91d1314_37439989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13054283616a5d50b91d1314_37439989',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_11734793676a5d50b91d1851_74549593',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_21154561466a5d50b91d4686_28618799',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_13894218506a5d50b91d6a47_93755444',
  ),
  'product_list' => 
  array (
    0 => 'Block_11498003506a5d50b91dcfd4_24956417',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_12312710306a5d50b91e2c35_43071042',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_942450306a5d50b91ede10_60876242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11734793676a5d50b91d1851_74549593', 'product_list_header', $this->tplIndex);
?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderCategory'),$_smarty_tpl ) );?>


  <section id="products">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21154561466a5d50b91d4686_28618799', 'product_list_top', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13894218506a5d50b91d6a47_93755444', 'product_list_active_filters', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11498003506a5d50b91dcfd4_24956417', 'product_list', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12312710306a5d50b91e2c35_43071042', 'product_list_bottom', $this->tplIndex);
?>

    <?php } else { ?>
      <div id="js-product-list-top"></div>

      <div id="js-product-list">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
          <p class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available at the moment','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
      <div>

      <div id="js-product-list-bottom"></div>
    <?php }?>
  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942450306a5d50b91ede10_60876242', 'product_list_footer', $this->tplIndex);
?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCategory'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'content'} */
}
