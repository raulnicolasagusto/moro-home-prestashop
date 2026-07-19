<?php
/* Smarty version 4.5.5, created on 2026-07-19 19:34:22
  from 'C:\xampp-8-2\htdocs\more-home\themes\hummingbird\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5d50eec442b8_32637130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '115b83a1b979b1ca7f4f0ad80c30806e288d0fe9' => 
    array (
      0 => 'C:\\xampp-8-2\\htdocs\\more-home\\themes\\hummingbird\\templates\\_partials\\notifications.tpl',
      1 => 1784413150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5d50eec442b8_32637130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
<div id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17540224476a5d50eec33931_64756977', 'notifications_error');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6539133256a5d50eec39019_73017209', 'notifications_warning');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12839522486a5d50eec3ced7_20860981', 'notifications_success');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4218146216a5d50eec40ac5_36016366', 'notifications_info');
?>

    <?php }?>
  </div>
</div>
<?php }
}
/* {block 'notifications_error'} */
class Block_17540224476a5d50eec33931_64756977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_17540224476a5d50eec33931_64756977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <div class="alert alert-danger alert-dismissible" role="alert" tabindex="0">
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['notifications']->value['error']) > 1) {?>
            <ul class="mb-0">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['notifications']->value['error'][0];?>

          <?php }?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_6539133256a5d50eec39019_73017209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_6539133256a5d50eec39019_73017209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <div class="alert alert-warning alert-dismissible" role="alert" tabindex="0">
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['notifications']->value['warning']) > 1) {?>
            <ul class="mb-0">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['notifications']->value['warning'][0];?>

          <?php }?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_12839522486a5d50eec3ced7_20860981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_12839522486a5d50eec3ced7_20860981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <div class="alert alert-success alert-dismissible" role="alert" tabindex="0">
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['notifications']->value['success']) > 1) {?>
            <ul class="mb-0">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['notifications']->value['success'][0];?>

          <?php }?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_4218146216a5d50eec40ac5_36016366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_4218146216a5d50eec40ac5_36016366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <div class="alert alert-info alert-dismissible" role="alert" tabindex="0">
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['notifications']->value['info']) > 1) {?>
            <ul class="mb-0">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['notifications']->value['info'][0];?>

          <?php }?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
}
}
/* {/block 'notifications_info'} */
}
