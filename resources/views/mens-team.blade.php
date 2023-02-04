@extends('layouts.main')

@section('content')

    {{-- Teams section --}}
    <section class="teams-sec">
        <div class="container" id="">
            <div class="col-lg-9 col-sm-11 col-11">
                <p class="sec-main-hdr"><span>Men's</span> Team</p>
            </div>

            <div class="manager-card-row row">

                <!-- Slider main container -->
                <div class="swiper manager-row-swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            {{-- Manager/Coach 1 --}}
                            <div class="manager-card">
                                {{-- Manager's OR Coach image --}}
                                <div class="manager-img-bx">
                                    <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                                </div>
            
                                <div class="manager-des-bx">
                                    <div>
                                        <p class="manager-name">Coach/Manager’s Name</p>
                                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem.</p>
                                    </div>
                
                                    <div class="team-see-more manager-rd-more">
                                        <a href="{{ route('mens-team') }}"><span>See more</span>
                                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                            </svg>                            
                                        </a>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            {{-- Manager/Coach 1 --}}
                            <div class="manager-card">
                                {{-- Manager's OR Coach image --}}
                                <div class="manager-img-bx">
                                    <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                                </div>
            
                                <div class="manager-des-bx">
                                    <div>
                                        <p class="manager-name">Coach/Manager’s Name</p>
                                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem.</p>
                                    </div>
                
                                    <div class="team-see-more manager-rd-more">
                                        <a href="{{ route('mens-team') }}"><span>See more</span>
                                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                            </svg>                            
                                        </a>
                                    </div>
            
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            {{-- Manager/Coach 1 --}}
                            <div class="manager-card ">
                                {{-- Manager's OR Coach image --}}
                                <div class="manager-img-bx">
                                    <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                                </div>
            
                                <div class="manager-des-bx">
                                    <div>
                                        <p class="manager-name">Coach/Manager’s Name</p>
                                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem.</p>
                                    </div>
                
                                    <div class="team-see-more manager-rd-more">
                                        <a href="{{ route('mens-team') }}"><span>See more</span>
                                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                            </svg>                            
                                        </a>
                                    </div>
            
                                </div>
                            </div>

                        </div>
                    </div>
    
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            {{-- Player Cards --}}
            <div class="row mt-4">
                {{-- Player Card 1 --}}
                <div class="player-card col-lg-4 col-md-6 col-sm-6">
                    <div class="pl-img">
                        <img src="{{ asset('assets/images/teams-images/img-1.jpg') }}" alt="">
                    </div>
    
                    {{-- Player Card details --}}
                    <div class="pl-details">
                        <div class="d-flex justify-content-end">
                            <div class="pl-des-tag">
                                <span>Goalkeeper</span>
                                <span class="pl-tag-num">1</span>
                            </div>
                        </div>
    
                        <div class="pl-name-row">
                            <p class="pl-name">player name</p>
        
                            <div class="team-see-more manager-rd-more">
                                <a href="{{ route('player-profile') }}"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                    </div>
                </div>
    
                {{-- Player Card 2 --}}
                <div class="player-card col-lg-4 col-md-6 col-sm-6">
                    <div class="pl-img">
                        <img src="{{ asset('assets/images/teams-images/img-1.jpg') }}" alt="">
                    </div>
    
                    {{-- Player Card details --}}
                    <div class="pl-details">
                        <div class="d-flex justify-content-end">
                            <div class="pl-des-tag">
                                <span>Goalkeeper</span>
                                <span class="pl-tag-num">1</span>
                            </div>
                        </div>
    
                        <div class="pl-name-row">
                            <p class="pl-name">player name</p>
        
                            <div class="team-see-more manager-rd-more">
                                <a href="{{ route('player-profile') }}"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                    </div>
                </div>
    
                {{-- Player Card 3 --}}
                <div class="player-card col-lg-4 col-md-6 col-sm-6">
                    <div class="pl-img">
                        <img src="{{ asset('assets/images/teams-images/img-1.jpg') }}" alt="">
                    </div>
    
                    {{-- Player Card details --}}
                    <div class="pl-details">
                        <div class="d-flex justify-content-end">
                            <div class="pl-des-tag">
                                <span>Goalkeeper</span>
                                <span class="pl-tag-num">1</span>
                            </div>
                        </div>
    
                        <div class="pl-name-row">
                            <p class="pl-name">player name</p>
        
                            <div class="team-see-more manager-rd-more">
                                <a href="{{ route('player-profile') }}"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                    </div>
                </div>

                {{-- Player Card 4 --}}
                <div class="player-card col-lg-4 col-md-6 col-sm-6">
                    <div class="pl-img">
                        <img src="{{ asset('assets/images/teams-images/img-1.jpg') }}" alt="">
                    </div>
    
                    {{-- Player Card details --}}
                    <div class="pl-details">
                        <div class="d-flex justify-content-end">
                            <div class="pl-des-tag">
                                <span>Goalkeeper</span>
                                <span class="pl-tag-num">1</span>
                            </div>
                        </div>
    
                        <div class="pl-name-row">
                            <p class="pl-name">player name</p>
        
                            <div class="team-see-more manager-rd-more">
                                <a href="{{ route('player-profile') }}"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                    </div>
                </div>

                {{-- Player Card 5 --}}
                <div class="player-card col-lg-4 col-md-6 col-sm-6">
                    <div class="pl-img">
                        <img src="{{ asset('assets/images/teams-images/img-1.jpg') }}" alt="">
                    </div>
    
                    {{-- Player Card details --}}
                    <div class="pl-details">
                        <div class="d-flex justify-content-end">
                            <div class="pl-des-tag">
                                <span>Goalkeeper</span>
                                <span class="pl-tag-num">1</span>
                            </div>
                        </div>
    
                        <div class="pl-name-row">
                            <p class="pl-name">player name</p>
        
                            <div class="team-see-more manager-rd-more">
                                <a href="{{ route('player-profile') }}"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                    </div>
                </div>

                {{-- Player Card  --}}
                <div class="player-card col-lg-4 col-md-6 col-sm-6">
                    <div class="pl-img">
                        <img src="{{ asset('assets/images/teams-images/img-1.jpg') }}" alt="">
                    </div>
    
                    {{-- Player Card details --}}
                    <div class="pl-details">
                        <div class="d-flex justify-content-end">
                            <div class="pl-des-tag">
                                <span>Goalkeeper</span>
                                <span class="pl-tag-num">1</span>
                            </div>
                        </div>
    
                        <div class="pl-name-row">
                            <p class="pl-name">player name</p>
        
                            <div class="team-see-more manager-rd-more">
                                <a href="{{ route('player-profile') }}"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection