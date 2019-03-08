<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url() ?>assets/img/Logo-Event.png" type="image/png">
        <title><?php echo $title ?></title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style_min/style.min.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <style>
            body{
                background-image: url('<?php echo base_url() ?>assets/img/batik_background.jpg');
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
                background: linear-gradient(-45deg, #23A6D5, #23D5AB);
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
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card" style="border-radius: 5px;">
                                    <div class="card-body">
                                        <center class="m-t-10"> 
                                            <img src="<?php echo base_url() ?>assets/img/Logo-Event.png" class="rounded-circle" width="150" />
                                            <h4 class="card-title m-t-10">Superusers<?php // echo ucwords($sess['emp']->users_fullname);  ?></h4>
                                            <h6 class="card-subtitle m-b-20">Administrator</h6><!--
                                            --></center>
                                        <div class="card bg-light" style="border-radius: 5px; margin-bottom: 0px">
                                            <div class="card-body text-center" style="height: 250px; padding-top: 40px">
                                                <small style="color: grey"><i class="fas fa-info-circle m-r-10"></i>Belum ada notifikasi !</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="row m-b-15">
                                    <div class="col-sm-1">
                                        <img src="<?php echo base_url() ?>assets/img/Logo-Event.png" style="width: 130%"/>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3 class="text-white">
                                            PLURILATERAL DIALOGUE
                                        </h3>
                                        <hr style="margin: 0px; padding: 0px; border-bottom: 1px solid white; width: 90%"/>
                                        <small class="text-white">Perbaharui password akses secara berkala !</small>
                                    </div>
                                    <div class="col-sm-3 text-right">
                                        <!--<a class="btn btn-sm btn-info text-white"  href="<?php // echo base_url("my-portal")  ?>" style="cursor: pointer; border-radius: 5px"><i class="fas fa-podcast m-r-5 m-l-5"></i> Profil</a>-->
                                        <a class="logout btn btn-sm btn-light"  role="button" style="cursor: pointer; border-radius: 5px"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="scrollable" style="height: 428px; ">
                                        <div id="loader-data"></div>
                                        <div class="card bg-transparent no-card-border">
                                            <div class="card-body p-t-0" id="display-home"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
//        if (!empty($modal)) {
//            $this->load->view("modal");
//        }
        ?>
        <script> var baseUrl = '<?php echo base_url(); ?>';</script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/apps/app.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/apps/app.init.overlay.js"></script>
        <script src="<?php echo base_url() ?>assets/js/apps/app-style-switcher.js"></script>
        <script src="<?php echo base_url() ?>assets/js/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/sparkline/sparkline.js"></script>
        <script src="<?php echo base_url() ?>assets/js/apps/custom.min.js"></script>
    </body>
</html>