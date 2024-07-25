<div>
    
    <form wire:submit.prevent="save" class="form-body col-sm-12 col-lg-12 col-md-12 col-12 pt-3" name="player-register">
                            
        {{-- STEP 1 --}}
        <div class="tab-pane fade show active" id="v-pills-step-1" role="tabpanel" aria-labelledby="v-pills-step-1-tab">

            @if($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif

            <h4 class="pane-hdr">Consent</h4>
            
            <div class="field-floating mb-3">
                {{-- TERMS OF USE --}}
                <div class="col-lg-12 left-bl px-0">
                    <div class="field-question d-flex justify-content-center">
                        <hr>
                        <p class="mb-2">TERMS OF USE</p>
                        <hr>
                    </div>

                    <div class="question-info">
                        <p class="mb-2">The Players Corner Limited t/a The Players Corner is a self-promotion platform to help players gain exposure.</p>
                        <p class="mb-0"> The Player Corner cannot accept liability for the services it provides or your actions.</p>
                    </div>

                    <label for="consent_terms_of_use">
                        <input type="checkbox" class="consent_checkbox" name="consent_terms_of_use" id="consent_terms_of_use" wire:model="consent_terms_of_use" required="">
                        I accept that I am responsible for my behaviour on the platform.
                    </label>
                </div>

                {{-- DATA COLLECTION & PRIVACY --}}
                <div class="col-lg-12 left-bl mt-3 px-0">
                    <div class="field-question d-flex justify-content-center">
                        <hr>
                        <p class="mb-2">DATA COLLECTION & PRIVACY</p>
                        <hr>
                    </div>

                    <div class="question-info">
                        <p class="mb-2">We take your privacy very seriously, and will never sell your data to other 3rd parties.</p>
                        <p class="mb-0">The Players Corner only collects the minimum data required to carry out basic services. Check out our privacy policy <a href="#">here</a>.</p>
                    </div>

                    <label for="data_consent">
                        <input type="checkbox" class="consent_checkbox" name="data_consent" id="data_consent" wire:model="consent_data_collection_privacy" required="">
                        I accept that I am responsible for my behaviour on the platform.
                    </label>
                </div>
                
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3 float-end">
            <input type="button" onclick="history.back();" value="Back" class="player-prev-btn">
            <input type="submit" class="submit-btn" value="Create Account">
        </div>

    </form>


    
</div>
