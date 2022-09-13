<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Login &mdash; Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/cms/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/cms/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/cms/modules/bootstrap-social/bootstrap-social.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/cms/css/style.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/cms/css/components.css">
	<!-- Start GA -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-94034622-3');
	</script>
	<!-- /END GA -->
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
							<img src="<?php echo site_url(); ?>assets/img/logo_sticky.png" alt="logo" width="100" class="" style="width:250px; height:60px;">
						</div>

						<div class="card card-success">
							<div class="card-header">
								<h4>Login</h4>
								<div class="col-md-12">
									<?php
									if (isset($error)) {
										echo "<div id='message' class='alert alert-danger'> <button class='close' data-dismiss='alert'>&times;</button><strong>$error</strong></div>";
									}
									if (isset($success)) {
										echo "<div id='message' class='alert alert-success'> <button class='close' data-dismiss='alert'>&times;</button><strong>$success</strong></div>";
									}
									?>
								</div>
							</div>

							<div class="card-body">
								<form method="POST" action="<?php echo site_url() ?>cms/login/loginMe/" onsubmit="post(this);" class="needs-validation" novalidate="">
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
										<div class="invalid-feedback">
											Please fill in your email
										</div>
									</div>

									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
											<div class="float-right">
												<a href="auth-forgot-password.html" class="text-small">
													Forgot Password?
												</a>
											</div>
										</div>
										<input id="password" type="password" class="form-control" name="password" tabindex="2" required>
										<div class="invalid-feedback">
											please fill in your password
										</div>
									</div>

									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
											<label class="custom-control-label" for="remember-me">Remember Me</label>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
								</form>

							</div>
						</div>

						<div class="simple-footer">
							Copyright &copy; Klikvenue 2021
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- General JS Scripts -->
	<script src="<?php echo site_url(); ?>assets/cms/modules/jquery.min.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/modules/popper.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/modules/tooltip.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/modules/moment.min.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/js/stisla.js"></script>

	<!-- JS Libraies -->

	<!-- Page Specific JS File -->

	<!-- Template JS File -->
	<script src="<?php echo site_url(); ?>assets/cms/js/scripts.js"></script>
	<script src="<?php echo site_url(); ?>assets/cms/js/custom.js"></script>

	<script>
		function post(a) {
			$('#message').hide();
			$.ajax({
				type: 'POST',
				url: $(a).attr('action'),
				data: $(a).serialize(),
				success: function(data) {
					$('#message').fadeIn('slow').html(data);
				}
			});
			return false;
		}
		window.onload = function() {
			document.getElementById("username").focus();
		};
	</script>
</body>

</html>
