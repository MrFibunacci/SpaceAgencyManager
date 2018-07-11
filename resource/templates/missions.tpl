{extends file='main.tpl'}

{$page_name = "Missions"}

{block name='title'} - {$page_name}{/block}
{block name='page_header'}{$page_name}{/block}
{block name='page_content'}
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Missions Overview
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sputnik</td>
                                    <td>Planing</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-fw fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Do Stuff</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Create new Mission
                </div>
            </div>
        </div>
    </div>
{/block}

{block name='extra_scripts'}

{/block}