<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Players Corner</title>

    <!-- Title Icon -->
    <link rel="icon" type="image/x-icon" href="assets/images/title-logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://uicdn.toast.com/chart/latest/toastui-chart.min.css" />

     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
     
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lg-zoom.css"/>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.css"/>
     
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

<!-- Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div id="uppr-row">
            <div class="overlay-hdr"></div>

            <div class="container uppr-row-con">    
                <!-- Logo -->
                <div class="logo-1">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo-1.png') }}" alt="">
                        <p>The Players <span><br>Corner</span></p>
                    </a>
                </div>
                
                <!-- Right Side Logos -->
                {{-- <div class="right-logos">
                    <div>
                        <img src="{{ asset('assets/images/partners/PFSA-logo.png') }}" alt="">
                        <img src="{{ asset('assets/images/partners/England-logo.png') }}" alt="">
                        <img src="{{ asset('assets/images/partners/uefa-logo.png') }}" alt="">
                        <img src="{{ asset('assets/images/partners/LogoUniversitas_422x187.png') }}" alt="">
                    </div>
                    <div>
                        <div class=uefa-logo">
                            <img src="{{ asset('assets/images/partners/UEFA-logo.png') }}" alt="">
                        </div>
                    </div>
                </div> --}}
                <!-- Social Media Icons -->
                <!-- <div class="social-icons">
                    <ul>
                        <li><a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://twitter.com/southall_afc" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/southall-afc/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div> -->

                <!-- Hamburger Menu -->
                <button id="ham-button">
                    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="45" onclick="this.classList.toggle('active')">
                        <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                        <path class="line middle" d="m 30,50 h 40" />
                        <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Navigation Bar -->
        <nav>
            <div class="container nav-small" id="nav-row">
                
                <ul>
                    <!-- Logo -->
                    <div class="logo-1 logo-2">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-img.png') }}" alt=""></a>
                    </div>

                    <li class="active-link"><a href="{{ route('home') }}">Home</a>
                    <li class="active"><a href="404">About</a>
                    <li class="active"><a href="{{ route('contact-us') }}">Contact</a>
                        {{-- <i class="bi bi-caret-down-fill"></i>
                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="#">Safeguarding Policy</a></li>
                            <li><a href="#">Inclusion & Diversity</a></li>
                        </ul> --}}
                    </li>
                    
                    {{-- <li><a href="{{ route('club') }}">Blog </a>
                        <i class="bi bi-caret-down-fill"> </i>
                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="{{ route('club') }}">Club</a></li>
                            <li><a href="{{ route('club-information') }}">Club Information</a></li>
                            <li><a href="#">Safeguarding Policy</a></li>
                            <li><a href="{{ route('inclusion-diversity') }}">Inclusion & Diversity</a></li>
                            <li><a href="{{ route('sponsorship') }}">Sponsorship</a></li>
                            <li><a href="{{ route('social-media') }}">Social Media</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Club Shop</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ route('community') }}">Services</a></li>
                    
                    <li><a href="{{ route('team-types') }}">Social Media </a>
                        <i class="bi bi-caret-down-fill"></i>
                        
                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="{{ route('mens-team') }}">Men</a></li>
                            <li><a href="{{ route('womens-team') }}">Women</a></li>
                            <li><a href="{{ route('youth-team') }}">Youth Teams</a></li>
                        </ul>
                    </li>
                    <li><a href="404">Testimonials </a>
                        <i class="bi bi-caret-down-fill"></i>
                        
                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="#">Fixtures</a></li>
                            <li><a href="#">Results</a></li>
                            <li><a href="#">League Table</a></li>
                            <li><a href="#">Women Table & Stats</a></li>
                            <li><a href="#">Youth Table & Stats</a></li>
                            <li><a href="#">Newsletter Sign up</a></li>
                        </ul>
                        
                    </li>
                    <li><a href="404">Gallery</a></li>
                    <li><a href="404">Shop</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li> --}}

                    {{-- <li><a href="{{ route('about-us') }}">About Us</a> --}}
                </ul>

                {{-- <div class="login-srch">
                    <ul>
                        <li><a href="{{ route('login') }}">Login/Register </a>
                            <i class="bi bi-caret-down-fill"></i>
                            <!-- Drop Down menu -->
                            <ul class="sub-menu">
                                <li><a href="{{ route('login') }}">My Athletic Hub</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="srch-bar">
                        <button class="srch-i"><i class="bi bi-search"></i></button>
                        <form action="" class="search-box">
                            <input type="text" class="input-srch" placeholder="Type here to search..." />
                        </form>
                    </div> --}}
                    <!-- Social Media Icons -->
                    
                    <div class="social-icons hdr-social-icons">
                        <ul>
                            <li><a href="https://www.instagram.com/the.playerscorner/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/the-players-corner" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="https://www.twitter.com/thepc_official" target="_blank"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/the.playerscorner/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<!-- Wrapper 1 -->
<section class="container" id="wrapper-1">
    <div class="row">
        <div class="banner-wrapper col-lg-6 col-md-6 col-sm-12 col-12">
            <img src="{{ asset('storage/images/slider/img-2.jpg') }}" alt="">
            <div class="border-box"></div>
        </div>
        <div class="side-txt-wrapper col-lg-6 col-md-6 col-sm-12 col-12">
            <div>
                <h3>Welcome to the <br> players corner</h3>
                <p>we're levelling the field</p>
            </div>
        </div>
        
    </div>

    {{-- <!-- Main Slider -->
        <div id="hero-slider" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="slider-over">
                    <p>WE ARE THE COMMUNITY.</p>
                    <p>We are <span>The Players Corner</span> Football Club!!!</p>
                </div>
                <div class="carousel-item active">
                    <img src="assets/images/slider/slide-1.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="assets/images/slider/slide-2.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="assets/images/slider/slide-3.jpg" class="d-block w-100" alt="...">
                </div>
                
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#hero-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
        --}}
        {{-- <div class="container-fluid gallery-sec">
            
            <!-- Gallery Tabs -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Photos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Videos</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li> -->
            </ul>
            
            <!-- Gallery images -->
            <div class="tab-content" id="pills-tabContent">
                <!-- Photos Tab 1 -->
                <div class="tab-pane fade show active gallery-slide" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    
                    @foreach ($images as $image)    
                    <div class="img-con">
                        <a href="{{ asset('storage/images/gallery') . '/' . $image->name }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="{{ asset('storage/images/gallery') . '/' . $image->name }}" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                    
                </div>
                
                <!-- Videos Tab 2 -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Coming Soon..!!</div>
            </div>
        </div> --}}
        
        
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="about-site">
                {{-- Site logo --}}
                <div class="ab-logo">
                    <img src="{{ asset('assets/images/logo-1.png') }}" alt="">
                </div>
                {{-- Site title --}}
                <h3 class="title-hdr">the players corner</h3>
                <div class="col-10 col-lg-6 col-md-6 col-sm-8">
                    <p class="ab-des-txt">
                        In 2000, The Players Corner was founded when a group of individuals decided to turn their shared interests into an
                        official Gaming Club. After a couple of quick meetings, we were on our way to creating something extraordinary. <br><br>
                        With time, we've grown into a more serious and mature organization, allowing us to take our interests to new levels.
                        When you decide to join us, you too will gain access to various events and, more importantly, to a community of
                        people who are just as passionate as you are.
                    </p>
                </div>
            </div>
        </div>
    </section>
     
    <section class="container-fuild gallery-sec">
          {{-- <div class="container-fluid gallery-sec">
            
            <!-- Gallery Tabs -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Photos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Videos</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li> -->
            </ul>
            
            <!-- Gallery images -->
            <div class="tab-content" id="pills-tabContent">
                <!-- Photos Tab 1 -->
                <div class="tab-pane fade show active gallery-slide" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    
                    @foreach ($images as $image)    
                    <div class="img-con">
                        <a href="{{ asset('storage/images/gallery') . '/' . $image->name }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="{{ asset('storage/images/gallery') . '/' . $image->name }}" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                    
                </div>
                
                <!-- Videos Tab 2 -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Coming Soon..!!</div>
            </div>
        </div> --}}
{{-- 
        <div class="my-lightbox-toggle"> --}}

            {{-- <div class="row"> --}}
                {{-- <a href="{{ asset('storage/images/gallery') . '/' . $image->name }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                    <img src="{{ asset('storage/images/gallery') . '/' . $image->name }}" class="img-fluid">
                </a> --}}
                
    <!-- Slider main container -->
        <div class="swiper lightbox-swiper" id="gallery-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="grid-wrapper" id="animated-thumbnails">
                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-1.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="" />
                    </div>
                    
                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-2.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-3.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" alt="">
                    </div>

                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-4.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-5.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-6.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-6.jpg') }}" alt="" />
                    </div>

                    <div class="big" data-src="{{ asset('storage/images/gallery/img-7.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-7.jpg') }}" alt="" />
                    </div>

                    <div data-src="{{ asset('storage/images/gallery/img-8.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" alt="" />
                    </div> 
                </div>
            </div>
            <div class="swiper-slide">
                <div class="grid-wrapper" id="animated-thumbnails">
                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-1.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="" />
                    </div>
                    
                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-2.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-3.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" alt="">
                    </div>

                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-4.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-5.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-6.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-6.jpg') }}" alt="" />
                    </div>

                    <div class="big" data-src="{{ asset('storage/images/gallery/img-7.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-7.jpg') }}" alt="" />
                    </div>

                    <div data-src="{{ asset('storage/images/gallery/img-8.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" alt="" />
                    </div> 
                </div>
            </div>
            {{-- <div class="swiper-slide">Slide 3</div>
            ...
            </div> --}}
            <!-- If we need pagination -->
            {{-- <div class="swiper-pagination"></div> --}}
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
                
                <div class="lightbox-swiper">
                    <div class="swiper-wrapper"  id="lg-swipper">
                        <div class="swiper-slide">
                            {{-- <div class="grid-wrapper" id="animated-thumbnails">
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-1.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="" />
                                </div>
                                
                                <div class="wide" data-src="{{ asset('storage/images/gallery/img-2.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" alt="" />
                                </div>
    
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-3.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" alt="">
                                </div>
    
                                <div class="wide" data-src="{{ asset('storage/images/gallery/img-4.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" alt="" />
                                </div>
    
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-5.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="" />
                                </div>
    
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-6.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-6.jpg') }}" alt="" />
                                </div>
    
                                <div class="big" data-src="{{ asset('storage/images/gallery/img-7.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-7.jpg') }}" alt="" />
                                </div>
    
                                <div data-src="{{ asset('storage/images/gallery/img-8.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" alt="" />
                                </div> 
                            </div> --}}
                        </div>
                        {{-- <div class="swiper-slide">
                             <div class="grid-wrapper" id="animated-thumbnails">
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-1.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="" />
                                </div>
                                
                                <div class="wide" data-src="{{ asset('storage/images/gallery/img-2.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" alt="" />
                                </div>
    
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-3.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" alt="">
                                </div>
    
                                <div class="wide" data-src="{{ asset('storage/images/gallery/img-4.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" alt="" />
                                </div>
    
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-5.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="" />
                                </div>
    
                                <div class="tall" data-src="{{ asset('storage/images/gallery/img-6.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-6.jpg') }}" alt="" />
                                </div>
    
                                <div class="big" data-src="{{ asset('storage/images/gallery/img-7.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-7.jpg') }}" alt="" />
                                </div>
    
                                <div data-src="{{ asset('storage/images/gallery/img-8.jpg') }}">
                                    <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" alt="" />
                                </div> 
                            </div>
                        </div> --}}
                    </div>
                        <!-- If we need navigation buttons -->
                        {{-- <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div> --}}
                </div>



                {{-- <div id="animated-thumbnails" class="row">
                    <div class="col-lg-3 p-0 height-bx-sm">
                        <a href="{{ asset('storage/images/gallery/img-1.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-1.jpg') }}"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 p-0 height-bx-lg">
                        <a href="{{ asset('storage/images/gallery/img-2.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-2.jpg') }}"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 p-0 height-bx-sm">
                        <a href="{{ asset('storage/images/gallery/img-1.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-1.jpg') }}"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 p-0 height-bx-lg">
                        <a href="{{ asset('storage/images/gallery/img-1.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-1.jpg') }}"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 p-0 height-bx-lg">
                        <a href="{{ asset('storage/images/gallery/img-1.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-1.jpg') }}"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 p-0 height-bx-sm">
                        <a href="{{ asset('storage/images/gallery/img-1.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-1.jpg') }}"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 p-0 height-bx-lg">
                        <a href="{{ asset('storage/images/gallery/img-1.jpg') }}">
                            <div class="img-bx">
                                <img alt="img1" src="{{ asset('storage/images/gallery/img-1.jpg') }}"/>
                            </div>
                        </a>
                    </div>

                </div> --}}
                
        {{-- </div> --}}
    </section>


    {{-- Meetings Cards --}}
    <section class="container meetup-card mt-5">
        <div class="row">
            {{-- Card 1 --}}
            <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="card-img">
                    <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" class="card-img-top" alt="...">
                </div>
 
                <div class="card-body">
                    <p class="card-hdr">small business meetup</p>
                    <p class="card-date">tue, 09 Jan | Mountain View</p>
                    <a href="#" class="meetup-btn"><button>rsvp</button></a>
                </div>
            </div>
            
            {{-- Card 2 --}}
            <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="card-img">
                    <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" class="card-img-top" alt="...">
                </div>
                
                <div class="card-body">
                    <p class="card-hdr">City Networking Event</p>
                    <p class="card-date">tue, 06 feb | flatiron district</p>
                    <a href="#" class="meetup-btn"><button>rsvp</button></a>
                </div>
            </div>
            
            {{-- Card 3 --}}
            <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="card-img">
                    <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" class="card-img-top" alt="...">
                </div>
                
                <div class="card-body">
                    <p class="card-hdr">sunset rooftop party</p>
                    <p class="card-date">sat, 17 mar | west village</p>
                    <a href="#" class="meetup-btn"><button>rsvp</button></a>
                </div>
            </div>


        </div>
    </section>

    {{-- 24/7 Phone support SECTION START --}}
    <section class="container support-wrapper" id="wrapper-1">
        <div class="row">
            <div class="banner-wrapper col-lg-4 offset-lg-1 col-md-5 offset-md-1 offest-sm-1 col-sm-10 col-12">
                <img src="{{ asset('storage/images/slider/img-1.jpg') }}" alt="">
                <div class="border-box" style="background: #fff; left: -10px; bottom: -20px"></div>
            </div>
            <div class="side-txt-wrapper col-lg-6 col-md-5 col-sm-10 col-12">
                <div>
                    <h3>24/7 <br> phone support</h3>
                    <h4>Outstanding Quality</h4>
                    <p>this is your feature description. Write a short blurb explaning what the feature is and why it matter for visitors. customers or clients. Don't be afraid tot your own horn! Take this opportunity to emphasize the important benefits or key advantages.</p>
                </div>
            </div>
            
        </div>
        
        
        
    </section>
    {{-- 24/7 Phone support SECTION END --}}



<!-- News Section START -->
{{-- <section class="container-fluid news-sec">
    
    <div class="container">
        <h2>OUR NEWS</h2>

        <!-- News Tabs -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Latest News</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Videos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Women's Team News</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Youth Team News</button>
            </li>
        </ul>

        <div class="tab-content container-fluid" id="pills-tabContent">
            
            <!-- News Tab 1 -->
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                
                <!-- News Cards -->
                <div class="news-row"> 

                    <!-- News 1 -->
                    <div class="card">
                        <img src="assets/images/news/image-1.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919" target="_blank">
                                <p class="news-hdr">'It's always a taboo': Southall's 'first ever all-female football team' trying</p>
                                <p class="news-date">29 JUN, 2021</p>
                                <!-- <p class="card-text">Despite decades of awareness and attempts at change, the representation of British Asian people in professional football is pitifully low. According to a report commissioned by the Football Supporters’</p> -->
                            </a>
                        </div>
                    </div>
                    
                    <!-- News 2 -->
                    <div class="card">
                        <img src="assets/images/news/image-2.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/" target="_blank">
                                <p class="news-hdr">Southall gets first ever all-female football team</p>
                                <p class="news-date">8 August, 2021</p>
                            <!-- <p class="card-text">A new women's football team in west London's "Little India" hopes to encourage diversity in football. It follows government research in 2020 that suggested Asian women were the least physically active group.</p> -->
                            </a>
                        </div>

                        <!-- <div class="d-flex justify-content-center">
                            <a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/" target="_blank" class="read-more-btn"><button type="button" class="btn btn-primary">Read More</button></a>
                        </div> -->
                    </div>
        
                    <!-- News 3 -->
                    <div class="card">
                        <img src="assets/images/news/image-1.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919" target="_blank">
                                <p class="news-hdr">'It's always a taboo': Southall's 'first ever all-female football team' trying</p>
                                <p class="news-date">29 JUN, 2021</p>
                            <!-- <p class="card-text">Despite decades of awareness and attempts at change, the representation of British Asian people in professional football is pitifully low. According to a report commissioned by the Football Supporters’</p> -->
                            </a>
                        </div>
                    </div>

                    <!-- News 4 -->
                    <div class="card">
                        <img src="assets/images/news/image-1.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919" target="_blank" >
                                <p class="news-hdr">'It's always a taboo': Southall's 'first ever all-female football team' trying</p>
                                <p class="news-date">29 JUN, 2021</p>
                            </a>
                            <!-- <p class="card-text">Despite decades of awareness and attempts at change, the representation of British Asian people in professional football is pitifully low. According to a report commissioned by the Football Supporters’</p> -->
                        </div>
                    </div>

                    <div class="view-all-btn">
                        <a href="#"><button>View All</button></a>
                    </div>

                </div>
            </div>

            <!-- News Tab 2 -->
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                <div class="news-row row"> 
                    <!-- News 2 -->
                    <div class="card">
                        <img src="assets/images/news/image-2.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/" target="_blank">
                                <p class="news-hdr">Southall gets first ever all-female football team</p>
                                <p class="news-date">8 August, 2021</p>
                            <!-- <p class="card-text">A new women's football team in west London's "Little India" hopes to encourage diversity in football. It follows government research in 2020 that suggested Asian women were the least physically active group.</p> -->
                            </a>
                        </div>

                        <!-- <div class="d-flex justify-content-center">
                            <a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/" target="_blank" class="read-more-btn"><button type="button" class="btn btn-primary">Read More</button></a>
                        </div> -->
                    </div>
        
                    <!-- News 3 -->
                    <div class="card">
                        <img src="assets/images/news/image-1.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919" target="_blank">
                                <p class="news-hdr">'It's always a taboo': Southall's 'first ever all-female football team' trying</p>
                                <p class="news-date">29 JUN, 2021</p>
                            <!-- <p class="card-text">Despite decades of awareness and attempts at change, the representation of British Asian people in professional football is pitifully low. According to a report commissioned by the Football Supporters’</p> -->
                            </a>
                        </div>
                    </div>

                    <!-- News 4 -->
                    <div class="card">
                        <img src="assets/images/news/image-1.jpg" class="card-img-top" alt="...">

                        <div class="card-body">
                            <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919" target="_blank" >
                                <p class="news-hdr">'It's always a taboo': Southall's 'first ever all-female football team' trying</p>
                                <p class="news-date">29 JUN, 2021</p>
                            </a>
                            <!-- <p class="card-text">Despite decades of awareness and attempts at change, the representation of British Asian people in professional football is pitifully low. According to a report commissioned by the Football Supporters’</p> -->
                        </div>
                    </div>

                    <div class="view-all-btn">
                        <a href="#"><button>View All</button></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
          </div>

    </div>

</section> --}}
<!-- News Section END -->

<!-- Promo Banner START -->
<section id="promo-banner" class="container-fuild">
    <div class="banner-overlay"></div>
    <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="">
</section>
<!-- Promo Banner END -->


<!-- Social Media Section START -->
<section class="social-media-sec">
    <div class="container">
        <h2 class="sec-hdr">Follow Us</h2>
        <p class="follow-us-des">This is you Donate section paragraph. Encourge your site visitors to provide their information so that you can get in touch about how they <br> can make a donation to your Gaming Club.</p>
        
        <!-- Social Media Icons -->
        <div class="social-icons">
            <ul>
                <li><a href="https://www.facebook.com/the.playerscorner/" target="_blank"><i class="bi bi-facebook"></i> <span>facebook</span></a></li>
                <li><a href="https://www.instagram.com/the.playerscorner/" target="_blank"><i class="bi bi-instagram"></i> <span>instagram</span></a></li>
                <li><a href="https://www.linkedin.com/company/the-players-corner" target="_blank"><i class="bi bi-linkedin"></i><span>linkedin</span></a></li>
                <li><a href="https://www.twitter.com/thepc_official" target="_blank"><i class="bi bi-twitter"></i> <span>twitter</span></a></li>
            </ul>
        </div>
        {{-- Social live feed --}}
        <div class="social-feed row">
            <!-- Instagram Feed -->
                <div class="nopadding col-lg-4 col-md-4 col-sm-4 col-12" id="insta-feed">
                    <h3 style="text-align: center" class="feed-hdr">Follow Us on Instagram</h3>
                    <div id="instafeed-container"></div>
                    
                    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
                    <script type="text/javascript">
                        var userFeed = new Instafeed({
                            get: 'user',
                            target: "instafeed-container",
                            resolution: 'low_resolution',
                            accessToken: 'IGQWRPYjdLSWYwY0lMcDd5aDNhZAURpS0tiMmpIelI5bUZAGMjBRbzc0MDVCMUZAnVHhQa0dqZATdITGdTZAmE1cTRZAZAHpVajhUcVQ0Xzk3RW1EZAnVibHY4c1o5eU4wNW1oeTY1M185VmplZAkdsM3VrcDd3bklPVzJRNkEZD'
                        });
                        userFeed.run();
                    </script>
    
                    <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=UCafm3C_bpyMEdua4UbUFsyA&synd=open&w=320&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>	
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthe.playerscorner%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                </div>
                <a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>

                    
            {{-- <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
            <script type="text/javascript">
                var userFeed = new Instafeed({
                    get: 'user',
                    target: "instafeed-container",
                    resolution: 'low_resolution',
                    accessToken: 'IGQWRPYjdLSWYwY0lMcDd5aDNhZAURpS0tiMmpIelI5bUZAGMjBRbzc0MDVCMUZAnVHhQa0dqZATdITGdTZAmE1cTRZAZAHpVajhUcVQ0Xzk3RW1EZAnVibHY4c1o5eU4wNW1oeTY1M185VmplZAkdsM3VrcDd3bklPVzJRNkEZD'
                });
                userFeed.run();
            </script> --}}
    
</section>
<!-- Social Media Section END -->

{{-- Contact Us START --}}
<section class="container-fuild contact-us-sec">
    <div class="container contact-block">
        <div class="row">
            <div class="left-bx col-lg-6 col-md-6 col-sm-12">
                <h2 class="sec-hdr">Contact Us</h2>
                <div>
                    <p>Colnbrook Cour, Old Bath road, Colnbrook, Berkshine SL3 ONN</p>
                    <a href="mailto:hello@theplayerscorner.co.uk">hello@theplayerscorner.co.uk</a>
                    <p>020 3289 1181</p>
                </div>
            </div>
    
            <div class="right-bx col-lg-6 col-md-6 col-sm-12 p-0">
                <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="">
            </div>
        </div>

    </div>
</section>
{{-- Contact Us END --}}
<!-- Partners Section START -->
{{-- <section class="partners-sec">
    <div class="container">
        <div class="logo-1">
            <a href="index.html"><img src="assets/images/image051.png" alt=""></a>
        </div>

        <div class="logo-1">
            <img src="assets/images/partners/1. Logo - Chana Chemist (White).png" alt="">
        </div>

        <!-- Partners Logos -->
        <div class="partners-logos-con">
            <div class="logo-bl">
                <img src="assets/images/partners/2. Logo - Bang & Olufsen (White).png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/3. Logo - Canvas Cosmetics (White).png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/4. Logo_Cargo-Overseas_White.png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/5. Logo - Chana Media (White).png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/6. Logo - Church-Street-Dental.png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/7._Logo_-_Ealing_Council_White.png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/9.Logo.png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/7. Logo - Maina Group of Companies (White).png" alt="">
            </div>
            <div class="logo-bl">
                <img src="assets/images/partners/8. Logo - Queens Pharmacy Southall.png" alt="">
            </div>
        </div>
    </div>

</section> --}}
<!-- Partners Section END -->
<footer>
    <div class="footer-wrap" >
                        
        <div>
            <span>Designed by Naveen</span> 
        </div>
        <div class="copyright">Copyright ©<span class="currentYear"></span> &nbsp;<a href="{{ route('home') }}">The Players Corner</a>. All Rights Reserved.</div>

        {{-- <ul class="doc-links">
            <li>
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
            </li>
            <li>
                <a href="{{ route('terms-of-use') }}">Terms of Use</a>
            </li>
            <li>
                <a href="{{ route('terms-of-use') }}">Accessibility</a>
            </li>
            <li>
                <a href="{{ route('company-details') }}">Company Details</a>
            </li>
            <li>
                <a href="{{ route('digital-privacy') }}">Digital Privacy Policy</a>
            </li>
        </ul> --}}
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.umd.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.umd.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.umd.js"></script>

<script type="text/javascript">
    lightGallery(document.getElementById('animated-thumbnails'), {
        plugins: [lgZoom],
        download: false,
        // share: false,
        speed: 500,
        // autoplayControls: false,
        
        // ... other settings
    });

    
</script>


{{-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="{{ URL::asset('assets/js/script.js') }}"></script>



