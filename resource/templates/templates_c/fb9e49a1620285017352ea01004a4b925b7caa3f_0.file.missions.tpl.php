<?php
/* Smarty version 3.1.30, created on 2018-07-08 19:07:17
  from "/var/www/SpaceAgencyManager/resource/templates/missions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4244c5b2dec5_30186764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9e49a1620285017352ea01004a4b925b7caa3f' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/missions.tpl',
      1 => 1531068444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b4244c5b2dec5_30186764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1631753095b4244c5b27cf7_58111685', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14752010045b4244c5b2aab8_68800959', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7013386015b4244c5b2d034_38096186', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1631753095b4244c5b27cf7_58111685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - Missions<?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_14752010045b4244c5b2aab8_68800959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_7013386015b4244c5b2d034_38096186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
