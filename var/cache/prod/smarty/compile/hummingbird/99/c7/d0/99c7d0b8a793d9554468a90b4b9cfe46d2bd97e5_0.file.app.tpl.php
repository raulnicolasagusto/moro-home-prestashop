<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:54:34
  from 'C:\xampp-8-2\htdocs\more-home\modules\ps_accounts\views\templates\admin\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c204ae66054_12551834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c7d0b8a793d9554468a90b4b9cfe46d2bd97e5' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\modules\\ps_accounts\\views\\templates\\admin\\app.tpl',
      1 => 1784412791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c204ae66054_12551834 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ps-accounts-container">
 <prestashop-accounts></prestashop-accounts>
</div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlAccountsCdn']->value,'htmlall','UTF-8' ));?>
" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  (function() {
    const componentInitParams = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['componentInitParams']->value ));?>
;

    function initPsAccounts() {
      if (window?.psaccountsVue) {
        window.psaccountsVue.init(componentInitParams, "Settings");
      } else {
        // If the script is not yet loaded, retry after a short delay
        setTimeout(initPsAccounts, 100);
      }
    }

    // Wait for the page and all scripts to be completely loaded
    if (document.readyState === 'complete') {
      initPsAccounts();
    } else {
      window.addEventListener('load', initPsAccounts);
    }
  })();
<?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.bootstrap div.bootstrap.panel {
    display: none;
  }

  #ps-accounts-container {
    max-width: 1024px;
    margin: auto;
    margin-top: 2rem;
  }

  #main {
    background-color: white;
  }
</style>

<?php }
}
