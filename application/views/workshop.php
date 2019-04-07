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
            <?php
$this->load->view('/header_footer/header');
?>
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
    </div>
    <?php
$this->load->view('/header_footer/footer');
?>
</body>
</html>