<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kegiatan Akakom</title>

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
        <!-- datatable -->
        <link rel="stylesheet" type="text/css" href="<?= site_url('assets/users/plugins/datatable/datatables.css')?>"/>
        
        <!-- javascript -->
        <script src="<?= site_url('resources/js/jquery-2.2.3.min.js');?>"></script><script type="text/javascript" src="<?= site_url('resources/js/moment.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('assets/plugins/clockpicker/dist/bootstrap-clockpicker.min.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('resources/js/global.js');?>"></script>

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
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="<?= site_url('assets/admin/images/avatar.jpg');?>" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?= $this->session->userdata['logged_in']['username'];?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal"><?= $this->session->userdata['logged_in']['username'];?></p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="<?= site_url('/dashboard ');?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="<?= site_url('event_event/ ');?>" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Acara</a>
                    </li>
                    <?php
                        if ($this->session->userdata['logged_in']['level']==0) {
                            $data= 'oke ';
                            echo "<li><a href=' ".site_url('event_user/')." '><i class='mdi-action-account-child '></i> <span> Pengguna</span></a></li>";    
                        }                        
                    ?>
                        </ul>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </div>
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
            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
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

    <script type="text/javascript" src="<?= site_url('assets/users/plugins/datatable/pdfmake-0.1.32/pdfmake.min.js')?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/users/plugins/datatable/pdfmake-0.1.32/vfs_fonts.js')?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/users/plugins/datatable/datatables.min.js')?>"></script>
    <script>
    $(document).ready(function() {
        $('.dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend:    'excelHtml5',
                    text:      '<i class="icon-file-excel"></i> Excel',
                    filename:  'Laporan ' + moment().format('YYYY-MM-DD HHmmss'),
                    exportOptions: {
                        columns: ':visible:not(.action)',
                        row:':visible',
                        format: {
                            body: function(data, row, col,node) {
                                var elementType = node.firstChild;
                                if (elementType != null) {
                                    if (elementType.nodeName == "SELECT") {
                                        return  $(elementType).find(':selected').text();
                                    } else return data;
                                }
                                else return data;
                            }
                        }
                    },
                    // className: 'btn bg-slate-700',
                    titleAttr: 'Excel'
                }
            ]
        });
    });
    </script>
</html>
=======

            <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <!-- <footer class="page-footer" style="bottom: 0;position: absolute;">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
            </div>
        </div>
    </footer> -->
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?= site_url('assets/admin/js/jquery-1.11.2.min.js ');?>"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?= site_url('assets/admin/js/materialize.min.js ');?>"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js ');?>"></script>
       
    <!-- chartist -->
    <!-- <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/chartist-js/chartist.min.js ');?>"></script>    -->

    <!-- chartjs -->
    <!-- <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/chartjs/chart.min.js ');?>"></script> -->
    <!-- <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/chartjs/chart-script.js ');?>"></script> -->

    <!-- sparkline -->
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js ');?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/sparkline/sparkline-script.js ');?>"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js ');?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js ');?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins/jvectormap/vectormap-script.js ');?>"></script>
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?= site_url('assets/admin/js/plugins.js ');?>"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
        // Toast Notification
        $(window).load(function () {
            setTimeout(function () { Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
            }, 3000); setTimeout(function () { Materialize.toast('< span > You can swipe me too!</span > ', 3000); }, 5500); setTimeout(function() { Materialize.toast('< span > You have new order.</span > <a class="btn-flat yellow-text" href="#">Read <a>', 3000); }, 18000); });
                
    </script>
</body>
</html>
