<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:39:32
  from 'C:\xampp-8-2\htdocs\more-home\modules\ps_mbo\views\templates\hook\dashboard-zone-three.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1cc4042cf4_31347147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf74c17b256d174c636327fa6c22ae63da05f3ba' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-three.tpl',
      1 => 1784412815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1cc4042cf4_31347147 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  window.$(document).ready(function () {
    if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
      if (typeof renderCdcError === 'function') {
        renderCdcError($('#cdc-dashboard-news'));
      }
    } else {
      const renderNews = window.mboCdc.renderDashboardNews
      if (!window.mboDashboardContext) {
        setTimeout(() => {
            if (window.mboDashboardContext) {
              renderNews(window.mboDashboardContext, '#cdc-dashboard-news')
            }
          },
          1000)
      } else {
        renderNews(window.mboDashboardContext, '#cdc-dashboard-news')
      }
    }
  });
<?php echo '</script'; ?>
>

<section id="cdc-dashboard-news" class="dash_news cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
