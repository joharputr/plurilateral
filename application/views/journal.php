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
<br><br>
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

        <!--================Blog Area =================-->
        <section class="blog_area section-gap single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                          <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                              <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                          </div>
          
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
          
                          <div class="single-sidebar-widget instafeed-widget">
                            <h4 class="instafeed-title">Instagram</h4>
                            <ul class="instafeed d-flex flex-wrap">
                              <li><img src="img/blog/instagram/i1.jpg" alt=""></li>
                              <li><img src="img/blog/instagram/i2.jpg" alt=""></li>
                              <li><img src="img/blog/instagram/i3.jpg" alt=""></li>
                              <li><img src="img/blog/instagram/i4.jpg" alt=""></li>
                              <li><img src="img/blog/instagram/i5.jpg" alt=""></li>
                              <li><img src="img/blog/instagram/i6.jpg" alt=""></li>
                            </ul>
                          </div>
          
                          <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Catgories</h4>
                            <ul class="cat-list mt-20">
                              <li>
                                <a href="#" class="d-flex justify-content-between">
                                  <p>Fashion</p>
                                  <p>59</p>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="d-flex justify-content-between">
                                  <p>Travel</p>
                                  <p>09</p>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="d-flex justify-content-between">
                                  <p>Lifestyle</p>
                                  <p>24</p>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="d-flex justify-content-between">
                                  <p>Shopping</p>
                                  <p>44</p>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="d-flex justify-content-between">
                                  <p>Food</p>
                                  <p>15</p>
                                </a>
                              </li>
                            </ul>
                          </div>
          
                          <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
                            <div class="popular-post-list">
                              <div class="single-post-list">
                                <div class="thumb">
                                  <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                </div>
                                <div class="details mt-20">
                                  <a href="blog-single.html">
                                    <h6>Retro-electric 1967 Ford Mustang 
                                        revealed in Russia</h6>
                                  </a>
                                  <p>Mate Winston | Dec 15</p>
                                </div>
                              </div>
                              <div class="single-post-list">
                                <div class="thumb">
                                  <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                </div>
                                <div class="details mt-20">
                                  <a href="blog-single.html">
                                    <h6>Unsettling trend of food safety at 
                                        sports stadiums uncovered</h6>
                                  </a>
                                  <p>Mate Winston | Dec 15</p>
                                </div>
                              </div>
                              <div class="single-post-list">
                                <div class="thumb">
                                  <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                </div>
                                <div class="details mt-20">
                                  <a href="blog-single.html">
                                    <h6>Christmas cottage from the Holiday
                                        flick selling for people</h6>
                                  </a>
                                  <p>Mate Winston | Dec 15</p>
                                </div>
                              </div>
                              <div class="single-post-list">
                                <div class="thumb">
                                  <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                </div>
                                <div class="details mt-20">
                                  <a href="blog-single.html">
                                    <h6>Home improvement advice every 
                                        homeowner needs to know</h6>
                                  </a>
                                  <p>Mate Winston | Dec 15</p>
                                </div>
                              </div>
                            </div>
                          </div>
          
                          <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="newsletter-title">Newsletter</h4>
                            <div class="form-group mt-30">
                              <div class="col-autos">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                                  onblur="this.placeholder = 'Enter email'">
                              </div>
                            </div>
                            <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                          </div>
          
                            <div class="single-sidebar-widget share-widget">
                              <h4 class="share-title">Share this post</h4>
                              <div class="social-icons mt-20">
                                <a href="#">
                                  <span class="ti-facebook"></span>
                                </a>
                                <a href="#">
                                  <span class="ti-twitter"></span>
                                </a>
                                <a href="#">
                                  <span class="ti-pinterest"></span>
                                </a>
                                <a href="#">
                                  <span class="ti-instagram"></span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <img class="img-fluid" src="img/blog/news-blog.jpg" alt="">
                            <a href="#"><h4>Cartridge Is Better Than Ever <br /> A Discount Toner</h4></a>
                            <div class="user_details">
                                <div class="float-left">
                                    <a href="#">Lifestyle</a>
                                    <a href="#">Gadget</a>
                                </div>
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5>Mark wiens</h5>
                                            <p>12 Dec, 2017 11:21 am</p>
                                        </div>
                                        <div class="d-flex">
                                            <img src="img/blog/user-img.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.</p>
                            <blockquote class="blockquote">
                                <p class="mb-0">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</p>
                            </blockquote>
                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
                            <div class="news_d_footer flex-column flex-sm-row">
                                <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>
                                <a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><i class="lnr lnr lnr-bubble"></i>06 Comments</a>
                                <div class="news_socail ml-sm-auto mt-sm-0 mt-2">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="#"><h4>A Discount Toner</h4></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="#"><h4>Cartridge Is Better</h4></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                    </div>                                      
                                </div>                                  
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>05 Comments</h4>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>  
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>  
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Annie Stephens</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>  
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c4.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>  
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c5.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Ina Hayes</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>                                                              
                        </div>
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form>
                                <div class="form-group form-inline">
                                  <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                  </div>                                        
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <a href="#" class="primary-btn submit_btn">Post Comment</a> 
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </div>
    <?php
$this->load->view('/header_footer/footer');
?>
</body>
</html>