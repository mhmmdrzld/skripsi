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
                            <h1 class="m-0"> <?= $title ?> <b><?= $_SESSION['nama_sekolah'] ?></b></h1>
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
                                    <h5 class="card-title p-3"><?= $title ?> <b><?= $_SESSION['nama_sekolah'] ?></b></h5>

                                </div>
                                <div class="card-body konten">

                                    <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nama Ekstrakurikuler</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="modal fade" id="modal-data">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="overlay" id="modaloverlay2">
                            <i class="fas fa-2x fa-sync fa-spin"></i>
                        </div>
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $title ?> <b><?= $_SESSION['nama_sekolah'] ?></b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <form class="form-horizontal" id="form-input" method="POST">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Ekstrakurikuler :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namaeskul" class="form-control form-control-sm">
                                            <input type="hidden" name="id" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jumlah Anggota:</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="jumlahanggota" class="form-control form-control-sm" readonly>
                                        </div>
                                    </div>


                                    <div>
                                        <label class="col-sm-3 col-form-label">Jadwal :</label>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Hari</th>
                                                    <th>Waktu</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-jadwal">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn-simpan" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
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

            const config_table = {
                url: '<?= site_url('siswa/Eskul/GetData') ?>',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'namaeskul'
                    },
                    {
                        data: null,
                        render: function(row) {
                            return '<center>' +
                                ' <button  id="btn-lihat" class="btn btn-success" data-id="' + row.id + '" data-toggle="tooltip" data-placement="top" title="Tombol Lihat">' +
                                ' <i class="fas fa-eye"></i>' +
                                ' </button>' +
                                '</center>'
                        }
                    }
                ],
                order: [
                    [1, "asc"]
                ],
                columnDefs: [{
                    targets: [0, 2],
                    orderable: false
                }]
            }
            table = ajax_table(config_table)


            $('#tabel-data').on('click', '#btn-lihat', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                ajax_click(data, function data_ajax(r) {
                    $('#btn-simpan').hide()
                    $('input[name="namaeskul"]').val(r.namaeskul).prop('readonly', true);
                    $('input[name="id"]').val(r.id);
                    $('#table-jadwal').empty()

                    $.ajax({
                        type: "post",
                        url: "<?= site_url('siswa/Eskul/GetJumlahAnggota') ?>",
                        data: {
                            id: r.id
                        },
                        dataType: "json",
                        success: function(result) {
                            $('input[name="jumlahanggota"]').val(result)
                        }
                    });

                    $.ajax({
                        type: 'post',
                        url: "<?= site_url('siswa/Eskul/GetDataJadwal') ?>",
                        data: {
                            id: r.id
                        },
                        dataType: "json",
                        success: function(res) {
                            if (res.length !== 0) {
                                for (i = 0; i < res.length; i++) {
                                    $str = '<tr class="text-center">' +
                                        '<td>' + res[i]['hari'] + '</td>' +
                                        '<td>' + TimesFormat(res[i]['jammulai']) + ' - ' + TimesFormat(res[i]['jammulai']) + '</td>' +
                                        '</tr>';

                                }
                            } else {
                                $str = '<tr class="text-center"><td colspan="2">Tidak Ada Jadwal</td></tr>'
                            }
                            $('#table-jadwal').append($str);
                        }
                    });
                }, "<?= site_url('siswa/Eskul/GetDataByID') ?>")
            });


        });
    </script>
</body>

</html>