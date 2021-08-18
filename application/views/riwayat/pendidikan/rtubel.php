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
                                Klik <b>nama Pendidikan</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Pendidikan</th>
                                        <th>No SK</th>
                                        <th>Tgl SK</th>
                                        <th>Jurusan</th>
                                        <th>Nama Universitas</th>
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
                            <label class="col-sm-3 col-form-label">No SK :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rtubel_nosk" name="rtubel_nosk" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rtubel_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kelompok Pendidikan Umum :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rtubel_ktingpend">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rtubel_ktingpend_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rtubel_ktingpendlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fakultas Pendidikan Umum :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rtubel_kkelpen">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rtubel_kkelpen_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rtubel_kkelpenlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jurusan Detail Pendidikan Umum :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rtubel_ktingpen">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rtubel_ktingpen_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rtubel_ktingpenlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lain Jurusan :</label>
                            <div class="col-sm-5">
                                <textarea class="form-control upper" name="rtubel_npdum" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Universitas :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rtubel_nmuniv" name="rtubel_nmuniv" class="form-control form-control-sm upper">
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

        //start data kelompok pendidikan umum ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kel_pendum'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KJUR + '>' + data[i].NJUR.toUpperCase() + '</option>';
                }
                $('select[name="rtubel_ktingpendlist"]').append(html);
            }
        });

        $('select[name="rtubel_ktingpendlist"]').change(function() {
            $('input[name="rtubel_ktingpend"]').val($(this).val());
            $('input[name="rtubel_ktingpend_text"]').val($('select[name="rtubel_ktingpendlist"] option:selected').text());
            $('select[name="rtubel_kkelpenlist"],select[name="rtubel_ktingpenlist"]').empty().append('<option></option>').val(null).trigger('change');
            get_fak_pendum($('input[name="rtubel_ktingpend"]').val())
        });
        //end data kelompok pendidikan umum ============================

        //start data fakultas pendidikan umum ============================
        function get_fak_pendum(id) {
            $.ajax({
                url: "<?php echo site_url('Master/get_fak_pendum'); ?>",
                method: "GET",
                async: false,
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].KJUR + '>' + data[i].NJUR.toUpperCase() + '</option>';
                    }
                    $('select[name="rtubel_kkelpenlist"]').append(html);
                }
            });
        }

        $('select[name="rtubel_kkelpenlist"]').change(function() {
            $('input[name="rtubel_kkelpen"]').val($(this).val());
            $('input[name="rtubel_kkelpen_text"]').val($('select[name="rtubel_kkelpenlist"] option:selected').text());
            $('select[name="rtubel_ktingpenlist"]').empty().append('<option></option>').val(null).trigger('change');
            get_det_pendum($('input[name="rtubel_ktingpend"]').val(), $('input[name="rtubel_kkelpen"]').val())
        });
        //end data fakultas pendidikan umum ============================

        //start data detail pendidikan umum ============================
        function get_det_pendum(kel_pendum, fak_pendum) {
            $.ajax({
                url: "<?php echo site_url('Master/get_det_pendum'); ?>",
                method: "GET",
                async: false,
                dataType: 'json',
                data: {
                    kel_pendum: kel_pendum,
                    fak_pendum: fak_pendum
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].KJUR + '>' + data[i].NJUR.toUpperCase() + '</option>';
                    }
                    $('select[name="rtubel_ktingpenlist"]').append(html);
                }
            });
        }

        $('select[name="rtubel_ktingpenlist"]').change(function() {
            $('input[name="rtubel_ktingpen"]').val($(this).val());
            $('input[name="rtubel_ktingpen_text"]').val($('select[name="rtubel_ktingpenlist"] option:selected').text());

        });
        //end data detail pendidikan umum ============================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rtubel/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return (row.kelpend ? row.kelpend : '') + (row.fakpend ? ', ' + row.fakpend : '') + (row.detpend ? ', ' + row.detpend : '') +
                                (row.tahun ? '<br>' + row.tahun : '')
                        }
                    },
                    {
                        data: 'nosk'

                    },
                    {
                        data: 'tsk',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'npdum'
                    },
                    {
                        data: 'nmuniv'
                    }
                ],
                order: [
                    [3, "desc"]
                ]
            }

            table = ajax_table(config_table)

            $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
                var data = table.row(this).data();
                $('input[name="id"]').val(data.id);
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())

                    $('input[name="rtubel_nosk"]').val(r.nosk);
                    $('input[name="rtubel_tsk"]').val(tanggal_null(r.tsk));
                    $('select[name="rtubel_ktingpendlist"]').val(r.ktingpend).trigger('change');
                    $('select[name="rtubel_kkelpenlist"]').val(r.kkelpen).trigger('change');
                    $('select[name="rtubel_ktingpenlist"]').val(r.ktingpen).trigger('change');
                    $('textarea[name="rtubel_npdum"]').val(r.npdum);
                    $('input[name="rtubel_nmuniv"]').val(r.nmuniv);
                    $('#form-input').prop('action', '<?= site_url('Rtubel/update') ?>')
                }, "<?= site_url('Rtubel/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rtubel/insert') ?>')

            });

            const config_valid = {
                rules: {
                    rtubel_nosk: {
                        required: true,
                    },
                    rtubel_tsk: {
                        required: true,
                        tgl: true,
                    },
                    rtubel_npdum: {
                        required: true,
                    },
                    rtubel_nmuniv: {
                        required: true,
                    }
                },
                messages: {}
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
                            url: "<?= site_url('Rtubel/delete') ?>",
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