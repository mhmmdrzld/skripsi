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
                                Klik <b>nama Diklat</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Diklat</th>
                                        <th>Tempat</th>
                                        <th>Penyelenggara</th>
                                        <th>Angkatan</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Akhir</th>
                                        <th>No Sttpp</th>
                                        <th>Pejabat yang Menetapkan</th>
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
                            <label class="col-sm-3 col-form-label">Diklat Fungsional :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rdikfung_kdikfung">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rdikfung_kdikfung_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rdikfung_kdikfunglist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama pendidikan Fungsional :</label>
                            <div class="col-sm-5">
                                <textarea class="form-control upper" name="rdikfung_npdum" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rdikfung_tempat" name="rdikfung_tempat" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penyelenggara:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rdikfung_pant" name="rdikfung_pan" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Angkatan:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rdikfung_angkatan" name="rdikfung_angkatan" class="form-control form-control-sm">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Mulai :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rdikfung_tmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akhir :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rdikfung_takhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Jam:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rdikfung_jam" name="rdikfung_jam" class="form-control form-control-sm decimal">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No STTPP:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rdikfung_nsttb" name="rdikfung_nsttpp" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal STTPP :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rdikfung_tsttpp" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rdikfung_npej">
                                    <option></option>
                                </select>
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
        //start data pendidikan fungsional ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pendidikan_fungsional'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KDIKFUNG + '>' + data[i].NDIKFUNG.toUpperCase() + '</option>';
                }
                $('select[name="rdikfung_kdikfunglist"]').append(html);
            }
        });

        $('select[name="rdikfung_kdikfunglist"]').change(function() {
            $('input[name="rdikfung_kdikfung"]').val($(this).val());
            $('input[name="rdikfung_kdikfung_text"]').val($('select[name="rdikfung_kdikfunglist"] option:selected').text());
        });
        //end data pendidikan fungsional ============================

        //start data pejabat yang menetapkan ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pejabat'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KPEJ + '>' + data[i].NPEJ.toUpperCase() + '</option>';
                }
                $('select[name="rdikfung_npej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rdikfung/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return (row.dikfung ? row.dikfung : row.ndik);
                        }
                    },
                    {
                        data: 'tempat'

                    },
                    {
                        data: 'pan'
                    },
                    {
                        data: 'angkatan'
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
                        data: 'nsttpp'
                    },
                    {
                        data: 'pej'
                    }
                ],
                order: [
                    [5, "desc"]
                ]
            }

            table = ajax_table(config_table)


            $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
                var data = table.row(this).data();
                $('input[name="id"]').val(data.id)
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())
                    $('select[name="rdikfung_kdikfunglist"]').val(r.KDIKFUNG).trigger('change');
                    $('textarea[name="rdikfung_npdum"]').val(r.NDIKFUNG);
                    $('input[name="rdikfung_tempat"]').val(r.TEMPAT);
                    $('input[name="rdikfung_pan"]').val(r.PAN);
                    $('input[name="rdikfung_angkatan"]').val(r.ANGKATAN);
                    $('input[name="rdikfung_tmulai"]').val(tanggal_null(r.TMULAI));
                    $('input[name="rdikfung_takhir"]').val(tanggal_null(r.TAKHIR));
                    $('input[name="rdikfung_jam"]').val(r.JAM);
                    $('input[name="rdikfung_nsttpp"]').val(r.NSTTPP);
                    $('input[name="rdikfung_tsttpp"]').val(tanggal_null(r.TSTTPP));
                    $('select[name="rdikfung_npej"]').val(r.NPEJ).trigger('change');
                    $('#form-input').prop('action', '<?= site_url('Rdikfung/update') ?>')
                }, "<?= site_url('Rdikfung/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rdikfung/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rdikfung_npdum: {
                        required: true,
                    },
                    rdikfung_tempat: {
                        required: true,
                    },
                    rdikfung_pan: {
                        required: true,
                    }
                },
                messages: {
                    rdikfung_npdum: {
                        required: "Nama Pendidikan Harus diisi"
                    },
                    rdikfung_tempat: {
                        required: "Tempat Harus diisi"
                    },
                    rdikfung_pan: {
                        required: "Penyelenggara Harus diisi"
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
                            url: "<?= site_url('Rdikfung/delete') ?>",
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