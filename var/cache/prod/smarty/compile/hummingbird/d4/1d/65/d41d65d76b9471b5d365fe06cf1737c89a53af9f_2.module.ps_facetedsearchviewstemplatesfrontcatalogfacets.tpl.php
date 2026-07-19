<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:27
  from 'module:ps_facetedsearchviewstemplatesfrontcatalogfacets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50b71cd958_09524744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:ps_facetedsearchviewstemplatesfrontcatalogfacets.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50b71cd958_09524744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'search-filters');?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
  <div id="search-filters" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
" role="region" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8441223306a5d50b7175736_19013765', 'facets_title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20963914896a5d50b7177608_29436757', 'facets_clearall_button');
?>


    <div class="accordion accordion-flush accordion--small">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet', false, NULL, 'facets', array (
));
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
?>
        <section class="accordion-item" data-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['type']), ENT_QUOTES, 'UTF-8');?>
" data-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
">
          <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
          <?php $_smarty_tpl->_assignInScope('_collapse', true);?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <button
            class="accordion-button <?php if ($_smarty_tpl->tpl_vars['_collapse']->value) {?> collapsed<?php }?>"
            type="button"
            data-bs-target="#facet_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
"
            data-bs-toggle="collapse"
            aria-expanded="<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?>true<?php } else { ?>false<?php }?>"
          >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>

          </button>

          <div id="facet_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="accordion-collapse collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> show<?php }?>">
            <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12807211896a5d50b718b936_72948252', 'facet_item_other');
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2543862316a5d50b71b70d3_97506485', 'facet_item_dropdown');
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12404924166a5d50b71c4595_30983333', 'facet_item_slider');
?>

            <?php }?>
          </div>
        </section>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
/* {block 'facets_title'} */
class Block_8441223306a5d50b7175736_19013765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_8441223306a5d50b7175736_19013765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="left-block__title d-none d-md-block">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </p>
    <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facets_clearall_button'} */
class Block_20963914896a5d50b7177608_29436757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_20963914896a5d50b7177608_29436757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__clear">
          <button
            data-search-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['clear_all_link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="btn btn-outline-tertiary js-search-filters-clear-all"
          >
            <i class="material-icons" aria-hidden="true">&#xE5CD;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
class Block_12807211896a5d50b718b936_72948252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_12807211896a5d50b718b936_72948252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="accordion-body">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('isColorOrTexture', ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) || (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))));?>

                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                      <?php continue 1;?>
                    <?php }?>

                    <li>
                      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form-check<?php if ($_smarty_tpl->tpl_vars['isColorOrTexture']->value) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form-check--color<?php }?> form-check">
                            <input
                              class="form-check-input<?php if ($_smarty_tpl->tpl_vars['isColorOrTexture']->value) {?> d-none<?php }?>"
                              id="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                              type="checkbox"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                            >

                            <label
                              class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form-label form-check-label"
                              for="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                              data-ps-ref="color-label"
                            >
                              <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?>
                                <span 
                                  class="color color-sm<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active<?php }?>" 
                                  style="background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['properties']['color']), ENT_QUOTES, 'UTF-8');?>
"
                                  role="checkbox"
                                  aria-checked="<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>true<?php } else { ?>false<?php }?>"
                                  tabindex="0"
                                  aria-labelledby="facet_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                                ></span>

                                <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__color-label" id="facet_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
">
                                  <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                    <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__magnitude">
                                      (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
<span class="visually-hidden"><?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>)
                                    </span>
                                  <?php }?>
                                </span>
                              <?php } elseif ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?>
                                <span
                                  class="color color-sm<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active<?php }?>"
                                  style="background-image:url(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']), ENT_QUOTES, 'UTF-8');?>
)"
                                  role="checkbox"
                                  aria-checked="<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>true<?php } else { ?>false<?php }?>"
                                  tabindex="0"
                                  aria-labelledby="facet_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                                ></span>

                                <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__color-label" id="facet_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
">
                                  <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                    <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__magnitude">
                                      (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
<span class="visually-hidden"><?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>)
                                    </span>
                                  <?php }?>
                                </span>
                              <?php } else { ?>
                                <a
                                  href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                                  class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__link search-link js-search-link"
                                  rel="nofollow"
                                  tabindex="-1"
                                >
                                  <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                    <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__magnitude">
                                      (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
<span class="visually-hidden"><?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>)
                                    </span>
                                  <?php }?>
                                </a>
                              <?php }?>
                            </label>
                          </div>
                        <?php } else { ?>
                          <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form-check form-check">
                            <input
                              class="form-check-input"
                              id="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                              type="radio"
                              name="filter <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                            >

                            <label class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form-label form-check-label" for="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
">
                              <a
                                href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__link search-link js-search-link"
                                rel="nofollow"
                                tabindex="-1"
                              >
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                  <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__magnitude">
                                    (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
<span class="visually-hidden"><?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>)
                                  </span>
                                <?php }?>
                              </a>
                            </label>
                          </div>
                        <?php }?>
                      </div>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_2543862316a5d50b71b70d3_97506485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_2543862316a5d50b71b70d3_97506485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="accordion-body">
                  <li>
                    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item facet-dropdown dropdown">
                      <button class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__dropdown-toggle btn btn-outline-tertiary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php $_smarty_tpl->_assignInScope('active_found', false);?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                              <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__magnitude">
                                (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
<span class="visually-hidden"><?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>)
                              </span>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                          <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(No option selected)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                        <?php }?>
                      </button>

                      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__dropdown-menu dropdown-menu dropdown-menu-start">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                          <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <a
                              rel="nofollow"
                              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                              class="dropdown-item select-list js-search-link"
                            >
                              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__magnitude">
                                  (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
<span class="visually-hidden"><?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>)
                                </span>
                              <?php }?>
                            </a>
                          <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                  </li>
                </ul>
              <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_12404924166a5d50b71c4595_30983333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_12404924166a5d50b71c4595_30983333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__slider-container accordion-body js-faceted-filter-slider">
                    <div
                      class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__slider js-faceted-slider-container"
                      data-slider-min="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['min']), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-max="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['max']), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-values="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] ))), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-unit="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['unit']), ENT_QUOTES, 'UTF-8');?>
"
                      <?php if ((isset($_smarty_tpl->tpl_vars['facet']->value['properties']['specifications']['currencyCode'])) && $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications']['currencyCode'] != '') {?>
                        data-slider-currency="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['specifications']['currencyCode']), ENT_QUOTES, 'UTF-8');?>
"
                      <?php }?>
                      data-slider-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-specifications="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] ))), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-encoded-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                      data-slider-direction="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['is_rtl']), ENT_QUOTES, 'UTF-8');?>
"
                    ></div>

                    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__slider-values js-faceted-values"></div>

                    <input
                      type="hidden"
                      class="form-range-start js-faceted-slider js-faceted-slider-start"
                      id="slider-range_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
-start"
                    >
                    <input
                      type="hidden"
                      class="form-range-start js-faceted-slider js-faceted-slider-end"
                      id="slider-range_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
-end"
                    >
                  </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php
}
}
/* {/block 'facet_item_slider'} */
}
