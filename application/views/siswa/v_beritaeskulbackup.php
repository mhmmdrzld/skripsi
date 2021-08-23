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
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Ekstrakurikuler</th>
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

            <div class="modal fade" id="modal-data" style="overflow:auto">
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
                        <div class="modal-body">
                            <form class=" form-horizontal" id="form-input" method="POST">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Judul :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="judulberita" class="form-control form-control-sm">
                                            <input type="hidden" name="id" class="form-control form-control-sm">
                                            <input type="hidden" name="jeniskegiatan" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal :</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="tanggalberita" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deskripsi :</label>
                                        <div class="col-sm-9">
                                            <i>Pastikan jika ingin mengunggah gambar, gambar harus berukuran <b>
                                                    < 500 Kb </b>!</i>
                                            <textarea id="summernote" name="isiberita">
                                           </textarea>
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
                url: "<?php echo site_url('siswa/Berita/CekEskulAnggota'); ?>",
                method: "post",
                async: false,
                dataType: 'json',
                data: {
                    nisn: "<?= $_SESSION['username'] ?>"
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + '>' + data[i].namaeskul + '</option>';
                    }
                    $('select[name="ideskul"]').append(html);
                }
            });


            //cek keanggotaan
            $.ajax({
                url: "<?php echo site_url('siswa/Berita/CekStatusAnggota'); ?>",
                method: "post",
                async: false,
                dataType: 'json',
                data: {
                    nisn: "<?= $_SESSION['username'] ?>"
                },
                success: function(data) {
                    if (data.stat == 0) {
                        $("#tambah-baru").hide()
                    } else {
                        $("#tambah-baru").show()
                    }
                }
            });

            $('#summernote').summernote({
                placeholder: 'Deskripsi',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                ],
            });


            const config_table = {
                url: '<?= site_url('siswa/Berita/GetData') ?>',
                data: {
                    jeniskegiatan: "<?= $jenis ?>"

                },
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'judulberita'
                    },
                    {
                        data: 'tanggalberita',
                        render: function(data) {
                            return Tanggal(data)
                        }
                    },
                    {
                        data: 'namaeskul'
                    },
                    {
                        data: nu,
                        defaultContent: '',
                        render: aksi
                    }
                ],
                order: [
                    [2, "Desc"]
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
                $('#form-input').prop('action', "<?= site_url('siswa/Berita/insert') ?>")
                $('input[name="jeniskegiatan"]').val('<?= $jenis ?>');
                $('textarea[name="isiberita"]').summernote("reset");
                $('#modaloverlay2').hide();
            });

            const config_valid = {
                rules: {
                    judulberita: {
                        required: true,
                    },
                    ideskul: {
                        required: true,
                    },
                    tanggalberita: {
                        required: true,
                        tgl: true,
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
                    $('textarea[name="isiberita"]').summernote('code', r.isiberita);
                    $('input[name="judulberita"]').val(r.judulberita);
                    $('input[name="tanggalberita"]').val(Tanggal(r.tanggalberita));
                    $('input[name="id"]').val(r.id);
                    $('input[name="jeniskegiatan"]').val('<?= $jenis ?>');
                    $('select[name="ideskul"]').val(r.idkegiatan).trigger('change');

                }, "<?= site_url('siswa/Berita/GetDataByID') ?>", "<?= site_url('siswa/Berita/update') ?>")
            });

            $('#tabel-data').on('click', '#btn-hapus', function() {
                const data = {
                    param: {
                        id: $(this).data('id')
                    }
                }
                hapus_data("<?= site_url('siswa/Berita/delete') ?>", data)
            });


        });
    </script>
</body>

</html>