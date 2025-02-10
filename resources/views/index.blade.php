@extends('layouts.app')

@section('content')

	<!-- Hero Section -->
	<section class="hero-section">
		<div class="hero-social-warp">
			<div class="hero-social">
				<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
				<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
				<a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
		<div class="arrow-buttom">
			<img src="{{asset('/assets/img/icons/arrows-buttom.png')}}" alt="images">
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-style-1 text-center">
					<img src="{{asset('/assets/img/hero-slider/1.png')}}" alt="images">
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-style-2">
					<div class="container-fluid h-100">
						<div class="row h-100">
							<div class="col-lg-6 h-100 d-none d-lg-flex align-items-xl-end align-items-lg-center">
								<div class="hs-img">
									<img src="{{asset('/assets/img/hero-slider/2.png')}}" alt="images">
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center">
								<div class="hs-text-warp">
									<div class="hs-text">
										<h2>Get slim and toned with yoga</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="site-btn sb-white">Register now</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- About Section -->
	<section class="about-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="assets/img/icons/logo-icon.png" alt="">
				<h2>Welcome to Ahana</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img src="assets/img/about.png" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-item">
						<div class="ai-icon">
							<img src="assets/img/icons/about-1.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Full Rejuvenation</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					<div class="about-item">
						<div class="ai-icon">
							<img src="assets/img/icons/about-2.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Extension of Spring</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem a cusantium doloremque.</p>
						</div>
					</div>
					<div class="about-item">
						<div class="ai-icon">
							<img src="assets/img/icons/about-3.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Against Aging</h4>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
						</div>
					</div>
					<a href="javascript:void(0)" class="site-btn sb-gradient mt-5">explore more</a>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section end -->

	<!-- Classes Section -->
	<section class="classes-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="assets/img/icons/logo-icon.png" alt="">
				<h2>Popular Classes</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="classes-slider owl-carousel">
				<div class="classes-item">
					<div class="ci-img">
						<img src="assets/img/classes/1.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4><a href="classes-details.html" class="text-decoration-none">Artistic Yoga</a></h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="assets/img/classes/author/1.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="javascript:void(0)" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
				<div class="classes-item">
					<div class="ci-img">
						<img src="assets/img/classes/2.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4>Traditional Hatha</h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="assets/img/classes/author/2.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="javascript:void(0)" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
				<div class="classes-item">
					<div class="ci-img">
						<img src="assets/img/classes/3.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4>Yoga Therapy</h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="assets/img/classes/author/3.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="javascript:void(0)" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
				<div class="classes-item">
					<div class="ci-img">
						<img src="assets/img/classes/2.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4>Traditional Hatha</h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="assets/img/classes/author/2.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="javascript:void(0)" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Classes Section end -->

	<!-- Trainer Section -->
	<section class="trainer-section overflow-hidden spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="assets/img/icons/logo-icon.png" alt="">
				<h2>Our Trainer Yoga</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="trainer-slider owl-carousel">
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="assets/img/trainer/1.png" alt="">
						</div>
						<div class="ti-text">
							<h4>Lori Kennedy</h4>
							<h6>Yoga Trainer</h6>
							<p>Yoga & Therapy Certificate of Uttarakhand University Sanskrit</p>
							<div class="ti-social">
								<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="assets/img/trainer/2.png" alt="">
						</div>
						<div class="ti-text">
							<h4>Lori Kennedy</h4>
							<h6>Yoga Trainer</h6>
							<p>Yoga & Therapy Certificate of Uttarakhand University Sanskrit</p>
							<div class="ti-social">
								<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="assets/img/trainer/3.png" alt="">
						</div>
						<div class="ti-text">
							<h4>Rebecca James</h4>
							<h6>Yoga Trainer</h6>
							<p>Yoga & Therapy Certificate of Uttarakhand University Sanskrit</p>
							<div class="ti-social">
								<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
								<a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainer Section end -->

	<!-- Review Section -->
	<section class="review-section spad set-bg" data-setbg="img/review-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 m-auto">
					<div class="review-slider owl-carousel">
						<div class="review-item">
							<div class="ri-img">
								<img src="assets/img/classes/author/1.jpg" alt="">
							</div>
							<div class="ri-text text-white">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
								<h4>Denise Thomas</h4>
								<h6>Designer</h6>
							</div>
						</div>
						<div class="review-item">
							<div class="ri-img">
								<img src="assets/img/classes/author/2.jpg" alt="">
							</div>
							<div class="ri-text text-white">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
								<h4>Denise Thomas</h4>
								<h6>Designer</h6>
							</div>
						</div>
						<div class="review-item">
							<div class="ri-img">
								<img src="assets/img/classes/author/3.jpg" alt="">
							</div>
							<div class="ri-text text-white">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
								<h4>Denise Thomas</h4>
								<h6>Designer</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review Section end -->

	<!-- Event Section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="assets/img/icons/logo-icon.png" alt="">
				<h2>Upcoming Events</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<div class="event-video">
						<img src="assets/img/video.jpg" alt="">
						<a href="https://www.youtube.com/watch?v=vgv-hzTl5FA" class="video-popup"><img src="assets/img/icons/play.png" alt=""></a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="assets/img/event/1.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4><a href="javascript:void(0)" class="text-decoration-none">Lole White Yoga Tour</a></h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
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
			</div>
		</div>
	</section>
	<!-- Event Section end -->


	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="assets/img/icons/logo-icon.png" alt="">
				<h2>Pricing plans</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item begginer">
						<div class="pi-top">
							<h4>Begginer</h4>
						</div>
						<div class="pi-price">
							<h3>$59</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="javascript:void(0)" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item entermediate">
						<div class="pi-top">
							<h4>Entermediate</h4>
						</div>
						<div class="pi-price">
							<h3>$99</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="javascript:void(0)" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item advanced">
						<div class="pi-top">
							<h4>Advanced</h4>
						</div>
						<div class="pi-price">
							<h3>$159</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="javascript:void(0)" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item professional">
						<div class="pi-top">
							<h4>Professional</h4>
						</div>
						<div class="pi-price">
							<h3>$199</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="javascript:void(0)" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing Section end -->

	<!-- Sign up Section -->
	<section class="signup-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33245.297803635964!2d-73.76987401620775!3d40.704774398815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1575866843291!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe></div>
				</div>
				<div class="col-lg-6">
					<div class="singup-text">
						<h3>Sign Up for Our Classes</h3>
						<p>To be invited to the nearest Cali center and get free physical advice to learn more about the program.</p>
					</div>
					<form class="singup-form">
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
								<a href="javascript:void(0)" class="site-btn sb-gradient">Get started</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Sign up Section end -->

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
@endsection
