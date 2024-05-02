<!DOCTYPE html>
<html lang="en">
    <head>
	<meta name="google-site-verification" content="KHFNdKTiytTFRFdafuPemcKDITXwEID6MuyFbuGcMKU" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Latest Insights & Articles | OpenLluna Blog</title>
		<meta name="description" content="Stay updated with the latest trends in technology and development with the OpenLluna blog. Read our latest articles, insights, and expert opinions here.">
		<link rel="icon" type="image/png" href="{{asset('assets/images/logo/ol.png')}}">

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles -->	
        <link href="{{asset ('assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="{{asset('assets/images/logo/logo-loader.png')}}" alt="logo">
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
				        <img class="logo-white" src="{{asset('assets/images/logo/logo-white.png')}}" alt="logo">
				        <img class="logo-black" src="{{asset('assets/images/logo/logo-black.png')}}" alt="logo">
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
				<img src="{{asset('assets/images/logo/logo-white.png')}}" alt="logo">
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
					
					
					<div class="nav-bg" style="background-image: url({{asset('assets/images/backgrounds/pexels-photo-1806031.jpeg')}});"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{ route('about') }}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="About">About</span>
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
					
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active dropdown-open">
					<a href="{{ route('blog') }}" class="pointer-large nav-link">
						<span class="nav-btn active" data-text="Blog">Blog</span>
					</a>
					
					
					
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
				<div class="page-head-bg overlay-loading2" style="background-image: url({{ asset('assets/images/blog/black-background-face-paint-group-2045035.jpg') }});"></div>				
				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
				  			<div class="content-left-margin-40">
				  				<h2 class="large-title">
									<span class="load-title-fill tr-delay03" data-text="{{ explode(' ', $post->title)[0] ?? '' }}">{{ explode(' ', $post->title)[0] ?? '' }}</span><br>
									<span class="load-title-fill tr-delay04" data-text="{{ explode(' ', $post->title)[1] ?? '' }}">{{ explode(' ', $post->title)[1] ?? '' }}</span><br>
									<span class="load-title-fill tr-delay05" data-text="{{ explode(' ', $post->title)[2] ?? '' }}">{{ explode(' ', $post->title)[2] ?? '' }}</span>
								</h2>
								<div class="d-flex-wrap top-margin-20">
									<a class="small-title-oswald text-height-20 pointer-large load-title-fill tr-delay06 top-margin-10" href="#" data-text="In: Technology">In: Technology </a>
									<a class="small-title-oswald text-height-20 pointer-large load-title-fill tr-delay07 top-margin-10" href="#" data-text="By: {{ $post->writer }}">By: {{ $post->writer }}</a>
									<a class="small-title-oswald text-height-20 pointer-large load-title-fill tr-delay08 top-margin-10" href="#" data-text="{{ $post->created_at->format('F d, Y') }}">{{ $post->created_at->format('F d, Y') }}</a>
								</div>
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

			<!-- single-post start -->
			<div id="down" class="single-post container bottom-padding-30 top-padding-120 light-bg-1" data-midnight="black">
				<!-- flex-container start -->
				<div class="flex-container">
					<!-- column start -->
					<div class="eight-columns">
						<!-- single-post-content start -->
						<div class="light-bg-2">
							<a class="photo-popup pointer-zoom" href="{{ Storage::url($post->main_image) }}">
								<img src="{{ Storage::url($post->main_image) }}" alt="title">
							</a>
							<!-- content-margin-block start -->
							<div class="content-margin-block">
								<!-- entry-content start -->
								<article class="entry-content">
								@php
									// Assuming the content is a single string and you want to split it around the quote
									$contentParts = explode($post->quote, $post->content);

									// Function to replace semicolons with line breaks
									function formatContent($content) {
										return str_replace(';', ';<br>', $content);
									}
								@endphp
								<h2 class="title-style text-color-1 top-margin-30 text-center">{{ $post->title }}</h2>
									<!-- Content before the quote -->
									@if(isset($contentParts[0]))
										<p class="p-style-medium text-color-1">{!! formatContent($contentParts[0]) !!}</p>
									@endif

									<!-- Quote Section -->
									<blockquote class="quote-content">
										<p class="p-style-bold text-justify text-color-4">{{ $post->quote }}</p>
									</blockquote>

									<!-- Content after the quote -->
									@if(isset($contentParts[1]))
										<p class="p-style-medium text-color-1">{!! formatContent($contentParts[1]) !!}</p>
									@endif

									<!-- Image Gallery if exists -->
									<div class="post-img-flex">
										@foreach($post->sub_images as $image)
											<a class="post-img-box photo-popup" href="{{ Storage::url($image) }}">
												<div class="pointer-zoom">
													<img src="{{ Storage::url($image) }}" alt="{{ $post->title }}">
												</div>
											</a>
										@endforeach
									</div>
								</article>

									
								<!-- post-share start -->
								<div class="post-share">
									<span class="xsmall-title-oswald text-color-2">share this article: </span>
									<ul class="post-share-social text-color-1">
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
								</div><!-- post-share end -->
							</div><!-- content-margin-block end -->
						</div><!-- single-post-content end -->
							
						<!-- post-prev-next start -->
						<div class="top-padding-90 bottom-padding-30">
							<h2 class="p-style-bold-up text-color-1">You might also like</h2>
							<!-- flex-container start -->
							<div class="flex-container response-999 top-margin-30">
								<!-- column start -->
								@foreach ($recentPosts as $post)

								<div class="four-columns bottom-padding-60">

									<div class="content-right-margin-20">
										<a href="{{ route('post.show', $post->id) }}" class="hover-box pointer-large animsition-link d-block light-bg-2">
											<div class="hidden-box">
												<img class="hover-img" src="{{ Storage::url($post->main_image) }}" alt="{{ $post->title }}">
											</div>
											<div class="content-padding-bottom-20 content-padding-l-r-20">
												<h3 class="xsmall-title-oswald text-color-1 hover-content top-margin-20">{{ $post->title }}</h3><br>
												<div class="p-style-xsmall text-color-2 text-height-10 hover-content tr-delay01 top-margin-5">{{ $post->created_at->format('F d, Y') }}</div>
											</div>
										</a>
									</div>

								</div><!-- column end -->
								@endforeach
								
							</div><!-- flex-container end -->
						</div><!-- post-prev-next end -->
							
						<!-- autor-bio start -->
						<div class="light-bg-2 autor-bio">
							<div class="content-margin-block autor-bio-flex">
								<!-- <div class="autor-img">
									<img src="assets/images/avatars/adolescent-beautiful-beauty-247878.jpg" alt="Author">
								</div> -->
								<div class="autor-bio-desc">
									<h5 class="small-title-oswald text-color-1">{{ $post->writer }}</h5>
									<p class="p-style-small text-height-15 text-color-1">{{ $post->description }}</p>
									<ul class="autor-social text-color-1">
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-vimeo"></i></a></li>
										<li><a class="pointer-small hover-color" href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div><!-- autor-bio end -->
							
					</div><!-- column end -->
					<!-- column start -->
					<aside class="four-columns bottom-padding-90">
						<!-- sidebar start -->
						<div class="sidebar content-left-margin-40 red-bg">
							<!-- sidebar-box start -->
							<div class="sidebar-box">
								<!-- form search start -->
								<div class="top-bottom-padding-90">
									<form class="form-search">
										<input type="text" class="search-control pointer-small" placeholder="Search...">
										<button class="search-btn pointer-large" type="button"><i class="fas fa-search"></i></button>
									</form>
								</div><!-- form search end -->
								
								
								<!-- recent posts start -->
								<div class="bottom-padding-90">
									<h4 class="p-style-bold-up red-color">recent posts</h4>
									<!-- recent posts content start -->
									<div class="top-margin-30">
										<!-- recent-entry start -->
										<!-- recent-entry start -->
										@foreach ($recentPosts as $post)
										<div class="recent-entry">
											<a href="{{ route('post.show', $post->id) }}" class="recent-entry-img-box pointer-large animsition-link">
												<img src="{{ Storage::url($post->main_image) }}" alt="{{ $post->title }}">
											</a>
											<div class="recent-desc">
												<a href="single_post.html?post_id={{ $post->id }}" class="xsmall-title-oswald text-color-4 pointer-large animsition-link">{{ $post->title }}</a>
												<div class="p-style-xsmall text-color-4 text-height-10 top-margin-5">{{ $post->created_at->format('F d, Y') }}</div>
											</div>
										</div><!-- recent-entry end -->
										@endforeach
										
									</div><!-- recent posts content end -->
								</div><!-- recent posts end -->
								
								<!-- widget-tags start -->
								<div class="widget-tags bottom-padding-90">
									<h4 class="p-style-bold-up red-color">tag clouds</h4>
									<ul class="d-flex-wrap top-margin-30 red-color">
									<li>
										<a href="#" class="pointer-small small-title-oswald">web development</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">mobile apps</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">e-commerce</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">AI solutions</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">enterprise software</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">cloud services</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">UX/UI design</a>
									</li>
									<li>
										<a href="#" class="pointer-small small-title-oswald">tech innovation</a>
									</li>
									</ul>
								</div><!-- widget-tags end -->
								
								<!-- widget-instagram start -->
								<!-- <div class="widget-instagram bottom-padding-90">
									<h4 class="p-style-bold-up red-color">Instagram</h4>
									<ul class="d-flex-wrap top-margin-30">
										<li>
											<div class="hover-box hidden-box">
												<a class="pointer-open d-block" href="#">
													<img class="hover-img" src="assets/images/blog/pexels-photo-573298.jpeg" alt="instagram post">
												</a>
											</div>
										</li>
										<li>
											<div class="hover-box hidden-box">
												<a class="pointer-open d-block" href="#">
													<img class="hover-img" src="assets/images/blog/pexels-photo-1334602.jpeg" alt="instagram post">
												</a>
											</div>
										</li>
										<li>
											<div class="hover-box hidden-box">
												<a class="pointer-open d-block" href="#">
													<img class="hover-img" src="{{asset('assets/images/blog/pexels-photo-1707728.jpeg')}}" alt="instagram post">
												</a>
											</div>
										</li>
										<li>
											<div class="hover-box hidden-box">
												<a class="pointer-open d-block" href="#">
													<img class="hover-img" src="{{asset('assets/images/blog/pexels-photo-1670770.jpeg')}}" alt="instagram post">
												</a>
											</div>
										</li>
									</ul>	 -->
								<!-- </div>widget-instagram end -->
							<!-- </div>sidebar-box end -->
						</div><!-- sidebar end -->
					</aside><!-- column end -->
				</div><!-- flex-container end -->
			</div><!-- single-post end -->
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
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('portfolio')}}">Portfolio</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="">Blog</a></li>
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
        <script src="{{asset('assets/js/plugins.js')}}"></script> 
        <script src="{{asset('assets/js/main.js')}}"></script>
	</body>
</html>