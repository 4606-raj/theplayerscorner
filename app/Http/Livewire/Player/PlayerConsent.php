<?php

namespace App\Http\Livewire\Player;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth, Exception, Throwable, Log, Session;

class PlayerConsent extends Component
{
    public $consent_terms_of_use, $consent_data_collection_privacy;

    protected $rules = [
        'consent_terms_of_use' => 'required',
        'consent_data_collection_privacy' => 'required',
    ];
    
    public function render()
    {
        return view('livewire.player.player-consent');
    }

    public function save() {
        $attributes =  $this->validate();
        $attributes['_token'] = csrf_token();
        try {
            $request = Request::create(route('step-four'), 'POST', $attributes);
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
