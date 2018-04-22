<?php include_once('header.php')?>
<body class="home">
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <div class="container">
        <div class="row headline">
            <!-- Begin Headline -->
            <!-- Slider Carousel -->
            <div class="span8">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <a href="gallery-single.htm"><img src="<?= site_url('assets/users/img/gallery/1.jpg');?>" alt="slider" /></a>
                        </li>
                        <li>
                            <a href="gallery-single.htm"><img src="<?= site_url('assets/users/img/gallery/2.jpg');?>" alt="slider" /></a>
                        </li>
                        <li>
                            <a href="gallery-single.htm"><img src="<?= site_url('assets/users/img/gallery/3.jpg');?>" alt="slider" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Headline Text -->
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
                <!-- Gallery Thumbnails -->
                <div class="row clearfix no-margin">
                    <ul class="gallery-post-grid holder">
                    <?php foreach($event_event as $e){ ?>
                        <!-- Gallery Item 1 -->
                        <li class="span3 gallery-item" data-id="id-1" data-type="illustration">
                            <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="<?= site_url('poster/'.$e['poster'].'');?>" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                 <a href="<?= site_url('/home/event_detail/'.$e['id_event'].'');?>" class="item-details-link"></a>
                            </span>
                            </span>
                            <a href="<?= site_url('/home/gallery/'.$e['id_event'].'');?>"><img src="<?= site_url('poster/'.$e['poster'].'');?>" alt="Gallery" style="width:300px; height:220px;"></a>
                            <span class="project-details"><a href="gallery-single.htm"><?php print_r($e['name_event']);?></a><?php print_r($e['pembicara']);?></span>
                        </li>
                    <?php } ?>  
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>
<?php include_once('footer.php')?>