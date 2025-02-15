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


    <header class="clearfix position-relative" style="z-index: 10;">
        <div class="header-top border-bottom py-1 position-relative" style="z-index: 9999">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="d-flex align-items-center small">
                            <i class="material-icons" style="font-size: 1rem;">map</i>
                            <span class="ms-1">184 Main Collins Street</span>
                            <span class="mx-3">|</span>
                            <i class="material-icons" style="font-size: 1rem;">phone</i>
                            <span class="ms-1">(965) 436 3274</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row align-items-center">
                            <div class="col-8 col-lg-12">
                                <div class="d-flex align-items-center justify-content-lg-end gap-2">
                                    <div class="d-inline-flex gap-2">
                                        <a href="{{url('/login')}}" class="text-primary text-decoration-none">Login</a>
                                        <span class="text-primary">/</span>
                                        <a href="{{url('/register')}}" class="text-primary text-decoration-none">Register</a>
                                    </div>

                                    <div class="profile position-relative d-inline-flex align-items-center justify-content-end">
                                        <button class="profile-icon d-inline-flex border-0 rounded-circle p-0">
                                            <img src="{{asset('/assets/img/profile-placeholder.png')}}" alt="profile image">
                                        </button>
                                        <ul class="profile-dropdown list-unstyled p-2 m-0 position-absolute bg-white border shadow-sm">
                                            <li class="px-2"><a href="javascript:void(0)" class="text-decoration-none text-dark d-block py-1">Profile</a></li>
                                            <li class="px-2"><a href="javascript:void(0)" class="text-decoration-none text-dark d-block py-1">Edit Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-lg-none">
                                <div class="text-end">
                                    <button class="btn btn-menu-toggle border-0 shadow-none btn-sm rounded-0 d-inline-flex gap-1 align-items-center">
                                        <span>MENU</span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
                                        </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- mobile menu --}}
            <div class="position-absolute start-0 end-0 bg-white d-lg-none" id="mobileMenuParent">
                <div class="container-fluid py-3">
                    <ul class="mobile-menu p-0 list-unstyled m-0">
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
        </div>
        <div class="header-menu bg-transparent text-white">
            <div class="container-fluid h-100">
                <div class="d-flex align-items-center header-navbar h-100">
                    <div class="logo">
                        <a href="{{url('/')}}" class="logo-image">
                            <img src="{{asset('/assets/img/logo.png')}}" alt="logo image">
                        </a>
                    </div>
                    <div class="menu d-none d-lg-flex justify-content-center">
                        <ul class="p-0 list-unstyled m-0 d-flex gap-3 align-items-center px-3">
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
                    <div class="menu-last-item">
                        <div class="text-end">
                            <a href="{{url('/booknow')}}" class="btn btn-light text-dark btn-sm small text-uppercase py-2 rounded-pill px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
	<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('/assets/js/main.js')}}"></script>

    @stack('script')

	</body>
</html>
