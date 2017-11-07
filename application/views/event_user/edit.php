<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event User Edit</h3>
            </div>
			<?php echo form_open('event_user/edit/'.$event_user['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="level" class="control-label"><span class="text-danger">*</span>Level</label>
						<div class="form-group">
							<select name="level" class="form-control">
								<option value="">select</option>
								<?php 
								$level_values = array(
									'0'=>'Admin',
									'1'=>'Event Creator',
									'2'=>'User',
								);

								foreach($level_values as $value => $display_text)
								{
									$selected = ($value == $event_user['level']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('level');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $event_user['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $event_user['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $event_user['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="instansi" class="control-label">Instansi</label>
						<div class="form-group">
							<input type="text" name="instansi" value="<?php echo ($this->input->post('instansi') ? $this->input->post('instansi') : $event_user['instansi']); ?>" class="form-control" id="instansi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $event_user['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
				<input type="button" class="btn btn-success" onclick="location.href='<?php echo site_url('event_user/'); ?>';" value="Cancel"></input>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>