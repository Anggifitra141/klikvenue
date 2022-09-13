<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>CMS || Klikvenue</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/izitoast/css/iziToast.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/dropify/css/dropify.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/select2/dist/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/modules/bootstrap-daterangepicker/daterangepicker.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cms/css/components.css">
	<!-- Start GA -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

	<script src="<?php echo base_url(); ?>assets/cms/modules/jquery.min.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-94034622-3');

		function convertToRupiah(angka) {
			var rupiah = '';
			var angkarev = angka.toString().split('').reverse().join('');
			for (var i = 0; i < angkarev.length; i++)
				if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
			return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
		}

		function convertToAngka(rupiah) {
			return parseInt(rupiah.replace(/,.*|[^0-9]/g, ''), 10);
		}
	</script>

	<style>
		.fc button.fc-state-active {
			background-color: #fc544b;
			color: #fff;
		}

		.select2-container.select2-container--focus .select2-selection--multiple,
		.select2-container.select2-container--focus .select2-selection--single {
			background-color: #fefeff;
			border-color: #00966C;
		}

		.select2-container.select2-container--open .select2-selection--single {
			background-color: #fefeff;
			border-color: #00966C;
		}

		.select2-container--default .select2-selection--multiple .select2-selection__choice,
		.select2-container--default .select2-results__option[aria-selected=true],
		.select2-container--default .select2-results__option--highlighted[aria-selected] {
			background-color: #00966C;
			color: white;
		}

		@media (min-width: 768px) {
			.modal-xl {
				max-width: 1400px;
			}
		}
	</style>
	<!-- /END GA -->
</head>

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="<?php echo base_url(); ?>#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
						<li><a href="<?php echo base_url(); ?>#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
					</ul>
					<div class="search-element">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
						<div class="search-backdrop"></div>
						<div class="search-result">
							<div class="search-header">
								Histories
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">How to hack NASA using CSS</a>
								<a href="<?php echo base_url(); ?>#" class="search-close"><i class="fas fa-times"></i></a>
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">Kodinger.com</a>
								<a href="<?php echo base_url(); ?>#" class="search-close"><i class="fas fa-times"></i></a>
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">#Stisla</a>
								<a href="<?php echo base_url(); ?>#" class="search-close"><i class="fas fa-times"></i></a>
							</div>
							<div class="search-header">
								Result
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">
									<img class="mr-3 rounded" width="30" src="<?php echo base_url(); ?>assets/cms/img/products/product-3-50.png" alt="product">
									oPhone S9 Limited Edition
								</a>
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">
									<img class="mr-3 rounded" width="30" src="<?php echo base_url(); ?>assets/cms/img/products/product-2-50.png" alt="product">
									Drone X2 New Gen-7
								</a>
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">
									<img class="mr-3 rounded" width="30" src="<?php echo base_url(); ?>assets/cms/img/products/product-1-50.png" alt="product">
									Headphone Blitz
								</a>
							</div>
							<div class="search-header">
								Projects
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">
									<div class="search-icon bg-danger text-white mr-3">
										<i class="fas fa-code"></i>
									</div>
								</a>
							</div>
							<div class="search-item">
								<a href="<?php echo base_url(); ?>#">
									<div class="search-icon bg-primary text-white mr-3">
										<i class="fas fa-laptop"></i>
									</div>
									Create a new Homepage Design
								</a>
							</div>
						</div>
					</div>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown dropdown-list-toggle"><a href="<?php echo base_url(); ?>#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Messages
								<div class="float-right">
									<a href="<?php echo base_url(); ?>#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-message">
								<a href="<?php echo base_url(); ?>#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-avatar">
										<img alt="image" src="<?php echo base_url(); ?>assets/cms/img/avatar/avatar-1.png" class="rounded-circle">
										<div class="is-online"></div>
									</div>
									<div class="dropdown-item-desc">
										<b>Kusnaedi</b>
										<p>Hello, Bro!</p>
										<div class="time">10 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-avatar">
										<img alt="image" src="<?php echo base_url(); ?>assets/cms/img/avatar/avatar-2.png" class="rounded-circle">
									</div>
									<div class="dropdown-item-desc">
										<b>Dedik Sugiharto</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-avatar">
										<img alt="image" src="<?php echo base_url(); ?>assets/cms/img/avatar/avatar-3.png" class="rounded-circle">
										<div class="is-online"></div>
									</div>
									<div class="dropdown-item-desc">
										<b>Agung Ardiansyah</b>
										<p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item">
									<div class="dropdown-item-avatar">
										<img alt="image" src="<?php echo base_url(); ?>assets/cms/img/avatar/avatar-4.png" class="rounded-circle">
									</div>
									<div class="dropdown-item-desc">
										<b>Ardian Rahardiansyah</b>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
										<div class="time">16 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item">
									<div class="dropdown-item-avatar">
										<img alt="image" src="<?php echo base_url(); ?>assets/cms/img/avatar/avatar-5.png" class="rounded-circle">
									</div>
									<div class="dropdown-item-desc">
										<b>Alfa Zulkarnain</b>
										<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
										<div class="time">Yesterday</div>
									</div>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="<?php echo base_url(); ?>#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown-list-toggle"><a href="<?php echo base_url(); ?>#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right">
									<a href="<?php echo base_url(); ?>#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-icons">
								<a href="<?php echo base_url(); ?>#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-icon bg-primary text-white">
										<i class="fas fa-code"></i>
									</div>
									<div class="dropdown-item-desc">
										Template update is available now!
										<div class="time text-primary">2 Min Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item">
									<div class="dropdown-item-icon bg-info text-white">
										<i class="far fa-user"></i>
									</div>
									<div class="dropdown-item-desc">
										<b>You</b> and <b>Dedik Sugiharto</b> are now friends
										<div class="time">10 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item">
									<div class="dropdown-item-icon bg-success text-white">
										<i class="fas fa-check"></i>
									</div>
									<div class="dropdown-item-desc">
										<b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item">
									<div class="dropdown-item-icon bg-danger text-white">
										<i class="fas fa-exclamation-triangle"></i>
									</div>
									<div class="dropdown-item-desc">
										Low disk space. Let's clean it!
										<div class="time">17 Hours Ago</div>
									</div>
								</a>
								<a href="<?php echo base_url(); ?>#" class="dropdown-item">
									<div class="dropdown-item-icon bg-info text-white">
										<i class="fas fa-bell"></i>
									</div>
									<div class="dropdown-item-desc">
										Welcome to Stisla template!
										<div class="time">Yesterday</div>
									</div>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="<?php echo base_url(); ?>#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
					<li class="dropdown"><a href="<?php echo base_url(); ?>#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="<?php echo base_url(); ?>assets/cms/img/avatar/avatar-1.png" class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block"><?php echo $this->session->userdata('fullname'); ?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-title">Logged in 5 min ago</div>
							<a href="<?php echo base_url(); ?>features-profile.html" class="dropdown-item has-icon">
								<i class="far fa-user"></i> Profile
							</a>
							<a href="<?php echo base_url(); ?>features-activities.html" class="dropdown-item has-icon">
								<i class="fas fa-bolt"></i> Activities
							</a>
							<a href="<?php echo base_url(); ?>features-settings.html" class="dropdown-item has-icon">
								<i class="fas fa-cog"></i> Settings
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?php echo site_url('login/signout'); ?>" class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<img src="<?php echo site_url(); ?>assets/img/logo_sticky.png" alt="logo" width="100" class="" style="width:160px; height:40px; margin-top:15px;">
					</div><br />
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="<?php echo base_url(); ?>index.html">St</a>
					</div>
					<br />
					<ul class="sidebar-menu">

						<li class="menu-header">Management Klikvenue</li>
						<li>
							<a href="<?php echo site_url('user_group'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
						</li>
						<li class="dropdown" id="nav-utilities-source">
							<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shopping-bag"></i> <span>Products</span></a>
							<ul class="dropdown-menu">
								<li id="nav-role-clean"><a class="nav-link" href="<?php echo site_url('cms/products'); ?>"><i class="fas fa-shopping-bag"></i> Products</a></li>
								<li id="nav-auto-clean"><a class="nav-link" href="<?php echo site_url('cms/categories'); ?>"><i class="fas fa-list"></i> Category</a></li>
							</ul>
						</li>
						<li class="dropdown" id="nav-utilities-source">
							<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-home"></i> <span>Partner</span></a>
							<ul class="dropdown-menu">
								<li id="nav-role-clean"><a class="nav-link" href="<?php echo site_url('cms/partner'); ?>"><i class="fas fa-align-center"></i> Partner</a></li>
								<li id="nav-auto-clean"><a class="nav-link" href="<?php echo site_url('cms/categories'); ?>"><i class="fas fa-align-center"></i> Category</a></li>
							</ul>
						</li>
						<li id="nav-archive">
							<a href="<?php echo site_url('cms/customer'); ?>" class="nav-link"><i class="fas fa-archive"></i><span>Customers</span></a>
						</li>
						<li>
							<a href="<?php echo site_url('login/signout'); ?>" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
						</li>

					</ul>

					<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
						<!-- <a href="https://getstisla.com/docs" class="btn btn-danger btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a> -->
					</div>
				</aside>
			</div>

			<!-- Main Content -->
			<div class="main-content">
				<?php echo $content; ?>
			</div>

			<footer class="main-footer">
				<div class="footer-left">
					Copyright &copy; 2021 Report Management || By <a href="javascript:void(0)"> </a>
					<div class="bullet"></div> All Right Reserved
				</div>
				<div class="footer-right">

				</div>
			</footer>
		</div>
	</div>

	<!-- General JS Scripts -->

	<script src="<?php echo base_url(); ?>assets/cms/modules/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/tooltip.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/js/stisla.js"></script>

	<!-- JS Libraies -->
	<script src="<?php echo base_url(); ?>assets/cms/modules/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/izitoast/js/iziToast.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/dropify/js/dropify.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/select2/dist/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- Page Specific JS File -->
	<script src="<?php echo base_url(); ?>assets/cms/js/page/index-0.js"></script>
	<!-- Template JS File -->

	<script src="<?php echo base_url(); ?>assets/cms/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>assets/cms/js/custom.js"></script>

	<script>
		$(document).ready(function() {
			$('.dropify').dropify();
			$('.select2').select2({
				width: '100%'
			});
			$('.daterange-picker').daterangepicker({
					startDate: moment().startOf('month'),
					endDate: moment().endOf('month'),
					showDropdowns: true,
					opens: 'left',
					ranges: {
						'Last 30 Days': [moment().subtract('days', 29), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
					},
					format: 'DD-MM-YYYY',
					buttonClasses: ['btn'],
					applyClass: 'btn-danger',
					cancelClass: 'default',
					locale: {
						format: 'DD-MM-YYYY'
					}
				},
				function(start, end) {
					$('#daterange-picker input').html(start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY'));
				}
			);



		});
	</script>
</body>

</html>