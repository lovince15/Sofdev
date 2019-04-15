<!DOCTYPE html>
<html lang="en">
<head>
<title>Ulysses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
    
    <!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                        <a href="/">
                            <div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/logo.gif" alt=""><div>Ulysses<span>Gym</span></div></div>
                        </a>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="<?php echo base_url('home_controller');?>">Home</a></li>
                                <li><a href="<?php echo base_url('about_controller');?>">About us</a></li>
                                <li><a href="<?php echo base_url('contact_controller');?>">Contact</a></li>
                                <li><a href="<?php echo base_url('membership_controller');?>">Membership</a></li>
                                <li><a href="">Current People Track</a></li>
                                 <li><a href="<?php echo base_url('login_controller');?>">Admin-login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>




    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/homepage.jpg)"></div>
        <div class="overlay"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="video_link">
                                <a class="vimeo video_button d-flex flex-column align-items-center justify-content-center" href="https://player.vimeo.com/video/99340873?autoplay=1&loop=1&title=0&autopause=0">
                                    <div class="video_link_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="video_icon d-flex flex-column align-items-center justify-content-center"><i class="fa fa-play" aria-hidden="true"></i></div>
                                        <span class="video_text"><font color="Orange">See Workout Video</font></span>
                                    </div>
                                </a>
                            </div>
                            <div class="home_title"><font color="Orange ">Get fit with us</font></div>
                            <div class="button home_button ml-auto mr-auto"><a href="<?php echo base_url('membership_controller');?>"> Join Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="gallery">
        
        <!-- Gallery Slider -->
        <div class="gallery_slider_container">
            <div class="owl-carousel owl-theme gallery_slider">
                
                <!-- Slide -->
                <div class="owl-item"><img src="images/gallery_3.jpg" alt=""></div>

                <!-- Slide -->
                <div class="owl-item"><img src="images/gallery_4.jpg" alt=""></div>

                <!-- Slide -->
                <div class="owl-item"><img src="images/gallery_5.jpg" alt=""></div>

                <!-- Slide -->  
                <div class="owl-item"><img src="images/gallery_1.jpg" alt=""></div>

                <!-- Slide -->
                <div class="owl-item"><img src="images/gallery_2.jpg" alt=""></div>

            </div>
        </div>
    </div>


    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="footer_container">
                        <div class="footer_content">
                            <div class="footer_logo">
                                <a href="/">
                                    <div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/logo.gif" alt="">
                                    <div>Ulysses<span>Gym</span></div></div>
                                </a>
                            </div>
                           
                            

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>