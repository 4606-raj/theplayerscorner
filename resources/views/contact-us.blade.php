@extends('layouts.main')
@section('content')

    <section class="container" id="contact-container">
        <div class="row">
            
            {{-- Right side Contact description --}}
            <div class="ct-right-box mb-3 mb-lg-0 col-lg-6">
                <p class="ct-hdr">Drop us a line!</p>
                <p class="ct-des-txt mb-2">
                    Contact us for an informal chat about your football ambitions and discover how The Players Corner could be the perfect partner for your growth.
                    <br><br>
                    <span class="ct-phone"><i class="bi bi-telephone-fill"></i> +44 (0)20 3289 1181</span>
                    <a href="mailto:hello@theplayerscorner.co.uk" class="ct-mail"><i class="bi bi-envelope-fill"></i>hello@theplayerscorner.co.uk</a>
                </p>

                <div class="social-icons col-6">
                    <ul>
                        <li><a href="https://www.facebook.com/the.playerscorner/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/the.playerscorner/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/the-players-corner" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://x.com/_PlayersCorner" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                    </ul>
                </div>
            </div>
        
            {{-- Left side Contact Form --}}
            <div class="ct-left-box col-lg-6 col-12" id="ct-form">
                <form class="row g-3 mt-1" action="{{ route('contact-us.submit') }}" method="POST">
                @csrf
                    <div class="form-floating my-2 col-6 col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="first_name" id="floatingInput" placeholder="First Name" required>
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating my-2 col-6 col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="Last Name" required>
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <div class="form-floating my-2 col-md-6 col-sm-6">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating my-2 col-md-6 col-sm-6">
                        <input type="phone" class="form-control" name="phone" id="floatingInput" placeholder="Contact Number" required>
                        <label for="floatingInput">Contact Number</label>
                    </div>
                    
                    <div class="col-md-12 my-2">
                        {{-- <label for="inputState" class="form-label"> </label> --}}
                        <select id="inputState" name="type" class="form-select" required>
                            <option value="" disabled selected>Speak to me about</option>
                            <option value="1-2-1 Coaching">1-2-1 Coaching</option>
                            <option value="Performance Analysis">Performance Analysis</option>
                            <option value="Representation">Representation</option>
                            <option value="Scouting">Talent Identification</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-floating my-2">
                        <textarea class="form-control" placeholder="Speak to me about" name="message" id="floatingTextarea" required></textarea>
                        <label for="floatingTextarea">Speak to me about</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="consent" required>
                        <label class="form-check-label" for="consent">
                            Consent required <br>
                            The Players Corner needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our privacy policy.
                        </label>
                    </div>
                    {{-- {!! NoCaptcha::display() !!}

                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif --}}

                    <div class="col-12 d-flex justify-content-center">
                        <a href="#" class="btn-cover">
                            <button type="submit" class="submit-btn" style="background: #141414">Send</button>
						</a>
                    </div>
                </form>
            </div>

        </div>
    </section>

    @endsection
