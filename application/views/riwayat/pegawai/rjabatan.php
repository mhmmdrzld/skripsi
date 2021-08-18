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
                                Klik <b>nama Jabatan</b> untuk mengubah atau menghapus data.
                            </div>
                            <table id="tabel-data" class="table table-striped table-bordered dt-responsive " style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Jabatan</th>
                                        <th>Jenis Jabatan</th>
                                        <th>Tmt Jabatan</th>
                                        <th>No SK Jabatan</th>
                                        <th>Tgl SK Jabatan</th>
                                        <th>Eselon</th>
                                        <th>Tgl Eselon</th>
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
                <form class="form-horizontal" method="POST" id="form-input">
                    <div class="card-body ">


                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i> Perhatian !</h5>
                            <table width="100%">
                                <tr>
                                    <td colspan="2">Apabila ada update data (Mutasi) untuk Guru, Tata usaha dan Penjaga SD, pada Form riwayat jabatan, disii kolom keterangannya dan form Tempat Kerja / Lokasi Kerja disesuaikan dengan Jabatannya. Untuk kolom keterangan diisi dengan ketentuan sebagai berikut :</td>
                                </tr>
                                <tr>
                                    <td>1. </td>
                                    <td>Untuk Penjaga SD, Kolom Keterangan diisi dengan <b>*Penjaga SDN*</b></td>
                                </tr>
                                <tr>
                                    <td>2. </td>
                                    <td>Untuk Tata Usaha, Kolom Keterangan diisi dengan <b>*TU TK / TU SMPN / TU SMAN / TU SMKN*</b></td>
                                </tr>
                                <tr>
                                    <td>3. </td>
                                    <td>Untuk Guru, Kolom Keterangan diisi dengan <b>*TK / SDN / SMPN / SMAN / SMKN*</b></td>
                                </tr>
                                <tr>
                                    <td>4. </td>
                                    <td>Untuk Jabatan Pamong, Penilik, Pengawas, Kolom Keterangan diisi dengan <b>*Pamong / Penilik / Pengawas*</b></td>
                                </tr>
                            </table>
                        </div>
                        <hr>
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
                            <label class="col-sm-3 col-form-label">No SK Jabatan :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rjabatan_nskjabat" name="rjabatan_nskjabat" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjabatan_tskjabat" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat yang Menetapkan :</label>
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_kpej">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Jabatan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_jnsjab">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_jnsjab_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_jnsjablist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Eselon :</label>
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_keselon">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kelompok Jabatan :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_keljab">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_keljab_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_keljablist">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Jabatan :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control upper" name="rjabatan_njab" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Organisasi :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_kunker2">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_kunker2_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_kunker2list">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_kunker3">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_kunker3_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_kunker3list">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bag Unit Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_kunker4">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_kunker4_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_kunker4list">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Subbag Unit Kerja :</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_kunker5">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_kunker5_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_kunker5list">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan :</label>
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_ket">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No SK Eselon :</label>
                            <div class="col-sm-5">
                                <input type="text" id="rjabatan_nskeselon" name="rjabatan_nskeselon" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal SK Eselon :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjabatan_tskeselon" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terhitung Mulai Jabatan :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjabatan_tmtjabat" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal Eselon :</label>

                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjabatan_tmteselon" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Dilantik :</label>

                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjabatan_tlantik" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pejabat yang Melantik :</label>
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_nlantik">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">TMT Menjabat Eselon Pertama Kali(pilihan,isi) :</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="dd/mm/yyyy" name="rjabatan_tmtjab" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sumpah Jabatan :</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rjabatan_sjab" name="rjabatan_sjab" checked value="1">
                                    <label class="form-check-label" for="rjabatan_sjab">Sudah</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rjabatan_sjab2" name="rjabatan_sjab" value="2">
                                    <label class="form-check-label" for="rjabatan_sjab2">Belum</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Merangkap jab. Fungsional :</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rjabatan_rcunit1_1" name="rjabatan_rcunit1" value="1">
                                    <label class="form-check-label" for="rjabatan_rcunit">Ya</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rjabatan_rcunit1_2" name="rjabatan_rcunit1" checked value="2">
                                    <label class="form-check-label" for="rjabatan_rcunit2">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Jabatan Rangkap:</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control form-control-sm decimal" readonly name="rjabatan_rcunit2">
                            </div>
                            <!-- <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm upper" readonly name="rjabatan_rcunit2_text">
                            </div> -->
                            <div class="col-sm-6">
                                <select style="width:100%" class="form-control form-control-sm select2" name="rjabatan_rcunit2list">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mata Pelajaran :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control upper" name="npelajaran" rows="3" placeholder="" readonly></textarea>
                            </div>
                            <div class="col-sm-2">
                                <i>Terisi Otomatis</i>
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
                $('select[name="rjabatan_kpej"]').append(html);
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
                $('select[name="rjabatan_jnsjablist"]').append(html);
            }
        });

        $('select[name="rjabatan_jnsjablist"]').change(function() {
            $('input[name="rjabatan_jnsjab"]').val($(this).val());
            $('input[name="rjabatan_jnsjab_text"]').val($('select[name="rjabatan_jnsjablist"] option:selected').text());
        });
        //end data jenis jabatan ============================

        //start kelompok jabatan ==============================
        $('select[name="rjabatan_jnsjablist"]').change(function() {
            var id = this.value;
            var url = "<?php echo site_url(); ?>";

            $('select[name="rjabatan_keljablist"]').empty();
            $('select[name="rjabatan_keljablist"]').append(' <option></option>');
            if (id == 1) {
                url = "<?php echo site_url('Master/get_kelompok_jabatan'); ?>"; //jenis jabatan struktural
            } else if (id == 2) {
                url = "<?php echo site_url('Master/get_jabatan_fungsional'); ?>"; //jenis jabatan fungsional tertentu
            } else if (id == 5) {
                url = "<?php echo site_url('Master/get_jabatan_struktural'); ?>"; //jenis jabatan pelaksana 
            } else {
                return false;
            }

            $.ajax({
                url: url,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].KJAB + '>' + data[i].NJAB.toUpperCase() + '</option>';
                    }

                    $('select[name="rjabatan_keljablist"]').append(html);
                }
            });


        });

        $('select[name="rjabatan_keljablist"]').change(function() {
            $('input[name="rjabatan_keljab"]').val($(this).val());
            $('input[name="rjabatan_keljab_text"]').val($('select[name="rjabatan_keljablist"] option:selected').text());
            get_value_njab()
        });

        //end kelompok jabatan ===============================

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
                $('select[name="rjabatan_keselon"]').append(html);
            }
        });
        //end data eselon ============================

        //start data keterangan (sekolah) ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_keterangan'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].ket + '>' + data[i].ket.toUpperCase() + '</option>';
                }
                $('select[name="rjabatan_ket"]').append(html);
            }
        });
        //end data keterangan (sekolah) ============================

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
                $('select[name="rjabatan_nlantik"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================


        //start data jabatan fungsional ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_jabatan_fungsional'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KJAB.slice(0, 2) + '>' + data[i].NJAB.toUpperCase() + '</option>';
                }
                $('select[name="rjabatan_rcunit2list"]').append(html);
            }
        });

        $('select[name="rjabatan_rcunit2list"]').change(function() {
            $('input[name="rjabatan_rcunit2"]').val($(this).val());
            $('input[name="rjabatan_rcunit2_text"]').val($('select[name="rjabatan_rcunit2list"] option:selected').text());
        });
        //end data jabatan fungsional ============================




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
                $('select[name="rjabatan_kunker2list"]').append(html);
            }
        });


        $('select[name="rjabatan_kunker2list"]').change(function() {
            $('input[name="rjabatan_kunker2"]').val($(this).val());
            $('input[name="rjabatan_kunker2_text"]').val($('select[name="rjabatan_kunker2list"] option:selected').text());
            get_unit_kerja($('input[name="rjabatan_kunker2"]').val());
            get_value_njab()
        });
        //end data unit organisasi ======================

        //start data unit kerja ======================
        function get_unit_kerja(kodeorg) {
            $('select[name="rjabatan_kunker3list"]').empty().append('<option></option>').val(null).trigger('change');
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
                        $('select[name="rjabatan_kunker3list"]').append(html);
                    }
                });
            }
        }


        $('select[name="rjabatan_kunker3list"]').change(function() {
            $('input[name="rjabatan_kunker3"]').val($(this).val());
            $('input[name="rjabatan_kunker3_text"]').val($('select[name="rjabatan_kunker3list"] option:selected').text());
            get_bag_unit($('input[name="rjabatan_kunker2"]').val(), $('input[name="rjabatan_kunker3"]').val());
            get_value_njab()
        });
        //end data unit kerja ======================

        //start data bag unit kerja ======================
        function get_bag_unit(kodeorg, kodekerja) {
            if (kodeorg && kodekerja) {
                $('select[name="rjabatan_kunker4list"],select[name="rjabatan_kunker5list"]').empty().append('<option></option>').val(null).trigger('change');
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
                        $('select[name="rjabatan_kunker4list"]').append(html);
                    }
                });
            }
        }


        $('select[name="rjabatan_kunker4list"]').change(function() {
            $('input[name="rjabatan_kunker4"]').val($(this).val());
            $('input[name="rjabatan_kunker4_text"]').val($('select[name="rjabatan_kunker4list"] option:selected').text());
            get_subbag_unit($('input[name="rjabatan_kunker2"]').val(), $('input[name="rjabatan_kunker3"]').val(), $('input[name="rjabatan_kunker4"]').val());
            get_value_njab()
        });
        //end data bag unit kerja ======================

        //start data subbag unit kerja ======================
        function get_subbag_unit(kodeorg, kodekerja, kodebag) {
            if (kodeorg && kodekerja && kodebag) {
                $('select[name="rjabatan_kunker5list"]').empty().append('<option></option>').val(null).trigger('change');
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
                        $('select[name="rjabatan_kunker5list"]').append(html);
                    }
                });
            }
        }


        $('select[name="rjabatan_kunker5list"]').change(function() {
            $('input[name="rjabatan_kunker5"]').val($(this).val());
            $('input[name="rjabatan_kunker5_text"]').val($('select[name="rjabatan_kunker5list"] option:selected').text());
            get_value_njab()
        });
        //end data subbag unit kerja ======================

        //start fungsi get value njab ==================
        function get_value_njab() {
            var keljab = $('select[name="rjabatan_keljablist"] option:selected').text()
            var kunker5 = $('select[name="rjabatan_kunker5list"] option:selected').text()
            var kunker4 = $('select[name="rjabatan_kunker4list"] option:selected').text()
            var kunker3 = $('select[name="rjabatan_kunker3list"] option:selected').text()
            var kunker2 = $('select[name="rjabatan_kunker2list"] option:selected').text()
            var njab = (keljab ? keljab + ' ' : '') + (kunker5 ? kunker5 + ' ' : '') + (kunker4 ? kunker4 + ' ' : '') + (kunker3 ? kunker3 + ' ' : '') + (kunker2 ? kunker2 + ' ' : '')
            $('textarea[name="rjabatan_njab"]').val(njab);
        }
        //end fungsi get value njab ==================
        if (nip) {
            const config_table = {
                url: '<?= base_url() ?>Rjabatan/get_data',
                columns: [{
                        data: 'no',
                        defaultContent: ''
                    },
                    {
                        data: 'njab'

                    },

                    {
                        data: 'njenjab'
                    },
                    {
                        data: 'tmtjabat',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'nskjabat'
                    },
                    {
                        data: 'tskjabat',
                        render: function(data, type, row) {
                            return tanggal_null(data);
                        }
                    },
                    {
                        data: 'neselon'
                    },
                    {
                        data: 'tskeselon',
                        render: function(data, type, row) {
                            return tanggal_null(data);
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

                    $('input[name="rjabatan_nskjabat"]').val(r.NSKJABAT);
                    $('input[name="rjabatan_tskjabat"]').val(tanggal_null(r.TSKJABAT));
                    $('select[name="rjabatan_kpej"]').val(r.KPEJ).trigger('change');
                    $('select[name="rjabatan_jnsjablist"]').val(r.JNSJAB).trigger('change');
                    $('select[name="rjabatan_keselon"]').val(r.KESELON).trigger('change');
                    $('select[name="rjabatan_keljablist"]').val(r.KELJAB).trigger('change');

                    $('select[name="rjabatan_kunker2list"]').val(r.KUNKER2).trigger('change');
                    $('select[name="rjabatan_kunker3list"]').val(r.KUNKER3).trigger('change');
                    $('select[name="rjabatan_kunker4list"]').val(r.KUNKER4).trigger('change');
                    $('select[name="rjabatan_kunker5list"]').val(r.KUNKER5).trigger('change');
                    $('select[name="rjabatan_ket"]').val(r.KET).trigger('change');
                    $('input[name="rjabatan_nskeselon"]').val(r.NSKESELON);
                    $('input[name="rjabatan_tskeselon"]').val(tanggal_null(r.TSKESELON));
                    $('input[name="rjabatan_tmtjabat"]').val(tanggal_null(r.TMTJABAT));
                    $('input[name="rjabatan_tmteselon"]').val(tanggal_null(r.TMTESELON));
                    $('input[name="rjabatan_tlantik"]').val(tanggal_null(r.TLANTIK));
                    $('select[name="rjabatan_nlantik"]').val(r.NLANTIK).trigger('change');
                    $('input[name="rjabatan_tmtjab"]').val(tanggal_null(r.TMTJAB));
                    $(r.SJAB == 1 ? '#rjabatan_sjab' : (r.SJAB == 2 ? '#rjabatan_sjab2' : '')).prop('checked', true)
                    $(r.RINCUNIT1 == 1 ? '#rjabatan_rcunit1_1' : (r.RINCUNIT1 == 2 ? '#rjabatan_rcunit1_2' : '')).prop('checked', true)
                    $('select[name="rjabatan_rcunit2list"]').val(r.RINCUNIT2).trigger('change');
                    $('#form-input').prop('action', '<?= site_url('Rjabatan/update') ?>')
                    $('textarea[name="rjabatan_njab"]').val(r.NJAB);
                }, "<?= site_url('Rjabatan/get_data_byID') ?>")
            });


            $('#tambah-baru').click(function() {
                $('#modal-data').modal('show');
                $('#modaloverlay2').hide();
                $('#btn-hapus').hide();
                $('#form-input').trigger("reset");
                $('#form-input select').val(null).trigger("change");
                $('input[name="nip"]').val($('#get_nip').text())
                $('#form-input').prop('action', '<?= site_url('Rjabatan/insert') ?>')
            });

            const config_valid = {
                rules: {
                    rjabatan_nskjabat: {
                        required: true,
                    },
                    rjabatan_tskjabat: {
                        required: true,
                        tgl: true,
                    },
                    rjabatan_kpej: {
                        required: true,
                    },
                    rjabatan_jnsjablist: {
                        required: true,
                    },
                    rjabatan_keselon: {
                        required: true,
                    },
                    rjabatan_keljablist: {
                        required: true,
                    },
                    rjabatan_njab: {
                        required: true,
                    },
                    rjabatan_tskeselon: {
                        tgl: true,
                    },
                    rjabatan_tmtjabat: {
                        required: true,
                        tgl: true,
                    },
                    rjabatan_tmteselon: {
                        tgl: true,
                    },
                    rjabatan_tlantik: {
                        tgl: true,
                    },
                    rjabatan_tmtjab: {
                        tgl: true,
                        required: true,
                    },
                    rjabatan_nlantik: {
                        required: true,
                    },
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
                            url: "<?= site_url('Rjabatan/delete') ?>",
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