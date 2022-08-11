<!doctype html>
<html lang="en" class="no-focus">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title>Sistem Pendaftaran Kursus Bahasa Pemrograman</title>

	<meta name="description" content="DimasDekstop - Website &amp; Sistem Pendaftaran Kursus Bahasa Pemrograman">
	<meta name="author" content="DimasDesktop">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph Meta -->
	<meta property="og:title" content="DimasDekstop - Website &amp; Sistem Pendaftaran Kursus Bahasa Pemrograman">
	<meta property="og:site_name" content="DimasDekstop">
	<meta property="og:description" content="DimasDekstop - Website &amp; Sistem Pendaftaran Kursus Bahasa Pemrograman">
	<meta property="og:type" content="website">
	<meta property="og:url" content="DimasDesktop">
	<meta property="og:image" content="DimasDesktop">

	<!-- Icons -->
	<link rel="shortcut icon" href="<?=base_url()?>assets/logo/logo-1.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=base_url()?>assets/logo/logo-1.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/logo/logo-1.png">
	<!-- END Icons -->

	<!-- Stylesheets -->

	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="<?=base_url()?>templates/js/plugins/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="<?=base_url()?>templates/js/plugins/select2/css/select2.css">

	<!-- Fonts and Codebase framework -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
	<link rel="stylesheet" id="css-main" href="<?=base_url()?>templates/css/codebase.min.css">
	<!-- END Stylesheets -->
</head>
<body>

<!-- Sidebar -->
<nav id="sidebar">
	<!-- Sidebar Content -->
	<div class="sidebar-content">
		<!-- Side Header -->
		<div class="content-header content-header-fullrow bg-black-op-10">
			<div class="content-header-section text-center align-parent">
				<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
					<i class="fa fa-times text-danger"></i>
				</button>
				<!-- END Close Sidebar -->

				<!-- Logo -->
				<div class="content-header-item">
					<a class="link-effect font-w700" href="<?=base_url()?>">
						<img src="<?=base_url()?>assets/logo/logo-1.png" width="24" alt="">
						<span class="font-size-xl text-dual-primary-dark">Pendaftaran</span><span class="font-size-xl text-primary text-muted"> kursus</span>
					</a>
				</div>
				<!-- END Logo -->
			</div>
		</div>
		<!-- END Side Header -->

		<!-- Side Main Navigation -->
		<div class="content-side content-side-full">
			<ul class="nav-main">
				<li>
					<a class="active" href="<?=base_url()?>source/home"><i class="si si-home"></i>Home</a>
				</li>
				<li>
					<a class="active" href="<?=base_url()?>source/guide"><i class="si si-question"></i>petunjuk</a>
				</li>
				<li>
					<a class="active" href="<?=base_url()?>source/keluar"><i class="si si-logout"></i>Keluar</a>
				</li>
			</ul>
		</div>
		<!-- END Side Main Navigation -->
	</div>
	<!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
	<!-- Header Content -->
	<div class="content-header">
		<div class="content-header-section w-100">
			<div class="row no-gutters">
				<div class="col">
					<!-- Toggle Sidebar -->
					<button type="button" class="btn btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
						<i class="fa fa-navicon"></i>
					</button>
					<!-- END Toggle Sidebar -->

				</div>
				<div class="col-3 text-center">
					<!-- Logo -->
					<div class="content-header-item">
						<a class="link-effect font-w700" href="<?=base_url()?>">
							<img src="<?=base_url()?>assets/logo/logo-1.png" width="24" alt="">
							<span class="d-none d-md-inline-block">
									<span class="font-size-xl text-dual-primary-dark">Pendaftaran</span><span class="font-size-xl text-primary text-muted"> kursus</span>
								</span>
						</a>
					</div>
					<!-- END Logo -->
				</div>
				<div class="col text-right">
					<!-- Menu -->
					<a href="<?=base_url()?>source/keluar" class="btn btn-alt-danger ml-5">
						<i class="fa fa-sign-out"></i>
						<span class="d-none d-sm-inline">Keluar</span>
					</a>
					<!-- END Menu -->
				</div>
			</div>
		</div>
	</div>
	<!-- END Header Content -->

	<!-- Header Loader -->
	<div id="page-header-loader" class="overlay-header bg-primary">
		<div class="content-header content-header-fullrow text-center">
			<div class="content-header-item">
				<i class="fa fa-sun-o fa-spin text-white"></i>
			</div>
		</div>
	</div>
	<!-- END Header Loader -->
</header>
<!-- END Header -->
<div>
