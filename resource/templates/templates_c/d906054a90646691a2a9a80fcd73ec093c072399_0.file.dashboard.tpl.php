<?php
/* Smarty version 3.1.30, created on 2018-07-08 18:35:00
  from "/var/www/SpaceAgencyManager/resource/templates/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b423d348f5ff5_80047040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd906054a90646691a2a9a80fcd73ec093c072399' => 
    array (
      0 => '/var/www/SpaceAgencyManager/resource/templates/dashboard.tpl',
      1 => 1531065759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5b423d348f5ff5_80047040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19512727935b423d348ea921_38787080', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_687658755b423d348ee611_08068573', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11988496215b423d348f50c6_93696196', 'extra_scripts');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_19512727935b423d348ea921_38787080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 - Dashboard<?php
}
}
/* {/block 'title'} */
/* {block 'page_content'} */
class Block_687658755b423d348ee611_08068573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-bar-chart"></i> Finances</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 my-auto">
                    <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                    <div class="h4 mb-0 text-primary">$34,693,102.00</div>
                    <div class="small text-muted">Total value</div>
                    <hr>
                    <div class="h4 mb-0 text-success">$12,000,000</div>
                    <div class="small text-muted">Income</div>
                    <hr>
                    <div class="h4 mb-0 text-danger">$-4,123,144</div>
                    <div class="small text-muted">Outcome</div>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'extra_scripts'} */
class Block_11988496215b423d348f50c6_93696196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        // -- Bar Chart Example
        let ctx = document.getElementById("myBarChart").getContext('2d');
        let myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                datasets: [{
                    label: "Revenue",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: [12223446, 12213114.00, 12344136.00, 11211456.00, 31235102.00, 34693102.00],
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 50000000,
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'extra_scripts'} */
}
