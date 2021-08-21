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


                                    </div>

                                </div>
                                <div class="card-body konten">

                                    <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID Jadwal</th>
                                                <th>Hari / Waktu</th>
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
                                        <label class="col-sm-3 col-form-label">Hari :</label>
                                        <div class="col-sm-5">
                                            <select style="width: 100%" class="form-control form-control-sm select2" name="hari">
                                                <option value=""></option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Ju'mat">Ju'mat</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jam Mulai :</label>
                                        <div class="col-sm-5">
                                            <input type="time" name="jammulai" class="form-control form-control-sm">
                                            <input type="hidden" name="id" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jam Selesai :</label>
                                        <div class="col-sm-5">
                                            <input type="time" name="jamselesai" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ekstrakurikuler :</label>
                                        <div class="col-sm-5">
                                            <select style="width: 100%" class="form-control form-control-sm select2" name="ideskul">
                                                <option value=""></option>
                                            </select>
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
                url: "<?php echo site_url('Master/GetDataEskul'); ?>",
                method: "post",
                async: false,
                dataType: 'json',
                data: {
                    id: "<?= $_SESSION['npsn'] ?>"
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + '>' + data[i].namaeskul + '</option>';
                    }
                    $('select[name="ideskul"]').append(html);
                }
            });


            const config_table = {
                url: '<?= site_url('operator/Jadwal/GetData') ?>',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'id'
                    },
                    {
                        data: null,
                        render: function(row) {
                            return row.hari + ' / ' + TimesFormat(row.jammulai) + ' - ' + TimesFormat(row.jamselesai)
                        }
                    },
                    {
                        data: 'namaeskul',
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
                    targets: [0, 4],
                    orderable: false
                }]
            }
            table = ajax_table(config_table)


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('#form-input').prop('action', "<?= site_url('operator/Jadwal/insert') ?>")
                $('#modaloverlay2').hide();
            });

            const config_valid = {
                rules: {
                    hari: {
                        required: true,
                    },
                    jammulai: {
                        required: true,
                    },
                    jamselesai: {
                        required: true,
                    },
                    ideskul: {
                        required: true,
                    },
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
                    $('select[name="hari"]').val(r.hari).trigger('change');
                    $('select[name="ideskul"]').val(r.ideskul).trigger('change');
                    $('input[name="jammulai"]').val(r.jammulai);
                    $('input[name="jamselesai"]').val(r.jamselesai);
                    $('input[name="id"]').val(r.id);
                }, "<?= site_url('operator/Jadwal/GetDataByID') ?>", "<?= site_url('operator/Jadwal/update') ?>")
            });

            $('#tabel-data').on('click', '#btn-hapus', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                hapus_data("<?= site_url('operator/Jadwal/delete') ?>", data)
            });


        });
    </script>
</body>

</html>