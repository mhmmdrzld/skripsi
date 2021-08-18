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
                        <div class="card-header  d-flex p-0">
                            <h5 class="card-title p-3"><?= $title ?></h5>
                            <div class="ml-auto mr-3 p-2">
                                <button type="button" id="tambah-baru" class="btn btn-primary ">Tambah Data Baru</button>
                            </div>

                        </div>
                        <div class="card-body konten">
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-info"></i> Perhatian !</h5>
                                Klik <b>nama anak</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Tempat/Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Anak Ke</th>
                                        <th>Status Anak</th>
                                        <th>Mendapat Tunjuangan</th>
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
                            <div class="col-sm-4" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Anak:</label>
                            <div class="col-sm-5">
                                <input type="text" id="ranak_nanak" name="ranak_nanak" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat :</label>
                            <div class="col-sm-4">
                                <textarea class="form-control upper" name="ranak_alamat" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir:</label>
                            <div class="col-sm-3">
                                <input type="text" id="ranak_tlahir" name="ranak_tlahir" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="dd/mm/yyyy" name="ranak_tgllahir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin :</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="ranak_kjkel" name="ranak_kjkel" value="1" checked>
                                    <label class="form-check-label" for="ranak_kjkel">Laki-Laki</label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="ranak_kjkel2" name="ranak_kjkel" value="2">
                                    <label class="form-check-label" for="ranak_kjkel2">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Akte:</label>
                            <div class="col-sm-3">
                                <input type="text" id="ranak_nakte" name="ranak_nakte" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Dalam Keluarga :</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="ranak_keluarga" name="ranak_keluarga" value="K" checked>
                                    <label class="form-check-label" for="ranak_keluarga">Kandung</label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="ranak_keluarga2" name="ranak_keluarga" value="2">
                                    <label class="form-check-label" for="ranak_keluarga2">Angkat</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Anak Ke:</label>
                            <div class="col-sm-1">
                                <input type="text" id="ranak_anakke" name="ranak_anake" class="form-control form-control-sm decimal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mendapat Tunjuangan:</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="ranak_tunj" name="ranak_tunj" value="D">
                                    <label class="form-check-label" for="ranak_tunj">Dapat</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="ranak_tunj2" name="ranak_tunj" value="T" checked>
                                    <label class="form-check-label" for="ranak_tunj2">Tidak Dapat</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Besar Tunjangan:</label>
                            <div class="col-sm-3">
                                <input type="text" id="ranak_tunjrp" name="ranak_tunjrp" class="form-control form-control-sm decimal">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tingkat Pendidikan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="ranak_pendikakhir">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm upper" readonly name="ranak_pendikakhir_text">
                            </div> -->
                            <div class="col-sm-4">
                                <select style="width: 100%" class="form-control form-control-sm select2" name="ranak_pendikakhirlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pekerjaan :</label>
                            <div class="col-sm-4">
                                <select style="width: 100%" class="form-control form-control-sm select2" name="ranak_kkerja">
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

        /* $('#tabel-data tr td:nth-child(2)').css('cursor', 'pointer'); */
        // $('#tabel-data').find('tr td:nth-child(2)').css('cursor', 'pointer');



        //start data pekerjaan ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pekerjaan'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KKERJA + '>' + data[i].NKERJA.toUpperCase() + '</option>';
                }
                $('select[name="ranak_kkerja"]').append(html);
            }
        });
        //end data pekerjaan ============================

        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Ranak/get_anak',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'nanak'
                    },
                    {
                        data: 'tlahir',
                        render: function(data, type, row) {
                            return row.tlahir + ', ' + tanggal_null(row.tgllahir);
                        }
                    },
                    {
                        data: 'kjkel',
                        render: function(data, type, row) {
                            return (data == 1) ? 'Laki-Laki' : 'Perempuan';
                        }
                    },
                    {
                        data: 'anakken'
                    },
                    {
                        data: 'keluarga',
                        render: function(data, type, row) {
                            return (data == 'K') ? 'Kandung' : (data == 'A' ? 'Angkat' : '');
                        }
                    },
                    {
                        data: 'tunj',
                        render: function(data, type, row) {
                            return (data == 'D') ? 'Dapat' : (data == 'T' ? 'Tidak' : '');
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
                $('input[name="id"]').val(data.id)
                ajax_click(data, function data_ajax(r) {
                    $('input[name="nip"]').val($('#get_nip').text())
                    $('input[name="ranak_nanak"]').val(r.NANAK);
                    $('textarea[name="ranak_alamat"]').val(r.ALAMAT);
                    $('input[name="ranak_tlahir"]').val(r.TLAHIR);
                    $('input[name="ranak_tgllahir"]').val(tanggal_null(r.TGLLAHIR));
                    $(r.KJKEL == 1 ? '#ranak_kjkel' : (r.KJKEL == 2 ? '#ranak_kjkel2' : '')).prop('checked', true)
                    $('input[name="ranak_nakte"]').val(r.NAKTE);
                    $(r.KELUARGA == 'K' ? '#ranak_keluarga' : (r.KELUARGA == 'A' ? '#ranak_keluarga2' : '')).prop('checked', true)
                    $('input[name="ranak_anake"]').val(r.ANAKKEN);
                    $(r.TUNJ == 'D' ? '#ranak_tunj' : (r.TUNJ == 'T' ? '#ranak_tunj2' : '')).prop('checked', true)
                    $('input[name="ranak_tunjrp"]').val(r.TUNJRP);
                    $('select[name="ranak_pendikakhirlist"]').val(r.PENDIKAKHIR).trigger('change');
                    $('select[name="ranak_kkerja"]').val(r.KKERJA).trigger('change');
                    $('#form-input').prop('action', '<?= site_url('Ranak/update') ?>')
                }, "<?= site_url('Ranak/get_anak_byID') ?>")
            });

            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Ranak/insert') ?>')
            });

            const config_valid = {
                rules: {
                    ranak_nanak: {
                        required: true,
                    },
                    ranak_tlahir: {
                        required: true,
                    },
                    ranak_tgllahir: {
                        required: true,
                    },
                    ranak_anake: {
                        required: true,
                    }
                },
                messages: {
                    ranak_nanak: {
                        required: "Nama Anak Harus diisi"
                    },
                    ranak_tlahir: {
                        required: "Tempat Lahir Harus diisi"
                    },
                    ranak_tgllahir: {
                        required: "Tanggal Lahir Harus diisi"
                    },
                    ranak_anake: {
                        required: "Anak Ke Harus diisi"
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
                            url: "<?= site_url('Ranak/delete') ?>",
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