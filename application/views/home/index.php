<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Event Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo site_url('template/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('template/css/bootstrap-responsive.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('template/css/prettyPhoto.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('template/css/flexslider.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('template/css/custom-styles.css');?>">

   

    <!-- Favicons
================================================== -->
    <link rel="shortcut icon" href="<?php echo site_url('template/img/e.ico');?>">
    <link rel="apple-touch-icon" href="<?php echo site_url('template/img/apple-touch-icon.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('template/img/apple-touch-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('template/img/apple-touch-icon-114x114.png');?>">

    <!-- JS
================================================== -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="<?php echo site_url('template/js/bootstrap.js');?>"></script>
    <script src="<?php echo site_url('template/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo site_url('template/js/jquery.flexslider.js');?>"></script>
    <script src="<?php echo site_url('template/js/jquery.custom.js');?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#btn-blog-next").click(function() {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function() {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function() {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function() {
                $('#clientCarousel').carousel('prev')
            });

        });

        $(window).load(function() {

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container">

        <div class="row header">
            <!-- Begin Header -->

            <!-- Logo
        ================================================== -->
            <div class="span5 logo">
                <a href="index.htm"><img src="<?php echo site_url('template/img/download.png');?>" alt="" /></a>
                
            </div>

            <!-- Main Navigation
        ================================================== -->
            <div class="span7 navigation">
                <div class="navbar hidden-phone">

                    <ul class="nav">
                       
                        <li><a href="<?php echo site_url('user_authentication/login');?>">Login</a></li>
                    </ul>

                </div>

                <!-- Mobile Nav
            ================================================== -->
                <form action="#" id="mobile-nav" class="visible-phone">
                    <div class="mobile-nav-select">
                        <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigasi</option>
                    <option value="<?php echo site_url('user_authentication/login');?>">Login</option>
                       >
                </select>
                    </div>
                </form>

            </div>

        </div>
        <!-- End Header -->

        <div class="row headline">
            <!-- Begin Headline -->

            <!-- Slider Carousel
        ================================================== -->
            <div class="span8">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <a href="gallery-single.htm"><img src="<?php echo site_url('template/img/gallery/1.jpg');?>" alt="slider" /></a>
                        </li>
                        <li>
                            <a href="gallery-single.htm"><img src="<?php echo site_url('template/img/gallery/2.jpg');?>" alt="slider" /></a>
                        </li>
                        <li>
                            <a href="gallery-single.htm"><img src="<?php echo site_url('template/img/gallery/3.jpg');?>" alt="slider" /></a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <!-- Headline Text
        ================================================== -->
            <div class="span4">
                <h3>Welcome to Event Collection. <br /> Sistem Informasi Event STMIK Akakom.</h3>
                <p class="lead"><i>Lets Join Us</i>.</p>
                <p></p>
                <a href="#"><i class="icon-plus-sign"></i>Read More</a>
            </div>
        </div>
        <!-- End Headline -->

        <div class="row gallery-row">
            <!-- Begin Gallery Row -->

            <div class="span12">
                <h5 class="title-bg">Recent Event AND NEW EVENT
                    <small>That Pictures Bellow</small>
                    <button class="btn btn-mini btn-inverse hidden-phone" type="button">......</button>
                </h5>

                <!-- Gallery Thumbnails
        ================================================== -->
      
                <div class="row clearfix no-margin">
                    <ul class="gallery-post-grid holder">
                   
        <?php foreach($event_event as $e){ ?>
                        <!-- Gallery Item 1 -->
                        <li class="span3 gallery-item" data-id="id-1" data-type="illustration">
                            <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="<?php echo site_url('poster/'.$e['poster'].'');?>" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                 <a href="<?php echo site_url('/home/gallery/'.$e['id_event'].'');?>" class="item-details-link"></a>
                            </span>
                            </span>
                           
                            <a href="<?php echo site_url('/home/gallery/'.$e['id_event'].'');?>"><img src="<?php echo site_url('poster/'.$e['poster'].'');?>" alt="Gallery" style="width:300px; height:220px;"></a>
                            <span class="project-details"><a href="gallery-single.htm"><?php print_r($e['name_event']);?></a><?php print_r($e['pembicara']);?></span>
                        </li>
        <?php } ?>
                        
                      
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
   


    <!-- Footer Area
        ================================================== -->

    <div class="footer-container">
        <!-- Begin Footer -->
        <div class="container">
            <div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                    <img src="<?php echo site_url('template/img/piccolo-footer-logo.png');?>" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>......</strong><br />
                        ......................<br />
                        ......................<br />
                    </address>
                    <ul class="social-icons">
                        <li>
                            <a href="#" class="social-icon facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="social-icon twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="social-icon dribble"></a>
                        </li>
                        <li>
                            <a href="#" class="social-icon rss"></a>
                        </li>
                        <li>
                            <a href="#" class="social-icon forrst"></a>
                        </li>
                    </ul>
                </div>
             

            <div class="row">
                <!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">????????????????????????????????????</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">????????</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="#">????????</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">
                                ???????</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">?????????</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">?????????</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sub Footer -->

        </div>
    </div>
    <!-- End Footer -->

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>

</html>