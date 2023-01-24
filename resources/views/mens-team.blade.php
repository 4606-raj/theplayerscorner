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
                    <div class="manager-img-bx mx-3">
                        <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                    </div>
                    <div class="manager-dec-bx">
                        <p class="manager-name">Coach/Manager’s Name</p>
                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem. Libero turpis egestas felis malesuada facilisis. In fames sit sagittis viverra.</p>

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
                    <div class="manager-dec-bx">
                        <p class="manager-name">Coach/Manager’s Name</p>
                        <p class="manager-dec-txt">Lorem ipsum dolor sit amet consectetur. Morbi dictum suspendisse feugiat eget fermentum consectetur penatibus ultrices euismod. Sem sit bibendum ultricies eget aliquam facilisis. Urna et phasellus massa consectetur nunc viverra aliquet lorem. Libero turpis egestas felis malesuada facilisis. In fames sit sagittis viverra.</p>
                        
                        <div class="team-see-more manager-rd-more">
                            <a href="{{ route('mens-team') }}"><span>See more</span>
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                </svg>                            
                            </a>
                        </div>
                    </div>
                    <div class="manager-img-bx mx-3">
                        <img src="{{ asset('assets/images/teams-images/manager-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection