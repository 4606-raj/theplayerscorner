@extends('layouts.main')

@section('content')


<section class="container auth-sec">
	<div class="auth-block">

		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
			  <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
			</li>
			<li class="nav-item" role="presentation">
			  <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
			</li>
		  </ul>
		  <div class="tab-content" id="myTabContent">

			@if($errors->any())
            	{!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
        	@endif
			
			{{-- Login Section --}}
			<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
				
				<p class="auth-des">Welcome to the new home of The Athletic! Our new online hub to help players, parents, and supporters manage and navigate through their season.
					<br>
					<span>Login to your ‘My Athletic Hub’ Account by entering your username and password below.</span> 
				</p>
				
				<form class="card-body pt-3" name="login" action="{{ route('login') }}" method="POST">
					@csrf
					{{-- Email --}}
					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="loginemail" name="email" placeholder="name@example.com" required>
						<label for="loginemail">Email address</label>
					</div>
					{{-- Password --}}
					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="userpassword" name="password" placeholder="password" required>
						<label for="userpassword">Password</label>
					</div>

					<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
						<div class="col-md-6">
							{!! RecaptchaV3::field('register') !!}
							@if ($errors->has('g-recaptcha-response'))
								<span class="help-block">
									<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
								</span>
							@endif
						</div>
					</div>
					
					<p class="forgot-pswd">Forgot your password? <a href="{{ route('forgot-password') }}">Click here</a> to reset your password.</p>
					
					<div class="d-flex justify-content-center">
						<input type="submit" class="submit-btn" value="Continue">
					</div>
				</form>
			</div>
			
			{{-- Register Section --}}
			<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
				
				<p class="auth-des">Enter your details to create your very own ‘My Athletic Hub’ Account.
					<br>
					If you are under-16 your account will need to be linked to at least ONE of your parent’s accounts. <br> <br>
					Please note that <span>‘My Athletic Hub’</span> accounts only allow an email address to be used once.
				</p>
				
				<form class="card-body pt-3" name="login" action="{{ route('confirm-email') }}" method="POST">
					@csrf
					{{-- First Name --}}
					<div class="form-floating mb-3">
						<input type="text" class="form-control" placeholder="name@example.com">
						<label>First Name</label>
					</div>

					{{-- Surname --}}
					<div class="form-floating mb-3">
						<input type="text" class="form-control" placeholder="name@example.com">
						<label>Surname</label>
					</div>

					{{-- User Email --}}
					<div class="form-floating mb-3">
						<input type="email" class="form-control" placeholder="name@example.com">
						<label >Email address</label>
					</div>

					{{-- Password --}}
					<div class="form-floating mb-3">
						<input type="password" class="form-control" placeholder="password">
						<label>Password</label>
					</div>

					{{-- Confirm Password --}}
					<div class="form-floating mb-3">
						<input type="password" class="form-control" placeholder="password">
						<label>Confirm Password</label>
					</div>

					{{-- DOB --}}
					<div class="form-floating mb-4 d-flex">
						<input type="text" class="datepicker_input form-control border-2" id="datepicker1" placeholder="DD/MM/YYYY">
						<label for="datepicker1">DOB</label>
					</div>
					
					{{-- Age checkbo --}}
					<div class="form-check age-check">
						<input class="form-check-input" type="checkbox" value="" id="agecheck">
						<label class="form-check-label" for="agecheck">
						  16 Under 16 years old?
						</label>
					</div>
					
					{{-- Parents details --}}
					<div id="parent-details-bl">
						<h3>Please add parents details</h3>
						
						{{-- First Name --}}
						<div class="form-floating mb-3">
							<input type="text" class="form-control" placeholder="name@example.com">
							<label>First Name</label>
						</div>
						
						{{-- Surname --}}
						<div class="form-floating mb-3">
							<input type="text" class="form-control" placeholder="name@example.com">
							<label>Surname</label>
						</div>
						
						<div class="form-floating mb-3">
							<input type="email" class="form-control" placeholder="name@example.com">
							<label>Email</label>
						</div>
						
					</div>

					{{-- Terms Check --}}
					<div class="form-check age-check">
						<input class="form-check-input" id="condition-1" type="checkbox" value="">
						<label for="condition-1" class="form-check-label">
							I have read and understand The Club Terms of Use.
						</label>
					</div>

					{{-- Terms Check --}}
					<div class="form-check age-check">
						<input class="form-check-input" id="condition-2" type="checkbox" value="">
						<label for="condition-2" class="form-check-label">
							I have read and understand The Club Privacy Policies.
						</label>
					</div>
					
					

					<div class="d-flex justify-content-center">
						<input type="submit" class="submit-btn">
					</div>
				</form>
			</div>
		</div>
	</div>

</section>


@endsection
