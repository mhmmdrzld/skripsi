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
                                        <button type="button" id="tambah-baru" class="btn btn-primary "><i class="fas fa-plus"></i>Tambah</button>

                                        <a href="<?= site_url('admin/Sekolah/CetakSekolah') ?>" class="btn btn-warning" target="_blank" rel="noopener noreferrer"><i class="fas fa-print"></i>Cetak</a>

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
                                                <th>Kelola</th>
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
        <?php $this->load->view("admin/_partials/modal.php") ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view("_partials/js.php") ?>
    <script>
        $(function() {
            bsCustomFileInput.init();

            table = $('#tabel-data').DataTable({
                "lengthMenu": [
                    [10, 25, 50, 100],
                    [10, 25, 50, 100]
                ],
                "responsive": true,
                "language": {
                    "url": "<?= base_url() ?>plugins/Indonesian-Alternative.json"
                },
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': '<?= site_url('admin/Sekolah/GetSekolah') ?>',
                    'data': {
                        //
                    }
                },

                'columns': [{
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
                            return '<center>' +
                                '<button id="btn-ubah" class="btn btn-primary" data-id="' + row.npsn + '" data-toggle="tooltip" data-placement="top" title="Tombol Ubah">' +
                                ' <i class="fas fa-edit"></i>' +
                                ' </button>' +
                                ' <button  id="btn-hapus" class="btn btn-danger" data-id="' + row.npsn + '" data-toggle="tooltip" data-placement="top" title="Tombol Hapus">' +
                                ' <i class="fas fa-trash"></i>' +
                                ' </button>' +
                                '</center>'
                        }
                    },
                    {
                        data: null,
                        render: function(row) {
                            return '<center>' +
                                '<div class="btn-group ml-1">' +
                                ' <button class="btn btn-secondary btn-sm" type="button">' +
                                '  Kelola' +
                                '</button>' +
                                ' <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                                '   <span class="sr-only">Toggle Dropdown</span>' +
                                '  </button>' +
                                '  <div class="dropdown-menu">' +
                                '  <a class="dropdown-item" href="<?= site_url() ?>admin/Siswa/index/' + row.npsn + '">Siswa</a>' +
                                '  <a class="dropdown-item" href="#">Kelas</a>' +
                                '  <a class="dropdown-item" href="#">Jurusan</a>' +
                                ' <div class="dropdown-divider"></div>' +
                                '  <a class="dropdown-item" href="#">Anggota</a>' +
                                '  <a class="dropdown-item" href="#">Jadwal</a>' +
                                '  <a class="dropdown-item" href="#">Prestasi</a>' +
                                // ' <div class="dropdown-divider"></div>' +
                                // '  <a class="dropdown-item" href="#">Berita Sekolah</a>' +
                                // '  <a class="dropdown-item" href="#">Berita Ekstrakurikuler</a>' +
                                '  </div>' +
                                '</div>' +
                                '</center>'
                        }
                    }
                ],
                "order": [
                    [1, "desc"]
                ],
                "columnDefs": [{
                    targets: [0, 4, 5],
                    orderable: false
                }],
                drawCallback: function(settings) {
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });

            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('input[name="npsn"]').prop('readonly', false)
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('#lihat-bukti').hide()
                $('#form-input').prop('action', "<?= site_url('admin/Sekolah/insert') ?>")
                $('#modaloverlay2').hide();
            });

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
                if (!$('input[name="bukti_lama"]').val()) {
                    $('input[name="bukti"]').prop('required', true)
                } else {
                    $('input[name="bukti"]').prop('required', false)
                }

                SimpanData()
            });

            // $('#btn-lihat').click(function() {
            //     $('#modal-kelola').modal('show');
            // });

            $('#tabel-data').on('click', '#btn-ubah', function() {
                $('input[name="npsn"]').prop('readonly', true)
                const data = {
                    param: {
                        npsn: $(this).data('id')
                    }
                }
                ajax_click(data, function data_ajax(r) {
                    $('input[name="npsn"]').val(r.npsn);
                    $('#lihat-bukti').show().prop('href', "<?= base_url('file/') ?>" + r.buktiakreditasi).text('lihat bukti')
                    $('input[name="idakun"]').val(r.idakun);
                    $('input[name="namasekolah"]').val(r.namasekolah);
                    $('textarea[name="alamatsekolah"]').val(r.alamatsekolah);
                    $('input[name="akreditasi"]').val(r.akreditasi);
                    $('input[name="email"]').val(r.email);
                    $('select[name="status"]').val(r.status).trigger('change');
                    $('input[name="password"]').val(r.password);
                    $('input[name="bukti_lama"]').val(r.buktiakreditasi);
                    $('input[name="password_lama"]').val(r.password);
                }, "<?= site_url('admin/Sekolah/GetSekolahByID') ?>", "<?= site_url('admin/Sekolah/update') ?>")
            });

            $('#tabel-data').on('click', '#btn-hapus', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                hapus_data("<?= site_url('admin/Sekolah/delete') ?>", data)
            });


        });
    </script>
</body>

</html>