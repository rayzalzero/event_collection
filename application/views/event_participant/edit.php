<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event Participant Edit</h3>
            </div>
			<?php echo form_open('event_participant/edit/'.$event_participant['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">Id User</label>
						<div class="form-group">
							<input type="text" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $event_participant['id_user']); ?>" class="form-control" id="id_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_event" class="control-label">Id Event</label>
						<div class="form-group">
							<input type="text" name="id_event" value="<?php echo ($this->input->post('id_event') ? $this->input->post('id_event') : $event_participant['id_event']); ?>" class="form-control" id="id_event" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_at" class="control-label">Create At</label>
						<div class="form-group">
							<input type="text" name="create_at" value="<?php echo ($this->input->post('create_at') ? $this->input->post('create_at') : $event_participant['create_at']); ?>" class="form-control" id="create_at" />
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