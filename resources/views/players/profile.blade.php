@extends('layouts.main')

@section('content')

@php
    $user = Auth::user();
    $player = $user->player;
@endphp

    {{-- <div style="min-height: 100vh">
    </div> --}}
    
    <div class="container" id="player-profile-sec">
        <div class="row mb-4">
            <!-- Profile tile -->
            <div class="profile-tile col-lg-3 col-md-6 mb-4 col-sm-6 col-10 offset-1 offset-sm-0 d-flex">
                <!-- player Image -->
                <div class="player-img">
                    <svg class="pr-pic-overlay" width="119" height="119" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.880005 59.181C0.880005 26.6953 27.3099 0.265411 59.7956 0.265411C92.2814 0.265411 118.711 26.6953 118.711 59.181C118.711 91.6668 92.2814 118.097 59.7956 118.097C27.3099 118.097 0.880005 91.6668 0.880005 59.181ZM93.2011 86.3729H100.3C100.692 86.3727 101.076 86.2711 101.417 86.078C101.757 85.8849 102.042 85.6069 102.243 85.271C105.803 79.512 108.144 73.0838 109.12 66.384C109.178 66.0048 109.138 65.6172 109.005 65.2575C108.872 64.8979 108.649 64.5779 108.359 64.3277L102.866 59.6014C102.867 59.4615 102.868 59.3213 102.868 59.181C102.868 50.4941 100.296 42.4079 95.8726 35.642L98.1644 29.1256C98.2984 28.7496 98.3307 28.345 98.2581 27.9526C98.1855 27.5601 98.0105 27.1938 97.7509 26.8907C92.8126 21.0933 86.6178 16.4978 79.6372 13.4534C79.2887 13.3003 78.9072 13.2374 78.528 13.2706C78.1488 13.3037 77.7841 13.4319 77.4675 13.6432L71.3959 17.6891C67.7052 16.6594 63.8147 16.1089 59.7956 16.1089C55.7762 16.1089 51.8853 16.6595 48.1944 17.6893L42.1209 13.6432C41.8073 13.433 41.4461 13.3045 41.0701 13.2694C40.6942 13.2343 40.3154 13.2936 39.9683 13.4421C32.9814 16.4879 26.7815 21.0875 21.8404 26.8907C21.5783 27.193 21.401 27.5593 21.3264 27.9523C21.2517 28.3453 21.2825 28.7511 21.4155 29.1284L23.7106 35.6543C19.2921 42.4177 16.7235 50.4994 16.7235 59.181C16.7235 59.3321 16.7243 59.4829 16.7259 59.6336L11.2441 64.3503C10.9534 64.6006 10.731 64.9205 10.5978 65.2802C10.4645 65.6398 10.4247 66.0275 10.4821 66.4067C11.4587 73.1065 13.7994 79.5346 17.3594 85.2937C17.5623 85.6237 17.8464 85.8962 18.1846 86.0851C18.5228 86.274 18.9037 86.3731 19.2911 86.3729H26.3902C31.0709 92.1162 37.2033 96.6297 44.2279 99.3538L47.024 106.396C47.1594 106.737 47.3758 107.041 47.6546 107.28C47.9334 107.519 48.2662 107.687 48.6243 107.769C55.9875 109.459 63.6378 109.459 71.0009 107.769C71.3617 107.688 71.6972 107.52 71.9782 107.28C72.2591 107.04 72.4769 106.734 72.6126 106.39L75.3921 99.3426C82.4047 96.6174 88.5268 92.1084 93.2011 86.3729Z" fill="#FBE746"/>
                    </svg>
                    
                    <img src="{{ asset('assets/images/players/profile-pic.png') }}" alt="player's pic"> 
                </div>
                <!-- player Name -->
                <div class="player-basic-info ">
                    <p class="player-name">{{ $user->first_name }}</p>
                    <div class="d-flex player-age-gender">
                        <p><span>Age:</span> {{ $user->age }} </p>
                        <p>{{ strtoupper($player->gender[0]) ?? '--' }}</p>
                    </div>
                    <div class="player-num">
                        <p><span>#</span>{{ $user->player->id }}</p>
                    </div>
                </div>
                <div class="tile-overlay"></div>
            </div>

            <!-- Height & Weight -->
            <div class="col-lg-4 col-md-6 mb-4 col-sm-6 col-12 middle-bx">
                <div class="profile-info d-flex align-items-center justify-content-between">
                    <div class="pro-info-tab">
                        <p class="pro-info-hdr">Height:</p>
                        <p class="pro-info-dec"><span>{{ strtoupper($player->height_unit) }}:</span> {{ $player->height }}</p>
                    </div>
                    
                    <div class="pro-info-tab">
                        <p class="pro-info-hdr">Weight:</p>
                        <p class="pro-info-dec"><span>{{ strtoupper($player->weight_unit) }}: </span>{{ strtoupper($player->weight) }}</p>
                    </div>
                    
                </div>
            </div>

            <!-- Nationality -->
            <div class="profile-info d-flex align-items-center col-lg-5 col-md-12">
                <div class="pro-info-tab col-12 d-flex justify-content-between">
                    <div class="col-lg-8">
                        <p class="pro-info-hdr">Nationality:</p>
                        <div class="info-tab-row">
                            @foreach (json_decode($player->morph_nationality_id) as $index)
                            <div class="info-tab">{{ config('constants.dropdowns.nationalities')[$index] }}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.11995 0.0410461C6.01152 0.0435335 3.99017 0.882205 2.49928 2.37309C1.0084 3.86397 0.169729 5.88533 0.167241 7.99375C0.165303 9.71667 0.728057 11.3927 1.76935 12.7654C1.76935 12.7654 1.98624 13.051 2.02167 13.0922L8.11995 20.2843L14.2211 13.0885C14.2529 13.0502 14.4705 12.7654 14.4705 12.7654L14.4713 12.7632C15.5119 11.3911 16.0743 9.71584 16.0727 7.99375C16.0702 5.88533 15.2315 3.86397 13.7406 2.37309C12.2497 0.882205 10.2284 0.0435335 8.11995 0.0410461ZM8.11995 10.8856C7.54799 10.8856 6.98887 10.716 6.5133 10.3983C6.03773 10.0805 5.66707 9.62886 5.44819 9.10043C5.22931 8.57201 5.17204 7.99055 5.28362 7.42957C5.39521 6.8686 5.67063 6.35331 6.07507 5.94888C6.47951 5.54444 6.9948 5.26901 7.55577 5.15743C8.11674 5.04584 8.6982 5.10311 9.22663 5.32199C9.75505 5.54087 10.2067 5.91153 10.5245 6.3871C10.8422 6.86267 11.0118 7.42179 11.0118 7.99375C11.0109 8.76044 10.7059 9.49545 10.1638 10.0376C9.62164 10.5797 8.88663 10.8847 8.11995 10.8856Z" fill="#FBE746"/>
                        </svg>                                
                        <p class="player-location">{{ $player->location }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row  justify-content-between">
            <!-- left block info -->
            <div class="pro-left-bl d-flex justify-content-between col-lg-6 px-0">
                <div class="col-lg-5">
                    <div class="left-bl-tab ">
                        <p class="pro-hdr-2"> 
                            <svg width="27" height="8" viewBox="0 0 27 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.76001" y1="3.87051" x2="19.7212" y2="3.87051" stroke="black"/>
                                <circle cx="22.7913" cy="3.94494" r="2.96719" transform="rotate(-90 22.7913 3.94494)" stroke="black"/>
                            </svg>
                            Supported Team
                        </p>
    
                        <div class="pro-left-content">
                            <p>{{ $player->playerClubDetails->supported_team ?? '--' }} </p>
                        </div>
                    </div>
    
                    <div class="left-bl-tab mt-5">
                        <p class="pro-hdr-2"> 
                            <svg width="27" height="8" viewBox="0 0 27 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.76001" y1="3.87051" x2="19.7212" y2="3.87051" stroke="black"/>
                                <circle cx="22.7913" cy="3.94494" r="2.96719" transform="rotate(-90 22.7913 3.94494)" stroke="black"/>
                            </svg>
                                Current Level
                        </p>
    
                        <div class="pro-left-content">
                            <p>{{ $player->playerClubDetails->current_level }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right-bl-tab ">
                        <p class="pro-hdr-2"> 
                            <svg width="27" height="8" viewBox="0 0 27 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.76001" y1="3.87051" x2="19.7212" y2="3.87051" stroke="black"/>
                                <circle cx="22.7913" cy="3.94494" r="2.96719" transform="rotate(-90 22.7913 3.94494)" stroke="black"/>
                            </svg>
                            Highest Level
                        </p>
    
                        <div class="pro-right-content">
                            <p>{{ $player->playerClubDetails->highest_level }} </p>
                        </div>
                    </div>
    
                    <div class="right-bl-tab mt-5">
                        <p class="pro-hdr-2"> 
                            <svg width="27" height="8" viewBox="0 0 27 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.76001" y1="3.87051" x2="19.7212" y2="3.87051" stroke="black"/>
                                <circle cx="22.7913" cy="3.94494" r="2.96719" transform="rotate(-90 22.7913 3.94494)" stroke="black"/>
                            </svg>
                            Current Club
                        </p>
    
                        <div class="pro-left-content">
                            <p>{{ $player->playerClubDetails->current_club ?? '--' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right block info -->
            <div class="col-lg-6 ps-5">
                <div class="pro-right-bl px-0 row">
                    <div class="pro-tab-box  hovered-tab pro-box-1 col-lg-6">
                        <p class="pro-tab-hdr">Position</p>

                        <div class="dec-container">
                            <p>{{ $player->playerPlayingDetails->position ?? '--' }}</p>
                        </div>
                    </div>
                    <div class="pro-tab-box col-lg-6 pro-box-2">
                        <p class="pro-tab-hdr">Second Position</p>

                        <div class="dec-container">
                            <p>{{ $player->playerPlayingDetails->second_position ?? '--' }}</p>
                        </div>
                    </div>
                    
                    <!-- Horizontal lines -->
                    <svg class="pro-line-1" width="2" height="300" viewBox="0 0 2 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.934326" y1="0.0383302" x2="0.93428" y2="299.805" stroke="url(#paint0_linear_24_20)"/>
                        <defs>
                        <linearGradient id="paint0_linear_24_20" x1="0.434326" y1="0.0383301" x2="0.434288" y2="299.805" gradientUnits="userSpaceOnUse">
                        <stop offset="0.145" stop-color="#292929"/>
                        <stop offset="0.48" stop-color="#565656"/>
                        <stop offset="0.875" stop-color="#292929"/>
                        </linearGradient>
                        </defs>
                    </svg>
                        
                    <svg class="pro-line-2" width="599" height="1" viewBox="0 0 599 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="598.306" y1="0.5" x2="0.934204" y2="0.500002" stroke="url(#paint0_linear_24_22)"/>
                        <defs>
                        <linearGradient id="paint0_linear_24_22" x1="598.306" y1="0" x2="0.934204" y2="3.69971e-05" gradientUnits="userSpaceOnUse">
                        <stop offset="0.145" stop-color="#292929"/>
                        <stop offset="0.48" stop-color="#565656"/>
                        <stop offset="0.875" stop-color="#292929"/>
                        </linearGradient>
                        </defs>
                    </svg>
                            
                    <div class="pro-tab-box pro-box-2 col-lg-6">
                        <p class="pro-tab-hdr">Foot</p>

                        <div class="dec-container">
                            <p>{{ $player->playerPlayingDetails->foot ?? '--' }}</p>
                        </div>
                    </div>
                    <div class="pro-tab-box pro-box-2 col-lg-6">
                        <p class="pro-tab-hdr">Traits</p>
                        
                        <div class="dec-container justify-content-start">
                            
                            @foreach (json_decode($player->playerPlayingDetails->morph_trait_id) as $index)
                                <div class="info-tab">{{ $player->playerPlayingDetails->traits[$index] ?? '--' }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
@endsection