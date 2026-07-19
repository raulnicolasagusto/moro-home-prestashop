<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:18
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\qty-input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50ea24ff79_45037498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9add076eee1ebfdccc4c23bdac60886e1291a452' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\qty-input.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50ea24ff79_45037498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('increment_icon', "E145");
$_smarty_tpl->_assignInScope('decrement_icon', "E15B");
$_smarty_tpl->_assignInScope('submit_icon', "E5CA");
$_smarty_tpl->_assignInScope('cancel_icon', "E5CD");
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase quantity of %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('increment_label', $_prefixVariable2);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrease quantity of %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('decrement_label', $_prefixVariable3);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change quantity of %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('quantity_label', $_prefixVariable4);?>

<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>
  <?php $_smarty_tpl->_assignInScope('prepend', array("button"=>"increment","icon"=>$_smarty_tpl->tpl_vars['increment_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['submit_icon']->value));?>
  <?php $_smarty_tpl->_assignInScope('append', array("button"=>"decrement","icon"=>$_smarty_tpl->tpl_vars['decrement_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['cancel_icon']->value));
} else { ?>
  <?php $_smarty_tpl->_assignInScope('prepend', array("button"=>"decrement","icon"=>$_smarty_tpl->tpl_vars['decrement_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['cancel_icon']->value));?>
  <?php $_smarty_tpl->_assignInScope('append', array("button"=>"increment","icon"=>$_smarty_tpl->tpl_vars['increment_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['submit_icon']->value));
}?>

<div class="quantity-button__group input-group">
  <button aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['decrement_label']->value), ENT_QUOTES, 'UTF-8');?>
" class="btn <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['prepend']->value['button']), ENT_QUOTES, 'UTF-8');?>
 btn-square-icon js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['prepend']->value['button']), ENT_QUOTES, 'UTF-8');?>
-button" type="button" id="decrement_button_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons" aria-hidden="true">&#x<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['prepend']->value['icon']), ENT_QUOTES, 'UTF-8');?>
;</i>
    <i class="material-icons confirmation d-none">&#x<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['prepend']->value['confirm_icon']), ENT_QUOTES, 'UTF-8');?>
;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['key']->value), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
"
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['id']))) {?>id="quantity_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['class']))) {?>class="form-control"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['name']))) {?>name="qty"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['aria-label']))) {?>aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['quantity_label']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['type']))) {?>type="text"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['inputmode']))) {?>inputmode="numeric"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['pattern']))) {?>pattern="[0-9]+"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['value']))) {?>value="1"<?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['attributes']->value['min']))) {?>min="1"<?php }?>
  >

  <button aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['increment_label']->value), ENT_QUOTES, 'UTF-8');?>
" class="btn <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['append']->value['button']), ENT_QUOTES, 'UTF-8');?>
 btn-square-icon js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['append']->value['button']), ENT_QUOTES, 'UTF-8');?>
-button" type="button" id="increment_button_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons" aria-hidden="true">&#x<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['append']->value['icon']), ENT_QUOTES, 'UTF-8');?>
;</i>
    <i class="material-icons confirmation d-none">&#x<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['append']->value['confirm_icon']), ENT_QUOTES, 'UTF-8');?>
;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
<?php }
}
