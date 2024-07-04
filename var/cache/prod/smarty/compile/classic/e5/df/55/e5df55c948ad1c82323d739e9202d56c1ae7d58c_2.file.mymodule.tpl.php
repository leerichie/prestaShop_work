<?php
/* Smarty version 4.3.4, created on 2024-07-04 08:20:18
  from '/var/www/html/modules/mymodule/views/templates/hook/mymodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66863f22728b11_16161907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5df55c948ad1c82323d739e9202d56c1ae7d58c' => 
    array (
      0 => '/var/www/html/modules/mymodule/views/templates/hook/mymodule.tpl',
      1 => 1720074014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66863f22728b11_16161907 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="lee_home_tpl">
    <h1 class="title_one"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The Leeski Mod','mod'=>'mymodule'),$_smarty_tpl ) );?>
</h1>
    <p>Hello,
        <?php if ((isset($_smarty_tpl->tpl_vars['my_module_name']->value)) && $_smarty_tpl->tpl_vars['my_module_name']->value) {?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_module_name']->value, ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            World
        <?php }?>
        ! <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_module_img']->value, ENT_QUOTES, 'UTF-8');?>
iconweb.gif" />
    </p>
    <ul class="link_me">
        <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="Click link">Enter</a></li>
        <li><a href="http://bbc.co.uk/sport" title="Click for sports">Sports</a></li>
        <li><a href="http://sklep.metalzbyt.com.pl" title="Metalzbyt Olsztyn">Budowlany</a></li>
    </ul>
</div><?php }
}
