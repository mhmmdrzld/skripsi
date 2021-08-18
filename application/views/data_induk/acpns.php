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
                        <div class="card-header">
                            <h5 class="card-title m-0"><?= $title ?></h5>
                        </div>
                        <div class="card-body" style="height:1000px;overflow: auto;">
                            <form class="form-horizontal">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Induk Pegawai :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" onkeyup="acpns_nip.value = acpns_nip.value.toUpperCase();" readonly name="nip" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-sm-5" id="nama">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Nota BKN :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" name="acpns_ntbakn" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Nota BKN:</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="tanggal_nota_bkn" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="acpns_kpej">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal CPNS :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="acpns_tmtcpns" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No SK CPNS :</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="acpns_skcpns" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal SK CPNS:</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="acpns_tskcpns" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No STTPP Diklat Prajabatan:</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" name="acpns_nsttpp" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal STTPP Diklat Prajabatan: </label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="acpns_tsttpp" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pangkat / Golongan Ruang CPNS :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" readonly name="acpns_kgolru">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="acpns_kgolru_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="acpns_kgolrulist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Melaksanakan Tugas Sebagai CPNS: </label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="acpns_tmtlgas" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Tingkat Pendidikan Umum Sebagai Dasar Pengangkatan CPNS:</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" readonly name="acpns_pendikakhir">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="acpns_pendikakhir_text">
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm select2" name="acpns_pendikakhirlist">
                                                <option></option>
                                            </select>
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
                $('select[name="acpns_kpej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================


        //start data golongan ruang ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_golongan_ruang'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KGOLRU + '>' + data[i].NPANGKAT.toUpperCase() + '</option>';
                }
                $('select[name="acpns_kgolrulist"]').append(html);
            }
        });

        $('select[name="acpns_kgolrulist"]').change(function() {
            $('input[name="acpns_kgolru"]').val($(this).val());
            $('input[name="acpns_kgolru_text"]').val($('select[name="acpns_kgolrulist"] option:selected').text());
        });
        //end data golongan ruang ============================

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
                $('select[name="acpns_pendikakhirlist"]').append(html);
            }
        });

        $('select[name="acpns_pendikakhirlist"]').change(function() {
            $('input[name="acpns_pendikakhir"]').val($(this).val());
            $('input[name="acpns_pendikakhir_text"]').val($('select[name="acpns_pendikakhirlist"] option:selected').text());
        });
        //end data tingkat pendidikan umum ===========================


        if (nip) {

            ajax(function data_ajax(data) {
                $('input[name="acpns_ntbakn"]').val(data.NTBAKN);
                $('input[name="tanggal_nota_bkn"]').val(data.TNTBAKN);
                $('select[name="acpns_kpej"]').val(data.KPEJ).trigger('change');
                $('input[name="acpns_tmtcpns"]').val(tanggal_null(data.TMTCPNS));
                $('input[name="acpns_tskcpns"]').val(tanggal_null(data.TSKCPNS));
                $('input[name="acpns_skcpns"]').val(data.SKCPNS);
                $('input[name="acpns_nsttpp"]').val(data.NSTTPP);
                $('input[name="acpns_tsttpp"]').val(tanggal_null(data.TSTTPP));
                $('select[name="acpns_kgolrulist"]').val(data.KGOLRU).trigger('change');
                $('input[name="acpns_tmtlgas"]').val(tanggal_null(data.TMTLGAS));
                $('select[name="acpns_kgolrulist"]').val(data.KGOLRU).trigger('change');
                $('select[name="acpns_pendikakhirlist"]').val(data.PENDIKAKHIR).trigger('change');
            }, "<?= site_url('Acpns/get_data'); ?>")
        }
    });
</script>