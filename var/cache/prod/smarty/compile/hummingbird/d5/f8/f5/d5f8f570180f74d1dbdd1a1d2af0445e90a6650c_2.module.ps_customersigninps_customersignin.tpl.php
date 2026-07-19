<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:32
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2cb02401_70525547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1784413142,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2cb02401_70525547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div id="_desktop_ps_customersignin">
  <div class="ps-customersignin">
    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
      <div class="dropdown header-block">
        <button
          class="dropdown-toggle header-block__action-btn border-0 bg-transparent"
          id="userMenuButton"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my account (%customerName%)','sprintf'=>array('%customerName%'=>$_smarty_tpl->tpl_vars['customerName']->value),'d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
        >
          <i class="material-icons header-block__icon" aria-hidden="true">&#xE853;</i>
          <span class="header-block__title d-none d-md-block d-lg-none">
            <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( smarty_modifier_capitalize($_smarty_tpl->tpl_vars['customer']->value['firstname']),2,".",true ))), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( smarty_modifier_capitalize($_smarty_tpl->tpl_vars['customer']->value['lastname']),2,".",true ))), ENT_QUOTES, 'UTF-8');?>

          </span>
          <span class="header-block__title d-lg-inline d-none">
            <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( smarty_modifier_capitalize($_smarty_tpl->tpl_vars['customerName']->value),22,"...",true ))), ENT_QUOTES, 'UTF-8');?>

          </span>
        </button>

        <div class="dropdown-menu dropdown-menu-start" aria-labelledby="userMenuButton">
          <a
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account']), ENT_QUOTES, 'UTF-8');?>
"
            class="dropdown-item"
            rel="nofollow"
            <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account']) {?>aria-current="page"<?php }?>
          >
            <i class="material-icons me-2" aria-hidden="true">&#xF02E;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </a>

          <div class="dropdown-divider"></div>

          <a
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['identity']), ENT_QUOTES, 'UTF-8');?>
"
            class="dropdown-item"
            rel="nofollow"
            <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['identity']) {?>aria-current="page"<?php }?>
          >
            <i class="material-icons me-2" aria-hidden="true">&#xE853;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </a>

          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
            <a
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses']), ENT_QUOTES, 'UTF-8');?>
"
              class="dropdown-item"
              rel="nofollow"
              <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['addresses']) {?>aria-current="page"<?php }?>
            >
              <i class="material-icons me-2" aria-hidden="true">&#xF00F;</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          <?php } else { ?>
            <a
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['address']), ENT_QUOTES, 'UTF-8');?>
"
              class="dropdown-item"
              rel="nofollow"
              <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['address']) {?>aria-current="page"<?php }?>
            >
              <i class="material-icons me-2" aria-hidden="true">&#xEF3A;</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          <?php }?>

          <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <a
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['history']), ENT_QUOTES, 'UTF-8');?>
"
              class="dropdown-item"
              rel="nofollow"
              <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['history']) {?>aria-current="page"<?php }?>
            >
              <i class="material-icons me-2" aria-hidden="true">&#xE916;</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          <?php }?>

          <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <a
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip']), ENT_QUOTES, 'UTF-8');?>
"
              class="dropdown-item"
              rel="nofollow"
              <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip']) {?>aria-current="page"<?php }?>
            >
              <i class="material-icons me-2" aria-hidden="true">&#xE8B0;</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <a
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['discount']), ENT_QUOTES, 'UTF-8');?>
"
              class="dropdown-item"
              rel="nofollow"
              <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['discount']) {?>aria-current="page"<?php }?>
            >
              <i class="material-icons me-2" aria-hidden="true">&#xE54E;</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <a
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow']), ENT_QUOTES, 'UTF-8');?>
"
              class="dropdown-item"
              rel="nofollow"
              <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] == $_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow']) {?>aria-current="page"<?php }?>
            >
              <i class="material-icons me-2" aria-hidden="true">&#xE860;</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </a>
          <?php }?>

          <div class="dropdown-divider"></div>

          <a 
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['logout_url']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="dropdown-item"
            rel="nofollow"
          >
            <i class="material-icons me-2" aria-hidden="true">&#xE879;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        </div>
      </div>
    <?php } else { ?>
      <div class="header-block">
        <a
          href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication']), ENT_QUOTES, 'UTF-8');?>
?back=<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] ))), ENT_QUOTES, 'UTF-8');?>
"
          class="header-block__action-btn"
          rel="nofollow"
          aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
        >
          <i class="material-icons header-block__icon" aria-hidden="true">&#xE853;</i>
          <span class="d-none d-md-inline header-block__title">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </span>
        </a>
      </div>
    <?php }?>
  </div>
</div>
<?php }
}
