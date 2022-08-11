<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southall Athletic</title>

    <!-- Title Icon -->
    <link rel="icon" type="image/x-icon" href="assets/images/title-logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
                    <a href="index.html">
                        <img src="assets/images/logo-img.png" alt="">
                        <p>Southall <br>Athletic</p>
                    </a>
                </div>
                
                <!-- Right Side Logos -->
                <div class="right-logos">
                    <div>
                        <img src="assets/images/England-logo.png" alt="">
                    </div>
                    <div>
                        <p class="mb-0">MAIN CLUB PARTNER </p>
                        <div class="chana-logo">
                            <img src="assets/images/partners/1. Logo - Chana Chemist (White).png" alt="">
                        </div>
                    </div>
                </div>
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
                        <a href="index.html"><img src="assets/images/logo-img.png" alt=""></a>
                    </div>

                    <li class="active-link"><a href="news.html">News</a>
                        <i class="bi bi-caret-down-fill"></i>
                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Latest Videos</a></li>
                            <li><a href="#">Women News</a></li>
                            <li><a href="#">Youth News</a></li>
                            <li><a href="#">Newsletter Sign up</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="club.html">Club </a>
                        <i class="bi bi-caret-down-fill"> </i>
                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="#">Club Information</a></li>
                            <li><a href="#">Safeguarding Policy</a></li>
                            <li><a href="#">Inclusion & Diversity</a></li>
                            <li><a href="#">Social Media</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Club Shop</a></li>
                        </ul>
                    </li>

                    <li><a href="community.html">Community</a></li>

                    <li><a href="teams.html">Teams </a>
                        <i class="bi bi-caret-down-fill"></i>

                        <!-- Drop Down menu -->
                        <ul class="sub-menu">
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Youth Teams</a></li>
                        </ul>
                    </li>
                    <li><a href="matches.html">Matches </a>
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
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                </ul>

                <div class="login-srch">
                    <ul>
                        <li><a href="account.html">Login/Register </a>
                            <i class="bi bi-caret-down-fill"></i>
                            <!-- Drop Down menu -->
                            <ul class="sub-menu">
                                <li><a href="account.html">My Athletic Hub</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="srch-bar">
                        <button class="srch-i"><i class="bi bi-search"></i></button>
                        <form action="" class="search-box">
                            <input type="text" class="input-srch" placeholder="Type here to search..." />
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

        @yield('content')

        <footer>
            <div class="footer-wrap" >
                                
                <div class="copyright">Copyright © <span class="currentYear"></span> &nbsp;<a href="index.html"> Southall Athletic</a>. All Rights Reserved. <br><span>Designed by Naveen</span></div>
    
                <ul class="doc-links">
                    <li>
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ route('terms-of-use') }}">Terms of Use</a>
                    </li>
                    <li>
                        <a href="{{ route('company-details') }}">Company Details</a>
                    </li>
                    <li>
                        <a href="{{ route('digital-privacy') }}">Digital Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </footer>
    
    
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/index.bundle.min.js"></script>
    </body>
    </html>