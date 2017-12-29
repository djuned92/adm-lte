<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$template['title']?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?=base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?=base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?=base_url('assets/vendors/Ionicons/css/ionicons.min.css')?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url('assets/css/AdminLTE.css')?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?=base_url('assets/css/skins/_all-skins.min.css')?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- color system -->
        <link href="<?=base_url('assets/vendors/color-system/color-system.css')?>" rel="stylesheet" type="text/css">
        <!-- sweet alert -->
        <link href="<?=base_url('assets/vendors/sweetalert/sweetalert.css')?>" rel="stylesheet" type="text/css">
        <!-- loader -->
        <link href="<?=base_url('assets/vendors/loader/loader.css')?>" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/vendors/animate.css/animate.min.css')?>" rel="stylesheet" type="text/css">
        <style type="text/css">
            /*preloader*/
            #preloader {position:fixed;top:0;left:0;right:0;bottom:0;background-color:#fff;z-index:9999999;}

            #status {width:100px;height:100px;position:absolute;left:47%;top:46%;background-repeat:no-repeat;background-position:center;}
            @media(max-width:320px){
                #status{left: 39%;top: 45%;}
            }
            @media screen and (min-width: 321px) and (max-width: 375px) {
                #status {left: 42%;}
            }
            @media screen and (min-width: 376px) and (max-width: 414px) {
                #status {left: 43%;}
            }
            @media screen and (min-width: 767px) and (max-width: 768px) {
                #status {left: 47%;}
            }
        </style>     
        <!-- jQuery 2 -->
        <script src="<?=base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?=base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    </head>
    <?php $app = $this->global->get('apps')->row_array(); ?>
    <body class="<?=$app['app_theme']?> sidebar-mini">
        <!-- loader -->
        <div id="preloader">
            <div id="status">
                <div class="loader">
                    <div class="square-spin">
                        <div class="bg-teal-darkest"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="../../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b><?=$app['app_logo_mini']?></b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b><?=$app['app_logo_lg']?></b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <?php $this->load->view('layouts/partials/backend/header.php') ?>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <?php $this->load->view('layouts/partials/backend/sidebar.php') ?>
                <!-- /.sidebar -->
            </aside>
            <!-- =============================================== -->
            
            <!-- page content -->
            <?=$template['body']?>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('layouts/partials/backend/footer.php') ?>
            <!-- /footer content -->
        </div>
        <!-- ./wrapper -->
        
        <!-- SlimScroll -->
        <script src="<?=base_url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
        <!-- FastClick -->
        <script src="<?=base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
         <!-- validator -->
        <script src="<?=base_url('assets/vendors/jquery-validation/jquery.validate.min.js')?>"></script>
        <!-- sweet alert -->
        <script src="<?=base_url('assets/vendors/sweetalert/sweetalert.min.js')?>"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url('assets/js/adminlte.js')?>"></script>
        <script type="text/javascript">
            $(window).load(function() { // makes sure the whole site is loaded
                $('#status').fadeOut(); // will first fade out the loading animation
                $('#preloader').delay(250).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(250).css({'overflow':'visible'});
            });     
        </script>
    </body>
</html>