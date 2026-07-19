<?php
/* Smarty version 4.5.5, created on 2026-07-18 23:40:04
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c3904d66b31_48011283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63a63c8041892c1a9041333549330f70caaf1eb' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\header.tpl',
      1 => 1784428685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c3904d66b31_48011283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('headerBanner', 'header-banner');
$_smarty_tpl->_assignInScope('headerNavFullWidth', 'header-nav-full-width');?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_banner", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_nav_1", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_nav_2", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5950986a5c3904d3a239_96670120', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2435174086a5c3904d3f565_43756899', 'header_bottom');
?>

<?php }
/* {block 'header_banner'} */
class Block_5950986a5c3904d3a239_96670120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_5950986a5c3904d3a239_96670120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_banner'))) {?>
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBanner']->value), ENT_QUOTES, 'UTF-8');?>
">
      <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_banner');?>

    </div>
  <?php }
}
}
/* {/block 'header_banner'} */
/* {block 'header_bottom'} */
class Block_2435174086a5c3904d3f565_43756899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_bottom' => 
  array (
    0 => 'Block_2435174086a5c3904d3f565_43756899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <header class="moro-header" data-ps-ref="moro-header">
    <div class="moro-header__inner">

            <div class="moro-header__top">

                <div class="moro-header__left">
                    <button
            type="button"
            class="moro-header__icon-btn"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            data-bs-toggle="offcanvas"
            data-bs-target="#searchCanvas"
          >
            <i class="material-icons moro-header__icon" aria-hidden="true">&#xE8B6;</i>
            <span class="moro-header__icon-label d-none d-md-inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </button>

                    <button
            type="button"
            class="moro-header__icon-btn moro-header__menu-toggle d-xl-none"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle menu','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            aria-expanded="false"
            aria-controls="mobile-menu"
          >
            <i class="material-icons" aria-hidden="true">&#xE5D2;</i>
          </button>
        </div>

                <div class="moro-header__brand">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><h1 class="moro-header__h1"><?php }?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?></h1><?php }?>
          <?php }?>
        </div>

                        <div class="moro-header__right">
          <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_nav_2'))) {?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_nav_2');?>

          <?php }?>

                    <a
            class="moro-header__icon-btn moro-header__wishlist"
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','lists')), ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
          >
            <i class="material-icons" aria-hidden="true">&#xE87D;</i>
          </a>
        </div>
      </div>

            <div id="_mobile_ps_customersignin" class="d-md-none d-flex col-auto"></div>
      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <div id="_mobile_ps_shoppingcart" class="d-md-none d-flex col-auto"></div>
      <?php }?>

            <div class="moro-header__nav-wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

      </div>
    </div>
  </header>

  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "nav_full_width", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'nav_full_width'))) {?>
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerNavFullWidth']->value), ENT_QUOTES, 'UTF-8');?>
">
      <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'nav_full_width');?>

    </div>
  <?php }
}
}
/* {/block 'header_bottom'} */
}
