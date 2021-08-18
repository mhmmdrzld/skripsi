<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPEG </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/cssku.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/select2/css/select2.min.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> -->
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/sweetalert2/sweetalert2.min.css">


    <!-- jquery datatable css -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables/jquery.dataTables.min.css"> -->
  
    <!-- bootsrap datatable css -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"> <!-- ==========dipakai========= -->
    <!-- responsibe bootsrap datatable css -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> <!-- ==========dipakai========= -->

    <!-- jQuery v3.5.1 -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- select 2 js -->
    <script src="<?= base_url() ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- sweetaelt2 js -->
    <script src="<?= base_url() ?>plugins/sweetalert2/sweetalert2.all.js"></script>
    <!-- momentjs -->
    <script src="<?= base_url() ?>plugins/moment/moment-with-locales.min.js"></script>

    <!-- jquery datatable js -->
    <script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.js"></script> <!-- ==========dipakai========= -->
    <!-- bootsrap datatable css -->
    <script src="<?= base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> <!-- ==========dipakai========= -->
    
    <!-- <script src="<?= base_url() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> ==========dipakai========= -->

    <script src="<?= base_url() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> <!-- ==========dipakai========= -->


</head>

<body class="hold-transition sidebar-collapse layout-top-nav layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="<?= base_url() ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light"><b>SIMPEG </b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <?= $menu ?>

                </div>


                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Custom Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button">
                            <i class="fas fa-user"></i>
                            <?= $this->session->userdata('username'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('login/logout') ?>" role="button">
                            <i class="fas fa-sign-out-alt"></i>
                            Keluar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->