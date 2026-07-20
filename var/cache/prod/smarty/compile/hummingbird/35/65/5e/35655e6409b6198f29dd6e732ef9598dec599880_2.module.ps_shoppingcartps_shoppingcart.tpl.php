<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:04
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c80f58b6_85773247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1784501435,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73c80f58b6_85773247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="_desktop_ps_shoppingcart">
  <div class="ps-shoppingcart">
    <div class="header-block d-flex align-items-center blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>header-block--active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['refresh_url']->value), ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a class="header-block__action-btn pe-md-0" rel="nofollow" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart_url']->value), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart (%d products)','d'=>'Shop.Theme.Checkout','sprintf'=>array($_smarty_tpl->tpl_vars['cart']->value['products_count'])),$_smarty_tpl ) );?>
">
      <?php } else { ?>
        <span class="header-block__action-btn pe-md-0">
      <?php }?>

      <i class="material-symbols-outlined header-block__icon" aria-hidden="true">shopping_bag</i>
      <span class="header-block__badge"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['products_count']), ENT_QUOTES, 'UTF-8');?>
</span>

      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php } else { ?>
        </span>
      <?php }?>
    </div>
  </div>
</div>
<?php }
}
