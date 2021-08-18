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
                                        <label class="col-sm-3 col-form-label">No SK Pensiun :</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="m_pensiun_nsk" name="m_pensiun_nsk" class="form-control form-control-sm upper">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal SK Pensiun :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="m_pensiun_tsk" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pejabat Yang Menetapkan :</label>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="m_pensiun_kpej">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Pensiun :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="m_pensiun_tpensiun" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Penambahan Masa Pensiun :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="m_pensiun_tpmp" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Pensiun :</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="m_pensiun_kjpensiun">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status Pegawai :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm decimal" readonly name="m_pensiun_kstatus">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly name="m_pensiun_kstatus_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="m_pensiun_kstatuslist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kedudukan Pegawai :</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm decimal" readonly name="m_pensiun_kduduk">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-sm upper" readonly name="m_pensiun_kduduk_text">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm select2" name="m_pensiun_kduduklist">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="m_pensiun_kethidup">Keterangan Hidup :</label>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input type="checkbox" name="m_pensiun_kethidup" class="form-check-input" id="m_pensiun_kethidup" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keterangan :</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control upper" name="m_pensiun_alamat" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Meninggal :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="m_pensiun_tmg" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                $('select[name="m_pensiun_kpej"]').append(html);
            }
        });
        //end data pejabat yang menetapkan ============================

        //start data jenis pensiun ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_jenis_pensiun'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KJPENSIUN + '>' + data[i].NJPENSIUN.toUpperCase() + '</option>';
                }
                $('select[name="m_pensiun_kjpensiun"]').append(html);
            }
        });
        //end data jenis pensiun ============================

        //start data status pegawai ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_status_pegawai'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KSTATUS + '>' + data[i].NSTATUS.toUpperCase() + '</option>';
                }
                $('select[name="m_pensiun_kstatuslist"]').append(html);
            }
        });

        $('select[name="m_pensiun_kstatuslist"]').change(function() {
            $('input[name="m_pensiun_kstatus"]').val($(this).val());
            $('input[name="m_pensiun_kstatus_text"]').val($('select[name="m_pensiun_kstatuslist"] option:selected').text());
        });
        //end data status pegawai ============================

        //start data kedudukan pegawai ============================
        $.ajax({
            url: "<?php echo site_url('Master/get_kedudukan_pegawai'); ?>",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].KDUDUK + '>' + data[i].NDUDUK.toUpperCase() + '</option>';
                }
                $('select[name="m_pensiun_kduduklist"]').append(html);
            }
        });

        $('select[name="m_pensiun_kduduklist"]').change(function() {
            $('input[name="m_pensiun_kduduk"]').val($(this).val());
            $('input[name="m_pensiun_kduduk_text"]').val($('select[name="m_pensiun_kduduklist"] option:selected').text());
        });
        //end data status pegawai ============================

        //nampilkan data
        if (nip) {
            ajax(function data_ajax(data) {

                $('input[name="m_pensiun_nsk"]').val(data.NSK);
                $('input[name="m_pensiun_tsk"]').val(tanggal_null(data.TSK));
                $('select[name="m_pensiun_kpej"]').val(data.KPEJ).trigger('change');
                $('input[name="m_pensiun_tpensiun"]').val(tanggal_null(data.TPENSIUN));
                $('input[name="m_pensiun_tpmp"]').val(tanggal_null(data.TPMP));
                $('select[name="m_pensiun_kjpensiun"]').val(data.KJPENSIUN).trigger('change');
                $('select[name="m_pensiun_kstatuslist"]').val(data.KSTATUS).trigger('change');
                $('select[name="m_pensiun_kduduklist"]').val(data.KDUDUK).trigger('change');
                $('input[name="m_pensiun_kethidup"]').prop('checked', (data.KETHIDUP == 1 ? true : false));
                $('textarea[name="m_pensiun_alamat"]').val(data.KET);
                $('input[name="m_pensiun_tmg"]').val(tanggal_null(data.TMG));

            }, "<?= site_url('Pensiun/get_data'); ?>")

        }
    });
</script>