<div class="row">
    <div class="col-md-12">
            <!-- Pemberitahuan berhasil atau gagalnya proses  -->
            <?php
            $error = $this->session->flashdata('error');
            if ($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?php echo $error; ?> <a href="#" class="alert-link">Error!</a>.
                </div> 
            <?php } ?>
            <?php
            $success = $this->session->flashdata('success');
            if ($success) {
            ?>
            <!-- Pemberitahuan berhasil atau gagalnya proses  -->
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?php echo $success; ?> <a href="#" class="alert-link">Success!</a>.
                </div> 
            <?php } ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Event Event Listing</h3>
            	<div class="box-tools">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_event" onclick="update_event()">Tambah Event <span class="m-l-5"><i class="fa fa-plus"></i></span></button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Name Event</th>
						<th>Lokasi</th>
						<th>Pembicara</th>
						<th>Tanggal Mulai</th>
						<th>Jumlah Tiket</th>
						<th>Deskripsi Acara</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($event_event as $e){ ?>
                    <tr>
						<td><?php echo $e['name_event']; ?></td>
						<td><?php echo $e['lokasi']; ?></td>
						<td><?php echo $e['pembicara']; ?></td>
						<td><?php echo $e['tanggal_mulai']; ?></td>
						<td><?php echo $e['jumlah_tiket']; ?></td>
						<td><?php echo $e['deskripsi_acara']; ?></td>
						<td>
                            <button 
                                type="button" 
                                class="btn btn-info btn-xs"
                                data-toggle="modal" 
                                data-target="#tambah_event" 
                                onclick="update_event(<?php echo $e['id_event'];?>)">
                                <span class="fa fa-pencil"></span> Edit
                            </button>
                            <a href="<?php echo site_url('event_event/remove/'.$e['id_event']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete <?php echo $e['name_event']?> ?')"><span class="fa fa-trash"></span> Delete</a>
                            <button 
                                type="button" 
                                class="btn btn-info btn-xs"
                                data-toggle="modal" 
                                data-target="#tampil_acara" 
                                onclick="tampil_acara(<?php echo $e['id_event'];?>)">
                                <span class="fa fa-eye"></span> Preview
                            </button>
                            <button 
                                type="button" 
                                class="btn btn-info btn-xs"
                                data-toggle="modal" 
                                data-target="#tampil_peserta" 
                                onclick="tampil_peserta(<?php echo $e['id_event'];?>)">
                                <span class="fa fa-eye"></span> Peserta
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="tambah_event" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="box-header with-border">
          	<h3 class="box-title">Tambah/Edit Event</h3>
        </div>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="post" id="form_event" name="form_event" accept-charset="utf-8" action="<?php echo site_url('event_event/add'); ?>">
            <div class="box-body">
                <div class="row clearfix">
                <input type="hidden" name="id_user" class="form-control" id="id_user" value="<?php echo $this->session->userdata['logged_in']['id_user'];?>" />
                <input type="hidden" name="id_event" class="form-control" id="id_event" />
                    <div class="col-md-6">
                        <label for="name_event" class="control-label"><span class="text-danger">*</span>Name Event</label>
                        <div class="form-group">
                            <input type="text" name="name_event" class="form-control" id="name_event" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="lokasi" class="control-label"><span class="text-danger">*</span>Lokasi</label>
                        <div class="form-group">
                            <input type="text" name="lokasi" class="form-control" id="lokasi" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="pembicara" class="control-label"><span class="text-danger">*</span>Pembicara</label>
                        <div class="form-group">
                            <input type="text" name="pembicara" class="form-control" id="pembicara" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_mulai" class="control-label"><span class="text-danger">*</span>Tanggal Mulai</label>
                        <div class="form-group">
                            <input type="text" name="tanggal_mulai" class="has-datepicker form-control" id="tanggal_mulai" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="durasi_hari" class="control-label"><span class="text-danger">*</span>Durasi Hari</label>
                        <div class="form-group">
                            <input type="text" name="durasi_hari" class="form-control" id="durasi_hari" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jam_mulai" class="control-label"><span class="text-danger">*</span>Jam Mulai</label>
                        <div class="form-group">
                            <input type="text" name="jam_mulai" class="form-control" id="jam_mulai" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jam_selesai" class="control-label"><span class="text-danger">*</span>Jam Selesai</label>
                        <div class="form-group">
                            <input type="text" name="jam_selesai" class="form-control" id="jam_selesai" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jumlah_tiket" class="control-label"><span class="text-danger">*</span>Jumlah Tiket</label>
                        <div class="form-group">
                            <input type="text" name="jumlah_tiket" class="form-control" id="jumlah_tiket" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="poster" class="control-label">Poster</label>
                        <div class="form-group">
                            <input type="text" style="border:none;" id="filee" name="filee" readonly/>
                            <input type='file'  class="btn btn-primary btn-file" name='poster' size='20' id="poster" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="deskripsi_acara" class="control-label"><span class="text-danger">*</span>Deskripsi Acara</label>
                        <div class="form-group">
                            <textarea name="deskripsi_acara" class="form-control" id="deskripsi_acara"><?php echo $this->input->post('deskripsi_acara'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('deskripsi_acara');?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Save
            </button>
        </form>
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Tutup Modal -->
<<<<<<< HEAD
<!-- Modal -->
<div id="tampil_peserta" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="box-header with-border">
          	<h3 class="box-title">Daftar peserta acara</h3>
        </div>
      </div>
      <div class="modal-body">
      <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Name Peserta</th>
                        <th>Aksi</th>
                    </tr>
                    <tbody id="data">
                    <tr>
						<!-- <td id="data" name="data"></td>
						<td>
                            <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete ?')"><span class="fa fa-trash"></span> Delete</a>
                        </td> -->
                    </tr>
                    </tbody>
                </table>
                                
            </div>
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Tutup Modal -->
<div id="tampil_acara" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="box-header with-border">
          	<h3 class="box-title">Detail Acara</h3>
        </div>
      </div>
      <div class="modal-body">
      <div class="box-body">
      <div id="photo_detail_acara"></div>
      <div id="nama_detail-acara"></div>      
      </div>
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Tutup Modal -->
=======
>>>>>>> 3b8e852fb4d991bf69e3a22095f177bed0acb903

<script type="text/javascript">
    function update_event(id) {
        $('#form_event')[0].reset();
        if(id){
            $.ajax({
                url : "<?php echo base_url();?>event_event/edit_event_com/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="name_event"]').val(data.name_event);
                    $('[name="id_event"]').val(data.id_event);
                    $('[name="lokasi"]').val(data.lokasi);
                    $('[name="pembicara"]').val(data.pembicara);
                    $('[name="tanggal_mulai"]').val(data.tanggal_mulai);
                    $('[name="durasi_hari"]').val(data.durasi_hari);
                    $('[name="jam_mulai"]').val(data.jam_mulai);
                    $('[name="jam_selesai"]').val(data.jam_selesai);
                    $('[name="jumlah_tiket"]').val(data.jumlah_tiket);
                    $('[name="deskripsi_acara"]').val(data.deskripsi_acara);
                    $('[name="filee"]').val(data.poster);
                    //document.getElementById("filee").innerHTML = .val(data.poster);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    }
    function tampil_peserta(id_event) {
        $.ajax({
            url : "<?php echo base_url();?>event_event/tampil_peserta/" + id_event,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                for (var i = 0; i < data.length; i++) {
                    // var element = array[i];
                    var name = data[i].name;
                    console.log(name)
                    //var email = $("#email").val();
                    var markup = "<tr><td>" + name + "</td><td>" + name + "</td></tr>";
                    $("tbody#data").append(markup);
                }
                //$("tbody#data").replace('<p>wait</p>');
                // data.forEach(function(datax) {
                //     var name = datax.name;
                //     //var email = $("#email").val();
                //     var markup = "<tr><td>" + name + "</td><td>" + name + "</td></tr>";
                //     $("tbody#data").append(markup);
                //     markup.remove();
                // }, this);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
       
    }
    function tampil_acara(id) {    
        $.ajax({
            url : "<?php echo base_url();?>event_event/edit_event_com/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                name = data.name_event
                document.getElementById("nama_detail_acara").innerHTML = "<h1>data</h1>";
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
<<<<<<< HEAD
=======
        } else {
            data.name_event = '';
            $('[id="name_event"]').val(data.name_event);
            $('[name="lokasi"]').val(data.lokasi);
            $('[name="pembicara"]').val(data.pembicara);
            $('[name="tanggal_mulai"]').val(data.tanggal_mulai);
            $('[name="durasi_hari"]').val(data.durasi_hari);
            $('[name="jam_mulai"]').val(data.jam_mulai);
            $('[name="jam_selesai"]').val(data.jam_selesai);
            $('[name="jumlah_tiket"]').val(data.jumlah_tiket);
            $('[name="deskripsi_acara"]').val('');
        }
    
>>>>>>> 3b8e852fb4d991bf69e3a22095f177bed0acb903
    }
</script>
				