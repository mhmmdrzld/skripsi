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
                                        <label class="col-sm-3 col-form-label">Kelompok pendidikan umum :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_ktpu" name="pdakhir_ktpu">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_ktpu_text" name="pdakhir_ktpu_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pdakhir_ktpulist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Fakultas pendidikan umum :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kjur" name="pdakhir_kjur">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kjur_text" name="pdakhir_kjur_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pdakhir_kjurlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jurusan detail pendidikan umum :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_ktingjur" name="pdakhir_ktingjur">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_ktingjur_text" name="pdakhir_ktingjur_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pdakhir_ktingjurlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lain Jurusan :</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control upper" name="pdakhir_npdum" rows="3" id="pdakhir_npdum" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Sekolah :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_nsek" name="pdakhir_nsek" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="pdakhir_tempat" name="pdakhir_tempat" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal STTB :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_tsttb" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan Struktural :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kdikstr" name="pdakhir_kdikstr">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kdikstr_text" name="pdakhir_kdikstr_text">
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm select2" name="pdakhir_kdikstrlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat pendidikan struktural :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_stempat" name="pdakhir_stempat" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Angkatan pendidikan struktural :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_sangkatan" name="pdakhir_sangkatan" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal mulai pendidikan struktural :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_stmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal akhir pendidikan struktural :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_stakhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jumlah jam pendidikan strtuktural :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_sjam" name="pdakhir_sjam" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal STTP pendidikan struktural :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ststtpp" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan Fungsional :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kdikfung" name="pdakhir_kdikfung">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" id="pdakhir_kdikfung_text" name="pdakhir_kdikfung_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="pdakhir_kdikfunglist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat pendidikan fungsional :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_ftempat" name="pdakhir_ftempat" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Angkatan pendidikan fungsional :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_fangkatan" name="pdakhir_fangkatan" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal mulai pendidikan fungsional :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ftmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal akhir pendidikan fungsional :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ftakhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jumlah jam pendidikan strtuktural :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_fjam" name="pdakhir_fjam" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal STTP pendidikan fungsional :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ftsttpp" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan Teknis :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kdiktek" name="pdakhir_kdiktek">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" id="pdakhir_kdiktek_text" name="pdakhir_kdiktek_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pdakhir_kdikteklist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat pendidikan teknis :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_ttempat" name="pdakhir_ttempat" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Angkatan pendidikan teknis :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_tangkatan" name="pdakhir_tangkatan" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal mulai pendidikan teknis :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ttmulai" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal akhir pendidikan teknis :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ttakhir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jumlah jam pendidikan strtuktural :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pdakhir_tjam" name="pdakhir_tjam" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal STTP pendidikan teknis :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pdakhir_ttsttpp" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kursus :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kkursus" name="pdakhir_kkursus">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly id="pdakhir_kkursus_text" name="pdakhir_kkursus_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="pdakhir_kkursuslist">
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
        //start data pendidikan struktural ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pendidikan_struktural'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KDIKSTR + '>' + data[i].NDIKSTR.toUpperCase() + '</option>';
                }
                $('select[name="pdakhir_kdikstrlist"]').append(html);
            }
        });

        $('select[name="pdakhir_kdikstrlist"]').change(function() {
            $('input[name="pdakhir_kdikstr"]').val($(this).val());
            $('input[name="pdakhir_kdikstr_text"]').val($('select[name="pdakhir_kdikstrlist"] option:selected').text());
        });
        //end data pendidikan struktural ============================

        //start data pendidikan fungsional ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pendidikan_fungsional'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KDIKFUNG + '>' + data[i].NDIKFUNG.toUpperCase() + '</option>';
                }
                $('select[name="pdakhir_kdikfunglist"]').append(html);
            }
        });

        $('select[name="pdakhir_kdikfunglist"]').change(function() {
            $('input[name="pdakhir_kdikfung"]').val($(this).val());
            $('input[name="pdakhir_kdikfung_text"]').val($('select[name="pdakhir_kdikfunglist"] option:selected').text());
        });
        //end data pendidikan fungsional ============================

        //start data pendidikan teknis ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_pendidikan_teknis'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KDIKTEK + '>' + data[i].NDIKTEK.toUpperCase() + '</option>';
                }
                $('select[name="pdakhir_kdikteklist"]').append(html);
            }
        });

        $('select[name="pdakhir_kdikteklist"]').change(function() {
            $('input[name="pdakhir_kdiktek"]').val($(this).val());
            $('input[name="pdakhir_kdiktek_text"]').val($('select[name="pdakhir_kdikteklist"] option:selected').text());
        });
        //end data pendidikan teknis ============================

        //start data kursus ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kursus'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KKURSUS + '>' + data[i].NKURSUS.toUpperCase() + '</option>';
                }
                $('select[name="pdakhir_kkursuslist"]').append(html);
            }
        });

        $('select[name="pdakhir_kkursuslist"]').change(function() {
            $('input[name="pdakhir_kkursus"]').val($(this).val());
            $('input[name="pdakhir_kkursus_text"]').val($('select[name="pdakhir_kkursuslist"] option:selected').text());
        });
        //end data kursus ============================

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
                $('select[name="pdakhir_ktpulist"]').append(html);
            }
        });

        $('select[name="pdakhir_ktpulist"]').change(function() {
            $('input[name="pdakhir_ktpu"]').val($(this).val());
            $('input[name="pdakhir_ktpu_text"]').val($('select[name="pdakhir_ktpulist"] option:selected').text());
            $('select[name="pdakhir_kjurlist"],select[name="pdakhir_ktingjurlist"]').empty().append('<option></option>').val(null).trigger('change');
            get_fak_pendum($('input[name="pdakhir_ktpu"]').val())
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
                    $('select[name="pdakhir_kjurlist"]').append(html);
                }
            });
        }

        $('select[name="pdakhir_kjurlist"]').change(function() {
            $('input[name="pdakhir_kjur"]').val($(this).val());
            $('input[name="pdakhir_kjur_text"]').val($('select[name="pdakhir_kjurlist"] option:selected').text());
            $('select[name="pdakhir_ktingjurlist"]').empty().append('<option></option>').val(null).trigger('change');
            get_det_pendum($('input[name="pdakhir_ktpu"]').val(), $('input[name="pdakhir_kjur"]').val())
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
                    $('select[name="pdakhir_ktingjurlist"]').append(html);
                }
            });
        }

        $('select[name="pdakhir_ktingjurlist"]').change(function() {
            $('input[name="pdakhir_ktingjur"]').val($(this).val());
            $('input[name="pdakhir_ktingjur_text"]').val($('select[name="pdakhir_ktingjurlist"] option:selected').text());

        });
        //end data detail pendidikan umum ============================


        if (nip) {
            ajax(function data_ajax(data) {
                $('select[name="pdakhir_ktpulist"]').val(data.KTPU).trigger('change');
                $('select[name="pdakhir_kjurlist"]').val(data.KJUR).trigger('change');
                $('select[name="pdakhir_ktingjurlist"]').val(data.KTINGJUR).trigger('change');
                $('textarea[name="pdakhir_npdum"]').val(data.NPDUM);
                $('input[name="pdakhir_nsek"]').val(data.NSEK);
                $('input[name="pdakhir_tempat"]').val(data.TEMPAT);
                $('input[name="pdakhir_tsttb"]').val(tanggal_null(data.TSTTB));

                $('select[name="pdakhir_kdikstrlist"]').val(data.KDIKSTR).trigger('change');
                $('input[name="pdakhir_stempat"]').val(data.STEMPAT);
                $('input[name="pdakhir_sangkatan"]').val(data.SANGKATAN);
                $('input[name="pdakhir_stmulai"]').val(tanggal_null(data.STMULAI));
                $('input[name="pdakhir_stakhir"]').val(tanggal_null(data.STAKHIR));
                $('input[name="pdakhir_sjam"]').val(data.SJAM);
                $('input[name="pdakhir_ststtpp"]').val(tanggal_null(data.STSTTPP));

                $('select[name="pdakhir_kdikteklist"]').val(data.KDIKTEK).trigger('change');
                $('input[name="pdakhir_ttempat"]').val(data.TTEMPAT);
                $('input[name="pdakhir_tangkatan"]').val(data.TANGKATAN);
                $('input[name="pdakhir_ttmulai"]').val(tanggal_null(data.TTMULAI));
                $('input[name="pdakhir_ttakhir"]').val(tanggal_null(data.TTAKHIR));
                $('input[name="pdakhir_tjam"]').val(data.TJAM);
                $('input[name="pdakhir_ttsttpp"]').val(tanggal_null(data.TTSTTPP));

                $('select[name="pdakhir_kkursuslist"]').val(data.KKURSUS).trigger('change');

                $('input[name="pdakhir_ftempat"]').val(data.FTEMPAT);
                $('input[name="pdakhir_fangkatan"]').val(data.FANGKATAN);
                $('input[name="pdakhir_ftmulai"]').val(tanggal_null(data.FTMULAI));
                $('input[name="pdakhir_ftakhir"]').val(tanggal_null(data.FTAKHIR));
                $('input[name="pdakhir_fjam"]').val(data.FJAM);
                $('input[name="pdakhir_ftsttpp"]').val(tanggal_null(data.FTSTTPP));
            }, "<?= site_url('Pdakhir/get_data'); ?>")
        }
    });
</script>