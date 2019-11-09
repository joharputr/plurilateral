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
        <h2 id="title-tab">Paper</h2>
        <hr>
        <form class="search-form">
            <div class="form-row">
                <h4 class="title-head-two mb-3 col-md-12"><i class="fa fa-search"></i>Filter Data</h4>
                <div class="col-md-4 mb-3">
                    <label>Type</label>
                    <select name="sort_type" class="form-control custom-select" onchange="actControl()">
                        <option value="all">All</option>
                        <option value="national">National</option>
                        <option value="international">International</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Year</label>                    
                    <select name="sort_year" class="form-control custom-select" onchange="actControl()">
                        <option value="all">All</option>
                        <?php if(!empty($tahun)){
                            foreach($tahun as $d){?>
                        <option value="<?php echo $d->year?>"><?php echo $d->year?></option>
                        <?php }}?>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Search</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                            <div class="search-button btn btn-primary rounded-0"><i class="fa fa-search"></i></div>
                        </div>
                        <input type="text" name="sort_title" class="form-control" onkeyup="actControl()"placeholder="Search Name of Event . . .">
                    </div>
                </div>
            </div>
        </form>
        <div class="load-data">
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
            var type = !$("select[name=sort_type] option:selected").val() ? "" : $("select[name=sort_type] option:selected").val();            
            var year = !$("select[name=sort_year] option:selected").val() ? "" : $("select[name=sort_year] option:selected").val();            
            var title = !$("input[name=sort_title]").val() ? "" : $("input[name=sort_title]").val();            
            $(".load-data").load("<?php echo base_url($private_url) ?>/data" + 
                    (!type ? "" : "?&sort_type=" + type) +
                    (!year ? "" : "&sort_year=" + year) +
                    (!title ? "" : "&sort_title=" + title));
    }
</script>