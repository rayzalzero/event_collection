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
    <title>Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="<?=base_url();?>assets/admin/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/admin/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?=base_url();?>assets/admin/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<?=base_url();?>assets/admin/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url();?>assets/admin/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="<?=base_url();?>assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url();?>assets/admin/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url();?>assets/admin/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


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
                    <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>    
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>                              
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>
                        <!-- Dropdown Trigger -->                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
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
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
                    </li>
                    <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="css-typography.html">Typography</a>
                                        </li>                                        
                                        <li><a href="css-icons.html">Icons</a>
                                        </li>
                                        <li><a href="css-shadow.html">Shadow</a>
                                        </li>
                                        <li><a href="css-media.html">Media</a>
                                        </li>
                                        <li><a href="css-sass.html">Sass</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="ui-badges.html">Badges</a>
                                        </li>
                                        <li><a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li><a href="ui-collections.html">Collections</a>
                                        </li>
                                        <li><a href="ui-accordions.html">Accordian</a>
                                        </li>                                        
                                        <li><a href="ui-navbar.html">Navbar</a>
                                        </li>
                                        <li><a href="ui-pagination.html">Pagination</a>
                                        </li>
                                        <li><a href="ui-preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li><a href="ui-media.html">Media</a>
                                        </li>
                                        <li><a href="ui-toasts.html">Toasts</a>
                                        </li>
                                        <li><a href="ui-tooltip.html">Tooltip</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="table-basic.html">Basic Tables</a>
                                        </li>
                                        <li><a href="table-data.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li><a href="form-layouts.html">Form Layouts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                                <div class="collapsible-body">
                                    <ul>                                        
                                        <li><a href="page-login.html">Login</a>
                                        </li>
                                        <li><a href="page-register.html">Register</a>
                                        </li>
                                        <li><a href="page-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li><a href="page-invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="page-404.html">404</a>
                                        </li>
                                        <li><a href="page-500.html">500</a>
                                        </li>
                                        <li><a href="page-blank.html">Blank</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="charts-chartjs.html">Chart JS</a>
                                        </li>
                                        <li><a href="charts-chartist.html">Chartist</a>
                                        </li>
                                        <li><a href="charts-morris.html">Morris Charts</a>
                                        </li>
                                        <li><a href="charts-xcharts.html">xCharts</a>
                                        </li>
                                        <li><a href="charts-flotcharts.html">Flot Charts</a>
                                        </li>
                                        <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                    <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
                    </li>
                    <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
                    </li>
                    <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
                    </li>
                    <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
                    </li>                    
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">                            
                                    <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                                </div>
                            </div>
                        </div>
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

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">
                            <div class="col s12 m8 l8">
                                <div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <div>
                                                <span class="chart-title white-text">Revenue</span>
                                                <div class="chart-revenue cyan darken-2 white-text">
                                                    <p class="chart-revenue-total">$4,500.85</p>
                                                    <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                                </div>
                                                <div class="switch chart-revenue-switch right">
                                                    <label class="cyan-text text-lighten-5">
                                                      Month
                                                      <input type="checkbox">
                                                      <span class="lever"></span> Year
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="trending-line-chart-wrapper">
                                                <canvas id="trending-line-chart" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="col s12 m3 l3">
                                            <div id="doughnut-chart-wrapper">
                                                <canvas id="doughnut-chart" height="200"></canvas>
                                                <div class="doughnut-chart-status">4500
                                                    <p class="ultra-small center-align">Sold</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m2 l2">
                                            <ul class="doughnut-chart-legend">
                                                <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                                                <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                                                <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m5 l6">
                                            <div class="trending-bar-chart-wrapper">
                                                <canvas id="trending-bar-chart" height="90"></canvas>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="month">Month</th>
                                                    <th data-field="item-sold">Item Sold</th>
                                                    <th data-field="item-price">Item Price</th>
                                                    <th data-field="total-profit">Total Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>January</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>February</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>March</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>April</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>May</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>June</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>July</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>August</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Septmber</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Octomber</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>November</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>December</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

                            <div class="col s12 m4 l4">
                                <div class="card">
                                    <div class="card-move-up teal waves-effect waves-block waves-light">
                                        <div class="move-up">
                                            <p class="margin white-text">Browser Stats</p>
                                            <canvas id="trending-radar-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-content  teal darken-2">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="line-chart-wrapper">
                                            <p class="margin white-text">Revenue by country</p>
                                            <canvas id="line-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by country <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="country-name">Country Name</th>
                                                    <th data-field="item-sold">Item Sold</th>
                                                    <th data-field="total-profit">Total Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>USA</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>UK</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Canada</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Brazil</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>

                                                    <td>India</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>France</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Austrelia</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Russia</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--chart dashboard end-->
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

    <!-- chartist -->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins/jvectormap/vectormap-script.js"></script>
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/plugins.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 3000);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5500);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 18000);
    });
    
    </script>
</body>

</html>