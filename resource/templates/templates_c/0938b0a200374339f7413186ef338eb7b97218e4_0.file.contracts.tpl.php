<?php
/* Smarty version 3.1.30, created on 2018-07-08 19:13:49
  from "/var/www/SpaceAgencyManager/resource/templates/contracts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42464dc95872_04877183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0938b0a200374339f7413186ef338eb7b97218e4' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/contracts.tpl',
      1 => 1531069939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b42464dc95872_04877183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6737841195b42464dc8f2a6_79185767', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_367742195b42464dc92107_02110028', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9868308105b42464dc948f8_68989051', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_6737841195b42464dc8f2a6_79185767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - <?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_367742195b42464dc92107_02110028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_9868308105b42464dc948f8_68989051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
