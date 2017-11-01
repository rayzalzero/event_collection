<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event Event Add</h3>
            </div>
            <?php echo form_open('event_event/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">Id User</label>
						<div class="form-group">
							<input type="hidden" name="id_user" value="<?php echo $this->session->userdata['logged_in']['id_user'];?>" class="form-control" id="id_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name_event" class="control-label"><span class="text-danger">*</span>Name Event</label>
						<div class="form-group">
							<input type="text" name="name_event" value="<?php echo $this->input->post('name_event'); ?>" class="form-control" id="name_event" />
							<span class="text-danger"><?php echo form_error('name_event');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasi" class="control-label"><span class="text-danger">*</span>Lokasi</label>
						<div class="form-group">
							<input type="text" name="lokasi" value="<?php echo $this->input->post('lokasi'); ?>" class="form-control" id="lokasi" />
							<span class="text-danger"><?php echo form_error('lokasi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pembicara" class="control-label"><span class="text-danger">*</span>Pembicara</label>
						<div class="form-group">
							<input type="text" name="pembicara" value="<?php echo $this->input->post('pembicara'); ?>" class="form-control" id="pembicara" />
							<span class="text-danger"><?php echo form_error('pembicara');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_mulai" class="control-label"><span class="text-danger">*</span>Tanggal Mulai</label>
						<div class="form-group">
							<input type="text" name="tanggal_mulai" value="<?php echo $this->input->post('tanggal_mulai'); ?>" class="has-datepicker form-control" id="tanggal_mulai" />
							<span class="text-danger"><?php echo form_error('tanggal_mulai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="durasi_hari" class="control-label"><span class="text-danger">*</span>Durasi Hari</label>
						<div class="form-group">
							<input type="text" name="durasi_hari" value="<?php echo $this->input->post('durasi_hari'); ?>" class="form-control" id="durasi_hari" />
							<span class="text-danger"><?php echo form_error('durasi_hari');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_mulai" class="control-label"><span class="text-danger">*</span>Jam Mulai</label>
						<div class="form-group">
							<input type="text" name="jam_mulai" value="<?php echo $this->input->post('jam_mulai'); ?>" class="form-control" id="jam_mulai" />
							<span class="text-danger"><?php echo form_error('jam_mulai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger">*</span>Jam Selesai</label>
						<div class="form-group">
							<input type="text" name="jam_selesai" value="<?php echo $this->input->post('jam_selesai'); ?>" class="form-control" id="jam_selesai" />
							<span class="text-danger"><?php echo form_error('jam_selesai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah_tiket" class="control-label"><span class="text-danger">*</span>Jumlah Tiket</label>
						<div class="form-group">
							<input type="text" name="jumlah_tiket" value="<?php echo $this->input->post('jumlah_tiket'); ?>" class="form-control" id="jumlah_tiket" />
							<span class="text-danger"><?php echo form_error('jumlah_tiket');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="poster" class="control-label">Poster</label>
						<div class="form-group">
							<input type="text" name="poster" value="<?php echo $this->input->post('poster'); ?>" class="form-control" id="poster" />
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
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>