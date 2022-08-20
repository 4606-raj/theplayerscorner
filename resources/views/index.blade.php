@extends('layouts.main')

@section('content')
<!-- Wrapper 1 -->
<section class="container" id="wrapper-1">
    <!-- Main Slider -->
    <div id="hero-slider" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="slider-over">
                <p>WE ARE THE COMMUNITY.</p>
                <p>We are <span>SouthALL Athletic</span> Football Club!!!</p>
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
    
    <div class="container-fluid gallery-sec">

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
                        <a href="assets/images/Gallery/img-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="assets/images/Gallery/img-1.jpg" class="img-fluid">
                        </a>
                    </div>
                @endforeach

            </div>

            <!-- Videos Tab 2 -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Coming Soon..!!</div>
          </div>
    </div>

    
</section>

<!-- News Section START -->
<section class="container-fluid news-sec">
    
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

</section>
<!-- News Section END -->

<!-- Promo Banner START -->
<section id="promo-banner" class="container">
    <div id="promo-content">
        <div class="contact-dt">
            <p><i class="bi bi-telephone-fill"></i>0808 800 5000 </p>
            <a href="mailto: help@nspcc.org.uk"><i class="bi bi-envelope-fill"></i>help@nspcc.org.uk </a>
        </div>
        <div class="logos-row">
            
            <div class="logo-1">
                <img src="{{ asset('assets/images/partners/logo-1.png') }}" alt="">
            </div>
            <div class="logo-2">
                <img src="{{ asset('assets/images/partners/logo-2.png') }}" alt="">
            </div>
            <div class="logo-3">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/Logo_Southall-Athletic-F.C_Capri.png') }}" alt=""></a>
            </div>
        </div>
        <div class="logo-row-2">
            <div class="logo-4">
                <p>In partnership with</p>
                <a href="https://www.nspcc.org.uk/" target="_blank"><img src="{{ asset('assets/images/partners/logo-4.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- Promo Banner END -->


<!-- Social Media Section START -->
<section class="social-media-sec">
    <div class="container">
        <h2 class="sec-hdr">Follow Us</h2>

         <!-- Social Media Icons -->
            <div class="social-icons">
                <ul>
                    <li><a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><i class="bi bi-facebook"></i> <span>facebook</span></a></li>
                    <li><a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><i class="bi bi-instagram"></i> <span>instagram</span></a></li>
                    <li><a href="https://www.linkedin.com/company/southall-afc/" target="_blank"><i class="bi bi-linkedin"></i><span>linkedin</span></a></li>
                    <li><a href="https://twitter.com/southall_afc" target="_blank"><i class="bi bi-twitter"></i> <span>twitter</span></a></li>
                    <li><a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><i class="bi bi-youtube"></i><span>youtube</span></a></li>
                </ul>
            </div>
    </div>

</section>
<!-- Social Media Section END -->

<!-- Partners Section START -->
<section class="partners-sec">
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

</section>
<!-- Partners Section END -->

@endsection