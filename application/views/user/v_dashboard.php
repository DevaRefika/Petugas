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
					<h3><font color="white">Selamat Datang, <?php echo $this->session->userdata('ses_nama');?></font></h3>
					<br>
					<a href="<?php echo base_url().'index.php/login/logout'?>" class="site-btn sb-dark">Logout</a>
					<a href="<?php echo base_url().'index.php/user/pengaduan2'?>" class="site-btn sb-big">Pengaduan Anda</a>
				</div>
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
	<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Yang Sudah Ditanggapi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>Tanggal</th>
                  <th>Nik Pengadu</th>
                  <th>Nama Pengadu</th>
                  <th>Isi Laporan</th>
                  <th>Foto</th>
				  <th>Tanggapan</th>
				  <th>Status</th>
                 </tr>
                </thead>
                <tbody>
  <?php foreach($pengaduan as $chart) : ?>
<tr>
<td><?= $chart['tanggal'] ?></td>
<td><?= $chart['nik'] ?></td>
<td><?= $chart['nama'] ?></td>
 <td><?= $chart['isi_laporan'] ?></td>
 <td><img src="<?= base_url('assets/img/') . $chart['foto'] ?>" width="100" class="" ></td></td>
 <td><?= $chart['tanggapan'] ?></td>
 <td><?= $chart['proses'] ?></td>
</tr>
<?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated</div>
        </div>
      </div>
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
