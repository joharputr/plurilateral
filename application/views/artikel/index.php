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
        <h2 id="title-tab" style="margin-bottom: 20px; "><?php echo $title ?></h2>
        <hr>
        <div class="row">
            <div class="col-md-4 mb-2">
                <?php
                $this->load->view('/artikel/filter', $tahun);
                ?>
            </div>
            <div class="col-md-8">
                <div class="load-data card-body text-center bg-white text-primary">
                    <i class="fa fa-spinner fa-spin mr-10"></i>Permintaan Data Anda Sedang di Proses . . .</span>
                </div>
                <div class="data-content"></div>
            </div>
        </div>
    </div>
    <?php
    $this->load->view('/header_footer/footer');
    ?>
</body>

</html>

<script>
    actControl();

    function actControl() {
        var year = !$("select[name=sort_year] option:selected").val() ? "" : $("select[name=sort_year] option:selected").val();
        var title = !$("input[name=sort_title]").val() ? "" : $("input[name=sort_title]").val();
        $(".data-content").load("<?php echo base_url("$private_url") ?>/data" +
            (!year ? "" : "?&sort_year=" + year) +
            (!title ? "" : "&sort_title=" + title));
    }
</script>