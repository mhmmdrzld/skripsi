<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand">
            <img src="<?= base_url() ?>/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= SITE_NAME ?></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= site_url($this->uri->segment(1) . '/Beranda'); ?>" class="nav-link">Beranda</a>
                </li>

                <!-- Menu Admin -->
                <?php if ($_SESSION['level'] === 'Admin') { ?>
                    <li class="nav-item">
                        <a href="<?= site_url('admin/Sekolah'); ?>" class="nav-link">Data Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('admin/Eskul'); ?>" class="nav-link">Data Esktrakurikuler</a>
                    </li>
                <?php } ?>

                <!-- Menu Operator -->
                <?php if ($_SESSION['level'] === 'Operator') { ?>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Master</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= site_url('operator/Sekolah'); ?>" class="dropdown-item">Data Sekolah</a></li>
                            <li><a href="<?= site_url('operator/Siswa'); ?>" class="dropdown-item">Data Siswa</a></li>
                            <li><a href="<?= site_url('operator/Kelas'); ?>" class="dropdown-item">Data Kelas</a></li>
                            <li><a href="<?= site_url('operator/Jurusan'); ?>" class="dropdown-item">Data Jurusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Kegiatan</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= site_url('operator/Eskul'); ?>" class="dropdown-item">Data Esktrakurikuler</a></li>
                            <li><a href="<?= site_url('operator/Anggota'); ?>" class="dropdown-item">Data Anggota</a></li>
                            <li><a href="<?= site_url('operator/Jadwal'); ?>" class="dropdown-item">Data Jadwal</a></li>
                            <li><a href="<?= site_url('operator/Prestasi'); ?>" class="dropdown-item">Data Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Berita</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= site_url('operator/Berita/ekstrakurikuler'); ?>" class="dropdown-item">Berita Esktrakurikuler</a></li>
                            <li><a href="<?= site_url('operator/Berita/sekolah'); ?>" class="dropdown-item">Berita Sekolah</a></li>
                        </ul>
                    </li>
                <?php } ?>

                <!-- Menu Admin -->
                <?php if ($_SESSION['level'] === 'Siswa') { ?>

                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Kegiatan</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= site_url('siswa/Eskul'); ?>" class="dropdown-item">Data Esktrakurikuler</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Berita</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= site_url('siswa/Berita/ekstrakurikuler'); ?>" class="dropdown-item">Berita Esktrakurikuler</a></li>
                            <li><a href="<?= site_url('siswa/Berita/sekolah'); ?>" class="dropdown-item">Berita Sekolah</a></li>
                        </ul>
                    </li>
                <?php } ?>


            </ul>

            <!-- SEARCH FORM -->

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <b> <?= $_SESSION['username'] ?></b>
                    <?php if ($_SESSION['level'] != 'Admin') : ?>
                        <?= (isset($_SESSION['nama_sekolah']) ? ' ( ' . $_SESSION['nama_sekolah'] . ' )' : '') ?>
                    <?php endif ?>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Login/logout') ?>" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    Keluar
                </a>
            </li>
        </ul>
    </div>
</nav>