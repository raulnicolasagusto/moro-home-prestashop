<?php
/* Smarty version 4.5.5, created on 2026-07-18 22:07:49
  from 'module:ps_mboviewstemplateshookrecommendedthemes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2365d21ec6_04113121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef50eadf9abeb8d20509de70fb0b017b600cbc3' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedthemes.tpl',
      1 => 1784412815,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c2365d21ec6_04113121 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_templating_url']->value;?>
"><?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['cdc_script_not_found']->value)) && $_smarty_tpl->tpl_vars['cdc_script_not_found']->value) {?>
  <?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_url']->value;?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
  <?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_url']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
  window.$(document).ready(function () {

    $('#themes-logo-page > .card > .card-body > .row').append('<div id="cdc-explore-themes-catalog" class="col-lg-3 col-md-4 col-sm-6 theme-card-container cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>')

    if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
      if (typeof renderCdcError === 'function') {
        renderCdcError($('#cdc-explore-themes-catalog'));
      }
    } else {
      const renderExploreThemesCatalog = window.mboCdc.renderExploreThemeCatalog

      const exploreThemesCatalogContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

      renderExploreThemesCatalog(exploreThemesCatalogContext, '#cdc-explore-themes-catalog')
    }
  });
<?php echo '</script'; ?>
>
<?php }
}
