<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Event Event Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('event_event/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Name Event</th>
						<th>Lokasi</th>
						<th>Pembicara</th>
						<th>Tanggal Mulai</th>
						<th>Jumlah Tiket</th>
						<th>Deskripsi Acara</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($event_event as $e){ ?>
                    <tr>
						<td><?php echo $e['name_event']; ?></td>
						<td><?php echo $e['lokasi']; ?></td>
						<td><?php echo $e['pembicara']; ?></td>
						<td><?php echo $e['tanggal_mulai']; ?></td>
						<td><?php echo $e['jumlah_tiket']; ?></td>
						<td><?php echo $e['deskripsi_acara']; ?></td>
						<td>
                            <a href="<?php echo site_url('event_event/edit/'.$e['id_event']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('event_event/remove/'.$e['id_event']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete <?php echo $e['name_event']?> ?')"><span class="fa fa-trash"></span> Delete</a>
                            <a href="#" class="btn btn-info btn-xs"><span class="fa fa-eye" ></span> Preview</a>
                            <a href="#" class="btn btn-info btn-xs"><span class="fa fa-eye"></span> Peserta</a>
                            <button type="button" class="btn btn-info btn-xs" id="priview"><span class="fa fa-eye"></span> Info</button>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
            $('#priview').click(function(){
			alert('makan')	
				
			});
        });
	</script>
				