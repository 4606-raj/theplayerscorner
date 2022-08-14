@extends('layouts.main')

@section('content')


<section class="container auth-sec">
	<div class="auth-block">
        <h3 class="confirm-e-hdr">confirm email</h3>
        <div>
            <p class="cf-e-txt">Your account is not yet active – you have not yet confirmed your email.</p>
            <p class="cf-e-txt">We have sent an email to <span><i>< user email address ></i></span>. Please check your inbox for the confirmation email and click the link within.</p>

            <p class="cf-e-txt">Please allow up to 5 minutes for your confirmation email to arrive.</p>
            <p class="cf-e-txt">Haven’t received any email yet? Then please follow the below steps:</p>
            
            <ol class="cf-list" type="1">
                <li>Check your junk/spam email folders</li>
                <li><a href="#">Click here</a> to resend the confirmation email</li>
            </ol>

            <p class="cf-e-txt">After following the above steps, should you have still not received a confirmation email then please email: <a href="mailto: myathletichub@southallathleticfc.com">myathletichub@southallathleticfc.com</a> for support to activate your account.</p>
            <p class="cf-e-txt">If you have already activated your account, then please <a href="{{ route('login') }}">click here</a> to log in.</p>
        </div>
	</div>

</section>


@endsection
