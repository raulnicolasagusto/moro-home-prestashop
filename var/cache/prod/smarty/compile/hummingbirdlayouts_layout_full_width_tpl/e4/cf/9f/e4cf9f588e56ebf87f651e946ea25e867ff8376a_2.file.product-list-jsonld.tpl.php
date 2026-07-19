<?php
/* Smarty version 4.5.5, created on 2026-07-19 13:16:22
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\microdata\product-list-jsonld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5cf85614beb8_76797494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4cf9f588e56ebf87f651e946ea25e867ff8376a' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\microdata\\product-list-jsonld.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5cf85614beb8_76797494 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'item', false, NULL, 'productsForJsonLd', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['total'];
?>
      {
        "@type": "ListItem",
        "position": <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');?>
,
        "name": "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['name']), ENT_QUOTES, 'UTF-8');?>
",
        "url": "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
      }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last'] : null)) {?>,<?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    ]
  }
<?php echo '</script'; ?>
>
<?php }
}
