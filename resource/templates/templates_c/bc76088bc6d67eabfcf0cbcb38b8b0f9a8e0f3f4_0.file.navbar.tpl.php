<?php
/* Smarty version 3.1.30, created on 2018-07-08 16:37:10
  from "/var/www/SpaceAgencyManager/resource/templates/navigation/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b422196304406_43892820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc76088bc6d67eabfcf0cbcb38b8b0f9a8e0f3f4' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/navigation/navbar.tpl',
      1 => 1531060557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navigation/sidenav.tpl' => 1,
    'file:navigation/topnavbar.tpl' => 1,
  ),
),false)) {
function content_5b422196304406_43892820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">Space Agency Manager - Your Agency</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php $_smarty_tpl->_subTemplateRender("file:navigation/sidenav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender("file:navigation/topnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</nav><?php }
}
