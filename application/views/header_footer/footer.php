	<!-- FOOTER -->
	<footer class="footer" style="margin-top: 100px;">
	    <div class="footer_content">
	        <div class="container">
	            <div class="row">

	                <!-- Footer Column -->
	                <div class="col-lg-4 footer_col">
	                    <div class="footer_about">
	                        <div>
	                            <a href="#">
	                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
	                                    <div class="logo_image">
	                                        <div><img src="./assets/images/logo_event.png" alt="" style=""></div>
	                                    </div>
	                                    <div class="logo_content">
	                                        <div id="logo_text" class="logo_text logo_text_not_ie" style="padding: 3px;">
	                                            Plurilateral Dialogue</div>
	                                        <div class="logo_sub">June, 2019 - Jakarta, Indonesia</div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
	                        <div class="footer_about_text">
	                          <p>Ministry of Foreign Affairs, Republic of Indonesia<br>Jl. Pejambon No. 6<br>Jakarta Pusat, 10110
							<br>Indonesia</p>
	                          <p>Ministry of Religious Affairs, Republic of Indonesia<br>Jl. Lapangan Banteng Barat No. 3-4, Jakarta, 10710<br>Indonesia</p>
	                          <p>Email Us: plurilateral@plurilateral.org</p>
	                        </div>
	                    </div>
	                </div>

	                <!-- Footer Column -->
	                <div class="col-sm-8 footer_col">
	                    <h1 id="contact" style="color: white;">Contact Us</h1>
	                    <div class="footer_links">

	                        <form role="form" action="<?php echo base_url()?>welcome/sendEmail" method="POST"
	                            enctype='multipart/form-data'>

	                            <form role="form">

	                                <!-- Name -->
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <!-- E-Mail -->
	                                        <div class="form-group">

	                                            <input type="text" class="form-control" placeholder="Subject"
	                                                name="subject">

	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <!-- Phone Number -->
	                                        <div class="form-group">

	                                            <input type="email" class="form-control" placeholder="Email address"
	                                                name="email_id">

	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- Message Area -->
	                                <div class="form-group">
	                                    <textarea class="form-control" placeholder="Write you message here..."
	                                        style="height:232px;" name="body"></textarea>



	                                </div>
	                                <!-- Subtmit Button -->
	                                <button type="submit" class="btn btn-secondary" style="width: 150px;">submit</button>
	                            </form>
	                    </div>
	                </div>


	            </div>
	        </div>
	    </div>
	    <div class="footer_extra">
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div
	                        class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
	                        <div class="footer_social">
	                            <div class="footer_social_title">Follow us on Social Media</div>
	                            <ul class="footer_social_list">
	                                <li>
	                                	<a href="#">
	                                		<i class="fa fa-instagram" aria-hidden="true"></i>
	                                	</a>
	                                </li>
	                                <li>
	                                	<a href="#">
	                                		<i class="fa fa-twitter" aria-hidden="true"></i>
	                                	</a>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="footer_extra_right ml-lg-auto text-lg-right">
	                            <div class="footer_extra_links">
	                            	<ul>
	                            		<li>
	                                        <a href="#" class="btn btn-info rounded-circle text-white">
	                                            <i class="fa fa-chevron-up m-0"></i>
	                                        </a>
	                                    </li>
	                                </ul>
	                            </div>
	                            <div class="copyright">
	                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	                                Copyright &copy;<script>
	                                document.write(new Date().getFullYear());
	                                </script> All rights reserved </a>
	                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	<style type="text/css">
@media only screen and (max-width: 500px) {
    div.footer_extra_content.d-flex.flex-lg-row.flex-column.align-items-lg-center.align-items-start.justify-content-lg-start.justify-content-center {
        padding-top: 0px;
        margin-top: 20px;
    }

    ul.footer_social_list {
        margin-right: 1px;
    }

    .footer_content {
        padding-top: 30px;
        padding-bottom: 15px;
    }

    .footer_social,.footer_extra_right,
    .footer_extra_right.footer_extra_links, .footer_extra_right.copyright {
        margin-right: auto;
        margin-left: auto;
    }
}
	</style>
	</div>

	<script src="./assets/js/jquery-3.2.1.min.js"></script>
	<script src="./assets/styles/bootstrap4/popper.js"></script>
	<script src="./assets/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="./assets/plugins/easing/easing.js"></script>
	<script src="./assets/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="./assets/js/custom.js"></script>