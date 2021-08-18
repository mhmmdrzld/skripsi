<div class="col-lg-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Menu Pencarian</h5>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" id="form-cari">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIP :</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nip_cari" class="form-control form-control-sm" onkeyup="nip_cari.value = nip_cari.value.trim();">
                                </div>
                                <!-- <div class="col-sm-5">
                                    <select class="form-control form-control-sm select2 nip-cari" id="nip_cari" name="nip_cari">
                                        <option>ttes <br>tes</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NAMA :</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nama_cari" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align" id="btn-cari">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                                <!-- <div class="col-sm-3">
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align">
                                        <i class="fa fa-plus"></i> Tambah
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                $status = $this->session->userdata('nip');
                if ($status) :

                ?>
                    <div class="col-md-2">
                        <div class="form-group text-center" id="get_img">
                            <!-- <img src="<?= base_url() ?>dist/img/default.jpg" alt="foto" width="200" height="200"> -->
                        </div>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="40%">Nama</td>
                                        <td width="5%">:</td>
                                        <td width="60%" id="get_nama"></td>
                                    </tr>
                                    <tr>
                                        <td>NIP</td>
                                        <td>:</td>
                                        <td id="get_nip"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td id="get_tlahir"></td>
                                    </tr>
                                    <tr>
                                        <td>Status Kepegawaian</td>
                                        <td>:</td>
                                        <td id="get_statpeg"></td>
                                    </tr>
                                    <tr>
                                        <td>Pangkat Akhir</td>
                                        <td>:</td>
                                        <td id="get_golruang"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">

                                            <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align" data-toggle="modal" data-target="#modal-default">
                                                <i class="fa fa-info-circle"></i> Data Detail
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align" data-toggle="modal" data-target="#modal-default">
                                                <i class="fa fa-user"></i> Biodata
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div> -->

    </div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="overlay" id="modaloverlay">
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div>
            <div class="modal-header">
                <h4 class="modal-title">Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="tabel-pegawai" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th width="50%">FOTO</th>
                            <th width="50%">NAMA / NIP</th>
                            <th width="60%">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $(document).ready(function() {
        $('#nama').append('[&nbsp;&nbsp;]');

        nip = '<?= $this->session->userdata('nip') ?>';
        if (nip) {
            $.ajax({
                url: "<?php echo site_url('Master/get_cari_pegawai'); ?>",
                method: "GET",
                async: true,
                data: {
                    id: nip
                },
                dataType: 'json',
                success: function(data) {
                    $('#get_img').empty().append('<img src="' + (!data.PHOTO ? "<?= base_url() ?>dist/img/default.jpg" : "data:image/png;base64," +
                        data.PHOTO) + '" alt="foto" width="150" height="200">');

                    $('#get_nama').empty().text(data.NAMA);
                    $('#get_nip').empty().text(data.nip);
                    $('#get_tlahir').empty().text(data.TLAHIR);
                    $('#get_statpeg').empty().text(data.NSTATUS);
                    $('#get_golruang').empty().text(data.PANGKAT);

                    $('input[name="nip"]').val(data.nip);
                    $('#nama').empty().append('[&nbsp;' + data.NAMA + '&nbsp;]');


                }
            });
        }
    });
    //start data hasil cari pegawai ============================

    //end data hasil cari pegawai ======================

    function cari_pegawai() {

        $.ajax({
            url: "<?= site_url('Master/cari_pegawai') ?>",
            type: 'GET',
            dataType: 'json',
            async: false,
            data: $('form#form-cari').serialize(),
            success: function(r) {
                if (r.status != 'modal') {
                    location.reload();
                } else {
                    $('#modal-default').modal('show');
                    $('#modaloverlay').show();
                    table = $('#tabel-pegawai').DataTable({
                        "lengthMenu": [
                            [5, 10, 25, 100],
                            [5, 10, 25, 100]
                        ],
                        "responsive": true,
                        "language": {
                            "url": "<?= base_url() ?>plugins/Indonesian-Alternative.json"
                        },
                        'processing': true,
                        'serverSide': true,
                        'serverMethod': 'post',
                        'bDestroy': true,
                        'ajax': {
                            'url': '<?= base_url() ?>Master/get_tabel_pegawai',
                            'data': {
                                ket: r.data
                            }
                        },
                        'columns': [{
                                data: 'photo',
                                render: function(data, type, row) {
                                    return '<img src="' + (!data ? "<?= base_url() ?>dist/img/default.jpg" : "data:image/png;base64," +
                                        data) + '" width="70" height="85">';
                                }
                            }, {
                                data: 'nip',
                                render: function(data, type, row) {
                                    return '<b>' + (!row.gldepan ? '' : row.gldepan) + row.nama + (!row.glbelakang ? '' : row.glbelakang) + '</b> [' + row.nip + ']';
                                }
                            },
                            {
                                data: 'ket'
                            }
                        ]
                    });
                    $('#modaloverlay').hide();
                }
            }
        });
    }

    $('input[name="nama_cari"],input[name="nip_cari"]').keypress(function(e) {
        if (e.which == 13) {
            cari_pegawai()
            return false;
        }
    });

    $("#btn-cari").click(function() {
        cari_pegawai()
    });

    $('#tabel-pegawai').on('click', 'tr>td', function() {
        console.clear(); //clear console
        var id = table.row(this).data();
        console.log(id.nip);
        $.ajax({
            type: 'GET',
            url: "<?= site_url('Master/cari_pegawai') ?>",
            data: {
                nip_cari: id.nip
            },
            dataType: "Json",
            success(r) {
                location.reload();
            },
            error(e) {
                console.log('error')
            }

        });
    });
</script>