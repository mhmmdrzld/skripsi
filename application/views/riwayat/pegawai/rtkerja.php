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
                                Klik <b>nama Instansi</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Instansi Induk</th>
                                        <th>Unit Organisasi</th>
                                        <th>Tanggal SK</th>
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
                            <label class="col-sm-3 col-form-label">No SK Penempatan :</label>
                            <div class="col-sm-5">
                                <input type="text" id="Rkerja_nsk" name="Rkerja_nsk" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK Penempatan:</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="Rkerja_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Instansi Induk :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="Rkerja_kinsind">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="Rkerja_kinsind_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kinsindlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Instansi Tempat Kerja :</label>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="Rkerja_kuntp" name="Rkerja_kuntp" value="1">
                                    <label class="form-check-label" for="Rkerja_kuntp">Pusat</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="Rkerja_kuntp2" name="Rkerja_kuntp" value="2">
                                    <label class="form-check-label" for="Rkerja_kuntp2">Pemerintah Provinsi</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="Rkerja_kuntp3" name="Rkerja_kuntp" checked value="3">
                                    <label class="form-check-label" for="Rkerja_kuntp3">Pemerintah Kab/Kota</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Propinsi:</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinsprop">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinsprop_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kinsproplist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Kabupaten/Kota:</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinskab">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinskab_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kinskablist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Kecamatan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinskec">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinskec_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kinskeclist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Desa/Kelurahan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinsdes">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kinsdes_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kinsdeslist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Organisasi :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="Rkerja_kunkom">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm upper" readonly name="Rkerja_kunkom_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kunkomlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="Rkerja_kununit">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm upper" readonly name="Rkerja_kununit3_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kununitlist">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bag Unit Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="Rkerja_kunsk">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm upper" readonly name="Rkerja_kunsk_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kunsklist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Subbag Unit Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="Rkerja_kunssk">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm upper" readonly name="Rkerja_kunssk_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kunssklist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Kerja :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control upper" name="Rkerja_alker" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Propinsi:</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kprop">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kprop_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kproplist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Kabupaten/Kota:</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kkab">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kkab_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kkablist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Kecamatan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kkec">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kkec_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kkeclist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Desa/Kelurahan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kdes">
                            </div>
                            <!-- <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" readonly name="Rkerja_kdes_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="Rkerja_kdeslist">
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
                $('select[name="Rkerja_kinsindlist"]').append(html);
            }
        });

        $('select[name="Rkerja_kinsindlist"]').change(function() {
            $('input[name="Rkerja_kinsind"]').val($(this).val());
            $('input[name="Rkerja_kinsind_text"]').val($('select[name="Rkerja_kinsindlist"] option:selected').text());
        });
        //end data instansi induk ============================

        //start data provinsi ============================

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
                $('select[name="Rkerja_kinsproplist"]').append(html);
                $('select[name="Rkerja_kproplist"]').append(html);
            }
        });


        $('select[name="Rkerja_kinsproplist"]').change(function() {
            $('input[name="Rkerja_kinsprop"]').val($(this).val());
            $('input[name="Rkerja_kinsprop_text"]').val($('select[name="Rkerja_kinsproplist"] option:selected').text());
            get_kabupaten('select[name="Rkerja_kinskablist"]', $('input[name="Rkerja_kinsprop"]').val());
            $('select[name="Rkerja_kinskeclist"],select[name="Rkerja_kinsdeslist"]').empty().append('<option></option>').val(null).trigger('change');
        });

        $('select[name="Rkerja_kproplist"]').change(function() {
            $('input[name="Rkerja_kprop"]').val($(this).val());
            $('input[name="Rkerja_kprop_text"]').val($('select[name="Rkerja_kproplist"] option:selected').text());
            get_kabupaten('select[name="Rkerja_kkablist"]', $('input[name="Rkerja_kprop"]').val());
            $('select[name="Rkerja_kkeclist"],select[name="Rkerja_kdeslist"]').empty().append('<option></option>').val(null).trigger('change');
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

        $('select[name="Rkerja_kinskablist"]').change(function() {
            $('input[name="Rkerja_kinskab"]').val($(this).val());
            $('input[name="Rkerja_kinskab_text"]').val($('select[name="Rkerja_kinskablist"] option:selected').text());
            get_kecamatan('select[name="Rkerja_kinskeclist"]', $('input[name="Rkerja_kinsprop"]').val(), $('input[name="Rkerja_kinskab"]').val());
            $('select[name="Rkerja_kinsdeslist"]').empty().append('<option></option>').val(null).trigger('change');
        });

        $('select[name="Rkerja_kkablist"]').change(function() {
            $('input[name="Rkerja_kkab"]').val($(this).val());
            $('input[name="Rkerja_kkab_text"]').val($('select[name="Rkerja_kkablist"] option:selected').text());
            get_kecamatan('select[name="Rkerja_kkeclist"]', $('input[name="Rkerja_kprop"]').val(), $('input[name="Rkerja_kkab"]').val());
            $('select[name="Rkerja_kdeslist"]').empty().append('<option></option>').val(null).trigger('change');
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

        $('select[name="Rkerja_kinskeclist"]').change(function() {
            $('input[name="Rkerja_kinskec"]').val($(this).val());
            $('input[name="Rkerja_kinskec_text"]').val($('select[name="Rkerja_kinskeclist"] option:selected').text());
            var idprov_idkab_idkec = $('input[name="Rkerja_kinsprop"]').val() + $('input[name="Rkerja_kinskab"]').val() + $('input[name="Rkerja_kinskec"]').val();
            get_desa('select[name="Rkerja_kinsdeslist"]', idprov_idkab_idkec)
        });

        $('select[name="Rkerja_kkeclist"]').change(function() {
            $('input[name="Rkerja_kkec"]').val($(this).val());
            $('input[name="Rkerja_kkec_text"]').val($('select[name="Rkerja_kkeclist"] option:selected').text());
            var idprov_idkab_idkec = $('input[name="Rkerja_kprop"]').val() + $('input[name="Rkerja_kkab"]').val() + $('input[name="Rkerja_kkec"]').val();
            get_desa('select[name="Rkerja_kdeslist"]', idprov_idkab_idkec)
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

        $('select[name="Rkerja_kinsdeslist"]').change(function() {
            $('input[name="Rkerja_kinsdes"]').val($(this).val());
            $('input[name="Rkerja_kinsdes_text"]').val($('select[name="Rkerja_kinsdeslist"] option:selected').text());
        });

        $('select[name="Rkerja_kdeslist"]').change(function() {
            $('input[name="Rkerja_kdes"]').val($(this).val());
            $('input[name="Rkerja_kdes_text"]').val($('select[name="Rkerja_kdeslist"] option:selected').text());
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
                $('select[name="Rkerja_kunkomlist"]').append(html);
            }
        });


        $('select[name="Rkerja_kunkomlist"]').change(function() {
            $('input[name="Rkerja_kunkom"]').val($(this).val());
            $('input[name="Rkerja_kunkom_text"]').val($('select[name="Rkerja_kunkomlist"] option:selected').text());
            get_unit_kerja($('input[name="Rkerja_kunkom"]').val());
        });
        //end data unit organisasi ======================

        //start data unit kerja ======================
        function get_unit_kerja(kodeorg) {
            $('select[name="Rkerja_kununitlist"]').empty().append('<option></option>').val(null).trigger('change');
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
                        $('select[name="Rkerja_kununitlist"]').append(html);
                    }
                });
            }
        }


        $('select[name="Rkerja_kununitlist"]').change(function() {
            $('input[name="Rkerja_kununit"]').val($(this).val());
            $('input[name="Rkerja_kununit_text"]').val($('select[name="Rkerja_kununitlist"] option:selected').text());
            get_bag_unit($('input[name="Rkerja_kunkom"]').val(), $('input[name="Rkerja_kununit"]').val());
        });
        //end data unit kerja ======================

        //start data bag unit kerja ======================
        function get_bag_unit(kodeorg, kodekerja) {
            if (kodeorg && kodekerja) {
                $('select[name="Rkerja_kunsklist"],select[name="Rkerja_kunssklist"]').empty().append('<option></option>').val(null).trigger('change');
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
                        $('select[name="Rkerja_kunsklist"]').append(html);
                    }
                });
            }
        }


        $('select[name="Rkerja_kunsklist"]').change(function() {
            $('input[name="Rkerja_kunsk"]').val($(this).val());
            $('input[name="Rkerja_kunsk_text"]').val($('select[name="Rkerja_kunsklist"] option:selected').text());
            get_subbag_unit($('input[name="Rkerja_kunkom"]').val(), $('input[name="Rkerja_kununit"]').val(), $('input[name="Rkerja_kunsk"]').val());

        });
        //end data bag unit kerja ======================

        //start data subbag unit kerja ======================
        function get_subbag_unit(kodeorg, kodekerja, kodebag) {
            if (kodeorg && kodekerja && kodebag) {
                $('select[name="Rkerja_kunssklist"]').empty().append('<option></option>').val(null).trigger('change');
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
                        $('select[name="Rkerja_kunssklist"]').append(html);
                    }
                });
            }
        }


        $('select[name="Rkerja_kunssklist"]').change(function() {
            $('input[name="Rkerja_kunssk"]').val($(this).val());
            $('input[name="Rkerja_kunssk_text"]').val($('select[name="Rkerja_kunssklist"] option:selected').text());
        });
        //end data subbag unit kerja ======================


        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rtkerja/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: "NINSIND"
                    },
                    {
                        data: 'NUNKER'

                    },
                    {
                        data: 'tsk',
                        render: function(data, type, row) {
                            return tanggal_null(data)
                        }

                    }
                ],
                order: [
                    [3, "desc"]
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

                    $('input[name="Rkerja_nsk"]').val(r.NSK);
                    $('input[name="Rkerja_tsk"]').val(tanggal_null(r.TSK));
                    $('select[name="Rkerja_kinsindlist"]').val(r.KINSIND).trigger('change');
                    $(r.KUNTP == 1 ? '#Rkerja_kuntp' : (r.KUNTP == 2 ? '#Rkerja_kuntp2' : (r.KUNTP == 3 ? '#Rkerja_kuntp3' : ''))).prop('checked', true)

                    $('select[name="Rkerja_kinsproplist"]').val(r.KINSPROP).trigger('change');
                    $('select[name="Rkerja_kinskablist"]').val(r.KINSKAB).trigger('change');
                    $('select[name="Rkerja_kinskeclist"]').val(r.KINSKEC).trigger('change');
                    $('select[name="Rkerja_kinsdeslist"]').val(r.KINSDES).trigger('change');

                    $('select[name="Rkerja_kunkomlist"]').val(r.KUNKOM).trigger('change');
                    $('select[name="Rkerja_kununitlist"]').val(r.KUNUNIT).trigger('change');
                    $('select[name="Rkerja_kunsklist"]').val(r.KUNSK).trigger('change');
                    $('select[name="Rkerja_kunssklist"]').val(r.KUNSSK).trigger('change');

                    $('textarea[name="Rkerja_alker"]').val(r.ALKER);
                    $('select[name="Rkerja_kproplist"]').val(r.KPROP).trigger('change');
                    $('select[name="Rkerja_kkablist"]').val(r.KKAB).trigger('change');
                    $('select[name="Rkerja_kkeclist"]').val(r.KKEC).trigger('change');
                    $('select[name="Rkerja_kdeslist"]').val(r.KDES).trigger('change');
                    $('#form-input').prop('action', '<?= site_url('Rtkerja/update') ?>')
                }, "<?= site_url('Rtkerja/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rtkerja/insert') ?>')

            });

            const config_valid = {
                rules: {
                    Rkerja_kinsindlist: {
                        required: true,
                    },
                    Rkerja_tsk: {
                        tgl: true,
                        required: true,
                    },
                    Rkerja_kinsproplist: {
                        required: true,
                    },
                    Rkerja_kinskablist: {
                        required: true,
                    },
                    Rkerja_kunkomlist: {
                        required: true,
                    },
                    Rkerja_kununitlist: {
                        required: true,
                    },
                    Rkerja_kproplist: {
                        required: true,
                    },
                    Rkerja_kkablist: {
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
                            url: "<?= site_url('Rtkerja/delete') ?>",
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