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
                    <?php if (empty($this->session->userdata['logged_in']['id_user'])) { ?>
                        <a href="<?= site_url('user_authentication/login')?>" >
                            <button type="button" class="btn btn-info btn-lg login">Login</button>
                        </a>
                    <?php }elseif ($detail['sisa_tiket'] !== 0) { ?>
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
                    <h4 class="modal-title">Pendaftaran Acara <?=($detail['name_event']);?></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <input type="checkbox" class="default" checked> Daftar Sesuai Data Anda<br>
                        <label class="control-label" for="email">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control daftar-form" id="name" placeholder="Nama anda" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Address:</label>
                        <div class="col-sm-10">     
                            <textarea class="form-control daftar-form" rows="5" id="address"placeholder="Alamat anda" name="address"></textarea>     
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Instansi:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control daftar-form" id="instansi" placeholder="Instansi anda" name="instansi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email:</label>
                        <div class="col-sm-10">          
                            <input type="email" class="form-control daftar-form" id="email" placeholder="Email anda" name="email">
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
    var dataUser;
    $('.daftar').click(function (e) { 
        e.preventDefault();
        var user_id = '<?= !empty($this->session->userdata['logged_in']['id_user']) ? $this->session->userdata['logged_in']['id_user'] : 0?>';
        var url = '<?= site_url('home/get_json_data/user/')?>';
        $.ajax({
            type: "GET",
            url: url + user_id,
            success: function (response) {
                dataUser = response;
                $('#name').val(dataUser.name);
                $('#email').val(dataUser.email);
                $('#instansi').val(dataUser.instansi);
                $('#alamat').val(dataUser.address);
            }
        });
    });
    $('.default').change(function (e) { 
        e.preventDefault();
        if ($('input.default').is(':checked')) {
            setUserDefault();
        }else{
            console.log('a');
            $('.daftar-form').val('');
        }
    });
    function setUserDefault() {
        $('#name').val(dataUser.name);
        $('#email').val(dataUser.email);
        $('#instansi').val(dataUser.instansi);
        $('#alamat').val(dataUser.address);
    }
    
    $('.submit-registration').click(function () { 
        var url= '<?= base_url('/home/registration_event/'.$detail['id_event'])?>';
        $.ajax({
            type: "post",
            url: url,
            success: function (response) {
                $.notify(response);
                $('#daftar').modal('hide');
            }
        });
    });
</script>