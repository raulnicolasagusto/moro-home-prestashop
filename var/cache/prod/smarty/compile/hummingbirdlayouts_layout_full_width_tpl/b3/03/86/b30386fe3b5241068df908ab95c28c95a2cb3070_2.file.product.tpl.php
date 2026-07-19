<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:16
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1ffca800c5_87603550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30386fe3b5241068df908ab95c28c95a2cb3070' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\product.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-pack.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-accessories.tpl' => 1,
  ),
),false)) {
function content_6a5c1ffca800c5_87603550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_787144726a5c1ffca04983_87467432', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4761178216a5c1ffca1a918_58805337', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1601840376a5c1ffca256d6_80340630', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_787144726a5c1ffca04983_87467432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_787144726a5c1ffca04983_87467432',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
">

  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']), ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price_amount']), ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['weight']), ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['weight_unit']), ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_4761178216a5c1ffca1a918_58805337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_4761178216a5c1ffca1a918_58805337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_15870250306a5c1ffca25fc7_26955350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_16212795466a5c1ffca2a327_66131323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'product_header'} */
class Block_13360783966a5c1ffca276f3_11418663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1 class="product__name h2 <?php if (!empty($_smarty_tpl->tpl_vars['product_manufacturer']->value->name) && !empty($_smarty_tpl->tpl_vars['product_brand_url']->value)) {?>mb-1<?php }?>">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16212795466a5c1ffca2a327_66131323', 'page_title', $this->tplIndex);
?>

        </h1>
      <?php
}
}
/* {/block 'product_header'} */
/* {block 'product_manufacturer'} */
class Block_4701204216a5c1ffca2bba5_00408667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['product_manufacturer']->value->name) && !empty($_smarty_tpl->tpl_vars['product_manufacturer']->value->url)) {?>
          <div class="product__manufacturer">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value->url), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product brand: %brand_name%','sprintf'=>array('%brand_name%'=>$_smarty_tpl->tpl_vars['product_manufacturer']->value->name),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value->name), ENT_QUOTES, 'UTF-8');?>

            </a>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_manufacturer'} */
/* {block 'product_prices'} */
class Block_6913986386a5c1ffca356b3_68370688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_16351559336a5c1ffca36e61_96968285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product__description-short rich-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
      <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_12469759546a5c1ffca38c51_18218647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-customization.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
        <?php }?>
      <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_11305715046a5c1ffca46002_94482600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_pack'} */
class Block_14124494306a5c1ffca47634_30732686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-pack.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_17461493206a5c1ffca48bb4_67303580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_9446040806a5c1ffca4a168_30655203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_18599500346a5c1ffca4b6d3_46828862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_out_of_stock'} */
class Block_3360248486a5c1ffca4ce87_95313517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_refresh'} */
class Block_21098549116a5c1ffca4f305_92456664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_6741689456a5c1ffca42f94_96069448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['cart']), ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['static_token']->value), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
            <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11305715046a5c1ffca46002_94482600', 'product_variants', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14124494306a5c1ffca47634_30732686', 'product_pack', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17461493206a5c1ffca48bb4_67303580', 'product_discounts', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9446040806a5c1ffca4a168_30655203', 'product_add_to_cart', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18599500346a5c1ffca4b6d3_46828862', 'product_additional_info', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3360248486a5c1ffca4ce87_95313517', 'product_out_of_stock', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21098549116a5c1ffca4f305_92456664', 'product_refresh', $this->tplIndex);
?>

          </form>
        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_10152048336a5c1ffca512c8_66482676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
              <div class="accordion-item" id="product_description">
                <h2 class="accordion-header" id="product_description_heading">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#product_description_collapse" aria-expanded="true" aria-controls="product_description_collapse">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                  </button>
                </h2>

                <div id="product_description_collapse" class="accordion-collapse collapse show" aria-labelledby="product_description_heading">
                  <div class="accordion-body">
                    <div class="product__description rich-text">
                      <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_16008313606a5c1ffca54920_71466092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_9456732936a5c1ffca55f39_51595654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
              <div class="info accordion-item" id="product_attachments">
                <h2 class="accordion-header" id="product_attachments_heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product_attachments_collapse" aria-expanded="false" aria-controls="product_attachments_collapse">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                  </button>
                </h2>

                <div id="product_attachments_collapse" class="accordion-collapse collapse" aria-labelledby="product_attachments_heading">
                  <div class="accordion-body">
                    <div class="product__attachments">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                        <div class="attachment">
                          <p class="attachment__name">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['attachment']->value['name']), ENT_QUOTES, 'UTF-8');?>

                          </p>

                          <?php if ($_smarty_tpl->tpl_vars['attachment']->value['description']) {?>
                            <p class="attachment__description">
                              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['attachment']->value['description']), ENT_QUOTES, 'UTF-8');?>

                            </p>
                          <?php }?>

                          <a class="attachment__link stretched-link"
                            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"
                            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download %attachment_name%','sprintf'=>array('%attachment_name%'=>$_smarty_tpl->tpl_vars['attachment']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                          >
                            <i class="material-icons">&#xE2C4;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted']), ENT_QUOTES, 'UTF-8');?>
)
                          </a>
                        </div>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_3484211316a5c1ffca50ac1_88751634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product__accordion accordion accordion-flush" id="product_accordion">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10152048336a5c1ffca512c8_66482676', 'product_description', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16008313606a5c1ffca54920_71466092', 'product_details', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9456732936a5c1ffca55f39_51595654', 'product_attachments', $this->tplIndex);
?>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <div class="accordion-item" id="extra_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extraKey']->value), ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['key']->value), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['val']->value), ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
              <h2 class="accordion-header" id="product_extra_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extraKey']->value), ENT_QUOTES, 'UTF-8');?>
_heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product_extra_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extraKey']->value), ENT_QUOTES, 'UTF-8');?>
_collapse" aria-expanded="false" aria-controls="product_extra_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extraKey']->value), ENT_QUOTES, 'UTF-8');?>
_collapse">
                  <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extra']->value['title']), ENT_QUOTES, 'UTF-8');?>

                </button>
              </h2>

              <div id="product_extra_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extraKey']->value), ENT_QUOTES, 'UTF-8');?>
_collapse" class="accordion-collapse collapse" data-bs-parent="#product_accordion" aria-labelledby="product_extra_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['extraKey']->value), ENT_QUOTES, 'UTF-8');?>
_heading">
                <div class="accordion-body">
                  <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                </div>
              </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'hook_display_reassurance'} */
class Block_16982108386a5c1ffca78325_39366869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_accessories'} */
class Block_10300208196a5c1ffca79b88_90987152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-accessories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_4793529876a5c1ffca7bfc5_17839396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'product_footer'} */
/* {block 'page_footer'} */
class Block_4423967276a5c1ffca7e376_17370037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10740460276a5c1ffca7db97_88750504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4423967276a5c1ffca7e376_17370037', 'page_footer', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1601840376a5c1ffca256d6_80340630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1601840376a5c1ffca256d6_80340630',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_15870250306a5c1ffca25fc7_26955350',
  ),
  'product_header' => 
  array (
    0 => 'Block_13360783966a5c1ffca276f3_11418663',
  ),
  'page_title' => 
  array (
    0 => 'Block_16212795466a5c1ffca2a327_66131323',
  ),
  'product_manufacturer' => 
  array (
    0 => 'Block_4701204216a5c1ffca2bba5_00408667',
  ),
  'product_prices' => 
  array (
    0 => 'Block_6913986386a5c1ffca356b3_68370688',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_16351559336a5c1ffca36e61_96968285',
  ),
  'product_customization' => 
  array (
    0 => 'Block_12469759546a5c1ffca38c51_18218647',
  ),
  'product_buy' => 
  array (
    0 => 'Block_6741689456a5c1ffca42f94_96069448',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11305715046a5c1ffca46002_94482600',
  ),
  'product_pack' => 
  array (
    0 => 'Block_14124494306a5c1ffca47634_30732686',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_17461493206a5c1ffca48bb4_67303580',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_9446040806a5c1ffca4a168_30655203',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_18599500346a5c1ffca4b6d3_46828862',
  ),
  'product_out_of_stock' => 
  array (
    0 => 'Block_3360248486a5c1ffca4ce87_95313517',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_21098549116a5c1ffca4f305_92456664',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_3484211316a5c1ffca50ac1_88751634',
  ),
  'product_description' => 
  array (
    0 => 'Block_10152048336a5c1ffca512c8_66482676',
  ),
  'product_details' => 
  array (
    0 => 'Block_16008313606a5c1ffca54920_71466092',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_9456732936a5c1ffca55f39_51595654',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_16982108386a5c1ffca78325_39366869',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_10300208196a5c1ffca79b88_90987152',
  ),
  'product_footer' => 
  array (
    0 => 'Block_4793529876a5c1ffca7bfc5_17839396',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10740460276a5c1ffca7db97_88750504',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4423967276a5c1ffca7e376_17370037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product__container product-container js-product-container" data-ps-ref="product-container">
    <div class="product__left">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15870250306a5c1ffca25fc7_26955350', 'product_cover_thumbnails', $this->tplIndex);
?>

    </div>

    <div class="product__right" data-ps-ref="product-right" tabindex="-1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13360783966a5c1ffca276f3_11418663', 'product_header', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4701204216a5c1ffca2bba5_00408667', 'product_manufacturer', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6913986386a5c1ffca356b3_68370688', 'product_prices', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16351559336a5c1ffca36e61_96968285', 'product_description_short', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12469759546a5c1ffca38c51_18218647', 'product_customization', $this->tplIndex);
?>


      <div class="product__actions js-product-actions">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6741689456a5c1ffca42f94_96069448', 'product_buy', $this->tplIndex);
?>

      </div>
    </div>
  </div>
  
    <div class="product__bottom">
    <div class="product__bottom-left">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3484211316a5c1ffca50ac1_88751634', 'product_tabs', $this->tplIndex);
?>

    </div>

    <div class="product__bottom-right">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16982108386a5c1ffca78325_39366869', 'hook_display_reassurance', $this->tplIndex);
?>

    </div>
  </div>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10300208196a5c1ffca79b88_90987152', 'product_accessories', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4793529876a5c1ffca7bfc5_17839396', 'product_footer', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10740460276a5c1ffca7db97_88750504', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
