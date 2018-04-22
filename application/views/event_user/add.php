<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Pengguna</h3>
            </div>
            <?= form_open('event_user/add'); ?>
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
									$selected = ($value == $this->input->post('level')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('level');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?= $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?= form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?= $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?= form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?= form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="instansi" class="control-label">Instansi</label>
						<div class="form-group">
							<input type="text" name="instansi" value="<?= $this->input->post('instansi'); ?>" class="form-control" id="instansi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?= $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?= form_error('email');?></span>
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