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
                                        <label class="col-sm-3 col-form-label">Nama Instansi / Perusahaan:</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pkerja_ninst" name="pkerja_ninst" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jabatan:</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="pkerja_jabatan" name="pkerja_jabatan" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tahun Kerja:</label>
                                        <div class="col-sm-1  ">
                                            <input type="text" id="pkerja_thkerja" name="pkerja_thkerja" class="form-control form-control-sm decimal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bulan Kerja:</label>
                                        <div class="col-sm-1  ">
                                            <input type="text" id="pkerja_blkerja" name="pkerja_blkerja" class="form-control form-control-sm decimal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Mulai Kerja di lingkungan BKD :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="pkerja_tkerja" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
        if (nip) {
            ajax(function data_ajax(data) {
                $('input[name="pkerja_ninst"]').val(data.NINST);
                $('input[name="pkerja_jabatan"]').val(data.JABATAN);
                $('input[name="pkerja_thkerja"]').val(data.THKERJA);
                $('input[name="pkerja_blkerja"]').val(data.BLKERJA);
                $('input[name="pkerja_tkerja"]').val(tanggal_null(data.TKERJA));
            }, "<?= site_url('Pkerja/get_data'); ?>")
        }

    });
</script>