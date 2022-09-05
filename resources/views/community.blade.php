@extends('layouts.main')

@section('content')

<section class="container" id="contact-container">
    <h3 id="club-hdr" class="nopadding">Community</h3>
    
    <p class="cl-wrapper-txt">
        Southall Athletic F.C. is an amateur football club playing in multiple leagues, such as, the <a href="https://www.firsteleven.co.uk/harrow/" target="_blank">Harrow Youth Football League (HYFL)</a>, <a href="https://www.juniorpremierleague.com/" target="_blank">Junior Premier League (JPL)</a>, <a href="https://www.mcfl.org.uk/" target="_blank">Middlesex County Football League (MCFL)</a> and the <a href="https://www.super5league.com/" target="_blank">Super5 League</a>.   
    </p>
    <p class="cl-wrapper-txt">
        Since our formation, we have operated as an Unincorporated Association. The club and all its members are bound together by the constitution and rules of the club and The FA.   
    </p>
    <p class="cl-wrapper-txt">
        Southall Athletic F.C. have since expanded into women’s football and is now preparing for its inaugural season in youth football. As the club continues grows in stature and interest, the members decided it is in the best interest of the club to upgrade its legal structure by being setup as a Community Interest Company (CIC). This is a non-charitable limited company established to provide activities for the benefit of the community or pursue a social purpose. This is different to a regular limited company, which is set up with the purpose of making a profit for shareholders.   
    </p>
    <p class="cl-wrapper-txt">
        To achieve this, the club is currently in the process of satisfying a “community interest test” to ensure the club is established for community purposes.     
    </p>
    <p class="cl-wrapper-txt">
        Once the club is setup as a CIC, Southall Athletic F.C. will be regulated by the CIC Regulator.     
    </p>
    <p class="cl-wrapper-txt">
        <b>Harrow Youth Football League (HYFL)</b> <br>
        The <a href="https://www.firsteleven.co.uk/harrow/" target="_blank">Harrow Youth Football League (HYFL)</a> is a premier football organisation offering grassroots football opportunities for the Under-12 to Under-18 age groups; Under-12 at the 9-a-side level, and Under-13 to Under-18 at the 11-a-side level.     
    </p>
    <p class="cl-wrapper-txt">
        The Harrow Soccer Combination is a premier 5-a-side, 7-a-side and 9-a-side football development scheme for the Under-7, Under-8, Under-9, Under-10, and Under-11 age groups.     
    </p>
    <p class="cl-wrapper-txt">
        The HYFL and the Harrow Soccer Combination comprise some 100 clubs and over 750 teams, facilitating football for around 10,000 boys and girls each week between the Under-7 to Under-18 age groups.     
    </p>
    <p class="cl-wrapper-txt">
        <b>Junior Premier League (JPL) </b> <br>
        We are proud to announce that next season some of our teams will be playing in the <a href="https://www.juniorpremierleague.com/" target="_blank">Junior Premier League (JPL)</a> for the very first. ‘To be the best, you must play with the best’ – and that is what the JPL is all about. 
    </p>
    <p class="cl-wrapper-txt">
        The JPL launched for the 2011/12 season. The original membership of the JPL consisted of a group of large clubs from the Midlands & Southern England who wanted to develop young footballers by employing high standards of coaching and better-quality matches.
    </p>
    <p class="cl-wrapper-txt">
        The JPL is a player development focused league, driving innovation and ensuring every player has a premier experience. It is now 10 years old and from a relatively small beginning, it now boasts as England’s only recognised National league for youth players ranging from U8 to U18 and with over 25,000 players it is considered as the largest league in the country.
    </p>
    <p class="cl-wrapper-txt">
        <b>Super 5 League</b> <br>
        Our women’s team plays in the <a href="https://www.super5league.com/" target="_blank">Super 5 League</a>, which is 5-a-side football league in London. The Super5 League welcomes women and non-binary people of all levels. The League is comprised of 52 teams across 7 divisions, with international and charity events throughout the year. The League was proudly awarded FA Grassroots League of the year in 2019 & 2020
    </p>

    {{-- Community Members --}}
    <div class="community-cards">
        {{-- Card 1 --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="des-tag">chairperson</p>
                <h5 class="card-title">Ajay GORE</h5>
                <a href="mailto:ajay.gore@southallathleticfc.com" class="com-email">ajay.gore@southallathleticfc.com</a>
                <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="des-tag">secretary</p>
                <h5 class="card-title">David HAYES</h5>
                <a href="mailto:david.hayes@southallathleticfc.com" class="com-email">david.hayes@southallathleticfc.com</a>
                <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="des-tag">treasurer</p>
                <h5 class="card-title">Amar CHANA</h5>
                <a href="mailto:amar.chana@southallathleticfc.com" class="com-email">amar.chana@southallathleticfc.com</a>
                <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="des-tag">welfare officer </p>
                <h5 class="card-title">Mohit PABBI</h5>
                <a href="mailto:mohit.pabbi@southallathleticfc.com" class="com-email">mohit.pabbi@southallathleticfc.com</a>
                <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

        {{-- Card 5 --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="des-tag">fixture secretary</p>
                <h5 class="card-title">David HAYESI</h5>
                <a href="mailto:david.hayes@southallathleticfc.com" class="com-email">david.hayes@southallathleticfc.com</a>
                <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

        {{-- Card 6 --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="des-tag">membership secretary</p>
                <h5 class="card-title">Neshal MADLANI</h5>
                <a href="mailto:neshal.madlani@southallathleticfc.com" class="com-email">neshal.madlani@southallathleticfc.com</a>
                <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

    </div>

    {{-- Team Captains --}}
    
    <div class="mt-5 mb-5 community-cards">
        <h3 id="club-sub-hdr" class="nopadding">Team Captains</h3>
        <div class="swiper team-captains mt-4">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Women</p>
                            <h5 class="card-title">Name of Captain</h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Under 15</p>
                            <h5 class="card-title">Name of Captain </h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Under 14</p>
                            <h5 class="card-title">Name of Captain </h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Under 13</p>
                            <h5 class="card-title">Name of Captain </h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Under 12</p>
                            <h5 class="card-title">Name of Captain </h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Under 11</p>
                            <h5 class="card-title">Name of Captain </h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Team Captain Card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="des-tag">Under 10</p>
                            <h5 class="card-title">Name of Captain </h5>
                            <p class="card-text">Some quick example text to build on the Bio and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="swiper-pagination"></div>
        </div>
    </div>
  
</section>




@endsection
