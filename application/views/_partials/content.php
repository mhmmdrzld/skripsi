<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>


<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("_partials/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> <?= $title ?></h1>
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-6">
                            <?php $this->load->view('_partials/breadcrumb') ?>
                        </div>

                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
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
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php $this->load->view("_partials/footer.php") ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>