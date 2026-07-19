<?php
/* Smarty version 4.5.5, created on 2026-07-19 13:14:36
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5cf7ec0e5d67_71985774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1784413140,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5cf7ec0e5d67_71985774 (Smarty_Internal_Template $_smarty_tpl) {
?><section
  class="ps-contactinfo footer-block col-md-6 col-lg-3"
  aria-labelledby="footer_contactinfo_title"
>
  <p
    id="footer_contactinfo_title"
    class="footer-block__title footer-block__title--toggle"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <button
      class="stretched-link collapsed d-md-none"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#footer_contactinfo"
      aria-expanded="false"
      aria-controls="footer_contactinfo"
    >
      <span class="visually-hidden">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </span>
      <i class="material-icons" aria-hidden="true">&#xE313;</i>
    </button>
  </p>

  <div class="footer-block__content collapse" id="footer_contactinfo">

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted']) {?>
      <address class="ps-contactinfo__infos">
        <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

      </address>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <div class="ps-contactinfo__phone">
        <i class="material-icons" aria-hidden="true">&#xE0CD;</i>
        <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>
"
           aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us at: %phone%','sprintf'=>array('%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>

        </a>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <div class="ps-contactinfo__fax">
        <i class="material-icons" aria-hidden="true">&#xE8AD;</i>
        <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']), ENT_QUOTES, 'UTF-8');?>
"
           aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send us a fax to: %fax%','sprintf'=>array('%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']), ENT_QUOTES, 'UTF-8');?>

        </a>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
      <div class="ps-contactinfo__email">
        <i class="material-icons" aria-hidden="true">&#xE158;</i>
        <a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>
"
           aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send us an email to: %email%','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>

        </a>
      </div>
    <?php }?>

  </div>
</section>
<?php }
}
