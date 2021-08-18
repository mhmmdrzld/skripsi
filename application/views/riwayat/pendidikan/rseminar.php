<!-- content -->
<div class="content-wrapper">

    <!-- content header -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <?= $title ?> <small></small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SIMPEG</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- content header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <?php $this->view('cari') ?>

                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header d-flex p-0">
                            <h5 class="card-title p-3"><?= $title ?></h5>
                            <div class="ml-auto mr-3 p-2">
                                <button type="button" id="tambah-baru" class="btn btn-primary ">Tambah Data Baru</button>
                            </div>
                        </div>
                        <div class="card-body konten">
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-info"></i> Perhatian !</h5>
                                Klik <b>nama Seminar</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Seminar</th>
                                        <th>Tempat</th>
                                        <th>Penyelenggara</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Akhir</th>
                                        <th>Nama Piagam</th>
                                        <th>Tgl Piagam</th>
                                        <th>Kedudukan</th>
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
    <!-- /. maincontent -->
</div>
<!-- content -->

<div class="modal fade" id="modal-data">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="overlay" id="modaloverlay2">
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div>
            <div class="modal-header">
                <h4 class="modal-title">Data <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form class="form-horizontal" id="form-input" method="POST">
                    <div class="card-body ">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Induk Pegawai :</label>
                            <div class="col-sm-3">
                                <input type="text" name="nip" class="form-control form-control-sm" readonly>
                                <input type="hidden" name="id">
                            </div>
                            <div class="col-sm-5" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Seminar :</label>
                            <div class="col-sm-5">
                                <textarea class="form-control upper" name="rseminar_nseminar" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rseminar_tempat" name="rseminar_tempat" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penyelenggara:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rseminar_pant" name="rseminar_pan" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Mulai :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rseminar_tmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akhir :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rseminar_takhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Jam:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rseminar_jam" name="rseminar_jam" class="form-control form-control-sm decimal">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Piagam :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rseminar_npiagam" name="rseminar_npiagam" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Piagam :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rseminar_tpiagam" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kedudukan :</label>

                            <div class="col-sm-5">
                                <input type="text" id="rseminar_kedudukan" name="rseminar_kedudukan" class="form-control form-control-sm upper">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>

                            <div class="col-sm-6">
                                <input style="width:100%" type="text" id="rseminar_npej" name="rseminar_npej" class="form-control form-control-sm upper">
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" id="btn-hapus" class="btn btn-danger mr-auto">Hapus</button>
                <button type="button" id="btn-simpan" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $(document).ready(function() {


        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rseminar/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'NSEMINAR',
                    },
                    {
                        data: 'tempat'

                    },
                    {
                        data: 'pan'
                    },
                    {
                        data: 'tmulai',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'takhir',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'NPIAGAM'
                    },
                    {
                        data: 'TPIAGAM',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'kedudukan'
                    },
                ],
                order: [
                    [4, "desc"]
                ]
            }

            table = ajax_table(config_table)

            $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
                var data = table.row(this).data();
                $('input[name="id"]').val(data.id);
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())

                    $('textarea[name="rseminar_nseminar"]').val(r.NSEMINAR);
                    $('input[name="rseminar_tempat"]').val(r.TEMPAT);
                    $('input[name="rseminar_pan"]').val(r.PAN);
                    $('input[name="rseminar_tmulai"]').val(tanggal_null(r.TMULAI));
                    $('input[name="rseminar_takhir"]').val(tanggal_null(r.TAKHIR));
                    $('input[name="rseminar_npiagam"]').val(r.NPIAGAM);
                    $('input[name="rseminar_jam"]').val(r.JAM);
                    $('input[name="rseminar_tpiagam"]').val(tanggal_null(r.TPIAGAM));
                    $('input[name="rseminar_kedudukan"]').val(r.KEDUDUKAN)
                    $('input[name="rseminar_npej"]').val(r.NPEJ)
                    $('#form-input').prop('action', '<?= site_url('Rseminar/update') ?>')
                }, "<?= site_url('Rseminar/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rseminar/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rseminar_nseminar: {
                        required: true,
                    },
                    rseminar_tempat: {
                        required: true,
                    },
                    rseminar_pan: {
                        required: true,
                    },
                    rseminar_tmulai: {
                        date: true,
                    },
                    rseminar_takhir: {
                        date: true,
                    },
                    rseminar_tpiagam: {
                        date: true,
                    }
                },
                messages: {
                    rseminar_nseminar: {
                        required: "Nama Seminar Harus diisi"
                    },
                    rseminar_tempat: {
                        required: "Tempat Harus diisi"
                    },
                    rseminar_pan: {
                        required: "Penyelenggara Harus diisi"
                    },
                    rseminar_tmulai: {
                        date: "Tanggal Tidak Sesuai Format"
                    },
                    rseminar_takhir: {
                        date: "Tanggal Tidak Sesuai Format"
                    },
                    rseminar_tpiagam: {
                        date: "Tanggal Tidak Sesuai Format"
                    }

                }
            }
            valid(config_valid)

            $('#btn-simpan').click(function() {
                $('#modaloverlay2').show();
                if ($("#form-input").valid()) {
                    $.ajax({
                        type: $('#form-input').prop('method'),
                        url: $('#form-input').prop('action'),
                        data: $('#form-input').serialize(),
                        success(r) {
                            console.log(r)
                            swal('Status', 'Berhasil', 'success')
                            $('#modaloverlay2').hide();
                            location.reload();
                        },
                        error(e) {
                            swal('Status', 'Gagal Disimpan', 'warning')
                            $('#modaloverlay2').hide();
                            location.reload();
                        }
                    });

                } else {
                    swal('Status', 'Form Harus Dilengkapi', 'warning')
                    $('#modaloverlay2').hide();
                }
            });

            $('#btn-hapus').click(function() {
                Swal.fire({
                    title: 'Yakin Ingin Menghapus  ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Iya, Hapus !'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "<?= site_url('Rseminar/delete') ?>",
                            data: {
                                id: $('input[name="id"]').val()
                            },
                            dataType: "Json",
                            success: function(r) {
                                swal('Status', 'Berhasil', 'success')
                                location.reload();
                            },
                            error(e) {
                                swal('Status', 'Gagal Disimpan', 'warning')
                                location.reload();
                            }
                        })
                    }
                })

            });
        }



    });
</script>