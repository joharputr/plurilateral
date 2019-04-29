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
        <h2 id="title-tab">Journal</h2>
        <hr>
        <form>
            <div class="form-row">
                <h4 class="title-head-two mb-3 col-md-12"><i class="fa fa-search"></i>Filter Data</h4>
                    <div class="col-md-4 mb-3">
                        <label>Type</label>
                        <select class="form-control custom-select">
                            <option>All</option>
                            <option>National</option>
                            <option>International</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Year</label>
                        <select class="form-control custom-select">
                            <option>All</option>
                            <option>2018</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Search</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search by Title or Name of Event . . .">
                            <div class="input-group-append">
                                <button class="btn btn-primary rounded-0" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        
                    </div>
                </div>
            </div>
        </form>
        <!-- <div class="row">
            <div class="col-md-4 p-2">
                <div class="card">
                    <div class="card-body">
                        <h3 style=" text-align: center; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                        Lokakarya Nasional</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Memahami Pentingnya Resolusi 16</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="card mb-3">
            <div class="card-body text-center bg-danger text-white">
            <span>Oppss Data Not Found <i class="fa fa-exclamation-circle"></i></span>
            </div>
        </div>
    </div>
    <?php
    $this->load->view('/header_footer/footer');
    ?>
</body>
</html>