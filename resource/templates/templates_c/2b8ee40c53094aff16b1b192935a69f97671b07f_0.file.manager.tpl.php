<?php
/* Smarty version 3.1.30, created on 2018-07-08 18:29:29
  from "/var/www/SpaceAgencyManager/resource/templates/manager.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b423be958bb94_63279383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8ee40c53094aff16b1b192935a69f97671b07f' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/manager.tpl',
      1 => 1531067478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b423be958bb94_63279383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101899385b423be95866e5_60946253', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10546759965b423be9588e81_47693985', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4344558805b423be958ae97_46231908', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_101899385b423be95866e5_60946253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - Manager<?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_10546759965b423be9588e81_47693985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Fiances
                </div>
                <div class="card-body">
                    <h1>Show some fiances</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Latest transactions
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_4344558805b423be958ae97_46231908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
