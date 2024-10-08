<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="KHFNdKTiytTFRFdafuPemcKDITXwEID6MuyFbuGcMKU" />

		<title>Open lluna </title>
		<link rel="icon" type="image/png" href="assets/images/logo/ol.png">

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles -->	
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="assets/images/logo/logo-loader.png" alt="logo">
	    </div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
	    <!-- header start -->
	    <header class="fixed-header">
		    <!-- header-flex-box start -->
			<div class="header-flex-box">
			    <!-- logo start -->
				<a href="{{route('home')}}" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-white" src="assets/images/logo/logo-white.png" alt="logo">
				        <img class="logo-black" src="assets/images/logo/logo-black.png" alt="logo">
			        </div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end -->
		
		<!-- nav-container start -->	
		<nav class="nav-container dark-bg-1">
			<!-- nav-logo start -->
			<div class="nav-logo">
				<img src="assets/images/logo/logo-white.png" alt="logo">
			</div><!-- nav-logo end -->
			
			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>
			
			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->
			
			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1">
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a href="{{route('home')}}" class="pointer-large nav-link">
						<span class="nav-btn" data-text="Home">Home</span>
					</a>
					
					<!-- dropdown start -->
					<!-- <ul class="dropdown">
						<li class="nav-box">
							<a href="index.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Slider Home">Slider Home</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="video_home.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Video Bg">Video Bg</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="home_fullscreen.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Fullscreen Bg">Fullscreen Bg</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="home_particles.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Particles">Particles</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="home_typewriter.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Typewriter">Typewriter</span>
							</a>
						</li>
					</ul>dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/pexels-photo-1806031.jpeg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('about')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('services')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Services">Services</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active dropdown-open">
					<a href="{{route('portfolio')}}" class="pointer-large nav-link">
						<span class="nav-btn active" data-text="Portfolio">Portfolio</span>
					</a>
					
					<!-- dropdown start -->
					<!-- <ul class="dropdown">
						<li class="nav-box">
							<a href="portfolio.html" class="animsition-link pointer-large">
								<span class="nav-btn active" data-text="Standard">Standard</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_full_screen.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="FullScreen">FullScreen</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_slider.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Slider 1">Slider 1</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_columns_slider.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Slider 2">Slider 2</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="portfolio_filter.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Filter">Filter</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="project.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Single project">Single project</span>
							</a>
						</li> -->
					<!-- </ul> -->
					<!-- dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a  href="{{route('blog')}}" class="pointer-large nav-link">
						<span class="nav-btn" data-text="Blog">Blog</span>
					</a>
					
					<!-- dropdown start -->
					<!-- <ul class="dropdown">
						<li class="nav-box">
							<a href="blog.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Blog">Blog</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="single_post.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Single post">Single post</span>
							</a>
						</li>
					</ul>dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/beautiful-black-close-up-1689731.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('contact')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Contact">Contact</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/double-exposure-2390185_1920.jpg);"></div>
				</li><!-- nav-box end -->
			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->
	    
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-1">
				<!-- page-head-bg -->
				<div class="page-head-bg overlay-loading2" style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
				
				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
						  <div class="content-left-margin-40">
								<h2 class="large-title-bold">
									<span class="load-title-fill tr-delay03" data-text="Advanced Solutions"> Advanced Solutions</span><br>
									<span class="load-title-fill tr-delay04" data-text="For Web & Mobile"> For Web & Mobile</span><br>
									<span class="load-title-fill tr-delay05" data-text="Development"> Development</span>
								</h2>
								<p class="p-style-bold-up text-height-20 d-flex-wrap">
									<span class="load-title-fill tr-delay08" data-text="Innovative Projects">Innovative Projects</span>
									<span class="load-title-fill tr-delay09" data-text="Customized Services"> Customized Services</span>
									<span class="load-title-fill tr-delay10" data-text="Global Impact"> Global Impact</span>
								</p>
							</div>

			  			</div><!-- column end -->
		  			</div><!-- flex-container end -->
	  			</div><!-- flex-min-height-inner end -->
	  			
	  			<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- page-head end -->
			
			<!-- light-bg-1 start -->
			<div id="down" class="light-bg-1 bottom-padding-30 top-padding-120" data-midnight="black">
				<!-- container start -->
				<div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">Recent Works</h2><br>
					<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">Our Expertise in Action</p>
				</div><!-- container end -->
				
				<!-- bottom-padding-90 start -->
				<section class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Tech Showcase</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Industrial Engineering and</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">Machining Services</span><br>
											<!-- <span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">brooklyn messeng</span> -->
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">
										Our partnership with 2STM-Maroc led to the creation of a dynamic digital platform,
										 showcasing their 30 years of excellence in the industrial field. Focused on precision machining and mechanical works, 
										 2STM-Maroc combines traditional craftsmanship with modern technology, offering services in welding, machining of all steel types,
										  and plastic materials. Our digital solution for them reflects their commitment to quality and their diverse industrial capabilities.
										 Discover the synergy of experience and innovation at <a href="https://2stm-maroc.com/">2STM-Maroc.</a> 
										</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/pexels-photo-1619654.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</section><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<section class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/audio-cassette-cassette-tape-1626481.jpg)"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">School Management System</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Innovative Education Platform</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">Fashion School Automation</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">Seamless Enrollment & Payment</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">
										Developed a bespoke multi-school management system tailored for a prestigious fashion institute. The system streamlines the entire enrollment process, monthly fee management, and calendar scheduling, ensuring a smooth operation. Its advanced features include record-keeping, automated billing, and integrated communication tools, leading to enhanced administrative efficiency and elevated student engagement.
										</p>										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</section><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<section class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">E-commerce Solution</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Dynamic Product Management</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">All-in-One Dashboard</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">Multi-Category Sales</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">
										We engineered a robust e-commerce system designed for seamless online retailing across multiple product categories. Equipped with a fully integrated admin dashboard, this platform empowers sellers with dynamic control over inventory, user management, product categorization, and analytics. The system is built for scale, offering streamlined operations and an optimized shopping experience to drive sales and user engagement.
										
									</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/blur-close-up-equipment-1034651.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</section><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				
				
				<!-- bottom-padding-90 start -->
				
				<!-- bottom-padding-90 start -->
				
				<!-- bottom-padding-90 start -->
				
				
				<!-- bottom-padding-90 start -->
				<!-- <section class="bottom-padding-90"> -->
					<!-- portfolio-content start -->
					<!-- <div class="portfolio-content flex-min-height-box"> -->
						<!-- portfolio-content-inner start -->
						<!-- <div class="portfolio-content-inner flex-min-height-inner"> -->
							<!-- flex-container start -->
							<!-- <div class="flex-container reverse container small"> -->
								<!-- column start -->
								<!-- <div class="six-columns top-padding-60"> -->
									<!-- <a href="project.html" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link"> -->
										<!-- <div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/buttons-console-dark-1637438.jpg)"></div> -->
									<!-- </a> -->
								<!-- </div>column end -->
								<!-- column start -->
								<!-- <div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Branding</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">organic activated</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">charcoal vape</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">viral ennui</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Tote bag cornhole pork belly swag, cronut hoodie snackwave 90's messenger bag pour-over disrupt chartreuse. Vape ugh cardigan hell of. Vaporware umami master cleanse neutra, chartreuse flexitarian lo-fi selvage hella hoodie freegan gentrify. 8-bit air plant umami asymmetrical franzen semiotics before.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div> -->
								<!-- </div>column end -->
							<!-- </div>flex-container end -->
						<!-- </div>portfolio-content-inner end -->
					<!-- </div>portfolio-content end -->
				<!-- </section>bottom-padding-90 end -->
			</div>
			
			
			<div class="text-center top-bottom-padding-120 red-bg" data-midnight="black">	
				<a href="#" class="pointer-large overlay-btn-box">
					<span class="overlay-btn" data-text="loading more">loading more</span>
				</a>
			</div>
		</main><!-- animsition-overlay end -->
		
		<!-- footer start -->
		<footer class="footer dark-bg-1">
			<!-- flex-container start -->
			<div class="flex-container container top-bottom-padding-90">
				<!-- column start -->
				<div class="two-columns bottom-padding-60">
					<div class="content-right-margin-10 footer-center-mobile">
						<img class="footer-logo" src="assets/images/logo/logo-white.png" alt="logo">
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="three-columns bottom-padding-60">
					<div class="content-left-right-margin-10">
						<ul class="footer-menu text-color-4">
							<li><a class="pointer-large animsition-link small-title-oswald hover-color " href="{{route('home')}}">Home</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('about')}}">About</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('services')}}">Services</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="{{route('portfolio')}}">Portfolio</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="">Blog</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="four-columns bottom-padding-60">
					<div class="content-left-right-margin-10 footer-center-mobile">
						<ul class="footer-information text-color-4">
							<li><i class="far fa-envelope"></i><a href="#" class="xsmall-title-oswald">ali.abdoufb@gmail.com</a></li>
							<li><i class="fas fa-mobile-alt"></i><a href="#" class="xsmall-title-oswald">+212 70812-9950</a></li>
							<!-- <li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17">PO Box 223158 Oliver Street<br><span>East Victoria 2006 UK</span></a></li> -->
						</ul>
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="three-columns bottom-padding-60">
					<div class="content-left-margin-10">
						<ul class="footer-social">
							<li>
								<div class="flip-btn-box">
									<a href="https://www.instagram.com/open.lluna/?hl=fr" class="flip-btn pointer-small" data-text="Instagram">Instagram</a>
								</div>
							</li>
							<!-- <li>
								<div class="flip-btn-box">
									<a href="#" class="flip-btn pointer-small" data-text="Facebook">Facebook</a>
								</div>
							</li> -->
								
							<li>
								<div class="flip-btn-box">
									<a href="https://www.linkedin.com/company/openlluna/" class="flip-btn pointer-small" data-text="Behance">Linkedin</a>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- column end -->
				<!-- column start -->
				<div class="twelve-columns">
					<p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright 2024  <a href="www.openlluna.com">Open lluna </a></p>
				</div><!-- column end -->
			</div><!-- flex-container end -->
		</footer><!-- footer end -->
		
		<!-- scripts --> 
        <script src="assets/js/plugins.js"></script> 
        <script src="assets/js/main.js"></script>
	</body>
</html>