<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>

    <head>
        <title>Registration Form</title>
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?= site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= site_url('resources/css/_all-skins.min.css');?>">
    </head>

    <body>
        <div id="main">
            <div id="login">
                <h2>Registration Form</h2>
                <hr/>
                <?php
                    echo "<div class='error_msg'>";
                    echo validation_errors();
                    echo "</div>";
                    echo form_open('user_authentication/new_user_registration');
                    
                    echo form_label('Create Username : ');
                    echo"<br/>";
                    echo form_input('username');
                    echo "<div class='error_msg'>";
                    if (isset($message_display)) {
                        echo $message_display;
                    }
                    echo "</div>";
                    echo"<br/>";
                    echo form_label('Email : ');
                    echo"<br/>";
                    $data = array(
                    'type' => 'email',
                    'name' => 'email_value'
                    );
                    echo form_input($data);
                    echo"<br/>";
                    echo"<br/>";
                    echo form_label('Password : ');
                    echo"<br/>";
                    echo form_password('password');
                    echo"<br/>";
                    echo"<br/>";
                    echo form_submit('submit', 'Sign Up');
                    echo form_close();
                    ?>
                    <a href="<?= base_url() ?> ">For Login Click Here</a>
            </div>
        </div>
    </body>

</html>