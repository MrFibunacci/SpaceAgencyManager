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
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">MyAgency</a>
                    </li>
                    <li class="breadcrumb-item active">sub level</li>
                </ol>

                {block name='page_content'}{/block}
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
            {include file='script_includes/javascripts.tpl'}
            <!-- Custom scripts for this page -->
            {block name='extra_scripts'}{/block}
        </div>
        <!-- /.content-wrapper-->
    </body>
</html>
