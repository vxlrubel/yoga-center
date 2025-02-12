<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<title>@stack('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="Yoga Center is a Laravel-based web application designed for managing yoga classes, schedules, and users. It offers secure authentication, a user-friendly interface">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="{{asset('/assets/img/favicon.jpg')}}" type="image/x-icon">

    @yield('metacontent')


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/assets/css/nice-select.css')}}"/>
	<link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('/assets/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}"/>
    @stack('style')

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section user-select-none">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-5 d-none d-md-block p-0">
					<div class="header-info">
						<i class="material-icons">map</i>
						<p>184 Main Collins Street</p>
					</div>
					<div class="header-info">
						<i class="material-icons">phone</i>
						<p>(965) 436 3274</p>
					</div>
				</div>
				<div class="col-md-7">
					<div class="header-info small d-flex align-items-center gap-2 justify-content-md-end">
						<a href="{{url('/login')}}" class="text-primary text-decoration-none">Login</a>
                        <span class="text-primary">/</span>
						<a href="{{url('/register')}}" class="text-primary text-decoration-none">Register</a>


                        {{-- if user login --}}
                        {{-- <div class="profile position-relative d-inline-flex align-items-center justify-content-end">
                            <button class="profile-icon d-inline-flex border-0 rounded-circle p-0">
                                <img src="{{asset('/assets/img/profile-placeholder.png')}}" alt="profile image">
                            </button>
                            <ul class="profile-dropdown list-unstyled p-2 m-0 position-absolute bg-white">
                                <li class="px-2"><a href="javascript:void(0)" class="text-decoration-none text-dark d-block py-1">Profile</a></li>
                                <li class="px-2"><a href="javascript:void(0)" class="text-decoration-none text-dark d-block py-1">Edit Profile</a></li>
                            </ul>
                        </div> --}}

					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<a href="index.html" class="site-logo">
				<img src="assets/img/logo.png" alt="">
			</a>
			<div class="hb-right">
				<div class="hb-switch">
                    <a href="{{url('/booknow')}}" class="btn btn-sm py-2 px-4 small text-uppercase btn-light rounded-pill">Book Now</a>
				</div>
			</div>
			<div class="container">
				<ul class="main-menu">
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ url('/classes') }}" class="{{ Request::is('classes') || Request::is('class-details') ? 'active' : '' }}">Classes</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/classes') }}" class="{{ Request::is('classes') ? 'active' : '' }}">Our Classes</a></li>
                            <li><a href="{{ url('/class-details') }}" class="{{ Request::is('class-details') ? 'active' : '' }}">Class Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/trainers') }}" class="{{ Request::is('trainers') || Request::is('trainer-details') ? 'active' : '' }}">Trainers</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/trainers') }}" class="{{ Request::is('trainers') ? 'active' : '' }}">Our Trainers</a></li>
                            <li><a href="{{ url('/trainer-details') }}" class="{{ Request::is('trainer-details') ? 'active' : '' }}">Trainer Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/events') }}" class="{{ Request::is('events') || Request::is('event-details') ? 'active' : '' }}">Events</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/events') }}" class="{{ Request::is('events') ? 'active' : '' }}">Our Events</a></li>
                            <li><a href="{{ url('/event-details') }}" class="{{ Request::is('event-details') ? 'active' : '' }}">Event Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') || Request::is('blog-details') ? 'active' : '' }}">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Our Blog</a></li>
                            <li><a href="{{ url('/blog-details') }}" class="{{ Request::is('blog-details') ? 'active' : '' }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>

			</div>
		</div>
	</header>
	<!-- Header Section end -->


    <main id="app">
        @yield('content')
    </main>


	<!-- Gallery Section -->
	<div class="gallery-section">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item">
				<img src="assets/img/gallery/1.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="assets/img/gallery/2.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="assets/img/gallery/3.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="assets/img/gallery/4.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="assets/img/gallery/5.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="assets/img/gallery/6.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="about-widget">
							<img src="assets/img/logo-3.png" alt="">
							<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
							<ul>
								<li><i class="material-icons">phone</i>(965) 436 3274</li>
								<li><i class="material-icons">email</i>yogacenter@domain.com</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-0 pl-lg-5">
						<h2 class="fw-title">Company</h2>
						<ul>
							<li><a href="javascript:void(0)">Online Education</a></li>
							<li><a href="javascript:void(0)">Gallery</a></li>
							<li><a href="javascript:void(0)">Special Issues</a></li>
							<li><a href="javascript:void(0)">Privacy Policy</a></li>
							<li><a href="{{ url('/contact') }}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">About Us</h2>
						<ul>
							<li><a href="javascript:void(0)">Our Vision</a></li>
							<li><a href="javascript:void(0)">Our Mission</a></li>
							<li><a href="javascript:void(0)">Meet The Team</a></li>
							<li><a href="javascript:void(0)">Introduce</a></li>
							<li><a href="javascript:void(0)">Customer Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget pl-0 pl-lg-5">
						<h2 class="fw-title">Open time</h2>
						<ul>
							<li><i class="material-icons">alarm_on</i>Mon - Fri:  6:30am - 07:45pm</li>
							<li><i class="material-icons">alarm_on</i>Sat - Sun:  8:30am - 05:45pm</li>
						</ul>
						<form class="infor-form">
							<input type="text" placeholder="Your Email">
							<button><img src="assets/img/icons/send.png" alt=""></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-social">
							<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
							<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
							<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
							<a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="col-md-8 text-md-right">
						<div class="copyright">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="javascript:void(0)" class="text-decoration-none">Rubel Mahmud</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="assets/img/icons/up-arrow.png" alt=""></div>

	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('/assets/js/vendor/jquery.min.js')}}" ></script>
	<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('/assets/js/main.js')}}"></script>

    @stack('script')

	</body>
</html>
