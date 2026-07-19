<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:29
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50b9970b62_02709266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78465070fd4eb34e74cb66bfdb1fa7a683f168a' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
    'file:components/page-loader.tpl' => 1,
    'file:components/toast-container.tpl' => 1,
    'file:components/password-policy-template.tpl' => 1,
  ),
),false)) {
function content_6a5d50b9970b62_02709266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['locale']), ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17965487676a5d50b9953420_83959387', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page_name']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] ))), ENT_QUOTES, 'UTF-8');?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9414866146a5d50b9955629_29609628', 'top_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18495426016a5d50b9955f61_65392128', 'skip_to_main_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21363644936a5d50b9956e40_46471793', 'hook_after_body_opening_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17731149276a5d50b9957b52_15293511', 'product_activation');
?>


    <header id="header" class="header js-sticky-header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17312293866a5d50b9958925_57296126', 'header');
?>

    </header>

    <main id="wrapper" class="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperTop'),$_smarty_tpl ) );?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380006046a5d50b995a5e0_50431815', 'breadcrumb');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552433066a5d50b995bc81_07321615', 'main_content');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6413969866a5d50b995c705_09343188', 'notifications');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5417062426a5d50b995d496_89410113', 'content_columns');
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperBottom'),$_smarty_tpl ) );?>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11908783066a5d50b9964120_32006377', 'footer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2722588106a5d50b9964e75_44256623', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_568108126a5d50b9965fa2_48511558', 'bottom_elements');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17483183046a5d50b9967585_35600265', 'hook_before_body_closing_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21047186566a5d50b9968221_96915806', 'modal_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7008649096a5d50b996fa04_78770340', 'back_to_top');
?>

  </body>
</html>
<?php }
/* {block 'head'} */
class Block_17965487676a5d50b9953420_83959387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_17965487676a5d50b9953420_83959387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'top_content'} */
class Block_9414866146a5d50b9955629_29609628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_content' => 
  array (
    0 => 'Block_9414866146a5d50b9955629_29609628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="back-to-top"></div>
    <?php
}
}
/* {/block 'top_content'} */
/* {block 'skip_to_main_content'} */
class Block_18495426016a5d50b9955f61_65392128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'skip_to_main_content' => 
  array (
    0 => 'Block_18495426016a5d50b9955f61_65392128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a class="visually-hidden-focusable btn btn-primary skip-link" href="#main-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip to main content','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php
}
}
/* {/block 'skip_to_main_content'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_21363644936a5d50b9956e40_46471793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_21363644936a5d50b9956e40_46471793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_17731149276a5d50b9957b52_15293511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_17731149276a5d50b9957b52_15293511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_17312293866a5d50b9958925_57296126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17312293866a5d50b9958925_57296126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_1380006046a5d50b995a5e0_50431815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1380006046a5d50b995a5e0_50431815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'main_content'} */
class Block_552433066a5d50b995bc81_07321615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_552433066a5d50b995bc81_07321615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="main-content"></div>
      <?php
}
}
/* {/block 'main_content'} */
/* {block 'notifications'} */
class Block_6413969866a5d50b995c705_09343188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_6413969866a5d50b995c705_09343188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'container_class'} */
class Block_12570490806a5d50b995d944_74193509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_16717753316a5d50b995e119_02166578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="left-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_2110071956a5d50b9960961_76517286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_11974898236a5d50b9960051_52969320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="center-column" class="center-column page col-md-4 col-lg-6">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2110071956a5d50b9960961_76517286', 'content', $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_1302203506a5d50b9961974_55988036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="right-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_5417062426a5d50b995d496_89410113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_5417062426a5d50b995d496_89410113',
  ),
  'container_class' => 
  array (
    0 => 'Block_12570490806a5d50b995d944_74193509',
  ),
  'left_column' => 
  array (
    0 => 'Block_16717753316a5d50b995e119_02166578',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_11974898236a5d50b9960051_52969320',
  ),
  'content' => 
  array (
    0 => 'Block_2110071956a5d50b9960961_76517286',
  ),
  'right_column' => 
  array (
    0 => 'Block_1302203506a5d50b9961974_55988036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12570490806a5d50b995d944_74193509', 'container_class', $this->tplIndex);
?>
">
          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16717753316a5d50b995e119_02166578', 'left_column', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11974898236a5d50b9960051_52969320', 'content_wrapper', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302203506a5d50b9961974_55988036', 'right_column', $this->tplIndex);
?>

          </div>
        </div>
      <?php
}
}
/* {/block 'content_columns'} */
/* {block 'footer'} */
class Block_11908783066a5d50b9964120_32006377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11908783066a5d50b9964120_32006377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer id="footer" class="footer">
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </footer>
    <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_2722588106a5d50b9964e75_44256623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_2722588106a5d50b9964e75_44256623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/javascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'bottom_elements'} */
class Block_568108126a5d50b9965fa2_48511558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom_elements' => 
  array (
    0 => 'Block_568108126a5d50b9965fa2_48511558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:components/page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/toast-container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/password-policy-template.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'bottom_elements'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_17483183046a5d50b9967585_35600265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_17483183046a5d50b9967585_35600265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'modal_container'} */
class Block_21047186566a5d50b9968221_96915806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal_container' => 
  array (
    0 => 'Block_21047186566a5d50b9968221_96915806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div data-ps-target="modal-container">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "modal_content", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayModalContent'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modal_content')) {?>
          <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modal_content');?>

        <?php }?>
      </div>
    <?php
}
}
/* {/block 'modal_container'} */
/* {block 'back_to_top'} */
class Block_7008649096a5d50b996fa04_78770340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'back_to_top' => 
  array (
    0 => 'Block_7008649096a5d50b996fa04_78770340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a class="visually-hidden-focusable btn btn-primary back-to-top-link" href="#back-to-top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php
}
}
/* {/block 'back_to_top'} */
}
