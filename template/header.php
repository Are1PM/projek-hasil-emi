<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Bi sispek</title>
  <link rel="icon" type="image/png" href="assets/dist/img/logo.jpg">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-blue text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><?= date("d-m-Y") ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Anda login sebagai <b><?= $_SESSION['hak_akses'] ?></b>
          <i class="far fa-user"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/logo.jpg" alt="logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BI-SISPEK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['user'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php
            if ($_SESSION['hak_akses']=="unit_sla") { ?>
                
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?emi=data-driver" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data driver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-pegawai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-unitkerja" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data unit kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-kendaraan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data kendaraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-spbu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data spbu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-jenisbbm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jenis BBM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-jaraktempuh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jarak Tempuh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-tempatservis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data tempat servis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-unitsla" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data unit sla</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <?php
          // if ($_SESSION['hak_akses']=="pegawai" OR $_SESSION['hak_akses']=="unit_sla") { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-filter"></i>
              <p>
                Pengajuan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
            if ($_SESSION['hak_akses']=="pegawai" OR  $_SESSION['hak_akses']=="unit_sla") { ?>
              <li class="nav-item">
                <a href="?emi=data-pengajuanldp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembar Desposisi Pejabat</p>
                </a>
              </li>
            <?php } 
            if ($_SESSION['hak_akses']=="driver" OR  $_SESSION['hak_akses']=="unit_sla") { ?>
              <li class="nav-item">
                <a href="?emi=data-pengajuanbbm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kupon BBM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-pengajuanservis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemeliharaan</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check-square"></i>
              <p>
                Hasil verifikasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
            if ($_SESSION['hak_akses']=="pegawai" OR $_SESSION['hak_akses']=="unit_sla") { ?>
              <li class="nav-item">
                <a href="?emi=data-persetujuanldp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembar Desposisi Pejabat</p>
                </a>
              </li>
              <?php } ?>
              <?php
            if ($_SESSION['hak_akses']=="driver" OR $_SESSION['hak_akses']=="unit_sla") { ?>
              <li class="nav-item">
                <a href="?emi=data-persetujuanbbm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kupon BBM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?emi=data-persetujuanservis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemeliharaan</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="sesi.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
            if (!isset($_GET['emi'])) { ?>
            <h1 class="m-0 text-dark">Selamat Datang Di BI-SIsPeK</h1>
          <?php } ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><?= (isset($_GET['emi']))? $_GET['emi']:"" ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
          
          <!-- /.box -->
