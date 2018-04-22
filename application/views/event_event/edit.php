<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event Event Edit</h3>
            </div>
			<?= form_open_multipart('event_event/edit/'.$event_event['id_event']); ?>
			<div class="box-body">
				<div class="row clearfix">
							<input type="hidden" name="id_user" value="<?= ($this->input->post('id_user') ? $this->input->post('id_user') : $event_event['id_user']); ?>" class="form-control" id="id_user" />
					<div class="col-md-6">
						<label for="name_event" class="control-label"><span class="text-danger">*</span>Name Event</label>
						<div class="form-group">
							<input type="text" name="name_event" value="<?= ($this->input->post('name_event') ? $this->input->post('name_event') : $event_event['name_event']); ?>" class="form-control" id="name_event" />
							<span class="text-danger"><?= form_error('name_event');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasi" class="control-label"><span class="text-danger">*</span>Lokasi</label>
						<div class="form-group">
							<input type="text" name="lokasi" value="<?= ($this->input->post('lokasi') ? $this->input->post('lokasi') : $event_event['lokasi']); ?>" class="form-control" id="lokasi" />
							<span class="text-danger"><?= form_error('lokasi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pembicara" class="control-label"><span class="text-danger">*</span>Pembicara</label>
						<div class="form-group">
							<input type="text" name="pembicara" value="<?= ($this->input->post('pembicara') ? $this->input->post('pembicara') : $event_event['pembicara']); ?>" class="form-control" id="pembicara" />
							<span class="text-danger"><?= form_error('pembicara');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_mulai" class="control-label"><span class="text-danger">*</span>Tanggal Mulai</label>
						<div class="form-group">
							<input type="text" name="tanggal_mulai" value="<?= ($this->input->post('tanggal_mulai') ? $this->input->post('tanggal_mulai') : $event_event['tanggal_mulai']); ?>" class="has-datepicker form-control" id="tanggal_mulai" />
							<span class="text-danger"><?= form_error('tanggal_mulai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="durasi_hari" class="control-label"><span class="text-danger">*</span>Durasi Hari</label>
						<div class="form-group">
							<input type="number" name="durasi_hari" value="<?= ($this->input->post('durasi_hari') ? $this->input->post('durasi_hari') : $event_event['durasi_hari']); ?>" class="form-control" id="durasi_hari" />
							<span class="text-danger"><?= form_error('durasi_hari');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_mulai" class="control-label"><span class="text-danger">*</span>Jam Mulai</label>
						<div class="form-group">
							<input type="text" name="jam_mulai" value="<?= ($this->input->post('jam_mulai') ? $this->input->post('jam_mulai') : $event_event['jam_mulai']); ?>" class="form-control" id="jam_mulai" />
							<span class="text-danger"><?= form_error('jam_mulai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger">*</span>Jam Selesai</label>
						<div class="form-group">
							<input type="text" name="jam_selesai" value="<?= ($this->input->post('jam_selesai') ? $this->input->post('jam_selesai') : $event_event['jam_selesai']); ?>" class="form-control" id="jam_selesai" />
							<span class="text-danger"><?= form_error('jam_selesai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah_tiket" class="control-label"><span class="text-danger">*</span>Jumlah Tiket</label>
						<div class="form-group">
							<input type="text" name="jumlah_tiket" value="<?= ($this->input->post('jumlah_tiket') ? $this->input->post('jumlah_tiket') : $event_event['jumlah_tiket']); ?>" class="form-control" id="jumlah_tiket" />
							<span class="text-danger"><?= form_error('jumlah_tiket');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="poster" class="control-label">Poster</label>
						<div class="form-group">
							<img src="<?= site_url('/poster/'.$event_event['poster'].'');?>" alt="Poster" height="100" width="100">
							<input type='file'  class="btn btn-primary btn-file" name='poster' size='20' value="<?= $this->input->post('poster'); ?>" id="poster"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deskripsi_acara" class="control-label"><span class="text-danger">*</span>Deskripsi Acara</label>
						<div class="form-group">
							<textarea name="deskripsi_acara" class="form-control" id="deskripsi_acara"><?= ($this->input->post('deskripsi_acara') ? $this->input->post('deskripsi_acara') : $event_event['deskripsi_acara']); ?></textarea>
							<span class="text-danger"><?= form_error('deskripsi_acara');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?= form_close(); ?>
		</div>
    </div>
</div>