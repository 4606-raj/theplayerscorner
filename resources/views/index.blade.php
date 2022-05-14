@extends('layouts.main')

@section('content')
    
<!-- Main Slider START-->
<div class="tm-top-a-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="akslider-module ">
                        <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                            <ul class="uk-slideshow uk-overlay-active">
                                
                                <li aria-hidden="true" class="uk-height-viewport uk-active">
                                    <div style="background-image: url(images/main-slider-img1.html);" class="uk-cover-background uk-position-cover"></div>
                                    <img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="{{ asset('public/images/main-slider-img1.jpg') }}" alt="">

                                    <div class="uk-position-cover uk-flex-middle">
                                        <div class="uk-container uk-container-center uk-position-cover">
                                            <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                <h3>Just play.<span>Have fun.</span></h3>
                                                <div class="promo-sub">Life is <span>about timing</span> Enjoy the game</div>
                                                <!-- <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li aria-hidden="false" class="uk-height-viewport">
                                    <div style="background-image: url({{ asset('public/images/main-slider-img.jpg') }});" class="uk-cover-background uk-position-cover"></div>
                                    <img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="{{ asset('public/images/main-slider-img.jpg') }}" alt="">

                                    <div class="uk-position-cover uk-flex-middle">
                                        <div class="uk-container uk-container-center uk-position-cover">
                                            <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                <h3>Life is <span>about timing</span></h3>
                                                <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                <!-- <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li aria-hidden="true" class="uk-height-viewport">
                                    <div style="background-image: url(images/main-slider-img2.html);" class="uk-cover-background uk-position-cover"></div>
                                    <img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="{{ asset('public/images/main-slider-img2.jpg') }}" alt="">
                                    
                                    <div class="uk-position-cover uk-flex-middle">
                                        <div class="uk-container uk-container-center uk-position-cover">
                                            <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                <h3>Life is <span>about timing</span></h3>
                                                <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                <!-- <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                            <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                <li class="uk-active" data-uk-slideshow-item="0"><a href="../index.html">0</a>
                                </li>
                                <li data-uk-slideshow-item="1"><a href="../index.html">1</a>
                                </li>
                                <li data-uk-slideshow-item="2"><a href="../index.html">2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Main Slider END-->

<!-- <div class="tm-top-b-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1">
                <div class="uk-panel">

                    <div class="va-latest-wrap">
                        <div class="uk-container uk-container-center">
                            <div class="va-latest-top">
                                <h3>Latest <span>Results</span></h3>
                                <div class="tournament">
                                    <address>Cambridgeshire UK<br><br></address> </div>
                                <div class="date">
                                    November 29, 2015 | 12:00 am </div>
                            </div>
                        </div>
                        <div class="va-latest-middle uk-flex uk-flex-middle">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-flex uk-flex-middle">
                                    <div class="uk-width-2-12 center">
                                        <a href="results.html">
                                            <img src="images/club-logo.png" class="img-polaroid" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="uk-width-3-12 name uk-vertical-align">
                                        <div class="wrap uk-vertical-align-middle">
                                            Cambridgehire </div>
                                    </div>
                                    <div class="uk-width-2-12 score">
                                        <div class="title">score</div>
                                        <div class="table">
                                            <div class="left"> 3</div>
                                            <div class="right"> 5</div>
                                            <div class="uk-clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-3-12 name alt uk-vertical-align">
                                        <div class="wrap uk-vertical-align-middle">
                                            china </div>
                                    </div>
                                    <div class="uk-width-2-12 center">
                                        <a href="results.html">
                                           <img src="images/club-logo1.png" class="img-polaroid" alt="" title="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-container uk-container-center">
                            <div class="va-latest-bottom">
                                <div class="uk-grid">
                                    <div class="uk-width-8-12 uk-container-center text">
                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus. Pellentesque aliquam justo ut rhoncus lobortis. In sed venenatis massa. Sed sodales faucibus odio, eget tempus nibh accumsan ut. Fusce tincidunt semper finibus. Nullam consequat non leo interdum pulvinar.</p>
                                    </div>
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="btn-wrap uk-container-center">
                                            <a class="read-more" href="results.html">More Info</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
</div> -->

<!-- About Us START-->
<div class="tm-top-c-box tm-full-width home-about uk-margin-remove-top">
    <div class="uk-container uk-container-center">
        <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1 uk-width-large-1-2">
                <div class="uk-panel">
                    <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                        <div class="va-about-text">
                            <div class="title">About <span>Us</span>
                            </div>
                            <p>Southall Athletic F.C. was started primarily due to the lack of 11-a-side football opportunities within the community, this coincided with the figures released by the FA on how underrepresented the South-East Asian community was in football. </p>
                            <p>We are looking to become the first ALL-INCLUSIVE grassroots club offering football for adults, both men and women; youth, both boys and girls; and also, football for those who are disabled.</p>
                            <a class="read-more" href="about.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-1-1 uk-width-large-1-2">
                <div style="min-height: 497px;" class="uk-panel">
                    <div class="trainers-module tm-trainers-slider ">
                        <div class="trainer-wrapper">
                            <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                <div class="trainer-top">
                                    <div class="trainers-btn">
                                        <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                        <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideset-item="next"></a>
                                    </div>
                                    <h3>Trainers</h3>
                                </div>
                                <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                    <li class="uk-active">
                                        <div class="img-wrap tr-img-block"><img src="{{ asset('public/images/trainer-slider/img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="name">Name <span>Here</span>
                                        </div>
                                    </li>
                                    <li style="display: none;">
                                        <div class="img-wrap tr-img-block"><img src="{{ asset('public/images/trainer-slider/img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="name">Name <span>Here</span>
                                        </div>
                                    </li>
                                    <li style="display: none;">
                                        <div class="img-wrap tr-img-block"><img src="{{ asset('public/images/trainer-slider/img-3.jpg') }}" alt="">
                                        </div>
                                        <div class="name">Name <span>Here</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- About Us END-->

<!-- Teams START-->
<div class="tm-bottom-b-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="our-team-main-wrap">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid" data-uk-grid-match="">
                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                    <div class="our-team-wrap">
                                        <div class="our-team-title">
                                            <h3>Our <span>Team</span></h3>
                                        </div>
                                        <div class="our-team-text">
                                            <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                        </div>
                                        <div class="our-team-text additional">
                                            <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                        </div>
                                        <div class="team-read-wrap"><a class="team-read-more" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 1 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number"><span>21</span></div>
                                                <div class="bio"><span><a href="player.html">bio</a></span></div>
                                                
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-1.jpg') }}" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Paul GIll</a>
                                                    </h3>
                                                </div>
                                                <div class="position">DEFENDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 2 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number">
                                                    <span>19</span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-2.jpg') }}" class="img-polaroid" alt="John Montgomery" title="John Montgomery">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Che Regis </a>
                                                    </h3>
                                                </div>
                                                <div class="position">Attacker 99</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 3 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number"><span>47 </span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-5.jpg') }}" class="img-polaroid" alt="Joe Perez" title="Joe Perez">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Jigar Kumar</a>
                                                    </h3>
                                                </div>
                                                <div class="position">Attacker 10 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 4 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number"><span>23 </span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-6.jpg') }}" class="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Kabz Soodi</a>
                                                    </h3>
                                                </div>
                                                <div class="position">MIDFIELDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 5 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number"><span>14 </span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-7.jpg') }}" class="img-polaroid" alt="Douglas Pain" title="Douglas Pain">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Jordan Dosanjh</a>
                                                    </h3>
                                                </div>
                                                <div class="position">DEFENDER 3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 6 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number"><span>36 </span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-8.jpg') }}" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Ish Sakur</a>
                                                    </h3>
                                                </div>
                                                <div class="position">Attacker 45</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 7 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number">
                                                    <span>35</span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="teams.html">
                                                    <img src="{{ asset('public/images/teams/men/img-3.jpg') }}" class="img-polaroid" alt="Name here" title="Name here">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3><a href="player.html">Name Here</a></h3>
                                                </div>
                                                <div class="position">goalkeeper </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Player 8 -->
                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                    <div class="player-article">
                                        <div class="wrapper">
                                            <div class="img-wrap">
                                                <div class="player-number"><span>07</span>
                                                </div>
                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src="{{ asset('public/images/teams/men/img-4.jpg') }}" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza">
                                                </a>
                                                <ul class="socials">
                                                    <li class="twitter">
                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook">
                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h3>
                                                        <a href="player.html">Name here </a>
                                                    </h3>
                                                </div>
                                                <div class="position">DEFENDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="our-team-btn"><a href="teams.html"><span>More Info</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
<!-- Teams START-->
</div>
<!-- Teams END-->

<!-- News Section START-->
<div class="tm-top-f-box tm-full-width  va-main-our-news">
    <div class="uk-container uk-container-center">
        <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                            <div class="uk-width-1-1">
                                <div class="our-news-title">
                                    <h3>Our <span>News</span></h3>
                                </div>
                                <!-- <div class="our-news-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                    <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. 
                                </div> -->
                            </div>

                            <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(images/853d071dfa2f869fbd2a70dbcb3a8f5e.jpg); min-height: 280px;">


                                    <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919"></a>
                                    <img class="uk-invisible" src="images/853d071dfa2f869fbd2a70dbcb3a8f5e.jpg" alt="">

                                </div>
                                <div style="min-height: 280px;" class="info">
                                    <div class="date">
                                        29 JUN, 2021 </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919">'It's always a taboo': Southall's 'first ever all-female football team' trying to 'prove people wrong'</a>	
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>Despite decades of awareness and attempts at change, the representation of British Asian people in professional football is pitifully low.

                                            According to a report commissioned by the Football Supporters’</p>
                                        <div class="read-more"><a href="https://www.mylondon.news/news/west-london-news/its-always-taboo-southalls-first-20929919">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </article>


                            <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(images/534579b3c373c09398691a46025fe5e6.jpg); min-height: 280px;">


                                    <a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/"></a>
                                    <img class="uk-invisible" src="images/534579b3c373c09398691a46025fe5e6.jpg" alt="">

                                </div>
                                <div style="min-height: 280px;" class="info">
                                    <div class="date">
                                        8 August, 2021 </div>
                                    <div class="name">
                                        <h4>
                                            <a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/">Southall gets first ever all-female football team</a>		
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>A new women's football team in west London's "Little India" hopes to encourage diversity in football.

                                            It follows government research in 2020 that suggested Asian women were the least physically active group.</p>
                                        <div class="read-more"><a href="http://www.easterneye.biz/southall-gets-first-ever-all-female-football-team/">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </article>

                        </div>
                    </div>
                    <div class="all-news-btn"><a href="news.html"><span>All News</span></a>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<!-- News Section END-->

<!-- Gallery START -->
<div class="tm-top-g-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-g" class="tm-top-g uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel">

                    <div class="gallery-title">
                        <div class="uk-container uk-container-center tt-gallery-top-main">
                            <div class="uk-grid" data-uk-grid-match="">
                                <div class="uk-width-3-10 title">Gallery</div>
                                <!-- <div class="uk-width-7-10 text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="uk-sticky-placeholder">
                        <div style="margin: 0px;" class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                            <div class="uk-container uk-container-center">
                                <button class="active" data-filter="*">all</button>
                                <button class="" data-filter=".tt_c26e2589e25045ad516b5bc37d18523a">Teams</button>
                                <button class="" data-filter=".tt_6081becaf04f5a1455407d73e09bca13">Annoucements</button>
                                <button class="" data-filter=".tt_c71a18083d9e74b4a5c5d8d9a17d68d0">Ground</button>
                            </div>
                        </div>
                    </div>

                    <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
                
                        <!-- Image 1 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item article-slider tt_c26e2589e25045ad516b5bc37d18523a">
                            <div class="uk-slidenav-position" data-uk-slideshow="{height:300}">
                                <ul class="uk-slideshow">
                                    <li class="uk-active" aria-hidden="false">
                                        <div style="background-image: url(images/gallery/1448838000_1662651f7f781a887707a2836033aa63.jpg);" class="uk-cover-background uk-position-cover"></div>
                                        <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="{{ asset('public/images/gallery/img-0.jpg') }}" alt="">
                                        <div class="titles">
                                            <div class="sub-title">
                                                Southall Athletic                                
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="true">
                                        <div style="background-image: url(images/gallery/1448838000_7e2a4fc5579be1e525f7b338af8bcc4e.jpg);" class="uk-cover-background uk-position-cover"></div>
                                        <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="{{ asset('public/images/gallery/img-0-1.jpg') }}" alt="">
                                        <div class="titles">
                                            <div class="sub-title">
                                                Southall Athletic                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="article-slider-btn">
                                    <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                    <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Image 2 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_6081becaf04f5a1455407d73e09bca13">
                            <div class="gallery-album">
                                <a href="images/gallery/img-1.jpg" data-uk-lightbox="{group:'my-group'}" class="img-0"><img src="{{ asset('public/images/gallery/img-1.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Football                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 3 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a">
                            <div class="gallery-album">
                                <a href="{{ asset('public/images/gallery/img-2.jpg') }}" data-uk-lightbox="{group:'my-group1'}" class="img-0"><img src="{{ asset('public/images/gallery/img-2.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Team                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 4 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item  tt_c26e2589e25045ad516b5bc37d18523a">
                            <div class="gallery-album">
                                <a href="{{ asset('public/images/gallery/img-3.jpg') }}" data-uk-lightbox="{group:'my-group2'}" class="img-0"><img src="{{ asset('public/images/gallery/img-3.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Team Funday                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 5 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a">
                            <div class="gallery-album">
                                <a href="{{ asset('public/images/gallery/img-4.jpg') }}" data-uk-lightbox="{group:'my-group3'}" class="img-0"><img src="{{ asset('public/images/gallery/img-4.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Team                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 6 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 ">
                            <div class="gallery-album">
                                <a href="{{ asset('public/images/gallery/img-5.jpg') }}" data-uk-lightbox="{group:'my-group4'}" class="img-0"><img src="{{ asset('public/images/gallery/img-5.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Ground Shot                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 7 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_449a5f6d01d5f416810d04b4df596b6a tt_c71a18083d9e74b4a5c5d8d9a17d68d0 tt_ea9d8d12fefde9e2f9c4631a76504ce7 ">
                            <div class="gallery-album">
                                <a href="{{ asset('public/images/gallery/img-6.jpg') }}" data-uk-lightbox="{group:'my-group5'}" class="img-0"><img src="{{ asset('public/images/gallery/img-6.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Southall Athletic                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 8 -->
                        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                            <div class="gallery-album">
                                <a href="{{ asset('public/images/gallery/img-7.jpg') }}" data-uk-lightbox="{group:'my-group6'}" class="img-0"><img src="{{ asset('public/images/gallery/img-7.jpg') }}" alt=""></a>
                                <div class="titles">
                                    <div class="title">
                                        Southall Athletic                    
                                    </div>
                                    <div class="sub-title">
                                        Southall Athletic                    
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<!-- Gallery END -->

<!-- Sponsers Section START -->
<div class="tm-bottom-c-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-c" class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1 sponsers-sec">
                <div class="sponsers-title">
                    <h3>Our <span>Sponsors</span></h3>
                </div>
                <div class="uk-panel">
                    <div class="sponser-main-page-wrap">
                        <div class="latest_products jshop">

                            <div data-uk-slider="{center:true, autoplay:true, pauseOnHover:true, autoplayInterval:5000}">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider uk-grid-width-large-1-6 uk-grid-width-medium-1-4 uk-grid-width-small-1-1  uk-grid uk-grid-medium">

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://ealing.gov.uk/" target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-1.png') }}" alt="Sportswear outerwear coats">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://instagram.com/rapturebarbers/ " target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-2.jpg') }}" alt="Sportswear outerwear coats">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://churchstreetdental.london" target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-3.png') }}" alt="Waterproof jackets">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://instagram.com/queenspharmacysouthall/ " target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-4.png') }}" alt="Waterproof jackets">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://cargo-overseas.co.uk/" target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-5.png') }}" alt="Thermoball Insulated Jacket">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://englandfootball.com/run/leagues-and-clubs/england-football-accreditation " target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-7.png') }}" alt="Thermoball Insulated Jacket">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://thefa.com/get-involved/respect" target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-8.png') }}" alt="Thermoball Insulated Jacket">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://middlesexfa.com" target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-9.png') }}" alt="Thermoball Insulated Jacket">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://thisgirlcan.co.uk " target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-10.png') }}" alt="Thermoball Insulated Jacket">
                                                </a>
                                            </div>
                                        </li>

                                        <li class="block_item">
                                            <div class="image_block">
                                                <a draggable="false" href="https://chanachemist.co.uk " target="_blank">
                                                    <img draggable="false" class="jshop_img" src="{{ asset('public/images/sponsers/img-11.png') }}" alt="Thermoball Insulated Jacket">
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
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
</div>
<!-- Sponsers Section END -->

<!-- AACHIEVEMENTS Section START -->
<!-- <div class="tm-bottom-a-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-a" class="tm-bottom-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel tt-achievments-wrap">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-large-4-10 uk-width-medium-1-1 achievments-block">
                            <div class="our-awards-main-wrap">
                                <div class="uk-slidenav-position our-awards" data-uk-slider="{autoplay:true, autoplayInterval:7000}">
                                    <div class="our-awards-main-title">
                                        <h2>Our <span>Awards</span></h2>
                                        <div class="our-awards-btn">
                                            <a draggable="false" href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                            <a draggable="false" href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                                        </div>
                                    </div>
                                    <div class="uk-slider-container">
                                        <ul class="uk-slider uk-grid uk-grid-width-large-1-2">
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img5.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                            <li>
                                                <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                                </div>
                                                <div class="text">2014 world cup champion</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-5-10 uk-width-medium-1-1 achievments-block uk-push-1-10">
                            <div class="achievments-inner">
                                <div class="our-awards-main-title">
                                    <h2>achievements</h2>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                        <div class="item">
                                            <div class="icon"><img src="images/stat-icon.png" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="number">35</div>
                                                <div class="text">goals</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                        <div class="item">
                                            <div class="icon"><img src="images/stat-icon1.png" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="number">12</div>
                                                <div class="text">games played</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                        <div class="item">
                                            <div class="icon"><img src="images/stat-icon2.png" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="number">13</div>
                                                <div class="text">violations</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                        <div class="item">
                                            <div class="icon"><img src="images/stat-icon3.png" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="number">8</div>
                                                <div class="text">Awards</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> -->
<!-- AACHIEVEMENTS Section END -->

<!-- Youtube Video Section START -->
<div class="tm-bottom-d-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="last-video-wrap">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid">
                                <!-- <div class="uk-width-medium-1-1">
                                    <div class="last-video-title">
                                        <h2>Last <span>Video</span></h2>
                                    </div>
                                </div>
                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                    <div class="last-video-text">
                                        Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.
                                    </div>
                                </div> -->
                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                    <iframe height="546" width="970" src="https://www.youtube.com/embed/yokQd9IHPxk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!-- <iframe src="https://www.youtube.com/embed/yokQd9IHPxk" allowfullscreen="" height="546" width="970"></iframe> -->
                                </div>
                                <!-- <div class="uk-width-medium-1-1 uk-width-small-1-1 partners-slider">
                                    <div data-uk-slideset="{small: 2, medium: 5, large: 5}">
                                        <div class="uk-slidenav-position">
                                            <ul class="uk-grid uk-slideset uk-grid-width-1-1 uk-grid-width-large-1-5 uk-grid-width-medium-1-5 uk-grid-width-small-1-2">
                                                <li><img src="images/partners-img.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img1.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img2.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img3.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img4.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img1.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img2.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img3.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img4.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img1.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img2.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img3.png" alt="">
                                                </li>
                                                <li><img src="images/partners-img4.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="uk-slideset-nav uk-dotnav uk-flex-center">
                                           
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Youtube Video Section END -->

<!-- Map & Contact Us Section START -->
<div class="tm-bottom-e-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="map-wrap">

                        <div class="contact-form-wrap uk-flex">
                            
                            <div class="uk-container uk-container-center uk-flex-item-1">
                                <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                    <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                        <div class="contact-info-lines uk-vertical-align-middle">
                                            <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span>(846)-356-9322</div>
                                            <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="mailto:support@torbara.com">support@torbara.com</a></div>
                                            <div class="item location"><span class="icon"><i class="uk-icon-map-marker"></i></span>9478 Chestnut Street, Woodstock, GA 30188</div>
                                        </div>
                                    </div>

                                    
                                    <!-- Contact Us Section START -->

                                    <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                        <div class="contact-form uk-height-1-1">
                                            <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                <div class="contact-form-title">
                                                    <h2>Get in touch</h2>
                                                </div>
                                                <div id="aiContactSafe_form_1">
                                                    <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                        <div class="contentpaneopen">
                                                            <div id="aiContactSafeForm">
                                                                <form method="post" id="adminForm_1" name="adminForm_1" action="{{ route('contact') }}">
                                                                    @csrf
                                                                    <div id="displayAiContactSafeForm_1">
                                                                        <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                            <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Name</label></span>&nbsp;
                                                                                    <label class="required_field">*</label>
                                                                                </div>
                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                    <input name="aics_name" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                    <label class="required_field">*</label>
                                                                                </div>
                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                    <input name="aics_email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Message</label></span>&nbsp;
                                                                                    <label class="required_field">*</label>
                                                                                </div>
                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                    <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Message"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <div id="aiContactSafeBtns">
                                                                        <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                            <table style="margin-left:auto; margin-right:auto;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                        </td>
                                                                                        <td id="td_aiContactSafeSendButton">
                                                                                            <input id="aiContactSafeSendButton" value="Send" type="submit">
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <!-- Contact Us Section END -->
                                    
                                </div>
                            </div>
                        </div>
                        <div id="main-map">
                            <div class="map-overlay"></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2483.2633803574913!2d-0.3789361098342484!3d51.508383812192704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb48f18fb4ad78be!2sSouthall%20Sports%20Centre!5e0!3m2!1sen!2sin!4v1648806088971!5m2!1sen!2sin" width="50%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Map & Contact Us Section END -->

@endsection