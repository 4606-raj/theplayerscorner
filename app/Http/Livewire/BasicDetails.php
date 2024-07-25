<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth, Exception, Throwable, Log, Session;
use Livewire\WithFileUploads;
use App\Models\Player;

class BasicDetails extends Component
{
    use WithFileUploads;

    public $heightList = [];
    public $weightList = [];
    public $first_name, $last_name, $day, $month, $year, $gender, $height, $height_unit, $weight, $weight_unit, $location, $photo;
    public $morph_nationality_id = [];
    
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'day' => 'required',
        'month' => 'required',
        'year' => 'required',
        'gender' => 'required',
        'height' => 'required',
        'height_unit' => 'required',
        'weight' => 'required',
        'weight_unit' => 'required',
        'location' => 'sometimes',
        'photo' => 'sometimes',
        'morph_nationality_id.*' => 'required'
    ];
    
    public function render()
    {
        $this->setHeightList();
        $this->setWeightList();

        return view('livewire.player.basic-details');
    }

    public function save() {

        $attributes = $request = $this->validate();
        $attributes['_token'] = csrf_token();
        try {

            $attributes['photo'] = $this->photo->storePublicly('players/images');
            
            $request = Request::create(route('step-one'), 'POST', $attributes);
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

        // $this->player->photo = $imageName;
    }

    protected function setHeightList() {
        $options = "<option value='' selected disabled>Select Height</option>";

        if($this->height_unit == 'cm') {
            for ($i = 90; $i <= 215; $i++) {
                $options .= "<option value='$i'>$i cm</option>";
            }
        }
        else {
            for ($i = 3; $i <= 7; $i++) {
                for ($j = 0; $j <= 12; $j++) {
                    $options .= "<option value='$i.$j'>$i'$j</option>";
                }
            }
        }

        return $this->heightList = $options;
    }

    protected function setWeightList() {
        $options = "<option value='' selected disabled>Select Weight</option>";

        if($this->weight_unit == 'kg') {
            for ($i = 20; $i <= 180; $i++) {
                $options .= "<option value='$i'>$i kg</option>";
            }
        }
        else {
            for ($i = 50; $i <= 400; $i++) {
                $options .= "<option value='$i'>$i lbs</option>";
            }
        }

        return $this->weightList = $options;
    }
    
}
