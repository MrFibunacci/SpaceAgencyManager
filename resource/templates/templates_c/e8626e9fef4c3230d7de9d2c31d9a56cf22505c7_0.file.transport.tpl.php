<?php
/* Smarty version 3.1.30, created on 2018-07-08 19:13:47
  from "/var/www/SpaceAgencyManager/resource/templates/transport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42464b417647_80662519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8626e9fef4c3230d7de9d2c31d9a56cf22505c7' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/transport.tpl',
      1 => 1531069939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b42464b417647_80662519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19613207455b42464b40e527_60196926', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2153203975b42464b413604_90347881', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10851936195b42464b416634_19188206', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_19613207455b42464b40e527_60196926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - <?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_2153203975b42464b413604_90347881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_10851936195b42464b416634_19188206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
