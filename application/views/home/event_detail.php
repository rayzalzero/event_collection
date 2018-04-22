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
                    <img src="<?= site_url('poster/'.$detail['poster'].'');?>" 
                        class="align-left thumbnail" style="width:500px; height:500px;" alt="image">
                </div>
                <div class="span6">
                    <h2><?=($detail['name_event']);?></h2>
                    <p class="lead"><?= $detail['deskripsi_acara'];?></p>

                    <ul class="project-info">
                        <li><h6>Pembicara:</h6><?= $detail['pembicara'];?></li>
                        <li><h6>Lokasi:</h6><?= $detail['lokasi'];?></li>
                        <li><h6>Tanggal:</h6><?= $detail['tanggal_mulai'];?></li>
                        <li><h6>Waktu Mulai:</h6><?= $detail['jam_mulai'];?></li>
                        <li><h6>Waktu Selesai:</h6><?= $detail['jam_selesai'];?></li>
                        <li><h6>Jumlah Tiket:</h6><?= $detail['sisa_tiket'];?> / <?=($detail['jumlah_tiket']);?></li>
                    </ul>
                    <?php if ($detail['sisa_tiket'] !== 0) { ?>
                        <button type="button" class="btn btn-info btn-lg daftar" data-toggle="modal" data-target="#daftar">Daftar</button>                                            
                    <?php } else {?>
                        <span class="badge badge-warning">Tiket Penuh</span>
                    <?php } ?>
                    <a href="<?= site_url('home/');?>" class="pull-right"><i class="icon-arrow-left"></i>Back to Home</a>
                </div>
            </div>
        </div><!-- End gallery-single-->
        
        <!-- Modal -->
        <div id="daftar" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header <?= $detail['id_event'];?></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <label class="control-label" for="email">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Nama anda" name="name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label" for="pwd">Address:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="address" placeholder="Alamat anda" name="address">
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default submit-registration">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div><!-- End container row -->
    </div> <!-- End Container -->
</body>
<?php include_once('footer.php')?>
<script>
   
    $('.daftar').click(function () { 
        console.log('daftar');
    });

    $('.submit-registration').click(function () { 
        var url= '<?= base_url('/home/registration_event/'.$detail['id_event'])?>';
        $.ajax({
            type: "post",
            url: url,
            success: function (response) {
                alert(response);
            }
        });
    });
</script>