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
                                        <label class="col-sm-3 col-form-label">Instansi Tempat Kerja :</label>
                                        <div class="col-sm-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="tkerja_kuntp" name="tkerja_kuntp" value="30">
                                                <label class="form-check-label" for="tkerja_kuntp">Pemerintah Kab/Kota</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Instansi Induk :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kinsind">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kinsind_text">
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm select2" name="tkerja_kinsindlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Propinsi:</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kinsprop">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kinsprop_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kinsproplist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Kabupaten/Kota:</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kinskab">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kinskab_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kinskablist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Kecamatan :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kinskec">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kinskec_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kinskeclist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Desa/Kelurahan :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kinsdes">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kinsdes_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kinsdeslist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Unit Organisasi :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kunkom">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kunkom_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="tkerja_kunkomlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Unit Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kunuit">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kunuit_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="tkerja_kunuitlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Bag Unit Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kunsk">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kunsk_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" id="teskudaliar" name="tkerja_kunsklist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Subbag Unit Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kunssk">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kunssk_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="tkerja_kunssklist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Tempat Kerja :</label>
                                        <div class="col-sm-5">
                                            <textarea class="form-control upper" name="alamat" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Propinsi:</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kprop">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kprop_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kproplist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Kabupaten/Kota:</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kkab">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kkab_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kkablist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Kecamatan :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kkec">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kkec_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kkeclist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Desa/Kelurahan :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="tkerja_kdes">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="tkerja_kdes_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="tkerja_kdeslist">
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
        //start data instansi induk ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_instansi_induk'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KINSIND + '>' + data[i].NINSIND.toUpperCase() + '</option>';
                }
                $('select[name="tkerja_kinsindlist"]').append(html);
            }
        });

        $('select[name="tkerja_kinsindlist"]').change(function() {
            $('input[name="tkerja_kinsind"]').val($(this).val());
            $('input[name="tkerja_kinsind_text"]').val($('select[name="tkerja_kinsindlist"] option:selected').text());
        });
        //end data instansi induk ============================

        //start data provinsi ============================
        var x = "KAB";

        $.ajax({
            url: "<?php echo site_url('Master/get_provinsi'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KWIL + '>' + data[i].NWIL.toUpperCase() + '</option>';
                }
                $('select[name="tkerja_kinsproplist"]').append(html);
                $('select[name="tkerja_kproplist"]').append(html);
            }
        });


        $('select[name="tkerja_kinsproplist"]').change(function() {
            $('input[name="tkerja_kinsprop"]').val($(this).val());
            $('input[name="tkerja_kinsprop_text"]').val($('select[name="tkerja_kinsproplist"] option:selected').text());
            get_kabupaten('select[name="tkerja_kinskablist"]', $('input[name="tkerja_kinsprop"]').val());
            $('select[name="tkerja_kinskeclist"],select[name="tkerja_kinsdeslist"]').empty().append('<option></option>').val(null).trigger('change');
        });

        $('select[name="tkerja_kproplist"]').change(function() {
            $('input[name="tkerja_kprop"]').val($(this).val());
            $('input[name="tkerja_kprop_text"]').val($('select[name="tkerja_kproplist"] option:selected').text());
            get_kabupaten('select[name="tkerja_kkablist"]', $('input[name="tkerja_kprop"]').val());
            $('select[name="tkerja_kkeclist"],select[name="tkerja_kdeslist"]').empty().append('<option></option>').val(null).trigger('change');
        });
        //end data provinsi ============================

        //start data kabupaten =========================
        function get_kabupaten(selectname, id_provinsi) {
            if (id_provinsi) {
                $(selectname).empty().append('<option></option>').val(null).trigger('change');
                $.ajax({
                    url: "<?php echo site_url('Master/get_kabupaten'); ?>",
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    data: {
                        id: id_provinsi
                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].KWIL + '>' + data[i].NWIL.toUpperCase() + '</option>';
                        }
                        $(selectname).append(html);
                    }
                });
            }
        }

        $('select[name="tkerja_kinskablist"]').change(function() {
            $('input[name="tkerja_kinskab"]').val($(this).val());
            $('input[name="tkerja_kinskab_text"]').val($('select[name="tkerja_kinskablist"] option:selected').text());
            get_kecamatan('select[name="tkerja_kinskeclist"]', $('input[name="tkerja_kinsprop"]').val(), $('input[name="tkerja_kinskab"]').val());
            $('select[name="tkerja_kinsdeslist"]').empty().append('<option></option>').val(null).trigger('change');
        });

        $('select[name="tkerja_kkablist"]').change(function() {
            $('input[name="tkerja_kkab"]').val($(this).val());
            $('input[name="tkerja_kkab_text"]').val($('select[name="tkerja_kkablist"] option:selected').text());
            get_kecamatan('select[name="tkerja_kkeclist"]', $('input[name="tkerja_kprop"]').val(), $('input[name="tkerja_kkab"]').val());
            $('select[name="tkerja_kdeslist"]').empty().append('<option></option>').val(null).trigger('change');
        });
        //end data kabupaten =========================

        //start data kecamatan =========================
        function get_kecamatan(selectname, id_provinsi, id_kabupaten) {
            if (id_provinsi && id_kabupaten) {
                $(selectname).empty().append('<option></option>').val(null).trigger('change');
                $.ajax({
                    url: "<?php echo site_url('Master/get_kecamatan'); ?>",
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    data: {
                        id_prov: id_provinsi,
                        id_kab: id_kabupaten

                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].KWIL + '>' + data[i].NWIL.toUpperCase() + '</option>';
                        }
                        $(selectname).append(html);
                    }
                });
            }
        }

        $('select[name="tkerja_kinskeclist"]').change(function() {
            $('input[name="tkerja_kinskec"]').val($(this).val());
            $('input[name="tkerja_kinskec_text"]').val($('select[name="tkerja_kinskeclist"] option:selected').text());
            var idprov_idkab_idkec = $('input[name="tkerja_kinsprop"]').val() + $('input[name="tkerja_kinskab"]').val() + $('input[name="tkerja_kinskec"]').val();
            get_desa('select[name="tkerja_kinsdeslist"]', idprov_idkab_idkec)
        });

        $('select[name="tkerja_kkeclist"]').change(function() {
            $('input[name="tkerja_kkec"]').val($(this).val());
            $('input[name="tkerja_kkec_text"]').val($('select[name="tkerja_kkeclist"] option:selected').text());
            var idprov_idkab_idkec = $('input[name="tkerja_kprop"]').val() + $('input[name="tkerja_kkab"]').val() + $('input[name="tkerja_kkec"]').val();
            get_desa('select[name="tkerja_kdeslist"]', idprov_idkab_idkec)
        });

        //end data kecamatan =========================

        //start data desa ============================
        function get_desa(selectname, idprov_idkab_idkec) {
            if (idprov_idkab_idkec != null && idprov_idkab_idkec && idprov_idkab_idkec.length >= 6) {
                $(selectname).empty().append('<option></option>').val(null).trigger('change');
                $.ajax({
                    url: "<?php echo site_url('Master/get_desa'); ?>",
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    data: {
                        idprov_idkab_idkec: idprov_idkab_idkec
                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].KWIL + '>' + data[i].NWIL.toUpperCase() + '</option>';
                        }
                        $(selectname).append(html);
                    }
                });
            }
        }

        $('select[name="tkerja_kinsdeslist"]').change(function() {
            $('input[name="tkerja_kinsdes"]').val($(this).val());
            $('input[name="tkerja_kinsdes_text"]').val($('select[name="tkerja_kinsdeslist"] option:selected').text());
        });

        $('select[name="tkerja_kdeslist"]').change(function() {
            $('input[name="tkerja_kdes"]').val($(this).val());
            $('input[name="tkerja_kdes_text"]').val($('select[name="tkerja_kdeslist"] option:selected').text());
        });
        //end data desa ============================







        //start data unit organisasi ======================
        $.ajax({
            url: "<?php echo site_url('Master/get_unit_organisasi'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KUNKER + '>' + data[i].NUNKER.toUpperCase() + '</option>';
                }
                $('select[name="tkerja_kunkomlist"]').append(html);
            }
        });


        $('select[name="tkerja_kunkomlist"]').change(function() {
            $('input[name="tkerja_kunkom"]').val($(this).val());
            $('input[name="tkerja_kunkom_text"]').val($('select[name="tkerja_kunkomlist"] option:selected').text());
            get_unit_kerja($('input[name="tkerja_kunkom"]').val());
        });
        //end data unit organisasi ======================

        //start data unit kerja ======================
        function get_unit_kerja(kodeorg) {
            $('select[name="tkerja_kunuitlist"]').empty().append('<option></option>').val(null).trigger('change');
            if (kodeorg) {
                $.ajax({
                    url: "<?php echo site_url('Master/get_unit_kerja'); ?>",
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    data: {
                        kodeorg: kodeorg
                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].KUNKER + '>' + data[i].NUNKER.toUpperCase() + '</option>';
                        }
                        $('select[name="tkerja_kunuitlist"]').append(html);
                    }
                });
            }
        }


        $('select[name="tkerja_kunuitlist"]').change(function() {
            $('input[name="tkerja_kunuit"]').val($(this).val());
            $('input[name="tkerja_kunuit_text"]').val($('select[name="tkerja_kunuitlist"] option:selected').text());
            get_bag_unit($('input[name="tkerja_kunkom"]').val(), $('input[name="tkerja_kunuit"]').val());
        });
        //end data unit kerja ======================

        //start data bag unit kerja ======================
        function get_bag_unit(kodeorg, kodekerja) {
            if (kodeorg && kodekerja) {
                $('select[name="tkerja_kunsklist"],select[name="tkerja_kunssklist"]').empty().append('<option></option>').val(null).trigger('change');
                $.ajax({
                    url: "<?php echo site_url('Master/get_bag_unit_kerja'); ?>",
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    data: {
                        kodeorg: kodeorg,
                        kodekerja: kodekerja
                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].KUNKER + '>' + data[i].NUNKER.toUpperCase() + '</option>';
                        }
                        $('select[name="tkerja_kunsklist"]').append(html);
                    }
                });
            }
        }


        $('select[name="tkerja_kunsklist"]').change(function() {
            $('input[name="tkerja_kunsk"]').val($(this).val());
            $('input[name="tkerja_kunsk_text"]').val($('select[name="tkerja_kunsklist"] option:selected').text());
            get_subbag_unit($('input[name="tkerja_kunkom"]').val(), $('input[name="tkerja_kunuit"]').val(), $('input[name="tkerja_kunsk"]').val());

        });
        //end data bag unit kerja ======================

        //start data subbag unit kerja ======================
        function get_subbag_unit(kodeorg, kodekerja, kodebag) {
            if (kodeorg && kodekerja && kodebag) {
                $('select[name="tkerja_kunssklist"]').empty().append('<option></option>').val(null).trigger('change');
                $.ajax({
                    url: "<?php echo site_url('Master/get_subbag_unit_kerja'); ?>",
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    data: {
                        kodeorg: kodeorg,
                        kodekerja: kodekerja,
                        kodebag: kodebag
                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].KUNKER + '>' + data[i].NUNKER.toUpperCase() + '</option>';
                        }
                        $('select[name="tkerja_kunssklist"]').append(html);
                    }
                });
            }
        }


        $('select[name="tkerja_kunssklist"]').change(function() {
            $('input[name="tkerja_kunssk"]').val($(this).val());
            $('input[name="tkerja_kunssk_text"]').val($('select[name="tkerja_kunssklist"] option:selected').text());
        });
        //end data subbag unit kerja ======================


        if (nip) {

            ajax(function data_ajax(data) {
                $("#tkerja_kuntp").prop("checked", (data.KUNTP == 30 ? true : false));
                $('select[name="tkerja_kinsindlist"]').val(data.KINSIND).trigger('change');

                $('select[name="tkerja_kinsproplist"]').val(data.KINSPROP).trigger('change');
                $('select[name="tkerja_kinskablist"]').val(data.KINSKAB).trigger('change');
                $('select[name="tkerja_kinskeclist"]').val(data.KINSKEC).trigger('change');
                $('select[name="tkerja_kinsdeslist"]').val(data.KINSDES).trigger('change');

                $('select[name="tkerja_kunkomlist"]').val(data.KUNKOM).trigger('change');
                $('select[name="tkerja_kunuitlist"]').val(data.KUNUNIT).trigger('change');
                $('select[name="tkerja_kunsklist"]').val(data.KUNSK).trigger('change');
                $('select[name="tkerja_kunssklist"]').val(data.KUNSSK).trigger('change');

                $('textarea[name="alamat"]').val(data.ALKER);

                $('select[name="tkerja_kproplist"]').val(data.KPROP).trigger('change');
                $('select[name="tkerja_kkablist"]').val(data.KKAB).trigger('change');
                $('select[name="tkerja_kkeclist"]').val(data.KKEC).trigger('change');
                $('select[name="tkerja_kdeslist"]').val(data.KDES).trigger('change');
            }, "<?= site_url('Tkerja/get_data'); ?>")
        }
    });
</script>