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
                                Klik <b>nama Judul</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Judul</th>
                                        <th>Tempat</th>
                                        <th>Tanggal</th>
                                        <th>Bentuk Karya Tulis</th>
                                        <th>Bidang</th>
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
                            <label class="col-sm-3 col-form-label">Judul :</label>
                            <div class="col-sm-5">
                                <textarea class="form-control upper" name="rkaryatulis_judul" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat:</label>
                            <div class="col-sm-5">
                                <input type="text" id="rkaryatulis_tempat" name="rkaryatulis_tempat" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rkaryatulis_tanggal" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bentuk Karya Tulis :</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rkaryatulis_jenis" name="rkaryatulis_jenis" value="B">
                                    <label class="form-check-label" for="rkaryatulis_jenis">Buku</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rkaryatulis_jenis2" name="rkaryatulis_jenis" value="M">
                                    <label class="form-check-label" for="rkaryatulis_jenis2">Makalah</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rkaryatulis_jenis3" name="rkaryatulis_jenis" value="J" checked>
                                    <label class="form-check-label" for="rkaryatulis_jenis3">Jurnal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bidang Karya Tulis :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rkaryatulis_kbidang">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rkaryatulis_kbidang_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rkaryatulis_kbidanglist">
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

        //start data golongan ruang ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_bidang_karya_tulis'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KBIDANG + '>' + data[i].NBIDANG.toUpperCase() + '</option>';
                }
                $('select[name="rkaryatulis_kbidanglist"]').append(html);
            }
        });

        $('select[name="rkaryatulis_kbidanglist"]').change(function() {
            $('input[name="rkaryatulis_kbidang"]').val($(this).val());
            $('input[name="rkaryatulis_kbidang_text"]').val($('select[name="rkaryatulis_kbidanglist"] option:selected').text());
        });
        //end data golongan ruang ============================


        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rkaryatulis/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'tjudul'
                    },
                    {
                        data: 'tempat'

                    },
                    {
                        data: 'tanggal'
                    },
                    {
                        data: 'jenis',
                        render: function(data, type, row) {
                            return (data == 'B') ? 'Buku' : (data == 'M' ? 'Makalah' : (data == 'J' ? 'Jurnal' : ''))
                        }
                    },
                    {
                        data: 'nbidang'
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

                    $('textarea[name="rkaryatulis_judul"]').val(r.TJUDUL);
                    $('input[name="rkaryatulis_tempat"]').val(r.TEMPAT);
                    $('input[name="rkaryatulis_tanggal"]').val(tanggal_null(r.TANGGAL));
                    $(r.JENIS == 'B' ? '#rkaryatulis_jenis' : (r.JENIS == 'M' ? 'rkaryatulis_jenis2' : (r.JENIS == 'J' ? 'rkaryatulis_jenis3' : ''))).prop('checked', true)
                    $('select[name="rkaryatulis_kbidanglist"]').val(r.KBIDANG).trigger('change');
                    $('#form-input').prop('action', '<?= site_url('Rkaryatulis/update') ?>')
                }, "<?= site_url('Rkaryatulis/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rkaryatulis/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rkaryatulis_judul: {
                        required: true,
                    },
                    rkaryatulis_tempat: {
                        required: true,
                    },
                    rkaryatulis_tanggal: {
                        required: true,
                        tgl: true,
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
                            url: "<?= site_url('Rkaryatulis/delete') ?>",
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