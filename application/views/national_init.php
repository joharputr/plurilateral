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
    </div>
    <?php
$this->load->view('/header_footer/footer');
?>
</body>
</html>

<script>
actControl('data');
function actControl(x, y){
    if(x=='data'){
        $("#main-content").load("<?php echo base_url("national") ?>/data");
    } else if (x=='preview'){
        $("#main-content").load("<?php echo base_url("national") ?>/preview");
    }
}
</script>