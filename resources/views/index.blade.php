@extends('layouts.main')
@section('content')

<!-- Wrapper 1 -->
    <section class="container-fluid" id="wrapper-1">
        <div class="row">
            
            <div class="heroBanner col-lg-12">
                <div class="bannerText">
                    <h3 class="animate__animated animate__fadeInUp animate__fast">the players corner</h3>
                    <p class="animate__animated animate__fadeInUp  animate__fast">we're levelling the field</p>
                </div>
                <div class="makeShape"></div>
                <div class="topOverlayBanner"></div>
            </div>
            
        </div>
        
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="about-site">
                {{-- Site logo --}}
                <div class="ab-logo">
                    <img src="{{ asset('assets/images/logo-img.png') }}" alt="" class="animate__animated animate__zoomIn" >
                </div>
                {{-- Site title --}}
                <h3 class="title-hdr">The Players Corner <br> <span>The World’s First FREE Scouting and Talent Development Platform for Football Players</span></h3>
                <div class="col-10 col-lg-6 col-md-6 col-sm-8">
                    <p class="ab-des-txt mt-3">
                        Taking control of your footballing career can be tough, particularly if you don’t have the right connections. All the talent in the world won’t land a career on your doorstep; you’ll need to be able to get in front of the right people at the right time to succeed. This is where we come in. <br><br>
                        The Players Corner gives you the unique opportunity to connect with the wider global footballing community, giving you the best shot at success. We can even help find a club that suits your skills and talent, and represent you in negotiations to make sure you’re taken care of. 
                    </p>
                    <p class="ab-des-txt">
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
     
    {{-- <section class="container-fuild gallery-sec">
                
    <!-- Slider main container -->
        <div class="swiper lightbox-swiper" id="gallery-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="grid-wrapper" id="animated-thumbnails">
                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-1.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="" />
                    </div>
                    
                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-2.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-3.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" alt="">
                    </div>

                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-4.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-5.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-6.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-6.jpg') }}" alt="" />
                    </div>

                    <div class="big" data-src="{{ asset('storage/images/gallery/img-7.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-7.jpg') }}" alt="" />
                    </div>

                    <div data-src="{{ asset('storage/images/gallery/img-8.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" alt="" />
                    </div> 
                </div>
            </div>
            <div class="swiper-slide">
                <div class="grid-wrapper" id="animated-thumbnails">
                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-1.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-1.jpg') }}" alt="" />
                    </div>
                    
                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-2.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-3.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" alt="">
                    </div>

                    <div class="wide" data-src="{{ asset('storage/images/gallery/img-4.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-5.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-5.jpg') }}" alt="" />
                    </div>

                    <div class="tall" data-src="{{ asset('storage/images/gallery/img-6.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-6.jpg') }}" alt="" />
                    </div>

                    <div class="big" data-src="{{ asset('storage/images/gallery/img-7.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-7.jpg') }}" alt="" />
                    </div>

                    <div data-src="{{ asset('storage/images/gallery/img-8.jpg') }}">
                        <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" alt="" />
                    </div> 
                </div>
            </div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section> --}}


    {{-- Meetings Cards --}}
    {{-- <section class="container meetup-card mt-5">
        <div class="row"> --}}
            {{-- Card 1 --}}
            {{-- <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="card-img">
                    <img src="{{ asset('storage/images/gallery/img-8.jpg') }}" class="card-img-top" alt="...">
                </div>
 
                <div class="card-body">
                    <p class="card-hdr">small business meetup</p>
                    <p class="card-date">tue, 09 Jan | Mountain View</p>
                    <a href="#" class="meetup-btn"><button>rsvp</button></a>
                </div>
            </div> --}}
            
            {{-- Card 2 --}}
            {{-- <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="card-img">
                    <img src="{{ asset('storage/images/gallery/img-3.jpg') }}" class="card-img-top" alt="...">
                </div>
                
                <div class="card-body">
                    <p class="card-hdr">City Networking Event</p>
                    <p class="card-date">tue, 06 feb | flatiron district</p>
                    <a href="#" class="meetup-btn"><button>rsvp</button></a>
                </div>
            </div> --}}
            
            {{-- Card 3 --}}
            {{-- <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="card-img">
                    <img src="{{ asset('storage/images/gallery/img-4.jpg') }}" class="card-img-top" alt="...">
                </div>
                
                <div class="card-body">
                    <p class="card-hdr">sunset rooftop party</p>
                    <p class="card-date">sat, 17 mar | west village</p>
                    <a href="#" class="meetup-btn"><button>rsvp</button></a>
                </div>
            </div> --}}
        {{-- </div>
    </section> --}}

    {{-- 24/7 Phone support SECTION START --}}
    {{-- <section class="container support-wrapper" id="wrapper-1">
        <div class="row">
            <div class="promoBanner col-lg-4 offset-lg-1 col-md-5 offset-md-1 offest-sm-1 col-sm-10 col-12">
                <img src="{{ asset('assets/images/banner.jpg') }}" alt="">
                <div class="border-box"></div>
            </div>
            <div class="side-txt-wrapper col-lg-6 col-md-5 col-sm-10 col-12">
                <div>
                    <h3>24/7 <br> phone support</h3>
                    <h4>Outstanding Quality</h4>
                    <p>this is your feature description. Write a short blurb explaning what the feature is and why it matter for visitors. customers or clients. Don't be afraid tot your own horn! Take this opportunity to emphasize the important benefits or key advantages.</p>
                </div>
            </div>
            
        </div>
        
        
        
    </section> --}}
    {{-- 24/7 Phone support SECTION END --}}

<!-- News Section END -->

<!-- Promo Banner START -->
<section id="promo-banner" class="container-fuild">
    <div class="banner-overlay">
        
        <div class="ab-overBox" data-aos="zoom-in-up" data-aos-easing="ease-in-out" data-aos-duration="800">
            <ul class="ab-txt-list">
                <div class="ab-liner">
                    <p>We’re in <span>YOUR CORNER.</span></p>
                    <span>With us, you can:</span>
                </div>
                <li>Showcase your talent - Create your FREE profile, to highlight your talents, skills and achievements.</li>
                <li>Get discovered - Connect with scouts and coaches from across the world.</li>
                <li>Develop with expert coaching - Improve your skills with personalised coaching and analysis from experts in their field.</li>
                <li>Get representation from the TPC professionals, who can negotiate contracts with clubs you’ve only dreamed of playing for*</li>
            </ul>
            <div class="ab-last-liner">
                <p>Learn more about our platform <span><a href="{{ route('about-us') }}">here</a></span>.</p>
                <span>OR</span>
                <p><span><a href="{{ route('login') }}">Create a free profile </a></span>and explore our global footballing talent database here. </p>
            </div>

        </div>
        
    </div>
    {{-- <img src="{{ asset('assets/images/banner.jpg') }}" alt=""> --}}

</section>
<!-- Promo Banner END -->


<!-- Social Media Section START -->
<section class="social-media-sec">
    <div class="container">
        <div class="sec-hdr overflow-hidden">
            <h2 class="" data-aos="zoom-in-up"
            data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out">Follow Us</h2>
            {{-- <p class="follow-us-des" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">This is you Donate section paragraph. Encourge your site visitors to provide their information so that you can get in touch about how they <br> can make a donation to your Gaming Club.</p> --}}
            <!-- Social Media Icons -->
            <div class="social-icons col-auto">
                <ul>
                    <li data-aos="fade-up" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-duration="500"><a href="https://www.facebook.com/the.playerscorner/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li data-aos="fade-up" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-duration="600"><a href="https://www.instagram.com/the.playerscorner/" target="_blank"><i class="bi bi-instagram"></i> </a></li>
                    <li data-aos="fade-up" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-duration="700"><a href="https://www.linkedin.com/company/the-players-corner" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                    <li data-aos="fade-up" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><a href="https://x.com/_PlayersCorner" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                </ul>
            </div>
        </div>

            {{-- <div class="media-con"> --}}

            {{-- Social live feed --}}
            {{-- <div class="social-feed row"> --}}
                <!-- Instagram Feed -->
                    {{-- <div class="nopadding col-lg-4 col-md-4 col-sm-4 col-12" id="insta-feed">
                        <h3 style="text-align: center" class="feed-hdr">Follow Us on Instagram</h3>
                        <div id="instafeed-container"></div>
                        
                        <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
                        <script type="text/javascript">
                            var userFeed = new Instafeed({
                                get: 'user',
                                target: "instafeed-container",
                                resolution: 'low_resolution',
                                accessToken: 'IGQWRPYjdLSWYwY0lMcDd5aDNhZAURpS0tiMmpIelI5bUZAGMjBRbzc0MDVCMUZAnVHhQa0dqZATdITGdTZAmE1cTRZAZAHpVajhUcVQ0Xzk3RW1EZAnVibHY4c1o5eU4wNW1oeTY1M185VmplZAkdsM3VrcDd3bklPVzJRNkEZD'
                            });
                            userFeed.run();
                        </script>
        
                        <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=UCafm3C_bpyMEdua4UbUFsyA&synd=open&w=320&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>	
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthe.playerscorner%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    
                    </div>
                    <a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @X</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    
            </div>
        </div> --}}
    
</section>
<!-- Social Media Section END -->

{{-- Contact Us START --}}
<section class="container contact-us-sec overflow-hidden">
        <div class="row">
            <div class="left-bx col-lg-6 col-md-4 col-sm-12 col-12" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <h2 class="sec-hdr">Speak to us!</h2>
                <div>
                    <p class="text-center">Contact us today for an informal chat</p>
                </div>
            </div>
    
            <div class="right-bx col-lg-6 col-md-8 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-out">
                    <div class="card p-4">
                        <form method="POST" action="{{ route('contact-us.submit') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="firstName" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="lastName" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-7 col-md-7 col-sm-7 mb-3 mb-sm-0">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <label for="contactNumber" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" name="phone" id="contactNumber" required>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Speak to me about</label>
                                <select class="form-select" name="type" id="subject" required>
                                    <option value="" disabled selected>Select a topic</option>
                                    <option value="1-2-1 Coaching">1-2-1 Coaching</option>
                                    <option value="Performance Analysis">Performance Analysis</option>
                                    <option value="Representation">Representation</option>
                                    <option value="Scouting">Talent Identification</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="consent" required>
                                <label class="form-check-label" for="consent">
                                    Consent required <br>
                                    The Players Corner needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our privacy policy.
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn-cover">
                                    <button type="submit" class="send-btn">Send</button>
                                </a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

</section>
<!-- Partners Section END -->

@endsection