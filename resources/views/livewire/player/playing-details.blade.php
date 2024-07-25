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
                                        <select class="form-select" id="player_position" wire:model="morph_position_id" required>
                                            <option value="" selected disabled>Select your position</option>
                                            @foreach (config('constants.dropdowns.postitions') as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
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
                                        <select class="form-select" id="second_position" wire:model="morph_second_position_id" required>
                                            <option value="" selected disabled>Select second position</option>
                                            @foreach (config('constants.dropdowns.second_positions') as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
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
                                        <select class="form-select" id="player_foot" wire:model="morph_foot_id" required>
                                            <option value="" selected disabled>Select</option>
                                            @foreach (config('constants.dropdowns.feet') as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Traits -->

                        <div class="col-6 ps-0">
                            <div class="col-12 mb-2 left-bl">
                                <p class="field-question">Traits <span class="compulsory-mark">*</span></p>
                            </div>
                            
                            <div class="right-bl col-12 mt-2 mt-md-0">
                                <div class="row">
                                    <div wire:ignore class="col-12">
                                        <select class="form-select morph_trait_id select2" id="morph_trait_id" wire:model="morph_trait_id" multiple required>
                                            @foreach (config('constants.dropdowns.traits') as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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

@push('script')
    <script>
        document.addEventListener('livewire:load', function () {
            $('.select2').select2();
        });

        $(document).ready(function() {
            $('.select2').select2({
                placeholder: '{{__('Select your option')}}',
                allowClear: true
            });
            $('.morph_trait_id').on('change', function (e) {
                let elementName = $(this).attr('id');
                var data = $(this).select2("val");
                @this.set(elementName, data);
            });
        });
        
    </script>
@endpush

<style>
    .select2 {
        min-width: 100px !important;
    }
</style>
    
</div>
