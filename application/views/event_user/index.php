<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Event Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('event_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Username</th>
						<th>Name</th>
						<th>Instansi</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($event_users as $e){ ?>
                    <tr>
						<td><?php echo $e['username']; ?></td>
						<td><?php echo $e['name']; ?></td>
						<td><?php echo $e['instansi']; ?></td>
						<td><?php echo $e['email']; ?></td>
						<td>
                            <a href="<?php echo site_url('event_user/edit/'.$e['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('event_user/remove/'.$e['id_user']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete <?php echo $e['username']; ?>?')"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
