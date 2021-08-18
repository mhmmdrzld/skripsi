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
                                        <div class="col-sm-2">
                                            <input type="text" name="nip" class="form-control form-control-sm" readonly>
                                        </div>
                                        <div class="col-sm-5" id="nama">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No SK Jabatan :</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="jakhir_nsjabat" name="jakhir_nsjabat" class="upper form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal SK Jabatan :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="jakhir_tskjabat" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="jakhir_kpej">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Jenis Jabatan :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_jnsjab">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_jnsjab_text">
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm select2" name="jakhir_jnsjablist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Eselon :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="jakhir_keselon">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Kelompok Jabatan :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_keljab">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_keljab_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="jakhir_keljablist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Jabatan :</label>
                                        <div class="col-sm-5">
                                            <textarea class="form-control upper" name="jakhir_njab" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Unit Organisasi :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_kunker2">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_kunker2_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Unit Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_kunker3">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_kunker3_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Bag Unit Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_kunker4">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_kunker4_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Subbag Unit Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_kunker5">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_kunker5_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        * Unit-unit diatas akan terisi otomatis jika Lokasi kerja di isi
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terhitung Mulai Jabatan: </label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="jakhir_tmtjabat" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal Eselon:</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="jakhir_tmteselon" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Dilantik:</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="jakhir_tlantik" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang melantik :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="jakhir_nlantik">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Menjabat Eselon Pertama Kali(pilihan,isi) :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="jakhir_tmtjab" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sumpah Jabatan :</label>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rjakhir_sjab" name="rjakhir_sjab" value="1">
                                                <label class="form-check-label" for="rjakhir_sjab">Sudah</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rjakhir_sjab2" name="rjakhir_sjab" value="2">
                                                <label class="form-check-label" for="rjakhir_sjab2">Belum</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Merangkap Jab. Fungsional :</label>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rjakhir_rincunit1" name="rjakhir_rincunit1" value="1">
                                                <label class="form-check-label" for="rjakhir_rincunit1">Ya</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="rjakhir_rincunit1_blum" name="rjakhir_rincunit1" value="2">
                                                <label class="form-check-label" for="rjakhir_rincunit1_blum">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Jabatan Rangkap :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="jakhir_rincunit2">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="jakhir_rincunit2_text">
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="jakhir_rincunit2list">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keterangan :</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control upper" name="jakhir_ket" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat :</label>
                                        <div class="col-sm-3">
                                            <textarea class="form-control upper" name="alamat" rows="3" placeholder="" readonly></textarea>
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Propinsi:</label>

                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm upper" readonly name="nama_prov">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Kabupaten/Kota:</label>

                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm upper" readonly name="nama_kab_kota">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Kecamatan :</label>

                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm upper" readonly name="nama_kec">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label ">Desa/Kelurahan :</label>

                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-sm upper" readonly name="nama_desa">
                                        </div>
                                        <div class="col-sm-2">
                                            <i>Terisi Otomatis</i>
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
                $('select[name="jakhir_kpej"]').append(html);
                $('select[name="jakhir_nlantik"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================


        //start data jenis jabatan ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_jenis_jabatan'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KJENJAB + '>' + data[i].NJENJAB.toUpperCase() + '</option>';
                }
                $('select[name="jakhir_jnsjablist"]').append(html);
            }
        });

        $('select[name="jakhir_jnsjablist"]').change(function() {
            $('input[name="jakhir_jnsjab"]').val($(this).val());
            $('input[name="jakhir_jnsjab_text"]').val($('select[name="jakhir_jnsjablist"] option:selected').text());
            get_kelompok_jabatan($('select[name="jakhir_jnsjablist"]').val())
        });
        //end data jenis jabatan ============================


        //start data eselon ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_eselon'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KESELON + '>' + data[i].NESELON.toUpperCase() + '</option>';
                }
                $('select[name="jakhir_keselon"]').append(html);
            }
        });
        //end data eselon ============================

        //start data kelompok jabatan ============================

        function get_kelompok_jabatan(id_jenis_jabatan) {
            $('select[name="jakhir_keljablist"]').empty().append('<option></option>').val(null).trigger('change')
            var urls
            if (id_jenis_jabatan == 1) { //struktural
                urls = "<?php echo site_url('Master/get_kelompok_jabatan'); ?>"
            } else if (id_jenis_jabatan == 2) { //Fungsional Tertentu
                urls = "<?php echo site_url('Master/get_jabatan_fungsional'); ?>"
            } else if (id_jenis_jabatan == 5) { //pelaksana //fungsioanl
                urls = "<?php echo site_url('Master/get_jabatan_struktural'); ?>"
            } else {
                return false;
            }

            $.ajax({
                url: urls,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].KJAB + '>' + data[i].NJAB.toUpperCase() + '</option>';
                    }
                    $('select[name="jakhir_keljablist"]').append(html);
                }
            });
        }

        $('select[name="jakhir_keljablist"]').change(function() {
            $('input[name="jakhir_keljab"]').val($(this).val());
            $('input[name="jakhir_keljab_text"]').val($('select[name="jakhir_keljablist"] option:selected').text());
        });
        //end data kelompok jabatan ============================

        //start data jabatan fungsional ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_jabatan_fungsional'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KJAB + '>' + data[i].NJAB.toUpperCase() + '</option>';
                }
                $('select[name="jakhir_rincunit2list"]').append(html);
            }
        });

        $('select[name="jakhir_rincunit2list"]').change(function() {
            $('input[name="jakhir_rincunit2"]').val($(this).val());
            $('input[name="jakhir_rincunit2_text"]').val($('select[name="jakhir_rincunit2list"] option:selected').text());
        });
        //end data jabatan fungsional ============================


        if (nip) {
            ajax(function data_ajax(data) {
                $('input[name="jakhir_nsjabat"]').val(data.NSKJABAT);
                $('input[name="jakhir_tskjabat"]').val(tanggal_null(data.TSKJABAT));
                $('select[name="jakhir_kpej"]').val(data.KPEJ).trigger('change');
                $('select[name="jakhir_jnsjablist"]').val(data.JNSJAB).trigger('change');
                $('select[name="jakhir_keselon"]').val(data.KESELON).trigger('change');
                $('select[name="jakhir_keljablist"]').val(data.KELJAB).trigger('change');
                $('textarea[name="jakhir_njab"]').val(data.NJAB);

                $('input[name="jakhir_kunker2"]').val(data.KUNKER2);
                $('input[name="jakhir_kunker2_text"]').val(data.NUNKER2TEXT);
                $('input[name="jakhir_kunker3"]').val(data.KUNKER3);
                $('input[name="jakhir_kunker3_text"]').val(data.NUNKER3TEXT);
                $('input[name="jakhir_kunker4"]').val(data.KUNKER4);
                $('input[name="jakhir_kunker4_text"]').val(data.NUNKER4TEXT);
                if (data.KUNKER5 != '00') {
                    $('input[name="jakhir_kunker5"]').val(data.KUNKER5);
                    $('input[name="jakhir_kunker5_text"]').val(data.NUNKER4TEXT);

                }

                $('input[name="jakhir_tmtjabat"]').val(tanggal_null(data.TMTJABAT));
                $('input[name="jakhir_tmteselon"]').val(tanggal_null(data.TMTESELON));
                $('input[name="jakhir_tlantik"]').val(tanggal_null(data.TLANTIK));
                $('select[name="jakhir_nlantik"]').val(data.NLANTIK).trigger('change');
                $('input[name="jakhir_tmtjab"]').val(tanggal_null(data.TMTJABAT));
                $((data.SJAB == 1) ? '#rjakhir_sjab' : '#rjakhir_sjab2').prop('checked', true);
                $((data.RINCUNIT1 == 1) ? '#rjakhir_rincunit1' : '#rjakhir_rincunit1_blum').prop('checked', true);
                $('select[name="jakhir_rincunit2list"]').val(data.RINCUNIT2).trigger('change');

                $('textarea[name="jakhir_ket"]').val(data.KET);
            }, "<?= site_url('Jakhir/get_data'); ?>")

        }
    });
</script>