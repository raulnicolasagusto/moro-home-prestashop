<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:34
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2e3b4383_20821569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1784413142,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2e3b4383_20821569 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="_desktop_ps_searchbar" class="order-2 ms-auto col-auto d-none d-md-flex align-items-center">
  <div id="ps_searchbar" class="ps-searchbar js-search-widget" data-search-controller-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
">
    <form class="ps-searchbar__form" method="get" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
" role="search">
      <input type="hidden" name="controller" value="search">
      <i class="material-icons ps-searchbar__magnifier js-search-icon" aria-hidden="true">&#xE8B6;</i>
      <input
        class="js-search-input form-control ps-searchbar__input"
        type="text"
        name="s"
        value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_string']->value), ENT_QUOTES, 'UTF-8');?>
"
        placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
        aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
        autocomplete="off"
        role="combobox"
        aria-haspopup="listbox"
        aria-autocomplete="list"
        aria-controls="ps_searchbar_results"
        aria-expanded="false"
      >
      <button type="button" class="ps-searchbar__clear js-search-clear btn outline outline--rounded d-none" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <i class="material-icons">&#xE14C;</i>
      </button>
    </form>

    <div
      class="ps-searchbar__dropdown js-search-dropdown d-none"
      id="ps_searchbar_dropdown"
      aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search results','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
      tabindex="-1"
    >
      <div class="ps-searchbar__results js-search-results" id="ps_searchbar_results" role="listbox" tabindex="-1"></div>
    </div>
  </div>
</div>

<template id="ps_searchbar_result" class="js-search-template">
  <a data-ps-ref="searchbar-result-link" class="ps-searchbar__result-link" id="" href="">
    <img src="" alt="" class="ps-searchbar__result-image">
    <p class="ps-searchbar__result-name"></p>
  </a>
</template>

<div class="ps-searchbar--mobile d-md-none d-flex col-auto">
  <div class="header-block d-flex align-items-center">
    <a class="header-block__action-btn" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#searchCanvas" aria-controls="searchCanvas" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show search bar','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
      <span class="material-icons header-block__icon">&#xE8B6;</span>
    </a>
  </div>

  <div class="ps-searchbar__offcanvas js-search-offcanvas offcanvas offcanvas-top h-auto" tabindex="-1" id="searchCanvas" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <div id="_mobile_ps_searchbar" class="ps-searchbar__container"></div>
      <button type="button" class="btn btn-link" data-bs-dismiss="offcanvas" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close search','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</button>
    </div>
  </div>
</div>
<?php }
}
