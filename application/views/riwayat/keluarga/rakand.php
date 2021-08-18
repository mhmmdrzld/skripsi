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
                            <h3 class="card-title p-3"><?= $title ?></h5>
                                <ul class="nav nav-pills ml-auto p-2 mr-5">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle bg-primary" data-toggle="dropdown" href="#">
                                            Aksi <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" tabindex="-1" id="proses-simpan"><span class="fa fa-save"></span> Simpan</a>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                        <div class="card-body" style="height:1000px;overflow: auto;">
                            <form class="form-horizontal" id="form-input" method="POST">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Induk Pegawai :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" name="nip" class="form-control form-control-sm" readonly>
                                        </div>
                                        <div class="col-sm-5" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Ayah:</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="rakand_nayah" name="rakand_nayah" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir:</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="rakand_tlahir" name="rakand_tlahir" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="rakand_tgllahir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan :</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm select2" name="rakand_kkerja">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Jalan :</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control upper" name="rakand_aljalan" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RT :</label>
                                        <div class="col-sm-1">
                                            <input type="text" name="rakand_alrt" class="form-control form-control-sm ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RW :</label>
                                        <div class="col-sm-1">
                                            <input type="text" name="rakand_alrw" class="form-control form-control-sm ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Telepon :</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="rakand_notelp" class="form-control form-control-sm ">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Wilayah:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="rakand_wil" class="form-control form-control-sm upper">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kode Pos :</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="rakand_kpos" class="form-control form-control-sm ">
                                        </div>
                                    </div>

                                </div>
                        </div>

                        <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-info">Sign in</button>
                             <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                        </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- /. maincontent -->
</div>
<!-- content -->

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
                $('select[name="rakand_kkerja"]').append(html);
            }
        });
        //end data pekerjaan ============================

        if (nip) {
            ajax(function data_ajax(data) {
                $('input[name="rakand_nayah"]').val(data.NAYAH);
                $('input[name="rakand_tlahir"]').val(data.TLAHIR);
                $('input[name="rakand_tgllahir"]').val(tanggal_null(data.TGLLAHIR));
                $('select[name="rakand_kkerja"]').val(data.KKERJA).trigger('change');
                $('textarea[name="rakand_aljalan"]').val(data.ALJALAN)
                $('input[name="rakand_alrt"]').val(data.ALRT);
                $('input[name="rakand_alrw"]').val(data.ALRW);
                $('input[name="rakand_notelp"]').val(data.NOTELP);
                $('input[name="rakand_wil"]').val(data.WIL);
                $('input[name="rakand_kpos"]').val(data.KPOS);
            }, "<?= site_url('Rakand/get_data'); ?>")


            $('#proses-simpan').click(function() {
                $('#loader').show();
                if ($("#form-input").valid()) {
                    $.ajax({
                        type: $('#form-input').prop('method'),
                        url: $('#form-input').prop('action'),
                        data: $('#form-input').serialize(),
                        success(r) {
                            console.log(r)

                            swal('Status', 'Berhasil', 'success')
                            $('#loader').hide();
                            location.reload();
                        },
                        error(e) {
                            swal('Status', 'Gagal Disimpan', 'warning')
                            $('#loader').hide();
                            location.reload();
                        }
                    });

                } else {
                    swal('Status', 'Form Harus Dilengkapi', 'warning')
                    $('#loader').hide();
                }
            });


            if (is_data) {
                $('#form-input').prop('action', '<?= site_url('Rakand/update') ?>')
            } else {
                $('#form-input').prop('action', '<?= site_url('Rakand/insert') ?>')
            }

            const config_valid = {
                rules: {
                    rakand_nayah: {
                        required: true,
                    },
                    rakand_tlahir: {
                        required: true,
                    },
                    rakand_tgllahir: {
                        required: true,
                        tgl: true,
                    }
                },
                messages: {

                }
            }

            valid(config_valid)
        }


        $('input[name="rakand_alrt"],input[name="rakand_alrw"],input[name="rakand_kpos"]').inputFilter(function(value) {
            return /^-?\d*[.,]?\d*$/.test(value);
        });



    });
</script>