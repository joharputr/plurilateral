<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author">
    <title>Portal Login Administrator</title>
    <link href="<?php echo base_url() ?>assets/image/event/Logo-Event.png" rel="shortcut icon" type="image/x-icon" />
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
    <!-- <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div> -->
    <div class="overlay-page-wrapper--animation"></div>
        <div id="main-wrapper" style="box-shadow: 0px 0px 0px 0px !important;">
            <div class="page-wrapper" style="background: none">
                <div class="container-fluid">

                    <div class="col-lg-5 col-xlg-3 col-md-5 mx-auto">
                        <div class="card" style="border-radius: 5px;">
                            <div class="card-body">
                                <center class="m-t-10">
                                    <img src="<?php echo base_url() ?>assets/image/event/Logo-Event.png" class="rounded-circle" width="150" />
                                    <h3 class="card-title m-t-10">Login Admin</h3>
                                </center>
                                <div class="card bg-light" style="border-radius: 5px; margin-bottom: 0px">
                                    <div class="card-body text-center" style="padding-top: 40px">
                                          <?php echo form_open('portal/login/do_login'); ?>
                                        <form>
                                            <div class="form-group">
                                                <label for="InputUsername">Username</label>
                                                <input type="username" class="form-control" name="nama" id="InputUsername" placeholder="Input Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="InputPassword">Password</label>
                                                <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Input Password">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check">
                                                <label class="form-check-label" for="check">Remember Password?</label>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-info w-100">Login</button>
                                        </form>
                                          <?php echo form_close(); ?>
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
    // if (!empty($modal)) {
    //     $this->load->view("modal");
    // }
    ?>
    <script>
        dsPlugin('modul');
        setTimeout(function() {
            $(".ps-scrollbar-y").attr("style", "background-color:white");
        }, 1000);

        function dsPlugin(x) {
            $("#loader-data").html('<div class="text-center m-t-30"><i class="fas fa-spin ti-reload m-r-10"></i>Proses menampilkan data . . .</div>');
            // $("#display-home").html("").load("<?php echo base_url($private_url) ?>?data=" + x);
        }
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