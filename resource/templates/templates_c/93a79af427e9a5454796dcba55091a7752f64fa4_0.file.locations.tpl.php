<?php
/* Smarty version 3.1.30, created on 2018-07-08 19:13:49
  from "/var/www/SpaceAgencyManager/resource/templates/locations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42464d73e325_70636140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93a79af427e9a5454796dcba55091a7752f64fa4' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/locations.tpl',
      1 => 1531069939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b42464d73e325_70636140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14408201615b42464d7395e5_31927069', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9080738785b42464d73bcd2_02425189', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20303722175b42464d73d814_87440318', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_14408201615b42464d7395e5_31927069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - <?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_9080738785b42464d73bcd2_02425189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_20303722175b42464d73d814_87440318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
