@extends('layouts.main')

@section('content')

    {{-- Teams section --}}
    <section class="teams-sec">
        <div class="container" id="teams-container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-sm-11 col-11">
                    <p class="sec-main-hdr">Teams</p>
                </div>
    
                {{-- Men's Card --}}
                <div class="col-lg-4 col-md-5 col-sm-5 col-11">
                    <p class="card-cat-hdr">Men's</p>
                    <div class="team-cat-card"> 
                        <div class="team-cat-img">
                            <img src="{{ asset('assets/images/slider/slide-3.jpg') }}" alt="">
                        </div>
                        <div class="team-see-more">
                            <a href="{{ route('mens-team') }}"><span>See more</span>
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                </svg>                            
                            </a>
                        </div>
                    </div>
                </div>
    
                {{-- Women's Card --}}
                <div class="col-lg-4 col-md-5 col-sm-5 col-11 women-card-adjust">
                    <p class="card-cat-hdr">Women's</p>
                    <div class="team-cat-card"> 
                        <div class="team-cat-img">
                            <img src="{{ asset('assets/images/slider/slide-3.jpg') }}" alt="">
                        </div>
                        <div class="team-see-more">
                            <a href="{{ route('womens-team') }}"><span>See more</span>
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                </svg>                            
                            </a>
                        </div>
                    </div>
                </div>
    
                {{-- Youth Card --}}
                <div class="col-lg-9 col-md-11 col-sm-11 col-11 youth-card-adjust">
                    <p class="card-cat-hdr">Youth</p>
                    <div class="team-cat-card"> 
                        <div class="team-cat-img">
                            <img src="{{ asset('assets/images/slider/slide-3.jpg') }}" alt="">
                        </div>
                        <div class="team-see-more">
                            <a href="{{ route('youth-team') }}"><span>See more</span>
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.84277 11.6567L7.61777 10.3276L10.724 7.07341H0.0927734V5.24007H10.724L7.61777 1.9859L8.84277 0.656738L14.0928 6.15674L8.84277 11.6567Z" fill="#DDDDDD"/>
                                </svg>                            
                            </a>
                        </div>
                    </div>
                </div>
    
    
            </div>

        </div>

    </section>

@endsection