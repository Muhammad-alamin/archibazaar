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
								<h1 class="font-weight-bold text-dark">User Profile</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-3 pb-2">

					<div class="row pt-2">
						<div class="col-lg-3 mt-4 mt-lg-0">
							<form role="form" method="POST" action="{{ route('supplier.profile.pic.update',encrypt(auth()->user()->id)) }}" enctype="multipart/form-data" class="needs-validation">
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
									<li class="nav-item"><a class="nav-link text-3 text-dark @if(request()->routeIs('supplier.profile'))  active @endif " href="{{ route('supplier.profile') }}">My Profile</a></li>
									<li class="nav-item"><a class="nav-link text-3 @if(request()->routeIs('product.create'))  active @endif" href="{{ route('product.create') }}">Add Product</a></li>
									<li class="nav-item"><a class="nav-link text-3 @if(request()->routeIs('product.index'))  active @endif" href="{{ route('product.index') }}">Product list</a></li>
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
							<form role="form" action="{{ route('supplier.product.update',encrypt($product->id)) }}" method="post" class="needs-validation" enctype="multipart/form-data">

                                @csrf
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Supplier name</label>
							        <div class="col-lg-9">
							            <input type="text" class="form-control" name="supplier_name" id="supplier_name" value="{{old('supplier_name', isset(auth()->user()->name)?auth()->user()->name:null)}}" placeholder="Enter Supplier Name">
                                        @error('supplier_name')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Product name</label>
							        <div class="col-lg-9">
							            <input type="text" class="form-control" name="product_name" id="product_name" value="{{old('product_name', isset($product)?$product->product_name:null)}}" placeholder="Enter product name">
                                        @error('product_name')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Product category</label>
							        <div class="col-lg-9">
                                        <div class="custom-select-1">
							                <select id="user_time_zone" class="form-control text-3 h-auto py-2 valid" name="product_category" size="0" aria-invalid="false">
                                                <option selected="" disabled="" >Select Category</option>
                                                @foreach($categories as $key=>$category)
                                                    <option  @if(old('category_id',isset($product)?$product->product_category_id:null)  == $category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
							            </div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Description</label>
							        <div class="col-lg-9">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control text-3 h-auto py-2" name="description" required="" style="height: 159px;">{{old('description', isset($product)?$product->description:null)}}</textarea>
                                        @error('description')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
								<div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Specification</label>
							        <div class="col-lg-9">
							            <input type="text" class="form-control" name="specification" id="specification" value="{{old('specification', isset($product)?$product->specification:null)}}" placeholder="Enter your specification">
                                        @error('specification')<i class="text-danger">{{$message}}</i>@enderror
							        </div>
							    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Product size</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="product_size" id="product_size" value="{{old('product_size', isset($product)?$product->product_size:null)}}" placeholder="Enter product size">
                                        @error('product_size')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">contact supplier (Address/Number)</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="contact_supplier" id="contact_supplier" value="{{old('contact_supplier', isset($product)?$product->contact_supplier:null)}}" placeholder=" contact supplier">
                                        @error('contact supplier')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Regular price</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="regular_price" id="regular_price" value="{{old('regular_price', isset($product)?$product->regular_price:null)}}" placeholder="Enter product Regular price">
                                        @error('regular_price')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Discount_price</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="discount_price" id="discount_price" value="{{old('discount_price', isset($product)?$product->discount_price:null)}}" placeholder="Enter product Discount price">
                                        @error('discount_price')<i class="text-danger">{{$message}}</i>@enderror
                                    </div>
                                </div>
							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Image</label>
							        <div class="col-lg-9">
							        <input class="d-block" type="file" name="image" id="image">
                                    @if (isset($product))
                                    <img src="{{asset($product->image)}}" style="width: 40px;">
                                    @endif
							        </div>
                                    @error('image')<i class="text-danger">{{$message}}</i>@enderror

							    </div>

                                <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Image</label>
							        <div class="col-lg-9">
							        <input class="d-block" type="file" name="multiple_image[]" id="multiple_image">
                                    @php($images = json_decode($product->multiple_image))
                                            @if(isset($images))
                                            @foreach($images as $eachimage)
                                            @if (isset($eachimage))
                                                <img src="{{asset($eachimage)}}" style="width:40px;">
                                            @endif
                                            @endforeach
                                            @endif
                                    @error('multiple_image')<i class="text-danger">{{$message}}</i>@enderror

							    </div>

							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">catalogues</label>
							        <div class="col-lg-9">
                                        <input class="d-block" type="file" name="catalogues" id="catalogues">
                                        @if (isset($product))
                                    <span style="width: 40px;">{{$product->drawing_file}}</span>
                                    @endif
                                    </div>
                                    @error('catalogues')<i class="text-danger">{{$message}}</i>@enderror
							    </div>
                                <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Drawing file</label>
							        <div class="col-lg-9">
                                        <input class="d-block" type="file" name="drawing_file" id="drawing_file">
                                        @if (isset($product))
                                    <span style="width: 40px;">{{$product->drawing_file}}</span>
                                    @endif
                                    </div>
                                    @error('drawing_file')<i class="text-danger">{{$message}}</i>@enderror
							    </div>
							    <div class="form-group row">
									<div class="form-group col-lg-9">

									</div>
									<div class="form-group col-lg-3">
										<input type="submit" value="Update" class="btn btn-primary btn-modern float-end" data-loading-text="Loading...">
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
