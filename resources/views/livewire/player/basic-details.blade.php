<div>
    
    <form wire:submit.prevent="save" wire:csrf class="form-body col-sm-12 col-lg-12 col-md-12 col-12 pt-3">
							
        {{-- STEP 1 --}}
        <div class="tab-pane fade show active" id="v-pills-step-1" role="tabpanel" aria-labelledby="v-pills-step-1-tab">

            {{-- @if($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif --}}

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
                
                <div class="field-floating justify-content-center mb-3">
                    <div class="row col-12">
                        {{-- First Name --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 ps-0">
                            <div class="left-bl mb-2">
                                <p class="field-question">First Name <span class="compulsory-mark">*</span></p>
                            </div>
                            
                            <div class="right-bl mb-3 mb-md-0">
                                <x-text-field name="first_name" type="text" label="First Name" />
                            </div>
                        </div>
                        
                        {{-- last Name --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 pe-0">
                            <div class="left-bl mb-2">
                                <p class="field-question">Last Name <span class="compulsory-mark">*</span></p>
                            </div>
                            
                            <div class="right-bl mb-3 mb-md-0">
                                <x-text-field name="last_name" wire:model="last_name" type="text" label="Last Name" />
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Last Name --}}
                {{-- <div class="field-floating mb-3">
                </div> --}}
                
                {{-- Select Date of birth --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12 left-bl">
                        <p class="field-question">Select Your Date of Birth <span class="compulsory-mark">*</span></p>
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 col-12 mt-2 mt-md-0">
                        <div class="row">
                            <!-- Day Selector -->
                            <div class="col-4">
                                <select class="form-select" id="day" name="day" wire:model="day" wire:ignore required>
                                    <option value="" selected>Day</option>
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
                                <select class="form-select" id="month" name="month" wire:model="month" wire:ignore required>
                                    <option value="" selected>Month</option>
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
                                <select class="form-select" id="year"name="year" wire:model="year" wire:ignore required>
                                    <option value="" selected>Year</option>
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
                        <select class="form-select" id="gender" wire:model="gender" required>
                            <option value="" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                </div>
                
                {{-- Nationalities --}}
                <div class="field-floating mb-3 sel-nationalities">
                    <div class="col-lg-4 col-md-7 col-sm-12 left-bl">
                        <p class="field-question">Nationality <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    {{-- <div class="right-bl col-lg-8 col-md-5 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                            <div class="dropdown">
                                <div class="form-control dropdown-toggle selInput" placeholder="test" id="selInput" data-bs-toggle="dropdown" aria-expanded="false" contenteditable="true"></div>

                                <ul class="dropdown-menu" aria-labelledby="selInput">
                                    <!-- List of countries in alphabetical order -->
                                    <li><a class="dropdown-item" href="#">Afghanistan </a></li>
                                    <li><a class="dropdown-item" href="#">Albania</a></li>
                                    <li><a class="dropdown-item" href="#">Algeria</a></li>
                                    <!-- Add more countries here -->
                                </ul>
                            </div>
                    </div> --}}

                    <div class="right-bl col-12 mt-2 mt-md-0">
                        <div class="row">
                            <div wire:ignore class="col-12">
                                <select class="form-select select2 morph_nationality_id" id="morph_nationality_id" wire:model="morph_nationality_id" multiple required>
                                    @foreach (config('constants.dropdowns.nationalities') as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Height --}}
                <div class="field-floating mb-3">
                    <div class="col-lg-4 col-md-5 col-sm-12 left-bl">
                        <p class="field-question">Height <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    <div class="right-bl col-lg-8 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <div class="unit-switcher">
                                    <i class="bi bi-caret-down-fill"></i>
                                    <select class="form-select" id="height-unit" name="height" wire:model="height_unit" required>
                                        <option value="feet" selected>Feet</option>
                                        <option value="cm">Centimeters</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-8">
                                <select class="form-select col-6 " id="height" wire:model="height" required>
                                    <option value="" selected>Select Height</option>
                                    {!! $heightList !!}
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
                            <div class="col-4 d-flex align-items-center">
                                <div class="unit-switcher">
                                    <i class="bi bi-caret-down-fill"></i>
                                    <select class="form-select" id="weight-unit" wire:model="weight_unit" required>
                                        <option value="lbs" selected>Pounds</option>
                                        <option value="kg">Kilograms</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="col-8 justify-content-between">
                                <select class="form-select " id="weight" wire:model="weight" required>
                                    <option value="" selected>Select Weight</option>
                                    {!! $weightList !!}
                                </select>
    
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Location -->
                <div class="pl-location field-floating">
                    <div class="col-lg-3 col-md-5 col-sm-12 left-bl">
                        <p class="field-question">Location <span class="compulsory-mark">*</span></p>    
                    </div>
                    
                    <div class="right-bl justify-content-end col-lg-9 col-md-7 col-sm-12 ps-lg-3 mb-3 mb-md-0 ps-lg-3">
                        <x-text-field name="location" wire:model="location" type="text" label="Enter Postcode"/>
                        
                        <div class="location-btn ">
                            <button type="button" id="getlocation"> <i class="bi bi-crosshair"></i> current location</button>
                        </div>    
                    </div>
                    <div class="list"  id="locations-list" >
                        @foreach ($locations as $location)
                            <li class="location-item">{{ $location }}</li>
                        @endforeach
                    </div>
                </div>
        </div>

        <div class="d-flex justify-content-center mt-3 float-end">
            <input type="submit" class="submit-btn" value="Continue">
        </div>
        {{-- <div class="d-flex justify-content-center float-end">
            <input type="button" onclick="history.back();" value="Back" class="player-prev-btn">
        </div> --}}

    </form>
</div>

@push('script')
    <script>

        $('#weight-unit').trigger('change')
        
        toastr.options = {"positionClass": "toast-top-full-width"}
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        document.addEventListener('livewire:load', function () {
            $('.morph_nationality_id').select2();
        });

        $(document).ready(function() {
            $('.select2').select2({
                placeholder: '{{__('Select your option')}}',
                allowClear: true
            });
            $('.morph_nationality_id').on('change', function (e) {
                let elementName = $(this).attr('id');
                var data = $(this).select2("val");
                @this.set(elementName, data);
            });

            $('input[name="location"]').on('input', function() {
                let postcode = $(this).val();

                const postcodeNoSpaces = postcode.replace(/\s+/g, "").toUpperCase();
                const postcodePattern = /^[A-Z]{1,2}[0-9R][0-9A-Z]?[0-9][ABD-HJLNP-UW-Z]{2}$/;

                // Match the postcode with the regular expression
                if (postcodePattern.test(postcodeNoSpaces)) {
                    $.ajax({
                    url: `{{ url('/locations-list/') }}/${postcode}`,
                    success: function(response) {
                        @this.set('locations', response);
                    }
                })
                }
            });

            $('body').on('click', '.location-item', function() {
                let value = $(this).html()
                $('input[name="location"]').val(value)
                $('.location-item').hide()
                // $(this).html('')
            })

            $('#getlocation').click(function() {
                navigator.geolocation.getCurrentPosition(function(position) {
                    console.log(position.coords.latitude);


                    let url = `https://geocode.maps.co/reverse?lat=${position.coords.latitude}&lon=${position.coords.longitude}&api_key=66a7c3879cc85576659602exsc7785d`
                    $.ajax({
                        url: url,
                        success: function(response) {
                            @this.set('location', response.display_name);
                        }
                    })
                    
                });
            });
            
        });
        
    </script>

<style>
    .select2 {
        min-width: 100px !important;
    }
    .list {
        width: 65%;
        background: #fff;
        /* color: #f8f43c; */
        margin-left: 35%;
        margin-top: 1%;
    }
    .location-item {
        cursor: pointer;
        list-style-type: none;
        padding: 2%;
        border: 1px solid #f8f43c;
    }
    .location-item:hover {
        background: #f8f43c;
        color: #000;
    }
</style>
    
@endpush