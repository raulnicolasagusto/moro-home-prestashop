<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:41
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c54e73a8_16858583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6efda28e013db70d1a86b967ec591e74463bace0' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50c54e73a8_16858583 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
  <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
    <div class="category__footer">
      <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['additional_description']) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="category__additional-description rich-text">
          <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

        </div>
      <?php }?>
    </div>
  <?php }?>
</div>
<?php }
}
