<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:45:24
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c1e246488a2_15743535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5c1e246488a2_15743535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19655934716a5c1e245e5e76_05749860';
?>

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <section class="ps-imageslider">
    <div
      id="ps_imageslider"
      class="carousel slide"
      <?php if ($_smarty_tpl->tpl_vars['homeslider']->value['speed'] > 0) {?>data-bs-ride="carousel"<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['homeslider']->value['pause'] !== "hover") {?>data-bs-pause="false"<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['homeslider']->value['wrap'] === "false") {?>data-bs-wrap="false"<?php }?>
    >
      <div class="carousel-indicators">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
));
$_smarty_tpl->tpl_vars['slide']->iteration = 0;
$_smarty_tpl->tpl_vars['slide']->index = -1;
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['slide']->iteration++;
$_smarty_tpl->tpl_vars['slide']->index++;
$_smarty_tpl->tpl_vars['slide']->first = !$_smarty_tpl->tpl_vars['slide']->index;
$__foreach_slide_0_saved = $_smarty_tpl->tpl_vars['slide'];
?>
          <button
            type="button"
            data-bs-target="#ps_imageslider"
            data-bs-slide-to="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['slide']->index), ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to slide %slide_index%','sprintf'=>array('%slide_index%'=>$_smarty_tpl->tpl_vars['slide']->iteration),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
            class="outline <?php if ($_smarty_tpl->tpl_vars['slide']->first) {?>active<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['slide']->first) {?>aria-current="true"<?php }?>
          ></button>
        <?php
$_smarty_tpl->tpl_vars['slide'] = $__foreach_slide_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>

      <div class="carousel-inner" role="list" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carousel container','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
));
$_smarty_tpl->tpl_vars['slide']->iteration = 0;
$_smarty_tpl->tpl_vars['slide']->index = -1;
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['slide']->iteration++;
$_smarty_tpl->tpl_vars['slide']->index++;
$_smarty_tpl->tpl_vars['slide']->first = !$_smarty_tpl->tpl_vars['slide']->index;
$__foreach_slide_1_saved = $_smarty_tpl->tpl_vars['slide'];
?>
          <div class="carousel-item<?php if ($_smarty_tpl->tpl_vars['slide']->first) {?> active<?php }?>" role="listitem"<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['speed'] > 0) {?> data-bs-interval="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['homeslider']->value['speed']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?><a class="ps-imageslider__link outline d-block h-100 text-body" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['slide']->value['url']), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
              <figure class="ps-imageslider__figure">
                <img class="w-100" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['slide']->value['image_url']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] ))), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['slide']->first) {?>fetchpriority="high"<?php } else { ?>loading="lazy"<?php }?> width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['slide']->value['sizes'][0]), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['slide']->value['sizes'][1]), ENT_QUOTES, 'UTF-8');?>
">

                <?php if ($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                  <figcaption class="ps-imageslider__figcaption carousel-caption d-none d-lg-block fs-5">
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['title']) {?><h2 class="h1 text-uppercase"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['slide']->value['title']), ENT_QUOTES, 'UTF-8');?>
</h2><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?><div><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div><?php }?>
                  </figcaption>
                <?php }?>
              </figure>
            <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?></a><?php }?>
          </div>
        <?php
$_smarty_tpl->tpl_vars['slide'] = $__foreach_slide_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>

      <button class="carousel-control-prev outline outline--rounded" type="button" data-bs-target="#ps_imageslider" data-bs-slide="prev" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>

      <button class="carousel-control-next outline outline--rounded" type="button" data-bs-target="#ps_imageslider" data-bs-slide="next" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </section>
<?php }
}
}
