<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:00:01
  from "/var/www/SpaceAgencyManager/resource/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4378710cbaa6_85549467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a63b19ec1088d7392d6e45dc5dfa492b4e392b3' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/index.tpl',
      1 => 1531141189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b4378710cbaa6_85549467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18561295595b4378710ca564_68658488', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12034254615b4378710caf61_68855369', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_950684775b4378710cb765_19958750', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_18561295595b4378710ca564_68658488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - Home<?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_12034254615b4378710caf61_68855369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="text-center">Space Flight Manager</h1>
                <p class="text-center">Manage your own space agency along side the existing ones. Starting 1957 together with the first ever orbital flight.</p>
                <p class="text-center"> You manage your agency as if it would be an real one. You research technologies and explore our solar system or simply make money by commercial space flight.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create an account
                </div>
                <div class="card-body">
                    <form action="/register" method="post">
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" id="usr" name="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create an Agency
                </div>
                <div class="card-body">
                    <form action="/newAgency" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="contraction">Contraction:</label>
                            <input type="text" class="form-control" id="contraction" name="contraction" maxlength="5">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_950684775b4378710cb765_19958750 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extra_scripts'} */
}
