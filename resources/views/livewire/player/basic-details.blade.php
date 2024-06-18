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
                
                {{-- Proof ID --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-6 col-md-7 col-sm-12 order-2 order-md-1 left-bl">
                        <p class="field-question">2. Proof of ID (Copy of Passport page/Birth Certificate).</p>
                        
                        <div class="question-des">
                            <p>Please be advised that NO player is permitted by the FA and the respective league(s) to participate in ANY league/cup matches until the player has been <u>successfully registered</u>, and this has been <u>communicated by the league(s)</u>. 
                                <br><br><span>FEES FOR THE 2023-24 SEASON ARE YET TO BE CONFIRMED</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="right-bl col-lg-6 col-md-5 col-sm-12 ps-lg-3 order-md-2 mb-3 mb-md-0 ps-lg-3">
                            <input type="file" class="form-control" name="doc" placeholder="ID Proof" wire:model="document">
                            <label>Select File</label>
                    </div>
                </div>
                
                {{-- How did you hear about us?* --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-5 col-md-7 col-sm-12 col-12 left-bl">
                        <p class="field-question">How did you hear about us? <span class="compulsory-mark">*</span></p>
                    </div>
                    
                    <div class="right-bl col-lg-7 col-md-5 col-sm-12 col-12 mt-2 mt-md-0">
                        <div class="form-floating">
                            <select name="" id="" wire:model="heard_from" required>
                                <option value="">Select</option>
                                <option value="1">Recommended by a current player</option>
                                <option value="2">Social Media</option>
                                <option value="3">Blog / Newsletter / Publication</option>
                                <option value="other">Other</option>
                            </select>
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
    