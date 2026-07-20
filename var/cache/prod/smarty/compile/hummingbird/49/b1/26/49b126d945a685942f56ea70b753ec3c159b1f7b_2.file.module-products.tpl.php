<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:02:57
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\module-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c13d5b72_12155441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b126d945a685942f56ea70b753ec3c159b1f7b' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\module-products.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_6a5d73c13d5b72_12155441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21144042826a5d73c13c3152_83809711', 'module_products');
?>

<?php }
/* {block 'module_products_variables'} */
class Block_15655654716a5d73c13c3807_49210535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('need_container', "true");?>
  <?php
}
}
/* {/block 'module_products_variables'} */
/* {block 'module_products_name'} */
class Block_11589973286a5d73c13c6dc2_80858021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_3478996206a5d73c13cda11_01072631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_list'} */
class Block_16717288946a5d73c13ce5f4_01192053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
          <div class="module-products__list">
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/productlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'module_products_list'} */
/* {block 'module_products_footer'} */
class Block_17695862166a5d73c13d05b0_63099198 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="module-products__buttons">
          <?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>

        </div>
      <?php
}
}
/* {/block 'module_products_footer'} */
/* {block 'module_products'} */
class Block_21144042826a5d73c13c3152_83809711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products' => 
  array (
    0 => 'Block_21144042826a5d73c13c3152_83809711',
  ),
  'module_products_variables' => 
  array (
    0 => 'Block_15655654716a5d73c13c3807_49210535',
  ),
  'module_products_name' => 
  array (
    0 => 'Block_11589973286a5d73c13c6dc2_80858021',
  ),
  'module_products_title' => 
  array (
    0 => 'Block_3478996206a5d73c13cda11_01072631',
  ),
  'module_products_list' => 
  array (
    0 => 'Block_16717288946a5d73c13ce5f4_01192053',
  ),
  'module_products_footer' => 
  array (
    0 => 'Block_17695862166a5d73c13d05b0_63099198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15655654716a5d73c13c3807_49210535', 'module_products_variables', $this->tplIndex);
?>


  <section class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11589973286a5d73c13c6dc2_80858021', 'module_products_name', $this->tplIndex);
?>
">
    <div class="module-products <?php if ((isset($_smarty_tpl->tpl_vars['need_container']->value)) && $_smarty_tpl->tpl_vars['need_container']->value) {?>container<?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3478996206a5d73c13cda11_01072631', 'module_products_title', $this->tplIndex);
?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16717288946a5d73c13ce5f4_01192053', 'module_products_list', $this->tplIndex);
?>

        
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17695862166a5d73c13d05b0_63099198', 'module_products_footer', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'module_products'} */
}
