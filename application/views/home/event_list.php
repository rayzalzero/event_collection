<?php include_once('header.php')?>

<link rel="stylesheet" type="text/css" href="<?= site_url('assets/users/plugins/datatable/datatables.css')?>"/>

<script type="text/javascript" src="<?= site_url('assets/users/plugins/datatable/pdfmake-0.1.32/pdfmake.min.js')?>"></script>
<script type="text/javascript" src="<?= site_url('assets/users/plugins/datatable/pdfmake-0.1.32/vfs_fonts.js')?>"></script>
<script type="text/javascript" src="<?= site_url('assets/users/plugins/datatable/datatables.min.js')?>"></script>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <!-- Page Content --> 
    <div class="row">
        <table id="dataTable" class="display compact nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Acara</th>
                    <th>Nama Peserta</th>
                    <th>Waktu Acara</th>
                    <th class="action">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($event_list as $e){ ?>            
                <tr>
                    <td><?= $e['name_event']?></td>
                    <td><?= $e['name']?></td>
                    <td><?= $e['tanggal_mulai']?> <?= $e['jam_mulai']?></td>
                    <td><?= $e['id_participant']?></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div><!-- End container row -->
    </div> <!-- End Container -->
</body>
<?php include_once('footer.php')?>