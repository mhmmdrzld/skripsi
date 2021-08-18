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
                                            <input type="text" name="gkkhir_nip" class="form-control form-control-sm" readonly>
                                        </div>
                                        <div class="col-sm-5" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No SK Gaji Pokok :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="gkkhir_nstahu" name="gkkhir_nstahu" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tgl SK Gaji Pokok :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="gkkhir_tstahu" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terhitung Mulai Tanggal GajI :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="gkkhir_tmtgaj" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="gkkhir_kpej">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pangkat / Golongan Ruang :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="gkkhir_kgolru">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="gkkhir_kgolru_text">
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm select2" name="gkkhir_kgolrulist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Masa Kerja Golongan Ruang, tahun:</label>
                                        <div class="col-sm-1">
                                            <input type="text" id="tahun" name="tahun" class="form-control form-control-sm upper">
                                        </div>
                                        <div class="col-sm-2  ">
                                            [ Tahun ]
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bulan Kerja :</label>
                                        <div class="col-sm-1">
                                            <input type="text" id="gkkhir_mskerja" name="gkkhir_mskerja" class="form-control form-control-sm upper">
                                        </div>
                                        <div class="col-sm-2  ">
                                            [ Bulan ]
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gaji Pokok Terakhir :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm" readonly name="gkkhir_gpokkhir">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="gkkhir_gpokkhir_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="gkkhir_gpokkhirlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tujangan Jabatan :</label>
                                        <div class="col-sm-2">
                                            <input type="text" id="gkkhir_tunjab" name="gkkhir_tunjab" class="form-control form-control-sm decimal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Insentif :</label>
                                        <div class="col-sm-2">
                                            <input type="text" id="gkkhir_isentif" name="gkkhir_isentif" class="form-control form-control-sm decimal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Total :</label>
                                        <div class="col-sm-2">
                                            <input type="text" id="gkkhir_total" name="gkkhir_total" class="form-control form-control-sm decimal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Wilayah Pembayaran KPN :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="gkkhir_kkantor">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="gkkhir_kkantor_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="gkkhir_kkantorlist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">KTUA:</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="gkkhir_ktua" name="gkkhir_ktua" class="form-control form-control-sm">
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
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KPEJ + '>' + data[i].NPEJ.toUpperCase() + '</option>';
                }
                $('select[name="gkkhir_kpej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================

        //start data golongan ruang ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_golongan_ruang'); ?>",
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KGOLRU + '>' + data[i].NPANGKAT.toUpperCase() + '</option>';
                }
                $('select[name="gkkhir_kgolrulist"]').append(html);
            }
        });

        $('select[name="gkkhir_kgolrulist"]').change(function() {
            $('input[name="gkkhir_kgolru"]').val($(this).val());
            $('input[name="gkkhir_kgolru_text"]').val($('select[name="gkkhir_kgolrulist"] option:selected').text());
        });
        //end data golongan ruang ============================


    });
</script>