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
                                        <th>Nama Bintang</th>
                                        <th>Asal Perolehan</th>
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
                            <label class="col-sm-3 col-form-label">Nama Tanda Jasa :</label>
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rjasa_ktandajasa">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gambar :</label>
                            <div class="col-sm-3" id="img_plc">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Asal Perolehan :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rjasa_aoleh" name="rjasa_aoleh" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No SK :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rjasa_nsk" name="rjasa_nsk" class="form-control form-control-sm upper">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjasa_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rjasa_kpej">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Perolehan :</label>
                            <div class="col-sm-2">
                                <input type="text" id="rjasa_tholeh" name="rjasa_tholeh" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rjasa_ket" name="rjasa_ket" class="form-control form-control-sm upper">
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
        //start data tanda jasa ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_tanda_jasa'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KTANDAJASA + '>' + data[i].NTANDAJASA.toUpperCase() + '</option>';
                }
                $('select[name="rjasa_ktandajasa"]').append(html);
            }
        });
        //end data tanda jasa ============================

        //start data gambar ==================================
        $('select[name="rjasa_ktandajasa"]').change(function() {

            var id = this.value;
            console.log(id);
            $.ajax({
                url: "<?php echo site_url('Master/get_tanda_jasa_img'); ?>",
                method: "GET",
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    html += '<img src=data:image/png;base64,' + data.ITANDAJASA + '>';
                    $('#img_plc').empty().append(html);
                }
            });
        });
        //end data gambar ================================

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
                $('select[name="rjasa_kpej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rjasa/get_data',
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
                        data: 'NTANDAJASA'
                    },
                    {
                        data: 'AOLEH'
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

                    $('select[name="rjasa_ktandajasa"]').val(r.KTANDAJASA).trigger('change');
                    if (!r.KTANDAJASA) {
                        $('#img_plc').empty();
                    }
                    $('input[name="rjasa_aoleh"]').val(r.AOLEH);
                    $('input[name="rjasa_nsk"]').val(r.NSK);
                    $('input[name="rjasa_tsk"]').val(tanggal_null(r.TSK));
                    $('select[name="rjasa_kpej"]').val(r.KPEJ).trigger('change');
                    $('input[name="rjasa_tholeh"]').val(r.THOLEH);
                    $('input[name="rjasa_ket"]').val(r.KET);
                    $('#form-input').prop('action', '<?= site_url('Rjasa/update') ?>')
                }, "<?= site_url('Rjasa/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');;
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#img_plc').empty()
                $('#form-input').prop('action', '<?= site_url('Rjasa/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rjasa_ktandajasa: {
                        required: true,
                    },
                    rjasa_aoleh: {
                        required: true,
                    },
                    rjasa_nsk: {
                        required: true,
                    },
                    rjasa_tsk: {
                        tgl: true,
                        required: true,
                    },
                    rjasa_kpej: {
                        required: true,
                    },
                    rjasa_tholeh: {
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
                            url: "<?= site_url('Rjasa/delete') ?>",
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

        $('input[name="rjasa_tholeh"]').inputFilter(function(value) {
            return /^-?\d*[.,]?\d*$/.test(value);
        });

    });
</script>