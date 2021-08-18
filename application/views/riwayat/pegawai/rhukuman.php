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
                                Klik <b>Jenis Hukuman</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Jenis Hukuman</th>
                                        <th>Deskripsi Hukuman</th>
                                        <th>No SK</th>
                                        <th>TGL SK</th>
                                        <th>Pejabat yang Menetapkan</th>
                                        <th>TMT</th>

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
                            <label class="col-sm-3 col-form-label">Jenis Hukuman :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rhukuman_jhukum" name="rhukuman_jhukum" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi Hukuman :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rhukuman_deshukum" name="rhukuman_deshukum" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pelanggaran Yang Dilakukan :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rhukuman_pelanggaran" name="rhukuman_pelanggaran" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Peraturan Yang Dilanggar :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rhukuman_pasal" name="rhukuman_pasal" class="form-control form-control-sm upper">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Masa Hukuman :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rhukuman_masa" name="rhukuman_masa" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No SK :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rhukuman_nsk" name="rhukuman_nsk" class="form-control form-control-sm upper">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rhukuman_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rhukuman_ketj">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal:</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rhukuman_tmt" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Berakhir Tanggal :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rhukuman_tselesai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Hukuman:</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rhukuman_ket" name="rhukuman_ket" value="1" checked>
                                    <label class="form-check-label" for="rhukuman_ket">Berlaku</label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rhukuman_ket2" name="rhukuman_ket" value="2">
                                    <label class="form-check-label" for="rhukuman_ket2">Berakhir</label>
                                </div>
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
                $('select[name="rhukuman_ketj"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rhukuman/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: "JHUKUM"
                    },
                    {
                        data: 'DESHUKUM'

                    },
                    {
                        data: 'NSK'
                    },
                    {
                        data: 'TSK',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },

                    {
                        data: 'NPEJ'
                    },
                    {
                        data: 'TMT',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    }
                ],
                order: [
                    [4, "desc"]
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

                    $('input[name="rhukuman_jhukum"]').val(r.JHUKUM);
                    $('input[name="rhukuman_deshukum"]').val(r.DESHUKUM);
                    $('input[name="rhukuman_pelanggaran"]').val(r.PELANGGARAN);
                    $('input[name="rhukuman_pasal"]').val(r.PASAL);
                    $('input[name="rhukuman_masa"]').val(r.MASA);
                    $('input[name="rhukuman_nsk"]').val(r.NSK);
                    $('select[name="rhukuman_ketj"]').val(r.KPEJ).trigger('change');
                    $('input[name="rhukuman_tsk"]').val(tanggal_null(r.TSK));
                    $('input[name="rhukuman_tmt"]').val(tanggal_null(r.TMT));
                    $('input[name="rhukuman_tselesai"]').val(tanggal_null(r.TSELESAI));
                    $(r.KET == 1 ? '#rhukuman_ket' : (r.KET == 2 ? '#rhukuman_ket2' : '')).prop('checked', true)
                    $('#form-input').prop('action', '<?= site_url('Rhukuman/update') ?>')
                }, "<?= site_url('Rhukuman/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rhukuman/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rhukuman_jhukum: {
                        required: true,
                    },
                    rhukuman_deshukum: {
                        required: true,
                    },
                    rhukuman_pelanggaran: {
                        required: true,
                    },
                    rhukuman_pasal: {
                        required: true,
                    },
                    rhukuman_masa: {
                        required: true,
                    },
                    rhukuman_nsk: {
                        required: true,
                    },
                    rhukuman_ketj: {
                        required: true,
                    },
                    rhukuman_tsk: {
                        tgl: true,
                        required: true,
                    },
                    rhukuman_tmt: {
                        tgl: true,
                        required: true,
                    },
                    rhukuman_tselesai: {
                        tgl: true,
                        required: true,
                    }
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
                            url: "<?= site_url('Rhukuman/delete') ?>",
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