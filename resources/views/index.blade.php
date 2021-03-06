@extends('layout.layout')

@section('title') Home @endsection

@section('content')

<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
						<div id="colorlib-logo"><a href="{{url('/')}}">JackMan</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
								<li>
                                <a href="{{url('work')}}">Projects</a>
									
                                   
								</li>
                            <li><a href="{{url('services')}}">Services</a></li>
                            <li><a href="{{url('blog')}}">Blog</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(architect/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Providing all Kinds of Construction Services</h2>
				   					<h1>Constructing Spaces For You</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(architect/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Building Your Solid</h2>
				   					<h1>High Class Building</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(architect/images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>We Design All Kinds of Buildings</h2>
				   					<h1>We Build Buildings Professionally</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   		
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-4 animate-box colorlib-heading animate-box">
						<span class="sm">Welcome!</span>
						<h2><span class="thin">Secrets of Success</span> <span class="thick">of Our Projects</span></h2>
					</div>
					<div class="col-md-4 col-md-pull-4 animate-box">
						<div class="box text-center">
							<span class="num">25</span>
							<span class="yr">Years</span>
							<span class="thin">Experience</span>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<p>JackMan Ltd is a leading provider of design and engineering services. All of JackMans’ engineering and design service offerings are designed to support client buy-in at each stage of a project’s development</p>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-project">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">Works</span>
						<h2><span class="thin">Our Done</span> <span class="thick">Projects</span></h2>
						<p>JackMans’ senior construction staff, with over 145 years of trade experience, oversees our full service electrical construction, maintenance, instrumentation, and communication services.</p>
					<p><a href="{{url('work')}}">View All Projects <i class="icon-arrow-right3"></i></a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-12 animate-box">
								<div class="owl-carousel owl-carousel2 project-wrap">
									<div class="item">
										<a href="architect/images/building-1.jpg" class="project image-popup-link" style="background-image: url(architect/images/building-1.jpg);">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>1</small></span> California Mega Mall</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="architect/images/building-2.jpg" class="project image-popup-link" style="background-image: url(architect/images/building-2.jpg);">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>2</small></span> Commercial Building</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="architect/images/building-3.jpg" class="project image-popup-link" style="background-image: url(architect/images/building-3.jpg);">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>3</small></span> Miami Private Apartment</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(architect/images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-skyline"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
						<span class="colorlib-counter-label">Projects</span>
					</div>
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-engineer"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
						<span class="colorlib-counter-label">Employees</span>
					</div>
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
						<span class="colorlib-counter-label">Constructor</span>
					</div>
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-worker"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
						<span class="colorlib-counter-label">Partners</span>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">What We Do?</span>
						<h2><span class="thin">We Offer</span> <span class="thick">Services</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="wrap">
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-engineer"></i>
										</span>
										<div class="desc">
											<h3>General Constructing</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-engineering"></i>
										</span>
										<div class="desc">
											<h3>Building Modeling</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-skyline"></i>
										</span>
										<div class="desc">
											<h3>Design Build</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-crane"></i>
										</span>
										<div class="desc">
											<h3>Construction Services</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-sketch"></i>
										</span>
										<div class="desc">
											<h3>Pre-Construction Design</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-conveyor"></i>
										</span>
										<div class="desc">
											<h3>Construction Management</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">Recent Blog</span>
						<h2><span class="thin">Read</span> <span class="thick">Our Blog</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					<p><a href="{{url('blog')}}">View All Blog Post <i class="icon-arrow-right3"></i></a></p>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="wrap">
								<div class="blog-entry animate-box">
									<a href="blog.html" class="blog-img" style="background-image: url(architect/images/blog-1.jpg);"></a>
									<div class="desc">
										<span>&mdash; 20 Jan, 2017 </span>
										<h2><a href="blog.html">Construction was awarded with “The Best Construction Company” prize</a></h2>
									</div>
								</div>
								<div class="blog-entry animate-box">
									<a href="blog.html" class="blog-img" style="background-image: url(architect/images/blog-2.jpg);"></a>
									<div class="desc">
										<span>&mdash; 20 Jan, 2017 </span>
										<h2><a href="blog.html">New Doublered Residence Facility Occupied and Second to Begin this Month</a></h2>
									</div>
								</div>
								<div class="blog-entry animate-box">
									<a href="blog.html" class="blog-img" style="background-image: url(architect/images/blog-3.jpg);"></a>
									<div class="desc">
										<span>&mdash; 20 Jan, 2017 </span>
										<h2><a href="blog.html">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-8 animate-box colorlib-heading animate-box">
						<span class="sm">Team</span>
						<h2><span class="thin">Our</span> <span class="thick">Engineers</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
					<div class="col-md-8 col-md-pull-4">
						<div class="row">
							<div class="wrap-2">
								<div class="col-md-6 text-center animate-box">
									<div class="staff" class="staff-img" style="background-image: url(architect/images/person1.jpg);">
										<a href="#" class="desc">
											<h3>John Miller</h3>
											<span>Lead Engineer</span>
											<div class="parag">
												<p>Even the all-powerful Pointing has no control about the blind texts</p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-6 text-center animate-box">
									<div class="staff" class="staff-img" style="background-image: url(architect/images/person2.jpg);">
										<a href="#" class="desc">
											<h3>Brian Smith</h3>
											<span>Architect</span>
											<div class="parag">
												<p>Even the all-powerful Pointing has no control about the blind texts</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">Testimonial</span>
						<h2><span class="thin">What Our</span> <span class="thick">Client Says</span></h2>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row animate-box">
							<span class="icon"><i class="icon-quotes-left"></i></span>
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="architect/images/person1.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Andrew Field</span>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="architect/images/person2.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Mark Bubble</span>
												<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="architect/images/person3.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Adam Smith</span>
												<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
						<h2>Sign up for a Newsletter</h2>
						<div class="row">
							<div class="col-md-7">
								<p>Enter your email address to get the latest news, events and special offers delivered right to your inbox.</p>
							</div>
							<div class="col-md-5">
								<form class="form-inline qbstp-header-subscribe">
									<div class="row">
										<div class="col-md-12 col-md-offset-0">
											<div class="form-group">
												<input type="text" class="form-control" id="email" placeholder="Enter your email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Company</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 col-md-push-1">
						<h4>Recent Blog</h4>
						<ul class="colorlib-footer-links">
							<li>
								<span>&mdash; 20 Jan, 2017</span>
								<a href="#">Results of Annual General Meeting</a>
							</li>
							<li>
								<span>&mdash; 19 Jan, 2017</span>
								<a href="#">Construction was awarded with “The Best Construction Company” prize</a>
							</li>
							<li>
								<span>&mdash; 18 Jan, 2017</span>
								<a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-md-push-1 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Our Company</a></li>
								<li><a href="#"><i class="icon-check"></i> Certification</a></li>
								<li><a href="#"><i class="icon-check"></i> Our services</a></li>
								<li><a href="#"><i class="icon-check"></i> Career</a></li>
								<li><a href="#"><i class="icon-check"></i> Core Values</a></li>
								<li><a href="#"><i class="icon-check"></i> Company History</a></li>
								<li><a href="#"><i class="icon-check"></i> FAQ</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved.  <br>This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></small>
    					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

@endsection