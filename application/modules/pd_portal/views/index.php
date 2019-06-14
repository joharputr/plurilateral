<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Folarium Technomedia">
    <title>Portal</title>
    <link href="<?php echo base_url() ?>assets/css/style_min/style.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url() ?>assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>backup-assets/assets-b1/confirm/sweetalert.css">
        <script src="<?php echo base_url() ?>backup-assets/assets-b1/confirm/sweetalert.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <style>
        body {
            background-image: url('<?php echo base_url() ?>assets/image/event/batik_background.jpg');
            background-repeat: no-repeat;
            background-position: center;
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

        .overlay-page-wrapper--animation {
            background: linear-gradient(-45deg, #008296, #003c96);
            background-size: 400% 400%;
            opacity: .8;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 15s ease infinite;
            animation: Gradient 15s ease infinite;
            z-index: -1;
            position: absolute;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="overlay-page-wrapper--animation"></div>
    <div id="main-wrapper" style="box-shadow: 0px 0px 0px 0px !important;">
        <div class="page-wrapper" style="background: none">
            <div class="container-fluid">
                <div class="row m-b-15">
                    <div class="col-sm-1 m-b-15 p-b-15">
                        <img src="<?php echo base_url() ?>assets/image/event/Logo-Event.png" style="width: 100%" />
                    </div>
                    <div class="col-sm-8 m-b-15 p-b-15">
                        <h3 class="text-white">
                            Plurilateral Dialog
                        </h3>
                        <hr style="margin: 0px; padding: 0px; border-bottom: 1px solid white; width: 100%" />
                        <small class="text-white">Selamat Datang, Administrator !</small>
                    </div>
                    <div class="col-sm-3 text-right">
                        <a class="btn btn-sm btn-info text-white" href="<?php echo base_url("my-portal") ?>" style="cursor: pointer; border-radius: 5px"><i class="fas fa-podcast m-r-5 m-l-5"></i> Profil</a>
                        <a class="logout btn btn-sm btn-light" role="button" style="cursor: pointer; border-radius: 5px"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card bg-transparent no-card-border">
                        <div class="card-body p-t-0" id="display-home">
                            <?php
                            $this->load->view('modul');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // if (!empty($modal)) {
    //     $this->load->view("modal");
    // }
    ?>
    <script>
        setTimeout(function() {
            $(".ps-scrollbar-y").attr("style", "background-color:white");
        }, 1000);
        // function sort_page() {
        //     var selected = $("input[name=sortir_name]").val().replace(" ", "-");
        //     var rowx = $('.forbiz-available').length;
        //     var rowx_ = 0;

        //     for (var axa = 1; axa <= rowx; axa++) {
        //         var forbiz = $("#sort-forbiz-" + axa).attr("class");
        //         $("#ada-" + axa).removeAttr("class", "forbiz-available");
        //         $("#ada-" + axa).attr("class", "forbiz-available ada");

        //         if (forbiz.indexOf(selected) > -1) {
        //             $("#sort-forbiz-" + axa).show();
        //             rowx_ = $('.ada').length;
        //         } else {
        //             if (selected.length > 0) {
        //                 $("#ada-" + axa).removeAttr("class", "forbiz-available ada");
        //                 $("#ada-" + axa).attr("class", "forbiz-available");
        //                 $("#sort-forbiz-" + axa).hide();
        //             }
        //         }
        //         $("#notif-ahass").html(rowx_);
        //     }
        // }
    </script>
    <script>
        var baseUrl = '<?php echo base_url(); ?>';
    </script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>backup-assets/assets-b1/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- <script src="<?php echo base_url() ?>backup-assets/assets-b1/dist/js/sweetalert-data.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/apps/app.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/apps/app.init.overlay.js"></script>
    <script src="<?php echo base_url() ?>assets/js/apps/app-style-switcher.js"></script>
    <script src="<?php echo base_url() ?>assets/js/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sparkline/sparkline.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/folarium/js/core.folarbiz.js"></script> -->
</body>

</html>