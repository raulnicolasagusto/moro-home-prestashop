<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:22
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2002734b02_25116464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3acd50081d60687e76d749912ae14813f80a3f6' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\product-details.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c2002734b02_25116464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div
  class="js-product-details"
  data-product="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] ))), ENT_QUOTES, 'UTF-8');?>
"
>
  <div class="accordion-item" id="product_details">
    <h2 class="accordion-header" id="product_details_heading">
      <button class="accordion-button <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>collapsed<?php }?>" type="button" data-bs-toggle="collapse" data-bs-target="#product_details_collapse" aria-expanded="<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?>true<?php } else { ?>false<?php }?>"
        aria-controls="product_details_collapse">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </button>
    </h2>

    <div id="product_details_collapse" class="accordion-collapse collapse <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?>show<?php }?>" aria-labelledby="product_details_heading">
      <div class="accordion-body">
        <ul class="details__list">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9271195576a5c2002714fa8_81891466', 'product_manufacturer');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7536642846a5c200271d229_00717321', 'product_reference');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4657307726a5c200271fad5_55221241', 'product_quantities');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7298980536a5c2002724612_92908184', 'product_availability_date');
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12249468406a5c20027289f8_34099534', 'product_condition');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6775710606a5c200272bfb0_94415823', 'product_specific_references');
?>

        </ul>
      </div>
    </div>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4131830586a5c20027309a3_55709155', 'product_features');
?>

</div>
<?php }
/* {block 'product_manufacturer'} */
class Block_9271195576a5c2002714fa8_81891466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_manufacturer' => 
  array (
    0 => 'Block_9271195576a5c2002714fa8_81891466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?>
              <li class="details__item details__item--manufacturer">
                <div class="details__left">
                  <span class="details__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                </div>

                <div class="details__right">
                  <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value['image']['bySize']['small_default']['url']))) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value->url), ENT_QUOTES, 'UTF-8');?>
">
                      <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value['image']['bySize']['small_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                        class="img-fluid details__manufacturer-logo"
                        alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value->name), ENT_QUOTES, 'UTF-8');?>
"
                        loading="lazy"
                        width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value['image']['bySize']['small_default']['width']), ENT_QUOTES, 'UTF-8');?>
"
                        height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value['image']['bySize']['small_default']['height']), ENT_QUOTES, 'UTF-8');?>
"
                        aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand: %brand_name%','sprintf'=>array('%brand_name%'=>$_smarty_tpl->tpl_vars['product_manufacturer']->value->name),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
                      >
                    </a>
                  <?php } else { ?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value->url), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product_manufacturer']->value->name), ENT_QUOTES, 'UTF-8');?>
</a>
                  <?php }?>
                </div>
              </li>
            <?php }?>
          <?php
}
}
/* {/block 'product_manufacturer'} */
/* {block 'product_reference'} */
class Block_7536642846a5c200271d229_00717321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_7536642846a5c200271d229_00717321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) {?>
              <li class="details__item details__item--reference">
                <div class="details__left">
                  <span class="details__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                </div>

                <div class="details__right">
                  <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['reference_to_display']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
              </li>
            <?php }?>
          <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_4657307726a5c200271fad5_55221241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantities' => 
  array (
    0 => 'Block_4657307726a5c200271fad5_55221241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
              <li class="details__item details__item--quantities">
                <div class="details__left">
                  <span class="details__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                </div>

                <div class="details__right">
                  <span data-stock="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['quantity_label']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
              </li>
            <?php }?>
          <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
class Block_7298980536a5c2002724612_92908184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
    0 => 'Block_7298980536a5c2002724612_92908184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
              <li class="details__item details__item--availability-date">
                <div class="details__left">
                  <span class="details__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                </div>

                <div class="details__right">
                  <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['availability_date']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
              </li>
            <?php }?>
          <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_condition'} */
class Block_12249468406a5c20027289f8_34099534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_condition' => 
  array (
    0 => 'Block_12249468406a5c20027289f8_34099534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
              <li class="details__item details__item--condition">
                <div class="details__left">
                  <span class="details__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                </div>

                <div class="details__right">
                  <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['condition']['label']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
              </li>
            <?php }?>
          <?php
}
}
/* {/block 'product_condition'} */
/* {block 'product_specific_references'} */
class Block_6775710606a5c200272bfb0_94415823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
    0 => 'Block_6775710606a5c200272bfb0_94415823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
$_smarty_tpl->tpl_vars['reference']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->do_else = false;
?>
                <li class="details__item details__item--<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value ))), ENT_QUOTES, 'UTF-8');?>
">
                  <div class="details__left">
                    <span class="details__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['key']->value), ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>

                  <div class="details__right">
                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['reference']->value), ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          <?php
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_features'} */
class Block_4131830586a5c20027309a3_55709155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_features' => 
  array (
    0 => 'Block_4131830586a5c20027309a3_55709155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
      <div class="accordion-item" id="product_features">
        <h2 class="accordion-header" id="product_features_heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product_features_collapse" aria-expanded="false" aria-controls="product_features_collapse">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          </button>
        </h2>

        <div id="product_features_collapse" class="accordion-collapse collapse" aria-labelledby="product_features_heading">
          <div class="accordion-body">
            <ul class="details__list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <li class="details__item details__item--feature">
                  <div class="details__left">
                    <span class="details__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['feature']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>

                  <div class="details__right">
                    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )) ));?>
</span>
                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_features'} */
}
