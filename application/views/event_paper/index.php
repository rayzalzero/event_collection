<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Event Paper Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('event_paper/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Paper</th>
						<th>Id User</th>
						<th>Judul</th>
						<th>File Paper</th>
						<th>Create At</th>
						<th>Deskripsi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($event_paper as $e){ ?>
                    <tr>
						<td><?php echo $e['id_paper']; ?></td>
						<td><?php echo $e['id_user']; ?></td>
						<td><?php echo $e['judul']; ?></td>
						<td><?php echo $e['file_paper']; ?></td>
						<td><?php echo $e['create_at']; ?></td>
						<td><?php echo $e['deskripsi']; ?></td>
						<td>
                            <a href="<?php echo site_url('event_paper/edit/'.$e['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('event_paper/remove/'.$e['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
