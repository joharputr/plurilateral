<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website Title -->
    <title>Plurilateral Dialogue</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightbox -->
    <link href="<?php echo base_url() ?>assets/plugins/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- FlexSlider -->
    <link rel="stylesheet" type="text/css"
    href="<?php echo base_url() ?>assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
    href="<?php echo base_url() ?>assets/plugins/owlcarousel/owl.theme.default.min.css">
    <!-- Theme Style -->
    <link href="<?php echo base_url() ?>assets/css/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style_min/style.min.css" rel="stylesheet">
    <!-- Animations -->
    <link href="<?php echo base_url() ?>assets/css/css/animate.css" rel="stylesheet">
    <!-- Custom Favicon -->
    <link href="<?php echo base_url() ?>assets/image/event/Logo-Event.png" rel="shortcut icon" type="image/x-icon" />

</head>

<style type="text/css">
  .navbar-default .navbar-nav .nav-item a{
    color: #6699FF;
}
</style>

<body id="top">
    <div id="preloader"></div>
    <?php $this->load->view("header.php")?>

    <section class="intro text-center section-padding" id="about">
        <div class="container pb-3">
            <!-- WELCOME TEXT -->
            <div class="row startchange">
                <div class="col-md-12">
                    <h1 class="head-title" style="font-size: 25px;">
                        <span style="font-size:50px; display: table-cell;"><i class="fas fa-question-circle"></i></span>
                        <span class="pl-2 align-middle" style="display: table-cell;">Contact Us</span>
                    </h1><!-- Headline -->
                </div>
            </div>
            <div class="row mt-4">
                <!-- Contact Form -->
                <div class="col-md-12 contact">
                    <form role="form">
                        <!-- Name -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- E-Mail -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Phone Number -->
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <!-- Message Area -->
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Write you message here..."
                            style="height:232px;"></textarea>
                        </div>
                        <!-- Subtmit Button -->
                        <button type="submit" class="button-blue text-right">
                            Send message
                        </button>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </section>

    <!-- MAPS -->
    <section class="features text-center section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="head-title" style="font-size: 25px;">
                        <span style="font-size:50px; display: table-cell;"><i class="fas fa-compass"></i></span>
                        <span class="pl-2 align-middle" style="display: table-cell;">MAPS</span>
                    </h1><!-- Headline -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row" id="location" style="margin">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.226152818535!2d106.79818189063141!3d-6.223251438825378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1495c27f11b%3A0x63e8f2ff2aa408d2!2sHotel+Fairmont+Jakarta!5e0!3m2!1sid!2sid!4v1550660138091"
                        width="1380" height="400" frameborder="0" style="padding-left: 22px;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="social-buttons">
                            <li><a href="index.html#" class="social-btn"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html#" class="social-btn"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- <a href="index.html#top" class="up-btn"><i class="fa fa-chevron-up"></i></a> -->
                        <p>Jakarta Plurilateral Dialogue. &copy; 2019 - All Right Reserved
                        </div>
                    </div>
                </div>
            </footer>
        </body>

        </html>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- SmoothScroll -->
        <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/css/smoothscroll/smoothscroll.js"></script> -->
        <!-- Bootstrap -->
        <script src="<?php echo base_url() ?>assets/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/flexslider/jquery.flexslider.js"></script>
        <!-- Waypoints -->
        <script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
        <!-- classie.js -->
        <script src="<?php echo base_url() ?>assets/js/classie.js"></script>
        <!-- Modernizr -->
        <script src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
        <script src="<?php echo base_url() ?>assets/js/script.js"></script>


        <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>


        <!-- GOOGLE MAPS DATA -->

        <script src="<?php echo base_url() ?>assets/js/preloader.js"></script>
        <!-- TEXT ROTATOR SETTINGS -->
        <script type="text/javascript">
            $(".rotate").textrotator({
    animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
    separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
    speed: 2000 // How many milliseconds until the next word show.
});
</script>


<script>
    $('.owl-carousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 1
            },
            768: {
                items: 2
            },
            979: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    function isMobile() {
    // set the bool to be false initially
    var isMobile = false;
    // Check if it is a mobile by testing the userAgent. If it is recognized set the isMobile bool to true
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
        .test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test(navigator.userAgent.substr(0, 4))) isMobile = true; //This is a mobile
        return isMobile;
    }

    $(document).ready(function() {
        if (isMobile() == false) {
            $(".navbar-default").addClass('fixed-top');
            var scroll_start = 0;
            var startchange = $('.startchange');
            var offset = startchange.offset();
            if (startchange.length) {
                $(document).scroll(function() {
                    scroll_start = $(this).scrollTop();
                    if (scroll_start > offset.top) {
                        $(".navbar-default").css('background-color', '#6699FF');
                        $(".navbar-default .navbar-nav .nav-item a").css('color', '#FFF');
                        $(".navbar-default").addClass('active-nav');
                    } else {
                        $('.navbar-default').css('background-color', 'transparent');
                        $(".navbar-default .navbar-nav .nav-item a").css('color', '#6699FF');
                        $(".navbar-default").removeClass('active-nav');
                    }
                });
            }
        }
    });
</script>

<!-- Header animation -->
<script>
//made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
        delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
</script>