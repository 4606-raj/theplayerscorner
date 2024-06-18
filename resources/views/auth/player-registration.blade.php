@extends('layouts.main')

@section('content')

@livewireStyles

<section class="container player-res-sec">
	<div class="col-lg-10 col-md-12 col-sm-12 col-12">
        
		{{-- Player registration Section --}}
		
				{{-- <p class="pl-res-des"><span> New Season for 2023-24 is here!</span> <br> <br>

                    To register your interest in representing Southall Athletic Football Club for the upcoming tournaments and the new season, you are required to complete and submit the form below.
                    
                    <br>For NEW players, looking to play for Southall Athletic for the very first time We will also need the following:
				</p> --}}
				
				{{-- <form class="form-body col-sm-12 col-lg-12 col-md-12 col-12 pt-3" name="player-register"> --}}
					
					<div class="align-items-start player-multi-form">
							<div class="sticky-sidebar">
								<div class="nav nav-pills col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<button class="nav-link active" id="v-pills-step-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-1" type="button" role="tab" aria-controls="v-pills-step-1" aria-selected="true"><div class="counter-num">1</div>Basic details</button>
									<button class="nav-link" id="v-pills-step-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-2" type="button" role="tab" aria-controls="v-pills-step-2" aria-selected="false"><div class="counter-num">2</div>player details</button>
									<button class="nav-link" id="v-pills-step-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-3" type="button" role="tab" aria-controls="v-pills-step-3" aria-selected="false"><div class="counter-num">3</div>parent/guardian <br> (main contact) (18+)</button>
									<button class="nav-link" id="v-pills-step-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-4" type="button" role="tab" aria-controls="v-pills-step-4" aria-selected="false"><div class="counter-num">4</div>parent/guardian <br> (main contact) (18+)</button>
									<button class="nav-link" id="v-pills-step-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-5" type="button" role="tab" aria-controls="v-pills-step-5" aria-selected="false"><div class="counter-num">5</div>medical information</button>
									<button class="nav-link" id="v-pills-step-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-6" type="button" role="tab" aria-controls="v-pills-step-6" aria-selected="false"><div class="counter-num">6</div>matchday and training kits</button>
									<button class="nav-link" id="v-pills-step-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-7" type="button" role="tab" aria-controls="v-pills-step-7" aria-selected="false"><div class="counter-num">7</div>additional information</button>
									<button class="nav-link" id="v-pills-step-8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-8" type="button" role="tab" aria-controls="v-pills-step-8" aria-selected="false"><div class="counter-num">8</div>consent</button>
									<button class="nav-link" id="v-pills-step-9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-9" type="button" role="tab" aria-controls="v-pills-step-9" aria-selected="false"><div class="counter-num">9</div>equality & diversity monitoring</button>
								</div>
							</div>
							
						<div class="tab-content col-lg-8" id="v-pills-tabContent">

							<livewire:basic-details />

							{{-- STEP 2 --}}
							<div class="tab-pane fade" id="v-pills-step-2" role="tabpanel" aria-labelledby="v-pills-step-2-tab">

								{{-- Age Category for 2023-24 --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Age Category for 2023-24 <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<div class="form-floating ">
											<select name="" id="" required>
												<option value="" selected>Select</option>
												<option value="">Boys U11 [ DOB between 01/09/2012 - 31/08/2014 ]</option>
												<option value="">Boys U13 [ DOB between 01/09/2010 - 31/08/2012 ]</option>
												<option value="">Squad Girls' Football Programme	[ 12 - 14 year olds]</option>
											</select>
										</div>
									</div>
								</div>
								
								{{-- First Name --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">First Name <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="first_name" type="text" label="First Name" />
									</div>
								</div>
								
								{{-- Surname --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Surname <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="sur_name" type="text" label="Surname" />
									</div>
								</div>
								
								{{-- Date of birth --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Date of Birth <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<input type="text" class="datepicker_input form-control datepicker" name="dob" placeholder="DD/MM/YYYY">
									</div>
								</div>
								
								{{-- What school does the player attend?* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 col-md-12 col-sm-12 col-12 left-bl px-0">
										<p class="field-question">What school does the player attend? <span class="compulsory-mark">*</span></p>
										
										<textarea name="" cols="30" rows="10" placeholder="Please write here..."></textarea>	
									</div>
								</div>
								
								{{-- School / Group Year the student will be in on 10th September 2023?* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-12 col-sm-12 col-12 left-bl">
										<p class="field-question">School / Group Year the student will be in on 10th September 2023? <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-12 col-sm-12 col-12 mt-2 mt-lg-0">
										<div class="form-floating ">
											<select name="" id="" required>
												<option value="" selected>Select</option>
												<option value="">Year 5</option>
												<option value="">Year 6</option>
												<option value="">Year 7</option>
												<option value="">Year 8</option>
												<option value="">Year 9</option>
												<option value="">Year 10</option>
												<option value="">Year 11</option>
											</select>
										</div>
									</div>
								</div>
								
								{{-- House/Flat Number and Street* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">House/Flat Number and Street <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<div class="form-floating ">
											<x-text-field name="address" type="address" label="House/Flat Number and Street" />
										</div>
									</div>
								</div>

								{{-- Postcode* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Postcode <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<div class="form-floating ">
											<x-text-field name="Postcode" type="text" label="Postcode" />
										</div>
									</div>
								</div>
								
								{{-- Was the player registered to another club for the 2022-23 season?* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-12 col-12 left-bl">
										<p class="field-question">Was the player registered to another club for the 2022-23 season? <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-12 col-12 mt-2 mt-md-0">
										<div class="form-floating ">
											<select name="" id="" required>
												<option value="" selected>Select</option>
												<option value="">YES</option>
												<option value="">No</option>
											</select>
										</div>
									</div>
								</div>
								
								{{-- If you answered YES to the previous question, then please state which club. Otherwise, please type N/A* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">If you answered YES to the previous question, then please state which club. Otherwise, please type N/A <span class="compulsory-mark">*</span></p>
										
										<x-text-field name="which_club" type="text" label="Which Club?"/>
									</div>
								</div>
								
								{{-- Preferred Playing Position* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-12 col-12 left-bl">
										<p class="field-question">Preferred Playing Position <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-12 col-12 mt-2 mt-md-0">
										<div class="form-floating ">
											<select name="" id="" required>
												<option value="" selected>Select</option>
												<option value="">Goalkeeper</option>
												<option value="">Defender</option>
												<option value="">Midfielder</option>
												<option value="">Forward</option>
											</select>
										</div>
									</div>
								</div>

								{{-- Does the player have a FA Number (FAN)? If so, please share the FAN. --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">Does the player have a FA Number (FAN)? If so, please share the FAN.</p>
										<p class="question-info">Please note that this makes it easier for the club to locate the player on the FA’s Whole Game System (WGS), which makes it quicker to register the player.</p>
										
										
										<x-text-field name="fa_number" type="text" label="FA Number"/>
									</div>
								</div>
							</div>

							{{-- STEP 3 --}}
							<div class="tab-pane fade" id="v-pills-step-3" role="tabpanel" aria-labelledby="v-pills-step-3-tab">
								<p class="pl-res-des">Please note that this person needs to be an adult, and will be contacted in the event of an emergency. </p>

								{{-- First Name --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">First Name <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="first_name" type="text" label="First Name" />
									</div>
								</div>
								
								{{-- Surname --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Surname <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="sur_name" type="text" label="Surname" />
									</div>
								</div>
								
								{{-- Date of birth --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Date of Birth <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<input type="text" class="datepicker_input form-control datepicker" id="" name="dob" placeholder="DD/MM/YYYY">
									</div>
								</div>

								{{-- Relationship to the player* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Relationship to the player <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<div class="form-floating ">
											<select name="" id="" onchange="showOtherTextarea(this)" required >
													<option value="" selected>Select</option>
													<option value="">Father</option>
													<option value="">Mother</option>
													<option value="">Grandparent</option>
													<option value="other">Other</option>
												</select>
												<textarea placeholder="please state" name="" class="otherTextarea"></textarea>
										</div>
									</div>
								</div>

								{{-- Home Address (including postcode) [   ] Same as player* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl px-0">
										<p class="field-question mb-2">Home Address (including postcode) [show_Player_Postcode] Same as player <span class="compulsory-mark">*</span></p>

										<x-text-field name="address" type="address" label="Please write here..." />
									</div>
									
								</div>

								{{-- Telephones / Contacts --}}
								<div class="field-floating container mb-3">
									{{-- Home Tel --}}
									<div class="col-lg-6 col-md-6 col-sm-6 col-12 pe-sm-2">
										<div class="col-lg-12 left-bl mb-2">
											<p class="field-question">Home Tel </p>
										</div>
										
										<div class="right-bl col-lg-12 px-0">
											<div class="form-floating ">
												<x-text-field name="home_tel" type="tel" label="Home Tel..." />
											</div>
										</div>
									</div>

									{{-- Mobile Tel* --}}
									<div class="col-lg-6 col-md-6 col-sm-6 col-12 ps-sm-2 mt-3 mt-sm-0">
										<div class="col-lg-12 left-bl mb-2">
											<p class="field-question">Mobile Tel <span class="compulsory-mark">*</span></p>
										</div>
										
										<div class="right-bl col-lg-12 px-0">
											<div class="form-floating ">
												<x-text-field name="phone_tel" type="tel" label="Phone..." />
											</div>
										</div>
									</div>
								</div>
								
								{{-- Email Address* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Email Address <span class="compulsory-mark">*</span></p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="parent_email" type="email" label="Email..." />
									</div>
								</div>

								{{-- Occupation and Industry* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 col-12 left-bl">
										<p class="field-question mb-2">Occupation and Industry <span class="compulsory-mark">*</span></p>

										<x-text-field name="occupation" type="text" label="Please write here..." />
									</div>
								</div>

								{{-- FA Number (FAN) for under age 16 --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">For players under the age of 16, the FA require parental online consent for registrations. If the player has previously been at another club, then the likelihood is that the parent(s) will have a FA Number (FAN). If you know what this is, then please share it with us.</p>
										
										<x-text-field name="fa_number" type="text" label="FA Number"/>
									</div>
								</div>

							</div>

							{{-- STEP 4 --}}
							<div class="tab-pane fade" id="v-pills-step-4" role="tabpanel" aria-labelledby="v-pills-step-4-tab">
								
								<p class="pl-res-des">Please note that this person needs to be an adult, and will be contacted in the event of an emergency if the main contact is unreachable. </p>

								{{-- First Name --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">First Name</p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="first_name" type="text" label="First Name" />
									</div>
								</div>
								
								{{-- Surname --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Surname</p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="sur_name" type="text" label="Surname" />
									</div>
								</div>
								
								{{-- Date of birth --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Date of Birth</p>
									</div>
									
									<div class="right-bl col-lg-7 col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<input type="text" class="datepicker_input form-control datepicker" name="dob" placeholder="DD/MM/YYYY">
									</div>
								</div>

								{{-- Relationship to the player* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Relationship to the player</p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<div class="form-floating ">
											<select name="" id="" onchange="showOtherTextarea(this)" required >
												<option value="" selected>Select</option>
												<option value="">Father</option>
												<option value="">Mother</option>
												<option value="">Grandparent</option>
												<option value="other">Other</option>
											</select>
											<textarea placeholder="please state" name="" class="otherTextarea"></textarea>
										</div>
									</div>
								</div>

								{{-- Home Address (including postcode) [   ] Same as player* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl px-0">
										<p class="field-question mb-2">Home Address (including postcode) [show_Player_Postcode] Same as player </p>

										<x-text-field name="address" type="address" label="Please write here..." />
									</div>
									
								</div>

								{{-- Telephones / Contacts --}}
								<div class="field-floating container mb-3">
									{{-- Home Tel --}}
									<div class="col-lg-6 col-md-6 col-sm-6 col-12 pe-sm-2">
										<div class="col-lg-12 left-bl mb-2">
											<p class="field-question">Home Tel </p>
										</div>
										
										<div class="right-bl col-lg-12 px-0">
											<div class="form-floating ">
												<x-text-field name="home_tel" type="tel" label="Home Tel..." />
											</div>
										</div>
									</div>

									{{-- Mobile Tel* --}}
									<div class="col-lg-6 col-md-6 col-sm-6 col-12 ps-sm-2 mt-3 mt-sm-0">
										<div class="col-lg-12 left-bl mb-2">
											<p class="field-question">Mobile Tel</p>
										</div>
										
										<div class="right-bl col-lg-12 px-0">
											<div class="form-floating ">
												<x-text-field name="phone_tel" type="tel" label="Phone..." />
											</div>
										</div>
									</div>
								</div>
								
								{{-- Email Address* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl">
										<p class="field-question">Email Address</p>
									</div>
									
									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<x-text-field name="parent_email" type="email" label="Email..." />
									</div>
								</div>

								{{-- Occupation and Industry* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 col-12 left-bl">
										<p class="field-question mb-2">Occupation and Industry </p>

										<x-text-field name="occupation" type="text" label="Please write here..." />
									</div>
								</div>

								{{-- FA Number (FAN) for under age 16 --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">For players under the age of 16, the FA require parental online consent for registrations. If the player has previously been at another club, then the likelihood is that the parent(s) will have a FA Number (FAN). If you know what this is, then please share it with us.</p>
										
										<x-text-field name="fa_number" type="text" label="FA Number"/>
									</div>
								</div>

							</div>

							{{-- STEP 5 --}}
							<div class="tab-pane fade" id="v-pills-step-5" role="tabpanel" aria-labelledby="v-pills-step-5-tab">
								
								{{-- Medical Information --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">What medical condition(s) or other information should we know about your player’s health, if none then please state NONE (Please tell us even if you have told us previously)? <span class="compulsory-mark">*</span></p>
										
										<textarea name="" cols="30" rows="10" class="med-textarea" placeholder="Please write here..."></textarea>	
									</div>
								</div>

							</div>

							{{-- STEP 6 --}}
							<div class="tab-pane fade" id="v-pills-step-6" role="tabpanel" aria-labelledby="v-pills-step-6-tab">
								
								{{-- Player Initials --}}
								<p class="pl-res-hdr">Player Initials</p>

								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">Please state the player's TWO-CHARACTER initials you would like printed on the training kit. <span class="pl-highlight-txt">e.g. Joe Bloggs (JB)</span>.</p>
										
										<x-text-field name="player_initials" type="text" label="e.g. Joe Bloggs (JB)" />
									</div>
								</div>

								{{-- Player kit size--}}
								<p class="pl-res-hdr">Kit Size</p>

								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">Please select the preferred size for the player's match-day and training kits.
											A size guide for Nike has been provided to select your correct size for the 2023-24 season. <span class="compulsory-mark">*</span></p>
										
											{{-- Kit size alert --}}
											<p class="note-red-alert"><b>Note: </b><br>
											Once orders have been placed, they cannot be changed, as all kits are personalised. if a kit size needs to be changed once the order has been placed, then the replacement kit would need to be paid for by the player.</p>

											{{-- Player kit size confirmation --}}
											<label for="kit_size" class="mb-3 d-flex">
												<div class="me-2">
													<input type="checkbox" class="form-check-input" id="kit_size">
												</div>
												Please check this box to confirm that you accept the conditions stated above <span class="compulsory-mark">*</span>
											</label>
										
											<div class="field-floating">

												{{-- Nike Jersey* --}}
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-wrap mb-3">
													<div class="col-lg-4 col-md-4 col-sm-12 col-12 left-bl d-flex align-items-center">
														<p class="field-question">Nike Jersey <span class="compulsory-mark">*</span></p>
													</div>
													
													<div class="right-bl col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mt-md-0 px-0">
														<div class="form-floating ">
															<select name="" id="" required>
																<option value="" selected>Select</option>
																<option value="">XS Youth (UK Chest Size: 25.5 - 26in)</option>
																<option value="">S Youth (UK Chest Size: 26 - 27in)</option>
															</select>
														</div>
													</div>
												</div>
												
												{{-- Nike Shorts* --}}
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-wrap mb-3">
													<div class="col-lg-4 col-md-4 col-sm-12 col-12 left-bl d-flex align-items-center">
														<p class="field-question">Nike Shorts <span class="compulsory-mark">*</span></p>
													</div>
													
													<div class="right-bl col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mt-md-0 px-0">
														<div class="form-floating ">
															<select name="" id="" required>
																<option value="" selected>Select</option>
																<option value="">Youth (UK Waist Size: 23.5 - 24in)</option>
																<option value="">S Youth (UK Waist Size: 24 - 25.5in)</option>
															</select>
														</div>
													</div>
												</div>

												{{-- Nike Drill Top* --}}
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-wrap mb-3">
													<div class="col-lg-4 col-md-4 col-sm-12 col-12 left-bl d-flex align-items-center">
														<p class="field-question">Nike Drill Top <span class="compulsory-mark">*</span></p>
													</div>
													
													<div class="right-bl col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mt-md-0 px-0">
														<div class="form-floating ">
															<select name="" id="" required>
																<option value="" selected>Select</option>
																<option value="">XS Youth (UK Chest Size: 25.5 - 26in)</option>
																<option value="">S Youth (UK Chest Size: 26 - 27in)</option>
															</select>
														</div>
													</div>
												</div>

												{{-- Nike Pants* --}}
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-wrap mb-3">
													<div class="col-lg-4 col-md-4 col-sm-12 col-12 left-bl d-flex align-items-center">
														<p class="field-question">Nike Pants <span class="compulsory-mark">*</span></p>
													</div>
													
													<div class="right-bl col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mt-md-0 px-0">
														<div class="form-floating ">
															<select name="" id="" required>
																<option value="" selected>Select</option>
																<option value="">XS Youth (UK Waist Size: 23.5 - 24in)</option>
																<option value="">S Youth (UK Waist Size: 24 - 25.5in)</option>
															</select>
														</div>
													</div>
												</div>

												{{-- Nike Socks* --}}
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-wrap">
													<div class="col-lg-4 col-md-4 col-sm-12 col-12 left-bl d-flex align-items-center">
														<p class="field-question">Nike Socks <span class="compulsory-mark">*</span></p>
													</div>
													
													<div class="right-bl col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mt-md-0 px-0">
														<div class="form-floating ">
															<select name="" id="" required>
																<option value="" selected>Select</option>
																<option value="">S (UK Size: 2 - 5)</option>
																<option value="">M (UK Size: 5.5 - 7.5)</option>
															</select>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>


							</div>

							{{-- STEP 7 --}}
							<div class="tab-pane fade" id="v-pills-step-7" role="tabpanel" aria-labelledby="v-pills-step-7-tab">
								
								{{-- ADDITIONAL INFORMATION --}}
								{{-- Player is 14 years or over --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl px-0">
										<p class="field-question mb-2">If the player is 14 years or over, would they be interested in learning more about completing the FA Referee Course? <span class="compulsory-mark">*</span></p>

										<select name="" id="" required>
											<option value="" selected>Select</option>
											<option value="">YES</option>
											<option value="">NO</option>
											<option value="">MAYBE</option>
										</select>
									</div>
								</div>

								{{-- Player is 16 years or over --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl px-0">
										<p class="field-question mb-2">If the player is 16 years or over, would they be interested in learning more about completing the FA Coaching Courses? <span class="compulsory-mark">*</span></p>

										<select name="" id="" required>
											<option value="" selected>Select</option>
											<option value="">YES</option>
											<option value="">NO</option>
											<option value="">MAYBE</option>
										</select>
									</div>
								</div>
							</div>

							{{-- STEP 8 --}}
							<div class="tab-pane fade" id="v-pills-step-8" role="tabpanel" aria-labelledby="v-pills-step-8-tab">
											
								{{-- Consent 1 --}}
								<label for="consent-1" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-1" required>
									</div>
									<p><b>1. </b> &nbsp;I hereby give consent for my child to participate in football related activities provided by representatives of  Southall Athletic Football Club. This may include (but is not limited to) 1-2-1 and small group coaching sessions, competitive matches, tournaments, leagues etc. <span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 2 --}}
								<label for="consent-2" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-2" required>
									</div>
									<p><b>2. </b> &nbsp;I have read and understand the FA's RESPECT Code of Conduct & other policies related to Child Safeguarding and Protection. I understand that these policies must be adhered to by both the player and parent/guardian. <span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 3 --}}
								<label for="consent-3" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-3" required>
									</div>
									<p><b>3. </b> &nbsp;I consent to my child’s photograph/videos to be used to publicise the club. I understand that in accordance with FA recommendations that at no time will my child be named. These photographs/videos may be posted on the  Southall Athletic Football Club website and/or social media platforms or any other associated literature, websites, handbooks, or anything  Southall Athletic Football Club deems appropriate. Please be advised that we use various technological equipment and software to record and analyse performance. If you would like access to this then we would require your consent here. <span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 4 --}}
								<label for="consent-4" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-4" required>
									</div>
									<p><b>4. </b> &nbsp;I consent to my child (U13 and above only) travelling to and from training sessions/matches/tournaments etc. on their own and it is not the responsibility of  Southall Athletic Football Club to ensure their safe journey. <span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 5 --}}
								<label for="consent-5" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-5" required>
									</div>
									<p><b>5. </b> &nbsp;I hereby agree to pay all fees, as determined by  Southall Athletic Football Club and I understand that if payment is not made in full, within an acceptable period of time, then  Southall Athletic Football Club reserves the right to withhold my child from taking part in training sessions/matches/tournaments etc. This may also include revoking access to material/software that may have been provided.<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 6 --}}
								<label for="consent-6" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-6" required>
									</div>
									<p><b>6. </b> &nbsp;I understand that the signing-on fee paid to  Southall Athletic Football Club  at the start of the season is NON-REFUNDABLE, as this includes payment towards kits, league registration and admin fees.<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 7 --}}
								<label for="consent-7" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-7" required>
									</div>
									<p><b>7. </b> &nbsp;Any football equipment provided will remain the property of  Southall Athletic Football Club and as parent/guardian of the player, I hereby agree to return all football equipment when the club asks for it to be returned or when the player leaves  Southall Athletic Football Club.<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 8 --}}
								<label for="consent-8" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-8" required>
									</div>
									<p><b>8. </b> &nbsp;I hereby give my express permission for our (player and parent/guardian(s)) details to be held and used by  Southall Athletic Football Club to contact me only in relation to events connected with my child, the team, the club, the league(s) and The FA.<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 9 --}}
								<label for="consent-9" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-9" required>
									</div>
									<p><b>9. </b> &nbsp;Southall Athletic Football Club may use any of our (player and parent/guardian(s)) information provided for marketing purposes, but I understand it will not be sold to any third parties for this purpose.<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 10 --}}
								<label for="consent-10" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-10" required>
									</div>
									<p><b>10. </b> &nbsp;I accept that no liability will rest with  Southall Athletic Football Club or its representatives whilst the player is engaged in football related activities. This may include (but is not limited to) 1-2-1 and small group coaching sessions, competitive matches, tournaments, leagues etc.<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 11 --}}
								<label for="consent-11" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-11" required>
									</div>
									<p><b>11. </b> &nbsp;I agree that at no point will the player nor the parent/guardian(s) resort to making any personal remarks aimed at  Southall Athletic Football Club or any of its representatives either on social media or by text/email.  Southall Athletic Football Club will reserve the right to cancel the player's registration should this become an issue. If any fees have been paid for in advance, then this will be forfeited.*<span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 12 --}}
								<label for="consent-12" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-12" required>
									</div>
									<p><b>12. </b> &nbsp;It is your responsibility as a parent/guardian to ensure your child is symptom free before they attend any football related activities provided by  Southall Athletic Football Club and that you will follow the FA guidelines <a href="https://www.thefa.com/-/media/thefacom" target="_blank">https://www.thefa.com/-/media/thefacom-</a><span class="compulsory-mark">*</span></p>
								</label>

								{{-- Consent 13 --}}
								<label for="consent-13" class="player-conset-checkbox mb-3">
									<div>
										<input type="checkbox" class="form-check-input" id="consent-13" required>
									</div>
									<p><b>13. </b> &nbsp;I, the parent/guardian can confirm on behalf of the player that by completing and submitting this registration form we accept the terms and conditions of Southall Athletic Football Club.<span class="compulsory-mark">*</span></p>
								</label>

							</div>

							{{-- STEP 9 --}}
							<div class="tab-pane fade" id="v-pills-step-9" role="tabpanel" aria-labelledby="v-pills-step-9-tab">
								
								<p class="pl-res-des text-start">Southall Athletic Football Club wants to meet the aims and commitments set out in its equality policy. This includes not discriminating under the Equality Act 2010, and building an accurate picture of the make-up of the community football club in encouraging equality and diversity.
									The football club needs your help and co-operation to enable it to do this, but filling in this form is voluntary. The information provided will be kept confidential and will be used for monitoring purposes.
									If you have any questions about the form contact Southall Athletic F.C. via email at <a href="mailto:info@southallathleticfc.com">info@southallathleticfc.com</a>
								</p>

								{{-- Gender* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl px-0">
										<p class="field-question">Gender <span class="compulsory-mark">*</span></p>
									</div>

									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<select name="" id="" required>
											<option value="" selected>Select</option>
											<option value="">Male</option>
											<option value="">Female</option>
											<option value="">Other</option>
											<option value="">Prefer not to say</option>
										</select>
									</div>
								</div>
								
								{{-- What is your religion or belief?* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-5 col-md-5 col-sm-4 col-12 left-bl px-0">
										<p class="field-question">What is your religion or belief? <span class="compulsory-mark">*</span></p>
									</div>

									<div class="right-bl col-lg-7 col-md-7 col-sm-8 col-12 mt-2 mt-sm-0">
										<select name="" id="" required>
											<option value="" selected>Select</option>
											<option value="">Atheist</option>
											<option value="">Buddhist</option>
										</select>
									</div>
								</div>

								{{-- What is your ethnicity?* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl px-0">
										<p class="field-question mb-2">What is your ethnicity? <span class="compulsory-mark">*</span></p>
										<p class="question-info mb-2">Ethnic origin is not about nationality, place of birth or citizenship. It is about the group to which you perceive you belong. Please tick the appropriate box.</p>

										<select name="" id="" required>
											<option value="" selected>Select</option>
											<option value="">Asian: Bangladeshi</option>
											<option value="">Asian: Chinese</option>
											<option value="">Mixed or Multiple ethnic groups: White and Black Caribbean</option>
										</select>
									</div>
								</div>

								{{-- Does the player consider themselves to have a disability or health condition?* --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl px-0">
										<p class="field-question mb-2">Does the player consider themselves to have a disability or health condition? <span class="compulsory-mark">*</span></p>

										<select name="" id="" required>
											<option value="" selected>Select</option>
											<option value="">YES</option>
											<option value="">NO</option>
											<option value="">Prefer not to say</option>
										</select>
									</div>
								</div>

								{{-- Follow up question --}}
								<div class="field-floating mb-3">
									<div class="col-lg-12 left-bl">
										<p class="field-question mb-2">If you have answered YES to the question above, then what is the effect or impact of their disability or health condition? Please write in here: <span class="compulsory-mark">*</span></p>
										
										<textarea name="" cols="30" rows="10" class="med-textarea" placeholder="Please write here..."></textarea>	
									</div>
								</div>

							</div>
						</div>
					  </div>

					{{-- =======================================================Base Section END========================================================================= --}}
					
					
					{{-- <x-text-field name="last_name" label="Surname" /> --}}


					{{-- <div class="d-flex justify-content-center float-end">
						<input type="submit" class="submit-btn" value="Next">
					</div>
					<div class="d-flex justify-content-center float-end">
						<input type="button" onclick="history.back();" value="Back" class="player-prev-btn">
					</div> --}}
				{{-- </form> --}}
	</div>

</section>


@livewireScripts
<script>
    Livewire.on('basicDetailsSaved', () => {
		// $('.tab-pane a[href="#v-pills-step-1"]').tab('hide');
		$('.tab-pane a:first').tab('hide') 
		// $('.tab-pane a[href="#v-pills-step-2"]').tab('show');

    })
</script>

@endsection
