<div>
    
    <form wire:submit.prevent="save" class="form-body col-sm-12 col-lg-12 col-md-12 col-12 pt-3" name="player-register">
							
        {{-- STEP 1 --}}
        <div class="tab-pane fade show active" id="v-pills-step-1" role="tabpanel" aria-labelledby="v-pills-step-1-tab">

            @if($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif

                <h4 class="pane-hdr">Personal Details</h4>
                {{-- Upload Photo --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-6 col-md-7 col-sm-12 order-2 order-md-1 left-bl">
                        <p class="field-question">
                            1. Photo must be a Passport style photograph.
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

                    <div class="right-bl col-lg-6 col-md-5 col-sm-12 order-md-2 mb-3 mb-md-0 ps-lg-3">
                        <input type="file" class="form-control" name="photo" placeholder="Image" wire:model="photo">
                        <label>Image</label>
                    </div>
                    {{-- @error('photo') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
                
                {{-- First Name --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12  left-bl">
                        <p class="field-question">First Name <span class="compulsory-mark">*</span></p>
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <x-text-field name="first_name" type="text" label="First Name" />
                    </div>
                </div>

                {{-- Last Name --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 left-bl">
                        <p class="field-question">Last Name <span class="compulsory-mark">*</span></p>

                        {{-- <p class="field-question">2. Proof of ID (Copy of Passport page/Birth Certificate).</p> --}}
                        
                        {{-- <div class="question-des">
                            <p>Please be advised that NO player is permitted by the FA and the respective league(s) to participate in ANY league/cup matches until the player has been <u>successfully registered</u>, and this has been <u>communicated by the league(s)</u>. 
                                <br><br><span>FEES FOR THE 2023-24 SEASON ARE YET TO BE CONFIRMED</span>
                            </p>
                        </div> --}}    
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <x-text-field name="last_name" type="text" label="Last Name" />
                    </div>
                </div>
                
                {{-- Select Date of birth --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12 left-bl">
                        <p class="field-question">Select Your Date of Birth <span class="compulsory-mark">*</span></p>
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 col-12 mt-2 mt-md-0">
                        <div class="row">
                            <!-- Day Selector -->
                            <div class="col-4">
                                <select class="form-select" id="day" required>
                                    <option value="" selected disabled>Day</option>
                                    <!-- Populate days 1 to 31 -->
                                    <script>
                                        for (let i = 1; i <= 31; i++) {
                                            document.write(`<option value="${i}">${i}</option>`);
                                        }
                                    </script>
                                </select>
                            </div>
                            <!-- Month Selector -->
                            <div class="col-4">
                                <select class="form-select" id="month" required>
                                    <option value="" selected disabled>Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <!-- Year Selector -->
                            <div class="col-4">
                                <select class="form-select" id="year" required>
                                    <option value="" selected disabled>Year</option>
                                    <!-- Populate years from 1900 to current year -->
                                    <script>
                                        const selectYear = new Date().getFullYear();
                                        for (let i = selectYear; i >= 1900; i--) {
                                            document.write(`<option value="${i}">${i}</option>`);
                                        }
                                    </script>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Gender / Sex --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 left-bl">
                        <p class="field-question">Sex <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <!-- Gender Selector -->
                        <select class="form-select" id="gender" required>
                            <option value="" selected disabled>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                </div>
                
                {{-- Nationalities --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-7 col-sm-12 left-bl">
                        <p class="field-question">Nationality <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-5 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <!-- Gender Selector -->
                        make a Select option
                        {{-- <select class="form-select" id="gender" required>
                            <option value="" selected disabled>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select> --}}
                    </div>

                </div>

                {{-- Height --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 left-bl">
                        <p class="field-question">Height <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <div class="row">
                            <div class="col-4">
                                <select class="form-select" id="height-unit" required>
                                    <option value="feet">Feet</option>
                                    <option value="cm">Centimeters</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <select class="form-select col-6 " id="height-feet" required>
                                    <option value="" selected disabled>Select Height (Feet)</option>
                                    <script>
                                        for (let i = 3; i <= 7; i++) {
                                            for (let j = 0; j < 12; j++) {
                                                document.write(`<option value="${i}'${j}">${i}'${j}"</option>`);
                                            }
                                        }
                                    </script>
                                </select>
                                <select class="form-select  d-none" id="height-cm" required>
                                    <option value="" selected disabled>Select Height (cm)</option>
                                    <script>
                                        for (let i = 90; i <= 215; i++) {
                                            document.write(`<option value="${i}">${i} cm</option>`);
                                        }
                                    </script>
                                </select>
    
                            </div>
                        </div>
                    </div>

                </div>

                  <!-- Weight Selector -->
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 left-bl">
                        <p class="field-question">Weight <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <div class="row">
                            <div class="col-4">
                                <select class="form-select" id="weight-unit" required>
                                    <option value="lbs">Pounds</option>
                                    <option value="kg">Kilograms</option>
                                </select>
                            </div>
    
                            <div class="col-8 justify-content-between">
                                <select class="form-select " id="weight-lbs" required>
                                    <option value="" selected disabled>Select Weight (lbs)</option>
                                    <script>
                                        for (let i = 50; i <= 400; i++) {
                                            document.write(`<option value="${i}">${i} lbs</option>`);
                                        }
                                    </script>
                                </select>
                                <select class="form-select d-none" id="weight-kg" required>
                                    <option value="" selected disabled>Select Weight (kg)</option>
                                    <script>
                                        for (let i = 20; i <= 180; i++) {
                                            document.write(`<option value="${i}">${i} kg</option>`);
                                        }
                                    </script>
                                </select>
    
                            </div>
                        </div>
                    </div>

                </div>

                @if ($heard_from == 'other')

                    <div class="field-floating mb-3">
                        <div class="col-lg-12 left-bl px-0">
 
                            <textarea placeholder="please state" cols="30" rows="10" name="" wire:model="heard_from"></textarea>
                        </div>
                    </div>
                @endif
                
                {{-- Another Question --}}
                @if ($heard_from == 1)

                    <div class="field-floating mb-3">
                        <div class="col-lg-12 left-bl px-0">
                            <p class="field-question">If you were recommended by one of our current players, could you please let us know who?</p>

                            <textarea name="" cols="30" rows="10" placeholder="Please write here..." wire:model="heard_from"></textarea>
                        </div>
                    </div>
                @endif
        </div>

        <div class="d-flex justify-content-center float-end">
            <input type="submit" class="submit-btn" value="Next">
        </div>
        <div class="d-flex justify-content-center float-end">
            <input type="button" onclick="history.back();" value="Back" class="player-prev-btn">
        </div>

    </form>
</div>
    