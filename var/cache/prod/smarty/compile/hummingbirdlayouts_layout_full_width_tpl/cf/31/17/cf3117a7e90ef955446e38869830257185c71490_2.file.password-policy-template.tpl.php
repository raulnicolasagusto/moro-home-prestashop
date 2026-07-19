<?php
/* Smarty version 4.5.5, created on 2026-07-18 23:40:11
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\components\password-policy-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c390b258908_33898863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3117a7e90ef955446e38869830257185c71490' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\components\\password-policy-template.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c390b258908_33898863 (Smarty_Internal_Template $_smarty_tpl) {
?>

<template data-ps-ref="password-feedback-template">
  <div
    class="my-3 d-none"
    data-ps-ref="password-feedback-container"
  >
    <div class="progress-container">
      <div class="progress mb-3" aria-hidden="true">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-ps-ref="password-strength-progress-bar"></div>
      </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" data-ps-ref="password-strength-hints">
      <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'] ));?>

      <?php }?>
    <?php echo '</script'; ?>
>

    <div 
      class="password-invalid-message"
      data-ps-ref="password-invalid-message"
      data-ps-data="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password is too weak','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
    ></div>
    <div 
      class="password-valid-message"
      data-ps-ref="password-valid-message"
      data-ps-data="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password is valid','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
    ></div>
    <div 
      class="password-length-message"
      data-ps-ref="password-length-message"
      data-ps-data="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password length is invalid','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
    ></div>
    <div 
      class="password-announce-validity visually-hidden"
      data-ps-target="password-announce-validity"
      aria-live="off"
      aria-atomic="true"
    ></div>

    <div class="password-requirements">
      <p class="password-requirements__length" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a password between %s and %s characters','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" data-ps-ref="password-requirements-length">
        <i class="password-requirements__icon material-icons" aria-hidden="true" data-ps-ref="password-requirements-length-icon">&#xE86C;</i>
        <span data-ps-ref="password-requirements-length-message"></span>
      </p>

      <p class="password-requirements__score" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum score must be: %s','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" data-ps-ref="password-requirements-score">
        <i class="password-requirements__icon material-icons" aria-hidden="true" data-ps-ref="password-requirements-score-icon">&#xE86C;</i>
        <span data-ps-ref="password-requirements-score-message"></span>
      </p>
    </div>
  </div>
</template>
<?php }
}
