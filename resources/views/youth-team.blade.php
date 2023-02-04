@extends('layouts.main')

@section('content')

    {{-- Teams section --}}
    <section class="teams-sec">
        <div class="container">
            <div class="col-lg-9 col-sm-11 col-11">
                <p class="sec-main-hdr"><span>Youth</span> Team</p>
            </div>


            <div class="container-fluid youth-sec px-0">

                <!-- Youth Tabs -->
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <div class="nav-link-slider">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="under-10-tab" data-bs-toggle="tab" data-bs-target="#under-10" type="button" role="tab" aria-controls="under-10" aria-selected="true">UNDER 10 (Reds)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="under-12s-tab" data-bs-toggle="tab" data-bs-target="#under-12s" type="button" role="tab" aria-controls="under-12s" aria-selected="false">UNDER 12s</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="under-14s-tab" data-bs-toggle="tab" data-bs-target="#under-14s" type="button" role="tab" aria-controls="under-14s" aria-selected="false">UNDER 14s</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="under-15-tab" data-bs-toggle="tab" data-bs-target="#under-15" type="button" role="tab" aria-controls="under-15" aria-selected="false">UNDER 15 (Red)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="under-15-white-tab" data-bs-toggle="tab" data-bs-target="#under-15-white" type="button" role="tab" aria-controls="under-15-white" aria-selected="false">UNDER 15 (White)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="under-15-blues-tab" data-bs-toggle="tab" data-bs-target="#under-15-blues" type="button" role="tab" aria-controls="under-15-blues" aria-selected="false">UNDER 15 (Blues)</button>
                        </li>
                    </div>
                </ul>
        
                <!-- Youth Tabs container -->
                <div class="tab-content" id="pills-tabContent">

                    <!-- UNDER 10 Red Tab  -->
                    <div class="tab-pane fade active show" id="under-10" role="tabpanel" aria-labelledby="under-10">
                        <p class="cl-wrapper-txt">
                            Our Under-10’s team play in Division [X] of the <a href="https://fulltime.thefa.com/index.html?league=878565608&selectedSeason=554485837&selectedDivision=378842832&selectedCompetition=0&selectedFixtureGroupKey=1_583532219">Middlesex Youth Football League (MYFL)</a>. And are managed and coached by: Victor Badu, Dewayne Carrington Jones, and Lewis White[MP1] .
                            [MP1]The text will remain constant, but the league or leagues (if the team(s) play in more than ONE league) will change.
                            The manager's name is the other text that will change depending the information that has been input via the admin dashboard.
                            Let's see if we can find a way to have this automatically changed via the admin dashboard - without having to add the same information multiple times.
                        </p>

                        {{-- Manager cards row --}}
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
                                                    <a href="#"><span>See more</span>
                                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                                        </svg>                            
                                                    </a>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        {{-- Manager/Coach 2 --}}
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
                                                    <a href="#"><span>See more</span>
                                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                                        </svg>                            
                                                    </a>
                                                </div>
                        
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper-slide">
                                        {{-- Manager/Coach 3 --}}
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
                                                    <a href="#"><span>See more</span>
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
        
                    <!-- UNDER 12s Tab -->
                    <div class="tab-pane fade" id="under-12s" role="tabpanel" aria-labelledby="under-12s">Coming Soon..!!</div>
                  </div>
            </div>


        </div>

    </section>

@endsection