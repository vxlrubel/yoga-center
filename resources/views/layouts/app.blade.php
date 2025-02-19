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

    @include('layouts.navigation')

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
