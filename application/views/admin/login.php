<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Adminnistrator</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Theme -->
	<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />

	<!-- Login -->
	<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Beautiful Checkboxes -->
	<script type="text/javascript" src="<?php echo base_url(); ?>plugins/uniform/jquery.uniform.min.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="<?php echo base_url(); ?>plugins/validation/jquery.validate.min.js"></script>

	<!-- Slim Progress Bars -->
	<script type="text/javascript" src="<?php echo base_url(); ?>plugins/nprogress/nprogress.js"></script>

	<!-- App -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login.js"></script>
	<script>
	$(document).ready(function(){
		"use strict";

		Login.init(); // Init login JavaScript
	});
	</script>
</head>

<body class="login">
	<!-- Logo -->
	<div class="logo">
		<!-- <img src="<?php //echo base_url(); ?>assets/img/logo.png" alt="logo" /> -->
		<h3>Administration Login</h3>
	</div>
	<!-- /Logo -->

	<!-- Login Box -->
	<div class="box">
		<div class="content">
			<!-- Login Formular -->
			<!-- <form class="form-vertical login-form" action="index.html" method="post"> -->

				<?php echo form_open('admin/adminlogin'); ?> 
				<!-- Title -->
				<h3 class="form-title">Sign In to your Account</h3>
				<!-- Error Message -->
				<div class="alert fade in alert-danger" style="display: none;">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Enter any username and password.
				</div>

				<!-- Input Fields -->
				<div class="form-group">
					<!--<label for="username">Username:</label>-->
					<div class="input-icon">
						<i class="icon-user"></i>
						<input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." />
					</div>
				</div>
				<div class="form-group">
					<!--<label for="password">Password:</label>-->
					<div class="input-icon">
						<i class="icon-lock"></i>
						<input type="password" name="password" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />
					</div>
				</div>
				<!-- /Input Fields -->

				<!-- Form Actions -->
				<div class="form-actions">
					<label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Remember me</label>
					<button type="submit" class="submit btn btn-primary pull-right">
						Sign In <i class="icon-angle-right"></i>
					</button>
				</div>
			<?php form_close(); ?>
			<!-- /Login Formular -->

			<!-- Register Formular (hidden by default) -->
			
			<!-- /Register Formular -->

			
		</div> <!-- /.content -->

		<!-- Forgot Password Form -->
		<div class="inner-box">
			<div class="content">
				<!-- Close Button -->
				<i class="icon-remove close hide-default"></i>

				<!-- Link as Toggle Button -->
				<a href="#" class="forgot-password-link">Forgot Password?</a>

				<!-- Forgot Password Formular -->
				<form class="form-vertical forgot-password-form hide-default" action="login.html" method="post">
					<!-- Input Fields -->
					<div class="form-group">
						<!--<label for="email">Email:</label>-->
						<div class="input-icon">
							<i class="icon-envelope"></i>
							<input type="text" name="email" class="form-control" placeholder="Enter email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />
						</div>
					</div>
					<!-- /Input Fields -->

					<button type="submit" class="submit btn btn-default btn-block">
						Reset your Password
					</button>
				</form>
				<!-- /Forgot Password Formular -->

				<!-- Shows up if reset-button was clicked -->
				<div class="forgot-password-done hide-default">
					<i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
					<span>Great. We have sent you an email.</span>
				</div>
			</div> <!-- /.content -->
		</div>
		<!-- /Forgot Password Form -->
	</div>
	<!-- /Login Box -->

<!-- Footer -->
	<div class="footer">
		Developed By CSIT CodeIgniter Team
	</div>
	<!-- /Footer -->

</body>
</html>