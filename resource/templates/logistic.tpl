{extends file='main.tpl'}

{$page_name = "Logistics"}

{$breadcrumbPath = [
    [ 'path' => '', 'text' => $page_name ]
]}

{block name='title'} - {$page_name}{/block}
{block name='page_header'}{$page_name}{/block}
{block name='page_content'}
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nr.</td>
                <td>Name</td>
                <td>Type</td>
                <td>Amount</td>
                <td>Location</td>
                <td>Worth</td>
                <td>Sell worth</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sputnik</td>
                <td>SLS</td>
                <td>1</td>
                {*<td>Baikonur VAB</td>*}
                <td>
                    <div class="progress" style="height:20px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%">Baikonur VAB > Launch pad</div>
                    </div>
                </td>
                <td class="text-right">3.000.000,00</td>
                <td class="text-right">2.184.000,00</td>
                <td>
                    <div class="dropdown show">
                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-fw fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu" style="position: absolute; transform: translate3d(0px, -52px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="">Show Item</a>
                            <a class="dropdown-item" href="">Show Location</a>
                            <a class="dropdown-item" href="">Transport</a>
                            <a class="dropdown-item" href="">Sell</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
{/block}

{block name='extra_scripts'}{/block}