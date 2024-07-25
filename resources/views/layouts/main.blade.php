<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Players Corner</title>

    <!-- Title Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/images/favicon.png') }}">
    
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @stack('style')
    
    @livewireStyles
</head>
<body>
    
    <header class="container-fluid"> 
        <div class="row ">
    
            <!-- Navigation Bar -->
            <div class="logo-1 col-auto col-sm-5 col-md-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-1.png') }}" alt="">
                    <div class="overflow-hidden">
                        <p>The <span><br> Players Corner</span></p>
                    </div>
                </a>
            </div>
            <nav class="d-flex col-lg-7 col-md-6 pe-0 justify-content-end">
                
                <div class="nav-small " id="nav-row">
                    <ul>
                        <li class="{{ activeClass('home') }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ activeClass('about-us') }}"><a href="{{ route('about-us') }}">About us</a></li>
                        <li class="{{ activeClass('blogs.index') }}"><a href="{{ route('blogs.index') }}">Our Blog</a></li>
                        <li class="{{ activeClass('contact-us') }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
                        <li class="{{ activeClass('social-media') }}"><a href="{{ route('social-media') }}">Social Hub</a></li>
                    </ul>
                </div>

                <!-- Social Media Icons -->
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
            <div class="col-6 col-sm-auto col-md-auto d-flex justify-content-evenly align-items-center">
                <a href="{{ route('login') }}" class="primary-btn"><button><i class="bi bi-box-arrow-in-right"></i> Login</button></a>
                <a href="{{ route('register') }}" class="primary-btn register-btn"><button><i class="bi bi-pencil-square"></i> Register</button></a>
            </div>

            <button class="col-auto" id="ham-button">
                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="45" >
                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                    <path class="line middle" d="m 30,50 h 40" />
                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                </svg>
            </button>
        </div>
    </header>
    <div class="topOverlay"></div>
    
    @yield('content')
    
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
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.umd.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    {{-- <script src="{{ asset('js/toastr.min.js') }}"></script> --}}
    
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
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    {{-- <script src="{{ asset('js/toastr.js') }}"></script>     --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    {!! NoCaptcha::renderJs() !!}
    @include('sweetalert::alert')

    @stack('script')

    @livewireScripts

</body>
</html>