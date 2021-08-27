<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APLIKASI PENGELOLAAN KEGIATAN KURIKULER DAN EKSTRAKURIKULER SEKOLAH MENENGAH ATAS (SMA) DI TANAH LAUT</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
    <!-- sweetaelt 2 js -->
    <script src="<?= base_url() ?>plugins/sweetalert2/sweetalert2.all.js"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url() ?>index2.html" class="h1"><b>MASUK</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">APLIKASI PENGELOLAAN KEGIATAN KURIKULER DAN EKSTRAKURIKULER SEKOLAH MENENGAH ATAS (SMA) DI TANAH LAUT</p>

                <form action="<?= site_url('Login/proses_login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="level" id="">
                            <option value="">-Pilih Level-</option>
                            <option value="Admin">Admin</option>
                            <option value="Operator">Operator</option>
                            <option value="Siswa">Siswa</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-universal-access"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <a class="btn btn-danger btn-block" href="<?= site_url('Login/daftar') ?>"> Daftar</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.social-auth-links -->


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
    <script>
        <?php
        $status = $this->session->flashdata('alert');
        if ($status) : ?>
            Swal.fire({
                title: 'Status',
                text: '<?= $status['message'] ?>',
                icon: '<?= $status['type'] ?>',
                showConfirmButton: false,
                timer: 2500

            })
        <?php endif; ?>
    </script>
</body>

</html>