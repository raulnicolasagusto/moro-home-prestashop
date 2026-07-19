<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:38
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c2bf66a1_28033913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a6ffceaeeb18a3e027098f30eaade2e47ae89b7' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\sort-orders.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c2bf66a1_28033913 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="products__sort-label">
  <span class="align-middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
</div>

<div class="products__sort-dropdown">
  <button
    class="products__sort-dropdown-button btn btn-outline-tertiary dropdown-toggle"
    id="sort_dropdown_button"
    rel="nofollow"
    data-bs-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false"
    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change sort order','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['sort_selected']) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['listing']->value['sort_selected']), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>
  </button>

  <div class="dropdown-menu" role="menu" aria-labelledby="sort_dropdown_button">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['sort_order']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
        aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort products by: %sort_order%','sprintf'=>array('%sort_order%'=>$_smarty_tpl->tpl_vars['sort_order']->value['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        role="menuitem"
        <?php if ($_smarty_tpl->tpl_vars['sort_order']->value['current']) {?>aria-current="true"<?php }?>
        class="dropdown-item <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) ))), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['sort_order']->value['label']), ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
}
