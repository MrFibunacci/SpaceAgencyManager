<?php
/* Smarty version 3.1.30, created on 2018-07-08 18:43:19
  from "/var/www/SpaceAgencyManager/resource/templates/finances.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b423f27e542e6_73370192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c805e4147bef5bee95b448c64bf98fdbbf85321' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/finances.tpl',
      1 => 1531068120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b423f27e542e6_73370192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16972845105b423f27e4d5d1_09598911', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5668759185b423f27e50c14_01011402', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13913709265b423f27e53358_98712824', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_16972845105b423f27e4d5d1_09598911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - Finances<?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_5668759185b423f27e50c14_01011402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Finances
                </div>
                <div class="card-body">
                    <p class="text-danger">TODO: Show an graph of the latest development of the money from the agency.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Latest transactions
                </div>
                <div class="card-body">
                    <p class="text-danger">TODO: Show an list of the last transactions. To see where the money lately went.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h1>Income</h1>
    </div>
    <div class="row">
        <h1>Outcome</h1>
    </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_13913709265b423f27e53358_98712824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
