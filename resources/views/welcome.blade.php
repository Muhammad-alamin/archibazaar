<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>ArchiBazaar</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content=" ">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('front/assets/img/demos/business-consulting/slides/favicon.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('front/assets/img/demos/business-consulting/slides/favicon.png') }}">

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


		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('front/assets/css/skins/default.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('front/assets/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body id="body" class="one-page alternative-font-5" data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
		<div class="body">
            <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 header-body-bottom-border" style="background-color:#444;">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column justify-content-start d-lg-none">
								<div class="header-row mt-2">
									<div class="header-logo">
										<a href="{{route('home')}}">
											<img alt="logo" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="{{ asset('front/assets/img/demos/business-consulting/slides/logo.png') }}">
                                            {{-- <h4 class="text-color-white font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">logo</h4> --}}
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-center align-items-end">
								<div class="header-nav justify-content-lg-center p-0">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-dropdown-center header-nav-main-dropdown-center-bottom header-nav-main-effect-3 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
													<li class="dropdown dropdown-mega order-1">
														<a class="" href="{{ route('professionals') }}" style="color: white;">
															Proffesionals
														</a>
													</li>
													<li class="dropdown order-2">
														<a class="" href="{{ route('projects') }}" style="color: white;">
															Projects
														</a>
													</li>
													<li class="dropdown order-3">
														<a class="" href="{{ route('front.products') }}" style="color: white;">
															Products
														</a>
													</li>
													<li class="dropdown order-4">
														<a class="" href="{{ route('articles') }}" style="color: white;">
															Articles
														</a>
													</li>
													<li class="dropdown order-6">
														<a class="" href="{{ route('supplier_register') }}" style="color: white;">
															join us
														</a>
													</li>
													<li class="align-items-center d-none d-lg-flex order-5 px-5 mx-2">
														<span class="header-logo">
															<a href="{{route ('home')}}" class="w-100 text-center">
                                                                {{-- <h4 class="text-color-white font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">logo</h4> --}}
																<img alt="" width="100" height="48" data-sticky-width="200" data-sticky-height="100" data-sticky-top="72" src="{{ asset('front/assets/img/demos/business-consulting/slides/logo.png') }}">
															</a>
														</span>
													</li>
												</ul>
											</nav>
										</div>
                                        <div class="header-column order-1 order-lg-2">
											<div class="header-row justify-content-end">
												<div class="header-nav-features header-nav-features-no-border w-75 w-auto-mobile d-none d-sm-flex">
													<form role="search" class="d-flex w-100" action="{{ route('professional.search') }}" method="get">
														<div class="simple-search input-group w-100">
															<input class="form-control border-0" id="professional_search" name="professional_search" type="search" value="" placeholder="search your professionals">
															<button class="btn btn-light" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
                                        @if (Route::has('login') && Auth::check())

                                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                            <div class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pe-2" id="headerAccount">
                                                <a href="#" class="header-nav-features-toggle" style="color: white">
                                                    <i class="far fa-user"></i> {{ substr(Auth::user()->name, 0,  6) }}
                                                </a>
                                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <p class="mb-0 pb-0 text-2 line-height-1 pt-1">Hello,</p>
                                                            <p><strong class="text-color-dark text-4">{{ auth()->user()->name }}</strong></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="d-flex justify-content-end">
                                                                <img class="rounded-circle" width="40" height="40" alt="" src="front/assets/img/demos/business-consulting/slides/avatar.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <ul class="nav nav-list-simple flex-column text-3">
                                                                @if(auth()->user()->role == 'supplier')
                                                                <li class="nav-item"><a class="nav-link" href="{{ route('supplier.profile') }}">Profile</a></li>
                                                                @elseif (auth()->user()->role == 'admin')
                                                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                                @else
                                                                <li class="nav-item"><a class="nav-link" href="{{ route('professional.profile') }}">Profile</a></li>
                                                                @endif
                                                                @if(auth()->user()->role == 'supplier')
                                                                <li class="nav-item"><a class="nav-link" href="{{ route('product.create') }}">Product</a></li>
                                                                @elseif (auth()->user()->role == 'admin')
                                                                <li class="nav-item"></li>
                                                                @else
                                                                <li class="nav-item"><a class="nav-link" href="{{ route('project.create') }}">Project</a></li>
                                                                @endif
                                                                <li class="nav-item">
                                                                    <a class="nav-link border-bottom-0" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                          document.getElementById('logout-form').submit();">
                                                                     <em class="icon ni ni-signout"></em><span>Sign out</span>
                                                                 </a>

                                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                     @csrf
                                                                 </form></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif (Route::has('login') && !Auth::check())

                                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                                    <div class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pe-2" id="headerAccount">
                                                        <a href="{{ url('/login') }}" class="" style="color: white; font-size: 13px; font-weight: 600; text-transform: uppercase;">
                                                            <i class="far fa-user"></i> sign in
                                                        </a>
                                                    </div>
                                                </div>

                                        @endif
									</div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
								</div>
							</div>
							<div class="header-column justify-content-end d-none d-lg-flex"></div>
						</div>
					</div>
				</div>
			</header>


			<div role="main" class="main">
				<div id="home" class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" style="height: 100vh;">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							@foreach ($sliders as $slider)
								<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative pt-5" style="background-image: url({{ $slider->slider_image }}); background-size: cover; background-position: center; background-color: #35383d;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev" style="background-color: #444"></button>
						<button type="button" role="presentation" class="owl-next" style="background-color: #444"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

                <section class="coaching-consulting d-flex p-relative bg-color-light pt-3 pb-3 pt-lg-5 pb-lg-4">
					<div class="container">
						<div class="row justify-content-end py-5">
							<div class="col-lg-6">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>What we do</p>
								<h2 class="text-color-dark font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Search Best Professionals</h2>
								<p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Get inspired, join the community, and reach the right audience! This is your best place to find and collaborate with designers from all over the world.</p>
                                <a href="{{ route('professionals') }}" class="btn btn-modern btn-primary mb-2">Read more</a>
                                <br>
                                <br>
                                <div class="d-flex align-items-center justify-content-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									<div class="circular-bar custom-circular-bar m-0">
										<div>
											<p class="text-4 text-color-dark">Popular categories</p>
										</div>
									</div>
								</div>
                                <div>
                                    @foreach ($professional_cat as $eachProfessional_cat)
                                    <span style="margin-right: 10px;"><a href="{{ route('single_professional', encrypt($eachProfessional_cat->id)) }}" class="btn btn-3d btn-light rounded-0 mb-2">{{ $eachProfessional_cat->category_title }}</a></span>
                                    @endforeach
                                </div>
							</div>
                            <div class="col-xl-6 mb-5 pb-5 mb-xl-0 pb-xl-0">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
									<div class="owl-carousel owl-theme m-0" data-plugin-options="{'items': 1, 'autoplay': false, 'animateOut': 'fadeOut', 'autoHeight': true}">
										<div class="custom-testimonial-container bg-color-light">
											<div class="testimonial custom-testimonial testimonial-style-2 mb-0">
												<blockquote class="px-0 pb-5">
                                                    <img src="{{ asset('front/assets/img/demos/business-consulting/slides/agency.jpg') }}" class="img-fluid border-radius-0" alt="" style="height: 500px;">
												</blockquote>
											</div>
										</div>
                                        <div class="custom-testimonial-container bg-color-light">
											<div class="testimonial custom-testimonial testimonial-style-2 mb-0">
												<blockquote class="px-0 pb-5">
                                                    <img src="{{ asset('front/assets/img/demos/business-consulting/slides/agency.jpg') }}" class="img-fluid border-radius-0" alt="" style="height: 500px;">
												</blockquote>
											</div>
										</div>
                                        <div class="custom-testimonial-container bg-color-light">
											<div class="testimonial custom-testimonial testimonial-style-2 mb-0">
												<blockquote class="px-0 pb-5">
                                                    <img src="{{ asset('front/assets/img/demos/business-consulting/slides/agency.jpg') }}" class="img-fluid border-radius-0" alt="" style="height: 500px;">
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

                <section class="section border-0 bg-white m-0">
					<div class="container py-5">
						<div class="row justify-content-center">
							<div class="col col-lg-9 text-center">
								<h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Projects Spootlight</h2>

							</div>
                            <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                <hr class="bg-primary border-radius m-auto">
                            </div>
						</div>

						<div class="row mt-4">
							<div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">

								<div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 3}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 0, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
									@foreach ($projects as $project)
                                    <div class="mx-4">
										<div class="card">
                                            <img class="card-img-top" src="{{ asset($project->thumbnail_image) }}" alt="Card Image" style="height:196px;">
                                            <div class="card-body">
                                                <h4 class="card-title mb-1 text-4 font-weight-bold">{{ $project->company_name }}</h4>
                                                <p class="card-text mb-2 pb-1">{{ substr($project->description, 0, 100) }}</p>
                                                <a href="{{ route('projectDetails',encrypt($project->id)) }}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                            </div>
                                        </div>
									</div>
                                    @endforeach
								</div>

							</div>
						</div>

					</div>
				</section>

				<section id="clients" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(front/assets/img/demos/business-consulting/slides/sliderdown.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-bold text-color-light mb-2">Featured Commentary</h2>
								<p class="text-color-light opacity-7" style="text-decoration: underline"><u></u></p>
							</div>
						</div>
                        <hr class="bg-white border-radius m-auto" style="height: 6px; width: 50px;">
						<div class="row text-center py-3 my-4">
							<div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid" src="img/logos/logo-light-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-2.png" alt="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">

								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									<div>
										<div class="testimonial testimonial-style-2 text-color-light testimonial-with-quotes testimonial-quotes-primary mb-0">

												<p class="text-7  line-height-5 mb-0"> A step closer to good design: Ideal Standard’s Design and Specification Centre’s refreshing approach</p>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

				</section>

                <section class="section border-0 bg-white m-0">

                    <div class="row">
						<div class="col">

							<div class="tabs tabs-bottom tabs-center tabs-simple">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured icon-docs text-color-dark"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">Articles</p>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('projects') }}">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured icon-bubble text-color-dark"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">Projects</p>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('front.events') }}">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured icon-event text-color-dark"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">Events</p>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('front.news') }}">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured icon-people text-color-dark"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">News</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
                    <div class="container py-5">
                        <div class="row mt-4">
                            <div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">

                                <div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 3}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 0, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                    @foreach ($articles as $article)
                                    <div class="mx-4">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset($article->image) }}" alt="Card Image" style=" height:196px;">
                                            <div class="card-body">
                                                <h4 class="card-title mb-1 text-4 font-weight-bold">{{ $article->name }}</h4>
                                                <p class="card-text mb-2 pb-1">{{ substr($article->article_description,0,100) }}</p>
                                                <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
            </section>
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

							<p class="m-0">Archibazaar</p>
                            <p class="m-0">31 Rochester Drive Level 24 Singapore 138637</p>
								<p class="m-0"><a class="text-color-default" href="tel:8001234567">Tel: +65 6200 7994</a></p>
								<p class="m-0"><a class="text-color-default" href="mailto:mail@example.com">enquiry@archibazaar.com</a></p>

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
                                    {{-- <h4 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a href="{{route('home')}}" style="color: #444;">logo</a></h4> --}}
									<img alt="" src="{{ asset('front/assets/img/demos/business-consulting/slides/logo.png') }}" height="32">
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

		<script src="{{ asset('front/assets/js/views/view.contact.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('front/assets/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('front/assets/js/theme.init.js') }}"></script>
		<script src="{{ asset('front/assets/js/examples/examples.portfolio.js') }}"></script>

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
					html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
					icon: {
						image: "img/pin.png",
						iconsize: [26, 46],
						iconanchor: [12, 46]
					}
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
					zoom: 5
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

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>

	</body>
</html>
