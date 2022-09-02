@extends('layouts.main')

@section('content')

<section class="club-sec container">
    <h3 id="club-hdr">Club</h3>

    <div class="blocks-row">
        {{-- Our Story & Vision block --}}
        <div class="club-block cb-img-1">
            
            <div class="block-overlay">
                <p class="club-hdr-1">Our Story & Vision</p>
                
                <p class="club-bl-des"> 
                    Southall Athletic F.C. was started primarily due to the lack of 11-a-side football opportunities within the community, this coincided with the figures released by the FA on how underrepresented the Black, Asian & Minority Ethnic (BAME) community was in football. 
                    We are looking to become the first ALL-INCLUSIVE grassroots club offering football for adults, both men and women; youth, both boys and girls; and also, football for those who are disabled.
                </p>
            </div>
        </div>
        
        {{-- Mission --}}
        <div class="club-block cb-img-2">
            <div class="block-overlay">
                <p class="club-hdr-1">Mission</p>
                
                <p class="club-bl-des"> 
                    Our aim is to educate our community about football. So, as a community we can be taken seriously within the game. The consensus was that other local clubs were non-representative of our community and did little in the way of benefiting the community. They were also not a visible presence in the community, three things we wanted to ensure we could change. 
                </p>
            </div>
        </div>
    </div>
    
    <div class="blocks-row">
        
        {{-- Core Values --}}
        <div class="club-block cb-img-3">
            <div class="block-overlay">
                <p class="club-hdr-1">Core Values</p>
                
                <p class="club-bl-des"> 
                    <ul type="square">
                        <li>To address the issue of how underrepresented the South Asian and the BAME community as whole are in football. </li>
                        <li>To focus on actions that will benefit the whole community. </li>
                        <li>To create a visible presence and an identity within the community.</li>
                        <li>To work with schools, agencies, and social groups to enhance community contribution.</li>
                        <li>To provide opportunities for children and youth to fulfil their potential through football.</li>
                    </ul>            
                </p>
            </div>
        </div>
        
        {{-- Who are we? --}}
        <div class="club-block cb-img-4">
            <div class="block-overlay">
                <p class="club-hdr-1">Who are we?</p>
                
                <p class="club-bl-des"> 
                    We are already a Middlesex affiliated football club (X-MID2820). We are a community grassroots football club, operating as a non-profit, looking to become the first ALL-INCLUSIVE club in Middlesex. 
                    We currently have adult men's and women's teams and will be introducing, for the first time, youth teams this summer. We have recently started Walking Football. And we are also working on football sessions for girls and disability football. 
                </p>
            </div>
        </div>
    </div>
</section>


@endsection
