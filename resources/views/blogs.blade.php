@extends('layouts.main')
@section('content')

    <!-- Hero Banner -->
    <section class="container-fluid" id="wrapper-1">
        <div class="row">
            <div class="heroBanner col-lg-12">
                <div class="bannerText">
                    <h3>the players corner</h3>
                    <p>we're levelling the field</p>
                </div>
                <div class="topOverlayBanner"></div>
                <div class="makeShape"></div>
            </div>
        </div>
    </section>

    {{-- Our Blogs --}}
    <section class="container mt-5">
        <div class="row">
            {{-- Blogs --}}
            <div class="blogs-sec col-lg-8 col-md-7">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4" data-masonry='{"percentPosition": true }'>
                    {{-- card 1 --}}
                    <div class="col">
                        <div class="card h-100">
                            <img src={{ asset('assets/images/blogs/img-1.jpg') }} class="card-img-top" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href={{route('blog-view')}}>Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a>
                                </h5>
                                <p class="card-text postedBy">By <span>Allan McGoldrick</span> | Boxing</p>
                                <p class="card-text">When former WBO Super-featherweight boxing champion Alex Arthur told a young Josh Taylor in his Meadowbank Sports Centre gym to 'get up and hit the bag' little did he know then history was in the making. Josh Taylor will tell you himself it was this meeting many years...</p>
                                <a href={{route('blog-view')}} class="btn btn-primary readMore-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="col">
                        <div class="card h-100">
                            <img src={{ asset('assets/images/blogs/img-2.jpg') }} class="card-img-top" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{route('blog-view')}}">Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a>
                                </h5>
                                <p class="card-text postedBy">By <span>Allan McGoldrick</span> | Boxing</p>
                                <p class="card-text">When former WBO Super-featherweight boxing champion Alex Arthur told a young Josh Taylor in his Meadowbank Sports Centre gym to 'get up and hit the bag' little did he know then history was in the making. Josh Taylor will tell you himself it was this meeting many years...</p>
                                <a href="{{route('blog-view')}}" class="btn btn-primary readMore-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="col">
                        <div class="card h-100">
                            <img src={{ asset('assets/images/blogs/img-3.jpg') }} class="card-img-top" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{route('blog-view')}}">Scotland's First Ring Magazine Junior Welterweight Champion Josh Taylor Targets Clean Sweep of The 140lb Division</a>
                                </h5>
                                <p class="card-text postedBy">By <span>Allan McGoldrick</span> | Boxing</p>
                                <p class="card-text">When former WBO Super-featherweight boxing champion Alex Arthur told a young Josh Taylor in his Meadowbank Sports Centre gym to 'get up and hit the bag' little did he know then history was in the making. Josh Taylor will tell you himself it was this meeting many years...</p>
                                <a href="{{route('blog-view')}}" class="btn btn-primary readMore-btn">Read more</a>
                            </div>
                        </div>
                    </div>

                </div>
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

    </section>

@endsection