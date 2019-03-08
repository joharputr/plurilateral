<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Folarium Technomedia">
        <link rel="icon" href="<?php echo base_url(!empty($sess['apps']->apps_fav) ? (file_exists($sess['apps']->apps_fav) ? $sess['apps']->apps_fav : "assets/fav.jpg") : "assets/fav.jpg"); ?>?" type="image/png">
        <title><?php echo $title ?></title>
        <link href="<?php echo base_url() ?>dist/css/style.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>backup-assets/assets-b1/confirm/sweetalert.css">
        <script src="<?php echo base_url() ?>backup-assets/assets-b1/confirm/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>backup-assets/assets-b1/js/jquery-1.11.1.min.js"></script>
        <style>
            body{
                background-image: url('<?php echo base_url(!empty($sess['apps']->apps_bg) ? (file_exists($sess['apps']->apps_bg) ? $sess['apps']->apps_bg : "assets/bg.jpg") : "assets/bg.jpg"); ?>');
                background-repeat: no-repeat;
                background-position: center ;
                background-attachment: fixed;
                background-size: cover;
                height: 100%;
                width: auto;
            }
            @-webkit-keyframes Gradient {
                0% {
                    background-position: 0% 50%
                }
                50% {
                    background-position: 100% 50%
                }
                100% {
                    background-position: 0% 50%
                }
            }

            @-moz-keyframes Gradient {
                0% {
                    background-position: 0% 50%
                }
                50% {
                    background-position: 100% 50%
                }
                100% {
                    background-position: 0% 50%
                }
            }

            @keyframes Gradient {
                0% {
                    background-position: 0% 50%
                }
                50% {
                    background-position: 100% 50%
                }
                100% {
                    background-position: 0% 50%
                }
            }

            .overlay-page-wrapper--animation
            {
                background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
                background-size: 400% 400%;
                opacity: .8;
                -webkit-animation: Gradient 15s ease infinite;
                -moz-animation: Gradient 15s ease infinite;
                animation: Gradient 15s ease infinite;
                z-index: 3;
                position: absolute;
                height: 100%;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="overlay-page-wrapper--animation"></div>
        <div style="position:absolute;z-index: 4; width: 100%; height: 100vh; overflow: none; display: flex; justify-content: center; align-items: center; background-color: rgba(0,0,0,.5);">
            <div id="main-wrapper" style="box-shadow: 0px 0px 0px 0px !important;">


                <div class="page-wrapper" style="background: none">

                    <div class="container-fluid">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card" style="border-radius: 5px; height: 590px">
                                    <div class="card-body">
                                        <center class="m-t-10"> <img src="<?php echo base_url(!empty(@$sess['emp']->users_photo) ? @$sess['emp']->users_photo : "assets/nonuser.png") ?>" class="rounded-circle" width="150" />
                                            <h4 class="card-title m-t-10"><?php echo ucwords($sess['emp']->users_fullname); ?></h4>
                                            <h6 class="card-subtitle"><b>Roles : </b><span class="label label-sm bg-info">Superadmin</span></h6>
                                        </center>
                                        <hr style="margin:30px 0px 20px 0px; padding:0px">
                                        <small class="text-muted">Email </small>
                                        <h6><?php echo!empty($sess['emp']->users_mail) ? $sess['emp']->users_mail : "-"; ?></h6> 
                                        <small class="text-muted p-t-30 db">Ponsel</small>
                                        <h6><?php echo!empty($sess['emp']->users_telephone) ? $sess['emp']->users_telephone : "-"; ?></h6> 
                                        <small class="text-muted p-t-30 db">Alamat</small>
                                        <h6>-</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                                                <h6><?php echo!empty($sess['emp']->users_gender) ? $sess['emp']->users_gender : "-"; ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <small class="text-muted p-t-30 db">Umur</small>
                                                <h6><?php echo!empty($sess['emp']->users_gender) ? $sess['emp']->users_gender : "-"; ?> <sup>Th</sup></h6>
                                            </div>
                                        </div>
                                        <small class="text-muted p-t-30 db">No. NPWP</small>
                                        <h6><?php echo!empty($sess['emp']->users_npwp) ? $sess['emp']->users_npwp : "-"; ?></h6> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="row m-b-15">
                                    <div class="col-sm-1">
                                        <img src="<?php echo base_url(!empty($sess['apps']->apps_logo) ? (file_exists($sess['apps']->apps_logo) ? $sess['apps']->apps_logo : "assets/fav.png") : "assets/fav.png"); ?>?" style="width: 130%"/>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3 class="text-white"><?php echo "Welcome to " . $sess['apps']->apps_name ?></h3>
                                        <hr style="margin: 0px; padding: 0px; border-bottom: 1px solid white; width: 90%"/>
                                        <small class="text-white">Silahkan pilih perusahaan yang akan anda kelola</small>
                                    </div>
                                    <div class="col-sm-3 text-right">
                                        <a class="btn btn-sm btn-info text-white"  href="<?php echo base_url("my-portal") ?>" style="cursor: pointer; border-radius: 5px"><i class="fas fa-podcast m-r-5 m-l-5"></i> Profil</a>
                                        <a class="logout btn btn-sm btn-light"  role="button" style="cursor: pointer; border-radius: 5px"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 5px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-11 m-b-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon11"><i class="fas fa-search"></i></span>
                                                    </div>
                                                    <input type="text" name='sortir_name' id="sort-ahass" onkeyup="sort_page()" value="" class="form-control" placeholder="Cari perusahaan . . ." />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 scrollable" style="height: 418px">
                                                <div class="row">
                                                    <?php foreach ($company as $c_nom => $c_row) { ?>
                                                        <div class="col-lg-4 mg-b-10 <?php echo $c_row->comp_url ?>" id="sort-forbiz-<?php echo $c_nom + 1 ?>">
                                                            <div class="forbiz-available" id ="ada-<?php echo $c_nom + 1 ?>">
                                                                <a href="<?php echo base_url() ?>home/<?php echo $c_row->comp_url ?>" class="text-white">
                                                                    <div class="card" style="border-radius: 5px; height: 180px">
                                                                        <div class="card-body text-center p-b-0 bg-dark p-r-5 p-l-5">
                                                                            <i class="<?php echo $c_row->shape_icon ?>" style="font-size: 40px"></i>
                                                                            <br/>
                                                                            <h6 class="card-title m-t-15"><?php echo $c_row->comp_name ?>
                                                                                <hr class="p-0 m-t-5 m-b-5 bg-white"/>
                                                                                <small> <?php echo $c_row->shape_name ?></small>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer text-center text-white">
                        <?php echo date('Y') ?> &copy PT. Multi Phi Beta. All Rights Reserved<br/> Powered by 
                        <a href="https://www.folarium.co.id" target="_blank" style="color: white">Folarium</a>.
                    </footer>
                </div>
            </div>
        </div>
        <script> var baseUrl = '<?php echo base_url(); ?>';
            function sort_page() {
                var selected = $("input[name=sortir_name]").val().replace(" ", "-");
                var rowx = $('.forbiz-available').length;
                var rowx_ = 0;

                for (var axa = 1; axa <= rowx; axa++) {
                    var forbiz = $("#sort-forbiz-" + axa).attr("class");
                    $("#ada-" + axa).removeAttr("class", "forbiz-available");
                    $("#ada-" + axa).attr("class", "forbiz-available ada");

                    if (forbiz.indexOf(selected) > -1) {
                        $("#sort-forbiz-" + axa).show();
                        rowx_ = $('.ada').length;
                    } else {
                        if (selected.length > 0) {
                            $("#ada-" + axa).removeAttr("class", "forbiz-available ada");
                            $("#ada-" + axa).attr("class", "forbiz-available");
                            $("#sort-forbiz-" + axa).hide();
                        }
                    }

                    $("#notif-ahass").html(rowx_);
                }
            }
        </script>
        <script src="<?php echo base_url() ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>backup-assets/assets-b1/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?php echo base_url() ?>backup-assets/assets-b1/dist/js/sweetalert-data.js"></script>
        <script src="<?php echo base_url() ?>dist/js/app.min.js"></script>
        <script src="<?php echo base_url() ?>dist/js/app.init.overlay.js"></script>
        <script src="<?php echo base_url() ?>dist/js/app-style-switcher.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/extra-libs/sparkline/sparkline.js"></script>
        <script src="<?php echo base_url() ?>dist/js/custom.min.js"></script>
        <script src="<?php echo base_url() ?>backup-assets/assets-b1/folarium/for.library.min.js"></script>
    </body>
</html>