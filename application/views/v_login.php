<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>LOANS2GO | Loans HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="<?= base_url('assets/img/favicon.ico') ?>" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="<?php echo base_url().'index.php/login/'?>" class="site-logo">
			<img src="<?= base_url('assets/img/logo.png') ?>" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="<?php echo base_url().'index.php/login/'?>" class="active">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="loans.html">Loans</a></li>
						<li><a href="elements.html">elements</a></li>
					</ul>
				</li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Call us now! </a>
				<div class="hr-btn hr-btn-2">+45 332 65767 42</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">
						<h2>Ingin Mengadu Tentang Ketidaknyamanan??</h2>
						<p>Di Website ini anda bisa melaporan pengaduan terhadap ketidaknyamanan anda</p>
						<a href="#" class="site-btn sb-dark">Find out more</a>
					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form" method="POST" action="<?= base_url('index.php/login/auth') ?>">
					<input type="text" id="username" name="username" placeholder="Username" class="form-control" autocomplete="off" required>
					  <label for="username">Username</label>
					  <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
              <label for="password">Password</label>
						<p>Silahkan Login Menggunakan Username Password anda terlebih dahulu</p>
						<button class="site-btn">Login</button>
					</form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/hero-slider/1.jpg') ?>"></div>
			<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/hero-slider/2.jpg') ?>"></div>
			<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/hero-slider/3.jpg') ?>"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Keuntungan Menggunakan Website Pengaduan</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-012-24-hours"></i>
						</div>
						<div class="ib-text">
							<h5>Aktif 24 Jam</h5>
							<p>Anda dapat mengajukan pengaduan kapanpun anda mau</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-036-customer-service"></i>
						</div>
						<div class="ib-text">
							<h5>Customer Service</h5>
							<p>Kita memiliki customer service yang stand by selama 24 jam untuk anda</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-039-info"></i>
						</div>
						<div class="ib-text">
							<h5>Informasi Lengkap</h5>
							<p>Anda dapat mengetahui tentang proses pengaduan anda</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-3">
			</div>
		</div>
	</section>
	<!-- Why Section end -->
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.slicknav.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

	</body>
</html>
