<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Member Event Akakom</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= site_url('assets/users/favicons/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= site_url('assets/users/favicons/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= site_url('assets/users/favicons/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= site_url('assets/users/favicons/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= site_url('assets/users/favicons/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= site_url('assets/users/favicons/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= site_url('assets/users/favicons/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= site_url('assets/users/favicons/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= site_url('assets/users/favicons/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= site_url('assets/users/favicons/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= site_url('assets/users/favicons/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= site_url('assets/users/favicons/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/users/favicons/favicon-16x16.png');?>">
    <link rel="manifest" href="<?= site_url('assets/users/favicons/manifest.json');?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= site_url('assets/users/favicons/ms-icon-144x144.png');?>">
    <meta name="theme-color" content="#ffffff">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/');?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <?= form_open('user_authentication/user_login_process'); ?>        
					<span class="login100-form-title p-b-26">
						Welcome To Event Akakom
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" placeholder="Username" required="" id="username" name="username" />
                        <span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" placeholder="Password" required="" id="password" name="password" />
                        <span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="<?= base_url('user_authentication/user_registration_show')?>">
							Sign Up
						</a>
					</div>
                    <div class="text-center p-t-115">
						<a class="txt2" href="<?= base_url('/')?>">
							Back to home
						</a>
					</div>
                <?= form_close(); ?>                    
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= site_url('assets/login/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= site_url('assets/login/');?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= site_url('assets/login/');?>js/main.js"></script>

</body>
</html>