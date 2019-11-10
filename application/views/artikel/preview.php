<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <title>The Conference</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url() ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/image/event/Logo-Event.png" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/main_styles2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/owlcarousel/owl.theme.default.min.css">
    <meta name="viewport">
</head>
<style type="text/css">
    @media only screen and (max-width: 500px) {
        h2.display-4 {
            font-size: 30px;
        }

        h4 {
            font-size: 15px;
        }
    }
</style>

<body>
    <div class="home" id="home">
        <style type="text/css">
            @media only screen and (max-width: 500px) {
                .home {
                    height: 20vh;
                    width: 100%;
                }

                ul.nav.nav-tabs {
                    margin-left: -130px;
                }

                div.tab-pane.fade.show {
                    margin-left: -50px;
                }
            }
        </style>
        <?php
        $this->load->view('/header_footer/header');
        ?>
    </div>
    <div class="container" id="main-content">
        <div class="row mb-3">
            <div id="title-tab" class="col-md-2">
                <a href="<?php echo base_url('national') ?>" class="btn btn-secondary w-100"><i class="fa fa-arrow-left"></i>Back</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($preview as $p) { ?>
                <div class="col-md-12">
                    <h3 class="title-head-one"><?php echo $p->judul; ?></h3>
                    </a>
                    <h5 class="title-head-one text-success"><?php echo $p->tempat . ', ' . date_indo($p->tanggal); ?></h5>
                    <hr>
                    <div class="content-event mb-4">
                        <p class="desc-event text-justify"><?php echo $p->deskripsi; ?></p>

                    </div>
                    <div id="owl-example" class="owl-carousel owl-theme">
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/1.jpg" alt="photo" data-toggle="modal" data-target="#modal1"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/2.jpg" alt="photo" data-toggle="modal" data-target="#modal2"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/3.jpg" alt="photo" data-toggle="modal" data-target="#modal3"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/4.jpg" alt="photo" data-toggle="modal" data-target="#modal4"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/5.jpg" alt="photo" data-toggle="modal" data-target="#modal5"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/6.jpg" alt="photo" data-toggle="modal" data-target="#modal6"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/7.jpg" alt="photo" data-toggle="modal" data-target="#modal7"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/8.jpg" alt="photo" data-toggle="modal" data-target="#modal8"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/9.jpg" alt="photo" data-toggle="modal" data-target="#modal9"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/10.jpg" alt="photo" data-toggle="modal" data-target="#modal10"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/11.jpg" alt="photo" data-toggle="modal" data-target="#modal11"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/12.jpg" alt="photo" data-toggle="modal" data-target="#modal12"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/13.jpg" alt="photo" data-toggle="modal" data-target="#modal13"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/14.jpg" alt="photo" data-toggle="modal" data-target="#modal14"></a>
                        </div>
                        <div>
                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/15.jpg" alt="photo" data-toggle="modal" data-target="#modal15"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/1.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/2.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/3.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/4.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/5.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/6.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/7.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/8.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/10.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/11.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/12.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/13.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/14.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?>assets/image/national/loknas/gallery/15.jpg"></a>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $this->load->view('/header_footer/footer');
    ?>
</body>
</html>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 1
            },
            768: {
                items: 2
            },
            979: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });
</script>