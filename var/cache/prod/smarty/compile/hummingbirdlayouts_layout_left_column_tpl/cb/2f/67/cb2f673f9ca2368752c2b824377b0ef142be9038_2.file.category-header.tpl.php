<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:33:37
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\catalog\_partials\category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50c18642e3_41725702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb2f673f9ca2368752c2b824377b0ef142be9038' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\catalog\\_partials\\category-header.tpl',
      1 => 1784413149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/page-title-section.tpl' => 1,
    'file:catalog/_partials/subcategories.tpl' => 1,
  ),
),false)) {
function content_6a5d50c18642e3_41725702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div id="js-product-list-header">
  <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
    <div class="category__header">
      <?php $_smarty_tpl->_subTemplateRender('file:components/page-title-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['category']->value['name']), 0, false);
?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
        <div class="category__description rich-text"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['url'])) {?>
        <div class="category__cover">
          <picture>
            <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['sources']['avif']))) {?>
              <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
" type="image/avif">
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['sources']['webp']))) {?>
              <source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
" type="image/webp">
            <?php }?>

            <img
              class="category__cover-image img-fluid"
              src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['url']), ENT_QUOTES, 'UTF-8');?>
"
              width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['width']), ENT_QUOTES, 'UTF-8');?>
"
              height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['bySize']['category_cover']['height']), ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['cover']['legend'])) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');
}?>"
              fetchpriority="high"
            >
          </picture>
        </div>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, false);
?>
      <?php }?>
    </div>
  <?php }?>
</div>
<?php }
}
