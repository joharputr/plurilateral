
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

    </style>
    <div class="header bg py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
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
