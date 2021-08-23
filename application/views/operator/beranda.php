<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>


<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("_partials/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> <?= $title ?></h1>
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-6">
                            <?php $this->load->view('_partials/breadcrumb') ?>
                        </div>

                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header  d-flex p-0">
                                    <h5 class="card-title p-3"><?= $title ?></h5>
                                </div>
                                <div class="card-body konten">

                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info"><i class="fa fa-user-friends"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Siswa</span>
                                                    <span class="info-box-number" id="siswa">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success"><i class="fa fa-user-tie"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Kelas</span>
                                                    <span class="info-box-number" id="kelas">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-warning"><i class="fa fa-university"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Jurusan</span>
                                                    <span class="info-box-number" id="jurusan">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-danger"><i class="fa fa-user"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Ekstrakurikuler</span>
                                                    <span class="info-box-number" id="eskul">0</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

        <?php $this->load->view("_partials/footer.php") ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view("_partials/js.php") ?>
    <script>
        $(function() {
            $.ajax({
                type: "post",
                url: "<?= site_url('operator/Beranda/GetBerandaOperator') ?>",
                data: {
                    npsn: <?= $_SESSION['npsn'] ?>
                },
                dataType: "json",
                success: function(result) {
                    console.log(result)
                    $('#siswa').empty().text(result.siswa)
                    $('#kelas').empty().text(result.kelas)
                    $('#jurusan').empty().text(result.jurusan)
                    $('#eskul').empty().text(result.eskul)
                }
            });
        })
    </script>
</body>

</html>