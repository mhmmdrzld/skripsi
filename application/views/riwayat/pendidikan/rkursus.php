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
                                Klik <b>nama Kursus</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Kursus</th>
                                        <th>Tempat</th>
                                        <th>Penyelenggara</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Akhir</th>
                                        <th>No Sertifikat</th>
                                        <th>Tgl Sertifikat</th>
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
                            <label class="col-sm-3 col-form-label">Kursus :</label>

                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rkursus_kkursus">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Kursus :</label>
                            <div class="col-sm-4">
                                <textarea class="form-control upper" name="rkursus_nkursus" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rkursus_tempat" name="rkursus_tempat" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penyelenggara:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rkursus_pant" name="rkursus_pan" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Mulai :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rkursus_tmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akhir :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rkursus_takhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Jam:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rkursus_jam" name="rkursus_jam" class="form-control form-control-sm decimal">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Sertifikat :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rkursus_npiagam" name="rkursus_npiagam" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Sertifikat :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rkursus_tpiagam" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>

                            <div class="col-sm-6">
                                <input style="width:100%" type="text" id="" name="rkursus_npej" class="form-control form-control-sm upper">
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
        //start data kursus ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kursus'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KKURSUS + '>' + data[i].NKURSUS.toUpperCase() + '</option>';
                }
                $('select[name="rkursus_kkursus"]').append(html);
            }
        });

        //end data kursus ============================


        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rkursus/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return (row.nama_kursus ? row.nama_kursus : row.nama_kursus2);
                        }
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
                        data: 'nosertifikat'
                    },
                    {
                        data: 'tglsertifikat',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    }
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
                    $('select[name="rkursus_kkursus"]').val(r.KKURSUS).trigger('change');
                    $('textarea[name="rkursus_nkursus"]').val(r.NKURSUS);
                    $('input[name="rkursus_tempat"]').val(r.TEMPAT);
                    $('input[name="rkursus_pan"]').val(r.PAN);
                    $('input[name="rkursus_tmulai"]').val(tanggal_null(r.TMULAI));
                    $('input[name="rkursus_takhir"]').val(tanggal_null(r.TAKHIR));
                    $('input[name="rkursus_npiagam"]').val(r.NPIAGAM);
                    $('input[name="rkursus_jam"]').val(r.JAM);
                    $('input[name="rkursus_tpiagam"]').val(tanggal_null(r.TPIAGAM));
                    $('input[name="rkursus_npej"]').val(r.NPEJ)
                    $('#form-input').prop('action', '<?= site_url('Rkursus/update') ?>')
                }, "<?= site_url('Rkursus/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rkursus/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rkursus_nkursus: {
                        required: true,
                    },
                    rkursus_tempat: {
                        required: true,
                    },
                    rkursus_pan: {
                        required: true,
                    },
                    rkursus_tmulai: {
                        date: true,
                    },
                    rkursus_takhir: {
                        date: true,
                    },
                    rkursus_tpiagam: {
                        date: true,
                    }
                },
                messages: {
                    rkursus_nkursus: {
                        required: "Nama Kursus Harus diisi"
                    },
                    rkursus_tempat: {
                        required: "Tempat Harus diisi"
                    },
                    rkursus_pan: {
                        required: "Penyelenggara Harus diisi"
                    },
                    rkursus_tmulai: {
                        date: "Tanggal Tidak Sesuai Format",
                    },
                    rkursus_takhir: {
                        date: "Tanggal Tidak Sesuai Format",
                    },
                    rkursus_tpiagam: {
                        date: "Tanggal Tidak Sesuai Format",
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
                            url: "<?= site_url('Rkursus/delete') ?>",
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