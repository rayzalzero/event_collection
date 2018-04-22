<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Pengguna</h3>
                <div class="box-tools">
                    <a href="<?= site_url('event_user/add'); ?>" class="btn btn-success btn-sm">Tambah</a>
                </div>
            </div>
            <div class="box-body">
                <table class="dataTable table table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Instansi</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($event_users as $e){ ?>
                        <tr>
                            <td>
                                <?= $e['username']; ?>
                            </td>
                            <td>
                                <?= $e['name']; ?>
                            </td>
                            <td>
                                <?= $e['instansi']; ?>
                            </td>
                            <td>
                                <?= $e['email']; ?>
                            </td>
                            <td>
                                <a href="<?= site_url('event_user/edit/'.$e['id_user']); ?>" class="btn btn-info btn-xs">
                                    <span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?= site_url('event_user/remove/'.$e['id_user']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete <?php echo $e['username']; ?>?')">
                                    <span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>