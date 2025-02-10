@extends('layouts.app')

@push('title', 'Our Events | Yoga Center')

@section('content')

	<!-- Page top Section -->
	<section class="page-top-section page-sp set-bg" data-setbg="assets/img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>All Events</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<div class="container">
		<div class="event-filter-warp">
			<div class="row">
				<div class="col-xl-3">
					<p>Showing 8 classes of 30 classes</p>
				</div>
				<div class="col-xl-9">
					<form class="event-filter-form">
						<div class="ef-item">
							<input type="text" placeholder="Event Date" class="event-date">
							<i class="material-icons">event_available</i>
						</div>
						<div class="ef-item">
							<input type="text" placeholder="Search">
							<i class="material-icons">search</i>
						</div>
						<div class="ef-item">
							<input type="text" placeholder="Location">
							<i class="material-icons">map</i>
						</div>
						<button class="site-btn sb-gradient">Find Event</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Events Section -->
	<section class="events-page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/1.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4><a href="event-details.html">Lole White Yoga Tour</a></h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/2.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Free Yoga Madrid</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/3.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>One Love Dallas</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/4.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Get on Your Mat</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/5.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Solstice in Times Square</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/6.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Athleta Mind Over</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/7.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Mega-Yoga Classes</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/8.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Yoga Festivals</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="site-pagination pt-3">
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#"><i class="material-icons">keyboard_arrow_right</i></a>
			</div>
		</div>
	</section>
	<!-- Events Section end -->

@endsection
