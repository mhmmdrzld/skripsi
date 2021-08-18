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
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No SK Masuk / Keluar :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="r_masuk_nsk" name="r_masuk_nsk" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal SK Masuk / Keluar :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="r_masuk_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat yang menetapkan :</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm select2" name="r_masuk_kpej">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Masuk / Keluar :</label>

                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="r_masuk_tpensiun" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label indent-30">Kedudukan Pegawai :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm " readonly name="r_masuk_kduduk">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm" readonly name="r_masuk_kduduk_text">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="r_masuk_kduduklist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keterangan :</label>
                                        <div class="col-sm-3">
                                            <textarea class="form-control upper" name="r_masuk_ket" rows="3" placeholder=""></textarea>
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
                $('select[name="r_masuk_kpej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================


        //start data kedudukan pegawai ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kedudukan_pegawai1'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KDUDUK + '>' + data[i].NDUDUK.toUpperCase() + '</option>';
                }
                $('select[name="r_masuk_kduduklist"]').append(html);
            }
        });

        $('select[name="r_masuk_kduduklist"]').change(function() {
            $('input[name="r_masuk_kduduk"]').val($(this).val());
            $('input[name="r_masuk_kduduk_text"]').val($('select[name="r_masuk_kduduklist"] option:selected').text());
        });
        //end data kedudukan pegawai ============================

        if (nip) {
            ajax(function data_ajax(data) {
                $('input[name="r_masuk_nsk"]').val(data.NSK);
                    $('input[name="r_masuk_tsk"]').val(tanggal_null(data.TSK));
                    $('select[name="r_masuk_kpej"]').val(data.KPEJ).trigger('change');
                    $('input[name="r_masuk_tpensiun"]').val(tanggal_null(data.TPENSIUN));
                    $('select[name="r_masuk_kduduklist"]').val(data.KDUDUK).trigger('change');
                    $('textarea[name="r_masuk_ket"]').val(data.KET);
            }, "<?= site_url('Masuk_keluar/get_data'); ?>")
           
        }

    });
</script>