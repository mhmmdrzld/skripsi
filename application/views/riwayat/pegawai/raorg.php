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
                                Klik <b>nama Organisasi</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Organisasi</th>
                                        <th>Jabatan</th>
                                        <th>Jenis Organisasi</th>
                                        <th>Nama Pemimpin</th>
                                        <th>Tempat</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Akhir</th>
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
                            <label class="col-sm-3 col-form-label">Jenis Organisasi :</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="raorg_jorg" name="raorg_jorg" checked value="1">
                                    <label class="form-check-label" for="raorg_jorg">Profesi</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="raorg_jorg2" name="raorg_jorg" value="2">
                                    <label class="form-check-label" for="raorg_jorg2">Non Profesi</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Organisasi :</label>
                            <div class="col-sm-5 ">
                                <input type="text" id="raorg_norg" name="raorg_norg" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jabatan Dalam Organisasi :</label>
                            <div class="col-sm-5">
                                <input type="text" id="raorg_Jborg" name="raorg_Jborg" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Mulai :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="raorg_tmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akhir :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="raorg_takhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Pimpinan :</label>
                            <div class="col-sm-5">
                                <input type="text" id="raorg_npimp" name="raorg_npimp" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control upper" name="raorg_tempat" rows="3" placeholder=""></textarea>
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
        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Raorg/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: "NORG"
                    },
                    {
                        data: 'JBORG'

                    },
                    {
                        data: 'JORG',
                        render: function(data) {
                            return (data == 1 ? 'Profesi' : (data == 2 ? 'Non Profesi' : ''))
                        }
                    },
                    {
                        data: 'NPIMP'
                    },
                    {
                        data: 'TEMPAT'
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
                    }
                ],
                order: [
                    [6, "desc"]
                ],
                columnDefs: [{
                    "orderable": false,
                    "targets": 0
                }]
            }

            table = ajax_table(config_table)

        }


        $('#tabel-data').on('click', 'tr td:nth-child(2)', function() {
            var data = table.row(this).data();
            $('input[name="id"]').val(data.id);
            ajax_click(data, function data_ajax(r) {
                $('input[name="nip"]').val($('#get_nip').text())

                $(r.JORG == 1 ? '#raorg_jorg' : '#raorg_jorg2').prop('checked', true)
                $('input[name="raorg_norg"]').val(r.NORG);
                $('input[name="raorg_Jborg"]').val(r.JBORG);
                $('input[name="raorg_tmulai"]').val(tanggal_null(r.TMULAI));
                $('input[name="raorg_takhir"]').val(tanggal_null(r.TAKHIR));
                $('input[name="raorg_npimp"]').val(r.NPIMP);
                $('textarea[name="raorg_tempat"]').val(r.TEMPAT);

                $('#form-input').prop('action', '<?= site_url('Raorg/update') ?>')
            }, "<?= site_url('Raorg/get_data_byID') ?>")
        });


        $('#tambah-baru').click(function() {
            $('#modal-data').modal('show');
            $('#modaloverlay2').hide();
            $('#btn-hapus').hide();
            $('#form-input').trigger("reset");
            $('#form-input select').val(null).trigger("change");
            $('input[name="nip"]').val($('#get_nip').text())

            $('#form-input').prop('action', '<?= site_url('Raorg/insert') ?>')
        });

        const config_valid = {
            rules: {
                raorg_norg: {
                    required: true,
                },
                raorg_Jborg: {
                    required: true,
                },
                raorg_tmulai: {
                    tgl: true,
                },
                raorg_takhir: {
                    tgl: true,
                },
                // raorg_npimp: {
                //     required: true,
                // },
                raorg_tempat: {
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
                        url: "<?= site_url('Raorg/delete') ?>",
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
    });
</script>