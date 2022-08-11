<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Southall Athletic | Home</title>
    
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/images/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="{{ asset('public/css/akslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/donate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/theme.css') }}" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='../../ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

    <link rel="stylesheet" href="https://uicdn.toast.com/chart/latest/toastui-chart.min.css" />
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
</head>

<body class="tm-isblog">

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    
    
    <div class="over-wrap">
        
        <!-- Header's upper row START-->
        <div class="toolbar-wrap">
            <div class="top-hdr-bg"></div>
            <div class="uk-container uk-container-center top-br-fx"> 
                <div class="tm-toolbar">

                    <div class="logo-bl">
                        <a class="tm-logo hdr-logo uk-float-left" href="{{ route('home') }}">
                            <img src="{{ asset('public/images/logo-img.png') }}" alt="logo" class="logo-img">
                            <span>Southall<br> <span>Athletic</span></span>
                        </a>
                    </div>
                    
                    <div class="uk-float-right">
                        <div class="uk-panel">
                            <div class="social-top">
                                <a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                <a href="https://www.linkedin.com/company/southall-afc/"><span class="uk-icon-small uk-icon-hover uk-icon-linkedin"></span></a>
                                <a href="https://twitter.com/southall_afc" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <!-- <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a> -->
                                <a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <!-- <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a> -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Header's upper row END-->
        
        <!-- Header START-->
        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                    {{-- <div class="uk-width-auto hdr-bg"> --}}
                       
                        <div class="uk-container uk-container-center" style="width: 100%; display: flex;">
                            <div class="logo-bl lower-nav-logo">
                                <a class="tm-logo hdr-logo uk-float-left" href="{{ route('home') }}">
                                    <img src="{{ asset('public/images/logo-img.png') }}" alt="logo" class="logo-img">
                                    {{-- <span>Southall<br> <span>Athletic</span></span> --}}
                                </a>
                            </div>

                            {{-- <div class="uk-width-1-1 uk-hidden-small nav-block1"> --}}
                                <ul class="uk-navbar-nav uk-hidden-small" style="width: 100%">
                                    <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('home') }}">Home</a></li>
                                    <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('community') }}">Community</a></li>
                                    
                                    <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="teams.html">Teams</a></li>
                                    
                                    <li><a href="news.html">News</a></li>


                                     <li><a href="offline.html">Social media</a>
                                    <li><a href="sponsors.html">Affiliations & Partners</a>
                                    
                                    <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="gallery.html">Gallery</a></li>
                                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                            <div class="uk-grid uk-dropdown-grid">
                                                <div class="uk-width-1-1">
                                                    <ul class="uk-nav uk-nav-navbar">
                                                        <li><a href="results.html">Results</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li><a href="{{ route('club-shop') }}">Club Shop</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                                </ul>
                            {{-- </div> --}}
                            
                            {{-- <div class="logo-bl">
                                <a class="tm-logo hdr-logo uk-float-left" href="{{ route('home') }}">
                                    <img src="{{ asset('public/images/logo-img.png') }}" alt="logo" class="logo-img">
                                </a>
                            </div> --}}

                        {{-- </div> --}}

                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>
        <!-- Header END-->

        @yield('content')

        <!-- Footer START -->
        <div class="bottom-wrapper">
            <div class="bg-overlay"></div>
            
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-c" class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                    
                    <div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 sp-fix1 uk-row-first" style="padding-right: 35px;">
                        {{-- <div class="sponsers-title">
                            <h3>IN <span>ASSOCIATION</span> WITH</h3>
                        </div> --}}
                        <div class="uk-panel">
                            <div class="sponser-main-page-wrap">
                                <div class="latest_products jshop">
        
                                    <div data-uk-slider="{center:true, autoplay:true, pauseOnHover:true, autoplayInterval:5000}" dir="ltr">
        
                                        <div class="uk-slider-container">
                                            <ul class="uk-slider uk-grid-width-large-1-6 uk-grid-width-medium-1-4 uk-grid-width-small-1-1  uk-grid uk-grid-medium" style="min-width: 5745.94px; min-height: 150px; transform: translateX(-319.25px);">
        
                                                <li class="block_item uk-slide-before" style="left: 0px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://ealing.gov.uk/" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-1.png" alt="Sportswear outerwear coats">
                                                        </a>
                                                    </div>
                                                </li>
                                                
                                                <li class="block_item uk-slide-before" style="left: 212.812px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://englandfootball.com/run/leagues-and-clubs/england-football-accreditation " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-7.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-slide-before" style="left: 425.625px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://thefa.com/get-involved/respect" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-8.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-slide-before" style="left: 638.438px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://middlesexfa.com" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-9.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-active" style="left: 851.25px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://thisgirlcan.co.uk " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-10.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-slide-after" style="left: 1064.06px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://chanachemist.co.uk " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-11.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-slide-after" style="left: 1276.88px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://churchstreetdental.london" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-3.png" alt="Waterproof jackets">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-slide-after" style="left: 1489.69px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://instagram.com/queenspharmacysouthall/ " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-4.png" alt="Waterproof jackets">
                                                        </a>
                                                    </div>
                                                </li>
        
                                                <li class="block_item uk-slide-after" style="left: 1702.5px; width: 212.812px;">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://cargo-overseas.co.uk/" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-5.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li>
                                            <li class="block_item uk-slide-after" style="left: 1915.31px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://ealing.gov.uk/" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-1.png" alt="Sportswear outerwear coats">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 2128.12px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://englandfootball.com/run/leagues-and-clubs/england-football-accreditation " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-7.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 2340.94px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://thefa.com/get-involved/respect" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-8.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 2553.75px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://middlesexfa.com" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-9.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 2766.56px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://thisgirlcan.co.uk " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-10.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 2979.38px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://chanachemist.co.uk " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-11.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 3192.19px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://churchstreetdental.london" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-3.png" alt="Waterproof jackets">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 3405px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://instagram.com/queenspharmacysouthall/ " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-4.png" alt="Waterproof jackets">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 3617.81px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://cargo-overseas.co.uk/" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-5.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 3830.62px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://ealing.gov.uk/" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-1.png" alt="Sportswear outerwear coats">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 4043.44px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://englandfootball.com/run/leagues-and-clubs/england-football-accreditation " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-7.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 4256.25px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://thefa.com/get-involved/respect" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-8.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-after" style="left: 4469.06px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://middlesexfa.com" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-9.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-before" style="left: -1064.06px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://thisgirlcan.co.uk " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-10.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-before" style="left: -851.25px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://chanachemist.co.uk " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-11.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-before" style="left: -638.438px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://churchstreetdental.london" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-3.png" alt="Waterproof jackets">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-before" style="left: -425.625px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://instagram.com/queenspharmacysouthall/ " target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-4.png" alt="Waterproof jackets">
                                                        </a>
                                                    </div>
                                                </li><li class="block_item uk-slide-before" style="left: -212.812px; width: 212.812px;" id="">
                                                    <div class="image_block">
                                                        <a draggable="false" href="https://cargo-overseas.co.uk/" target="_blank">
                                                            <img draggable="false" class="jshop_img" src="http://127.0.0.1:8000/public/images/sponsers/img-5.png" alt="Thermoball Insulated Jacket">
                                                        </a>
                                                    </div>
                                                </li></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="fun-shop-btn">
                                    <a href="sponsors.html"><span>View all</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    
                    
                </section>
            </div>

            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                                <a class="hdr-logo uk-float-left" href="index.html">
                                    <img src="{{ asset('public/images/logo-img.png') }}" alt="logo" title="logo">
                                    <span>Southall<br> <span>Athletic</span></span>
                                </a>
                                
                                <div class="clear"></div>

                                <p class="footer-about-text">
                                    Southall Athletic F.C. was started primarily due to the lack of 11-a-side football opportunities within the community, this coincided with the figures released by the FA on how underrepresented the South-East Asian community was in football. 
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            

            <footer id="tm-footer" class="tm-footer">

                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap" style="display: flex; justify-content: space-between;">
                                    
                                    <div class="copyrights">Copyright © 2022 <a href="../index.html">Southall Athletic</a>. All Rights Reserved.</div>
                                    <div class="clear"></div>

                                    <ul class="doc-links">
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms of Use</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </footer>

        </div>
        <!-- Footer END -->

        <!-- Mobile Menu Sidebar START-->
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-parent uk-active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                    <li><a href="{{ route('community') }}">Community</a></li>
                    
                    <li class="uk-parent"><a href="teams.html">Teams</a></li>

                    <li><a href="news.html">News</a></li>

                    <li class="uk-parent"><a href="offline.html">Social Media</a></li>
                    <li class="uk-parent"><a href="offline.html">Affiliations & Partners</a></li>
                    <li class="uk-parent"><a href="gallery.html">gallery</a></li>
                    <li class="uk-parent"><a href="{{ route('club-shop') }}">Club Shop</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                </ul>
            </div>

        </div>
        <!-- Mobile Menu Sidebar END-->

    </div>

    

    <script type="text/javascript" src="{{ asset('public/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/uikit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/SimpleCounter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/grid.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/slideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/slideset.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/isotope.pkgd.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/theme.js') }}"></script>
    <script type="text/javascript">
        
        new SimpleCounter("countdown4", 1476154800, {
        'continue': 0,
        format: '{D} {H} {M} {S}',
        lang: {
            d: {
                single: 'day',
                plural: 'days'
            }, //days
            h: {
                single: 'hr',
                plural: 'hrs'
            }, //hours
            m: {
                single: 'min',
                plural: 'min'
            }, //minutes
            s: {
                single: 'sec',
                plural: 'sec'
            } //seconds
        },
        formats: {
            full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
            shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
        }
    });


    </script>

    @stack('script')

</body>
</html>