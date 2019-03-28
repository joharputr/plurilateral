<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <title>The Conference</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap4/bootstrap.min.css">
    <link href="./assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/responsive.css">
    <meta name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/image/event/Logo-Event.png" rel="shortcut icon" type="image/x-icon" />
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
</head>

<body>
    <div class="header bg py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <a href="#">
                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="logo_image">
                                        <div><img src="./assets/images/logo_event.png" alt=""></div>
                                    </div>
                                    <div class="logo_content">
                                        <div id="logo_text" class="logo_text logo_text_not_ie" style="padding:5px; ">
                                            Plurilateral Dialogue</div>
                                        <div class="logo_sub">April, 2019 - Jakarta, Indonesia</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="position-absolute trigger">
        <!-- hidden trigger to apply 'stuck' styles --></span>
    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class=" navbar-nav ">
                <li class=" active">
                    <a class="nav-link active" href="<?php echo base_url(); ?>home" style="">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>event" class="nav-link" href="#">International
                        Dialogue</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>national" class="nav-link">National Initiative</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url(); ?>workshop">Workshop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 6px;">
                        <li><a href="<?php echo base_url(); ?>paper" class="dropdown-item" href="#">Paper</a></li>
                        <li><a href="<?php echo base_url(); ?>journal" class="dropdown-item" href="#">Journal</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>videos" class="dropdown-item" href="#">Videos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url(); ?>steeringcommitte">Steering
                        Committee</a>
                </li>
            </ul>
        </div>
        <style type="text/css">
        li a {
            margin-left: 40px;
        }

        .dropdown-menu {
            margin-left: 40px;

        }

        .dropdown-item {
            margin-left: 0%;
        }
        </style>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner" role="listbox" style="">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                style="background-position: top right; background-image: url('./assets/images/jakarta.jpg')">
                <div class="carousel-caption">
                    <h2 class="display-4">Jakarta Plurilateral Dialogue: </h2>
                    <h4>Mainstreaming Culture of Tolerance and Healthy Practices of Freedom of Expression through
                        revitalizing the Resolution 16/18 </h4>
                    <p class="lead" style="color: white;">Jakarta, April 2019 (TBC)</p>
                    <div class="button home_button" style="width: 170px;"><a style="font-size: 18px;"
                            href="<?php echo base_url(); ?>event">VISIT PAGE</a></div>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-position: top right; background-image: url('./assets/images/nu.png')">
                <div class="carousel-caption">
                    <h2 class="display-4">National Initiative</h2>

                    <a href="<?php echo base_url(); ?>pd_event/Event/index"><button type="button"
                            class="btn btn-info btn-lg">Visit Page</button></a>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"
            style="margin-top: 200px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
            style="margin-top: 200px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
    $this->load->view('/landing_page/landing_page');
		$this->load->view('/landing_page/footer');
    ?>
</body>