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
	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">
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
				<li><a href="<?php echo base_url().'index.php/user/'?>" class="active">Home</a></li>
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
</br>
					<a href="<?php echo base_url().'index.php/login/logout'?>" class="site-btn sb-info">Logout</a>
					<a href="#" class="site-btn sb-dark	" onclick="javascript:history.back()">Kembali</a>
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
      <div class="card-header">Edit</div>
      <div class="card-body">
        <form method="POST" action="<?php echo base_url('index.php/pengaduan2/do_update_pengaduan')?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="<?php echo $id_pengaduan?>" id="id_pengaduan" name="id_pengaduan" placeholder="Id_pengaduan" class="form-control" autocomplete="off" readonly required>
              <label for="id_pengaduan">Id Pengaduan</label>
            </div>
          </div>         
          <div class="form-group">
            <div class="form-label-group">
              <input type="date" value="<?php echo $tanggal?>" id="tanggal" name="tanggal" placeholder="Tanggal" class="form-control" autocomplete="off" required>
              <label for="tanggal">Tanggal</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="<?php echo $nik?>" id="nik" name="nik" placeholder="Nik" class="form-control" autocomplete="off" readonly required>
              <label for="nik">Nik</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="<?php echo $isi_laporan?>" id="isi_laporan" name="isi_laporan" placeholder="Isi_laporan" class="form-control" autocomplete="off" required>
              <label for="isi_laporan">Isi Laporan</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-secondary" onclick="javascript:history.back()"><span ></span>Kembali</button>
        </form>
      </div>
    </div>
  </div>
	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.slicknav.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/main.js') ?>"></script>
	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin.min.js') ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
  <script src="<?= base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
	</body>
</html>
