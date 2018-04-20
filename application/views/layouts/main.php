<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Event Akakom</title>

    <!-- Favicons-->
    <link rel="icon" href="<?= site_url('assets/admin/images/favicon/favicon-32x32.png');?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?= site_url('assets/admin/images/favicon/apple-touch-icon-152x152.png');?>">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?= site_url('assets/admin/images/favicon/mstile-144x144.png');?>">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->
    <link href="<?= site_url('assets/admin/css/materialize.css');?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= site_url('assets/admin/css/style.css');?>" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?= site_url('assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css');?>" type="text/css" rel="stylesheet"
        media="screen,projection">
    <link href="<?= site_url('assets/admin/js/plugins/jvectormap/jquery-jvectormap.css" type ');?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= site_url('assets/admin/js/plugins/chartist-js/chartist.min.css ');?>" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="<?= site_url('/dashboard');?>" class="brand-logo darken-1"><img src="<?= site_url('assets/admin/images/materialize-logo.png ');?>" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="<?php echo site_url('user_authentication/logout ');?>"><i class="mdi-hardware-keyboard-tab"></i></a>
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