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
                                    <div class="ml-auto mr-3 p-2">
                                        <button type="button" id="tambah-baru" class="btn btn-primary "><i class="fas fa-plus"></i>Tambah</button>
                                        <a href="<?= site_url('admin/Kelas/Cetak') ?>" class="btn btn-warning" target="_blank" rel="noopener noreferrer"><i class="fas fa-print"></i>Cetak</a>

                                    </div>

                                </div>
                                <div class="card-body konten">

                                    <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID Kelas</th>
                                                <th>Nama Kelas</th>
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
                                        <label class="col-sm-3 col-form-label">Nama Kelas :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namakelas" class="form-control form-control-sm">
                                            <input type="hidden" name="id" class="form-control form-control-sm">
                                        </div>
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
                url: '<?= site_url('admin/Kelas/GetData') ?>',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'id'
                    },
                    {
                        data: 'namakelas'
                    },
                    {
                        data: null,
                        render: function(row) {
                            return '<center><button id="btn-ubah" class="btn btn-primary" data-id="' + row.id + '" data-toggle="tooltip" data-placement="top" title="Tombol Ubah">' +
                                ' <i class="fas fa-edit"></i>' +
                                ' </button>' +
                                ' <button  id="btn-hapus" class="btn btn-danger" data-id="' + row.id + '" data-toggle="tooltip" data-placement="top" title="Tombol Hapus">' +
                                ' <i class="fas fa-trash"></i>' +
                                ' </button></center>'
                        }
                    }
                ],
                order: [
                    [1, "desc"]
                ],
                columnDefs: [{
                    targets: [0, 3],
                    orderable: false
                }]
            }
            table = ajax_table(config_table)


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('#form-input').prop('action', "<?= site_url('admin/Kelas/insert') ?>")
                $('#modaloverlay2').hide();
            });

            const config_valid = {
                rules: {
                    namakelas: {
                        required: true,
                    }
                }
            }

            valid(config_valid)

            $('#btn-simpan').click(function() {
                simpan_data()
            });

            $('#tabel-data').on('click', '#btn-ubah', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                ajax_click(data, function data_ajax(r) {
                    $('input[name="namakelas"]').val(r.namakelas);
                    $('input[name="id"]').val(r.id);
                }, "<?= site_url('admin/Kelas/GetDataByID') ?>", "<?= site_url('admin/Kelas/update') ?>")
            });

            $('#tabel-data').on('click', '#btn-hapus', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                hapus_data("<?= site_url('admin/Kelas/delete') ?>", data)
            });


        });
    </script>
</body>

</html>