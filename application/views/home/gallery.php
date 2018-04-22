<?php include_once('header.php')?>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <!-- Page Content --> 
    <div class="row">
        <!-- Gallery Items --> 
        <div class="span12 gallery-single">
            <div class="row">
                <div class="span6">
                    <img src="<?php print_r(site_url('poster/'.$detail['poster'].''));?>" 
                        class="align-left thumbnail" style="width:500px; height:500px;" alt="image">
                </div>
                <div class="span6">
                    <h2><?php print_r($detail['name_event']);?></h2>
                    <p class="lead"><?php print_r($detail['deskripsi_acara']);?></p>

                    <ul class="project-info">
                        <li><h6>Pembicara:</h6><?php print_r($detail['pembicara']);?></li>
                        <li><h6>Lokasi:</h6><?php print_r($detail['lokasi']);?></li>
                        <li><h6>Tanggal:</h6><?php print_r($detail['tanggal_mulai']);?></li>
                        <li><h6>Waktu Mulai:</h6><?php print_r($detail['jam_mulai']);?></li>
                        <li><h6>Waktu Selesai:</h6><?php print_r($detail['jam_selesai']);?></li>
                        <li><h6>JUmlah Tiket:</h6><?php print_r($detail['jumlah_tiket']);?></li>
                    </ul>
                    <button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                    <a href="<?= site_url('home/');?>" class="pull-right"><i class="icon-arrow-left"></i>Back to Home</a>
                </div>
            </div>
        </div><!-- End gallery-single-->
    </div><!-- End container row -->
    </div> <!-- End Container -->
</body>
<?php include_once('footer.php')?>
