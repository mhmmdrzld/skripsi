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
                                Klik <b>No SK</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No SK</th>
                                        <th>TGL SK</th>
                                        <th>TGL Mulai</th>
                                        <th>TGL Akhir</th>
                                        <th>Jenis Cuti</th>
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
                            <label class="col-sm-3 col-form-label">Jenis Cuti :</label>
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rcuti_jcuti">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No SK :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rcuti_nsk" name="rcuti_nsk" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rcuti_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Mulai :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rcuti_tmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akhir :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rcuti_takhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rcuti_kpej">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Sementara :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control upper" name="rcuti_alamat" rows="3" placeholder=""></textarea>
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
        //start data jenis cuti ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_jenis_cuti'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KCUTI + '>' + data[i].NCUTI.toUpperCase() + '</option>';
                }
                $('select[name="rcuti_jcuti"]').append(html);
            }
        });
        //end data jenis cuti ============================

        //start data pejabat yang menetapkan ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pejabat'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KPEJ + '>' + data[i].NPEJ.toUpperCase() + '</option>';
                }
                $('select[name="rcuti_kpej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================


        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rcuti/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: "NSK"
                    },
                    {
                        data: 'TSK',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'TMULAI',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'TAKHIR',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'NCUTI'
                    },
                    {
                        data: 'NPEJ'
                    }
                ],
                order: [
                    [2, "desc"]
                ],
                columnDefs: [{
                    "orderable": false,
                    "targets": 0
                }]
            }

            table = ajax_table(config_table)

            $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
                var data = table.row(this).data();
                $('input[name="id"]').val(data.id);
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())

                    $('select[name="rcuti_jcuti"]').val(r.JCUTI).trigger('change');
                    $('input[name="rcuti_nsk"]').val(r.NSK);
                    $('input[name="rcuti_tsk"]').val(tanggal_null(r.TSK));
                    $('input[name="rcuti_tmulai"]').val(tanggal_null(r.TMULAI));
                    $('input[name="rcuti_takhir"]').val(tanggal_null(r.TAKHIR));
                    $('select[name="rcuti_kpej"]').val(r.PTETAP).trigger('change');
                    $('textarea[name="rcuti_alamat"]').val(r.ALAMAT);

                    $('#form-input').prop('action', '<?= site_url('Rcuti/update') ?>')
                }, "<?= site_url('Rcuti/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())

                $('#form-input').prop('action', '<?= site_url('Rcuti/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rcuti_jcuti: {
                        required: true,
                    },
                    rcuti_nsk: {
                        required: true,
                    },
                    rcuti_tsk: {
                        tgl: true,
                        required: true,
                    },
                    rcuti_tmulai: {
                        tgl: true,
                        required: true,
                    },
                    rcuti_takhir: {
                        tgl: true,
                        required: true,
                    },
                    rcuti_kpej: {
                        required: true,
                    },
                },
                messages: {

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
                            url: "<?= site_url('Rcuti/delete') ?>",
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