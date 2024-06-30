<div>
    
    <form wire:submit.prevent="save" class="form-body col-sm-12 col-lg-12 col-md-12 col-12 pt-3" name="player-register">
                            
        {{-- STEP 1 --}}
        <div class="tab-pane fade show active" id="v-pills-step-1" role="tabpanel" aria-labelledby="v-pills-step-1-tab">

            @if($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif

                <h4 class="pane-hdr">Playing Details</h4>
                

                <div class="field-floating justify-content-center mb-3">
                    <div class="row col-12">
                        
                        <!-- Position* -->
                        <div class="col-6 ps-0">
                            <div class="col-12 mb-2 left-bl">
                                <p class="field-question">Position <span class="compulsory-mark">*</span></p>
                            </div>
                            
                            <div class="right-bl col-12 mt-2 mt-md-0">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="form-select" id="player_position" required>
                                            <option value="" selected disabled>Select your position</option>
                                            <option value="1">Goalkeeper (GK)</option>
                                            <option value="2">Centre Back (CB)</option>
                                            <option value="3">Right Back (RB)</option>
                                            <option value="4">Left Back (LB)</option>
                                            <option value="5">Centre Midfield (CM)</option>
                                            <option value="6">Centre Defensive Midfield (CDM)</option>
                                            <option value="7">Centre Attacking Midfield (CAM)</option>
                                            <option value="8">Right Midfield (RM)</option>
                                            <option value="9">Left Midfield (LM)</option>
                                            <option value="10">Right Wing (RW)</option>
                                            <option value="11">Left Wing (LW)</option>
                                            <option value="12">Centre Forward (CF)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Second Position* -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 pe-0">
                            <div class="col-12 mb-2  left-bl">
                                <p class="field-question">Second Position</p>
                            </div>
                            
                            <div class="right-bl col-12 mt-2 mt-md-0">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="form-select" id="second_position" required>
                                            <option value="" selected disabled>Select second position</option>
                                            <option value="1">Goalkeeper (GK)</option>
                                            <option value="2">Centre Back (CB)</option>
                                            <option value="3">Right Back (RB)</option>
                                            <option value="4">Left Back (LB)</option>
                                            <option value="5">Centre Midfield (CM)</option>
                                            <option value="6">Centre Defensive Midfield (CDM)</option>
                                            <option value="7">Centre Attacking Midfield (CAM)</option>
                                            <option value="8">Right Midfield (RM)</option>
                                            <option value="9">Left Midfield (LM)</option>
                                            <option value="10">Right Wing (RW)</option>
                                            <option value="11">Left Wing (LW)</option>
                                            <option value="12">Centre Forward (CF)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="field-floating justify-content-center mb-3">
                    <div class="row col-12">
                        
                        <!-- Foot* -->
                        <div class="col-6 ps-0">
                            <div class="col-12 mb-2 left-bl">
                                <p class="field-question">Foot <span class="compulsory-mark">*</span></p>
                            </div>
                            
                            <div class="right-bl col-12 mt-2 mt-md-0">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="form-select" id="player_foot" required>
                                            <option value="" selected disabled>Select</option>
                                            <option value="1">Right</option>
                                            <option value="2">Left</option>
                                            <option value="3">Both</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Traits -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 pe-0 sel-nationalities">
                            <div class="col-12 mb-2 left-bl">
                                <p class="field-question">Traits</p>    
                            </div>
                            
                            <div class="right-bl col-12">
                                    <div class="dropdown">
                                        <div class="form-control dropdown-toggle selInput" placeholder="test" id="selInput2" data-bs-toggle="dropdown" aria-expanded="false" contenteditable="true"></div>
        
                                        <ul class="dropdown-menu" aria-labelledby="selInput2">
                                            <!-- List of countries in alphabetical order -->
                                            <li><a class="dropdown-item" href="#">Agile </a></li>
                                            <li><a class="dropdown-item" href="#">Aggressive Crosser</a></li>
                                            <li><a class="dropdown-item" href="#">Distance Shooter</a></li>
                                            <li><a class="dropdown-item" href="#">Distribution</a></li>
                                            <li><a class="dropdown-item" href="#">Dribbler</a></li>
                                            <li><a class="dropdown-item" href="#">Finisher</a></li>
                                            <li><a class="dropdown-item" href="#">Handling</a></li>
                                            <li><a class="dropdown-item" href="#">Judgement</a></li>
                                            <li><a class="dropdown-item" href="#">Leadership</a></li>
                                            <li><a class="dropdown-item" href="#">Long Throw-in</a></li>
                                            <li><a class="dropdown-item" href="#">Play Maker</a></li>
                                            <li><a class="dropdown-item" href="#">Power Header</a></li>
                                            <li><a class="dropdown-item" href="#">Set Piece Specialist</a></li>
                                            <li><a class="dropdown-item" href="#">Speedster</a></li>
                                            <li><a class="dropdown-item" href="#">Strength</a></li>
                                            <li><a class="dropdown-item" href="#">Tackler</a></li>
                                            <li><a class="dropdown-item" href="#">Tactician</a></li>
                                            <li><a class="dropdown-item" href="#">Team Player</a></li>
                                            <li><a class="dropdown-item" href="#">Vocal</a></li>
                                            <!-- Add more countries here -->
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>

        <div class="d-flex justify-content-center mt-3 float-end">
            <input type="button" onclick="history.back();" value="Back" class="player-prev-btn">
            
            <input type="submit" class="submit-btn" value="Continue">

        </div>
        {{-- <div class="d-flex justify-content-center float-end">
        </div> --}}

    </form>


    
</div>
