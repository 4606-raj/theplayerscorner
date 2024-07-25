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
        $attributes =  $this->validate();
        $attributes['_token'] = csrf_token();
        try {
            $request = Request::create(route('step-three'), 'POST', $attributes);
            $response = app()->handle($request);
            if($response->getStatusCode() == 200) {
                $this->emit('basicDetailsSaved', $response->getData()->step);
            }
            else {
                \Log::error($response);
                throw new Exception($response, 500);
            }
        }
        catch(\Exception $e) {
            Log::error($e);
            toastr()->error(config('errors.general.something_went_wrong'));
        }   
    }
    
}
