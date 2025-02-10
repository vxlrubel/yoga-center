@extends('layouts.app')
@push('title', 'Trainer Details | Yoga Center')

@section('content')

	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Trainers details</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Trainers Section -->
	<section class="trainer-details-section spad overflow-hidden">
		<div class="container">
			<div class="trainer-details">
				<div class="trainer-info">
					<div class="td-left">
						<img src="assets/img/classes/1.jpg" alt="">
						<div class="td-social">
							<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
							<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
							<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
							<a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="td-right">
						<h3>Olivia Richards</h3>
						<h6>Yoga Trainer</h6>
						<ul>
							<li><strong>Experience:</strong><p>8 years</p></li>
							<li><strong>Email:</strong><p>emily-walker@example.com</p></li>
							<li><strong>Biography:</strong><p>Certification from the National Institute of Sports Medicine (NASM) USA. 25 years of sports training in the United States, Germany, Hong Kong, Malaysia, Singapore, and now Vietnam at California Fitness & Yoga Centers.</p></li>
						</ul>
						<a href="javascript:void(0)" class="site-btn sb-gradient">View classes</a>
					</div>
				</div>
				<div class="trainer-details-text">
					<h3>About Yoga</h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<ul>
						<li><i class="material-icons">check_circle</i>Gold Medal for International Yoga Championship 2012.</li>
						<li><i class="material-icons">check_circle</i>Silver Medal of All High Schools Championship and Indian Yoga Club in 2010.</li>
						<li><i class="material-icons">check_circle</i>Gold Medal for Jharkhand State Yoga Championship in 2007.</li>
						<li><i class="material-icons">check_circle</i>Gold Medal for East India Yoga Championship in 2005.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->

@endsection
