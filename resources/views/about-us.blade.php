@extends('layouts.main')

@section('content')

<section class="container aboutUs-sec">
    <h3 id="ab-hdr" class="nopadding">ABOUT US</h3>
    <p class="ab-sub-hdr">Our Story & <span>Vision</span> </p>
    <p class="ab-des-txt">
        Football has changed almost beyond recognition in recent years, and is still evolving. While skill, commitment and talent are vital for footballers, these are often not enough for a grass roots footballer to be seen by those that matter, so they can get the support and coaching they need to truly make a career in this competitive industry.   
        <br><br>
        Before, the path to a successful footballing career depended on who you knew, and where you played football. Players from more affluent backgrounds and well-resourced areas had a better chance of getting in front of the people that mattered, and it was tougher for those from non-privileged areas to make the same mark.  
    </p>
    <p class="ab-note-txt">
        The Players Corner is a comprehensive platform that levels the playing field, allowing talented players from any background the chance to be discovered by those who can make a difference to their career. 
    </p>
    
    {{-- <p class="ab-sub-hdr">Mission</p>
    <p class="ab-des-txt" style="opacity: .9">Our aim is to educate our community about football. So, as a community we can be taken seriously within the game.</p>
    <p class="ab-des-txt">The consensus was that Asians Can’t Play Football d <br> other local clubs were non-representative of our community and did little in the way of benefiting the community. They were also not a visible presence in the community, three things we wanted to ensure we could change.  </p> --}}
    
    <p class="ab-sub-hdr">What We Offer</p>
    <ul class="ab-list">
        <span>Here, you’ll find the opportunity to:</span>
        <li>Create a free player profile - Upload your stats and achievements to impress scouts, coaches and clubs.</li>
        <li>Be part of the global scouting network - Get in front of expert scouts looking for talent just like yours.</li>
        <li>Access expert coaching and development strategies - Connect with a coach who can develop your skills even further.</li>
        <li>Get representation (coming soon) - For those with exceptional promise, connect with professional player representatives for expert guidance and support for career development. </li>
    </ul>
    
    <p class="ab-sub-hdr">Committed to <span>Ethical Development</span></p>
    <p class="ab-des-txt">Not only are we committed to developing previously untapped talent, we are determined to do so with a holistic commitment to equality, diversity and inclusion in football. We envision a future in which talent is not restricted by who you are as a person, and aim to be part of the global movement towards a more inclusive game. We also protect our users by adhering to the safeguarding standards put in place by FIFA, UEFA and the FA.<br><br>
        If you are ready to commit to more inclusive football, we’re ready to help you.  <a href="{{ route('login') }}">Join our community</a>, build your network and take the next steps in your footballing career with expert help from some of the world’s most experienced professionals. </p>
</section>



@endsection
