<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login form using HTML5 and CSS3</title>
    <link rel="stylesheet" href="<?= site_url('assets/users/tema/css/style.css');?>" />
</head>
<body>

    <body>

        <div class="container">
            <section id="content">
                <?= form_open('user_authentication/user_login_process'); ?>
                <h1>Login Form</h1>
                <div>
                    <input type="text" placeholder="Username" required="" id="username" name="username" />
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" id="password" name="password" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                    <a href="<?= base_url('user_authentication/user_registration_show')?>">Register</a>
                </div>
                <?= form_close(); ?>
            </section>
            <!-- content -->
        </div>
        <!-- container -->
    </body>

    <script src="<?= site_url('assets/users/tema/js/index.js');?>"></script>

</body>

</html>