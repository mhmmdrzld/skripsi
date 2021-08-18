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
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/cssku.css">
    <!-- js -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
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
                    <ul class="navbar-nav">

                        <?php foreach ($menu as $mn) : ?>
                            <?php if ($mn['parent_id'] == 0) : ?>
                                <li class="nav-item <?= (($mn['url'] == '') ? 'dropdown' : '') ?>">

                                    <?php if ($mn['url'] == '') { ?>
                                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?= $mn['name'] . "+" . $mn['parent_id'] . ">" . $mn['id'] ?></a>
                                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

                                            <?php foreach ($menu as $mnx) : ?>
                                                <?php if ($mn['id'] == $mnx['parent_id']) : ?>
                                                    <li <?= (($mnx['url'] == '') ? 'class="dropdown-submenu dropdown-hover"' : '') ?>>
                                                        <?php if ($mnx['url'] == '') { ?>
                                                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle" style="margin-right: 40px;"><?= $mnx['name'] . "+" . $mnx['parent_id'] . ">" . $mnx['id'] ?></a>
                                                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                                                <?php foreach ($menu as $mnxx) : ?>
                                                                    <?php if ($mnx['id'] == $mnxx['parent_id']) : ?>
                                                                        <a href="<?= base_url($mnxx['url']) ?>" class="dropdown-item"><?= $mnxx['name'] . "+" . $mnxx['parent_id'] . ">" . $mnxx['id'] ?></a>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php } else { ?>
                                                            <a href="<?= base_url($mnx['url']) ?>" class="dropdown-item"><?= $mnx['name'] . "+" . $mnx['parent_id'] . ">" . $mnx['id'] ?></a>
                                                        <?php } ?>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                        </ul>
                                    <?php } else { ?>
                                        <a href="<?= base_url($mn['url']) ?>" class="nav-link"><?= $mn['name'] ?></a>
                                    <?php } ?>
                                    
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <!-- <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Induk</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url('data_induk/identitas_pegawai') ?>" class="dropdown-item">Indentitas Pegawai</a></li>
                                <li><a href="<?= base_url('data_induk/cpns') ?>" class="dropdown-item">CPNS</a></li>
                                <li><a href="<?= base_url('data_induk/apns') ?>" class="dropdown-item">PNS</a></li>
                                <li><a href="<?= base_url('data_induk/tkerja') ?>" class="dropdown-item">Lokasi Kerja</a></li>
                                <li><a href="<?= base_url('data_induk/masuk_keluar') ?>" class="dropdown-item">Masuk/Keluar</a></li>
                                <li><a href="<?= base_url('data_induk/jakhir') ?>" class="dropdown-item">Jabatan Terakhir</a></li>
                                <li><a href="<?= base_url('data_induk/pakhir') ?>" class="dropdown-item">Pangkat Terakhir</a></li>
                                <li><a href="<?= base_url('data_induk/gkkhir') ?>" class="dropdown-item">Gaji Pokok Terakhir</a></li>
                                <li><a href="<?= base_url('data_induk/pdakhir') ?>" class="dropdown-item">Pendidikan Terakhir</a></li>
                                <li><a href="<?= base_url('data_induk/pkerja') ?>" class="dropdown-item">Pengalaman Kerja Sebelumnya</a></li>
                                <li><a href="<?= base_url('data_induk/ketbadan') ?>" class="dropdown-item">Keterangan Fisik</a></li>
                                <li><a href="<?= base_url('data_induk/photo') ?>" class="dropdown-item">Foto</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Riwayat</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Riwayat Keluarga</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li><a href="<?= base_url('riwayat/rakand') ?>" class="dropdown-item">Riwayat Ayah Kandung</a></li>
                                        <li><a href="<?= base_url('riwayat/ibukand') ?>" class="dropdown-item">Riwayat Ibu Kandung</a></li>

                                        <li><a href="<?= base_url('riwayat/rsistri') ?>" class="dropdown-item">Riwayat Suami/Istri</a></li>
                                        <li><a href="<?= base_url('riwayat/ranak') ?>" class="dropdown-item">Riwayat Anak</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle" style="margin-right: 40px;">Riwayat Pendidikan</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li><a href="<?= base_url('riwayat/rpendum') ?>" class="dropdown-item">Riwayat Pendidikan Umum</a></li>
                                        <li><a href="<?= base_url('riwayat/rdikfung') ?>" class="dropdown-item">Riwayat Diklat Fungsional</a></li>
                                        <li><a href="<?= base_url('riwayat/rdikstr') ?>" class="dropdown-item">Riwayat Diklat Struktural</a></li>
                                        <li><a href="<?= base_url('riwayat/rdiktek') ?>" class="dropdown-item">Riwayat Diklat Teknis</a></li>
                                        <li><a href="<?= base_url('riwayat/rkursus') ?>" class="dropdown-item">Riwayat Kursus</a></li>
                                        <li><a href="<?= base_url('riwayat/rseminar') ?>" class="dropdown-item">Riwayat Seminar</a></li>
                                        <li><a href="<?= base_url('riwayat/rpenyaji') ?>" class="dropdown-item">Riwayat Penyaji</a></li>
                                        <li><a href="<?= base_url('riwayat/rtatar') ?>" class="dropdown-item">Riwayat Penataran</a></li>
                                        <li><a href="<?= base_url('riwayat/rkaryatulis') ?>" class="dropdown-item">Riwayat Karya Tulis</a></li>
                                        <li><a href="<?= base_url('riwayat/rtubel') ?>" class="dropdown-item">Riwayat Belajar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Riwayat Pegawai</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li><a href="<?= base_url('riwayat/rtugas') ?>" class="dropdown-item">Riwayat Tugas</a></li>
                                        <li><a href="<?= base_url('riwayat/rjabatan') ?>" class="dropdown-item">Riwayat Jabatan</a></li>
                                        <li><a href="<?= base_url('riwayat/rtkerja') ?>" class="dropdown-item">Riwayat Lokasi Kerja</a></li>
                                        <li><a href="<?= base_url('riwayat/rjabatanplt') ?>" class="dropdown-item">Riwayat Jabatan PLT</a></li>
                                        <li><a href="<?= base_url('riwayat/rpangkat') ?>" class="dropdown-item">Riwayat Kepangkatan</a></li>
                                        <li><a href="<?= base_url('riwayat/rjasa') ?>" class="dropdown-item">Riwayat Tanda Jasa/Penghargaan</a></li>
                                        <li><a href="<?= base_url('riwayat/rhukuman') ?>" class="dropdown-item">Riwayat Hukuman</a></li>
                                        <li><a href="<?= base_url('riwayat/rcuti') ?>" class="dropdown-item">Riwayat Cuti</a></li>
                                        <li><a href="<?= base_url('riwayat/raorg') ?>" class="dropdown-item">Riwayat Organisasi</a></li>
                                        <li><a href="<?= base_url('riwayat/rberkala') ?>" class="dropdown-item">Riwayat Gaji Berkala</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('riwayat/pensiun') ?>" class="dropdown-item">Pensiun</a></li>
                            </ul>
                        </li>

                    </ul>
                </div> -->


                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Custom Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button">
                            <i class="fas fa-user"></i>
                            Alexander GGWP
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php" role="button">
                            <i class="fas fa-sign-out-alt"></i>
                            Keluar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->