@extends('layout.layout')

@section('title') Our Services @endsection

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
							<li><a href="{{url('/')}}">Home</a></li>
								<li>
								<a href="{{url('work')}}">Projects</a>
									
								</li>
								<li class="active"><a href="{{url('services')}}">Services</a></li>
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
			   	<li style="background-image: url(architect/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>What We Do?</h2>
				   					<h1>Our Services</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
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
					<div class="col-md-4 animate-box">
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
					<div class="col-md-4 animate-box">
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
					<div class="col-md-4 animate-box">
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
					<div class="col-md-4 animate-box">
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
					<div class="col-md-4 animate-box">
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
												<img src="('architect/images/person1.jpg" alt="user">
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