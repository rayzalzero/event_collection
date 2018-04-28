<html>
    <?php
        if (isset($this->session->userdata['logged_in'])) {
            header("location: http://localhost/login/index.php/user_authentication/user_login_process");
        }
    ?>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <form class="form-horizontal" role="form" method="post" autocomplete="off" action="<?= base_url('user_authentication/new_user_registration')?>">
            <h2>Registration Form</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="Full Name" class="form-control" name="username" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Nama lengkap</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="Full Name" class="form-control" name="nama">
                </div>
            </div> 
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="Alamat" class="form-control" name="alamat">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" id="birthDate" class="form-control" name="ttl">
                </div>
            </div>
            <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Instansi</label>
                <div class="col-sm-9">
                    <input type="text" id="birthDate" class="form-control" name="instansi">
                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <label class="control-label col-sm-3">Jenis Kelamin</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" value="1" name="jk">Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" value="0" name="jk">Male
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </div>
        </form> <!-- /form -->
    </div> <!-- ./container -->
</html>