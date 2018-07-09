<?php
/* Smarty version 3.1.30, created on 2018-07-08 16:31:35
  from "/var/www/SpaceAgencyManager/resource/templates/navigation/topnavbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b422047e8eea6_62339749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6173957f4b7567f5d8848a26178c600c76d587' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/navigation/topnavbar.tpl',
      1 => 1531060236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b422047e8eea6_62339749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="navbar-nav ml-auto">
    
    <li class="nav-item">
        
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="/login">
            <i class="fa fa-fw fa-sign-in"></i>
            Login
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="/settings">
            <i class="fa fa-fw fa-2x fa-gear"></i>
        </a>
    </li>
</ul><?php }
}
