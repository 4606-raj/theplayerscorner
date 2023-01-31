@extends('layouts.main')

@section('content')

    {{-- Teams section --}}
    <section class="teams-sec">
        <div class="container" id="">
            <div class="col-lg-9 col-sm-11 col-11">
                <p class="sec-main-hdr"><span>Men's</span> Team</p>
            </div>

            <div class="manager-card-row row">
                {{-- Manager/Coach 1 --}}
                <div class="col-lg-6 manager-card">
                    {{-- Manager's OR Coach image --}}
                    <div class="manager-img-bx">
                        <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                    </div>

                    <div class="manager-des-bx">
                        <p class="manager-name">Coach/Manager’s Name</p>
                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem.</p>
    
                        <div class="team-see-more manager-rd-more">
                            <a href="{{ route('mens-team') }}"><span>See more</span>
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                </svg>                            
                            </a>
                        </div>

                    </div>
                </div>

                {{-- Manager/Coach 2 --}}
                <div class="col-lg-6 manager-card">
                    {{-- Manager's OR Coach image --}}
                    <div class="manager-img-bx">
                        <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                    </div>

                    <div class="manager-des-bx">
                        <p class="manager-name">Coach/Manager’s Name</p>
                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem.</p>
    
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
                                <a href="http://127.0.0.1:8000/mens-team"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                        <div class="pl-des-txt">
                            <p>Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. </p>
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
                                <a href="http://127.0.0.1:8000/mens-team"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                        <div class="pl-des-txt">
                            <p>Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. </p>
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
                                <a href="http://127.0.0.1:8000/mens-team"><span>Read More</span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"></path>
                                    </svg>                            
                                </a>
                            </div>    
                        </div>
    
                        <div class="pl-des-txt">
                            <p>Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection