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

        @if (isset($_GET['search']) && !empty($_GET['search']))
            <h3 class="text-white">{{ $blogs->count() > 0? $blogs->count(): 'No any' }} Blogs found with "{{ $_GET['search'] }}"</h3>
            <hr>
        @endif
        
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
                <form class="search-bar" action="{{ route('blogs.index') }}">
                    <div class="input-group">
                      <input type="text" class="form-control" name="search" placeholder="Search articles..." aria-label="Search articles">
                      <button type="submit" class="btn btn-outline-primary srch-btn" type="button">Search</button>
                    </div>
                </form>

                {{-- <x-autocomplete-search /> --}}
                {{-- @livewire('autocomplete-search') --}}
                
                {{-- Recent Blogs --}}
                <div class="recent-blogs">
                    <h4>Our Recent Articles</h4>

                    <ul>
                        @foreach ($recentBlogs as $recentBlog)
                            <li><a href="{{ route('blogs.show', $recentBlog->id) }}">{{ $recentBlog->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <hr>
                Social Media Stats
            </div>
        </div>

        {{ $blogs->links() }}


    </section>

@endsection