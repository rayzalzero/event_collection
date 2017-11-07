<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login form using HTML5 and CSS3</title>
    <link rel="stylesheet" href="<?php echo site_url('template/tema/css/style.css');?>"/>
</head>

<body>

    <body>

                            <div class="container">
                                <section id="content">
                                <?php echo form_open('user_authentication/user_login_process'); ?>
                                        <h1>Login Form</h1>
                                        <div>
                                            <input type="text" placeholder="Username" required="" id="username" name="username" />
                                        </div>
                                        <div>
                                            <input type="password" placeholder="Password" required="" id="password" name="password"/>
                                        </div>
                                        <div>
                                            <input type="submit" value="Log in" />
                                            <a href="#">Lost your password?</a>
                                            <a href="#">Register</a>
                                        </div>
                                        <?php echo form_close(); ?>
                                </section>
                                <!-- content -->
                            </div>
                            <!-- container -->
    </body>

    <script src="<?php echo site_url('template/tema/js/index.js');?>"></script>

</body>

</html>