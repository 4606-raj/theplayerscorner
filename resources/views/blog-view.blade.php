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

@endsection