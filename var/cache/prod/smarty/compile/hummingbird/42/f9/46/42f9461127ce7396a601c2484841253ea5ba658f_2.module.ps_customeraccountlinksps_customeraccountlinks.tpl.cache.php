<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:35
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2f8aea67_60447642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1784413139,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2f8aea67_60447642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '5197842946a5c1e2f89da85_41780768';
?>
<nav
  class="ps-customeraccountlinks footer-block col-md-6 col-lg-3"
  role="navigation"
  aria-labelledby="footer_customeraccount_title">
  <p
    id="footer_customeraccount_title"
    class="footer-block__title footer-block__title--toggle"
  >
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

    </a>
    <button
      class="stretched-link collapsed d-md-none"
      type="button"
      aria-expanded="false"
      aria-controls="footer_customeraccountlinks"
      data-bs-target="#footer_customeraccountlinks"
      data-bs-toggle="collapse"
    >
      <span class="visually-hidden">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle your account links','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </span>
      <i class="material-icons" aria-hidden="true">&#xE313;</i>
    </button>
  </p>

  <div class="footer-block__content collapse" id="footer_customeraccountlinks">
    <ul class="footer-block__list">
      <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
        <li>
          <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['identity']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </a>
        </li>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
          <li>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          </li>
        <?php } else { ?>
          <li>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['address']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          </li>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
          <li>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['history']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          </li>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
          <li>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
          <li>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['discount']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
          <li>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          </li>
        <?php }?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>


        <li>
          <a class="logout text-danger-on-dark" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['actions']['logout']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        </li>

      <?php } else { ?>
        <li>
          <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['guest_tracking']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </a>
        </li>
        <li>
          <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        </li>
        <li>
          <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['register']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </a>
        </li>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>

      <?php }?>
    </ul>
  </div>
</nav>
<?php }
}
