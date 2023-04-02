@extends('layouts.main')

@section('content')

<section class="container club-sec" id="contact-container">
    <h3 id="club-hdr" class="nopadding">Club Information</h3>
    

    <p class="ct-hdr-2 mt-4 mb-4">Southall Athletic Football Club (CIC) is wholly-owned by the community of Southall (Ealing), which is managed under the care of: <br> <B>Ajay Gore</B>, <B>Amar Chana</B>, <B>Mohit Pabbi </B>, <B>Neshal Madlani</B>, and <B>Ryan Rai</B>.</p>

    
    <p class="club-sub-hdr text-center mt-3">Contact us</p>
    <div class="d-flex club-address">

        <div class="blocks-row flex-column justify-content-center">
            <div class="club-box">
                <p class="club-adr-hdr">Registered Address</p>
                <address>
                    Southall Athletic Football Club (CIC)<br>
                    27 Old Gloucester Street<br>
                    London<br>
                    WC1N 3AX
                </address>
    
                <div class="mt-4">
                    <p class="ct-phone mb-2"><i class="bi bi-telephone-fill"></i>020 3289 5010</p>
                    <a href="mailto:info@southallathleticfc.com" class="ct-mail"><i class="bi bi-envelope-fill"></i>info@southallathleticfc.com</a>
                </div>
            </div>
            <div class="club-box">
                <p class="club-adr-hdr">Home Ground</p>
                <address>
                    Southall Athletic Football Club<br>
                    Norwood Hall Playing Fields<br>
                    Norwood Green Road<br>
                    Southall<br>
                    UB2 4LA
                </address>
    
                <p class="mt-4">[Access is via the pedestrian entrance of Khalsa Primary School. Please be advised that parking is NOT available on site.]</p>
            </div>
        </div>

        <div class="ground-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d617.2692041921547!2d-0.9744141000000119!3d53.0850953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d02d7ee40de6784!2sNorwood%20Park!5e0!3m2!1sen!2sin!4v1662113905513!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    {{-- Dropdown questions START--}}
    <div class="faq-wrapper"> 
        <div class="accordion accordion-flush" id="myAccordion"> 
            {{-- Dropdown option 1 --}}
            <div class="accordion-item"> 
                <h2 class="accordion-header" id="flush-headingOne"> 
                    <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> 
                        Directions 
                    </button> 
                </h2> 
                <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion"> 
                    <div class="accordion-body p-0"> 
                        <p>Content to follow</p>
                    </div> 
                </div> 
            </div> 
            {{-- Dropdown option 2 --}}
            <div class="accordion-item"> 
                <h2 class="accordion-header" id="flush-headingTwo"> 
                    <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> 
                        Parking 
                    </button> 
                </h2> 
                <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingTwo" data-bs-parent="#myAccordion"> 
                    <div class="accordion-body p-0"> 
                        <p>Content to follow</p>
                    </div> 
                </div> 
            </div> 
            {{-- Dropdown option 2 --}}
            <div class="accordion-item"> 
                <h2 class="accordion-header" id="flush-headingThree"> 
                    <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> 
                        Public Transport 
                    </button> 
                </h2> 
                <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion"> 
                    <div class="accordion-body p-0"> 
                        <p>Content to follow</p>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
    {{-- Dropdown questions END--}}

    <div class="cl-wrapper-2">
        <p class="club-sub-hdr text-center mt-3">Our Home – Norwood Hall Playing Fields</p>
        <div class="d-flex justify-content-center">
            <div class="cl-img-box">
                <img src="{{ asset('assets/images/Picture3.png') }}" alt="">
            </div>
        </div>
        <p class="cl-wrapper-txt">
            In 1969, it was said that 'although Norwood Hall, Southall, should be a proud possession of Ealing, not many people know of its existence'.
        </p>
        <p class="cl-wrapper-txt">
            Tucked away on Tentelow Lane, next to St. Mary's Church, is another example of Sir John Soane's local work. It was built in 1801-1803 for Soane's business associate, John Robins, an auctioneer, and estate agent. Soane's drawings show what the building was like. Originally the south front echoed the arch elevation to be found at Pitzhanger Manor. On each side of this arch are niches below circular openings.
        </p>
        <p class="cl-wrapper-txt">
            The later nineteenth century amendments to the house were not favourable. It was pebble dashed and a large addition was built to the west of the building for the owners, the Unwin family. It is probable that these alterations irretrievably disfigure the Soane mansion.
        </p>
        <p class="cl-wrapper-txt">
            Robins lived in the hall until he died in 1831. The Unwins resided there from at about 1851-1945. It was then called Norwood Lodge. The head of the family was William Unwin, born in about 1806, who was by 1861 a landed gentleman and a widower. His two unmarried children and three servants resided there in 1861, though they had flown the nest by 1871. By 1886, Samuel Unwin, his son, a major in the Royal Fusiliers, dwelt there.  Clearly his needs were modest, for he employed only one live-in servant, Amy Jordan, a cook.
        </p>
        <p class="cl-wrapper-txt">
            The house had extensive grounds. These included, in the nineteenth century, greenhouses, a walled garden, paths, ponds, two orchards and grazing land. However, in the 20s, much of the land was sold off for housing, save for nineteen acres. During World War Two the property was damaged by a flying bomb, which destroyed the neighbouring rectory. It was bought in 1945 by the Middlesex County Council for educational purposes. It was once suggested that Southall Grammar School be rebuilt on the site. As it transpired, part of the grounds were used by the school as playing fields. However, between 1945-1956 it was used as an old peoples' home. The house was renamed around this time, and acquired its present name of Norwood Hall, which sounds rather more imposing than Norwood Lodge.
        </p>
        <p class="cl-wrapper-txt">
            In 1956 the house became the Norwood Hall Institute of Horticultural Education. Four years later it was said that it 'instructs students both in the theory and practice of gardening'. It provided lectures on gardening, day release classes for parks department employees and young florists. There were also courses for teachers and for those intending to take the Royal Horticultural Society exams.
        </p>
        <p class="cl-wrapper-txt">
            To illustrate lectures and to demonstrate points made therein, living specimens were needed. Therefore, there was two acres in the grounds for greenhouses to grow fruit and vegetable plants. Nothing was grown in great quantities, with a maximum of three of any species. Some were grown in sub-tropical atmosphere; in 1960, 250 bananas were grown.
        </p>
        <p class="cl-wrapper-txt">
            Following the dissolution of the administrative county in 1965, the college was run by several local London boroughs. It later became Ealing Tertiary College, offering a range of subjects, including horticulture. It is now Sri Guru Sabha Gurdwara and <a href="https://www.khalsaschool.co.uk/" target="_blank">Khalsa Primary School</a>. 
        </p>
        <p class="cl-wrapper-txt-2">
            We would like to thank Ealing Council and Dr Jonathan Oates, borough archivist and local history librarian, for the use of this information. 
        </p>
    </div>

    <div class="wrapper-3-row">
        <div class="wrapper-3-tables">
            <table class="table">
                <p class="club-sub-hdr">Club Personnel</p>
                <tbody>
                    <tr>
                        <th scope="row">U10 Red, Manager</th>
                        <td>Dewayne Carrington Jones</td>
                    </tr>
                    <tr>
                        <th scope="row">U10 White, Manager</th>
                        <td>Victor Badu</td>
                    </tr>
                    <tr>
                        <th scope="row">U10 White, Coach</th>
                        <td>Lewis White</td>
                    </tr>
                    <tr>
                        <th scope="row">U12 Red, Manager</th>
                        <td>Gabriel Chiedozie</td>
                    </tr>
                    <tr>
                        <th scope="row">U14 Red, Manager</th>
                        <td>Herpreet Nirwal</td>
                    </tr>
                    <tr>
                        <th scope="row">U14 Red, Coach</th>
                        <td>Mandeep Sanghera</td>
                    </tr>
                    <tr>
                        <th scope="row">U14 Red, Coach</th>
                        <td>Younes Mezidi</td>
                    </tr>
                    <tr>
                        <th scope="row">U15 Red, Manager</th>
                        <td>Mohit Pabbi</td>
                    </tr>
                    <tr>
                        <th scope="row">U15 White, Manager</th>
                        <td>David Hayes</td>
                    </tr>
                    <tr>
                        <th scope="row">U15 Coach</th>
                        <td>Links Igbinezaka</td>
                    </tr>
                    <tr>
                        <th scope="row">U15 Coach</th>
                        <td>Julian Gerrard</td>
                    </tr>
                    <tr>
                        <th scope="row">Women’s First Team, Manager</th>
                        <td>Ryan Rai</td>
                    </tr>
                    <tr>
                        <th scope="row">Women’s First Team, Coach</th>
                        <td>Sanjay Mehay</td>
                    </tr>
                </tbody>
              </table>
            
        </div>
        <div class="divider-line"></div>
        <div class="wrapper-3-tables">
            <table class="table">
                <p class="club-sub-hdr">Football Team Operations</p>
                <tbody>
                    <tr>
                        <th scope="row">Co-Chairman</th>
                        <td>Ajay Gore</td>
                    </tr>
                    <tr>
                        <th scope="row">Co-Chairman</th>
                        <td>Ryan Rai</td>
                    </tr>
                    <tr>
                        <th scope="row">Club Secretary</th>
                        <td>David Hayes</td>
                    </tr>
                    <tr>
                        <th scope="row">Treasurer</th>
                        <td>Amar Chana</td>
                    </tr>
                    <tr>
                        <th scope="row">Chief Welfare Officer</th>
                        <td>Mohit Pabbi</td>
                    </tr>
                    <tr>
                        <th scope="row">Fixtures Secretary</th>
                        <td>David Hayes</td>
                    </tr>
                    <tr>
                        <th scope="row">Membership Secretary</th>
                        <td>Neshal Madlani</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="wrapper-3-tables mt-4 col-lg-5 col-md-6">
        <table class="table">
            <p class="club-sub-hdr">Business Team</p>
            <tbody>
                <tr>
                    <th style="border: none" scope="row">Head of Partnerships</th>
                    <td style="border: none">Mohit Pabbi</td>
                </tr>
            </tbody>
          </table>
    </div>
</section>



@endsection
