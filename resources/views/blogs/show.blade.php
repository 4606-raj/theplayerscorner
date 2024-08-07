@extends('layouts.main')
@section('content')

    <!-- Hero Banner -->
    <section class="container-fluid" id="wrapper-1">
        <div class="row">
            <div class="heroBanner col-lg-12">
                <div class="bannerText">
                    <h3 class="animate__animated animate__fadeInUp animate__fast">the players corner</h3>
                    <p class="animate__animated animate__fadeInUp  animate__fast">we're levelling the field</p>
                </div>
                <div class="topOverlayBanner"></div>
                <div class="makeShape">sdf</div>
            </div>
        </div>
    </section>

    {{-- Our Blogs --}}
    <section class="container mt-5">
        <div class="row">
            {{-- Blogs --}}
            <div class="blogs-sec blog-view col-12 col-sm-12 col-md-8 col-lg-8">
                <article>
                    <h4 class="blog-hdr">{{ $blog->title }}</h4>
                    <p class="blog-postedBy">by <span>{{ $blog->author }} </span> | {{ date_format($blog->created_at, 'M d, Y') }} | 
                        {{-- <span>[Searched keyword here]</span> |  --}}
                        <a href="#cmt-sec">{{ $blog->comments->count() }}<span> comments</span></p></a>
                    <img src="{{ $blog->cover_image }}" class="img-fluid mb-4" alt="Article Image">
                    <div class="blog-des-txt">
                        
                        {!! $blog->content !!}

                    </div>
                </article>
            </div>
            {{-- sidebar --}}
            <div class="col-lg-3 col-md-4">
                <div class="blog-sidebar">
                    <div class="search-bar">

                    </div>
                    {{-- Search Bar --}}
                    <form class="search-bar" action="{{ route('blogs.index') }}">
                        <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search articles..." aria-label="Search articles">
                        <button class="btn btn-outline-primary srch-btn" type="button">Search</button>
                        </div>
                    </form>
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
        </div>

        <div class="col-lg-8 mt-5 comment-sec" id="cmt-sec">
            <h2>Submit a Comment</h2>
            <p>Your email address will not be published. Required fields are marked *</p>
            <form method="POST" action="{{ route('blogs.store-comment') }}">

                @csrf
                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Comment" required></textarea>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="url" class="form-control" id="website" name="website" placeholder="website">
                </div>
                <button type="submit" class="submit-btn submit-shadow" style="background: #FBE746">Submit</button>
            </form>

            <div class="comments">
                @foreach ($blog->comments()->latest()->get() as $comment)
                    <div class="comment-box text-white">
                        <div class="cmt-hdr row">
                            <p><small><i class="bi bi-pencil-square"></i> <span>{{ $comment->name }}</span> </small></p>
                            <p><i class="bi bi-check-lg me-2"></i><small>{{ date_format($comment->created_at, 'M d, Y') }}</small></p>
                            
                        </div>
                        <p class="cmt-block">{{ $comment->comment }}</p>
                    </div>
                @endforeach
    
            </div>
        </div>

        
    </section>

@endsection