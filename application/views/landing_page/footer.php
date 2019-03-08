	<!-- FOOTER -->
	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div>
								<a href="#">
									<div class="logo_container d-flex flex-row align-items-start justify-content-start">
										<div class="logo_image"><div><img src="./assets/images/logo_event.png"  alt="" style=""></div></div>
										<div class="logo_content">
											<div id="logo_text" class="logo_text logo_text_not_ie" style="padding: 3px;">Plurilateral Dialogue</div>
											<div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
										</div>
									</div>
								</a>	
							</div>
							<div class="footer_about_text">
								<p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-sm-8 footer_col">
						<h1 id="contact">Contact Us</h1>
						<div class="footer_links">

						 <form role="form" action="<?php echo base_url()?>welcome/sendEmail"  method="POST" enctype='multipart/form-data'>

						 <form role="form">

                        <!-- Name -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- E-Mail -->
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Subject" name="subject">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Phone Number -->
                                <div class="form-group">

                                    <input type="email" class="form-control" placeholder="Email address"  name="email_id">

                                </div>
                            </div>
                        </div>
                        <!-- Message Area -->
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Write you message here..."

                                style="height:232px;"  name="body"></textarea>



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
						<div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
							<div class="footer_social">
								<div class="footer_social_title">Follow us on Social Media</div>
								<ul class="footer_social_list">
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								
								</ul>
							</div>
							<div class="footer_extra_right ml-lg-auto text-lg-right">
								<div class="footer_extra_links">
									<ul>
										<a style="color: white; font-size: 12px;" href="contact.html">Contact us</a>
										<li><a href="#">home</a></li>
									
									</ul>
								</div>
								<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
		<style type="text/css">
			   @media only screen and (max-width: 500px) {
 				 div.footer_extra_content.d-flex.flex-lg-row.flex-column.align-items-lg-center.align-items-start.justify-content-lg-start.justify-content-center{
   					padding-top:0px;
   					margin-top: 20px;
   					margin-left:80px;

 				 }
  				ul.footer_social_list{
   					margin-right: 1px;
   					}

   					div.footer_extra_right.ml-lg-auto.text-lg-right{
   						margin-left:10px;
   					}
   					div.copyright{
   						margin-left: -30px;
   					}
   					.footer_content
					{
						padding-top: 30px;
						padding-bottom: 15px;
					}
				}
		</style>
</div>

<script src="./assets/js/jquery-3.2.1.min.js"></script>
<script src="./assets/styles/bootstrap4/popper.js"></script>
<script src="./assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="./assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="./assets/plugins/easing/easing.js"></script>
<script src="./assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="./assets/js/custom.js"></script>
</body>
</html>