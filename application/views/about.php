<!DOCTYPE html>
<html lang="en">
<head>
<title>About Ulysses</title>
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
		<div class="background_image" style="background-image:url(images/aboutulysses.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><font color="orange">About us</font></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container about_container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title_container">
							<div class="section_subtitle">Welcome to Ulysses Gym</div>
							<div class="section_title"><font color="orange">About <span>Ulysses Gym</span></font></div>
						</div>
						<div class="text_highlight"><b><font color="orange">1748 Evangelista Street, Bangkal Makati</font></b></div>
						<div class="text_highlight"><b><font color="orange">Ulysses Gym is a Fitness Center for Men & Women that's open 6am-10pm daily.</b></font></div>
						<div class="button about_button"><a href="<?php echo base_url('membership_controller');?>">Join Now</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="about_background">
			<div class="about_image"><img src="images/a2.png" alt=""></div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to sportfit</div>
						<div class="section_title">The Team</div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Member -->
				<div class="col-lg-4 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_1.jpg" alt=""></div>
						<div class="team_panel d-flex flex-column align-items-center justify-content-center text-center">
							<div class="team_name"><a href="#">Michael Smith</a></div>
							<div class="team_title">personal trainer</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-4 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_2.jpg" alt=""></div>
						<div class="team_panel d-flex flex-column align-items-center justify-content-center text-center">
							<div class="team_name"><a href="#">Simone Parker</a></div>
							<div class="team_title">personal trainer</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-4 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
						<div class="team_panel d-flex flex-column align-items-center justify-content-center text-center">
							<div class="team_name"><a href="#">William James</a></div>
							<div class="team_title">personal trainer</div>
						</div>
					</div>
				</div>

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
								<a href="#">
									<div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/logo.gif" alt=""><div>Ulysses<span>Gym</span></div></div>
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
<script src="js/about.js"></script>
</body>
</html>