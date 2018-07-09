{extends file='main.tpl'}

{block name='title'} - Finances{/block}
{block name='page_content'}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Finances
                </div>
                <div class="card-body">
                    <p class="text-danger">TODO: Show an graph of the latest development of the money from the agency.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Latest transactions
                </div>
                <div class="card-body">
                    <p class="text-danger">TODO: Show an list of the last transactions. To see where the money lately went.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h1>Income</h1>
    </div>
    <div class="row">
        <h1>Outcome</h1>
    </div>
{/block}

{block name='extra_scripts'}{/block}