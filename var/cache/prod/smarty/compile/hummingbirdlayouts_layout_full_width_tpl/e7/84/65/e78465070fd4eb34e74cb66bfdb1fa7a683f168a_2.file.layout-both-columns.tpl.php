<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:19
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50eb535223_43604144',
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
function content_6a5d50eb535223_43604144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['locale']), ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14396970566a5d50eb5065b3_73178701', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page_name']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] ))), ENT_QUOTES, 'UTF-8');?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18833773786a5d50eb510758_15132704', 'top_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4153315696a5d50eb5119e6_14341506', 'skip_to_main_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11923775806a5d50eb5133c2_96021841', 'hook_after_body_opening_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4300909436a5d50eb514a78_90783991', 'product_activation');
?>


    <header id="header" class="header js-sticky-header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19824304556a5d50eb5161e9_89090999', 'header');
?>

    </header>

    <main id="wrapper" class="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperTop'),$_smarty_tpl ) );?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1694100866a5d50eb518347_50269016', 'breadcrumb');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11603283816a5d50eb519a77_95285664', 'main_content');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2276094036a5d50eb51aab3_16264710', 'notifications');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15717597646a5d50eb51c143_49643410', 'content_columns');
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperBottom'),$_smarty_tpl ) );?>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15637900656a5d50eb527c88_33342411', 'footer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16034182466a5d50eb5293a9_94947936', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9756457466a5d50eb52b1f3_16437540', 'bottom_elements');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5584191886a5d50eb52d8d8_28364250', 'hook_before_body_closing_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20515519536a5d50eb52f029_85232818', 'modal_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7496786176a5d50eb5336e7_91034417', 'back_to_top');
?>

  </body>
</html>
<?php }
/* {block 'head'} */
class Block_14396970566a5d50eb5065b3_73178701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14396970566a5d50eb5065b3_73178701',
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
class Block_18833773786a5d50eb510758_15132704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_content' => 
  array (
    0 => 'Block_18833773786a5d50eb510758_15132704',
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
class Block_4153315696a5d50eb5119e6_14341506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'skip_to_main_content' => 
  array (
    0 => 'Block_4153315696a5d50eb5119e6_14341506',
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
class Block_11923775806a5d50eb5133c2_96021841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_11923775806a5d50eb5133c2_96021841',
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
class Block_4300909436a5d50eb514a78_90783991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_4300909436a5d50eb514a78_90783991',
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
class Block_19824304556a5d50eb5161e9_89090999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19824304556a5d50eb5161e9_89090999',
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
class Block_1694100866a5d50eb518347_50269016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1694100866a5d50eb518347_50269016',
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
class Block_11603283816a5d50eb519a77_95285664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_11603283816a5d50eb519a77_95285664',
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
class Block_2276094036a5d50eb51aab3_16264710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_2276094036a5d50eb51aab3_16264710',
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
class Block_6880550386a5d50eb51ca78_44503112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_14756711026a5d50eb51d864_45355986 extends Smarty_Internal_Block
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
class Block_12310431826a5d50eb521a66_18280170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_14053526896a5d50eb520f47_23733560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="center-column" class="center-column page col-md-4 col-lg-6">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12310431826a5d50eb521a66_18280170', 'content', $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_11156537936a5d50eb5235c4_18449694 extends Smarty_Internal_Block
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
class Block_15717597646a5d50eb51c143_49643410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_15717597646a5d50eb51c143_49643410',
  ),
  'container_class' => 
  array (
    0 => 'Block_6880550386a5d50eb51ca78_44503112',
  ),
  'left_column' => 
  array (
    0 => 'Block_14756711026a5d50eb51d864_45355986',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_14053526896a5d50eb520f47_23733560',
  ),
  'content' => 
  array (
    0 => 'Block_12310431826a5d50eb521a66_18280170',
  ),
  'right_column' => 
  array (
    0 => 'Block_11156537936a5d50eb5235c4_18449694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6880550386a5d50eb51ca78_44503112', 'container_class', $this->tplIndex);
?>
">
          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14756711026a5d50eb51d864_45355986', 'left_column', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14053526896a5d50eb520f47_23733560', 'content_wrapper', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11156537936a5d50eb5235c4_18449694', 'right_column', $this->tplIndex);
?>

          </div>
        </div>
      <?php
}
}
/* {/block 'content_columns'} */
/* {block 'footer'} */
class Block_15637900656a5d50eb527c88_33342411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15637900656a5d50eb527c88_33342411',
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
class Block_16034182466a5d50eb5293a9_94947936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_16034182466a5d50eb5293a9_94947936',
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
class Block_9756457466a5d50eb52b1f3_16437540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom_elements' => 
  array (
    0 => 'Block_9756457466a5d50eb52b1f3_16437540',
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
class Block_5584191886a5d50eb52d8d8_28364250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_5584191886a5d50eb52d8d8_28364250',
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
class Block_20515519536a5d50eb52f029_85232818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal_container' => 
  array (
    0 => 'Block_20515519536a5d50eb52f029_85232818',
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
class Block_7496786176a5d50eb5336e7_91034417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'back_to_top' => 
  array (
    0 => 'Block_7496786176a5d50eb5336e7_91034417',
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
