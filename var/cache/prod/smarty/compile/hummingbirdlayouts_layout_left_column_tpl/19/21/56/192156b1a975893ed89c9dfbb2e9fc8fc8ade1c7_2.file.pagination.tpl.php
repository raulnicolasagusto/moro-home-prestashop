<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:40
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c4e34ce8_14927947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '192156b1a975893ed89c9dfbb2e9fc8fc8ade1c7' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\pagination.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c4e34ce8_14927947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'pagination');?>

<nav class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__container">
  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__number">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9191714826a5d50c4e20624_47592550', 'pagination_summary');
?>

  </div>

  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__nav">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4675784476a5d50c4e22f50_32369677', 'pagination_page_list');
?>

  </div>
</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_9191714826a5d50c4e20624_47592550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_9191714826a5d50c4e20624_47592550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_4675784476a5d50c4e22f50_32369677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_4675784476a5d50c4e22f50_32369677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <nav aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products pagination','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
          <ul class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page', false, NULL, 'paginationLoop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['page']->iteration = 0;
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
$_smarty_tpl->tpl_vars['page']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_paginationLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_paginationLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_paginationLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_paginationLoop']->value['total'];
$__foreach_page_41_saved = $_smarty_tpl->tpl_vars['page'];
?>
              <?php if ($_smarty_tpl->tpl_vars['page']->iteration === 1) {?>
                <li class="page-item">
                  <button data-ps-data="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
                    class="page-link previous <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-pager-link'=>$_smarty_tpl->tpl_vars['page']->value['clickable']) ))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['page']->value['clickable']) {?>aria-disabled="true" disabled<?php }?>
                    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to previous page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                  >
                    <i class="material-icons rtl-flip" aria-hidden="true">&#xE314;</i>
                    <span class="d-none d-xl-flex"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                  </button>
                </li>
                
                <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                  <?php continue 1;?>
                <?php }?>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                <li class="page-item disabled">
                  <span class="page-link" aria-hidden="true">&hellip;</span>
                </li>
              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] != "prev" && $_smarty_tpl->tpl_vars['page']->value['type'] != "next") {?>
                <li class="page-item<?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> active<?php }?>">
                  <button data-ps-data="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
                    class="page-link <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-pager-link'=>$_smarty_tpl->tpl_vars['page']->value['clickable']) ))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['page']->value['clickable']) {?>aria-disabled="true"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?>aria-current="page"<?php }?>
                    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to page %page%','sprintf'=>array('%page%'=>$_smarty_tpl->tpl_vars['page']->value['page']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                  >
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page']), ENT_QUOTES, 'UTF-8');?>

                  </button>
                </li>
              <?php }?>

              <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_paginationLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_paginationLoop']->value['last'] : null)) {?>
                <li class="page-item">
                  <button data-ps-data="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
                    class="page-link next <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-pager-link'=>$_smarty_tpl->tpl_vars['page']->value['clickable']) ))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['page']->value['clickable']) {?>aria-disabled="true" disabled<?php }?>
                    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to next page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                  >
                    <span class="d-none d-xl-flex"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    <i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
                  </button>
                </li>
              <?php }?>
            <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_41_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php }?>
      </nav>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
