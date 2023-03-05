<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Archibazaar</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('front/assets/img/demos/business-consulting/slides/favicon.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('front/assets/img/demos/business-consulting/slides/favicon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

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
                                            {{-- <h4 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a href="{{route('home')}}" style="color: #444;">logo</a></h4> --}}
											<img alt="" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{ asset('front/assets/img/demos/business-consulting/slides/logo.png') }}">
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
                                                    <li class="nav-item">
														<a class="nav-link border-bottom-0" href="{{ route('home') }}">
															Home
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border-bottom-0" href="{{ route('professionals') }}">
															Proffesionals
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border-bottom-0" href="{{ route('projects') }}">
															Projects
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border-bottom-0" href="{{ route('front.products') }}">
															Products
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border-bottom-0" href="{{ route('articles') }}">
															Articles
														</a>
													</li>
                                                    @if (Route::has('login') && Auth::check())
                                                    <li class="nav-item">
														@if(auth()->user()->role == 'supplier')
                                                        <a href="{{ route('supplier.profile') }}" class="nav-link border-bottom-0">
                                                             {{ substr(Auth::user()->name, 0,  6) }}
                                                        </a>
                                                        @elseif (auth()->user()->role == 'admin')
                                                        <a href="{{ route('admin.dashboard') }}" class="nav-link border-bottom-0">
                                                             {{ substr(Auth::user()->name, 0,  6) }}
                                                        </a>
                                                        @else
                                                        <a href="" class="nav-link border-bottom-0">
                                                            <{{ substr(Auth::user()->name, 0,  6) }}
                                                        </a>
                                                        @endif
													</li>
                                                    @elseif (Route::has('login') && !Auth::check())
                                                    <li class="nav-item">
                                                        <a class="nav-link border-bottom-0" href="{{ route('login') }}">
                                                         <em class="icon ni ni-signout"></em><span>Sign In</span>
                                                     </a>
                                                    </li>
                                                    @endif
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
                                                    <form role="search" action="{{ route('professional.search') }}" method="get">
                                                        <div class="simple-search input-group">
                                                            <input class="form-control text-1" iid="professional_search" name="professional_search" type="search" value="" placeholder="search your professionals">
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

			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-dark">Create Project</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-3 pb-2">

					<div class="row pt-2">
						<div class="col-lg-3 mt-4 mt-lg-0">
							<form role="form" method="POST" action="{{ route('professional.profile.pic.update', encrypt(auth()->user()->id)) }}" enctype="multipart/form-data" class="needs-validation">
                                @csrf
                                <div class="d-flex justify-content-center mb-4">
                                    <div class="profile-image-outer-container">
                                        <div class="profile-image-inner-container bg-color-primary">
                                            @if (auth()->user()->image == null)
                                                <img src="img/avatars/avatar.jpg">
                                            @else
                                            <img src="{{asset(auth()->user()->image)}}">
                                            @endif
                                            <span class="profile-image-button bg-color-dark">
                                                <i class="fas fa-camera text-light"></i>
                                            </span>
                                        </div>
                                        <input type="file" name="image" id="image" multiple class="form-control profile-image-input">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mb-4">
                                    <div class="profile-image-outer-container">
                                        <button type="submit" class="btn btn-dark btn-modern">Upload your picture</button>
                                    </div>
                                </div>
                            </form>

							<aside class="sidebar mt-2" id="sidebar">
								<ul class="nav nav-list flex-column mb-5">
									<li class="nav-item"><a class="nav-link text-3 text-dark @if(request()->routeIs('professional.profile'))  active @endif" href="{{ route('professional.profile') }}">My Profile</a></li>
									<li class="nav-item"><a class="nav-link text-3 @if(request()->routeIs('project.create'))  active @endif" href="{{ route('project.create') }}">Add project</a></li>
									<li class="nav-item"><a class="nav-link text-3 @if(request()->routeIs('project.index'))  active @endif" href="{{ route('project.index') }}">Product list</a></li>
									<li class="nav-item"><a class="nav-link border-bottom-0" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                         <em class="icon ni ni-signout"></em><span>Sign out</span>
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form></li>
								</ul>
							</aside>

						</div>
						<div class="col-lg-9">
							<form role="form" method="POST" action="{{ route('project.store') }}" class="needs-validation" enctype="multipart/form-data">
                                @csrf
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">name</label>
							        <div class="col-lg-9">
							            <input type="text" class="form-control" name="name" id="name" value="{{old('name', isset(auth()->user()->name)?auth()->user()->name:null)}}" placeholder="Enter your Name">
                                        @error('name')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">project name</label>
							        <div class="col-lg-9">
							            <input type="text" name="project_name" value="{{old('project_name', isset($project)?$project->project_name:null)}}" placeholder="Enter project name" class="form-control">
                                        @error('project_name')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Company name</label>
							        <div class="col-lg-9">
                                        <input type="text" name="company_name" value="{{old('company_name', isset($project)?$project->company_name:null)}}" placeholder="Enter Company name" class="form-control">
                                        @error('company_name')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Project type</label>
							        <div class="col-lg-9">
                                        <input type="text" name="project_type" value="{{old('project_type', isset($project)?$project->project_type:null)}}" placeholder="Enter Project Type" class="form-control">
                                        @error('project_type')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
								<div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Description</label>
							        <div class="col-lg-9">
							            <textarea type="text" name="description" value="" placeholder="Enter description" class="form-control">{{old('description', isset($project)?$project->description:null)}}</textarea>
                                        @error('description')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Firm</label>
							        <div class="col-lg-9">
							                <input type="text" name="firm" value="{{old('firm', isset($project)?$project->firm:null)}}" placeholder="Enter firm" class="form-control">
                                                @error('firm')<i class="text-danger">{{$message}}</i>@enderror

							        </div>
							    </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Area Size</label>
							        <div class="col-lg-9">
                                        <input type="text" name="area_size" value="{{old('area_size', isset($project)?$project->area_size:null)}}" placeholder="Enter area size" class="form-control">
                                        @error('area_size')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>


							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Design Style  :</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="design_style" value="{{old('design_style', isset($project)?$project->design_style:null)}}" placeholder="Enter design style" class="form-control">
                                        @error('design_style')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
							    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Architect  :</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="architect" value="{{old('architect', isset($project)?$project->architect:null)}}" placeholder="Enter architect" class="form-control">
                                        @error('architect')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
							    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Country  :</label>
                                    <div class="col-lg-9">
                                        <div class="custom-select-1">
                                            <select id="user_time_zone" class="form-control text-3 h-auto py-2 valid" name="country" size="0" aria-invalid="false">
                                                <option selected="" disabled="" >Select Country</option>
                                                @foreach($countries as $key=>$country)
                                                <option  @if(old('country',isset($project)?$project->location:null)  == $country->id) selected @endif value="{{$country->id}}">{{$country->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('country')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
							    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Thumbnail Image  :</label>
                                    <div class="col-lg-9">
                                        <input type="file" name="thumbnail_image" value="{{old('thumbnail_image', isset($project)?$project->thumbnail_image:null)}}" class="form-control">
                                        <br>
                                        @if (isset($project))
                                            <img src="{{asset($project->thumbnail_image)}}" width="40px;" height="50px">
                                        @endif
                                        @error('thumbnail_image')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
							    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Multiple Image  :</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" multiple class="custom-file-input" type="file" name="multiple_image[]" id="multiple_image">
                                        @error('multiple_image')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
							    </div>
							    <div class="form-group row">
									<div class="form-group col-lg-9">

									</div>
									<div class="form-group col-lg-3">
										<input type="submit" value="submit" class="btn btn-primary btn-modern float-end" data-loading-text="Loading...">
									</div>
							    </div>
							</form>

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

		<!-- Theme Custom -->
		<script src="{{ asset('front/assets/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('front/assets/js/theme.init.js') }}"></script>

	</body>
</html>
