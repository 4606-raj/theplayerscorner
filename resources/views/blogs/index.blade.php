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
                    @foreach ($blogs as $blog)
                        
                        <div class="col">
                            <div class="card h-100">
                                <img src={{ $blog->cover_image }} class="card-img-top" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href={{route('blogs.show', $blog->id)}}>{{ $blog->title }}</a>
                                    </h5>
                                    <p class="card-text postedBy">By <span>{{ $blog->author }}</span> | {{ $blog->category }}</p>
                                    <p class="card-text">{!! substr($blog->content, 0, 200) !!}</p>
                                    <a href={{route('blogs.show', $blog->id)}} class="btn btn-primary readMore-btn">Read more</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    
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

        {{ $blogs->links() }}


    </section>

@endsection