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
                                                <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Ekstrakurikuler</span>
                                                    <span class="info-box-number" id="eskul">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success"><i class="fa fa-user"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Ekstrakurikuler Saya</span>
                                                    <span class="info-box-number" id="eskul-saya">0</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="list-berita">
                        <?php foreach ($data as $data) :
                        ?>
                            <div class="col-md-12">
                                <div class="card card-widget">
                                    <div class="card-header">
                                        <div class="user-block">
                                            <img class="img-circle" src="<?= base_url(); ?>dist/img/news.png" alt="User Image">
                                            <span class="username"><a href="#"><?= $data->judulberita ?></a> <span class="badge badge-secondary"><?= $data->jeniskegiatan ?></span></span>
                                            <span class="description"><?= $data->tanggalberita ?></span>
                                        </div>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" title="Mark as read">
                                                <i class="far fa-circle"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body summernote" data-id="<?= $data->id ?>">
                                        <?= $data->isiberita ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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

            // $('.summernote').each(function(i, obj) {
            //     $(obj).summernote({
            //         onblur: function(e) {
            //             var id = $(obj).data('id');
            //             var sHTML = $(obj).code();
            //             alert(sHTML);
            //         }
            //     });
            // });

            $.ajax({
                type: "post",
                url: "<?= site_url('siswa/Beranda/GetBerandaSiswa') ?>",
                data: {
                    npsn: <?= $_SESSION['npsn'] ?>,
                    nisn: <?= $_SESSION['username'] ?>
                },
                dataType: "json",
                success: function(result) {
                    console.log(result)
                    $('#eskul').empty().text(result.eskul)
                    $('#eskul-saya').empty().text(result.eskulsaya)
                }
            });

            // $.ajax({
            //     type: "post",
            //     url: "<?= site_url('siswa/Beranda/GetBerita') ?>",
            //     data: {
            //         npsn: <?= $_SESSION['npsn'] ?>
            //     },
            //     dataType: "json",
            //     success: function(result) {
            //         console.log(result.length)
            //         if (result) {
            //             for (i = 0; i < result.length; i++) {
            //                 $str = '<tr id="total">' +
            //                     '<th colspan="2" class="text-center">Total</th>' +
            //                     '<th>' + resdok[i]['kredit'] + '</th>' +
            //                     '<th>' + resdok[i]['debit'] + '</th>' +
            //                     '<th>' + resdok[i]['saldo'] + '</th>' +
            //                     '</tr>';
            //                 $('#list-berita').append($str);
            //             }

            //         }
            //     }
            // });
        })
    </script>
</body>

</html>