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
                                Klik <b>nama Pendidikan Umum</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Pendidikan Umum Terakhir</th>
                                        <th>Nama Lain Jurusan</th>
                                        <th>Nama Sekolah</th>
                                        <th>Tempat</th>
                                        <th>Nama Kepala Sekolah</th>
                                        <th>No. STTB</th>
                                        <th>TGL. STTB</th>
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
                            <label class="col-sm-3 col-form-label">Kelompok Pendidikan Umum :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rpendum_ktingpend">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rpendum_ktingpend_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rpendum_ktingpendlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fakultas Pendidikan Umum :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rpendum_kkelpen">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rpendum_kkelpen_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rpendum_kkelpenlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jurusan Detail Pendidikan Umum :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rpendum_ktingpen">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rpendum_ktingpen_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rpendum_ktingpenlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lain Jurusan :</label>
                            <div class="col-sm-5">
                                <textarea class="form-control upper" name="rpendum_npdum" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Sekolah:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpendum_nsek" name="rpendum_nsek" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpendum_tempat" name="rpendum_tempat" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Kepala Sekolah/Dekan/Rektor:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpendum_nsepsek" name="rpendum_nkepsek" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No STTB:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpendum_nsttb" name="rpendum_nsttb" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal STTB :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rpendum_tsttb" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                $('select[name="rpendum_ktingpendlist"]').append(html);
            }
        });

        $('select[name="rpendum_ktingpendlist"]').change(function() {
            $('input[name="rpendum_ktingpend"]').val($(this).val());
            $('input[name="rpendum_ktingpend_text"]').val($('select[name="rpendum_ktingpendlist"] option:selected').text());
            $('select[name="rpendum_kkelpenlist"],select[name="rpendum_ktingpenlist"]').empty().append('<option></option>').val(null).trigger('change');
            get_fak_pendum($('input[name="rpendum_ktingpend"]').val())
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
                    $('select[name="rpendum_kkelpenlist"]').append(html);
                }
            });
        }

        $('select[name="rpendum_kkelpenlist"]').change(function() {
            $('input[name="rpendum_kkelpen"]').val($(this).val());
            $('input[name="rpendum_kkelpen_text"]').val($('select[name="rpendum_kkelpenlist"] option:selected').text());
            $('select[name="rpendum_ktingpenlist"]').empty().append('<option></option>').val(null).trigger('change');
            get_det_pendum($('input[name="rpendum_ktingpend"]').val(), $('input[name="rpendum_kkelpen"]').val())
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
                    $('select[name="rpendum_ktingpenlist"]').append(html);
                }
            });
        }

        $('select[name="rpendum_ktingpenlist"]').change(function() {
            $('input[name="rpendum_ktingpen"]').val($(this).val());
            $('input[name="rpendum_ktingpen_text"]').val($('select[name="rpendum_ktingpenlist"] option:selected').text());

        });
        //end data detail pendidikan umum ============================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rpendum/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return (row.kelpend ? row.kelpend : '') + (row.fakpend ? ', ' + row.fakpend : '') + (row.detpend ? ', ' + row.detpend : '') +
                                (row.nsek ? '<br>' + row.nsek : '') + (row.tempat ? '<br>' + row.tempat : '') + (row.tahun ? '<br>' + (row.tahun == '0' ? '' : row.tahu) : '')
                        }
                    },
                    {
                        data: 'npdum'
                    },
                    {
                        data: 'nsek'
                    },
                    {
                        data: 'tempat'
                    },
                    {
                        data: 'nkepsek'
                    },
                    {
                        data: 'nsttb'
                    },
                    {
                        data: 'tsttb',
                        render: function(data, type, row) {
                            return tanggal_null(data)
                        }
                    }
                ],
                order: [
                    [7, "desc"]
                ]
            }

            table = ajax_table(config_table)

            $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
                var data = table.row(this).data();
                $('input[name="id"]').val(data.id)
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())
                    $('select[name="rpendum_ktingpendlist"]').val(r.KTINGPEND).trigger('change');
                    $('select[name="rpendum_kkelpenlist"]').val(r.KKELPEN).trigger('change');
                    $('select[name="rpendum_ktingpenlist"]').val(r.KTINGPEN).trigger('change');
                    $('textarea[name="rpendum_npdum"]').val(r.NPDUM);
                    $('input[name="rpendum_nsek"]').val(r.NSEK);
                    $('input[name="rpendum_tempat"]').val(r.TEMPAT);
                    $('input[name="rpendum_nkepsek"]').val(r.NKEPSEK);
                    $('input[name="rpendum_nsttb"]').val(r.NSTTB);
                    $('input[name="rpendum_tsttb"]').val(tanggal_null(r.TSTTB));
                    // $('input[name="rsistri_tkawin"]').val(tanggal_null(r.TKAWIN));
                    $('#form-input').prop('action', '<?= site_url('Rpendum/update') ?>')
                }, "<?= site_url('Rpendum/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rpendum/insert') ?>')

            });

            const config_valid = {
                rules: {
                    rpendum_nsek: {
                        required: true,
                    },
                    rpendum_tempat: {
                        required: true,
                    }
                },
                messages: {
                    rpendum_nsek: {
                        required: "Nama Sekolah Harus diisi"
                    },
                    rpendum_tempat: {
                        required: "Tempat Harus diisi"
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
                            url: "<?= site_url('Rpendum/delete') ?>",
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