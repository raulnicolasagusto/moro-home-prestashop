<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:32
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2c2f1534_52770493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63a63c8041892c1a9041333549330f70caaf1eb' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\header.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2c2f1534_52770493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('headerBanner', 'header-banner');
$_smarty_tpl->_assignInScope('headerTop', 'header-top');
$_smarty_tpl->_assignInScope('headerBottom', 'header-bottom');
$_smarty_tpl->_assignInScope('headerNavFullWidth', 'header-nav-full-width');?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_banner", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15223609896a5c1e2c2dab67_21689429', 'header_banner');
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_nav_1", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_nav_2", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16803820136a5c1e2c2de898_27606934', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18675184256a5c1e2c2e25b2_52372342', 'header_bottom');
?>

<?php }
/* {block 'header_banner'} */
class Block_15223609896a5c1e2c2dab67_21689429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_15223609896a5c1e2c2dab67_21689429',
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
/* {block 'header_nav'} */
class Block_16803820136a5c1e2c2de898_27606934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_16803820136a5c1e2c2de898_27606934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_nav_1')) || !empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_nav_2'))) {?>
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTop']->value), ENT_QUOTES, 'UTF-8');?>
 d-none d-md-block">
      <div class="container-md">
        <div class="row">
          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTop']->value), ENT_QUOTES, 'UTF-8');?>
__left col-md-4">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_nav_1');?>

          </div>

          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTop']->value), ENT_QUOTES, 'UTF-8');?>
__right col-md-8">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_nav_2');?>

          </div>
        </div>
      </div>
    </div>
  <?php }
}
}
/* {/block 'header_nav'} */
/* {block 'header_bottom'} */
class Block_18675184256a5c1e2c2e25b2_52372342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_bottom' => 
  array (
    0 => 'Block_18675184256a5c1e2c2e25b2_52372342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottom']->value), ENT_QUOTES, 'UTF-8');?>
">
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottom']->value), ENT_QUOTES, 'UTF-8');?>
__container container-md">
      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottom']->value), ENT_QUOTES, 'UTF-8');?>
__row row gx-2 gx-md-4 align-items-stretch">
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottom']->value), ENT_QUOTES, 'UTF-8');?>
__logo d-flex align-items-center col-auto me-auto me-md-0">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><h1 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottom']->value), ENT_QUOTES, 'UTF-8');?>
__h1 mb-0"><?php }?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?></h1><?php }?>
          <?php }?>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>


        <div id="_mobile_ps_customersignin" class="d-md-none d-flex col-auto">
                    <div class="header-block">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account']), ENT_QUOTES, 'UTF-8');?>
" class="header-block__action-btn">
              <i class="material-icons header-block__icon" aria-hidden="true">&#xE853;</i>
            </a>
          </div>
                  </div>

        <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
          <div id="_mobile_ps_shoppingcart" class="d-md-none d-flex col-auto">
                        <div class="header-block">
              <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['cart']), ENT_QUOTES, 'UTF-8');?>
" class="header-block__action-btn">
                <i class="material-icons header-block__icon" aria-hidden="true">&#xE8CC;</i>
                <span class="header-block__badge"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['products_count']), ENT_QUOTES, 'UTF-8');?>
</span>
              </a>
            </div>
                      </div>
        <?php }?>
      </div>
    </div>
  </div>

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
