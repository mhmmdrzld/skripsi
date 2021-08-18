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
                                        <label class="col-sm-3 col-form-label">Tinggi:</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="ketbadan_tinggi" name="ketbadan_tinggi" class="form-control form-control-sm decimal">
                                        </div>
                                        <div class="col-sm-2  ">
                                            <i>Cm</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Berat Badan:</label>
                                        <div class="col-sm-2  ">
                                            <input type="text" id="ketbadan_berat" name="ketbadan_berat" class="form-control form-control-sm decimal">
                                        </div>
                                        <div class="col-sm-2  ">
                                            <i>Kg</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Rambut:</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="ketbadan_rambut">
                                                <option></option>
                                                <option value="1">HITAM</option>
                                                <option value="2">COKLAT</option>
                                                <option value="3">PIRANG</option>
                                                <option value="4">PUTIH</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bentuk Muka:</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="ketbadan_bmuka">
                                                <option></option>
                                                <option value="1">BULAT</option>
                                                <option value="2">OVAL</option>
                                                <option value="3">PERSEGI</option>
                                                <option value="4">LAIN-LAIN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Warna Kulit:</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-sm select2" name="ketbadan_wkulit">
                                                <option></option>
                                                <option value="1">HITAM</option>
                                                <option value="2">PUTIH</option>
                                                <option value="3">COKLAT</option>
                                                <option value="4">LAIN-LAIN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ciri-Ciri Khas:</label>
                                        <div class="col-sm-3  ">
                                            <input type="text" id="ketbadan_ckhas" name="ketbadan_ckhas" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cacat Tubuh:</label>
                                        <div class="col-sm-3  ">
                                            <input type="text" id="ketbadan_cacat" name="ketbadan_cacat" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Baju:</label>
                                        <div class="col-sm-3  ">
                                            <input type="text" id="ketbadan_nobaju" name="ketbadan_nobaju" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Celana:</label>
                                        <div class="col-sm-3  ">
                                            <input type="text" id="ketbadan_nocelana" name="ketbadan_nocelana" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Sepatu:</label>
                                        <div class="col-sm-3  ">
                                            <input type="text" id="ketbadan_nosepatu" name="ketbadan_nosepatu" class="form-control form-control-sm upper">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kacamata :</label>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="ketbadan_kacamata" name="ketbadan_kacamata" value="1">
                                                <label class="form-check-label" for="ketbadan_kacamata">Ya</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="ketbadan_kacamata2" name="ketbadan_kacamata" value="2">
                                                <label class="form-check-label" for="ketbadan_kacamata2">Tidak</label>
                                            </div>
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
                $('input[name="ketbadan_tinggi"]').val(data.TINGGI);
                $('input[name="ketbadan_berat"]').val(data.BERAT);
                $('select[name="ketbadan_rambut"]').val(data.RAMBUT).trigger('change');
                $('select[name="ketbadan_bmuka"]').val(data.BMUKA).trigger('change');
                $('select[name="ketbadan_wkulit"]').val(data.WKULIT).trigger('change');
                $('input[name="ketbadan_ckhas"]').val(data.CKHAS);
                $('input[name="ketbadan_cacat"]').val(data.CACAT);
                $('input[name="ketbadan_nobaju"]').val(data.NOBAJU);
                $('input[name="ketbadan_nocelana"]').val(data.NOCELANA);
                $('input[name="ketbadan_nosepatu"]').val(data.NOSEPATU);
                $((data.KACAMATA == 1) ? "#ketbadan_kacamata-laki" : "#ketbadan_kacamata2").prop("checked", true);
            }, "<?= site_url('Ketbadan/get_data'); ?>")
        }


    });
</script>