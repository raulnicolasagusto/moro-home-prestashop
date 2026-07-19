<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:37
  from 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c101c071_83877958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl',
      1 => 1784500373,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c101c071_83877958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'C:\\xampp-8-2\\htdocs\\more-home\\var\\cache\\prod\\smarty\\compile\\hummingbird\\89\\21\\00\\8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.ps_categorytreeviewstemplateshookps_categorytree.tpl.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_20232425036a5d50c1003751_80834519',
  ),
));
$_smarty_tpl->_assignInScope('componentName', 'category-tree');?>



<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value['children'])) {?>
  <div class="ps-categorytree <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
 left-block">
    <p class="left-block__title">
      <a class="left-block__title-link" href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
">
        <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value['name'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

      </a>
    </p>

    <div class="accordion accordion-flush accordion--category">
      <nav aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value['children'])) {?>
          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__child">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>

          </div>
        <?php }?>
      </nav>
    </div>
  </div>
<?php }
}
/* smarty_template_function_categories_20232425036a5d50c1003751_80834519 */
if (!function_exists('smarty_template_function_categories_20232425036a5d50c1003751_80834519')) {
function smarty_template_function_categories_20232425036a5d50c1003751_80834519(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__list" data-depth="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['depth']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node', false, NULL, 'categories', array (
));
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?><li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item <?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?>accordion-item<?php }?>"><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item-header nosplit <?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?> split parent<?php }?>"><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item-link" href="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['link'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category-tree-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"aria-expanded="false"aria-controls="category-tree-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle subcategories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"></button><?php }?></div><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="accordion-collapse collapse" id="category-tree-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"><div class="accordion-body"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div></div><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_categories_20232425036a5d50c1003751_80834519 */
}
