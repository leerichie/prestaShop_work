<?php
/* Smarty version 4.3.4, created on 2024-07-02 14:46:19
  from 'module:mymoduleviewstemplatesfrontdisplay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6683f69bf37bb2_60604473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb9770439b464b701bf2d2bd8fb9ff2864ded44' => 
    array (
      0 => 'module:mymoduleviewstemplatesfrontdisplay.tpl',
      1 => 1719482944,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683f69bf37bb2_60604473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14359121866683f69bf35518_45297769', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_14359121866683f69bf35518_45297769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_14359121866683f69bf35518_45297769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <h1><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_module_message']->value, ENT_QUOTES, 'UTF-8');?>
</h1>

    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mymodule','display'), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <div class="form-group">
            <label for="search_term">Search for a car:</label>
            <input type="text" name="search_term" id="search_term" class="form-control" placeholder="Enter make or model"
                required>
        </div>
        <button type="submit" name="searchCar" class="btn btn-primary">Search</button>
    </form>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['car_list']->value) > 0) {?>
        <h2>Search Results:</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['car_list']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                    <tr>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['make'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['model'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['year'], ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>No cars found matching your criteria.</p>
    <?php }
}
}
/* {/block 'page_content'} */
}
