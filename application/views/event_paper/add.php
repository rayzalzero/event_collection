<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event Paper Add</h3>
            </div>
            <?php echo form_open('event_paper/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_paper" class="control-label">Id Paper</label>
						<div class="form-group">
							<input type="text" name="id_paper" value="<?php echo $this->input->post('id_paper'); ?>" class="form-control" id="id_paper" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_user" class="control-label">Id User</label>
						<div class="form-group">
							<input type="text" name="id_user" value="<?php echo $this->input->post('id_user'); ?>" class="form-control" id="id_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="file_paper" class="control-label">File Paper</label>
						<div class="form-group">
							<input type="text" name="file_paper" value="<?php echo $this->input->post('file_paper'); ?>" class="form-control" id="file_paper" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_at" class="control-label">Create At</label>
						<div class="form-group">
							<input type="text" name="create_at" value="<?php echo $this->input->post('create_at'); ?>" class="form-control" id="create_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deskripsi" class="control-label">Deskripsi</label>
						<div class="form-group">
							<textarea name="deskripsi" class="form-control" id="deskripsi"><?php echo $this->input->post('deskripsi'); ?></textarea>
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