<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>ArchiBazaar</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/theme-shop.css') }}">

        <!-- Demo CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/demos/demo-resume.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/vendor/circle-flip-slideshow/css/component.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('front/assets/css/skins/default.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('front/assets/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 header-body-bottom-border">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
                                            <h4 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a href="{{route('home')}}" style="color: #444;">logo</a></h4>
											{{-- <img alt="" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo-default-slim.png"> --}}
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('home') }}">
															Home
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="{{ route('professionalDetails') }}">
															Proffesionals
														</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="{{ route('projects') }}">
															Projects
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('products') }}">
															Products
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('articles') }}">
															Articles
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															<i class="icon-user text-color-dark font-weight-bold"></i>
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
                                        <div class="header-nav-features header-nav-features-no-border header-nav-features-md-show-border d-none d-md-inline-flex">
                                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                                    <form role="search" action="page-search-results.html" method="get">
                                                        <div class="simple-search input-group">
                                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                            <button class="btn" type="submit">
                                                                <i class="fas fa-search header-nav-top-icon"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
            <section class="section section-background section-height-4 customOverlay customOverlay-show customOverlay-op-9" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="front/assets/img/demos/business-consulting/slides/sliderdown.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative custom-sm-margin-bottom-1">
                            <img src="front/assets/img/demos/business-consulting/slides/avatar.jpg" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
                        </div>
                        <div class="col-lg-6 col-xl-5" style="margin-top: 100px;">
                            <h1 class="text-color-light custom-font-size-1">Elon Musk</h1>
                            <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">Chief Executive Officer of Twitter
                            </p>

                        </div>
                        <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                            <img src="img/demos/resume/about-me/mouse.png" custom-anim class="img-fluid custom-image-pos-1" alt />
                        </div>
                    </div>
                </div>
                <ul class="social-icons custom-social-icons">
                    <li class="social-icons-facebook">
                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-icons-twitter">
                        <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icons-youtube">
                        <a href="http://www.youtube.com/" target="_blank" title="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </section>

            <div class="custom-about-me-links bg-color-light">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-user icons text-color-primary"></i>
                                    Profile
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-2 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button custom-divisors text-color-dark">
                                    <i class="icon-docs icons text-color-primary"></i>
                                   Projects
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 text-center p-0">
                            <a href="#" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-phone icons text-color-primary"></i>
                                    Contacts
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-no-border bg-color-light m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-3 ms-5 mb-5 mb-lg-4 float-end clearfix">
                                <h4>Company Details</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <i class="icon-location-pin icons text-color-primary"></i>
                                                <span class="custom-text-color-2">  103 New York USA</span>
                                            </li>
                                            <li>
                                                <i class="icon-phone icons text-color-primary"></i>
                                                <span class="custom-text-color-2">   +98745123544</span>
                                            </li>
                                            <li>
                                                <i class="icon-envelope icons text-color-primary"></i>
                                                <span class="custom-text-color-2">  Demo@demo.com</span>
                                            </li>
                                            <li>
                                                <i class="icon-clock icons text-color-primary"></i>
                                                <span class="custom-text-color-2">  Monday-Friday 8.00-20.00</span>
                                            </li>
                                            <li>
                                                <p class=""></p>
                                                <a href="" class=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-3 ms-5 mb-5 mb-lg-4 float-end clearfix">
                                <h4>Get In Touch</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <i class="icon-phone icons text-color-primary"></i>
                                                <span class="custom-text-color-2">  +8547123654</span>
                                            </li>
                                            <li>
                                                <i class="icon-envelope icons text-color-primary"></i>
                                                <span class="custom-text-color-2">  info@gmail.com</span>
                                            </li>
                                            <li>
                                                <i class="icon-clock icons text-color-primary"></i>
                                                <span class="custom-text-color-2">  Monday-Friday 8.00-20.00</span>
                                            </li>
                                            <li>
                                                <p class=""></p>
                                                <a href="" class="btn btn-primary rounded-0 mb-2"> Contact Me</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-color-dark font-weight-extra-bold text-uppercase">About Me</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                            <div class="about-me-more" id="aboutMeMore">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida. Vivamus vitae dui non lorem euismod pretium. Morbi congue sem sed ex iaculis, nec mattis felis pretium. Nullam molestie libero id odio blandit sodales. Suspendisse non mauris et felis molestie placerat aliquet a risus. Aliquam ac leo tempus, hendrerit eros mollis, gravida est.</p>

                                <p>Proin euismod ipsum a tellus condimentum dapibus. Integer porttitor felis elit, eget rutrum ligula commodo quis. Praesent ultricies neque eu mi congue blandit. Nulla feugiat feugiat aliquet. Morbi sed mattis erat. Nullam scelerisque molestie eros, id tristique felis iaculis non. Duis pellentesque neque eget iaculis varius. Donec at nisl semper, aliquam est id, tincidunt lacus. Donec at erat purus.</p>

                                <p>Morbi tincidunt nunc non diam porta, at fermentum orci bibendum. Donec arcu nisi, ornare nec commodo vitae, sollicitudin sed magna. Cras sit amet justo et nulla pulvinar laoreet. Phasellus scelerisque, metus id posuere vulputate, diam tellus iaculis sapien, eget scelerisque ipsum libero convallis velit. Duis lorem ligula, faucibus quis tellus nec, fringilla ultricies leo. Etiam tempus congue magna. Suspendisse porta dictum tortor, eu volutpat ipsum eleifend nec. Aliquam dapibus lorem luctus, cursus libero imperdiet, mattis nunc. Sed in ipsum diam. Quisque efficitur metus purus, vitae fermentum lacus venenatis id.</p>
                            </div>

                            <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="section border-0 bg-white m-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col col-lg-9 text-center">
                        <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Featured Project</h2>

                    </div>
                    <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <hr class="bg-primary border-radius m-auto">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">

                        <div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 3}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 0, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                            <div class="mx-4">
                                <div class="card">
                                    <img class="card-img-top" src="front/assets/img/demos/business-consulting/slides/house2.jpg" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">Company name</h4>
                                        <p class="card-text mb-2 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur adipiscing lit onsectetur adipiscing elit.</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div class="card">
                                    <img class="card-img-top" src="front/assets/img/demos/business-consulting/slides/house3.jpg" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">Company name</h4>
                                        <p class="card-text mb-2 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur adipiscing lit onsectetur adipiscing elit.</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div class="card">
                                    <img class="card-img-top" src="front/assets/img/demos/business-consulting/slides/house4.jpg" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">Company name</h4>
                                        <p class="card-text mb-2 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur adipiscing lit onsectetur adipiscing elit.</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div class="card">
                                    <img class="card-img-top" src="front/assets/img/demos/business-consulting/slides/house1.jpg" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">Company name</h4>
                                        <p class="card-text mb-2 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur adipiscing lit onsectetur adipiscing elit.</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
			<footer id="footer" class="footer-top-border bg-color-light-scale-1">
				<div class="container py-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 text-color-dark mb-3">NEWSLETTER</h5>
							<p class="pe-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="me-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
									<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 text-color-dark mb-3">LATEST TWEETS</h5>
							<div id="tweet" class="twitter twitter-dark" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<h5 class="text-3 text-color-dark mb-3">CONTACT US</h5>

								<p class="m-0">225 Street Name, City Name</p>
								<p class="m-0"><a class="text-color-default" href="tel:8001234567">(800) 0157745</a></p>
								<p class="m-0"><a class="text-color-default" href="mailto:mail@example.com">mail@example.com</a></p>

						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 text-color-dark mb-3">FOLLOW US</h5>
							<ul class="header-social-icons social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-top-border bg-color-light-scale-1">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="index.html" class="logo pe-0 pe-lg-3">
                                    <h4 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a href="{{route('home')}}" style="color: #444;">logo</a></h4>
									{{-- <img alt="" src="img/logo-footer-dark.png" height="32"> --}}
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2023. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ms-1 text-decoration-none text-color-primary"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ms-1 text-decoration-none text-color-primary"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none text-color-primary"> Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('front/assets/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/lazysizes/lazysizes.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/vivus/vivus.min.js') }}"></script>


		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('front/assets/js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('front/assets/js/views/view.contact.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('front/assets/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('front/assets/js/theme.init.js') }}"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			function initializeGoogleMaps() {
				// Map Markers
				var mapMarkers = [{
					address: "New York, NY 10017",
					html: "<strong>New York Office</strong><br>New York, NY 10017",
					icon: {
						image: "img/pin.png",
						iconsize: [26, 46],
						iconanchor: [12, 46]
					},
					popup: true
				}];

				// Map Initial Location
				var initLatitude = 40.75198;
				var initLongitude = -73.96978;

				// Map Extended Settings
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: true,
						streetViewControl: true,
						overviewMapControl: true
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 16
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				// Styles from https://snazzymaps.com/
				var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}

			// Initialize Google Maps when element enter on browser view
			theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

		</script>

	</body>
</html>