@extends('layouts.main')

@section('content')


<section class="container auth-sec">
	
    <div class="auth-block">
        <h2 class="auth-bl-hdr">Register Details</h2>

        {{-- <p class="auth-des">Can’t remember your ‘My Players Hub’ Account password? No problem, simply enter your email address below and we will send you an email containing a password reset link. <a href="{{ route('login') }}">Click here</a> to log in.
        </p> --}}

        <form class="card-body pt-3 mt-5" id="login" name="login" action="{{ route('register.role.store', $role) }}" method="POST">
            @csrf
            {{-- Email --}}
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address *</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="userpassword" name="password" placeholder="password" required>
                <label for="userpassword">Password *</label>
            </div>
            
            {{-- Confirm Password --}}
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="password" required>
                <label for="confirmPassword">Confirm Password *</label>
            </div>
            
            <div class="d-flex justify-content-center">
                <a href="#" class="btn-cover">
                    <input type="submit" class="submit-btn mt-0" value="Continue">
                </a>
            </div>
        </form>
    </div>

</section>


@endsection
