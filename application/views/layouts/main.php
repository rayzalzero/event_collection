<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Event Akakom</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?= site_url('assets/users/favicons/apple-icon-57x57.png');?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= site_url('assets/users/favicons/apple-icon-60x60.png');?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= site_url('assets/users/favicons/apple-icon-72x72.png');?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= site_url('assets/users/favicons/apple-icon-76x76.png');?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= site_url('assets/users/favicons/apple-icon-114x114.png');?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= site_url('assets/users/favicons/apple-icon-120x120.png');?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= site_url('assets/users/favicons/apple-icon-144x144.png');?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= site_url('assets/users/favicons/apple-icon-152x152.png');?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= site_url('assets/users/favicons/apple-icon-180x180.png');?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= site_url('assets/users/favicons/android-icon-192x192.png');?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= site_url('assets/users/favicons/favicon-32x32.png');?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= site_url('assets/users/favicons/favicon-96x96.png');?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/users/favicons/favicon-16x16.png');?>">
        <link rel="manifest" href="<?= site_url('assets/users/favicons/manifest.json');?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= site_url('assets/users/favicons/ms-icon-144x144.png');?>">
        <meta name="theme-color" content="#ffffff">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= site_url('resources/css/_all-skins.min.css');?>">
        <!-- picker css -->
        <link rel="stylesheet" type="text/css" href="<?= site_url('assets/plugins/clockpicker/dist/bootstrap-clockpicker.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('assets/plugins/datatables/datatables.css');?>">
    
        <!-- javascript -->
        <script src="<?= site_url('resources/js/jquery-2.2.3.min.js');?>"></script><script type="text/javascript" src="<?= site_url('resources/js/moment.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('assets/plugins/clockpicker/dist/bootstrap-clockpicker.min.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('resources/js/global.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('assets/plugins/datatables/datatables.js');?>"></script>
    
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">Akakom Event</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Akakom Event</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="<?= site_url('user_authentication/logout');?>" >
                                    <span class="glyphicon glyphicon-log-out"></span> Log out <?= $this->session->userdata['logged_in']['username'];?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?= site_url('/dashboard');?>/">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						<li>
                            <a href="<?= site_url('event_event/');?>">
                                <i class="fa fa-handshake-o"></i> <span> Acara</span>
                            </a>
                        </li>
                        <?php
                        if ($this->session->userdata['logged_in']['level']==0) {
                            $data= 'oke';
                            echo "<li>
                            <a href='".site_url('event_user/')."'>
                                <i class='fa fa-user-circle'></i> <span> Pengguna</span>
                                </a>
                            </li>";    
                        }                        
                        ?>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Created By SBHJ</a> 3.2</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        
    </body>   
    <!-- jQuery 2.2.3 -->
    <script src="<?= site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?= site_url('resources/js/bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?= site_url('resources/js/fastclick.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= site_url('resources/js/app.min.js');?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= site_url('resources/js/demo.js');?>"></script>
    
    <!-- DatePicker -->
    <script type="text/javascript" src="<?= site_url('resources/js/moment.js');?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/plugins/clockpicker/dist/bootstrap-clockpicker.min.js');?>"></script>
    <script type="text/javascript" src="<?= site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script type="text/javascript" src="<?= site_url('resources/js/global.js');?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/plugins/datatables/datatables.js');?>"></script>
    <script>
    $(document).ready(function () {
        $('.dataTable').DataTable();
    });
    </script>
</html>
