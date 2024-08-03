@extends('layouts.main')

@section('content')


<section class="container auth-sec">
	<div class="auth-block">

		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
			  <button class="nav-link" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
			</li>
			<li class="nav-item" role="presentation">
			  <button class="nav-link active" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Sign Up</button>
			</li>
		  </ul>
		  <div class="tab-content" id="myTabContent">

			@if($errors->any())
            	{!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
        	@endif
			
			{{-- Login Section --}}
			<div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
				
				<p class="auth-des">Welcome to the new home of The Players Corner Our new online hub to help players, parents, and supporters manage and navigate through their season.
					<br>
					<span>Login to your ‘My Players Hub’ Account by entering your username and password below.</span> 
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
					
					<p class="forgot-pswd">Forgot your password? <a href="{{ route('forgot-password') }}">Click here</a> to reset your password.</p>
					
					<div class="d-flex justify-content-center mt-4">
						<a href="#" class="btn-cover">
							<input type="submit" class="submit-btn" value="Continue">
						</a>
					</div>
				</form>
			</div>
			
			{{-- Register Section --}}
			<div class="tab-pane active show fade" id="register" role="tabpanel" aria-labelledby="register-tab">
				
				<p class="auth-des mb-2">WHO ARE YOU?</p>

				<div class="pl-btns-con">
					<a href="{{ route('register.role.create', 'player') }}" class="pl-select-btn"><button>I'm a Player </button></a>
					<a href="{{ route('register.role.create', 'scout') }}" class="pl-select-btn"><button>I'm Scout</button></a>
					<a href="{{ route('register.role.create', 'footbal-fan') }}" class="pl-select-btn"><button>I'm a Football fan </button></a>
				</div>
				{{-- </form> --}}
			</div>
		</div>
	</div>

</section>


@endsection
