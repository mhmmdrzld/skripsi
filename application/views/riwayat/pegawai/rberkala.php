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
                                            <input type="text" name="r_berkala_nip" class="form-control form-control-sm" readonly>
                                        </div>
                                        <div class="col-sm-5" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No BERKALA :</label>
                                        <div class="col-sm-4  ">
                                            <input type="text" id="r_berkala_noberkala" name="r_berkala_noberkala" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Gaji Berkala :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="r_berkala_tglberkala" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No KPTS :</label>
                                        <div class="col-sm-4  ">
                                            <input type="text" id="r_berkala_kpts" name="r_berkala_kpts" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal KPTS :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="r_berkala_tglkpts" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Gaji Tersebut :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="r_berkala_tmtgjlm" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tahun Lama :</label>
                                        <div class="col-sm-1  ">
                                            <input type="text" id="r_berkala_msthnlm" name="r_berkala_msthnlm" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bulan Lama :</label>
                                        <div class="col-sm-1  ">
                                            <input type="text" id="r_berkala_msblnlm" name="r_berkala_msblnlm" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gaji Berkala Akan Datang :</label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="dd/mm/yyyy" name="r_berkala_tmtakandtg" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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

    });
</script>