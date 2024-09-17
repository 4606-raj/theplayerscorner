<!DOCTYPE html>
<html lang="en" dir="ltr">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel"/>

		<!-- Title -->
		<title>The Players Corner | Admin Dashboard</title>

        <!--Favicon -->
		<link rel="icon" href="{{ asset('assets/admin/images/favicon.png') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

		<!-- Style css -->
		<link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/admin/css/dark.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/admin/css/skin-modes.css') }}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{ asset('assets/admin/plugins/animated/animated.css') }}" rel="stylesheet" />

		<!--Sidemenu css -->
        <link  href="{{ asset('assets/admin/css/sidemenu.css') }}" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="{{ asset('assets/admin/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{ asset('assets/admin/plugins/icons/icons.css') }}" rel="stylesheet" />
		
		<!---Sidebar css-->
		<link href="{{ asset('assets/admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet" />

		<!-- Select2 css -->
		<link href="{{ asset('assets/admin/plugins/select2/select2.min.css') }}" rel="stylesheet" />

        
		<!--- INTERNAL jvectormap css-->
		{{-- <link href="{{ asset('assets/admin/plugins/jvectormap/jqvmap.css') }}" rel="stylesheet" /> --}}

		<!-- INTERNAL Data table css -->
		<link href="{{ asset('assets/admin/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

		<!-- INTERNAL Time picker css -->
		{{-- <link href="{{ asset('assets/admin/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" /> --}}

		<!-- INTERNAL jQuery-countdowntimer css -->
		{{-- <link href="{{ asset('assets/admin/plugins/jQuery-countdowntimer/jQuery.countdownTimer.css') }}" rel="stylesheet" /> --}}


        <!-- INTERNAL Switcher css -->
		<link href="{{ asset('assets/admin/switcher/css/switcher.css') }}" rel="stylesheet"/>
		{{-- <link href="{{ asset('assets/admin/switcher/demo.css') }}" rel="stylesheet"/> --}}

	</head>

	<body class="app sidebar-mini" id="index1">

        <!-- Switcher -->
		<!--<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg_dark">
					<i class="fa fa-cog fa-spin  text_primary"></i>
				</div>
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							{{-- <div class="swichermainleft text-center">
								<div class="p-3">
									<a href="index.html" class="btn ripple btn-primary btn-block mt-0">View Demo</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-secondary btn-block">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red btn-block">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft mb-4">
								<h4>Navigation Style</h4>
								<div class="pl-3 pr-3 pt-3">
									<a class="btn ripple btn-success btn-block" href="verticalmenu.html"> Leftmenu</a>
									<a class="btn ripple btn-danger btn-block" href="horizontal.html"> Horizontal </a>
								</div>
							</div> --}}
							<div class="swichermainleft">
								<h4>Theme Layout</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-0">
											<button type="button" id="background-left1" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Light Theme</span>
										</li>
										<li class="col-md-6 mb-0">
											<button type="button" id="background-left2" class="bg-left2 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Theme</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Header Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 light-bg">
											<button type="button" id="background1" class="bg1 wscolorcode1 button-image"></button>
											<span class="d-block">Light Header</span>
										</li>
										<li class="col-md-6">
											<button type="button" id="background2" class="bg2 wscolorcode1 button-image"></button>
											<span class="d-block">Color Header</span>
										</li>
										<li class="col-md-6 d-block mx-auto dark-bg">
											<button type="button" id="background3" class="bg3 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Header</span>
										</li>
										<li class="col-md-6 d-block mx-auto">
											<button type="button" id="background11" class="bg8 wscolorcode1 button-image"></button>
											<span class="d-block">Gradient Header</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background4" class="bg4 wscolorcode1 button-image"></button>
											<span class="d-block">Light Menu</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background5" class="bg5 wscolorcode1 button-image"></button>
											<span class="d-block">Color Menu</span>
										</li>
										<li class="col-md-6 mb-0 d-block mx-auto dark-bgmenu">
											<button type="button" id="background6" class="bg6 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Menu</span>
										</li>
										<li class="col-md-6 mb-0 d-block mx-auto">
											<button type="button" id="background10" class="bg7 wscolorcode1 button-image"></button>
											<span class="d-block">Gradient Menu</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		-->
		<!-- End Switcher -->
		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{ asset('assets/admin/images/svgs/loader.svg') }}" alt="loader">
		</div>

		<div class="app-content main-content">
			<div class="side-app">
	
				<!--app header-->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand sm-mob-logo d-flex justify-content-center" href="{{ route('admin.dashboard') }}">
								<img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img mt-0 desktop-lgo" alt="players-logo" width="20%">
								<img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img mt-0 dark-logo" alt="players-logo" width="25%">
								<img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img mt-0 mobile-logo" alt="players-logo" width="30%">
							</a>
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle" href="#">
									<i class="feather feather-menu"></i>
								</a>
								<a class="close-toggle" href="#">
									<i class="feather feather-x"></i>
								</a>
							</div>
							{{-- <div class="mt-0">
								<form class="form-inline">
									<div class="search-element">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color" >
											<i class="feather feather-search"></i>
										</button>
									</div>
								</form>
							</div> --}}
							
							
							<div class="d-flex order-lg-2 my-auto ml-auto">
								<a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search">
									<i class="feather feather-search search-icon header-icon"></i>
								</a>
								{{-- <div class="dropdown header-flags">
									<a class="nav-link icon" data-toggle="dropdown">
										<img src="{{ asset('assets/admin/images/flags/flag-png/united-kingdom.png') }}" class="h-24" alt="img">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
										<a href="#" class="dropdown-item d-flex "> <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/admin/images/flags/flag-png/india.png') }}" alt="img" class="h-24"></span>
											<div class="d-flex"> <span class="my-auto">India</span> </div>
										</a>
										<a href="#" class="dropdown-item d-flex"> <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/admin/images/flags/flag-png/united-kingdom') }}.png" alt="img" class="h-24"></span>
											<div class="d-flex"> <span class="my-auto">UK</span> </div>
										</a>
										<a href="#" class="dropdown-item d-flex"> <span class="avatar mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/admin/images/flags/flag-png/italy.png') }}" alt="img" class="h-24"></span>
											<div class="d-flex"> <span class="my-auto">Italy</span> </div>
										</a>
										<a href="#" class="dropdown-item d-flex"> <span class="avatar mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/admin/images/flags/flag-png/united-states') }}-of-america.png" class="h-24" alt="img"></span>
											<div class="d-flex"> <span class="my-auto">US</span> </div>
										</a>
										<a href="#" class="dropdown-item d-flex"> <span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{ asset('assets/admin/images/flags/flag-png/spain.png') }}" alt="img" class="h-24"></span>
											<div class="d-flex"> <span class="my-auto">Spain</span> </div>
										</a>
									</div>
								</div> --}}
								<div class="dropdown header-fullscreen">
									<a class="nav-link icon full-screen-link">
										<i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
										<i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
									</a>
								</div>
								{{-- <div class="dropdown header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="feather feather-mail header-icon"></i>
										<span class="badge badge-success side-badge">5</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
										<div class="header-dropdown-list message-menu" id="message-menu">
											<a class="dropdown-item border-bottom" href="#">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{ asset('assets/admin/images/users/1.jpg') }}"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Jack Wright</h6>
															<p class="fs-13 mb-1">All the best your template awesome</p>
															<div class="small text-muted">
																3 hours ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom" href="#">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{ asset('assets/admin/images/users/2.jpg') }}"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Lisa Rutherford</h6>
															<p class="fs-13 mb-1">Hey! there I'm available</p>
															<div class="small text-muted">
																5 hour ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom" href="#">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{ asset('assets/admin/images/users/3.jpg') }}"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Blake Walker</h6>
															<p class="fs-13 mb-1">Just created a new blog post</p>
															<div class="small text-muted">
																45 mintues ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom" href="#">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{ asset('assets/admin/images/users/4.jpg') }}"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Fiona Morrison</h6>
															<p class="fs-13 mb-1">Added new comment on your photo</p>
															<div class="small text-muted">
																2 days ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom" href="#">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{ asset('assets/admin/images/users/6.jpg') }}"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Stewart Bond</h6>
															<p class="fs-13 mb-1">Your payment invoice is generated</p>
															<div class="small text-muted">
																3 days ago
															</div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class=" text-center p-2">
											<a href="#" class="">See All Messages</a>
										</div>
									</div>
								</div>
								<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="feather feather-bell header-icon"></i>
										<span class="bg-dot"></span>
									</a>
								</div> --}}
								<div class="dropdown profile-dropdown">
									<a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
										<span>
											<img src="{{ asset('assets/admin/images/users/16.jpg') }}" alt="img" class="avatar avatar-md bradius">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
										{{-- <div class="p-3 text-center border-bottom">
											<a href="{{ route('admin.dashboard') }}" class="text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</a>
											<p class="text-center user-semi-title">App Developer</p>
										</div> --}}
										{{-- <a class="dropdown-item d-flex" href="#">
											<i class="feather feather-user mr-3 fs-16 my-auto"></i>
											<div class="mt-1">Profile</div>
										</a>
										<a class="dropdown-item d-flex" href="#">
											<i class="feather feather-settings mr-3 fs-16 my-auto"></i>
											<div class="mt-1">Settings</div>
										</a>
										<a class="dropdown-item d-flex" href="#">
											<i class="feather feather-mail mr-3 fs-16 my-auto"></i>
											<div class="mt-1">Messages</div>
										</a>
										<a class="dropdown-item d-flex" href="#" data-toggle="modal" data-target="#changepasswordnmodal">
											<i class="feather feather-edit-2 mr-3 fs-16 my-auto"></i>
											<div class="mt-1">Change Password</div>
										</a> --}}
										<a class="dropdown-item d-flex" href="#" onclick="logout()">
											<i class="feather feather-power mr-3 fs-16 my-auto"></i>
											<input type="submit" class="btn" value="Sign Out" />
											{{-- <form action="{{ route('logout') }}" method="POST">
												@csrf
												<div class="mt-1">
												</div>
											</form> --}}
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/app header-->

				@push('script')
					<script>
						function logout() {
							$.ajax({
								url: "{{ route('logout') }}",
								method: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
								},
								success: function() {
									window.location.replace("{{ route('home') }}");
								}
							})
						}
					</script>
				@endpush