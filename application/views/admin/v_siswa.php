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
                                        <a href="<?= site_url('admin/Siswa/Cetak') ?>" class="btn btn-warning" target="_blank" rel="noopener noreferrer"><i class="fas fa-print"></i>Cetak</a>

                                    </div>

                                </div>
                                <div class="card-body konten">

                                    <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>nisn</th>
                                                <th>Nama Siswa</th>
                                                <th>Tempat / Tgl Lahir</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Nama Kelas</th>
                                                <th>Nama Jurusan</th>
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
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-info"></i> Peringatan !</h5>
                                    <b>NISN</b> digunakan sebagai <b>nama pengguna</b> saat <b>masuk </b>!
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">nisn :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="nisn" class="form-control form-control-sm">
                                            <input type="hidden" name="id" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Siswa :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namasiswa" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="tempatlahir" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="tanggallahir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat :</label>
                                        <div class="col-sm-5">
                                            <textarea class="form-control" name="alamat" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin :</label>
                                        <div class="col-sm-5">
                                            <select style="width: 100%" class="form-control form-control-sm select2" name="jeniskelamin">
                                                <option value=""></option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kelas :</label>
                                        <div class="col-sm-5">
                                            <select style="width: 100%" class="form-control form-control-sm select2" name="idkelas">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jurusan :</label>
                                        <div class="col-sm-5">
                                            <select style="width: 100%" class="form-control form-control-sm select2" name="idjurusan">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kata Sandi Akun :</label>
                                        <div class="col-sm-5">
                                            <input type="password" name="password" class="form-control form-control-sm">
                                            <input type="hidden" name="password_lama" class="form-control form-control-sm">
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

            $.ajax({
                url: "<?php echo site_url('Master/GetDataJurusan'); ?>",
                method: "post",
                async: false,
                dataType: 'json',
                data: {
                    id: "<?= $_SESSION['npsn'] ?>"
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + '>' + data[i].namajurusan + '</option>';
                    }
                    $('select[name="idjurusan"]').append(html);
                }
            });

            $.ajax({
                url: "<?php echo site_url('Master/GetDataKelas'); ?>",
                method: "post",
                async: false,
                dataType: 'json',
                data: {
                    id: "<?= $_SESSION['npsn'] ?>"
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + '>' + data[i].namakelas + '</option>';
                    }
                    $('select[name="idkelas"]').append(html);
                }
            });

            const config_table = {
                url: '<?= site_url('admin/Siswa/GetData') ?>',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'nisn'
                    },
                    {
                        data: 'namasiswa'
                    },
                    {
                        data: null,
                        render: function(row) {
                            return row.tempatlahir + ", " + Tanggal(row.tanggallahir)
                        }
                    },
                    {
                        data: 'alamat'
                    },
                    {
                        data: 'jeniskelamin'
                    },
                    {
                        data: 'namakelas'
                    },
                    {
                        data: 'namajurusan'
                    },
                    {
                        data: null,
                        render: function(row) {
                            return '<center><button id="btn-ubah" class="btn btn-primary" data-id="' + row.nisn + '" data-toggle="tooltip" data-placement="top" title="Tombol Ubah">' +
                                ' <i class="fas fa-edit"></i>' +
                                ' </button>' +
                                ' <button  id="btn-hapus" class="btn btn-danger" data-id="' + row.nisn + '" data-idakun="' + row.idakun + '" data-toggle="tooltip" data-placement="top" title="Tombol Hapus">' +
                                ' <i class="fas fa-trash"></i>' +
                                ' </button></center>'
                        }
                    }
                ],
                order: [
                    [2, "asc"]
                ],
                columnDefs: [{
                    targets: [0, 8],
                    orderable: false
                }]
            }
            table = ajax_table(config_table)


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('#form-input').prop('action', "<?= site_url('admin/Siswa/insert') ?>")
                $('#modaloverlay2').hide();
            });

            const config_valid = {
                rules: {
                    npsn: {
                        required: true,
                    },
                    tempatlahir: {
                        required: true,
                    },
                    tanggallahir: {
                        required: true,
                        tgl: true,
                    },
                    alamat: {
                        required: true,
                    },
                    jeniskelamin: {
                        required: true,
                    },
                    idkelas: {
                        required: true,
                    },
                    idjurusan: {
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
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nisn"]').val(r.nisn);
                    $('input[name="id"]').val(r.idakun);
                    $('input[name="namasiswa"]').val(r.namasiswa);
                    $('input[name="tanggallahir"]').val(Tanggal(r.tanggallahir));
                    $('input[name="tempatlahir"]').val(r.tempatlahir);
                    $('select[name="jeniskelamin"]').val(r.jeniskelamin).trigger('change');
                    $('select[name="idkelas"]').val(r.idkelas).trigger('change');
                    $('select[name="idjurusan"]').val(r.idjurusan).trigger('change');
                    $('textarea[name="alamat"]').val(r.alamat);
                    $('input[name="password"]').val(r.password);
                    $('input[name="password_lama"]').val(r.password);
                }, "<?= site_url('admin/Siswa/GetDataByID') ?>", "<?= site_url('admin/Siswa/update') ?>")
            });

            $('#tabel-data').on('click', '#btn-hapus', function() {
                const data = {
                    param: {
                        id: $(this).data('id'),
                        idakun: $(this).data('idakun')
                    }
                }
                hapus_data("<?= site_url('admin/Siswa/delete') ?>", data)
            });


        });
    </script>
</body>

</html>