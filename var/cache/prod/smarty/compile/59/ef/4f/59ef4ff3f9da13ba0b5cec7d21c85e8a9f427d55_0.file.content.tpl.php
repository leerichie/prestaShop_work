<?php
/* Smarty version 4.3.4, created on 2024-06-27 11:06:03
  from '/var/www/html/admin123/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667d2b7bd83bd8_79817592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ef4ff3f9da13ba0b5cec7d21c85e8a9f427d55' => 
    array (
      0 => '/var/www/html/admin123/themes/new-theme/template/content.tpl',
      1 => 1715587961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d2b7bd83bd8_79817592 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
