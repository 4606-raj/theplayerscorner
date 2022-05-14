<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

		<!-- Title -->
		<title>Dayone - Multipurpose Admin & Dashboard Template</title>

        <!--Favicon -->
		<link rel="icon" href="{{ asset('assets/admin/images/brand/favicon.ico') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

		<!-- Style css -->
		<link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{ asset('assets/admin/plugins/animated/animated.css') }}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{ asset('assets/admin/plugins/icons/icons.css') }}" rel="stylesheet" />

	</head>

	<body>

        
		<div class="page login-bg">
			<div class="page-single">
				<div class="container">
					<div class="row">

						@if($errors->any())
							{!! implode('', $errors->all('<div>:message</div>')) !!}
						@endif
						
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-7 col-lg-5">
									<div class="card">
										<div class="p-4 pt-6 text-center">
											<h1 class="mb-2">Login</h1>
											<p class="text-muted">Sign In to your account</p>
										</div>
										<form class="card-body pt-3" id="login" name="login" action="{{ route('login') }}" method="POST">
											@csrf
											<div class="form-group">
												<label class="form-label">Mail or Username</label>
												<input class="form-control" name="email" placeholder="Email" type="email">
											</div>
											<div class="form-group">
												<label class="form-label">Password</label>
												<input class="form-control" name="password" placeholder="password" type="password">
											</div>
											<div class="form-group">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
													<span class="custom-control-label">Remeber me</span>
												</label>
											</div>
											<div class="submit">
												<input type="submit" class="btn btn-primary btn-block" >
											</div>
											<div class="text-center mt-3">
												<p class="mb-2"><a href="#">Forgot Password</a></p>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
