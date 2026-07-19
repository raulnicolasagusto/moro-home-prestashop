<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:27
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e275952a6_09915657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1784413142,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e275952a6_09915657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17603143726a5c1e27591690_07371843';
if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
  <section class="ps-banner">
    <div class="container">
      <a class="banner d-block text-center" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
">
        <img 
          src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_img']->value), ENT_QUOTES, 'UTF-8');?>
"
          alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
          class="img-fluid"
          loading="lazy"
          <?php if (!empty($_smarty_tpl->tpl_vars['banner_width']->value)) {?>
            width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_width']->value), ENT_QUOTES, 'UTF-8');?>
"
          <?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['banner_height']->value)) {?>
            height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_height']->value), ENT_QUOTES, 'UTF-8');?>
"
          <?php }?>
        >
      </a>
    </div>
  </section>
<?php }
}
}
