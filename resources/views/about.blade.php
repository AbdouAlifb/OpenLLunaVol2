<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="KHFNdKTiytTFRFdafuPemcKDITXwEID6MuyFbuGcMKU" />
		<title>About Us - Our Story & Team | OpenLluna</title>
		<meta name="description" content="Learn about OpenLluna’s journey, mission, and the passionate team behind our innovative tech solutions. Get to know us better!">

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
					<ul class="dropdown">
						<!-- <li class="nav-box">
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
						</li> -->
					</ul><!-- dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/pexels-photo-1806031.jpeg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active">
					<a href="{{ route('about') }}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn active" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{ route('services') }}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Services">Services</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a  href="{{ route('portfolio') }}" class="pointer-large nav-link">
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
					<a   href="{{ route('blog') }}" class="pointer-large nav-link">
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
				<div class="page-head-bg overlay-loading2" style="background-image: url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg);"></div>
				
				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
				  			<div class="content-left-margin-40">
					  			<h2 class="overlay-loading2 tr-delay03 medium-title red-color">Welcome Open lluna</h2>
				  				<h3 class="large-title-bold text-color-4">
									<span class="overlay-loading2 overlay-light-bg-1 tr-delay04">Best Solutions</span><br>
									<span class="overlay-loading2 overlay-light-bg-1 tr-delay05">& ideas for</span><br>
									<span class="overlay-loading2 overlay-light-bg-1 tr-delay06">You Business</span>
								</h3>
								<p class="d-flex-wrap top-margin-20 text-color-4">
									<span class="small-title-oswald text-height-20 fade-loading tr-delay07 top-margin-10">Creative team</span>
									<span class="small-title-oswald text-height-20 fade-loading tr-delay08 top-margin-10">Innovation ideas</span>
									<span class="small-title-oswald text-height-20 fade-loading tr-delay09 top-margin-10">Best services</span>
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
			
			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-1 flex-min-height-box about-page">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="four-columns">
								<div class="content-right-margin-20">
									<h2 data-animation-child class="title-style title-fill" data-animation="title-fill-anim" data-text="Who We Are">Who We Are</h2>
								</div>
							</div>
							<div class="eight-columns">
								<div class="content-left-margin-10">
									<p data-animation-child class="p-style-large text-color-5 fade-anim-box tr-delay01" data-animation="fade-anim">
									Open Lluna embodies the cutting edge of technology and design, expertly
									 crafting tailored software solutions that propel businesses forward. We are recognized for our dedication to innovation, 
									commitment to excellence, and for pioneering the next wave of digital evolution.		
								</p>
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns top-padding-60">
								<div class="content-right-margin-20">
									<h6 data-animation-child class="small-title-oswald title-fill tr-delay02" data-animation="title-fill-anim" data-text="EXPERTISE & INNOVATION">EXPERTISE & INNOVATION</h6>
									<ul class="list-dots">
										<li>
											<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03" data-animation="fade-anim">Technical Mastery</p>
										</li>
										<li>
											<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Design Excellence</p>
										</li>
									</ul>
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns top-padding-60">
								<div class="content-left-right-margin-10">
									<h6 data-animation-child class="small-title-oswald title-fill tr-delay02" data-animation="title-fill-anim" data-text="CLIENT SUCCESS STORIES">CLIENT SUCCESS STORIES</h6>
									<ul class="list-dots">
										<li>
											<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03" data-animation="fade-anim">Satisfied Partnerships</p>
										</li>
										<li>
											<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Service Excellence</p>
										</li>
									</ul>
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns top-padding-60">
								<div class="content-left-margin-20">
									<h6 data-animation-child class="small-title-oswald title-fill tr-delay02" data-animation="title-fill-anim" data-text="Awwwards">Awwwards</h6>
									<ul class="list-dots">
										<li>
											<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03" data-animation="fade-anim">Best creative agency</p>
										</li>
										<li>
											<p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Best Services</p>
										</li>
									</ul>
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->
			
			<!-- section start -->
			<section class="dark-bg-2">
				<!-- flex-container start -->
				<div class="flex-container container bottom-padding-60 top-padding-120">
					<!-- column start -->
					<div class="four-columns bottom-padding-60">
						<div data-animation-container class="content-right-margin-20 team-title-box">
							<h2 data-animation-child class="small-title-oswald overlay-anim-box2 red-color" data-animation="overlay-anim2">Our Best Experts</h2>
							<h3 class="title-style text-color-4">
								<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01" data-animation="overlay-anim2">Team You</span><br>
								<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2">Want to</span><br>
								<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03" data-animation="overlay-anim2">Work With</span>
							</h3>
						</div>
					</div><!-- column end -->
					<!-- column start -->
					<div class="four-columns bottom-padding-60">
						<a data-animation-container href="#" class="content-left-right-margin-10 hover-box pointer-large d-block">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-1 team-img-box" data-animation="overlay-anim2">
								<img class="hover-img" src="assets/images/team/1.jpg" alt="Balanchaev Balancha">
							</div>
							<div class="team-content">
								<h4 data-animation-child class="small-title-oswald text-color-4 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Ali Abdou</h4><br>
								<p data-animation-child class="p-letter-style text-color-4 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Founder and lead Developper </p>
							</div>
						</a>
					</div><!-- column end -->
					<!-- column start -->
					<div class="four-columns bottom-padding-60">
						<a data-animation-container href="#" class="content-left-margin-20 hover-box pointer-large d-block">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-1 team-img-box" data-animation="overlay-anim2">
								<img class="hover-img" src="assets/images/team/2.jpg" alt="Balanchaev Balancha">
							</div>
							<div class="team-content">
								<h4 data-animation-child class="small-title-oswald text-color-4 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Mohammed Abdou</h4><br>
								<p data-animation-child class="p-letter-style text-color-4 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Ai Expert developper </p>
							</div>
						</a>
					</div><!-- column end -->
					<!-- column start -->
					<div class="four-columns bottom-padding-60">
						<a data-animation-container href="#" class="content-right-margin-20 hover-box pointer-large d-block">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-1 team-img-box" data-animation="overlay-anim2">
								<img class="hover-img" src="assets/images/team/3.jpg" alt="Balanchaev Balancha">
							</div>
							<div class="team-content">
								<h4 data-animation-child class="small-title-oswald text-color-4 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Adam Amaach</h4><br>
								<p data-animation-child class="p-letter-style text-color-4 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Web Designer</p>
							</div>
						</a>
					</div><!-- column end -->
					<!-- column start -->
					<!-- <div class="four-columns bottom-padding-60">
						<a data-animation-container href="#" class="content-left-right-margin-10 hover-box pointer-large d-block">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-1 team-img-box" data-animation="overlay-anim2">
								<img class="hover-img" src="assets/images/team/4.jpg" alt="Balanchaev Balancha">
							</div>
							<div class="team-content">
								<h4 data-animation-child class="small-title-oswald text-color-4 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Leila York</h4><br>
								<p data-animation-child class="p-letter-style text-color-4 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">Manager</p>
							</div>
						</a>
					</div>column end -->
					<!-- column start -->
					<!-- <div class="four-columns bottom-padding-60">
						<a data-animation-container href="#" class="content-left-margin-20 hover-box pointer-large d-block">
							<div data-animation-child class="overlay-anim-box2 overlay-dark-bg-1 team-img-box" data-animation="overlay-anim2">
								<img class="hover-img" src="assets/images/team/5.jpg" alt="Balanchaev Balancha">
							</div>
							<div class="team-content">
								<h4 data-animation-child class="small-title-oswald text-color-4 hover-content fade-anim-box tr-delay01" data-animation="fade-anim">Balancha Balanchaevich</h4><br>
								<p data-animation-child class="p-letter-style text-color-4 hover-content fade-anim-box tr-delay02" data-animation="fade-anim">web designer</p>
							</div>
						</a>
					</div>column end -->
				</div><!-- flex-container end -->
			</section><!-- section end -->
			
			<!-- section start -->
			<section class="light-bg-1 top-bottom-padding-120" data-midnight="black">
				<!-- container start -->
				<div data-animation-container class="container small bottom-padding-60">
					<div class="text-center">
						<h2 data-animation-child class="large-title text-color-1 overlay-anim-box2" data-animation="overlay-anim2">We are creative</h2>
					</div>
					<div class="top-margin-30">
						<p data-animation-child class="small-title-oswald text-color-2 text-height-20 fade-anim-box tr-delay01" data-animation="fade-anim">
						At Open Lluna, creativity isn't just a word—it's our mission and the heart of everything we do. 
						Our team is dedicated to pushing the boundaries of web and mobile development, ensuring each project 
						is a masterpiece of functionality and design. Driven by passion and precision,
						 we transform complex problems into elegant digital solutions.
						</p>
						<p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay02" data-animation="fade-anim">
						From ideation to deployment, our approach is built on a foundation of creativity and technological expertise.
							 We bring your vision to life with 
						innovative strategies that are as smart as they are aesthetically pleasing.
					</p>
						<p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay03" data-animation="fade-anim">
						Your business is unique, and your digital presence should be too. We specialize in custom web development, mobile app creation, and AI-driven solutions that not only look great but also deliver on performance.
						</p>
					</div>
				</div><!-- container end -->
				
				<!-- about-slider start -->
				<div class="about-slider bottom-padding-60">
					<!-- swiper-wrapper start -->
					<!-- <div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="assets/images/about/adult-brainstorming-business-1437908.jpg" alt="about">
						</div>
						<div class="swiper-slide">
							<img src="assets/images/about/apple-computer-desk-159807.jpg" alt="about">
						</div>
						<div class="swiper-slide">
							<img src="assets/images/about/apple-brainstorming-business-908288.jpg" alt="about">
						</div>
						<div class="swiper-slide">
							<img src="assets/images/about/adult-bear-beautiful-792535.jpg" alt="about">
						</div>
						<div class="swiper-slide">
							<img src="assets/images/about/hands-indoors-man-1204001.jpg" alt="about">
						</div>
					</div>swiper-wrapper end -->
					
					<!-- swiper-button-next start -->
					<div class="swiper-button-next">
					  	<div class="slider-arrow-next-box">
						  	<span class="slider-arrow-next"></span>
					  	</div>
				  	</div><!-- swiper-button-next end -->
				  	<!-- swiper-button-prev start -->
				  	<div class="swiper-button-prev">
					  	<div class="slider-arrow-prev-box">
						  	<span class="slider-arrow-prev"></span>
					  	</div>
				  	</div><!-- swiper-button-prev end -->
				</div><!-- about-slider end -->
			</section><!-- section end -->
			
			<!-- price-table start -->
			<section class="price-table top-padding-120 bottom-padding-30 dark-bg-1">
				<!-- container start -->
				<div class="container small">
					<!-- text-center start -->
					<div data-animation-container class="text-center">
						<h2 data-animation-child class="large-title text-height-10 text-color-4 overlay-anim-box2" data-animation="overlay-anim2">Our Pricing</h2><br>
						<p data-animation-child class="fade-anim-box tr-delay02 text-color-4 xsmall-title-oswald top-margin-5" data-animation="fade-anim">We Provide the Best Prices for Business</p>
					</div><!-- text-center end -->
					
					<!-- flex-container start -->
					<div class="flex-container top-padding-60">
						<!-- column start -->
						<!-- <div class="four-columns bottom-padding-90">
							<div class="content-right-margin-20 dark-bg-2 price-details price-details-margins">
								<div class="pricing-title">
									<h3 class="small-title-oswald text-color-0">Basic plan</h3>
								</div>
								<h4 class="price-content">
	                                <span class="large-title light-text text-color-4">$100</span><br>
	                                <span class="small-title-oswald light-text text-color-4">Per month</span>
								</h4>
                                <ul data-animation-container class="price-list">
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay01" data-animation="fade-anim">Cred iceland</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay02" data-animation="fade-anim">quinoa palo</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03" data-animation="fade-anim">santo polaroid</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Vinyl copper</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">mug live-edge</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">master cleanse</span>
									</li>
								</ul>
                                <div class="price-btn-box pointer-large">
                                	<a href="#" class="price-btn">Sign up</a>
								</div>
							</div>
						</div>column end -->
						<!-- column start -->
						<!-- <div class="four-columns bottom-padding-90">
							<div class="content-left-right-margin-10 dark-bg-2 price-details">
								<div class="pricing-title price-title-paddings">
									<h3 class="small-title-oswald text-color-0">Standard plan</h3>
								</div>
								<h4 class="price-content">
									<span class="large-title light-text text-color-4">$120</span><br>
	                                <span class="small-title-oswald light-text text-color-4">Per month</span>
								</h4>
                                <ul data-animation-container class="price-list">
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay01" data-animation="fade-anim">Cred iceland</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay02" data-animation="fade-anim">quinoa palo</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03" data-animation="fade-anim">santo polaroid</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Vinyl copper</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">mug live-edge</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">master cleanse</span>
									</li>
								</ul>
							    <div class="price-btn-box price-btn-bg pointer-large">
                                	<a href="#" class="price-btn">Sign up</a>
								</div>
							</div>
						</div>column end -->
						<!-- column start -->
						<!-- <div class="four-columns bottom-padding-90">
							<div class="content-left-margin-20 dark-bg-2 price-details price-details-margins">
								<div class="pricing-title">
									<h3 class="small-title-oswald text-color-0">Extended plan</h3>
								</div>
								<h4 class="price-content">
	                                <span class="large-title light-text text-color-4">$150</span><br>
	                                <span class="small-title-oswald light-text text-color-4">Per month</span>
								</h4>
                                <ul data-animation-container class="price-list">
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay01" data-animation="fade-anim">Cred iceland</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay02" data-animation="fade-anim">quinoa palo</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03" data-animation="fade-anim">santo polaroid</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">Vinyl copper</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">mug live-edge</span>
									</li>
									<li>
										<span data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">master cleanse</span>
									</li>
								</ul>
								<div class="price-btn-box pointer-large">
                                	<a href="#" class="price-btn">Sign up</a>
								</div>  
							</div>
						</div>column end -->
					</div>
					<!-- flex-container end -->
				</div><!-- container end -->
			</section><!-- price-table end -->
			
			<!-- light-bg-2 start -->
			<div class="light-bg-2 top-bottom-padding-120" data-midnight="black">
				<!-- testimonials-slider start -->
				<div class="testimonials-slider container small">
					<!-- swiper-wrapper start -->
					<div class="swiper-wrapper">
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/adult-beanie-black-background-1529350.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Open lluna's bespoke web app has revolutionized our industrial operations. Exceptional UI/UX and ongoing support have been pivotal to our success.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
									Faical <span class="text-color-2">CEO of - 2STM Maroc </span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-428340.jpeg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">The custom management system from Open lluna streamlined our school's operations, elevating efficiency beyond traditional methods.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Souad El barg <span class="text-color-2">Founder of - Brega Mode Fashion School </span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-764529.jpeg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Collaborating with Open lluna for our multivendor platform has been a seamless experience, with their team providing an intuitive and comprehensive system.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Abdellatif <span class="text-color-2">Marketplace Leader</span>
							</div>
						</div><!-- slide end -->

						<!-- slide start -->
						<!-- <div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-809433.jpeg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Chambray enamel pin synth shabby chic palo santo. Franzen 90's man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct trade, food truck tacos biodiesel craft beer. Af hammock listicle vape banjo echo park meditation organic cred subway tile. Echo park DIY.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Balanchaev Balancha, <span class="text-color-2">Investor</span>
							</div>
						</div>slide end -->
						<!-- slide start -->
						<!-- <div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-894156.jpeg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw denim swag drinking vinegar. Yuccie jianbing bespoke retro, photo booth salvia hella meh post-ironic cornhole tacos plaid.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Fred Kinney, <span class="text-color-2">Designer</span>
							</div>
						</div> --> 
						<!-- slide end -->

					</div><!-- swiper-wrapper end -->
					
					<!-- swiper-pagination -->
					<div class="swiper-pagination"></div>
				</div><!-- testimonials-slider end -->
			</div><!-- light-bg-2 end -->
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
							<li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="{{route('about')}}">About</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('services')}}">Services</a></li>
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