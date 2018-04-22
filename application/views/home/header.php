<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Event Akakom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= site_url('assets/users/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?= site_url('assets/users/css/bootstrap-responsive.css');?>">
    <link rel="stylesheet" href="<?= site_url('assets/users/css/prettyPhoto.css');?>">
    <link rel="stylesheet" href="<?= site_url('assets/users/css/flexslider.css');?>">
    <link rel="stylesheet" href="<?= site_url('assets/users/css/custom-styles.css');?>">

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
    
    <!-- JS -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="<?= site_url('assets/users/js/bootstrap.js');?>"></script>
    <script src="<?= site_url('assets/users/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?= site_url('assets/users/js/jquery.flexslider.js');?>"></script>
    <script src="<?= site_url('assets/users/js/jquery.custom.js');?>"></script>
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

<body>
<div class="container main-container">
    <div class="row header"><!-- Begin Header -->
      <!-- Logo -->
        <div class="span5 logo">
            <a href="<?= site_url('/');?>"><img src="<?= site_url('assets/users/img/akakom.png');?>" alt="" /></a>
        </div>
      <!-- Main Navigation -->
      <div class="span7 navigation">
          <div class="navbar hidden-phone">
          <ul class="nav">
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">Home <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="index.htm">Full Page</a></li>
                  <li><a href="index-gallery.htm">Gallery Only</a></li>
                  <li><a href="index-slider.htm">Slider Only</a></li>
              </ul>
          </li>
         <li><a href="features.htm">Features</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="page-full-width.htm">Full Width</a></li>
                  <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                  <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                  <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
              </ul>
          </li>
           <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                  <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                  <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                  <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                  <li><a href="gallery-single.htm">Gallery Single</a></li>
              </ul>
           </li>
           <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="blog-style1.htm">Blog Style 1</a></li>
                  <li><a href="blog-style2.htm">Blog Style 2</a></li>
                  <li><a href="blog-style3.htm">Blog Style 3</a></li>
                  <li><a href="blog-style4.htm">Blog Style 4</a></li>
                  <li><a href="blog-single.htm">Blog Single</a></li>
              </ul>
           </li>
           <li><a href="page-contact.htm">Contact</a></li>
                <ul class="nav">                        
                    <?php if (!isset($this->session->userdata['logged_in'])) { ?>
                        <li><a href="<?= site_url('user_authentication/login');?>">Login</a></li>
                    <?php } elseif ($this->session->userdata['logged_in']['level'] == 2) { ?>
                        <li><a href="<?= site_url('user_authentication/logout');?>">Logout <?= $this->session->userdata['logged_in']['username'] ?></a></li>
                    <?php } elseif ($this->session->userdata['logged_in']['level'] == 1) { ?>
                        <li><a href="<?= site_url('user_authentication/logout');?>"><span class="badge badge-warning">Mode Creator</span> Logout <?= $this->session->userdata['logged_in']['username'] ?></a></li>
                    <?php } else { ?>
                        <li><a href="<?= site_url('user_authentication/login');?>"><span class="badge badge-warning">Mode Admin</span> Logout <?= $this->session->userdata['logged_in']['username'] ?></a></li>
                    <?php } ?>
                </ul>
          </div>
          <!-- Mobile Nav -->
          <form action="#" id="mobile-nav" class="visible-phone">
              <div class="mobile-nav-select">
              <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                  <option value="">Navigate...</option>
                  <option value="index.htm">Home</option>
                      <option value="index.htm">- Full Page</option>
                      <option value="index-gallery.htm">- Gallery Only</option>
                      <option value="index-slider.htm">- Slider Only</option>
                  <option value="features.htm">Features</option>
                  <option value="page-full-width.htm">Pages</option>
                      <option value="page-full-width.htm">- Full Width</option>
                      <option value="page-right-sidebar.htm">- Right Sidebar</option>
                      <option value="page-left-sidebar.htm">- Left Sidebar</option>
                      <option value="page-double-sidebar.htm">- Double Sidebar</option>
                  <option value="gallery-4col.htm">Gallery</option>
                      <option value="gallery-3col.htm">- 3 Column</option>
                      <option value="gallery-4col.htm">- 4 Column</option>
                      <option value="gallery-6col.htm">- 6 Column</option>
                      <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                      <option value="gallery-single.htm">- Gallery Single</option>
                  <option value="blog-style1.htm">Blog</option>
                      <option value="blog-style1.htm">- Blog Style 1</option>
                      <option value="blog-style2.htm">- Blog Style 2</option>
                      <option value="blog-style3.htm">- Blog Style 3</option>
                      <option value="blog-style4.htm">- Blog Style 4</option>
                      <option value="blog-single.htm">- Blog Single</option>
                  <option value="page-contact.htm">Contact</option>
              </select>
              </div>
              </form>
          
      </div>

    </div><!-- End Header -->
</body>