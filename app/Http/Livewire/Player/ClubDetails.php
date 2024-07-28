<?php

namespace App\Http\Livewire\Player;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth, Exception, Throwable, Log, Session;

class ClubDetails extends Component
{
    public $supported_team, $current_level, $highest_level, $current_club;
    
    protected $rules = [
        'supported_team' => 'required',
        'current_level' => 'required',
        'highest_level' => 'required',
        'current_club' => 'required',
    ];
    
    public function render()
    {
        return view('livewire.player.club-details');
    }

    public function save() {
        $attributes = $request = $this->validate();
        $attributes['_token'] = csrf_token();
        try {
            $request = Request::create(route('step-two'), 'POST', $attributes);
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
