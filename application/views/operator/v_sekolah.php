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
                                    </div>

                                </div>
                                <div class="card-body konten">

                                    <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>NPSN</th>
                                                <th>Nama Sekolah</th>
                                                <th>Status</th>
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
            <!-- /.content -->

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
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-info"></i> Peringatan !</h5>
                                    <b>NPSN</b> digunakan sebagai <b>nama pengguna</b> saat <b>masuk </b>!
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NPSN :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="npsn" class="form-control form-control-sm">
                                            <input type="hidden" name="idakun" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Sekolah :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namasekolah" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat :</label>
                                        <div class="col-sm-5">
                                            <textarea class="form-control" name="alamatsekolah" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Akreditasi :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="akreditasi" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email :</label>
                                        <div class="col-sm-5">
                                            <input type="email" name="email" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status :</label>
                                        <div class="col-sm-5">
                                            <input type="status" name="status" class="form-control form-control-sm" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kata Sandi :</label>
                                        <div class="col-sm-5">
                                            <input type="password" name="password" class="form-control form-control-sm">
                                            <input type="hidden" name="password_lama" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" id="btn-hapus" class="btn btn-danger mr-auto">Hapus</button> -->
                            <button type="button" id="btn-simpan" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
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
                url: '<?= site_url('operator/Sekolah/GetSekolah') ?>',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'npsn'
                    },
                    {
                        data: 'namasekolah'
                    },
                    {
                        data: 'status',
                        render: function(data, type, row) {
                            return '<center><span class="badge badge-' +
                                (data === 'Aktif' ? 'success' : (data === 'Tidak Aktif' ? 'danger' : 'primary')) +
                                '">' + data + '</span></center>'
                        }
                    },
                    {
                        data: null,
                        render: function(row) {
                            return '<center><button id="btn-ubah" class="btn btn-primary" data-id="' + row.npsn + '" data-toggle="tooltip" data-placement="top" title="Tombol Ubah">' +
                                ' <i class="fas fa-edit"></i>' +
                                ' </button>'
                        }
                    }
                ],
                order: [
                    [1, "desc"]
                ],
                columnDefs: [{
                    targets: [0, 4],
                    orderable: false
                }]
            }
            table = ajax_table(config_table)

            const config_valid = {
                rules: {
                    npsn: {
                        required: true,
                    },
                    namasekolah: {
                        required: true,
                    },
                    alamatsekolah: {
                        required: true,
                    },
                    akreditasi: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    status: {
                        required: true,
                    },
                    password: {
                        required: true,
                    }
                }
            }

            valid(config_valid)

            $('#btn-simpan').click(function() {
                simpan_data()
            });

            $('#tabel-data').on('click', '#btn-ubah', function() {
                $('input[name="npsn"]').prop('readonly', true)
                const data = {
                    param: {
                        npsn: $(this).data('id')
                    }
                }
                ajax_click(data, function data_ajax(r) {

                    $('input[name="npsn"]').val(r.npsn);
                    $('input[name="idakun"]').val(r.idakun);
                    $('input[name="namasekolah"]').val(r.namasekolah);
                    $('textarea[name="alamatsekolah"]').val(r.alamatsekolah);
                    $('input[name="akreditasi"]').val(r.akreditasi);
                    $('input[name="email"]').val(r.email);
                    $('input[name="status"]').val(r.status);
                    $('input[name="password"]').val(r.password);
                    $('input[name="password_lama"]').val(r.password);
                }, "<?= site_url('operator/Sekolah/GetSekolahByID') ?>", "<?= site_url('operator/Sekolah/update') ?>")
            });

            $('#tabel-data').on('click', '#btn-hapus', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                hapus_data("<?= site_url('operator/Sekolah/delete') ?>", data)
            });


        });
    </script>
</body>

</html>