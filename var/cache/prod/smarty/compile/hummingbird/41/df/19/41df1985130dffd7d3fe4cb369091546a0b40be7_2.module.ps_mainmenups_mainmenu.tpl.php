<?php
/* Smarty version 4.5.5, created on 2026-07-19 13:14:33
  from 'module:ps_mainmenups_mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5cf7e9946576_38254373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenups_mainmenu.tpl',
      1 => 1784413142,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5cf7e9946576_38254373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'generateLinks' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_generateLinks_7812252626a5cf7e98d0e54_18443713',
  ),
  'desktopSubMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_desktopSubMenu_7812252626a5cf7e98d0e54_18443713',
  ),
  'desktopFirstLevel' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_desktopFirstLevel_7812252626a5cf7e98d0e54_18443713',
  ),
  'desktopMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_desktopMenu_7812252626a5cf7e98d0e54_18443713',
  ),
  'mobileMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_mobileMenu_7812252626a5cf7e98d0e54_18443713',
  ),
));
?>









<div class="ps-mainmenu ps-mainmenu--desktop col-xl col-auto">
    <nav class="ps-mainmenu__desktop d-none d-xl-block position-static js-menu-desktop" data-ps-ref="desktop-menu-container" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main navigation','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'desktopMenu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

  </nav>

    <div class="ps-mainmenu__mobile-toggle">
    <button
      class="menu-toggle btn btn-link"
      data-bs-toggle="offcanvas"
      data-bs-target="#mobileMenu"
      aria-controls="mobileMenu"
      aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open mobile menu','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
"
    >
      <span class="material-icons" aria-hidden="true">&#xE5D2;</span>
    </button>
  </div>
</div>

<div
  class="ps-mainmenu ps-mainmenu--mobile offcanvas offcanvas-start js-menu-canvas"
  tabindex="-1"
  id="mobileMenu"
  aria-labelledby="mobileMenuLabel"
>
  <div class="offcanvas-header">
    <div class="ps-mainmenu__back-button">
      <button class="btn btn-link btn-sm d-none js-back-button" type="button" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go back to main menu','d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
">
        <span class="material-icons rtl-flip" aria-hidden="true">&#xE5CB;</span>
        <span class="js-menu-back-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      </button>
    </div>
    <button type="button" class="btn-close btn text-reset" data-bs-dismiss="offcanvas" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"></button>
  </div>

  <div class="ps-mainmenu__mobile">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobileMenu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

  </div>

  <div class="ps-mainmenu__additionnals offcanvas-body d-flex flex-wrap align-items-center gap-3">
    <div class="ps-mainmenu__selects d-flex gap-2 me-auto">
      <div id="_mobile_ps_currencyselector" class="col-auto"></div>
      <div id="_mobile_ps_languageselector" class="col-auto"></div>
    </div>
    <div id="_mobile_ps_contactinfo"></div>
  </div>
</div>
<?php }
/* smarty_template_function_generateLinks_7812252626a5cf7e98d0e54_18443713 */
if (!function_exists('smarty_template_function_generateLinks_7812252626a5cf7e98d0e54_18443713')) {
function smarty_template_function_generateLinks_7812252626a5cf7e98d0e54_18443713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('links'=>array(),'class'=>"menu-item",'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if ($_smarty_tpl->tpl_vars['parent']->value['depth'] === 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['link']->value['depth'] === 3) {?>
        <ul class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['class']->value), ENT_QUOTES, 'UTF-8');?>
__group--<?php echo htmlspecialchars((string) (smarty_modifier_count($_smarty_tpl->tpl_vars['link']->value['children']) ? 'child' : 'nochild'), ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
      <li>
        <a
          class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['class']->value), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['link']->value['depth'] === 3) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['class']->value), ENT_QUOTES, 'UTF-8');?>
__group-main-item<?php }?>"
          href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
          data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['depth']), ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['link']->value['open_in_new_window']) {?>target="_blank"<?php }?>
        >
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['label']), ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
      
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'generateLinks', array('links'=>$_smarty_tpl->tpl_vars['link']->value['children'],'parent'=>$_smarty_tpl->tpl_vars['parent']->value), true);?>


      <?php if ($_smarty_tpl->tpl_vars['link']->value['depth'] === 3) {?>
        </ul>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}}
/*/ smarty_template_function_generateLinks_7812252626a5cf7e98d0e54_18443713 */
/* smarty_template_function_desktopSubMenu_7812252626a5cf7e98d0e54_18443713 */
if (!function_exists('smarty_template_function_desktopSubMenu_7812252626a5cf7e98d0e54_18443713')) {
function smarty_template_function_desktopSubMenu_7812252626a5cf7e98d0e54_18443713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?>
      <div class="js-sub-menu submenu" role="menu" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s submenu','sprintf'=>array($_smarty_tpl->tpl_vars['parent']->value['label']),'d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
" id="submenu-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['parent']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
" data-ps-ref="desktop-submenu">
        <div class="container">
          <div class="submenu__row row gx-5">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?>
      <div class="submenu__left col-sm-3" role="tablist" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s submenu tabs','sprintf'=>array($_smarty_tpl->tpl_vars['parent']->value['label']),'d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
" data-ps-ref="desktop-submenu-left">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
          <a
            class="submenu__left-item"
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
            data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['depth']), ENT_QUOTES, 'UTF-8');?>
"
            aria-selected="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_node']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_node']->value['first'] : null)) {?>true<?php } else { ?>false<?php }?>"
            tabindex="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_node']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_node']->value['first'] : null)) {?>0<?php } else { ?>-1<?php }?>"
            data-ps-ref="desktop-submenu-left-item"
            data-ps-has-child="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>true<?php } else { ?>false<?php }?>"
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
            role="tab"
            id="tab_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( mb_strtolower((string) $_smarty_tpl->tpl_vars['node']->value['label'], 'UTF-8') ))), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['depth']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
            data-open-tab="submenu_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( mb_strtolower((string) $_smarty_tpl->tpl_vars['node']->value['label'], 'UTF-8') ))), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['depth']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
            aria-controls="submenu_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( mb_strtolower((string) $_smarty_tpl->tpl_vars['node']->value['label'], 'UTF-8') ))), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['depth']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?>target="_blank" rel="noopener noreferrer"<?php }?>
          >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['label']), ENT_QUOTES, 'UTF-8');?>

          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?>
      <div class="submenu__right col-sm-9" data-ps-ref="desktop-submenu-right">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
          <div 
            class="submenu__right-items" 
            role="tabpanel"
            data-ps-ref="desktop-submenu-right-items"
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
              id="submenu_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( mb_strtolower((string) $_smarty_tpl->tpl_vars['node']->value['label'], 'UTF-8') ))), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['depth']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
              aria-labelledby="tab_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( mb_strtolower((string) $_smarty_tpl->tpl_vars['node']->value['label'], 'UTF-8') ))), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['depth']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
          >
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'generateLinks', array('links'=>$_smarty_tpl->tpl_vars['node']->value['children'],'parent'=>$_smarty_tpl->tpl_vars['parent']->value), true);?>

          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'desktopSubMenu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?>
          </div>
        </div>
      </div>
    <?php }?>
  <?php }
}}
/*/ smarty_template_function_desktopSubMenu_7812252626a5cf7e98d0e54_18443713 */
/* smarty_template_function_desktopFirstLevel_7812252626a5cf7e98d0e54_18443713 */
if (!function_exists('smarty_template_function_desktopFirstLevel_7812252626a5cf7e98d0e54_18443713')) {
function smarty_template_function_desktopFirstLevel_7812252626a5cf7e98d0e54_18443713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('itemsFirstLevel'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['itemsFirstLevel']->value)) {?>
    <ul class="ps-mainmenu__tree" id="top-menu" data-ps-ref="desktop-menu-tree">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemsFirstLevel']->value, 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
        <li class="ps-mainmenu__tree-item type-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menuItem']->value['type']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['current']) {?> current<?php }?>" data-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menuItem']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
" data-ps-ref="desktop-menu-item">
          <div class="ps-mainmenu__tree-item-wrapper">
            <a
              class="ps-mainmenu__tree-link"
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menuItem']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
              data-depth="1"
              data-ps-ref="desktop-menu-link"
              <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['current']) {?>aria-current="page"<?php }?>
              <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['open_in_new_window']) {?>target="_blank" rel="noopener noreferrer"<?php }?>
            >
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menuItem']->value['label']), ENT_QUOTES, 'UTF-8');?>

            </a>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['menuItem']->value['children'])) {?>
              <button
                class="ps-mainmenu__tree-dropdown-toggle dropdown-toggle"
                type="button"
                aria-haspopup="menu"
                aria-expanded="false"
                aria-controls="submenu-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menuItem']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
                aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open %s submenu','sprintf'=>array($_smarty_tpl->tpl_vars['menuItem']->value['label']),'d'=>'Shop.Theme.Menu'),$_smarty_tpl ) );?>
"
                data-ps-ref="desktop-menu-dropdown-toggle"
              ></button>
            <?php }?>
          </div>

          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'desktopSubMenu', array('nodes'=>$_smarty_tpl->tpl_vars['menuItem']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['menuItem']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['menuItem']->value), true);?>

        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }
}}
/*/ smarty_template_function_desktopFirstLevel_7812252626a5cf7e98d0e54_18443713 */
/* smarty_template_function_desktopMenu_7812252626a5cf7e98d0e54_18443713 */
if (!function_exists('smarty_template_function_desktopMenu_7812252626a5cf7e98d0e54_18443713')) {
function smarty_template_function_desktopMenu_7812252626a5cf7e98d0e54_18443713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'desktopFirstLevel', array('itemsFirstLevel'=>$_smarty_tpl->tpl_vars['nodes']->value), true);?>

<?php
}}
/*/ smarty_template_function_desktopMenu_7812252626a5cf7e98d0e54_18443713 */
/* smarty_template_function_mobileMenu_7812252626a5cf7e98d0e54_18443713 */
if (!function_exists('smarty_template_function_mobileMenu_7812252626a5cf7e98d0e54_18443713')) {
function smarty_template_function_mobileMenu_7812252626a5cf7e98d0e54_18443713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php $_smarty_tpl->_assignInScope('children', array());?>
  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
    <nav
      class="menu menu--mobile<?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> menu--current js-menu-current<?php } else { ?> menu--child js-menu-child<?php }?>"
      <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>id="menu-mobile"<?php } else { ?>data-parent-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['parent']->value['label']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['depth']->value > 1) {?>data-back-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['backTitle']->value), ENT_QUOTES, 'UTF-8');?>
" data-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['expandId']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
      data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['depth']->value), ENT_QUOTES, 'UTF-8');?>
"
    >
      <ul class="menu__list">
        <?php if ($_smarty_tpl->tpl_vars['depth']->value >= 1) {?>
          <li class="menu__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['parent']->value['label']), ENT_QUOTES, 'UTF-8');?>
</li>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
          <li
            class="type-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['type']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current<?php }?> <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?> menu--childrens<?php }?>"
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['page_identifier']), ENT_QUOTES, 'UTF-8');?>
"
          >
            <a
              class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>menu__link<?php }?>"
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
              data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['depth']->value), ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?>target="_blank"<?php }?>
            >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['label']), ENT_QUOTES, 'UTF-8');?>

            </a>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                            <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
              <button class="menu__toggle-child btn btn-link js-menu-open-child" data-target="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
">
                <i class="material-icons rtl-flip" aria-hidden="true">&#xE5CC;</i>
              </button>
            <?php }?>
          </li>
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['node']) ? $_smarty_tpl->tpl_vars['node']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['parent'] = $_smarty_tpl->tpl_vars['node']->value;
$_smarty_tpl->_assignInScope('node', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['node']) ? $_smarty_tpl->tpl_vars['node']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['expandId'] = $_smarty_tpl->tpl_vars['_expand_id']->value;
$_smarty_tpl->_assignInScope('node', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['children']) ? $_smarty_tpl->tpl_vars['children']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['node']->value;
$_smarty_tpl->_assignInScope('children', $_tmp_array);?>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </nav>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobileMenu', array('nodes'=>$_smarty_tpl->tpl_vars['child']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['child']->value['children'][0]['depth'],'parent'=>$_smarty_tpl->tpl_vars['child']->value,'backTitle'=>$_smarty_tpl->tpl_vars['child']->value['parent']['label'],'expandId'=>$_smarty_tpl->tpl_vars['child']->value['expandId']), true);?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}}
/*/ smarty_template_function_mobileMenu_7812252626a5cf7e98d0e54_18443713 */
}
