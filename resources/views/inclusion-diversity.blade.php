@extends('layouts.main')

@section('content')

<section class="container inclusion-sec" id="contact-container">
    <h3 id="club-hdr" class="nopadding">Inclusion & Diversity</h3>
    
    
    <p class="ct-hdr-2 mt-4 mb-4">It is the aim of Southall Athletic Football Club to include all members of the community in which the club operates, enabling them to enjoy the spectacle, thrills, atmosphere, and excitement that live football brings.</p>

    <div class="d-flex justify-content-center inclusion-wrapper">
        <div class="cl-img-box">
            <div>
                <img src="{{ asset('assets/images/image002.jpg') }}" alt="">
                
                <p class="cl-wrapper-txt">Our home, Ealing, is ranked as the 18th most deprived London borough out of the 33</p>
            </div>
        </div>

        <div class="cl-right-bl">    
            <div id="chart-area"></div>
            
            <p class="cl-wrapper-txt">Local Authorities in the region, and 87th most deprived out of 326 Local Authorities nationally. </p>
    
            <p class="cl-wrapper-txt">
                From which, 51.01% of our population is represented by the BAME community, which is significantly above the national average of 14.6%. 
            </p>
            <p class="cl-wrapper-txt">
                The club wish to include ALL members of the community if they wish to participate in football. 
            </p>
            <p class="cl-wrapper-txt">
                To that end, we operate to encourage, educate and train young players to be the lifeblood of the club going forward. 
            <p class="cl-wrapper-txt">
                We aim to offer a range of activities to target all areas of our diverse community, including those groups that are harder to reach. 
            </p>
            <p class="cl-wrapper-txt">
                From, both a community service point of view and a business perspective, it makes commercial and public relations sense to attract, as many players, parents, supporters, suppliers, and partners from all parts of the community. 
            </p>
            <p class="cl-wrapper-txt">
                The club will, therefore, make it our business to connect with as many people from the diverse communities that make up the Southall’s and Ealing’s population. 
            </p>
            <p class="cl-wrapper-txt">
                In addition, the club aspire to be a good community neighbour, with positive relationships with all representative groups within the local area and beyond. 
            </p>
            <p class="cl-wrapper-txt">
                The club support the FA Respect campaign and take a proactive approach to encouraging all of its representatives to report incidents of discriminatory behaviour by alerting a club official or via the Kick It Out app. <a href="http://www.kickitout.org/get-involved/report-it/the-kick-it-out-app/" target="_blank">Click here</a> to download it. 
            </p>
        </div>
        
    </div>
    

</section>



@endsection
