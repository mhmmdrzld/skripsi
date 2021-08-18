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
                                Klik <b>No SK Pangkat</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No SK Pangkat</th>
                                        <th>TGL SK Pangkat</th>
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
                            <label class="col-sm-3 col-form-label">STLUD :</label>
                            <div class="col-sm-6">
                                <select style="width: 100%;" class="form-control form-control-sm select2" name="rpangkat_kstlud">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No STLUD :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpangkat_nstlud" name="rpangkat_nstlud" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal STLUD :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rpangkat_tstlud" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Nota BAKN :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpangkat_nntbakn" name="rpangkat_nntbakn" class="upper form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Nota BAKN :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rpangkat_tntbakn" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Angka Kredit :</label>
                            <div class="col-sm-3">
                                <input type="text" id="rpangkat_akredit" name="rpangkat_akredit" class="form-control form-control-sm">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No SK Pangkat :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rpangkat_nskpang" name="rpangkat_nskpang" class="upper form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK Pangkat :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rpangkat_tskpang" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                            <div class="col-sm-6">
                                <select style="width:100%;" class="form-control form-control-sm select2" name="rpangkat_ptetap">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal Pangkat :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rpangkat_tmtpang" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pangkat / Golongan Ruang :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="rpangkat_kgolru">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm" disabled name="rpangkat_kgolru_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rpangkat_kgolrulist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kenaikan Pangkat:</label>
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rpangkat_knpang">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-danger"><i>Masa Kerja Golongan: </i></label>
                            <div class="col-sm-1">
                                <input type="text" id="tahun_gol" name="rpangkat_mskerja" class="form-control form-control-sm ">
                            </div>
                            <div class="col-sm-2">
                                Tahun
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-1">
                                <input type="text" id="bulan_gol" name="rpangkat_blnkerja" class="form-control form-control-sm">
                            </div>
                            <div class="col-sm-2">
                                Tahun
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Masa Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" id="tahun_kerja" name="pakhir_mskerja" class="form-control form-control-sm" readonly>
                            </div>
                            <div class="col-sm-2">
                                Tahun
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-1">
                                <input type="text" id="bulan_kerja" name="pakhir_blnkerja" class="form-control form-control-sm" readonly>
                            </div>
                            <div class="col-sm-2  ">
                                Bulan
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Memiliki Pangkat Lokal:</label>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rrpangkat_plokal" name="rrpangkat_plokal" value="1">
                                    <label class="form-check-label" for="rrpangkat_plokal">Ya</label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rrpangkat_plokal2" name="rrpangkat_plokal" checked value="2">
                                    <label class="form-check-label" for="rrpangkat_plokal2">Tidak</label>
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
        //start data stlud ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_stlud'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KSTLUD + '>' + data[i].NSTLUD.toUpperCase() + '</option>';
                }
                $('select[name="rpangkat_kstlud"]').append(html);
            }
        });
        //end data stlud ============================

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
                $('select[name="rpangkat_ptetap"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================

        //start data golongan ruang ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_golongan_ruang'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KGOLRU + '>' + data[i].NPANGKAT.toUpperCase() + '</option>';
                }
                $('select[name="rpangkat_kgolrulist"]').append(html);
            }
        });

        $('select[name="rpangkat_kgolrulist"]').change(function() {
            $('input[name="rpangkat_kgolru"]').val($(this).val());
            $('input[name="rpangkat_kgolru_text"]').val($('select[name="rpangkat_kgolrulist"] option:selected').text());
        });
        //end data golongan ruang ============================

        //start data jenis kenaikan pangkat ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kenaikan_pangkat'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KNPANG + '>' + data[i].NNPANG.toUpperCase() + '</option>';
                }
                $('select[name="rpangkat_knpang"]').append(html);
            }
        });
        //end data jenis kenaikan pangkat ============================


        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rpangkat/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: "NSKPANG"
                    },
                    {
                        data: 'TSKPANG',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }

                    },
                    {
                        data: 'TMTPANG',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
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

                    $('select[name="rpangkat_kstlud"]').val(r.KSTLUD).trigger('change');
                    $('input[name="rpangkat_nstlud"]').val(r.NSTLUD);
                    $('input[name="rpangkat_tstlud"]').val(tanggal_null(r.TSTLUD));
                    $('input[name="rpangkat_nntbakn"]').val(r.NNTBAKN);
                    $('input[name="rpangkat_tntbakn"]').val(tanggal_null(r.TNTBAKN));
                    $('input[name="rpangkat_akredit"]').val(r.AKREDIT);
                    $('input[name="rpangkat_nskpang"]').val(r.NSKPANG);
                    $('input[name="rpangkat_tskpang"]').val(tanggal_null(r.TSKPANG));
                    $('select[name="rpangkat_ptetap"]').val(r.PTETAP).trigger('change');
                    $('input[name="rpangkat_tmtpang"]').val(tanggal_null(r.TMTPANG));
                    $('select[name="rpangkat_kgolrulist"]').val(r.KGOLRU).trigger('change');
                    $('select[name="rpangkat_knpang"]').val(r.KNPANG).trigger('change');
                    $('input[name="rpangkat_mskerja"]').val(r.MSKERJA);
                    $('input[name="rpangkat_blnkerja"]').val(r.BLNKERJA);
                    $(r.PLOKAL == 1 ? '#rrpangkat_plokal' : '#rrpangkat_plokal2').prop('checked', true);
                    $('#form-input').prop('action', '<?= site_url('Rpangkat/update') ?>')
                }, "<?= site_url('Rpangkat/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rpangkat/insert') ?>')

            });

            const config_valid = {
                rules: {
                    rpangkat_nntbakn: {
                        required: true,
                    },
                    rpangkat_tntbakn: {
                        tgl: true,
                        required: true,
                    },
                    rpangkat_ptetap: {
                        required: true,
                    },
                    rpangkat_tskpang: {
                        required: true,
                        tgl: true,
                    },
                    rpangkat_tmtpang: {
                        tgl: true,
                        required: true,
                    },
                    rpangkat_tstlud: {
                        tgl: true,
                    },
                    rpangkat_kgolrulist: {
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
                            url: "<?= site_url('Rpangkat/delete') ?>",
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

        $('#rpangkat_akredit,#tahun_gol,#bulan_gol,#tahun_kerja,#bulan_kerja').inputFilter(function(value) {
            return /^-?\d*[.,]?\d*$/.test(value);
        });


    });
</script>