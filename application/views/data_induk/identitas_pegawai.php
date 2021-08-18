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
              <h3 class="card-title p-3"><?= $title ?></h5>
                <ul class="nav nav-pills ml-auto p-2 mr-5">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-primary" data-toggle="dropdown" href="#">
                      Aksi <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" id="tambah-baru"><span class="fa fa-plus"></span> Tambah NIP Baru</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" id="proses-simpan"><span class="fa fa-save"></span> Simpan</a>
                      <!-- <a class="dropdown-item" tabindex="-1" href="#" id="proses_update"><span class="fa fa-save"></span> Simpan</a> -->
                      <!-- <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#" id="proses_hapus"><span class="fa fa-trash"></span> Hapus</a> -->
                    </div>
                  </li>
                </ul>
            </div>
            <div class="card-body konten">
              <form class="form-horizontal" id="form-input" method="POST">

                <div class="card-body">
                  <div class="form-group row">
                    <!-- <button type="submit" value="Submit">sssss</button> -->
                    <label class="col-sm-3 col-form-label">No Urut Berkas :</label>
                    <div class="col-sm-1">
                      <input type="text" name="no_urut" class="form-control form-control-sm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Lemari :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly id="kode_lemari" name="kode_lemari">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly id="nama_lemari" name="nama_lemari">
                    </div> -->
                    <div class="col-sm-3">
                      <select class="form-control form-control-sm select2" id="select_lemari" name="select_lemari">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Lantai :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_lantai" id="kode_lantai">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_lantai" id="nama_lantai">
                    </div> -->
                    <div class="col-sm-3">
                      <select class="form-control form-control-sm select2" name="select_lantai" id="select_lantai">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pemotretan dan Sidik Jari KPE :</label>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="sudah_kpe" name="sidik_jari_kpe" value="1">
                        <label class="form-check-label" for="sudah_kpe">Sudah</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="belum_kpe" name="sidik_jari_kpe" value="2" checked>
                        <label class="form-check-label" for="belum_kpe">Belum</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pendataan e-PUPNS :</label>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" id="sudah_pendataan" type="radio" name="pendataan_pupns" value="1">
                        <label class="form-check-label" for="sudah_pendataan">Sudah</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendataan_pupns" id="belum_pendataan" value="2" checked>
                        <label class="form-check-label" for="belum_pendataan">Belum</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kode Register :</label>
                    <div class="col-sm-2">
                      <input type="text" name="kode_register" id="register" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Induk Pegawai :</label>
                    <div class="col-sm-3">
                      <input type="text" name="nip" class="form-control form-control-sm">
                    </div>
                    <div class="col-sm-5" id="nama">

                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Induk Pegawai :</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" name="iden" id="nip2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama :</label>
                    <div class="col-sm-3">
                      <input type="text" name="nama" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gelar Depan :</label>
                    <div class="col-sm-2">
                      <input type="text" name="gelar_depan" class="form-control form-control-sm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gelar Belakang :</label>
                    <div class="col-sm-2">
                      <input type="text" name="gelar_belakang" class="form-control form-control-sm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Mata Pelajaran :</label>
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_mapel" id="select_mapel">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                    <div class="col-sm-2">
                      <input type="text" placeholder="dd/mm/yyyy" name="tangggal_lahir" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat Lahir :</label>
                    <div class="col-sm-2">
                      <input type="text" name="tempat_lahir" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Propinsi Lahir :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_prov_lhr">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_prov_lhr">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_prov_lhr">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Kabupaten/Kota Lahir:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_kab_kota_lhr">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_kab_kota_lhr">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_kab_kota_lhr" id="kucingkawinlagi">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Kecamatan Lahir :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_kec_lhr">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_kec_lhr">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_kec_lhr">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Desa/Kelurahan Lahir :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_desa_lhr">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_desa_lhr">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_desa_lhr">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Akte :</label>
                    <div class="col-sm-2">
                      <input type="text" name="no_akte" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin :</label>
                    <div class="col-sm-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="1" id="laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="2" id="perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Agama / Kepercayaan Kepada Tuhan YME:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_agama" id="kode_agama">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_agama" id="nama_agama">
                    </div> -->
                    <div class="col-sm-3">
                      <select class="form-control form-control-sm select2" name="select_agama" id="select_agama">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status Pegawai:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_status">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_status">
                    </div> -->
                    <div class="col-sm-3">
                      <select class="form-control form-control-sm select2" name="select_status" id="select_status">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Pegawai:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_jenis">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_jenis">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_jenis">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kedudukan Pegawai:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm decimal" readonly name="kode_kedudukan">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm upper" readonly name="nama_kedudukan">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_kedudukan">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status Perkawinan:</label>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="kawin" name="status_kawin" value="1">
                        <label class="form-check-label" for="kawin">Kawin</label>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="belum_kawin" name="status_kawin" value="2" checked>
                        <label class="form-check-label" for="belum_kawin">Belum Kawin</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="janda_duda" name="status_kawin" value="3">
                        <label class="form-check-label" for="janda_duda">Janda/Duda</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sukubangsa :</label>
                    <div class="col-sm-2">
                      <input type="text" name="sukubangsa" class="form-control form-control-sm upper ">
                    </div>
                    <i>Tidak Harus Diisi</i>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">MARGA :</label>
                    <div class="col-sm-2">
                      <input type="text" name="marga" class="form-control form-control-sm upper">
                    </div>
                    <i>Tidak Harus Diisi</i>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Golongan Darah:</label>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="goldar_a" name="goldar" value="1" checked>
                        <label class="form-check-label" for="goldar_a">A</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="goldar_b" name="goldar" value="2">
                        <label class="form-check-label" for="goldar_b">B</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="goldar_ab" name="goldar" value="3">
                        <label class="form-check-label" for="goldar_ab">AB</label>
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="goldar_o" name="goldar" value="4">
                        <label class="form-check-label" for="goldar_o">O</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat Rumah :</label>
                    <div class="col-sm-4">
                      <textarea class="form-control upper" name="alamat" rows="3" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">RT :</label>
                    <div class="col-sm-1">
                      <input type="text" name="rt" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">RW :</label>
                    <div class="col-sm-1">
                      <input type="text" name="rw" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">No Telepon :</label>
                    <div class="col-sm-2">
                      <input type="text" name="altelp" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Whatsapp :</label>
                    <div class="col-sm-2">
                      <input type="text" name="no_wa" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Propinsi:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm" readonly name="kode_prov">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" readonly name="nama_prov">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_prov">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Kabupaten/Kota:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm" readonly name="kode_kab_kota">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" readonly name="nama_kab_kota">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_kab_kota">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Kecamatan :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm" readonly name="kode_kec">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" readonly name="nama_kec">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_kec">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label indent-30">Desa/Kelurahan :</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control form-control-sm" readonly name="kode_desa">
                    </div>
                    <!-- <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" readonly name="nama_desa">
                    </div> -->
                    <div class="col-sm-5">
                      <select class="form-control form-control-sm select2" name="select_desa">
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kode Pos :</label>
                    <div class="col-sm-2">
                      <input type="text" name="kode_pos" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email :</label>
                    <div class="col-sm-3">
                      <input type="text" name="email" class="form-control form-control-sm">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No KARPEG: :</label>
                    <div class="col-sm-3">
                      <input type="text" name="no_karpeg" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No ASKES:</label>
                    <div class="col-sm-3">
                      <input type="text" name="no_askes" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No TASPEN:</label>
                    <div class="col-sm-3">
                      <input type="text" name="no_taspen" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Kartu Istri/Suami:</label>
                    <div class="col-sm-3">
                      <input type="text" name="no_kartu_suami_istri" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Pokok Wajib Pajak (NPWP):</label>
                    <div class="col-sm-3">
                      <input type="text" name="npwp" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No KTP :</label>
                    <div class="col-sm-3">
                      <input type="text" name="ktp" class="form-control form-control-sm upper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">BAPERTARUM:</label>
                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="bapertarum" id="bapertarum_sudah" value="1">
                        <label class="form-check-label" for="bapertarum_sudah">Sudah</label>
                      </div>
                    </div>

                    <div class="col-sm-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="bapertarum" id="bapertarum_belum" value="2" checked>
                        <label class="form-check-label" for="bapertarum_belum">Belum</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal BAPERTARUM :</label>
                    <div class="col-sm-2">
                      <input type="text" placeholder="dd/mm/yyyy" name="tgl_bapertarum" class="form-control form-control-sm datemask" data-inputmask-alias="datetime" readonly data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jumlah Yang Diterima Dari BAPERTARUM (Rp):</label>
                    <div class="col-sm-3">
                      <input type="text" name="jumlah_bapertarum" readonly class="form-control form-control-sm">
                    </div>
                  </div>
                </div>

              </form>

            </div>
            <div class="card-footer">

            </div>


          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- /. maincontent -->
</div>
<!-- content -->

<script>
  $(function() {


    //start data lemari ============================
    $.ajax({
      url: "<?php echo site_url('Master/get_lemari'); ?>",
      method: "GET",
      async: false,
      dataType: 'json',
      success: function(data) {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value=' + data[i].klemari + '>' + data[i].nlemari.toUpperCase() + '</option>';
        }
        $('#select_lemari').append(html);
      }
    });

    $('#select_lemari').change(function() {
      $('#kode_lemari').val($(this).val());
      $('#nama_lemari').val($("#select_lemari option:selected").text());
    });
    //end data lemari ============================

    //start data lantai ============================

    $.ajax({
      url: "<?php echo site_url('Master/get_lantai'); ?>",
      method: "GET",
      async: false,
      dataType: 'json',
      success: function(data) {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value=' + data[i].klantai + '>' + data[i].nlantai.toUpperCase() + '</option>';
        }
        $('#select_lantai').append(html);
      }
    });

    $('#select_lantai').change(function() {
      $('#kode_lantai').val($(this).val());
      $('#nama_lantai').val($("#select_lantai option:selected").text());
    });

    //end data lantai ============================


    //start data mata pelajaran ============================
    $.ajax({
      url: "<?php echo site_url('Master/get_mapel'); ?>",
      method: "GET",
      async: false,
      dataType: 'json',
      success: function(data) {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].npelajaran + '">' + data[i].npelajaran.toUpperCase() + '</option>';
        }
        $('#select_mapel').append(html);
      }
    });
    //end data mata pelajaran ============================


    //start data agama ============================
    $.ajax({
      url: "<?php echo site_url('Master/get_agama'); ?>",
      method: "GET",
      async: false,
      dataType: 'json',
      success: function(data) {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value=' + data[i].KAGAMA + '>' + data[i].NAGAMA.toUpperCase() + '</option>';
        }
        $('#select_agama').append(html);
      }
    });

    $('#select_agama').change(function() {
      $('#kode_agama').val($(this).val());
      $('#nama_agama').val($("#select_agama option:selected").text());
    });
    //end data agama ============================


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
        $('#select_status').append(html);
      }
    });

    $('#select_status').change(function() {
      $('input[name="kode_status"]').val($(this).val());
      $('input[name="nama_status"]').val($("#select_status option:selected").text());
    });
    //end data status pegawai ============================

    //start data jenis pegawai ============================
    $.ajax({
      url: "<?php echo site_url('Master/get_jenis_pegawai'); ?>",
      method: "GET",
      async: false,
      dataType: 'json',
      success: function(data) {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value=' + data[i].KJPEG + '>' + data[i].NJPEG.toUpperCase() + '</option>';
        }
        $('select[name="select_jenis"]').append(html);
      }
    });

    $('select[name="select_jenis"]').change(function() {
      $('input[name="kode_jenis"]').val($(this).val());
      $('input[name="nama_jenis"]').val($('select[name="select_jenis"] option:selected').text());
    });
    //end data jenis pegawai ============================


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
        $('select[name="select_kedudukan"]').append(html);
      }
    });

    $('select[name="select_kedudukan"]').change(function() {
      $('input[name="kode_kedudukan"]').val($(this).val());
      $('input[name="nama_kedudukan"]').val($('select[name="select_kedudukan"] option:selected').text());
    });
    //end data keudukan pegawai ============================

    //start data provinsi lahir dan tempat tinggal ============================

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
        $('select[name="select_prov_lhr"]').append(html);
        $('select[name="select_prov"]').append(html);
      }
    });


    $('select[name="select_prov_lhr"]').change(function() {
      $('input[name="kode_prov_lhr"]').val($(this).val());
      $('input[name="nama_prov_lhr"]').val($('select[name="select_prov_lhr"] option:selected').text());
      get_kabupaten('select[name="select_kab_kota_lhr"]', $('input[name="kode_prov_lhr"]').val());
      $('select[name="select_kec_lhr"],select[name="select_desa_lhr"]').empty().append('<option></option>').val(null).trigger('change');
    });

    $('select[name="select_prov"]').change(function() {
      $('input[name="kode_prov"]').val($(this).val());
      $('input[name="nama_prov"]').val($('select[name="select_prov"] option:selected').text());
      get_kabupaten('select[name="select_kab_kota"]', $('input[name="kode_prov"]').val());
      $('select[name="select_kec"],select[name="select_desa"]').empty().append('<option></option>').val(null).trigger('change');
    });
    //end data provinsi lahir dan tempat tinggal ============================


    //start data kabupaten lahir dan tempat tinggal============================
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

    $('select[name="select_kab_kota_lhr"]').change(function() {
      $('input[name="kode_kab_kota_lhr"]').val($(this).val());
      $('input[name="nama_kab_kota_lhr"]').val($('select[name="select_kab_kota_lhr"] option:selected').text());
      get_kecamatan('select[name="select_kec_lhr"]', $('input[name="kode_prov_lhr"]').val(), $('input[name="kode_kab_kota_lhr"]').val());
      $('select[name="select_desa_lhr"]').empty().append('<option></option>').val(null).trigger('change');
    });

    $('select[name="select_kab_kota"]').change(function() {
      $('input[name="kode_kab_kota"]').val($(this).val());
      $('input[name="nama_kab_kota"]').val($('select[name="select_kab_kota"] option:selected').text());
      get_kecamatan('select[name="select_kec"]', $('input[name="kode_prov"]').val(), $('input[name="kode_kab_kota"]').val())
      $('select[name="select_desa"]').empty().append('<option></option>').val(null).trigger('change');
    });
    //end data kabupaten lahir dan tempat tinggal ============================

    //start data kecamatan lahir dan tempat tinggal============================
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

    $('select[name="select_kec_lhr"]').change(function() {
      $('input[name="kode_kec_lhr"]').val($(this).val());
      $('input[name="nama_kec_lhr"]').val($('select[name="select_kec_lhr"] option:selected').text());
      var idprov_idkab_idkec = $('input[name="kode_prov_lhr"]').val() + $('input[name="kode_kab_kota_lhr"]').val() + $('input[name="kode_kec_lhr"]').val();
      get_desa('select[name="select_desa_lhr"]', idprov_idkab_idkec)
    });

    $('select[name="select_kec"]').change(function() {
      $('input[name="kode_kec"]').val($(this).val());
      $('input[name="nama_kec"]').val($('select[name="select_kec"] option:selected').text());
      var idprov_idkab_idkec = $('input[name="kode_prov"]').val() + $('input[name="kode_kab_kota"]').val() + $('input[name="kode_kec"]').val();
      get_desa('select[name="select_desa"]', idprov_idkab_idkec)
    });
    //end data kecamatan lahir dan tempat tinggal ============================

    //start data desa lahir ============================
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

    $('select[name="select_desa"]').change(function() {
      $('input[name="kode_desa"]').val($(this).val());
      $('input[name="nama_desa"]').val($('select[name="select_desa"] option:selected').text());
    });

    $('select[name="select_desa_lhr"]').change(function() {
      $('input[name="kode_desa_lhr"]').val($(this).val());
      $('input[name="nama_desa_lhr"]').val($('select[name="select_desa_lhr"] option:selected').text());
    });
    //end data desa lahir ============================


    // ====================================================================================================================================================================
    // ====================================================================================================================================================================
    // ====================================================================================================================================================================

    $('#form-input').prop('action', '<?= site_url('identitas_pegawai/insert') ?>')

    $('input[name="bapertarum"]').change(function() {
      val = this.value
      if (val == 1) {
        $('input[name="tgl_bapertarum"]').attr('readonly', false);
        $('input[name="jumlah_bapertarum"]').attr('readonly', false);
      } else {
        $('input[name="tgl_bapertarum"]').val("").attr('readonly', true);
        $('input[name="jumlah_bapertarum"]').val("").attr('readonly', true);
      }
    });

    $('#tambah-baru').click(function() {
      $('#loader').show();
      $.ajax({
        type: 'GET',
        url: "<?= site_url('Master/unset_nip') ?>",
        dataType: "Json",
        success(r) {
          location.reload();
        },
        error(e) {
          $('#loader').hide();
          swal('Status', 'Error', 'warning')
        }
      });
    });

    function unset_nip() {
      $.ajax({
        type: 'GET',
        url: "<?= site_url('Master/unset_nip') ?>",
        dataType: "Json",
        success(r) {
          console.log('berhasil unset')
        },
        error(e) {
          $('#loader').hide();
          swal('Status', 'Error', 'warning')
        }
      });
    }

    // $.validator.setDefaults({
    //   submitHandler: function() {
    //     alert("Form successful submitted!");
    //   }
    // });



    const config_valid = {
      rules: {
        nama: {
          required: true,
        },
        tangggal_lahir: {
          required: true,
        },
        tempat_lahir: {
          required: true,
        },
        ktp: {
          required: true,
        },
        nip: {
          required: true,
          exactlength: 18
        },
        email: {
          email: true
        }
      },
      messages: {
        nama: {
          required: "Nama Harus diisi"
        },
        tangggal_lahir: {
          required: "Tanggal Lahir Harus diisi"
        },
        ktp: {
          required: "No KTP Lahir Harus diisi"
        },
        tempat_lahir: {
          required: "Tanggal Lahir Harus diisi"
        },
        nip: {
          required: "Nip Harus diisi",
        },
        email: {
          email: "Email Tidak Valid",
        }
      }

    }

    valid(config_valid)

    $('#proses-simpan').click(function() {
      $('#loader').show();
      if ($("#form-input").valid()) {
        $.ajax({
          type: $('#form-input').prop('method'),
          url: $('#form-input').prop('action'),
          data: $('#form-input').serialize(),
          success(r) {
            console.log(r)
            location.reload();
            swal('Status', 'Berhasil', 'success')
            $('#loader').hide();
          },
          error(e) {
            $('#loader').hide();
            swal('Status', 'Gagal Disimpan', 'warning')
            location.reload();
          }
        });

      } else {
        swal('Status', 'Form Harus Dilengkapi', 'warning')
        $('#loader').hide();
      }
    });



    //nampilkan data
    if (nip) {
      ajax(function data_ajax(data) {

        $('#form-input').prop('action', '<?= site_url('identitas_pegawai/update') ?>')
        $('input[name="nip"]').prop('readonly', true);
        $('input[name="no_urut"]').val(data.nourut);
        $('select[name="select_lemari"]').val(data.klemari).trigger('change');
        $('select[name="select_lantai"]').val(data.klantai).trigger('change');
        $((data.kpotret == 1) ? "#sudah_kpe" : "#belum_kpe").prop("checked", true);
        $((data.kpupns == 1) ? "#sudah_pendataan" : "#belum_pendataan").prop("checked", true);
        $('input[name="kode_register"]').val(data.register);
        $('#nip2').val(data.iden);
        $('input[name="nama"]').val(data.NAMA);
        $('input[name="gelar_depan"]').val(data.GLDEPAN);
        $('input[name="gelar_belakang"]').val(data.GLBELAKANG);

        if (data.npelajaran) {
          var napel = data.npelajaran.toUpperCase()
        } else {
          var napel = data.npelajaran
        }
        $('select[name="select_mapel"]').val($('select[name="select_mapel"] option:contains("' + napel + '")').val()).trigger('change');
        $('input[name="tangggal_lahir"]').val(tanggal_null(data.TLAHIR));
        $('input[name="tempat_lahir"]').val(data.KTLAHIR);

        $('select[name="select_prov_lhr"]').val(data.ALKOPROP2).trigger('change');
        $('select[name="select_kab_kota_lhr"]').val(data.ALKOKAB2).trigger('change');
        $('select[name="select_kec_lhr"]').val(data.ALKOKEC2).trigger('change');
        $('select[name="select_desa_lhr"]').val(data.ALKODES2).trigger('change');

        $('input[name="no_akte"]').val(data.NAKTE);
        $((data.KJKEL == 1) ? "#laki-laki" : (data.KJKEL == 2 ? "#perempuan" : '')).prop("checked", true);
        $('select[name="select_agama"]').val(data.KAGAMA).trigger('change');
        $('select[name="select_status"]').val(data.KSTATUS).trigger('change');
        $('select[name="select_jenis"]').val(data.KJPEG).trigger('change');
        $('select[name="select_kedudukan"]').val(data.KDUDUK).trigger('change');
        $((data.KSKAWIN == 1) ? "#kawin" : (data.KSKAWIN == 2 ? "#belum_kawin" : (data.KSKAWIN == 3 ? "#janda_duda" : ''))).prop("checked", true);
        $('input[name="sukubangsa"]').val(data.SUKU_BANGSA);
        $('input[name="marga"]').val(data.MARGA);
        $((data.KGOLDAR == 1) ? "#goldar_a" : (data.KGOLDAR == 2 ? "#goldar_b" : (data.KGOLDAR == 3 ? "#goldar_ab" : (data.KGOLDAR == 4 ? "#goldar_o" : '')))).prop("checked", true);
        $('textarea[name="alamat"]').val(data.ALJALAN);
        $('input[name="rt"]').val(data.ALRT);
        $('input[name="rw"]').val(data.ALRW);
        $('input[name="altelp"]').val(data.ALTELP);
        $('input[name="no_wa"]').val(data.ALTELP);

        $('select[name="select_prov"]').val(data.ALKOPROP).trigger('change');
        $('select[name="select_kab_kota"]').val(data.ALKOKAB).trigger('change');
        $('select[name="select_kec"]').val(data.ALKOKEC).trigger('change');
        $('select[name="select_desa"]').val(data.ALKODES).trigger('change');


        $('input[name="kode_pos"]').val(data.KPOS);
        $('input[name="email"]').val(data.EMAIL);
        $('input[name="no_karpeg"]').val(data.NKARPEG + ((data.NKARIS_SU) ? ' / ' + data.NKARIS_SU : ''));
        $('input[name="no_askes"]').val(data.NASKES);
        $('input[name="no_taspen"]').val(data.NTASPEN);
        $('input[name="no_kartu_suami_istri"]').val(data.NKARIS_SU);
        $('input[name="npwp"]').val(data.NPWP);
        $('input[name="ktp"]').val(data.NOPEN);
        $((data.BAPERTARUM == 1) ? "#bapertarum_sudah" : "#bapertarum_belum").prop("checked", true).trigger('change');
        $('input[name="tgl_bapertarum"]').val(tanggal_null(data.TGL_BAPERTARUM));
        $('input[name="jumlah_bapertarum"]').val(data.JUMLAH_YANG_DITERIMA_DR_BAPERTARUM);
      }, "<?= site_url('Identitas_pegawai/get_data'); ?>")

    }

    //fungsi cek nip
    $('input[name="nip"]').keyup(function(e) {
      if ($('input[name="nip"]').val().length == 18) {
        var nip_baru = $('input[name="nip"]').val();

        $.ajax({
          type: 'GET',
          url: "<?= site_url('Identitas_pegawai/cek_nip') ?>",
          data: {
            nip_baru: nip_baru
          },
          dataType: 'json',
          success(r) {

            if (r.status == 'berhasil') {
              Swal.fire({
                title: 'NIP Sudah Terdaftar !',
                showDenyButton: true,
                confirmButtonText: `Lihat`,
                denyButtonText: `Batal`,
                icon: 'warning'
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire('Berhasil!', '', 'success')
                  location.reload()
                } else if (result.isDenied) {
                  $('input[name="nip"]').val('')
                  unset_nip()
                }
              })
            } else {
              $('input[name="nip"]').addClass('is-valid');
            }
            $('#loader').hide();
          },
          error(e) {
            $('#loader').hide();
            swal('Status', 'Error', 'warning')
          }
        });
      }
    });

    $('input[name="nip"],input[name="ktp"]').inputFilter(function(value) {
      return /^-?\d*[.,]?\d*$/.test(value);
    });



  });
</script>