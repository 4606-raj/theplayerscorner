@extends('layouts.main')

@section('content')

@livewireStyles

<section class="container player-res-sec">
	<div class="col-lg-10 col-md-12 col-sm-12 col-12">
					
					<div class="align-items-start player-multi-form">
							<div class="sticky-sidebar">
								<div class="nav nav-pills col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<button class="nav-link active" id="v-pills-step-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-1" type="button" role="tab" aria-controls="v-pills-step-1" aria-selected="true"><div class="counter-num">1</div>Personal details</button>
									<button class="nav-link" id="v-pills-step-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-2" type="button" role="tab" aria-controls="v-pills-step-2" aria-selected="false"><div class="counter-num">2</div>club details</button>
									<button class="nav-link" id="v-pills-step-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-3" type="button" role="tab" aria-controls="v-pills-step-3" aria-selected="false"><div class="counter-num">3</div>playing details</button>
									<button class="nav-link" id="v-pills-step-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-step-4" type="button" role="tab" aria-controls="v-pills-step-4" aria-selected="false"><div class="counter-num">4</div>consent</button>
								</div>
							</div>
							
						<div class="tab-content col-lg-8" id="v-pills-tabContent">

							{{-- STEP 1 --}}
							<div class="tab-pane fade active show" id="v-pills-step-1" role="tabpanel" aria-labelledby="v-pills-step-1-tab">
								<livewire:basic-details />
							</div>

							{{-- STEP 2 --}}
							<div class="tab-pane fade" id="v-pills-step-2" role="tabpanel" aria-labelledby="v-pills-step-2-tab">

								<livewire:player.club-details />
							</div>

							{{-- STEP 3 --}}
							<div class="tab-pane fade" id="v-pills-step-3" role="tabpanel" aria-labelledby="v-pills-step-3-tab">
								<livewire:player.playing-details />
							</div>

							{{-- STEP 4 --}}
							<div class="tab-pane fade" id="v-pills-step-4" role="tabpanel" aria-labelledby="v-pills-step-4-tab">
								<livewire:player.player-consent />
							</div>

						</div>
					</div>

					{{-- =======================================================Base Section END========================================================================= --}}
	</div>

</section>


@livewireScripts
<script>
	
	function changeTab(step) {
		// Use Bootstrap method to show the tab
		var tab = new bootstrap.Tab(document.getElementById(`v-pills-step-${step}-tab`));
		tab.show();
	}
    Livewire.on('basicDetailsSaved', (step) => {
		
		if(step == 5) {
			window.location.replace("{{ route('player.profile') }}");
		}
		
		$(`#v-pills-step-${step}-tab`).trigger('click')

		setTimeout(() => {
			changeTab(step);
		}, 100);
    })
</script>

@push('script')
	<script>
		$(document).ready(function() {
			let currentStep = @json(Auth::user()->player->steps ?? 0);
			$(`#v-pills-step-${currentStep}-tab`).trigger('click')
		});

		function canProceedToStep(stepNumber) {
			let currentStep = @json(Auth::user()->player->steps ?? 0);
			return stepNumber <= currentStep;
		}

		$(document).ready(function() {
			$('#v-pills-tab button').on('click', function(e) {
				var stepNumber = $(this).find('.counter-num').text();
				
				if (!canProceedToStep(parseInt(stepNumber))) {
					e.preventDefault();  // Prevent default action
					e.stopPropagation(); // Stop the event from propagating
					
					// alert('You cannot proceed to this step until the previous steps are completed.');
					
					return false;        // Ensure function exits
				}
			});
		});


		
	</script>
@endpush

@endsection
