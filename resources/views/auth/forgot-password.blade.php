@extends('layouts.main')

@section('content')


<section class="container auth-sec">
	
    <div class="auth-block">
        <h2 class="auth-bl-hdr">forgot password</h2>

        <p class="auth-des">Can’t remember your ‘My Athletic Hub’ Account password? No problem, simply enter your email address below and we will send you an email containing a password reset link. <a href="{{ route('login') }}">Click here</a> to log in.
        </p>

        <form class="card-body pt-3" id="login" name="login" action="{{ route('login') }}" method="POST">
            @csrf
            {{-- Email --}}
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            
            <div class="d-flex justify-content-center">
                <input type="submit" class="submit-btn mt-0" value="Send">
            </div>
        </form>
    </div>

</section>


@endsection
