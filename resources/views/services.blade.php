<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="KHFNdKTiytTFRFdafuPemcKDITXwEID6MuyFbuGcMKU" />

		<title>Professional Web & Mobile Development Services | OpenLluna</title>
		<meta name="description" content="Boost your business with OpenLluna's professional web and mobile development services. From initial design to final deployment, we cover it all. See how we can help!">

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
				<a href="{{ route('home') }}" class="logo pointer-large animsition-link">
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
					<a  href="{{ route('home') }}" class="pointer-large nav-link">
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
					<a href="{{ route('about') }}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active">
					<a href="{{ route('services') }}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn active" data-text="Services">Services</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a   href="{{ route('portfolio') }}" class="pointer-large nav-link">
						<span class="nav-btn" data-text="Portfolio">Portfolio</span>
					</a>
					
					<!-- dropdown start -->
					<!-- <ul class="dropdown">
						<li class="nav-box">
							<a href="portfolio.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Standard">Standard</span>
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
						</li>
					</ul>dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a  href="{{ route('blog') }}" class="pointer-large nav-link">
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
					<a href="{{ route('contact') }}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Contact">Contact</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/double-exposure-2390185_1920.jpg);"></div>
				</li><!-- nav-box end -->
			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->
	    
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-2">
				<!-- page-head-bg -->
				<div class="page-head-bg overlay-loading2" style="background-image: url(assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);"></div>
				
				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<!-- column start -->
						<div class="six-columns six-offset">
							<div class="content-left-margin-40">
								<h2 class="large-title-bold">
									<span class="load-title-fill tr-delay03" data-text="Expert Digital">Expert Digital</span><br>
									<span class="load-title-fill tr-delay04" data-text="Solutions Crafted">Solutions Crafted</span><br>
									<span class="load-title-fill tr-delay05" data-text="For You">For You</span>
								</h2>
								<p class="p-style-bold-up text-height-20 d-flex-wrap">
									<span class="load-title-fill tr-delay08" data-text="Innovative • Reliable • Strategic">Innovative • Reliable • Strategic</span>
								</p>
							</div>
						</div><!-- column end -->
						<!-- column end -->
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
			
			<!-- section start -->
			<section id="down" class="dark-bg-1 top-bottom-padding-120">
				<!-- container start -->
				<div class="container text-center">
					<h2 class="large-title title-fill" data-animation="title-fill-anim" data-text="What We Do">What We Do</h2>
				</div><!-- container end -->
				
				<!-- top-padding-90 start -->
				<div class="top-padding-90">
					<!-- container start -->
					<div class="container">
						<div class="services-bg" style="background-image:url(assets/images/services/s1.jpg)"></div>	
					</div><!-- container end -->
					
					<!-- flex-container start -->
					<div class="container small top-padding-60 flex-container response-999 services-content">
						<!-- column start -->
						<div class="four-columns">
							<div data-animation-container class="content-right-margin-20">
								<h2 data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Digital Innovation and Web Excellence</h2>
								<h3 class="title-style text-color-4">
									<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01" data-animation="overlay-anim2">Harness the Power</span><br>
									<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2"> of Cutting-Edge Technology</span><br>
									<!-- <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03" data-animation="overlay-anim2">3 wolf moon</span> -->
								</h3>
								<ul class="list-dots">
  <li>
    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Web Development</p>
  </li>
  <li>
    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">Mobile Application Creation</p>
  </li>
  <li>
    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">E-Commerce Solutions</p>
  </li>
  <li>
    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay07" data-animation="fade-anim">AI Enhanced Technologies</p>
  </li>
  <li>
    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay08" data-animation="fade-anim">Enterprise Management Systems</p>
  </li>
  <li>
    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay09" data-animation="fade-anim">Ongoing Maintenance & Support</p>
  </li>
</ul>

							</div>
						</div><!-- column end -->
						<!-- column start -->
						<div class="eight-columns">
							<div class="content-left-margin-20">
								<p class="p-style-large text-color-5 fade-anim-box tr-delay04" data-animation="fade-anim">
									
								Maximize your online potential with Open Lluna's bespoke web development 
								and mobile application services. Our expert team specializes in creating dynamic e-commerce websites, 
								integrating AI solutions to streamline user experience, and developing comprehensive enterprise management systems.
								 We're committed to elevating your online presence through strategic innovation and robust digital solutions, 
								backed by continuous maintenance and support for enduring performance.
								</p>
							</div>
						</div><!-- column end -->
					</div><!-- flex-container end -->
				</div><!-- top-padding-90 end -->
				
				<!-- top-padding-90 start -->
				<div class="top-padding-90">
					<!-- container start -->
					<div class="container">
						<div class="services-bg" style="background-image:url(assets/images/services/s2.jpg)"></div>	
					</div><!-- container end -->
					
					<!-- flex-container start -->
					<div class="container small top-padding-60 flex-container response-999 services-content">
					<!-- column start -->
						<div class="four-columns">
						<div data-animation-container class="content-right-margin-20">
							<h2 data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Digital Transformation</h2>
							<h3 class="title-style text-color-4">
							<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01" data-animation="overlay-anim2">Process Automation</span><br>
							<!-- <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2">Efficient Workflows</span><br>
							<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03" data-animation="overlay-anim2">Seamless Integration</span> -->
							</h3>
							<ul class="list-dots">
							<li>
								<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Workflow Digitization</p>
							</li>
							<li>
								<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">Custom Software Solutions</p>
							</li>
							<li>
								<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">Data Analysis & Reporting</p>
							</li>
							<li>
								<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay07" data-animation="fade-anim">Automated Invoice Systems</p>
							</li>
							<li>
								<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay08" data-animation="fade-anim">Business Process Automation</p>
							</li>
							<li>
								<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay09" data-animation="fade-anim">Cloud-Based Solutions</p>
							</li>
							</ul>
						</div>
						</div><!-- column end -->

						<!-- column start -->
						<div class="eight-columns">
						<div class="content-left-margin-20">
							<p class="p-style-large text-color-5 fade-anim-box tr-delay04" data-animation="fade-anim">
							In an era where efficiency is king, Open Lluna excels in transforming manual workflows into streamlined digital systems. Our custom solutions are tailored to convert traditional paper-based tasks and complex Excel functions into automated, cloud-based applications. This digital leap enhances accuracy, accelerates productivity, and enables seamless access to business insights. Whether it's crafting intuitive platforms for invoice generation or integrating sophisticated data analysis tools, we are dedicated to propelling your business into the future of digital enterprise.
							</p>
						</div>
						</div><!-- column end -->

					</div><!-- flex-container end -->
				</div><!-- top-padding-90 end -->
				
				<!-- top-padding-90 start -->
				<div class="top-padding-90">
					<!-- container start -->
					<div class="container">
						<div class="services-bg" style="background-image:url(assets/images/services/s3.jpg)"></div>	
					</div><!-- container end -->
					
					<!-- flex-container start -->
					<div class="container small top-padding-60 flex-container response-999 services-content">
						<!-- column start -->
<div class="four-columns">
  <div data-animation-container class="content-right-margin-20">
    <h2 data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Global Business Expansion</h2>
    <h3 class="title-style text-color-4">
      <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01" data-animation="overlay-anim2">Reach New Markets</span><br>
      <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2">Enhance Online Presence</span><br>
      <!-- <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03" data-animation="overlay-anim2">Boost Traffic & Sales</span> -->
    </h3>
    <ul class="list-dots">
      <li>
        <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">SEO Optimization</p>
      </li>
      <li>
        <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">E-Commerce Development</p>
      </li>
      <li>
        <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">Digital Marketing Strategies</p>
      </li>
      <li>
        <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay07" data-animation="fade-anim">Targeted Advertising</p>
      </li>
      <li>
        <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay08" data-animation="fade-anim">User Experience Design</p>
      </li>
      <li>
        <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay09" data-animation="fade-anim">Data-Driven Insights</p>
      </li>
    </ul>
  </div>
</div><!-- column end -->
<!-- column start -->
<div class="eight-columns">
  <div class="content-left-margin-20">
    <p class="p-style-large text-color-5 fade-anim-box tr-delay04" data-animation="fade-anim">
		<br>
      Elevate your business to a global audience with Open Lluna. We craft digital strategies that break geographical barriers, allowing you to sell and advertise worldwide. Through meticulous SEO optimization, we enhance your visibility, driving more traffic and conversions to your online platforms. With Open Lluna, scaling your business is in expert hands.
    </p>
  </div>
</div><!-- column end -->

					</div><!-- flex-container end -->
				</div><!-- top-padding-90 end -->
			</section><!-- section end -->
			
			<!-- progress-container start -->
			<section class="dark-bg-1 flex-min-height-box progress-container">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- flex-container start -->
					<div class="flex-container container top-bottom-padding-120">
						<!-- column start -->
						<div class="six-columns bottom-padding-60">
							<div class="progress-bg overlay-anim-box2" data-animation="overlay-anim2" style="background-image:url(assets/images/services/skills.jpg)"></div>
						</div><!-- column end -->
						<!-- column start -->
						<div class="six-columns">
							<div class="content-left-margin-40">
								
								
								
								
								<!-- medium-title start -->
								<h2 data-animation-container class="medium-title text-center">
									<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Our skills">Our skills</span>
								</h2><!-- medium-title end -->
								
								
								
								<div class="top-margin-30" data-animation-container>
									<!-- Web Development progress-box start -->
<div class="progress-box">
    <div data-animation-child class="p-letter-style title-fill" data-animation="title-fill-anim" data-text="Web Development">Web Development</div>
    <div data-animation-child class="p-letter-style title-fill tr-delay02 progress-counter" data-animation="title-fill-anim" data-text="90%">90%</div>
    <div class="progress-zero" data-progress="90%">
        <div class="progress-full" data-animation-child data-animation="slide-progress"></div>
        <div class="progress-full progress-full-red" data-animation-child data-animation="slide-progress" data-animation-delay="200ms"></div>
    </div>
</div><!-- Web Development progress-box end -->

<!-- Mobile Applications progress-box start -->
<div class="progress-box">
    <div data-animation-child class="p-letter-style title-fill tr-delay01" data-animation="title-fill-anim" data-text="Mobile Applications">Mobile Applications</div>
    <div data-animation-child class="p-letter-style title-fill tr-delay03 progress-counter" data-animation="title-fill-anim" data-text="85%">85%</div>
    <div class="progress-zero" data-progress="85%">
        <div class="progress-full" data-animation-child data-animation="slide-progress" data-animation-delay="100ms"></div>
        <div class="progress-full progress-full-red" data-animation-child data-animation="slide-progress" data-animation-delay="300ms"></div>
    </div>
</div><!-- Mobile Applications progress-box end -->

<!-- E-commerce Websites progress-box start -->
<div class="progress-box">
    <div data-animation-child class="p-letter-style title-fill tr-delay02" data-animation="title-fill-anim" data-text="E-commerce Websites">E-commerce Websites</div>
    <div data-animation-child class="p-letter-style title-fill tr-delay04 progress-counter" data-animation="title-fill-anim" data-text="92%">92%</div>
    <div class="progress-zero" data-progress="92%">
        <div class="progress-full" data-animation-child data-animation="slide-progress" data-animation-delay="200ms"></div>
        <div class="progress-full progress-full-red" data-animation-child data-animation="slide-progress" data-animation-delay="400ms"></div>
    </div>
</div><!-- E-commerce Websites progress-box end -->

<!-- AI Solutions progress-box start -->
<div class="progress-box">
    <div data-animation-child class="p-letter-style title-fill tr-delay03" data-animation="title-fill-anim" data-text="AI Solutions">AI Solutions</div>
    <div data-animation-child class="p-letter-style title-fill tr-delay05 progress-counter" data-animation="title-fill-anim" data-text="88%">88%</div>
    <div class="progress-zero" data-progress="88%">
        <div class="progress-full" data-animation-child data-animation="slide-progress" data-animation-delay="300ms"></div>
        <div class="progress-full progress-full-red" data-animation-child data-animation="slide-progress" data-animation-delay="500ms"></div>
    </div>
</div><!-- AI Solutions progress-box end -->

<!-- Enterprise Management Systems progress-box start -->
<div class="progress-box">
    <div data-animation-child class="p-letter-style title-fill tr-delay04" data-animation="title-fill-anim" data-text="Enterprise Management Systems">Enterprise Management Systems</div>
    <div data-animation-child class="p-letter-style title-fill tr-delay06 progress-counter" data-animation="title-fill-anim" data-text="93%">93%</div>
    <div class="progress-zero" data-progress="93%">
        <div class="progress-full" data-animation-child data-animation="slide-progress" data-animation-delay="400ms"></div>
        <div class="progress-full progress-full-red" data-animation-child data-animation="slide-progress" data-animation-delay="600ms"></div>
    </div>
</div><!-- Enterprise Management Systems progress-box end -->

<!-- Maintenance & Support progress-box start -->
<div class="progress-box">
    <div data-animation-child class="p-letter-style title-fill tr-delay05" data-animation="title-fill-anim" data-text="Maintenance & Support">Maintenance & Support</div>
    <div data-animation-child class="p-letter-style title-fill tr-delay07 progress-counter" data-animation="title-fill-anim" data-text="95%">95%</div>
    <div class="progress-zero" data-progress="95%">
        <div class="progress-full" data-animation-child data-animation="slide-progress" data-animation-delay="500ms"></div>
        <div class="progress-full progress-full-red" data-animation-child data-animation="slide-progress" data-animation-delay="700ms"></div>
    </div>
</div><!-- Maintenance & Support progress-box end -->

								</div>
							</div>
						</div><!-- column end -->
					</div><!-- flex-container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- progress-container end -->
			
			<!-- section start -->
			<section class="light-bg-1" data-midnight="black">
				<!-- container start -->
				<div class="container bottom-padding-60 top-padding-120">
					<!-- text-center start -->
					<div data-animation-container class="text-center">
						<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">OUR SERVICES</h2><br>
						<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">We Create Best Products</p>
					</div><!-- text-center end -->
					
					<!-- flex-container start -->
					<div class="flex-container response-999 top-padding-60">
						<!-- column start -->
						<!-- Web Development section start -->
						<div class="four-columns bottom-padding-60">
						<a data-animation-container href="#" class="content-right-margin-20 hover-box pointer-large d-block light-bg-2">
							<!-- Consider replacing with an appropriate image representing Web Development -->
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box" data-animation="overlay-anim2">
							<img class="hover-img" src="assets/images/services/web.jpg" alt="Web Development">
							</div>
							<div class="expertise content-padding-l-r-20 content-padding-bottom-20">
							<h3 data-animation-child class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Web Development</h3><br>
							<p data-animation-child class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Crafting responsive and innovative websites that provide seamless user experiences across all devices.</p>
							</div>
						</a>
						</div><!-- Web Development section end -->

						<!-- Mobile Applications section start -->
						<div class="four-columns bottom-padding-60">
						<!-- Consider replacing with an appropriate image representing Mobile Applications -->
						<a data-animation-container href="#" class="content-left-right-margin-10 hover-box pointer-large d-block light-bg-2">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box" data-animation="overlay-anim2">
							<img class="hover-img" src="assets/images/services/mobile.jpg" alt="Mobile Applications">
							</div>
							<div class="expertise content-padding-l-r-20 content-padding-bottom-20">
							<h3 data-animation-child class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Mobile Applications</h3><br>
							<p data-animation-child class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Developing sleek, user-friendly mobile applications that engage your customers and enhance your digital presence.</p>
							</div>
						</a>
						</div><!-- Mobile Applications section end -->

						<!-- E-commerce Websites section start -->
						<div class="four-columns bottom-padding-60">
						<!-- Consider replacing with an appropriate image representing E-commerce Websites -->
						<a data-animation-container href="#" class="content-left-margin-20 hover-box pointer-large d-block light-bg-2">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box" data-animation="overlay-anim2">
							<img class="hover-img" src="assets/images/services/ecom.jpg" alt="E-commerce Websites">
							</div>
							<div class="expertise content-padding-l-r-20 content-padding-bottom-20">
							<h3 data-animation-child class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">E-commerce Websites</h3><br>
							<p data-animation-child class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Creating comprehensive e-commerce platforms with customized functionalities to boost your online sales.</p>
							</div>
						</a>
						</div><!-- E-commerce Websites section end -->

												<!-- column start -->
											<!-- AI Solutions section start -->
						<div class="four-columns bottom-padding-60">
						<!-- Consider replacing with an appropriate image representing AI Solutions -->
						<a data-animation-container href="#" class="content-right-margin-20 hover-box pointer-large d-block light-bg-2">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box" data-animation="overlay-anim2">
							<img class="hover-img" src="assets/images/services/ai.jpg" alt="AI Solutions">
							</div>
							<div class="expertise content-padding-l-r-20 content-padding-bottom-20">
							<h3 data-animation-child class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">AI Solutions</h3><br>
							<p data-animation-child class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Innovating with AI to automate processes, enhance data analytics, and personalize user experiences.</p>
							</div>
						</a>
						</div><!-- AI Solutions section end -->

						<!-- Enterprise Management Systems section start -->
						<div class="four-columns bottom-padding-60">
						<!-- Consider replacing with an appropriate image representing Enterprise Management Systems -->
						<a data-animation-container href="#" class="content-left-right-margin-10 hover-box pointer-large d-block light-bg-2">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box" data-animation="overlay-anim2">
							<img class="hover-img" src="assets/images/services/management.jpg" alt="Enterprise Management Systems">
							</div>
							<div class="expertise content-padding-l-r-20 content-padding-bottom-20">
							<h3 data-animation-child class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Enterprise Management Systems</h3><br>
							<p data-animation-child class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Building robust systems for efficient management and operation of enterprise resources and processes.</p>
							</div>
						</a>
						</div><!-- Enterprise Management Systems section end -->

						<!-- Maintenance & Support section start -->
						<div class="four-columns bottom-padding-60">
						<!-- Consider replacing with an appropriate image representing Maintenance & Support -->
						<a data-animation-container href="#" class="content-left-margin-20 hover-box pointer-large d-block light-bg-2">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box" data-animation="overlay-anim2">
							<img class="hover-img" src="assets/images/services/maintenance.jpg" alt="Maintenance & Support">
							</div>
							<div class="expertise content-padding-l-r-20 content-padding-bottom-20">
							<h3 data-animation-child class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Maintenance & Support</h3><br>
							<p data-animation-child class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Ensuring the reliability of your digital solutions with our comprehensive maintenance and dedicated support services.</p>
							</div>
						</a>
						</div><!-- Maintenance & Support section end -->

					</div><!-- flex-container end -->
				</div><!-- container end -->
			</section><!-- section end -->
			
			<!-- section start -->
			<section class="dark-bg-2">
				<!-- container start -->
				<div class="container small top-bottom-padding-120">
					<!-- medium-title start -->
					<h2 data-animation-container class="medium-title">
						<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Fine Folks">Fine Folks</span><br>
						<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="We’ve Worked">We’ve Worked</span><br>
						<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="With">With</span>
					</h2><!-- medium-title end -->
					
					<!-- client-list start -->
					<ul class="client-list d-flex-wrap top-padding-60">
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/3eabc7ab-8bae-44f0-8389-0169389e38c2.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/1c4bfb0e-0b9f-4c19-ba5c-113fb0714514.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/6b9fcb90-c595-432a-a97c-fcd318b74c04.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/699301b6-83ff-47f8-ad46-a6b871e79293.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/7d1fe64f-fbd7-4e5f-896d-6d79c91f29bf.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/858e2e28-faae-441c-bd9c-5c490c72b562.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/8b587214-bdcb-4d74-bb61-2480d1d15aa7.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/4b983c9a-759d-4921-ba60-dbbcaa702ee5.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/8f65e211-cd41-46dc-8c1d-ba228ac36eb9.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/9c30d6d6-6af9-4fb1-bed3-e5ea4df4c281.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/4731da4b-b2fb-4c10-aee7-c89484a5d473.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/69cb9e61-d0b8-4420-b8bd-454c9b9e1dc1.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/492492b2-b7d9-4648-a164-f530ecd6321a.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/9a6c570f-d03a-4806-9a30-dddc648707d9.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/b908b85c-f837-4dba-80cf-d961d6fcad29.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/6e63c653-6997-42c6-b788-28e9fb6d15b7.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/d5f831cf-3fb0-490b-aadc-3591c8b64156.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/2ed0436b-e3ea-48aa-85ca-755de0719c9a.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/d51e13e6-1320-4227-8bc8-c36aaa82dffd.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/aed14647-8ecf-4fef-8274-737d79a7ede1.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pointer-large d-block">
								<div class="brand-box">
									<img src="assets/images/clients/d383cf8d-abee-4290-810d-a965f6c0fa6c.png" alt="Brand" class="hover-opac-img">
									<img src="assets/images/clients/7f7b6ede-3a3e-4e17-af25-f881c0121d63.png" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li class="empty-spot-box">
							<a data-animation-container href="#" class="pointer-large p-style-bold-up empty-spot d-block">
								<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="This spot">This spot</span>
								<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="Awaits">Awaits</span>
								<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="You">You</span>
							</a>
						</li>
					</ul><!-- client-list end -->
				</div><!-- container end -->
			</section><!-- section end -->
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
							<li><a class="pointer-large animsition-link small-title-oswald hover-color " href="{{route('about')}}">About</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="{{route('services')}}">Services</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('portfolio')}}">Portfolio</a></li>
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
									<a href="https://www.linkedin.com/company/openlluna/" class="flip-btn pointer-small" data-text="LinkedIn">Linkedin</a>
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