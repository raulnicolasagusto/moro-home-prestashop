<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:30
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2ad23811_39235040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74de507f283517fa1de4bbeef7081bf495cccf53' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\helpers.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2ad23811_39235040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbirdlayouts_layout_full_width_tpl\\74\\de\\50\\74de507f283517fa1de4bbeef7081bf495cccf53_2.file.helpers.tpl.php',
    'uid' => '74de507f283517fa1de4bbeef7081bf495cccf53',
    'call_name' => 'smarty_template_function_renderLogo_9396262246a5c1e2ad121d0_33131243',
  ),
));
?>

<?php }
/* smarty_template_function_renderLogo_9396262246a5c1e2ad121d0_33131243 */
if (!function_exists('smarty_template_function_renderLogo_9396262246a5c1e2ad121d0_33131243')) {
function smarty_template_function_renderLogo_9396262246a5c1e2ad121d0_33131243(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a class="navbar-brand d-block" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_9396262246a5c1e2ad121d0_33131243 */
}
