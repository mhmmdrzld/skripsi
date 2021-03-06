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
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url() ?>index2.html" class="h1"><b>DAFTAR SEKOLAH</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">APLIKASI PENGELOLAAN KEGIATAN KURIKULER DAN EKSTRAKURIKULER SEKOLAH MENENGAH ATAS (SMA) DI TANAH LAUT</p>

                <form action="<?= base_url('Login/proses_daftar') ?>" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="npsn" placeholder="NPSN" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-id-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="namasekolah" class="form-control" placeholder="Nama Sekolah" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-graduation-cap"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="alamatsekolah" class="form-control" id="" cols="30" rows="5" required>Alamat Sekolah</textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="akreditasi" class="form-control" placeholder="Akreditasi" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-font"></span>
                            </div>
                        </div>
                    </div>
                    * format file jpg|png|jpeg|pdf
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="bukti" required>
                            <label class="custom-file-label" for="exampleInputFile">Pilih Berkas</label>
                        </div>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-upload"></span>
                            </div>
                        </div>

                    </div>
                    <div class="input-group mb-3">
                        <input type="text   " name="email" class="form-control" placeholder="E-mail" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="<?= site_url('Login/') ?>" class="text-center">Sudah Memiliki Akun</a>
                    </div>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        bsCustomFileInput.init();
    </script>
</body>

</html>