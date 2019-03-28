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
    <link href="<?php echo base_url() ?>assets/image/event/Logo-Event.png" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles2.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/responsive.css">
    <meta name="viewport">

</head>

<body>

    <div class="super_container">

        <!-- Home -->

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

            <!-- Header -->

            <header class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div
                                        class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                        <div>
                                            <a href="#">
                                                <div
                                                    class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="logo_image">
                                                        <div><img src="./assets/images/logo_event.png" alt=""></div>
                                                    </div>
                                                    <div class="logo_content">
                                                        <div id="logo_text" class="logo_text logo_text_not_ie"
                                                            style="padding:5px; ">Plurilateral Dialogue</div>
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
                    <nav class="navbar navbar-expand-md navbar-light bg-light" style="margin-left: 30px;">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class=" navbar-nav">
                                <li class=" active">
                                    <a class="nav-link active" href="<?php echo base_url(); ?>home" style="">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">

                                    <a href="<?php echo base_url(); ?>event" class="nav-link" href="#">International
                                        Dialogue</a>

                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>national" class="nav-link">National Dialogue</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="<?php echo base_url(); ?>workshop">Workshop</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co"
                                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Resources
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"
                                        style="margin-top: 6px;">
                                        <li><a href="<?php echo base_url(); ?>paper" class="dropdown-item"
                                                href="#">Paper</a></li>
                                        <li><a href="<?php echo base_url(); ?>journal" class="dropdown-item"
                                                href="#">Journal</a></li>
                                        <li><a href="<?php echo base_url(); ?>videos" class="dropdown-item"
                                                href="#">Videos</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="<?php echo base_url(); ?>steeringcommittee">Steering
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

                </div>
            </header>
            <!--  <div class="home_content_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="home_content">
              <div class="home_date"></div>
              <div class="home_title">Jakarta Plurilateral Dialogue: </div>
              <div class="home_location">April, 2018 - Jakarta, Indonesia</div>
              <div class="home_text">Mainstreaming Culture of Tolerance and Healthy Practices of Freedom of Expression through revitalizing the Resolution 16/18 </div>
              <div class="home_buttons">
              
                <div class="button home_button"><a href="#">Find out more</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
        </div>

        <h2 style="text-align: center; margin-bottom: 20px; ">Paper</h2>
        <ul class="nav nav-pills mb-3 nav justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true" style="font-size: 25px; ">International</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false" style="font-size: 25px;">National</a>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active container-fluid" id="pills-home" role="tabpanel"
                aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h2
                                    style=" text-align: center; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                                    Seminar ABC</h2>
                                <!-- paper -->
                                <h3 class="mt-2 text-center" style=" font-family: 'Raleway', sans-serif;">
                                    PAPER</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>

                                <!-- journal -->
                                <h3 class="mt-2 text-center" style="font-family: 'Raleway', sans-serif;">
                                    JOURNAL</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <h3 class="mt-2 text-center" style="font-family: 'Raleway', sans-serif;">
                                    GALLERY</h3>
                                <hr class="mt-0">
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary w-100">Photos</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-secondary w-100">Videos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h2
                                    style=" text-align: center; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                                    Seminar ABC</h2>
                                <!-- paper -->
                                <h3 class="mt-2 text-center" style=" font-family: 'Raleway', sans-serif;">
                                    PAPER</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>

                                <!-- journal -->
                                <h3 class="mt-2 text-center" style="font-family: 'Raleway', sans-serif;">
                                    JOURNAL</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <h3 class="mt-2 text-center" style="font-family: 'Raleway', sans-serif;">
                                    GALLERY</h3>
                                <hr class="mt-0">
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary w-100">Photos</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-secondary w-100">Videos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h2
                                    style=" text-align: center; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                                    Seminar ABC</h2>
                                <!-- paper -->
                                <h3 class="mt-2 text-center" style=" font-family: 'Raleway', sans-serif;">
                                    PAPER</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>

                                <!-- journal -->
                                <h3 class="mt-2 text-center" style="font-family: 'Raleway', sans-serif;">
                                    JOURNAL</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <h3 class="mt-2 text-center" style="font-family: 'Raleway', sans-serif;">
                                    GALLERY</h3>
                                <hr class="mt-0">
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary w-100">Photos</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-secondary w-100">Videos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">
        @media only screen and (max-width: 500px) {
            ul.nav.nav-pills.mb-3.justify-content-center {
                margin-left: -40px;

            }

            a#pills-home-tab.nav-link {
                font-size: 302px;
            }
        </style>