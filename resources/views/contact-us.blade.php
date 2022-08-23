@extends('layouts.main')

@section('content')

<section class="container" id="contact-container">
    <p class="ct-hdr">If you are a football-loving player or a parent or a member of our community, on the lookout for the right club with great values and endless opportunities, then look no further.</p>
    <p class="ct-hdr-2">Join us today, we look forward to speaking with you.</p>

    <div class="d-flex align-items-center flex-column justify-content-evenly mt-4">
     <div>
         <a href="mailto:info@southallathleticfc.com" class="ct-mail"><i class="bi bi-envelope-fill"></i>info@southallathleticfc.com</a>
         <p class="ct-phone"><i class="bi bi-telephone-fill"></i>020 3289 5010</p>
     </div>
    </div>

     <div class="social-icons">
         <ul>
             <li><a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><i class="bi bi-facebook"></i> <span>facebook</span></a></li>
             <li><a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><i class="bi bi-instagram"></i> <span>instagram</span></a></li>
             <li><a href="https://www.linkedin.com/company/southall-afc/" target="_blank"><i class="bi bi-linkedin"></i><span>linkedin</span></a></li>
             <li><a href="https://twitter.com/southall_afc" target="_blank"><i class="bi bi-twitter"></i> <span>twitter</span></a></li>
             <li><a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><i class="bi bi-youtube"></i><span>youtube</span></a></li>
         </ul>
     </div>

     <div id="ct-form">
         <h2>DROP US A LINE</h2>

         <form class="row g-3" action="{{ route('contact-us.submit') }}" method="POST">
          @csrf
             <div class="form-floating mb-3 col-md-6">
                 <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Enter Name" required>
                 <label for="floatingInput">Name</label>
               </div>
             <div class="form-floating mb-3 col-md-6">
                 <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                 <label for="floatingInput">Email address</label>
             </div>

             <div class="form-floating mb-3 col-md-6">
                 <input type="phone" class="form-control" name="phone" id="floatingInput" placeholder="name@example.com" required>
                 <label for="floatingInput">Phone Number</label>
             </div>
             
             <div class="col-md-6 mt-0">
               <label for="inputState" class="form-label">Nature of enquiry </label>
               <select id="inputState" name="type" class="form-select" required>
                 <option selected>Choose...</option>
                 <option>General enquiry</option>
                 <option>Player Registration</option>
                 <option>Marketing</option>
                 <option>Partnership Opportunities</option>
               </select>
             </div>
             
             <div class="form-floating">
                 <textarea class="form-control" placeholder="Leave a comment here" name="message" id="floatingTextarea" required></textarea>
                 <label for="floatingTextarea">Message</label>
               </div>

               {!! NoCaptcha::display() !!}

             <div class="col-12 d-flex justify-content-center">
               <button type="submit" class="btn btn-primary" id="sub-btn">Submit</button>
             </div>
           </form>
     </div>
 </section>

@endsection