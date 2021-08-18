<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPEG - BKPSDM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">

    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/sweetalert2/sweetalert2.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= site_url('login') ?>" class="h1"><b>SIMPEG</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Selamat datang di <b>SIMPEG</b></p>

                <form action="<?= site_url('login/proses_login') ?>" method="post">


                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Nama Pengguna">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
    <!-- select 2 js -->
    <script src="<?= base_url() ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- sweetaelt 2 js -->
    <script src="<?= base_url() ?>plugins/sweetalert2/sweetalert2.all.js"></script>
    <script>
        <?php
        $status = $this->session->flashdata('alert');
        if ($status) : ?>

            Swal.fire({
                title: 'Status',
                text: '<?= $status['message'] ?>',
                icon: '<?= $status['type'] ?>',
                showConfirmButton: false,
                timer: 1500

            })
        <?php endif; ?>
    </script>
</body>

</html>