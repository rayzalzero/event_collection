<div class="row">
    <div class="col-md-12">
        <!-- Pemberitahuan berhasil atau gagalnya proses  -->
        <?php 
            $error = $this->session->flashdata('error'); 
            if ($error) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <?= $error; ?>
                <a href="#" class="alert-link">Error!</a>.
            </div>
            <?php } ?>
            <?php
            $success = $this->session->flashdata('success');
            if ($success) { ?>
                <!-- Pemberitahuan berhasil atau gagalnya proses  -->
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?= $success; ?>
                    <a href="#" class="alert-link">Success!</a>.
                </div>
                <?php } ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Acara Akakom</h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_event" onclick="update_event()">Tambah Event
                                <span class="m-l-5">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="dataTable table table-striped">
                            <thead>
                                <tr>
                                    <th>Name Event</th>
                                    <th>Lokasi</th>
                                    <th>Pembicara</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Status</th>
                                    <th class="action">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($event_event as $e){ ?>
                                <tr>
                                    <td>
                                        <?= $e['name_event']; ?>
                                    </td>
                                    <td>
                                        <?= $e['lokasi']; ?>
                                    </td>
                                    <td>
                                        <?= $e['pembicara']; ?>
                                    </td>
                                    <td>
                                        <?= $e['tanggal_mulai']; ?>
                                    </td>
                                    <td>
                                        <?= $e['jumlah_tiket']; ?>
                                    </td>
                                    <td>
                                        <?= $e['status'] == 1 ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-warning">Non Aktif</span>'; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#tambah_event" onclick="update_event(<?= $e['id_event'];?>)">
                                            <span class="fa fa-pencil"></span> Edit
                                        </button>
                                        <a href="<?= site_url('event_event/remove/'.$e['id_event']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete <?= $e['name_event']?> ?')">
                                            <span class="fa fa-trash"></span> Delete</a>
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#tampil_acara" onclick="tampil_acara(<?= $e['id_event'];?>)">
                                            <span class="fa fa-eye"></span> Preview
                                        </button>
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#tampil_peserta" onclick="tampil_peserta(<?= $e['id_event'];?>)">
                                            <span class="fa fa-eye"></span> Peserta
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
</div>

<div id="tambah_event" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah/Ubah Event</h3>
                </div>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" id="form_event" name="form_event" accept-charset="utf-8" action="<?= site_url('event_event/add'); ?>">
                    <div class="box-body">
                        <div class="row clearfix">
                            <input type="hidden" name="id_user" class="form-control" id="id_user" value="<?= $this->session->userdata['logged_in']['id_user'];?>"
                            />
                            <input type="hidden" name="id_event" class="form-control" id="id_event" />
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Name Event</label>
                                <div class="form-group">
                                    <input type="text" name="name_event" class="form-control" id="name_event" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Lokasi</label>
                                <div class="form-group">
                                    <input type="text" name="lokasi" class="form-control" id="lokasi" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Pembicara</label>
                                <div class="form-group">
                                    <input type="text" name="pembicara" class="form-control" id="pembicara" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Tanggal Mulai</label>
                                <div class="form-group">
                                    <input type="text" name="tanggal_mulai" class="has-datepicker form-control" id="tanggal_mulai" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Durasi Hari</label>
                                <div class="form-group">
                                    <input type="text" name="durasi_hari" class="form-control" id="durasi_hari" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Jam Mulai</label>
                                <div class="form-group">
                                    <input type="text" name="jam_mulai" class="form-control" readonly id="jam_mulai" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Jam Selesai</label>
                                <div class="form-group">
                                    <input type="text" name="jam_selesai" class="form-control" readonly id="jam_selesai" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Jumlah Tiket</label>
                                <div class="form-group">
                                    <input type="text" name="jumlah_tiket" class="form-control" id="jumlah_tiket" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Poster</label>
                                <div class="form-group">
                                    <input type="text" style="border:none;" id="filee" name="filee" readonly/>
                                    <input type='file' class="btn btn-primary btn-file" name='poster' size='20' id="poster" required />
                                </div>
                            </div>
                            <?php if ($this->session->userdata['logged_in']['level'] == 0) {?>
                            <div class="col-md-6">
                                <label class="control-label">Status</label>
                                <div class="form-group">
                                    <select name="status" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Non Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <?php }?>
                            <div class="col-md-6">
                                <label class="control-label">
                                    <span class="text-danger">*</span>Deskripsi Acara</label>
                                <div class="form-group">
                                    <textarea name="deskripsi_acara" class="form-control" id="deskripsi_acara"><?= $this->input->post('deskripsi_acara'); ?></textarea>
                                    <span class="text-danger">
                                        <?= form_error('deskripsi_acara');?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Simpan
                </button>
                </form>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>

<div id="tampil_peserta" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar peserta acara</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="box-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name Peserta</th>
                                <th>Instansi</th>
                            </tr>
                        </thead>
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
                <div class="box-body" id="box_tampil_acara">

                </div>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function update_event(id) {
        $('#form_event')[0].reset();
        if (id) {
            $.ajax({
                url: "<?= base_url();?>event_event/edit_event_com/" + id,
                type: "GET",
                dataType: "JSON",
                success: function (data) {
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
                    $('[name="status"]').attr('selected');
                    $("select option[value="+data.status+"]").attr("selected","selected");
                    $('[name="filee"]').val(data.poster);
                    //document.getElementById("filee").innerHTML = .val(data.poster);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
    }
    function tampil_peserta(id_event) {
        $("tbody#data").empty();
        $.ajax({
            url: "<?= base_url();?>event_event/tampil_peserta/" + id_event,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                if (data == 0) {
                    var kosong = "<h4>Belom ada peserta...!</h4>";
                    $("tbody#data").append(kosong);
                }
                for (var i = 0; i < data.length; i++) {
                    var markup = "<tr><td>" + data[i].name + "</td><td>" + data[i].instansi + "</td></tr>";
                    $("tbody#data").append(markup);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });

    }
    function tampil_acara(id) {
        $("#box_tampil_acara").empty();
        $.ajax({
            url: "<?= base_url();?>event_event/edit_event_com/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                var url = "<?= site_url('poster/'); ?>";
                $('#box_tampil_acara').append('<img src=' + url + data.poster + ' alt="' + data.name_event + '" width="500px" height="500px">');
                $('#box_tampil_acara').append('<h1>' + data.name_event + '</h1>');
                $('#box_tampil_acara').append('<p>Acara pada tanggal ' + data.tanggal_mulai + '</p>');
                $('#box_tampil_acara').append('<p>jam mulai ' + data.jam_mulai + ' sampai ' + data.jam_selesai + '</p>');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    var mulai_jam = $('#jam_mulai');
    mulai_jam.clockpicker({
        autoclose: true
    });

    var selesai_jam = $('#jam_selesai');
    selesai_jam.clockpicker({
        autoclose: true
    });

</script>