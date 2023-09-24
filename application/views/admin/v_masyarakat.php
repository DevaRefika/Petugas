<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item"><b><?php echo $this->session->userdata('ses_nama');?></b></a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url().'index.php/login/logout'?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/page'?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="<?php echo base_url().'index.php/login/logout'?>">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/login/petugas'?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Table Petugas</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/login/masyarakat'?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Table Masyarakat</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/login/pengaduan'?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>Table Pengaduan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/login/tanggapan'?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>Table Tanggapan</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Masyarakat</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>Nik</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Telp</th>
                  <th>Aksi</th>
                 </tr>
                </thead>
                <tbody>
  <?php foreach($masyarakat as $chart) : ?>
<tr>
<td><?= $chart['nik'] ?></td>
<td><?= $chart['nama'] ?></td>
 <td><?= $chart['username'] ?></td>
 <td><?= $chart['telp'] ?></td>
<td><a href="<?php echo base_url().'index.php/masyarakat/edit_data_masyarakat/'.$chart['nik']; ?>">Edit ||</a>
<a href="<?= base_url('index.php/masyarakat/delete_masyarakat/') . $chart['nik'] ?>"onclick="return confirm('Hapus Data?');">Hapus</a>
</td>
</tr>
<?php endforeach ?>
                </tbody>
                  <button class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#modalTambah">Add Data</button>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url().'index.php/login/logout'?>">Logout</a>
        </div>
      </div>
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
      <form method="POST" action="<?= base_url('index.php/masyarakat/proses_registrasi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
                  <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nik" name="nik" placeholder="Nik" class="form-control" autocomplete="off" required>
              <label for="nik">Nik</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" autocomplete="off" required>
              <label for="nama">Nama</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" name="username" placeholder="Username" class="form-control" autocomplete="off" required>
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="telp" name="telp" placeholder="Telp" class="form-control" autocomplete="off" required>
              <label for="telp">Telp</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </form>
    </div>
  </div>
</div>

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
