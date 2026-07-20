<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:05
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c9604583_19230181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1784475129,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73c9604583_19230181 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ps_searchbar"
     class="ps-searchbar js-search-widget"
     data-search-controller-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
"
     hidden>

  <template id="ps_searchbar_result" class="js-search-template">
    <a data-ps-ref="searchbar-result-link" class="ps-searchbar__result-link" id="" href="">
      <img src="" alt="" class="ps-searchbar__result-image">
      <p class="ps-searchbar__result-name"></p>
    </a>
  </template>

</div>
<?php }
}
