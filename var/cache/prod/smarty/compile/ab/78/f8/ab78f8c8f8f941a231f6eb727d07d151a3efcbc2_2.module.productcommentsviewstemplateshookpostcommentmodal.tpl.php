<?php
/* Smarty version 4.5.5, created on 2026-07-18 21:53:25
  from 'module:productcommentsviewstemplateshookpostcommentmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a5c2005366041_80785497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab78f8c8f8f941a231f6eb727d07d151a3efcbc2' => 
    array (
      0 => 'module:productcommentsviewstemplateshookpostcommentmodal.tpl',
      1 => 1784413141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:productcomments/views/templates/hook/alert-modal.tpl' => 2,
  ),
),false)) {
function content_6a5c2005366041_80785497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-8-2\\htdocs\\more-home\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
  var productCommentPostErrorMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your review cannot be posted.','d'=>'Modules.Productcomments.Shop','js'=>1),$_smarty_tpl ) );?>
';
  var productCommentMandatoryMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose a rating for your review.','d'=>'Modules.Productcomments.Shop','js'=>1),$_smarty_tpl ) );?>
';
  var ratingChosen = false;
<?php echo '</script'; ?>
>

<div id="post-product-comment-modal" class="modal fade product-comment-modal" tabindex="-1" aria-labelledby="product-post-review-modal-title" aria-hidden="true" data-ps-ref="product-post-review-modal">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <form class="modal-content" id="post-product-comment-form" action="<?php echo $_smarty_tpl->tpl_vars['post_comment_url']->value;?>
" method="POST" data-ps-ref="product-post-review-form" data-ps-action="form-validation">
      <div class="modal-header">
        <p class="h2 modal-title" id="product-post-review-modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-12 col-sm-2 mb-4">
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11675316776a5c2005330cc3_23453161', 'product_cover');
?>

            <?php }?>
          </div>

          <div class="col-12 col-sm-10">
            <p class="h5"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
</p>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19407550616a5c20053459f1_40351988', 'product_description_short');
?>

          </div>

          <div class="col-12">
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?>
              <ul id="criterions_list" data-ps-ref="criterions-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion', true);
$_smarty_tpl->tpl_vars['criterion']->iteration = 0;
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
$_smarty_tpl->tpl_vars['criterion']->iteration++;
$_smarty_tpl->tpl_vars['criterion']->last = $_smarty_tpl->tpl_vars['criterion']->iteration === $_smarty_tpl->tpl_vars['criterion']->total;
$__foreach_criterion_21_saved = $_smarty_tpl->tpl_vars['criterion'];
?>
                  <li <?php if (!$_smarty_tpl->tpl_vars['criterion']->last) {?>class="mb-2"<?php }?>>
                    <fieldset class="star-rating-group" aria-labelledby="rating-label-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
">
                      <legend id="rating-label-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
" class="form-label required">
                        <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating for ','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
                        <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

                      </legend>

                      <div class="form-check stars-selector" aria-labelledby="rating-label-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                          <input
                            class="stars-selector__input visually-hidden"
                            type="radio"
                            id="star-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value), ENT_QUOTES, 'UTF-8');?>
-criterion-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
" 
                            name="criterion[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>
                              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s star out of 5','sprintf'=>array($_smarty_tpl->tpl_vars['i']->value),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
"
                            <?php } else { ?>
                              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s stars out of 5','sprintf'=>array($_smarty_tpl->tpl_vars['i']->value),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
"
                            <?php }?>
                            required
                          >
                          <label class="stars-selector__input-label" for="star-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value), ENT_QUOTES, 'UTF-8');?>
-criterion-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></label>
                        <?php }
}
?>
                        <div class="invalid-feedback"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose a rating for your review.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</div>
                      </div>
                    </fieldset>
                  </li>
                <?php
$_smarty_tpl->tpl_vars['criterion'] = $__foreach_criterion_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php }?>
          </div>
        </div>

        <div class="row">
          <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
            <div class="col-sm-8 mb-3">
              <label class="form-label required" for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title of your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 </label>
              <input class="form-control" name="comment_title" id="comment_title" type="text" value="" required>
            </div>

            <div class="col-sm-4 mb-3">
              <label class="form-label required" for="customer_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 </label>
              <input class="form-control" name="customer_name" id="customer_name" type="text" value="" required>
            </div>
          <?php } else { ?>
            <div class="mb-3">
              <label class="form-label required" for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title of your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 </label>
              <input class="form-control" name="comment_title" id="comment_title" type="text" value="" required>
            </div>
          <?php }?>
        </div>

        <div class="mb-3">
          <label class="form-label required" for="comment_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 </label>
          <textarea class="form-control" name="comment_content" id="comment_content" required></textarea>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'gdprContent', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'gdprContent') != '') {?>
          <div class="mb-3">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'gdprContent');?>

          </div>
        <?php }?>
      </div>

      <div class="modal-footer">
        <p class="required">
          <sup class="text-danger">*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

        </p>

        <div class="post-comment-buttons d-flex flex-wrap gap-2 w-100 w-md-auto">
          <button type="button" class="btn btn-outline-primary w-md-auto w-100" data-bs-dismiss="modal"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>

          <button type="submit" class="btn btn-primary w-100 w-md-auto order-first order-md-last" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
" data-ps-action="form-validation-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['moderation_active']->value) {?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->_assignInScope('comment_posted_message', $_prefixVariable11);
} else { ?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable12 = ob_get_clean();
$_smarty_tpl->_assignInScope('comment_posted_message', $_prefixVariable12);
}?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'product-post-review-posted-modal','modal_title'=>$_prefixVariable13,'modal_message'=>$_smarty_tpl->tpl_vars['comment_posted_message']->value), 0, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'product-post-review-error-modal','modal_title'=>$_prefixVariable14,'icon'=>'error'), 0, true);
}
/* {block 'product_cover'} */
class Block_11675316776a5c2005330cc3_23453161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_11675316776a5c2005330cc3_23453161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="product-cover">
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover'])) {?>
                    <picture>
                      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['sources']['avif']))) {?>
                        <source srcset="
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
,
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 2x"
                          type="image/avif">
                      <?php }?>

                      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['sources']['webp']))) {?>
                        <source srcset="
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
,
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 2x"
                          type="image/webp">
                      <?php }?>

                      <img class="js-qv-product-cover rounded img-fluid" srcset="
                         <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['url']), ENT_QUOTES, 'UTF-8');?>
,
                         <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
 2x" loading="lazy"
                        width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['width']), ENT_QUOTES, 'UTF-8');?>
"
                        height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['height']), ENT_QUOTES, 'UTF-8');?>
"
                        alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');?>
">
                    </picture>
                  <?php } else { ?>
                    <picture>
                      <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['sources']['avif']))) {?>
                        <source srcset="
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
,
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
 2x"
                          type="image/avif">
                      <?php }?>

                      <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['sources']['webp']))) {?>
                        <source srcset="
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
,
                           <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
 2x"
                          type="image/webp">
                      <?php }?>

                      <img class="rounded img-fluid" srcset="
                         <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['url']), ENT_QUOTES, 'UTF-8');?>
,
                         <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['url']), ENT_QUOTES, 'UTF-8');?>
 2x"
                        width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['width']), ENT_QUOTES, 'UTF-8');?>
"
                        height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['height']), ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
                    </picture>
                  <?php }?>
                </div>
              <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_description_short'} */
class Block_19407550616a5c20053459f1_40351988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_19407550616a5c20053459f1_40351988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
}
