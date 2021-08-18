<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SIMPEG - BKPSDM</title>
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/> -->
    <link href="<?= base_url() ?>dist/login/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url() ?>dist/login/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>dist/login/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>dist/login/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>dist/login/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/login/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/login/assets/css/forms/switches.css">
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?= base_url() ?>dist/login/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>dist/login/assets/css/components/custom-carousel.css" rel="stylesheet" type="text/css" />
    <!-- select 2 js -->
    <script src="<?= base_url() ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- sweetaelt 2 js -->
    <script src="<?= base_url() ?>plugins/sweetalert2/sweetalert2.all.js"></script>
    <style>
        #outer-div {
            position: relative;
            background-color: #060818;
        }

        #inner-div {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>
</head>

<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Selamat Datang di <a href="<?= site_url() ?>"><span class="brand-name">SIMPEG</span></a></h1>
                        <form class="text-left" action="<?= site_url('login/proses_login') ?>" method="post">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="text" onkeyup="username.value = username.value.toUpperCase();" class="form-control" placeholder="Nama Pengguna" autofocus>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" onkeyup="password.value = password.value.toUpperCase();" class="form-control" placeholder="Kata Sandi">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Lihat Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>

                                </div>

                                <!-- <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div> -->

                                <!-- <div class="field-wrapper">
                                    <a href="auth_pass_recovery.html" class="forgot-pass-link">Forgot Password?</a>
                                </div> -->

                            </div>
                        </form>
                        <p class="terms-conditions">© 2021 All Rights Reserved. Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kabupaten Tanah Laut (<a href="<?= site_url(); ?>">BKPSDM</a>).
                            <!-- <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image" id="outer-div">
            <!-- <div class="l-image"> -->

            <!-- <div class="row mb-5">a</div> -->
            <!-- <div class="row" style="border: 1px solid black;"> -->

            <div class="container" style="max-width: 928px;" style="border: 1px solid red;" id="inner-div">
                <!-- <div class="row" style="border: 1px solid red;"> -->
                <!-- <div class="row">c</div> -->
                <!-- <div class="row">
                  
                </div> -->

                <!-- <div class="col-lg-12 col-md-12" style="border: 1px solid black; "> -->
                <div id="style1" class="carousel slide style-custom-1" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#style1" data-slide-to="0" class="active"></li>
                        <li data-target="#style1" data-slide-to="1"></li>
                        <li data-target="#style1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 slide-image" src="<?= base_url() ?>dist/img/simpeg-slide.jpg" alt="First slide">
                            <div class="carousel-caption">
                                <!-- <span class="badge">Sistem Informasi Manajemen Kepegawaian</span> -->
                                <!-- <h3>SIMPEG</h3> -->
                                <div class="media">
                                    <!-- <img src="<?= base_url() ?>dist/login/assets/img/90x90.jpg" class="" alt="avatar"> -->
                                    <div class="media-body">
                                        <!-- <h6 class="user-name">User name</h6>
                                        <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg> May, 14 2019</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 slide-image" src="<?= base_url() ?>dist/img/bkpsdm-slide.jpg" alt="Second slide">
                            <div class="carousel-caption">
                                <!-- <span class="badge">BKPSDM Kab. Tanah Laut</span> -->
                                <!-- <h3>BKPSDM</h3> -->
                                <div class="media">
                                    <!-- <img src="<?= base_url() ?>dist/login/assets/img/90x90.jpg" class="" alt="avatar"> -->
                                    <div class="media-body">
                                        <!-- <h6 class="user-name">User name</h6>
                                        <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg> May, 14 2019</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 slide-image" src="<?= base_url() ?>dist/img/tala-slide.jpg" alt="Third slide">
                            <div class="carousel-caption">
                                <!-- <span class="badge">Tanah Laut</span> -->
                                <!-- <h3>Tanah Laut</h3> -->
                                <div class="media">
                                    <!-- <img src="<?= base_url() ?>dist/login/assets/img/90x90.jpg" class="" alt="avatar"> -->
                                    <div class="media-body">
                                        <!-- <h6 class="user-name">User name</h6>
                                        <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg> May, 14 2019</p>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#style1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#style1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="row">a</div> -->
                    <!-- </div> -->
                </div>
                <!-- </div> -->
                <!-- <div class="row mt-5">c</div> -->

                <!-- </div> -->
                <!-- </div> -->

            </div>


            <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
            <!-- jQuery -->
            <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
            <script src="<?= base_url() ?>dist/login/bootstrap/js/popper.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- END GLOBAL MANDATORY SCRIPTS -->
            <script src="<?= base_url() ?>dist/login/assets/js/authentication/form-1.js"></script>

            <script src="<?= base_url() ?>dist/login/assets/js/scrollspyNav.js"></script>
            <script>
                var loaderElement = document.querySelector('#load_screen');
                setTimeout(function() {
                    loaderElement.style.display = "none";
                }, 14000);

                <?php
                $status = $this->session->flashdata('alert');
                if ($status) : ?>

                    Swal.fire({
                        title: 'Status',
                        text: '<?= $status['message'] ?>',
                        icon: '<?= $status['type'] ?>',
                        showConfirmButton: false,
                        timer: 1500

                    })
                <?php endif; ?>
            </script>
</body>

</html>