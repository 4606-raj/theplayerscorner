<?php

namespace App\Http\Livewire\Player;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth, Exception, Throwable, Log, Session;

class PlayingDetails extends Component
{
    public $morph_position_id, $morph_second_position_id, $morph_foot_id;
    public $morph_trait_id = [];
    
    protected $rules = [
        'morph_position_id' => 'required',
        'morph_second_position_id' => 'required',
        'morph_foot_id' => 'required',
        'morph_trait_id.*' => 'required',
    ];
    
    public function render()
    {
        return view('livewire.player.playing-details');
    }
    
    public function save() {
        try {
            $attributes =  $this->validate();
            $attributes['_token'] = csrf_token();

            $request = Request::create(route('step-three'), 'POST', $attributes);
            $response = app()->handle($request);
            if($response->getStatusCode() == 200) {
                $this->emit('basicDetailsSaved', $response->getData()->step);
                toastr()->success("Step 3 Completed");
            }
            else {
                \Log::error($response);
                throw new Exception($response, 500);
            }
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            foreach ($e->errors() as $key => $error) {
                toastr()->error($error[0]);
            }
        }
        catch(\Exception $e) {
            Log::error($e);
            toastr()->error(config('errors.general.something_went_wrong'));
        }   
    }
    
}
