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
                                            <input type="text" name="nip" class="form-control form-control-sm" readonly>
                                        </div>
                                        <div class="col-sm-5" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">STLUD :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="pakhir_kstlud">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="pakhir_kstlud_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="pakhir_kstludlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No STLUD :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="pakhir_nstlud" name="pakhir_nstlud" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal STLUD :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pakhir_tstlud" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Nota BAKN :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="pakhir_nntbakn" name="pakhir_nntbakn" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Nota BAKN :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pakhir_tntbakn" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Angka Kredit :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="pakhir_akredit" name="pakhir_akredit" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No SK Pangkat :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="pakhir_nskpang" name="pakhir_nskpang" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal SK Pangkat :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pakhir_tskpang" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pakhir_ptetap">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal Pangkat :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pakhir_tmtpang" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pangkat / Golongan Ruang :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="pakhir_kgolru">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="pakhir_kgolru_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pakhir_kgolrulist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kenaikan Pangkat :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="pakhir_knpang">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="pakhir_knpang_text">
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm select2" name="pakhir_knpanglist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Masa Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" readonly id="tahun" name="tahun" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-sm-2  ">
                                            Tahun <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-1">
                                            <input type="text" readonly id="bulan" name="bulan" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-sm-2  ">
                                            Tahun <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Memiliki Pangkat Lokal :</label>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rpakhir_plokal" name="rpakhir_plokal" value="1">
                                                <label class="form-check-label" for="rpakhir_plokal">Ya</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rpakhir_plokal2" name="rpakhir_plokal" value="2">
                                                <label class="form-check-label" for="rpakhir_plokal2">Tidak</label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                        </div>

                        <div class="overlay" id="loader">
                            <img src="<?= base_url() ?>dist/img/loading.gif" alt="">
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
        //start data stlud ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_stlud'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KSTLUD + '>' + data[i].NSTLUD.toUpperCase() + '</option>';
                }
                $('select[name="pakhir_kstludlist"]').append(html);
            }
        });

        $('select[name="pakhir_kstludlist"]').change(function() {
            $('input[name="pakhir_kstlud"]').val($(this).val());
            $('input[name="pakhir_kstlud_text"]').val($('select[name="pakhir_kstludlist"] option:selected').text());
        });
        //end data stlud ============================

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
                $('select[name="pakhir_ptetap"]').append(html);
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
                $('select[name="pakhir_kgolrulist"]').append(html);
            }
        });

        $('select[name="pakhir_kgolrulist"]').change(function() {
            $('input[name="pakhir_kgolru"]').val($(this).val());
            $('input[name="pakhir_kgolru_text"]').val($('select[name="pakhir_kgolrulist"] option:selected').text());
        });
        //end data golongan ruang ============================

        //start data jenis kenaikan pangkat ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kenaikan_pangkat'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KNPANG + '>' + data[i].NNPANG.toUpperCase() + '</option>';
                }
                $('select[name="pakhir_knpanglist"]').append(html);
            }
        });

        $('select[name="pakhir_knpanglist"]').change(function() {
            $('input[name="pakhir_knpang"]').val($(this).val());
            $('input[name="pakhir_knpang_text"]').val($('select[name="pakhir_knpanglist"] option:selected').text());
        });
        //end data jenis kenaikan pangkat ============================

        if (nip) {
            ajax(function data_ajax(data) {
                $('select[name="pakhir_kstludlist"]').val(data.KSTLUD).trigger('change');
                $('input[name="pakhir_nstlud"]').val(data.NSTLUD);
                $('input[name="pakhir_tstlud"]').val(tanggal_null(data.TSTLUD));
                $('input[name="pakhir_nntbakn"]').val(data.NNTBAKN);
                $('input[name="pakhir_tntbakn"]').val(tanggal_null(data.TNTBAKN));
                $('input[name="pakhir_akredit"]').val(data.AKREDIT);
                $('input[name="pakhir_nskpang"]').val(data.NSKPANG);
                $('input[name="pakhir_tskpang"]').val(tanggal_null(data.TSKPANG));
                $('select[name="pakhir_ptetap"]').val(data.PTETAP).trigger('change');
                $('input[name="pakhir_tmtpang"]').val(tanggal_null(data.TMTPANG));
                $('select[name="pakhir_kgolrulist"]').val(data.KGOLRU).trigger('change');
                $('select[name="pakhir_knpanglist"]').val(data.KNPANG).trigger('change');
                $((data.PLOKAL == 1) ? '#rpakhir_plokal' : '#rpakhir_plokal2').prop('checked', true);
            }, "<?= site_url('Pakhir/get_data'); ?>")

        }
    });
</script>