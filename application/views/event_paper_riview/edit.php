<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event Paper Riview Edit</h3>
            </div>
			<?php echo form_open('event_paper_riview/edit/'.$event_paper_riview['id_paper']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">Id User</label>
						<div class="form-group">
							<input type="text" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $event_paper_riview['id_user']); ?>" class="form-control" id="id_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $event_paper_riview['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_at" class="control-label">Create At</label>
						<div class="form-group">
							<input type="text" name="create_at" value="<?php echo ($this->input->post('create_at') ? $this->input->post('create_at') : $event_paper_riview['create_at']); ?>" class="form-control" id="create_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="komentar" class="control-label">Komentar</label>
						<div class="form-group">
							<textarea name="komentar" class="form-control" id="komentar"><?php echo ($this->input->post('komentar') ? $this->input->post('komentar') : $event_paper_riview['komentar']); ?></textarea>
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