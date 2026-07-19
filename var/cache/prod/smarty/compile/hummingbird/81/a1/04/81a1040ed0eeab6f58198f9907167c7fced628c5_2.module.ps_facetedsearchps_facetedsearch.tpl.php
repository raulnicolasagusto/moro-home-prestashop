<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:37
  from 'module:ps_facetedsearchps_facetedsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c162dd91_37183753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearchps_facetedsearch.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c162dd91_37183753 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) && !empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
  <div id="search_filters_wrapper" class="ps-facetedsearch d-none d-md-block left-block">
    <div id="_desktop_faceted">
      <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

    </div>
  </div>

  <div class="ps-facetedsearch ps-facetedsearch--mobile offcanvas offcanvas-start" tabindex="-1" id="offcanvas-faceted" aria-labelledby="faceted-offcanvas-label">
    <div class="offcanvas-header">
      <p class="h5 offcanvas-title" id="faceted-offcanvas-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div id="_mobile_faceted"></div>
    </div>
  </div>
<?php }
}
}
