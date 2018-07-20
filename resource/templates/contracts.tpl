{extends file='main.tpl'}

{$page_name = "Contracts"}

{block name='title'} - {$page_name}{/block}
{block name='page_header'}{$page_name}{/block}
{block name='page_content'}
    <div class="row">
        <div class="col-lg-4">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#available_contracts">Available</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#active_contracts">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" data-toggle="tab" href="#archive_contracts">Archive</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="available_contracts">
                    <button type="button" class="btn btn-outline-success btn-lg btn-block text-sm">selected contract</button>
                    <button type="button" class="btn btn-block btn-lg btn-block">not selected contract</button>
                </div>
                <div class="tab-pane container" id="active_contracts">...</div>
                <div class="tab-pane container" id="archive_contracts">...</div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">

            </div>
        </div>
    </div>
{/block}

{block name='extra_scripts'}{/block}