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

        <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap-star-rating/css/star-rating.min.css') }}">

		<link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') }}">

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
														<a class="dropdown-item dropdown-toggle active" href="{{ route('home') }}">
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
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
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
			</header>

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-dark font-weight-bold text-8">Product Details</h1>
                        </div>
                    </div>
                </div>
            </section><div role="main" class="main shop pt-4">

				<div class="container">
					<div class="row">
						<div class="col-md-5 mb-5 mb-md-0">

							<div class="thumb-gallery-wrapper">
								<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
									<div>
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png" data-zoom-image="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div>
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png" data-zoom-image="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div>
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png" data-zoom-image="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div>
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png" data-zoom-image="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div>
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png" data-zoom-image="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
								</div>
								<div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
									<div class="cur-pointer">
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div class="cur-pointer">
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div class="cur-pointer">
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div class="cur-pointer">
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
									<div class="cur-pointer">
										<img alt="" class="img-fluid" src="front/assets/img/demos/business-consulting/slides/product.png">
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-7">

							<div class="summary entry-summary position-relative">

								<h1 class="mb-0 font-weight-bold text-7">Name of Product</h1>

								<div class="pb-0 clearfix d-flex align-items-center">
									<div title="Rated 3 out of 5" class="float-start">
										<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
									</div>

									<div class="review-num">
                                        <div class="d-block pb-2">
                                            <input type="text" class="rating-invisible" value="4" title="" data-plugin-star-rating data-plugin-options="{'color': 'tertiary', 'size':'xs'}">
                                        </div>
										<a href="#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="0" data-hash-offset-lg="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000">
											<span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)
										</a>
									</div>
								</div>

								<p class="price mb-3">
									<span class="sale text-color-primary" style="margin-left: 10px;">$999</span>
									<span class="amount">$1200</span>
								</p>

								<p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>

								<form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">

									<hr>
									<div class="quantity quantity-lg">
										<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
										<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
										<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
									</div>
									<button type="submit" class="btn btn-primary btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Buy Now</button>

                                    <button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Contact Supplier</button>

                                    <hr>
								</form>

								<div class="d-flex align-items-center">
									<a href="#" class="btn btn-modern btn-light mb-2" style="margin-right: 10px;">Request Brouchers</a>
									<a href="#" class="btn btn-modern btn-light mb-2">Download Drawing files</a>
								</div>

							</div>

						</div>
					</div>

					<div class="row mb-4">
						<div class="col">
							<div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
								<ul class="nav nav-tabs justify-content-start">
									<li class="nav-item"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-bs-toggle="tab">Size</a></li>
									<li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-bs-toggle="tab">Specification</a></li>
								</ul>
								<div class="tab-content p-0">
									<div class="tab-pane px-0 py-3 active" id="productDescription">
                                        <table class="">
											<tbody>
												<tr>
													<th class="border-top-0">
														Widht:
													</th>
													<td class="border-top-0">
														300 mm
													</td>
												</tr>
												<tr>
													<th>
														Height:
													</th>
													<td>
														700 mm
													</td>
												</tr>
												<tr>
													<th>
														Length:
													</th>
													<td>
														520 mm
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane px-0 py-3" id="productInfo">
										<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. </p>
										<p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
        </div>
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
		<script src="{{ asset('front/assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('front/assets/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('front/assets/js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('front/assets/js/views/view.shop.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('front/assets/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('front/assets/js/theme.init.js') }}"></script>

	<!-- Examples -->
		<script src="{{ asset('front/assets/js/examples/examples.gallery.js') }}"></script>

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
