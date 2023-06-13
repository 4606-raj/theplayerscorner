@extends('layouts.main')

@section('content')


<section class="container player-res-sec">
	<div class="col-lg-8">
        
			{{-- Player registration Section --}}
				
				<p class="pl-res-des"><span> New Season for 2023-24 is here!</span> <br> <br>

                    To register your interest in representing Southall Athletic Football Club for the upcoming tournaments and the new season, you are required to complete and submit the form below.
                    
                    <br>For NEW players, looking to play for Southall Athletic for the very first time We will also need the following:
				</p>
				
				<form class="form-body pt-3" name="player-register">

					{{-- Upload Photo --}}
					<div class="field-floating mb-3">
						<div class="col-lg-7 left-bl">
							<p class="field-question">
								1. Photos must be a Passport style photograph.
							</p>
							<div class="question-des">
								<span>(Photo Guidelines) The photo must:</span> 
								<ol type="1">
									<li>Include your head and shoulders.</li>
									<li>Be a well lit, forward facing shot.</li>
									<li>Include only yourself, not a group.</li>
									<li>Must be a recent photo.</li>
								</ol>
							</div>
						</div>

						<div class="right-bl col-lg-5">
								<input type="file" class="form-control" name="image" placeholder="Image" accept="image/*">
								<label>Image</label>
						</div>
					</div>
					
					{{-- Proof ID --}}
					<div class="field-floating mb-3">
						<div class="col-lg-7 left-bl">
							<p class="field-question">2. Proof of ID (Copy of Passport page/Birth Certificate).</p>
							
							<div class="question-des">
								<p>Please be advised that NO player is permitted by the FA and the respective league(s) to participate in ANY league/cup matches until the player has been <u>successfully registered</u>, and this has been <u>communicated by the league(s)</u>. 
									<br><br><span>FEES FOR THE 2023-24 SEASON ARE YET TO BE CONFIRMED</span>
								</p>
							</div>
						</div>
						
						<div class="right-bl col-lg-5">
								<input type="file" class="form-control" name="doc" placeholder="ID Proof">
								<label>Image</label>
						</div>
					</div>
					
					{{-- How did you hear about us?* --}}
					<div class="field-floating mb-3">
						<div class="col-lg-7 left-bl">
							<p class="field-question">How did you hear about us? <span class="compulsory-mark">*</span></p>
						</div>
						
						<div class="right-bl col-lg-5">
							<div class="form-floating mb-3">
								<select name="" id="" onchange="showTextarea(this.value)" required>
									<option value="" selected>Select</option>
									<option value="">Recommended by a current player</option>
									<option value="">Social Media</option>
									<option value="">Blog / Newsletter / Publication</option>
									<option value="other">Other <textarea placeholder="please state" name="" id="otherTextarea"></textarea></option>
								</select>
							</div>
						</div>
					</div>
					
					{{-- Another Question --}}
					<div class="field-floating mb-3">
						<div class="col-lg-12 left-bl px-0">
							<p class="field-question">If you were recommended by one of our current players, could you please let us know who?</p>

							<textarea name="" cols="30" rows="10" placeholder="Please write here..."></textarea>
						</div>
					</div>

					{{-- Surname --}}
					<div class="form-floating mb-3">
						<input type="text" class="form-control" name="last_name" placeholder="name@example.com">
						<label>Surname</label>
					</div>

					{{-- User Email --}}
					<div class="form-floating mb-3">
						<input type="email" class="form-control" name="email" placeholder="name@example.com">
						<label >Email address</label>
					</div>

					{{-- Password --}}
					<div class="form-floating mb-3">
						<input type="password" class="form-control" name="password" placeholder="password">
						<label>Password</label>
					</div>

					{{-- Confirm Password --}}
					<div class="form-floating mb-3">
						<input type="password" class="form-control" name="password_confirmation" placeholder="password">
						<label>Confirm Password</label>
					</div>

					{{-- DOB --}}
					<div class="form-floating mb-4 d-flex">
						<input type="text" class="datepicker_input form-control border-2" id="datepicker1" name="dob" placeholder="DD/MM/YYYY">
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

</section>


@endsection
