<?php
/* Smarty version 4.3.4, created on 2024-07-02 14:45:59
  from '/var/www/html/admin123/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6683f6872e2110_89748882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ef4ff3f9da13ba0b5cec7d21c85e8a9f427d55' => 
    array (
      0 => '/var/www/html/admin123/themes/new-theme/template/content.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683f6872e2110_89748882 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
