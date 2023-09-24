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
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pengaduan Anda</div>
          <div class="card-body">
		  <button class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#modalTambah">Tambahkan Pengaduan</button>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>Tanggal</th>
                  <th>Nik Pengadu</th>
                  <th>Nama Pengadu</th>
                  <th>Isi Laporan</th>
                  <th>Foto</th>
                  <th>Aksi</th>
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
<td><a href="<?php echo base_url().'index.php/pengaduan2/edit_data_pengaduan/'.$chart['id_pengaduan']; ?>">Edit ||</a>
<a href="<?= base_url('index.php/pengaduan2/delete_pengaduan/') . $chart['id_pengaduan'] ?>"onclick="return confirm('Hapus Data?');">Hapus</a>
</td>
</tr>
<?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated</div>
        </div>
      </div>
	

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?= base_url('index.php/pengaduan2/proses_registrasi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
                  <div class="form-group">
            <div class="form-label-group">
              <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal" class="form-control" autocomplete="off" required>
              <label for="tanggal">Tanggal</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nik" name="nik" placeholder="Nik" class="form-control" autocomplete="off" value="<?php echo $this->session->userdata('ses_nik');?>" readonly required>
              <label for="nik">Nik Pengadu</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="isi_laporan" name="isi_laporan" placeholder="Isi_laporan" class="form-control" autocomplete="off" required>
              <label for="isi_laporan">Isi laporan</label>
            </div>
          </div>
          <div class="form-group">
         <input type="file" name="foto">
        </div>
          <button type="submit" class="btn btn-primary">Register</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
