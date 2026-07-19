<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:16
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50e85ded62_93856340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a44e94e39e103f6fb20b7480dbb959d25d5edd' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/miniatures/product-image.tpl' => 1,
    'file:catalog/_partials/miniatures/product-quickview.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:components/qty-input.tpl' => 1,
  ),
),false)) {
function content_6a5d50e85ded62_93856340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'product-miniature');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_949053106a5d50e85a8425_41014238', 'product_miniature_item');
?>

<?php }
/* {block 'product_miniature_top'} */
class Block_17141229776a5d50e85aaba1_59476603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__top">
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-quickview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      <?php
}
}
/* {/block 'product_miniature_top'} */
/* {block 'product_name'} */
class Block_3363368716a5d50e85ad969_19919612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__title" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View product %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a>
            <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_variants'} */
class Block_11372901236a5d50e85b25e6_46414092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__variants">
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                </div>
              <?php }?>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price'} */
class Block_5127896456a5d50e85b95e3_59959848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                      <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                    <?php } else { ?>
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                  </div>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_discount_price'} */
class Block_20986866796a5d50e85caef8_35014732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__discount-price">
                      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                        <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['regular_price']), ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                <?php
}
}
/* {/block 'product_discount_price'} */
/* {block 'product_reviews'} */
class Block_15526469126a5d50e85cf5c0_11503659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_bottom'} */
class Block_6006939326a5d50e85ace98_54682815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__bottom">
          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__infos">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3363368716a5d50e85ad969_19919612', 'product_name', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11372901236a5d50e85b25e6_46414092', 'product_variants', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
              <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__prices">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5127896456a5d50e85b95e3_59959848', 'product_price', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20986866796a5d50e85caef8_35014732', 'product_discount_price', $this->tplIndex);
?>

              </div>
            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15526469126a5d50e85cf5c0_11503659', 'product_reviews', $this->tplIndex);
?>

          </div>

          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__actions">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              <form class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['cart']), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input type="hidden" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['static_token']->value), ENT_QUOTES, 'UTF-8');?>
">

                <div class="quantity-button js-quantity-button">
                  <?php $_smarty_tpl->_subTemplateRender('file:components/qty-input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attributes'=>array("id"=>"quantity_wanted_".((string)$_smarty_tpl->tpl_vars['product']->value['id_product']),"value"=>((string)$_smarty_tpl->tpl_vars['product']->value['quantity_wanted']),"min"=>((string)$_smarty_tpl->tpl_vars['product']->value['quantity_required']))), 0, false);
?>
                </div>

                <button 
                  data-button-action="add-to-cart" 
                  class="product-miniature__add btn btn-primary btn-square-icon"
                  aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                  data-ps-ref="add-to-cart"
                >
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="product-miniature__add-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </button>
              </form>
            <?php } else { ?>
              <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="product-miniature__details btn btn-outline-primary" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View product %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </a>
            <?php }?>
          </div>
        </div>
      <?php
}
}
/* {/block 'product_miniature_bottom'} */
/* {block 'product_miniature_item'} */
class Block_949053106a5d50e85a8425_41014238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_949053106a5d50e85a8425_41014238',
  ),
  'product_miniature_top' => 
  array (
    0 => 'Block_17141229776a5d50e85aaba1_59476603',
  ),
  'product_miniature_bottom' => 
  array (
    0 => 'Block_6006939326a5d50e85ace98_54682815',
  ),
  'product_name' => 
  array (
    0 => 'Block_3363368716a5d50e85ad969_19919612',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11372901236a5d50e85b25e6_46414092',
  ),
  'product_price' => 
  array (
    0 => 'Block_5127896456a5d50e85b95e3_59959848',
  ),
  'product_discount_price' => 
  array (
    0 => 'Block_20986866796a5d50e85caef8_35014732',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_15526469126a5d50e85cf5c0_11503659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article
    class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
 js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-id-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"
    data-id-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"
  >
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__inner">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17141229776a5d50e85aaba1_59476603', 'product_miniature_top', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6006939326a5d50e85ace98_54682815', 'product_miniature_bottom', $this->tplIndex);
?>

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
