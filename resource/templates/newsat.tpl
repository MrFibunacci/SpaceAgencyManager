{extends file='main.tpl'}

{$page_name = "new Satelite"}

{block name='title'} - {$page_name}{/block}
{block name='page_header'}{$page_name}{/block}
{block name='page_content'}
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="form-group">
                        <label for="">Enter a Name:</label>
                        <input class="form-control" id="" name="">
                    </div>
                    <div class="form-group">
                        <label>Decide what case you want to use.</label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}

{block name='extra_scripts'}{/block}