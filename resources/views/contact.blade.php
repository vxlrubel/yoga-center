@extends('layouts.app')
@push('title', 'Contact Us | Yoga Center')
@section('content')

	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Contact</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			<div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33245.297803635964!2d-73.76987401620775!3d40.704774398815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1575866843291!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe></div>
			<div class="row">
				<div class="col-lg-4">
					<div class="con-info">
						<h3>Visit the Yoga Ahana</h3>
						<ul>
							<li><i class="material-icons">map</i>184 Main Collins Street</li>
						</ul>
					</div>
					<div class="con-info">
						<h3>Message Us</h3>
						<ul>
							<li><i class="material-icons">map</i>(965) 436 3274</li>
							<li><i class="material-icons">map</i>ahana.yoga@gmail.com</li>
						</ul>
					</div>
					<div class="con-info">
						<h3>Opening Hours</h3>
						<ul>
							<li><i class="material-icons">map</i>Mon - Fri:  6:30am - 07:45pm</li>
							<li><i class="material-icons">map</i>Sat - Sun:  8:30am - 05:45pm</li>
						</ul>
					</div>
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="singup-form contact-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="First Name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Last Name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your Email">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone Number">
							</div>
							<div class="col-md-12">
								<textarea placeholder="Message"></textarea>
								<a href="#" class="site-btn sb-gradient">Send message</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->

@endsection
