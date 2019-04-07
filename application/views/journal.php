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

            <?php
$this->load->view('/header_footer/header');
?>
        </div>

        <h2 style="text-align: center; margin-bottom: 20px; ">Journal</h2>
        <ul class="nav nav-pills mb-3 nav justify-content-center" id="pills-tab" role="tablist" style="left: 50%;">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true" style="font-size: 25px;">International</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false" style="font-size: 25px;">National</a>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <br>
                <h2
                    style=" margin-left: 100px; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                    Judul</h2>


                <!-- paper -->
                <h3
                    style=" margin-left: 100px; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px;">
                    PAPER</h3>
                <ul class="b" style="list-style-type: square; margin-left: 120px; color: orange; margin-bottom: 10px;">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                </ul>

                <!-- journal -->
                <h3
                    style=" margin-left: 100px; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px;">
                    JOURNAL</h3>
                <ul class="b" style="list-style-type: square; margin-left: 120px; color: orange;  margin-bottom: 20px;">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <br>
                <h2
                    style=" margin-left: 100px; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                    Judul dd</h2>


                <!-- paper -->
                <h3
                    style=" margin-left: 100px; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px;">
                    PAPER</h3>
                <ul class="b" style="list-style-type: square; margin-left: 120px; color: orange; margin-bottom: 10px;">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                </ul>

                <!-- journal -->
                <h3
                    style=" margin-left: 100px; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px;">
                    JOURNAL</h3>
                <ul class="b" style="list-style-type: square; margin-left: 120px; color: orange;  margin-bottom: 20px;">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Coca Cola</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
$this->load->view('/header_footer/footer');
?>
</body>
</html>