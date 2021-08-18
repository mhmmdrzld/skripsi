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
                                            <a class="dropdown-item" tabindex="-1" href="#" id="menu_tambah"><span class="fa fa-plus"></span> Tambah Pengguna Baru</a>
                                            <a class="dropdown-item" tabindex="-1" href="#" id="menu_cari"><span class="fa fa-search"></span> Cari Pengguna</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" tabindex="-1" href="#" id="aksi_simpan"><span class="fa fa-save"></span> Simpan</a>
                                            <a class="dropdown-item" tabindex="-1" href="#" id="aksi_update"><span class="fa fa-save"></span> Simpan</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" tabindex="-1" href="#" id="aksi_hapus"><span class="fa fa-trash"></span> Hapus</a>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                        <div class="card-body" style="height:1000px;overflow: auto;">
                            <form class="form-horizontal" id="form">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Pengguna :</label>

                                        <div class="col-sm-3" id="cari">
                                            <select class="form-control select2" name="id_user" id="user_list" autofocus>
                                                <option></option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3" id="tambah">
                                            <input type="text" onkeyup="username.value = username.value.toUpperCase();" name="username" class="form-control form-control-sm" autofocus>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="tambah_password">
                                        <label class="col-sm-3 col-form-label">Kata Sandi :</label>
                                        <div class="col-sm-3" id="tambah">
                                            <input type="text" onkeyup="password.value = password.value.toUpperCase();" name="password" class="form-control form-control-sm">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Menu :</label>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="centang_semua">
                                            <label for="centang_semua" class="custom-control-label">Semua</label>
                                            <?= $list_menu ?>
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

        $('#tambah').hide(); //kolom tambah username 
        $('#tambah_password').hide(); //kolom tambah passwrod
        $("#menu_cari").hide(); //menu tambah
        $("#aksi_simpan").hide(); //aksi tambah

        $.ajax({
            type: "GET",
            url: "<?php echo site_url('users/get_user') ?>",
            dataType: "json",
            success: function(data) {
                if (data) {
                    for (i = 0; i < data.length; i++) {
                        $str = '<option value="' + data[i]['id'] + '">' + data[i]['USERNAME'] + '</option>';
                        $('#user_list').append($str);
                    }
                }
            }
        });

        $('#user_list').change(function() {
            var id = this.value;
            $.ajax({
                type: "POST",
                url: "<?= base_url('users/get_menu_id_by_iduser') ?>/" + id,
                dataType: "json",
                success: function(data) {
                    if (data != '') {
                        $("input:checkbox").prop('checked', false);
                        $("#centang_semua").prop('checked', false);
                        for (i = 0; i < data.length; i++) {
                            $('#chk' + data[i]).prop('checked', true);
                        }
                    } else {
                        $("input:checkbox").prop('checked', false);
                        $("#centang_semua").prop('checked', false);
                    }
                }
            });
        });

        $('#centang_semua').change(function() {
            if ($(this).prop("checked") == true) {
                $("input:checkbox").prop('checked', true);
            } else {
                $("input:checkbox").prop('checked', false);
            }

        });

        $("input:checkbox").click(function() {
            var id = this.value;
            centang_menu_anak(id);
            centang_menu_parent(id);
        });

        function centang_menu_anak(id) {

            $.ajax({
                type: "POST",
                url: "<?= base_url('users/get_all_menu') ?>/",
                dataType: "json",
                success: function(data) {
                    if (data) {
                        for (i = 0; i < data.length; i++) {
                            if (id == data[i]['parent_id']) {
                                console.clear();
                                if ($('#chk' + id).prop("checked") == true) {
                                    $('#chk' + data[i]['id']).prop('checked', true);
                                    console.log('centang semua anak');
                                } else {
                                    $('#chk' + data[i]['id']).prop('checked', false);
                                    console.log('uncentang semua anak');
                                }

                                centang_menu_anak(data[i]['id']);

                            }
                        }
                    }
                }
            });

        }

        function centang_menu_parent(id) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('users/get_all_menu') ?>/" + id,
                dataType: "json",
                success: function(data) {
                    if (data) {
                        for (i = 0; i < data.length; i++) {
                            if (data[i]['parent_id'] != 0) {
                                $('#chk' + data[i]['parent_id']).prop('checked', true);
                                console.log('centang menu parent');
                                centang_menu_parent(data[i]['parent_id']);
                            }

                        }

                    }
                }
            });

        }

        $("#menu_tambah").click(function() {
            $("#tambah").show();
            $("#tambah_password").show();
            $("#menu_tambah").hide();
            $("#cari").hide();
            $("#menu_cari").show();
            $("#aksi_simpan").show();
            $("#aksi_update").hide();
            $("#aksi_hapus").hide();
            $("input:checkbox").prop('checked', false);
        });

        $("#menu_cari").click(function() {
            $("#cari").show();
            $("#menu_cari").hide();
            $("#tambah").hide();
            $("#tambah_password").hide();
            $("#menu_tambah").show();
            $("#aksi_hapus").show();
            $("#aksi_simpan").hide();
            $("#aksi_update").show();
            $("input:checkbox").prop('checked', false);
        });

        $('#aksi_simpan').click(function() {


            if (!$('input[name="username"]').val() && !$('input[name="password"]').val()) {
                $('input[name="password"]').addClass("is-invalid");
                $('input[name="username"]').addClass("is-invalid");
                return false;

            }

            if (!$('input[name="username"]').val()) {
                $('input[name="username"]').addClass("is-invalid");
                return false;
            } else {
                $('input[name="username"]').removeClass("is-invalid");
            }


            if (!$('input[name="password"]').val()) {
                $('input[name="password"]').addClass("is-invalid");
                return false;

            } else {
                $('input[name="password"]').removeClass("is-invalid");
            }

            $.ajax({
                url: "<?= site_url('users/insert/insert') ?>",
                type: 'POST',
                // dataType: 'json',
                data: $('form#form').serialize(),
                success: function(data) {
                    location.reload();
                }
            });
        });

        $('#aksi_update').click(function() {
            if ($("#user_list").val() != 0) {
                $.ajax({
                    url: "<?= site_url('users/insert/update') ?>",
                    type: 'POST',
                    data: $('form#form').serialize(),
                    success: function(data) {
                        location.reload();
                    }
                });
            }
        });

    });
</script>