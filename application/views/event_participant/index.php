<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Event Participant Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('event_participant/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id User</th>
						<th>Id Event</th>
						<th>Create At</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($event_participant as $e){ ?>
                    <tr>
						<td><?php echo $e['id_user']; ?></td>
						<td><?php echo $e['id_event']; ?></td>
						<td><?php echo $e['create_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('event_participant/edit/'.$e['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('event_participant/remove/'.$e['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
