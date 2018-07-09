{extends file='main.tpl'}

{block name='title'} - Home{/block}
{block name='page_content'}
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
{/block}

{block name='extra_scripts'}{/block}