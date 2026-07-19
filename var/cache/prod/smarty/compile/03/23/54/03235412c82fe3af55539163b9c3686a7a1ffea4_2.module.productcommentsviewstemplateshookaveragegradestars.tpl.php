<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:23
  from 'module:productcommentsviewstemplateshookaveragegradestars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2003d800c0_79049800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstemplateshookaveragegradestars.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c2003d800c0_79049800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note" data-ps-ref="comments-note">
    <div class="grade-stars" data-ps-ref="grade-stars" data-grade="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['grade']->value), ENT_QUOTES, 'UTF-8');?>
"></div>
    <?php if ((isset($_smarty_tpl->tpl_vars['showNbComments']->value)) && $_smarty_tpl->tpl_vars['showNbComments']->value) {?>
      <div class="comments-number" data-ps-ref="comments-number">(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['nb_comments']->value), ENT_QUOTES, 'UTF-8');?>
)</div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['showGradeAverage']->value)) && $_smarty_tpl->tpl_vars['showGradeAverage']->value) {?>
      <div class="average-grade" data-ps-ref="average-grade">(<?php echo htmlspecialchars((string) (smarty_modifier_number_format($_smarty_tpl->tpl_vars['grade']->value,1)), ENT_QUOTES, 'UTF-8');?>
)</div>
    <?php }?>
  </div>
<?php }
}
}
