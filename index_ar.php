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
                        <li><a href="#body">الرئيسية</a></li>
                        <li><a href="#service">الخدمات</a></li>
                        <li><a href="#portfolio">اﻷحداث والنشاطات</a></li>
                        <li><a href="#testimonials">اﻵراء</a></li>
                        <li><a href="#team">الفريق</a></li>
						<li><a href="#contact">تواصل</a></li>
                        <li></li>
					</ul>
					<a href="./index.php" class="btn btn-blue btn-effect">English</a>
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
								<h2 class="animated fadeInDown">الخطوة اﻷولى للحياةالجديدة</h2>
                                <span class="animated fadeInDown">نبدأ من 1# لنصل للانهاية</span>
                                <a href="#about" class="btn btn-blue btn-effect">عن الفريق</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>التخطيط، التصميم والتنفيذ</h2>
                                <span>تحليل اﻷنظمة البرمجية مع العديد من اﻷحداث</span>
                                <a href="#portfolio" class="btn btn-blue btn-effect">اﻷحداث والنشاطات</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>التدريب والتثقيف التكنولوجي</h2>
                                <span>دورات وجلسات تدريبية مع فريق رائع ونتطلع لانضمام المزيد</span>
                                <a href="#team" class="btn btn-blue btn-effect">الفريق</a>
                            </div>
                        </div>
					</div>

				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">السابق</span>
                    <span class="nav-arrow-next">التالي</span>
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
			<section id="about">
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3 dir="rtl">الرؤية والخطوات</h3>
								<div id="works">
									<div class="work-item" dir="rtl">
										<p>
												نتطلع إلى زيادة مستوى الثقافة التقنية كخطوة أساسية لمواكبة التسارع العالمي لتطور التكنولوجيا
												من خلال التركيز على طلاب المدارس الثانوية لتأهيلهم للمشاركة في المسابقات والمبادرات المحلية والدولية
											<br><br>
											من وجهة النظر هذه ، سنعمل على محو الأمية في القرن الحادي والعشرين لأن أي شخص غير جيد في التعامل مع أجهزة الكمبيوتر هو شخص جاهل
										</p>
									</div>
									<div class="work-item" dir="rtl">
										<p>
											يعمل الفريق على زيادة توجه طلاب المنطقة ممن يدرسون في كليات التقنية لدخول سوق العمل بفعالية وبشكل منهجي
											من خلال تقديم العديد من المساهمات والأنشطة التي من الممكن أن تصل إلى مشروعات حقيقية
											<br><br>
											إذا عملنا على هذا النهج ، فسوف نصل إلى عام 2020 مع مجموعة من الشباب لتطوير جوانب مختلفة من الحياة والأكثر أهمية هو جيل متعلم وطموح
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block" dir="rtl">
								<h3>فكرة Startup Tech</h3>								
						     	 <div class="message-body">
									<img src="img/member-1.jpg" class="pull-left" alt="member">
									   <p style="font-size: 18px;">
											الرغبة في زيادة الوعي التكنولوجي ومواكبة النخبة بشكل يليق بتميز المنطقة وتنمية العقول
									</p>
									   <br><br>  
									   <p style="font-size: 18px;">
										هي الخطوة اﻷولى للرغبة في الحصول على المزيد والمساهمة في تخديم المنطقة
										<br>
										ﻷننا نعلم أنها تستحق منا أكثر من ذلك
									</p>
									   <h4>أحمد أنس الصالح
										   <br>
										   المدير التنفيذي
									   </h4>
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
							<h2 class="wow animated bounceInLeft">الخدمات</h2>
							<p class="wow animated bounceInRight">الملامح الرئيسية لعملنا</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								<h3>الدعم التقني</h3>
								<p>نقدم العديد من خدمات الدعم التكنولوجي والبرمجي</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>التدريب</h3>
								<p>نقوم بتدريب الكوادر للمساهمة في التطوير التقني</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>خدمات التصميم</h3>
								<p>نصمم مواقع الانترنت واﻹعلانات لجميع اﻷعمال والمناسبات</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								
								<h3>تطوير البرمجيات</h3>
								<p>نطور تطبيقات للهواتف الذكية وتطبيقات خدمات مكتبية</p>							
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
							<h2>اﻷحداث والنشاطات</h2>
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/item.jpg" class="img-responsive">
								<figcaption class="mask">
									<h3></h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item2.jpg" class="img-responsive">
								<figcaption class="mask">
									<h3></h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street" href="img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item3.jpg" class="img-responsive">
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
								<h2>آراء الشخصيات حول الفريق</h2>
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
							<h2>أعضاء الفريق</h2>
						</div>
						
						<div class="col-sm-6 col-md-3 wow animated fadeInUp card">
								<img src="./img/member-1.jpg" alt="Ahmad" style="width:100%">
								<h2>أحمد الصالح</h2>
								<p class="title">المدير التنفيذي والمؤسس</p>
								<p>مطور تطبيقات</p>
								<div style="margin: 24px;">
								  <a href="https://twitter.com/ahmad_alsaleh96" target="_blank"><i class="fa fa-twitter" style="margin: 10px;"></i></a>  
								  <a href="https://www.linkedin.com/in/ahmad-alsaleh96/" target="_blank"><i class="fa fa-linkedin" style="margin: 10px;"></i></a>  
								  <a href="https://www.facebook.com/alsaleh.anas.ahmad" target="_blank"><i class="fa fa-facebook" style="margin: 10px;"></i></a> 
								</div>
						</div>
						
						<div class="col-sm-6 col-md-3 wow animated fadeInUp card" data-wow-delay="0.4s">
								<img src="./img/member-2.jpg" alt="Taha" style="width:100%">
								<h2>طه كسار</h2>
								<p class="title">المسؤول التقني ومطور تطبيقات</p>
								<p>مطور ومدرب برمجي</p>
								<div style="margin: 24px;">
								  <a href="https://twitter.com/KassarTaha" target="_blank"><i class="fa fa-twitter" style="margin: 10px;"></i></a>  
								  <a href="https://www.linkedin.com/in/taha-kassar-508225177" target="_blank"><i class="fa fa-linkedin" style="margin: 10px;"></i></a>  
								  <a href="https://www.facebook.com/taha.kassar.12" target="_blank"><i class="fa fa-facebook" style="margin: 10px;"></i></a> 
								</div>
						</div>
						
						<div class="col-sm-6 col-md-3 wow animated fadeInUp card" data-wow-delay="0.8s">
								<img src="./img/member-3.jpg" alt="Victor" style="width:100%">
								<h2>فيكتور بدر</h2>
								<p class="title">مدير الشبكات
									<br>
									وأنظمة التشغيل</p>
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
								<h2>تابعنا على مواقع التواصل</h2>
								<p>روابط صفحاتنا على مواقع التواصل الاجتماعي</p>
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
							<h2>تواصل معنا</h2>
							<p>اترك رسالة</p>
						</div>
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post" dir="rtl">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="اسمك..." required>
								</div>
								<div class="input-field">
									<input type="phone" name="emailOrMobile" class="form-control" placeholder="البريد اﻹلكتروني أو الهاتف..." required>
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="العنوان..." required>
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="الرسالة..." required></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">إرسال</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight" dir="rtl">
							<address class="contact-details">
								<h3>صفحتنا على الفيسبوك</h3>						
								<!--
								<p><i class="fa fa-pencil"></i> Startup Tech<span>  سوريا، اللاذقية</span><span>  مدينة الحفة</span></p><br>
								<p><i class="fa fa-phone"></i>    الهاتف: 843 730 41 963+</p>
								<p><i class="fa fa-whatsapp"></i> الجوال والواتساب: 087 323 934 963+</p>
								<p><i class="fa fa-envelope"></i>  alsaleh.a.ahmad@gmail.com</p>
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
						<a id="copyText" href="https://www.facebook.com/Crazy.ITer/" target="_blank">حقوق النشر Crazy ITer تصميم وتطوير &copy;</a>
						<br>
						<a class="btn btn-blue btn-effect" href="#body">الرجوع ﻷعلى</a>
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