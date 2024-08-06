<div>
    
        <form wire:submit.prevent="save" class="form-body col-sm-12 col-lg-12 col-md-12 col-12 pt-3" name="player-register">
                                
            {{-- STEP 1 --}}
            <div class="tab-pane fade show active" id="v-pills-step-1" role="tabpanel" aria-labelledby="v-pills-step-1-tab">
    
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                @endif
    
                    <h4 class="pane-hdr">Club Details</h4>
                    
                    {{-- Supported Team --}}
                    <div class="field-floating mb-3">
                        <div class="left-bl col-12 mb-2">
                            <p class="field-question">Supported Team<span class="compulsory-mark">*</span></p>
                        </div>
                        
                        <div class="right-bl col-12 mb-3 mb-md-0">
                            <x-text-field name="supported_team" wire:model="supported_team" type="text" label="Supported Team" required="true"/>
                        </div>
                    </div>

                    {{-- Current & Highest Levels* --}}
                    <div class="field-floating justify-content-center mb-3">
                        <div class="row col-12">
                            
                            <!-- Current Level* -->
                            <div class="col-6 ps-0">
                                <div class="col-12 mb-2 left-bl">
                                    <p class="field-question">Current Level <span class="compulsory-mark">*</span></p>
                                </div>
                                
                                <div class="right-bl col-12 mt-2 mt-md-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="form-select" id="current_level" wire:model="current_level" required>
                                                <option value="" selected>Select current level</option>
                                                @foreach (config('constants.dropdowns.current_levels') as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Highest Level* -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 pe-0">
                                <div class="col-12 mb-2  left-bl">
                                    <p class="field-question">Highest Level <span class="compulsory-mark">*</span></p>
                                </div>
                                
                                <div class="right-bl col-12 mt-2 mt-md-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="form-select" id="highest_level" wire:model="highest_level" required>
                                                <option value="" selected>Select current level</option>
                                                @foreach (config('constants.dropdowns.highest_levels') as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Current Club-->
                    <div class="field-floating mb-3">
                        <div class="left-bl col-12 mb-2">
                            <p class="field-question">Current Club</p>
                        </div>
                        
                        <div class="right-bl col-12 mb-3 mb-md-0">
                            <x-text-field name="current_club" wire:model="current_club" type="text" label="Current Club"/>
                        </div>
                    </div>
            </div>
    
            <div class="d-flex justify-content-center mt-3 float-end">
                <input type="button" onclick="history.back();" value="Back" class="player-prev-btn">
                <a href="#" class="btn-cover">
                    <input type="submit" class="submit-btn" value="Continue">
                </a>
            </div>
            {{-- <div class="d-flex justify-content-center float-end">
            </div> --}}
    
        </form>

    
        
</div>
