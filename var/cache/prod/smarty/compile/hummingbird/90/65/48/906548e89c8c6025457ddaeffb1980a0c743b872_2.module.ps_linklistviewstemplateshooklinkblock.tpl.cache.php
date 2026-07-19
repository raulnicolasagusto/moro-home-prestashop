<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:35
  from 'module:ps_linklistviewstemplateshooklinkblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e2f48f4b4_46863421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklistviewstemplateshooklinkblock.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e2f48f4b4_46863421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20069284726a5c1e2f481129_10604810';
if (!empty($_smarty_tpl->tpl_vars['linkBlocks']->value)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
    <nav
      class="ps-linklist footer-block col-md-6 col-lg-3"
      role="navigation"
      aria-labelledby="footer_title_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
    >
      <p
        id="footer_title_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
        class="footer-block__title footer-block__title--toggle"
      >
        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['title']), ENT_QUOTES, 'UTF-8');?>

        <button
          class="stretched-link collapsed d-md-none"
          type="button"
          aria-expanded="false"
          aria-controls="footer_linklist_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
          data-bs-target="#footer_linklist_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
          data-bs-toggle="collapse"
        >
          <span class="visually-hidden">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle %s links','sprintf'=>array(mb_strtolower((string) $_smarty_tpl->tpl_vars['linkBlock']->value['title'], 'UTF-8')),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </span>
          <i class="material-icons" aria-hidden="true">&#xE313;</i>
        </button>
      </p>

      <div class="footer-block__content collapse" id="footer_linklist_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
">
        <ul class="footer-block__list">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
            <li>
              <a
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['id']), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['class']), ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['target']), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['description'])) {?> aria-describedby="desc-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['id']), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
              >
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['title']), ENT_QUOTES, 'UTF-8');?>

              </a>
              <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['description'])) {?>
                <span id="desc-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['id']), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
" class="visually-hidden">
                  <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['description']), ENT_QUOTES, 'UTF-8');?>

                </span>
              <?php }?>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    </nav>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
