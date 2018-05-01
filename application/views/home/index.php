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
                        <?php foreach($event_event as $es){ ?>
                            <li>
                                <a href="<?= site_url('/home/event_detail/'.$es['id_event'].'');?>">
                                    <img src="<?= site_url('poster/'.$es['poster'].'');?>" alt="slider" class="rounded float-center" style="width:500px; height:500px;"/>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!-- Headline Text -->
            <div class="span4">
                <h3>Welcome 
                </br> to 
                </br> Event Collection
                </br> STMIK Akakom
                </br> Yogyakarta
                </br> Indonesia</h3>
            </div>
        </div>
        <!-- End Headline -->
        <div class="row gallery-row">
            <!-- Begin Gallery Row -->
            <div class="span12">
                <h5 class="title-bg">Recent Event AND NEW EVENT
                    <small>That Pictures Bellow</small>
                </h5>
                <!-- Gallery Thumbnails -->
                <div class="row clearfix no-margin">
                    <ul class="gallery-post-grid holder">
                    <?php foreach($event_event as $e){ ?>
                        <!-- Gallery Item 1 -->
                        <li class="span3 gallery-item" data-id="id-1" data-type="illustration">
                            <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="<?= site_url('poster/'.$e['poster'].'');?>" class="item-zoom-link lightbox" title="<?= $e['name_event']?>" data-rel="prettyPhoto"></a>
                                 <a href="<?= site_url('/home/event_detail/'.$e['id_event'].'');?>" class="item-details-link"></a>
                            </span>
                            </span>
                            <a href="<?= site_url('/home/event_detail/'.$e['id_event'].'');?>">
                                <img src="<?= site_url('poster/'.$e['poster'].'');?>" alt="Gallery" style="width:300px; height:220px;">
                            </a>
                            <span class="project-details"><a href="#"><?= $e['name_event'] ?></a><?= $e['pembicara']?></span>
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