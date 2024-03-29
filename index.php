<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $servername = "sql211.epizy.com";
        $username = "epiz_23107439";
        $password = "x3IjDxjuz4";
        $dbname = "epiz_23107439_contact_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO contacts (name, email_mobile, subject, message, status) VALUES ('" . $_POST["name"] . "', '" . $_POST["emailOrMobile"] . "', '" . $_POST["subject"] . "', '" . $_POST["message"] . "', 'new');";
        
        if ($conn->query($sql) === TRUE) {
            
        } else {
			echo "Error: " . $conn->error;
        }

        $conn->close();
    }    
?> 

<!DOCTYPE html>
	<html lang="en" class="no-js"> 
    <head style="direction: rtl;">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Startup Tech</title>		
        <meta name="description" content="Startup Text Team Ahmad Alsaleh Crazy ITer">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Crazy ITer">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="./img/logo.png">
		
		<!-- CSS
		================================================== -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

				<!-- ManyChat -->
				<script async="async">
		window.mcwidget = {"appId":"532160876956612","pageId":"297831607507540","widgets":[{"widget_id":4205492,"page_id":"297831607507540","widget_type":"customer_chat","status":"active","name":"Growth Tool #14","data":[],"chat_ref":"w4205492"}],"widgetLocale":"en_US","defaultSize":0,"fbSDKVersion":"v3.1"};
	(function(d, s, id){
    var host = 'manychat.com/108807';

    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s); js.id = id;
    js.src = '//' + host + '/assets/js/widget.js?' + (Math.round(+new Date/1000/600));
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'mcwidget-core'));

		</script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body" style="color: #fff;">Startup Tech</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#team">team</a></li>
						<li><a href="#contact">Contact</a></li>
                        <li></li>
					</ul>
					<a href="./index_ar.php" class="btn btn-blue btn-effect">عربي</a>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
								<img src="img/logo.png" class="animated fadeInDown" style="height: 200px; width: 200px;">
								<h2 class="animated fadeInDown">First Step for New Life</h2>
                                <span class="animated fadeInDown">Start from #1 to rich infinity</span>
                                <a href="#about" class="btn btn-blue btn-effect">About Us</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Planning, Designing and Doning</h2>
                                <span>Analysis Software Systems with multi Events</span>
                                <a href="#portfolio" class="btn btn-blue btn-effect">Our Portfolio</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Tranning and Education Technology</h2>
                                <span>Cources by Wonderful Team and Hope to Join More</span>
                                <a href="#team" class="btn btn-blue btn-effect">Out Team</a>
                            </div>
                        </div>
					</div>

				</div><!-- /sl-slider -->

                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm visible-md visible-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>Vision and Steps</h3>
								<div id="works">
									<div class="work-item">
										<p>
											We Look forward to Increasing the Level of Technical Culture as an Essential Step to Keep up with the Global Acceleration of Technological Development
											by Focusing on Secondary School Students to Qualify them to Participate in Local and International Competitions and Initiatives.
											<br><br>
											From this Point of View, We will Work to Illiteracy Eradication of 21st century as Anyone who is not Good at Dealing with Computers is a Clueless Person.
										</p>
									</div>
									<div class="work-item">
										<p>
											The Team Works to Increase the Orientation of the Students of the Region Who Study in Technology Colleges to Enter the Labor Market Effectively and Systematically
											by Making many Contributions and Activities that can Reach Real Projects.
											<br><br>
											If We Work on this Approach, We Will Reach 2020 with a Group of Youthful to the Development of Different Aspects of Life and Most Importantly an Educated and Ambitious Generation.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Startup Idea</h3>								
						     	 <div class="message-body">
									<img src="img/member-1.jpg" class="pull-left" alt="member">
									   <p style="font-size: 18px;">The Desire to Increase Technology Awareness and Keep up with The Elite in a Distinctive Level of the Region and Making Open Minds.</p>
									   <br><br>  
									   <p style="font-size: 18px;">Startup Tech is The First Step to get more and Serve our Region.
										<br>We Know it is Worth.</p>
									   <h4>Ahmad Alsaleh,<br>CEO</h4>
								  </div>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Services</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								<h3>Support</h3>
								<p>We Provide many Technical Support Services</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Tranning</h3>
								<p>We Train Cadres to Contribute to Technical Development</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>Design UI/UX</h3>
								<p>We Design Websites and Ads for All Business and Events</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								
								<h3>Develop Software</h3>
								<p>We Develop Smart Phones and Desktop Applications</p>							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Our Portfolio</h2>
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/item.jpg" class="img-responsive" 
								alt="Hello World">
								<figcaption class="mask">
									<h3>Start Event</h3>
									<p>fitst event for startup tech team</p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/item.jpg" class="img-responsive" 
								alt="Hello World">
								<figcaption class="mask">
									<h3>Start Event</h3>
									<p>fitst event for startup tech team</p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item3.jpg" class="img-responsive"
								alt="Hello World">
								<figcaption class="mask">
									<h3></h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			
			<!-- end portfolio section -->
			
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>What people say</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg">
									<div class="clearfix">
										<span>...</span>
										<p>...</p>
									</div>
								</div>
								
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg">
									<div class="clearfix">
										<span>...</span>
										<p>...</p>
									</div>
								</div>
							</div>			
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			<!-- team section -->		
			<section id="team">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Our Team</h2>
						</div>
						
						<div class="col-sm-6 col-md-3 wow animated fadeInUp card">
								<img src="./img/member-1.jpg" alt="Ahmad" style="width:100%">
								<h2>Ahmad Alsaleh</h2>
								<p class="title">CEO & Founder</p>
								<p>Mobile App Developer</p>
								<div style="margin: 24px;">
								  <a href="https://twitter.com/ahmad_alsaleh96" target="_blank"><i class="fa fa-twitter" style="margin: 10px;"></i></a>  
								  <a href="https://www.linkedin.com/in/ahmad-alsaleh96/" target="_blank"><i class="fa fa-linkedin" style="margin: 10px;"></i></a>  
								  <a href="https://www.facebook.com/alsaleh.anas.ahmad" target="_blank"><i class="fa fa-facebook" style="margin: 10px;"></i></a> 
								</div>
						</div>
						
						<div class="col-sm-6 col-md-3 wow animated fadeInUp card" data-wow-delay="0.4s">
								<img src="./img/member-2.jpg" alt="Taha" style="width:100%">
								<h2>Taha Kassar</h2>
								<p class="title">CTO & Developer</p>
								<p>Desktop Developer</p>
								<div style="margin: 24px;">
								  <a href="https://twitter.com/KassarTaha" target="_blank"><i class="fa fa-twitter" style="margin: 10px;"></i></a>  
								  <a href="https://www.linkedin.com/in/taha-kassar-508225177" target="_blank"><i class="fa fa-linkedin" style="margin: 10px;"></i></a>  
								  <a href="https://www.facebook.com/taha.kassar.12" target="_blank"><i class="fa fa-facebook" style="margin: 10px;"></i></a> 
								</div>
						</div>
						
						<div class="col-sm-6 col-md-3 wow animated fadeInUp card" data-wow-delay="0.8s">
								<img src="./img/member-3.jpg" alt="Victor" style="width:100%">
								<h2>Victor Bader</h2>
								<p class="title">Operating Systems<br>& Networks Manager</p>
								<div style="margin: 24px;">
								  <a href="#" target="_blank"><i class="fa fa-twitter" style="margin: 10px;"></i></a>  
								  <a href="#" target="_blank"><i class="fa fa-linkedin" style="margin: 10px;"></i></a>  
								  <a href="#" target="_blank"><i class="fa fa-facebook" style="margin: 10px;"></i></a> 
								</div>
						</div>

						<div class="col-sm-6 col-md-3 wow animated fadeInUp card" data-wow-delay="1.2s">
								<img src="./img/member-1.jpg" alt="Ahmad" style="width:100%">
								<h2>Ahmad Alsaleh</h2>
								<p class="title">CEO & Founder</p>
								<p>Software Engineer</p>
								<div style="margin: 24px;">
								  <a href="#" target="_blank"><i class="fa fa-twitter" style="margin: 10px;"></i></a>  
								  <a href="#" target="_blank"><i class="fa fa-linkedin" style="margin: 10px;"></i></a>  
								  <a href="#" target="_blank"><i class="fa fa-facebook" style="margin: 10px;"></i></a> 
								</div>							
						</div>
		
					</div>
				</div>
			</section>

			<!-- end team section -->
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
								<p>Our Links on Social Media</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn">
									<a href="https://www.facebook.com/startup.tech.team/" target="_blank">
									<i class="fa fa-facebook fa-2x"></i>
									</a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s">
									<a href="https://twitter.com/startupTechTeam" target="_blank">
									<i class="fa fa-twitter fa-2x"></i>
									</a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s">
									<a href="https://www.instagram.com/startuptech.team/" target="_blank">
									<i class="fa fa-instagram fa-2x"></i>
									</a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s">
									<a href="https://www.youtube.com/channel/UCYon0UtXQi9SUdpzHIj5sQQ" target="_blank">
									<i class="fa fa-youtube fa-2x"></i>
									</a>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
							<p>Leave a Message</p>
						</div>
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name..." required>
								</div>
								<div class="input-field">
									<input type="phone" name="emailOrMobile" class="form-control" placeholder="Your Email or Mobile..." required>
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject..." required>
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..." required></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Our Facebook Page</h3>						
								<!--
								<p><i class="fa fa-pencil"></i>Startup Tech<span>Syria, Lattakia</span><span>AlHaffeh City</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: +963 41 730843</p>
								<p><i class="fa fa-whatsapp"></i>Mobile & WhatsApp: +963 934 323 087</p>
								<p><i class="fa fa-envelope"></i>alsaleh.a.ahmad@gmail.com</p>
								-->
							</address>
							<iframe 
								src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fstartuptech.team&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=355250141692256" 
								width="100%"
								height="350"
								style="border:none;overflow:hidden" 
								scrolling="no" 
								frameborder="0" 
								allowTransparency="true" 
								allow="encrypted-media"></iframe>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<a id="copyText" href="https://www.facebook.com/Crazy.ITer/" target="_blank">Copyright &copy; 2019 Design and Developed By Crazy ITer</a>
						<br>
						<a class="btn btn-blue btn-effect" href="#body">Back to Top</a>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>