<?php
/* Smarty version 3.1.30, created on 2018-07-08 17:29:20
  from "/var/www/SpaceAgencyManager/resource/templates/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b422dd0a65713_69035376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a531b7a8d5e9f62b0f2bc2d9876b7030b891e398' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/main.tpl',
      1 => 1531063441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:script_includes/stylesheets.tpl' => 1,
    'file:navigation/navbar.tpl' => 1,
    'file:script_includes/javascripts.tpl' => 1,
  ),
),false)) {
function content_5b422dd0a65713_69035376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Space Agency Manager <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20294511475b422dd0a5aaf3_94136195', 'title');
?>
</title>

        <meta charset="utf-8">

        <?php $_smarty_tpl->_subTemplateRender("file:script_includes/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <?php $_smarty_tpl->_subTemplateRender("file:navigation/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="content-wrapper">
            <!-- main content-->
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">MyAgency</a>
                    </li>
                    <li class="breadcrumb-item active">sub level</li>
                </ol>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16802019365b422dd0a60d99_15618047', 'page_content');
?>

            </div>
            <!-- /. main content-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © MrFibunacci 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>

            <!-- Custom scripts for all pages -->
            <?php $_smarty_tpl->_subTemplateRender("file:script_includes/javascripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- Custom scripts for this page -->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17220357835b422dd0a646b3_19226105', 'extra_scripts');
?>

        </div>
        <!-- /.content-wrapper-->
    </body>
</html>
<?php }
/* {block 'title'} */
class Block_20294511475b422dd0a5aaf3_94136195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_16802019365b422dd0a60d99_15618047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_17220357835b422dd0a646b3_19226105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
