<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:23
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\modules\blockreassurance\views\templates\hook\displayBlockProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2003557813_86176449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d0274511a5972f1267492d17a9a58d3681c430f' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\modules\\blockreassurance\\views\\templates\\hook\\displayBlockProduct.tpl',
      1 => 1784413142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c2003557813_86176449 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['blocks']->value)) && !empty($_smarty_tpl->tpl_vars['blocks']->value)) {?>
  <div class="blockreassurance blockreassurance--<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page_name']), ENT_QUOTES, 'UTF-8');?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'key');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['block']->value['type_link'] !== $_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value && !empty($_smarty_tpl->tpl_vars['block']->value['link'])) {?>
        <a class="reassurance reassurance--link" href="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['link'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
      <?php } else { ?>
        <div class="reassurance">
      <?php }?>

        <span class="reassurance__image">
          <?php if ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
            <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg img-fluid invisible" <?php }?>src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['block']->value['custom_icon']), ENT_QUOTES, 'UTF-8');?>
">
          <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
            <img class="svg img-fluid invisible" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['block']->value['icon']), ENT_QUOTES, 'UTF-8');?>
">
          <?php }?>
        </span>

        <span class="reassurance__content">
          <span class="reassurance__title"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['title'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
          <?php if (!empty($_smarty_tpl->tpl_vars['block']->value['description'])) {?>
            <br/>
            <small class="reassurance__desc"><?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>
</small>
          <?php }?>
        </span>

      <?php if (!empty($_smarty_tpl->tpl_vars['block']->value['link']) && $_smarty_tpl->tpl_vars['block']->value['type_link'] !== $_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value) {?>
        </a>
      <?php } else { ?>
        </div>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
}
}
