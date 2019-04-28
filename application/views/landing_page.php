<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <title>The Conference</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/image/event/Logo-Event.png" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles2.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        div.carousel-caption {
            margin-bottom: 60px;
        }
    }

    .carousel-item {
        height: 100vh;
        width: 100%;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<style type="text/css">
    .card-img-wrap {
        overflow: hidden;
        position: relative;
    }

    .card-img-wrap:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.3);
        opacity: 0;
        transition: opacity .5s;
    }

    .card-img-wrap img {
        transition: transform .5s;
        width: 100%;
    }

    .card-img-wrap:hover img {
        transform: scale(1.1);
    }

    .card-img-wrap:hover:after {
        opacity: 1;
    }
</style>

<body>
    <?php
    $this->load->view('/header_footer/header');
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="">
            <div class="carousel-item active"
            style="background-position: top right; background-image: url('./assets/images/istiqlal.jpg')">
            <div class="background-blur-dark" style="width: 100%; height: 100%;">
                <div class="carousel-caption">
                    <h2 class="display-4" style="color: white; font-weight: bold;">Jakarta Plurilateral Dialogue </h2>
                    <h4 style="color: white;">Mainstreaming Culture of Tolerance and Healthy
                        Practices of
                        Freedom of Expression through
                    revitalizing the Resolution 16/18 </h4>
                    <p class="lead" style="color: white;">Jakarta, April 2019 (TBC)</p>
                    <div class="button home_button" style="width: 170px;"><a style="font-size: 18px;"
                        href="<?php echo base_url(); ?>event">VISIT PAGE</a></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"
            style="background-position: top right; background-image: url('./assets/images/loknas.jpg')">
            <div class="background-blur-dark" style="width: 100%; height: 100%;">
                <div class="carousel-caption">
                    <h2 class="display-4" style="color: white; font-weight: bold;">National Initiative</h2>

                    <div class="button home_button" style="width: 170px;"><a style="font-size: 18px;"
                        href="<?php echo base_url(); ?>national">VISIT PAGE</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <!-- SPECIAL FEATURE -->
            <section class="gray-bg section-padding" id="feature-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 ">
                            <div class="box">
                                <div class="box-icon card-img-wrap" style="text-align: center;">
                                    <img src="./assets/images/logo_event.png" alt=""
                                    style="height: 130px; width: 130px;">
                                </div>
                                <h3 style="text-align: center; color: #1E90FF">International Event</h3>
                                <p style="text-align: center;">Mainstreaming Culture of Tolerance and Healthy
                                    Practices
                                of Freedom of Expression through revitalizing the Resolution 16/18 </p>
                                <a href="<?php echo base_url(); ?>event">
                                    <div style="text-align: center;">
                                        <button type="button" class="btn btn-info ">more info</button></div>
                                    </a>
                                </div>
                                <br><br>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="box">
                                    <div class="box-icon card-img-wrap" style="text-align: center;">
                                        <img src="./assets/images/logo_event.png" alt=""
                                        style="height: 130px; width: 130px;">
                                    </div>
                                    <h3 style="text-align: center; color: #1E90FF">National Event</h3>
                                    <p style="text-align: center;">Mainstreaming Culture of Tolerance and Healthy
                                        Practices
                                    of Freedom of Expression through revitalizing the Resolution 16/18 </p>
                                    <a href="<?php echo base_url(); ?>national">
                                        <div style="text-align: center;">
                                            <button type="button" class="btn btn-info ">more info</button></div>
                                        </a>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="box">
                                        <div class="box-icon card-img-wrap" style="text-align: center;">
                                            <img src="./assets/images/logo_event.png" alt=""
                                            style="height: 130px; width: 130px;">
                                        </div>
                                        <h3 style="text-align: center; color: #1E90FF">Workshop</h3>
                                        <p style="text-align: center;">Mainstreaming Culture of Tolerance and Healthy
                                            Practices
                                        of Freedom of Expression through revitalizing the Resolution 16/18 </p>
                                        <a href="<?php echo base_url(); ?>workshopl">
                                            <div style="text-align: center;">
                                                <button type="button" class="btn btn-info ">more info</button></div>
                                            </a>
                                        </div>
                                        <br><br>
                                    </div>

                                </div>
                            </div>
                        </section>


                        <!-- RESOURCES -->
                        <section class="gray-bg section-padding" id="feature-page">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center" style="margin-bottom: 50px;">
                                        <div class="page-title">
                                            <h2 style="color: #1E90FF;">Resources</h2>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-icon card-img-wrap " style="text-align: center;">
                                                <img src="./assets/images/logo_event.png" alt=""
                                                style="height: 130px; width: 130px;">
                                            </div>
                                            <h3 style="text-align: center; color: #1E90FF;">Paper</h3>
                                            <p style="text-align: center;">Mainstreaming Culture of Tolerance and Healthy
                                                Practices
                                            of Freedom of Expression through revitalizing the Resolution 16/18 </p>

                                            <a href="<?php echo base_url(); ?>paper">
                                                <div style="text-align: center;">
                                                    <button type="button" class="btn btn-info ">more info</button></div>
                                                </a>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <div class="box-icon card-img-wrap" style="text-align: center;">
                                                    <img src="./assets/images/logo_event.png" alt=""
                                                    style="height: 130px; width: 130px;">
                                                </div>
                                                <h3 style="text-align: center; color: #1E90FF;">Journal</h3>
                                                <p style="text-align: center;">Mainstreaming Culture of Tolerance and Healthy
                                                    Practices
                                                of Freedom of Expression through revitalizing the Resolution 16/18 </p>

                                                <a href="<?php echo base_url(); ?>journal">
                                                    <div style="text-align: center;">
                                                        <button type="button" class="btn btn-info ">more info</button></div>
                                                    </a>
                                                </div>
                                                <br><br>
                                            </div>


                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>

                    </div>
                    <?php
                    $this->load->view('/header_footer/footer');
                    ?>
                </body>