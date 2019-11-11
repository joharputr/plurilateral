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
                <a href="<?php echo base_url($private_url) ?>" class="btn btn-secondary w-100"><i class="fa fa-arrow-left"></i>Back</a>
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
                    <?php if (!empty($gambar)) {
                            $no = 1; ?>
                        <div id="owl-example" class="owl-carousel owl-theme">
                            <?php foreach ($gambar as $g) { ?>
                                <div>
                                    <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?><?php echo $g->path ?>" alt="photo" data-toggle="modal" data-target="#modal<?php echo $no; ?>"></a>
                                </div>
                            <?php $no++;} ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <?php if (!empty($gambar)) {
            $no = 1; ?>
            <!-- Modal --><?php foreach ($gambar as $g) { ?>
                <div class="modal fade" id="modal<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body mb-0 p-0">
                                <a><img class="img-fluid z-depth-1" src="<?php echo base_url() ?><?php echo $g->path ?>"></a>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $no++;} ?>
        <?php } ?>
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