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
                                            <input type="text" onkeyup="apns_nip.value = apns_nip.value.toUpperCase();" name="nip" class="form-control form-control-sm" readonly>
                                        </div>
                                        <div class="col-sm-5" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No SK PNS :</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="apns_skpns" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal SK PNS:</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="apns_tskpns" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="apns_kpej">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terhitung Tanggal Mulai PNS:</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="apns_tmtpns" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pangkat / Golongan Ruang CPNS :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" readonly name="apns_kgolru">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="apns_kgolru_text">
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm select2" name="apns_kgolrulist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Janji Sumpah PNS :</label>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rapns_kjpns1" name="rapns_kjpns" value="1">
                                                <label class="form-check-label" for="rapns_kjpns1">Ya</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rapns_kjpns2" name="rapns_kjpns" value="2">
                                                <label class="form-check-label" for="rapns_kjpns2">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Melaksanakan Tugas Sebagai PNS:</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="apns_tglpns" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Tingkat Pendidikan Umum Sebagai Dasar Pengangkatan CPNS:</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" readonly name="apns_pendikakhir">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="apns_pendikakhir_text">
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm select2" name="apns_pendikakhirlist">
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
                $('select[name="apns_kpej"]').append(html);
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
                $('select[name="apns_kgolrulist"]').append(html);
            }
        });

        $('select[name="apns_kgolrulist"]').change(function() {
            $('input[name="apns_kgolru"]').val($(this).val());
            $('input[name="apns_kgolru_text"]').val($('select[name="apns_kgolrulist"] option:selected').text());
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
                $('select[name="apns_pendikakhirlist"]').append(html);
            }
        });

        $('select[name="apns_pendikakhirlist"]').change(function() {
            $('input[name="apns_pendikakhir"]').val($(this).val());
            $('input[name="apns_pendikakhir_text"]').val($('select[name="apns_pendikakhirlist"] option:selected').text());
        });
        //end data ttingkat pendidikan umum ===========================


        if (nip) {

            ajax(function data_ajax(data) {
                $('input[name="apns_skpns"]').val(data.SKPNS);
                $('input[name="apns_tskpns"]').val(tanggal_null(data.TSKPNS));
                $('select[name="apns_kpej"]').val(data.KPEJ).trigger('change');
                $('select[name="apns_kgolrulist"]').val(data.KGOLRU).trigger('change');
                $('input[name="apns_tmtpns"]').val(tanggal_null(data.TMTPNS));
                $((data.KJPNS == 1) ? "#rapns_kjpns1-laki" : "#rapns_kjpns2").prop("checked", true);
                $('input[name="apns_tglpns"]').val(tanggal_null(data.TGLPNS));
                $('select[name="apns_pendikakhirlist"]').val(data.PENDIKAKHIR).trigger('change');
            }, "<?= site_url('Apns/get_data'); ?>")
        }

    });
</script>