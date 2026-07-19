<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:38
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c2e0ba04_06131710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20972fb507f923e9bd6ec3eb65aef6456ec03d59' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\products.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6a5d50c2e0ba04_06131710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/productlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products']), 0, false);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18815615616a5d50c2e0a738_77289778', 'pagination');
?>

</div>
<?php }
/* {block 'pagination'} */
class Block_18815615616a5d50c2e0a738_77289778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_18815615616a5d50c2e0a738_77289778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="products__pagination">
      <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
    </div>
  <?php
}
}
/* {/block 'pagination'} */
}
