<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Players Corner | Our Blogs</title>

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header class="container-fluid"> 
        <div class="row justify-content-center">
            <!-- Navigation Bar -->
            <div class="logo-1 col-6 col-sm-7 col-md-auto">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-1.png') }}" alt="">
                    <p>The <span><br> Players Corner</span></p>
                </a>
            </div>
            <nav class="d-flex col-lg-7 col-md-7 ps-0 justify-content-between">

                <div class="nav-small offset-md-2" id="nav-row">
                    
                    <ul>
                    
                        <li class="active-link"><a href="{{ route('home') }}">Home</a>
                        <li class="active"><a href="404">About us</a>
                        <li class="active"><a href="{{ route('blogs.index') }}">Our Blog</a>
                        <li class="active"><a href="{{ route('contact-us') }}">Contact us</a>
                            {{-- <i class="bi bi-caret-down-fill"></i>
                            <!-- Drop Down menu -->
                            <ul class="sub-menu">
                                <li><a href="#">Safeguarding Policy</a></li>
                                <li><a href="#">Inclusion & Diversity</a></li>
                            </ul> --}}
                        </li>
                        
                    </ul>
                        
                </div>
                <div class="social-icons hdr-social-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/the.playerscorner/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/the.playerscorner/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/the-players-corner" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://www.twitter.com/thepc_official" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                    </ul>
                </div>

            </nav>
            {{-- Login button to portal --}}
            <div class="col-auto d-flex align-items-center">
                <a href="#" class="primary-btn"><button><i class="bi bi-box-arrow-in-right"></i> Login</button></a>
            </div>
            <button class="col-auto" id="ham-button">
                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="45" onclick="this.classList.toggle('active')">
                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                    <path class="line middle" d="m 30,50 h 40" />
                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                </svg>
                
            </button>
        </div>
    </header>
{{-- @section('content') --}}
<section id="page-dev-sec" class="container-fluid">

    <div class="mid-bl">
        <div class="d-flex">
            <div class="logo-1">
                <a href="http://127.0.0.1:8000">
                    <img src="assets/images/logo-1.png" alt="">
                </a>
            </div>
            <div>
                <p>Under Construction</p>
                <h3>Great things are Coming..!!</h3>
            </div>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href="https://www.facebook.com/the.playerscorner/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/the.playerscorner/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/the-players-corner" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="https://www.twitter.com/thepc_official" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
            </ul>
        </div>
    </div>
</section>
{{-- @endsection --}}

<footer>
    <div class="footer-wrap" >
                        
        <div>
            <span>Designed by Naveen</span> 
        </div>
        <div class="copyright">
            Copyright ©<span class="currentYear"></span> &nbsp;
            <a href="{{ route('home') }}">The Players Corner</a>. All Rights Reserved.

        </div>
        <ul class="doc-links">
            <li><a href="#" target="_blank">Privacy Policy</a></li>
            <li><a href="#" target="_blank">Terms of use</a></li>
            <li><a href="#" target="_blank">Accessibility</a></li>
            <li><a href="#" target="_blank">Company details</a></li>
        </ul>
    </div>
</footer>

</body>
</html>

