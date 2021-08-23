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
                                                <span class="info-box-icon bg-success"><i class="fa fa-school"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Sekolah Aktif</span>
                                                    <span class="info-box-number" id="aktif">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info"><i class="fa fa-school"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Sekolah Belum Verifikasi</span>
                                                    <span class="info-box-number" id="belum">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-danger"><i class="fa fa-school"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Sekolah Tidak Aktif</span>
                                                    <span class="info-box-number" id="taktif">0</span>
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
        <?php $this->load->view("admin/_partials/modal.php") ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view("_partials/js.php") ?>
    <script>
        $(function() {
            $.ajax({
                type: "post",
                url: "<?= site_url('admin/Beranda/GetBerandaAdmin') ?>",
                dataType: "json",
                success: function(result) {
                    console.log(result)
                    $('#aktif').empty().text(result.aktif)
                    $('#taktif').empty().text(result.taktif)
                    $('#belum').empty().text(result.belum)
                }
            });
        })
    </script>
</body>

</html>