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
                                Klik <b>nama Suami/Istri</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Tempat/Tanggal Lahir</th>
                                        <th>Pekerjaan</th>
                                        <th>Status Pekerjaan</th>
                                        <th>NIP Pasangan</th>
                                        <th>Tanggal Kawin</th>
                                        <th>Pendidikan Terakhir</th>
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
                            <label class="col-sm-3 col-form-label">Nama Suami / Istri:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rsistri_nisua" name="rsistri_nisua" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat :</label>
                            <div class="col-sm-4">
                                <textarea class="form-control upper" name="rsistri_alamat" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pekerjaan :</label>
                            <div class="col-sm-5">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rsistri_kdkerja">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Pekerjaan:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rsistri_stapek" name="rsistri_stapek" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIP Pasangan:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rsistri_nippas" name="rsistri_nippas" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kota Lahir:</label>
                            <div class="col-sm-3">
                                <input type="text" id="rsistri_kotlah" name="rsistri_kotlah" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="dd/mm/yyyy" name="rsistri_tgllahir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Kawin :</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="dd/mm/yyyy" name="rsistri_tkawin" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Pernikahan :</label>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rsistri_stsnikah" name="rsistri_stsnikah" value="1" checked>
                                    <label class="form-check-label" for="rsistri_stsnikah">Kawin</label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rsistri_stsnikah2" name="rsistri_stsnikah" value="2">
                                    <label class="form-check-label" for="rsistri_stsnikah2">Janda/Duda</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tunjangan :</label>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rsistri_stunj" name="rsistri_stunj" value="1">
                                    <label class="form-check-label" for="rsistri_stunj">Ada</label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rsistri_stunj2" name="rsistri_stunj" value="2" checked>
                                    <label class="form-check-label" for="rsistri_stunj2">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pendidikan Akhir :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rsistri_pendakhir">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rsistri_pendakhir_text">
                            </div> -->
                            <div class="col-sm-4">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rsistri_pendakhirlist">
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
        //start data pekerjaan ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pekerjaan'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KKERJA + '>' + data[i].NKERJA.toUpperCase() + '</option>';
                }
                $('select[name="rsistri_kdkerja"]').append(html);
            }
        });
        //end data pekerjaan ============================

        //start data tingkat pendidikan umum ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_tpu'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KJUR + '>' + data[i].NJUR.toUpperCase() + '</option>';
                }
                $('select[name="rsistri_pendakhirlist"]').append(html);
            }
        });

        $('select[name="rsistri_pendakhirlist"]').change(function() {
            $('input[name="rsistri_pendakhir"]').val($(this).val());
            $('input[name="rsistri_pendakhir_text"]').val($('select[name="rsistri_pendakhirlist"] option:selected').text());
        });
        //end data tingkat pendidikan umum ===========================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rsistri/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'nisua'
                    },
                    {
                        data: 'kotlah',
                        render: function(data, type, row) {
                            return row.kotlah + ', ' + tanggal_null(row.tgllahir);
                        }
                    },
                    {
                        data: 'nkerja'
                    },
                    {
                        data: 'stapek'
                    },
                    {
                        data: 'nippas'
                    },
                    {
                        data: 'tkawin'
                    },
                    {
                        data: 'njur'
                    }
                ],
                order: [
                    [6, "desc"]
                ]
            }
            table = ajax_table(config_table)

            $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
                var data = table.row(this).data();
                $('input[name="id"]').val(data.id)
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())
                    $('input[name="rsistri_nisua"]').val(r.NISUA);
                    $('textarea[name="rsistri_alamat"]').val(r.ALAMAT);
                    $('select[name="rsistri_kdkerja"]').val(r.KDKERJA).trigger('change');
                    $('input[name="rsistri_stapek"]').val(r.STAPEK);
                    $('input[name="rsistri_nippas"]').val(r.NIPPAS);
                    $('input[name="rsistri_kotlah"]').val(r.KOTLAH);
                    $('input[name="rsistri_tgllahir"]').val(tanggal_null(r.TGLLAHIR));
                    $('input[name="rsistri_tkawin"]').val(tanggal_null(r.TKAWIN));
                    $(r.STSNIKAH == 1 ? '#rsistri_stsnikah' : '#rsistri_stsnikah2').prop('checked', true)
                    $(r.STUNJ == 1 ? '#rsistri_stunj' : '#rsistri_stunj2').prop('checked', true)
                    $('select[name="rsistri_pendakhirlist"]').val(r.PENDAKHIR).trigger('change');
                    $('#form-input').prop('action', '<?= site_url('Rsistri/update') ?>')
                }, "<?= site_url('Rsistri/get_data_byID') ?>")
            });

            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rsistri/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rsistri_nisua: {
                        required: true,
                    },
                    rsistri_kdkerja: {
                        required: true,
                    },
                    rsistri_kotlah: {
                        required: true,
                    },
                    rsistri_tgllahir: {
                        required: true,
                    },
                    rsistri_tkawin: {
                        required: true,
                    }
                },
                messages: {
                    rsistri_nisua: {
                        required: "Nama Suami/Istri Harus diisi"
                    },
                    rsistri_kdkerja: {
                        required: "Pekerjaan Harus diisi"
                    },
                    rsistri_kotlah: {
                        required: "Kota Lahir Harus diisi"
                    },
                    rsistri_tgllahir: {
                        required: "Tanggal Lahir Harus diisi"
                    },
                    rsistri_tkawin: {
                        required: "Tanggal Kawin Harus diisi"
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
                            url: "<?= site_url('Rsistri/delete') ?>",
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