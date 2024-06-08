<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Players Corner </title>

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
                        <li class="active"><a href="{{ route('blogs') }}">Our Blog</a>
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

    <!-- Hero Banner -->
    <section class="container-fluid" id="wrapper-1">
        <div class="row">
            <div class="heroBanner col-lg-12">
                <div class="bannerText">
                    <h3>the players corner</h3>
                    <p>we're levelling the field</p>
                </div>
                <div class="topOverlay"></div>
                <div class="makeShape">sdf</div>
            </div>
        </div>
    </section>

    {{-- Our Blogs --}}
    <section class="container mt-5">
        <div class="row">
            {{-- Blogs --}}
            <div class="blogs-sec blog-view col-lg-8 col-md-7">
                <article>
                    <h4 class="blog-hdr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nisi fugit officia aliquam, expedita quas, cupiditate tenetur placeat cum suscipit laboriosam quis earum! Enim quam maiores consequuntur voluptas, asperiores fugit.</h4>
                    <p class="blog-postedBy">by <span>Allan McGoldrick </span> | Dec 29, 2018 | <span>[Searched keyword here]</span> | <span>0</span> comments</p>
                    <img src={{ asset('assets/images/blogs/img-1.jpg') }} class="img-fluid mb-4" alt="Article Image">
                    <div class="blog-des-txt">
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptatum doloribus earum id quia nemo ducimus dolorem, ullam, maxime reiciendis itaque nihil recusandae, illo amet optio expedita iste dignissimos quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt laborum cupiditate debitis corporis optio quibusdam vitae aspernatur atque ea libero rem obcaecati iusto in, accusamus a quidem ullam porro accusantium. </p>
                        <p>voluptatum doloribus earum id quia nemo ducimus dolorem, ullam, maxime reiciendis itaque nihil recusandae, illo amet optio expedita iste dignissimos quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt laborum cupiditate debitis corporis optio quibusdam vitae aspernatur atque ea libero rem obcaecati iusto in, accusamus a quidem ullam porro accusantium.</p>

                    </div>
                </article>
            </div>
            {{-- sidebar --}}
            <div class="blog-sidebar col-lg-3 col-md-4">
                <div class="search-bar">

                </div>
                {{-- Search Bar --}}
                <form class="search-bar">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search articles..." aria-label="Search articles">
                      <button class="btn btn-outline-primary srch-btn" type="button">Search</button>
                    </div>
                </form>
                {{-- Recent Blogs --}}
                <div class="recent-blogs">
                    <h4>Our Recent Articles</h4>

                    <ul>
                        <li><a href="#">Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a></li>
                        <li><a href="#">Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a></li>
                        <li><a href="#">Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a></li>
                        <li><a href="#">Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a></li>
                    </ul>
                </div>

                <hr>
                Social Media Stats
            </div>
        </div>

        <div class="col-lg-8 mt-5 comment-sec">
            <h2>Submit a Comment</h2>
            <p>Your email address will not be published. Required fields are marked *</p>
            <form>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea class="form-control" id="comment" rows="4" placeholder="Comment" required></textarea>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="url" class="form-control" id="website" placeholder="website">
                </div>
                <button type="submit" class="submit-btn submit-shadow">Submit</button>
            </form>
        </div>
    </section>
    
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
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

<script src="{{ URL::asset('assets/js/script.js') }}"></script>



