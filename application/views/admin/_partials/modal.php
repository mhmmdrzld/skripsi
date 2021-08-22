<div class="modal fade" id="modal-data">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="overlay" id="modaloverlay2">
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div>
            <div class="modal-header">
                <h4 class="modal-title"><?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form class="form-horizontal" id="form-input" method="POST">
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-info"></i> Peringatan !</h5>
                        <b>NPSN</b> digunakan sebagai <b>nama pengguna</b> saat <b>masuk </b>!
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NPSN :</label>
                            <div class="col-sm-5">
                                <input type="text" name="npsn" class="form-control form-control-sm">
                                <input type="hidden" name="idakun" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Sekolah :</label>
                            <div class="col-sm-5">
                                <input type="text" name="namasekolah" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat :</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="alamatsekolah" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Akreditasi :</label>
                            <div class="col-sm-5">
                                <input type="text" name="akreditasi" class="form-control form-control-sm upper">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email :</label>
                            <div class="col-sm-5">
                                <input type="email" name="email" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status :</label>
                            <div class="col-sm-5">
                                <select style="width: 100%" class="form-control form-control-sm select2" name="status">
                                    <option value=""></option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Belum Verifikasi">Belum Verifikasi</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kata Sandi Akun :</label>
                            <div class="col-sm-5">
                                <input type="password" name="password" class="form-control form-control-sm">
                                <input type="hidden" name="password_lama" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <!-- <button type="button" id="btn-hapus" class="btn btn-danger mr-auto">Hapus</button> -->
                <button type="button" id="btn-simpan" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div23