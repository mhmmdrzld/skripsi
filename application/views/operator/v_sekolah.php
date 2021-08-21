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
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("operator/_partials/modal.php") ?>
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