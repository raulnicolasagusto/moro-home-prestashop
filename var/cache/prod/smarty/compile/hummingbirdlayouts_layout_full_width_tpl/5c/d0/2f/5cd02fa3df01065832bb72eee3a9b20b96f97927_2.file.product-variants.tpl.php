<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:19
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\product-variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1fffdc6212_18539363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd02fa3df01065832bb72eee3a9b20b96f97927' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\product-variants.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1fffdc6212_18539363 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['groups']->value)) && $_smarty_tpl->tpl_vars['groups']->value) {?>
  <div class="product__variants js-product-variants">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
      <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
        <?php $_smarty_tpl->_assignInScope('groupId', "group_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>
        <?php $_smarty_tpl->_assignInScope('inputId', "input_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>
        <?php $_smarty_tpl->_assignInScope('legendId', "legend_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>

        <fieldset class="product-variant">
          <div class="product-variant__label">
            <legend class="form-label product-variant__legend" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['legendId']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['name']), ENT_QUOTES, 'UTF-8');?>
</legend>
            <span class="selected-value product-variant__selected" aria-hidden="true">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>': ','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');
}?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
            <select
              class="form-select"
              id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['inputId']->value), ENT_QUOTES, 'UTF-8');?>
"
              aria-labelledby="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['legendId']->value), ENT_QUOTES, 'UTF-8');?>
"
              data-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
"
              name="group[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
]">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
            <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['groupId']->value), ENT_QUOTES, 'UTF-8');?>
" class="product-variant__colors" role="radiogroup" aria-labelledby="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['legendId']->value), ENT_QUOTES, 'UTF-8');?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('inputId', "input_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['id_attribute']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>
                <?php $_smarty_tpl->_assignInScope('labelId', "label_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['id_attribute']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>

                <div class="product-variant__color input-color">
                  <input 
                    class="input-color__input"
                    type="radio"
                    id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['inputId']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
"
                    name="group[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
]"
                    value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute']->value), ENT_QUOTES, 'UTF-8');?>
"
                    aria-labelledby="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['labelId']->value), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked" aria-checked="true"<?php }?>
                  >
                  <label
                    class="input-color__label<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?> input-color__label--texture<?php }
if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> input-color__label--active<?php }?>"
                    for="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['inputId']->value), ENT_QUOTES, 'UTF-8');?>
"
                  >
                    <span id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['labelId']->value), ENT_QUOTES, 'UTF-8');?>
"
                      <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>
                        class="color texture <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?>active<?php }?>" style="background-image: url(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']), ENT_QUOTES, 'UTF-8');?>
)"
                      <?php } elseif ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>
                        class="color <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?>active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']), ENT_QUOTES, 'UTF-8');?>
"
                      <?php }?>
                    >
                      <span class="visually-hidden"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['group_name']), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                    </span>
                  </label>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
            <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['groupId']->value), ENT_QUOTES, 'UTF-8');?>
" class="product-variant__radios" role="radiogroup" aria-labelledby="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['legendId']->value), ENT_QUOTES, 'UTF-8');?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('inputId', "input_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['id_attribute']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>
                <?php $_smarty_tpl->_assignInScope('labelId', "label_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value)."_".((string)$_smarty_tpl->tpl_vars['id_attribute']->value)."_".((string)$_smarty_tpl->tpl_vars['product']->value['id']));?>

                <div class="product-variant__radio form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['inputId']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
"
                    name="group[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
]"
                    value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute']->value), ENT_QUOTES, 'UTF-8');?>
"
                    aria-labelledby="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['labelId']->value), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked" aria-checked="true"<?php }?>
                  >
                  <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['inputId']->value), ENT_QUOTES, 'UTF-8');?>
">
                    <span class="form-check-label" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['labelId']->value), ENT_QUOTES, 'UTF-8');?>
"><span class="visually-hidden"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['group_name']), ENT_QUOTES, 'UTF-8');?>
 - </span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                  </label>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php }?>
        </fieldset>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
}
}
