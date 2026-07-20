<?php
/* Smarty version 4.5.5, created on 2026-07-19 22:03:02
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d73c6859ab2_97340716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63a63c8041892c1a9041333549330f70caaf1eb' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\header.tpl',
      1 => 1784509292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d73c6859ab2_97340716 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13718819316a5d73c6813ab7_51341141', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17514783416a5d73c6816249_25518309', 'header_bottom');
?>

<?php }
/* {block 'header_banner'} */
class Block_13718819316a5d73c6813ab7_51341141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_13718819316a5d73c6813ab7_51341141',
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
class Block_17514783416a5d73c6816249_25518309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_bottom' => 
  array (
    0 => 'Block_17514783416a5d73c6816249_25518309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <header class="moro-header<?php if (!empty($_smarty_tpl->tpl_vars['mega_menu_categories']->value)) {?> moro-header--has-mega-menu<?php }?>" data-ps-ref="moro-header">
    <div class="moro-header__inner">

            <div class="moro-header__top">

                <div class="moro-header__left">
                    <button
            type="button"
            id="moro-search-toggle"
            class="moro-header__icon-btn"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            aria-expanded="false"
          >
            <i class="material-symbols-outlined moro-header__icon" aria-hidden="true">search</i>
            <span class="moro-header__icon-label d-none d-md-inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </button>

                    <button
            type="button"
            class="moro-header__icon-btn moro-header__menu-toggle"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle menu','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            aria-expanded="false"
            aria-controls="mobile-menu"
            data-ps-action="toggle-mobile-drawer"
          >
            <i class="material-symbols-outlined" aria-hidden="true">menu</i>
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

                    <div id="_mobile_ps_customersignin" class="d-md-none d-flex col-auto"></div>
          <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <div id="_mobile_ps_shoppingcart" class="d-md-none d-flex col-auto"></div>
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
            <i class="material-symbols-outlined" aria-hidden="true">favorite</i>
          </a>
        </div>
      </div>

            <div class="moro-header__nav-wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

      </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['mega_menu_categories']->value)) {?>
        <nav class="moro-mega-menu-nav" data-ps-component="moro-mega-menu" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main navigation','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mega_menu_categories']->value, 'cat', false, NULL, 'megaNavLoop', array (
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
            <button
              type="button"
              class="moro-mega-menu-nav__btn"
              data-ps-action="toggle-mega-menu"
              data-ps-data='{"category":"<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"}'
              aria-expanded="false"
              aria-controls="moro-mega-panel-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
">
              <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

            </button>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </nav>
      <?php }?>
    </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['mega_menu_categories']->value)) {?>
      <div id="moro-mega-menu"
           class="moro-mega-menu"
           data-ps-target="mega-menu"
           aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
"
           hidden>

        <div class="moro-mega-menu__grid-inner">

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mega_menu_categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
            <div
              id="moro-mega-panel-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"
              class="moro-mega-menu__panel-content moro-mega-menu--hidden-content"
              data-ps-target="mega-panel"
              data-ps-data='{"category":"<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"}'
              hidden>

              <div class="moro-mega-menu__content">
                                <?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['subs'])) {?>
                  <div class="moro-mega-menu__links">
                    <div class="moro-mega-menu__group">
                      <h3 class="moro-mega-menu__group-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Destacado','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
</h3>
                      <a class="moro-mega-menu__sublink moro-mega-menu__sublink--all" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['url']), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ver todo','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

                      </a>
                    </div>
                    <div class="moro-mega-menu__group">
                      <h3 class="moro-mega-menu__group-title"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</h3>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value['subs'], 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                        <a class="moro-mega-menu__sublink" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['sub']->value['url']), ENT_QUOTES, 'UTF-8');?>
">
                          <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

                        </a>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['mega_menu_media']->value[$_smarty_tpl->tpl_vars['cat']->value['id_category']])) {?>
                  <div class="moro-mega-menu__media">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mega_menu_media']->value[$_smarty_tpl->tpl_vars['cat']->value['id_category']], 'media');
$_smarty_tpl->tpl_vars['media']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->do_else = false;
?>
                      <a class="moro-mega-menu__card" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['media']->value['url']), ENT_QUOTES, 'UTF-8');?>
">
                        <div class="moro-mega-menu__image-wrap">
                          <img class="moro-mega-menu__image"
                               src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['media']->value['image']), ENT_QUOTES, 'UTF-8');?>
"
                               alt="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['media']->value['label'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"
                               loading="lazy" />
                        </div>
                        <p class="moro-mega-menu__card-label"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['media']->value['label'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</p>
                      </a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                <?php }?>
              </div>

            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>

      </div>
    <?php }?>

        <div id="moro-search-dialog"
         class="moro-search-dialog"
         role="dialog"
         aria-modal="true"
         aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
         data-ps-component="search-dialog">

      <div class="moro-search-dialog__grid-inner">

        <div class="moro-search-dialog__bar-content moro-search-dialog--hidden-content"
             id="moro-search-dialog-inner">

          <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['search']), ENT_QUOTES, 'UTF-8');?>
"
                method="get"
                class="moro-search-dialog__input-group"
                role="search">
            <i class="material-symbols-outlined moro-search-dialog__search-icon" aria-hidden="true">search</i>
            <input type="search"
                   name="s"
                   id="moro-search-dialog-input"
                   class="moro-search-dialog__input"
                   aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for...','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                   autocomplete="off" />
          </form>

          <button type="button"
                  id="moro-search-dialog-close"
                  class="moro-search-dialog__close"
                  aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                  data-ps-action="close-search-dialog">
              <i class="material-symbols-outlined" aria-hidden="true">close</i>
          </button>

        </div>

      </div>

    </div>
  </header>

    <?php if (!empty($_smarty_tpl->tpl_vars['mega_menu_categories']->value)) {?>
    <div class="moro-mobile-drawer__overlay"
         data-ps-action="close-mobile-drawer"
         aria-hidden="true">
    </div>

    <aside id="mobile-menu"
           class="moro-mobile-drawer"
           role="dialog"
           aria-modal="true"
           aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
"
           data-ps-component="mobile-menu"
           aria-hidden="true"
           hidden>

      <div class="moro-mobile-drawer__header">
        <button type="button"
                class="moro-mobile-drawer__close"
                data-ps-action="close-mobile-drawer"
                aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close menu','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
          <i class="material-symbols-outlined" aria-hidden="true">close</i>
        </button>
      </div>

      <div class="moro-mobile-drawer__panels">

                <div class="moro-mobile-drawer__main"
             data-ps-target="mobile-main">
          <ul class="moro-mobile-drawer__list" role="list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mega_menu_categories']->value, 'cat', false, NULL, 'moroDrawerLoop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_moroDrawerLoop']->value['index']++;
?>
              <li class="moro-mobile-drawer__item"
                  style="--moro-stagger: <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_moroDrawerLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_moroDrawerLoop']->value['index'] : null)*60), ENT_QUOTES, 'UTF-8');?>
ms;">
                <?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['subs']) || !empty($_smarty_tpl->tpl_vars['mega_menu_media']->value[$_smarty_tpl->tpl_vars['cat']->value['id_category']])) {?>
                  <button type="button"
                          class="moro-mobile-drawer__link"
                          data-ps-action="open-mobile-subpanel"
                          data-ps-data='{"category":"<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"}'>
                    <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                    <i class="material-symbols-outlined" aria-hidden="true">chevron_right</i>
                  </button>
                <?php } else { ?>
                  <a class="moro-mobile-drawer__link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cat']->value['url']), ENT_QUOTES, 'UTF-8');?>
">
                    <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                  </a>
                <?php }?>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>

                <div class="moro-mobile-drawer__sub"
             data-ps-target="mobile-sub"
             aria-hidden="true"
             hidden>
          <button type="button"
                  class="moro-mobile-drawer__back"
                  data-ps-action="close-mobile-subpanel">
            <i class="material-symbols-outlined" aria-hidden="true">chevron_left</i>
            <span data-ps-ref="mobile-sub-title"></span>
          </button>
          <div class="moro-mobile-drawer__sub-content"
               data-ps-target="mobile-sub-content">
          </div>
        </div>

      </div>

    </aside>
  <?php }?>

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
