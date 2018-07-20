<!DOCTYPE html>
<html>
    <head>
        <title>Space Agency Manager {block name='title'}{/block}</title>

        <meta charset="utf-8">

        {include file='script_includes/stylesheets.tpl'}
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        {include file='navigation/navbar.tpl'}

        <div class="content-wrapper">
            <!-- main content-->
            <section class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1>{block name="page_header"}{/block}</h1>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    {foreach $breadcrumbPath as $key => $breadcrumb}
                        {if $breadcrumbPath[$key+1]}
                        <li class="breadcrumb-item">
                            <a href="{$breadcrumb['path']}">{$breadcrumb['text']}</a>
                        </li>
                        {else}
                        <li class="breadcrumb-item active">{$breadcrumb['text']}</li>
                        {/if}
                    {/foreach}
                </ol>

                {block name='page_content'}{/block}
            </section>
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
            {include file='script_includes/javascripts.tpl'}
            <!-- Custom scripts for this page -->
            {block name='extra_scripts'}{/block}
        </div>
        <!-- /.content-wrapper-->

        {if $smarty.session.is_loggedIn !== true}
        <!-- The Login Modal -->
        <div class="modal" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/login" method="post">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        {else}
        <!-- The Account Modal -->
        <div class="modal" id="userAccModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Your account</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>TODO: Add stuff here.</p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        {/if}
    </body>
</html>
