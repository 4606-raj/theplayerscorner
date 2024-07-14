<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Livewire\WithFileUploads;
use App\Models\Player;

class BasicDetails extends Component
{
    use WithFileUploads;

    public Player $player;
    public $updatePlayer = [];
    public $first_name, $last_name, $day, $month, $year;
    
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'day' => 'required',
        'month' => 'required',
        'year' => 'required',
    ];
    
    public function render()
    {
        // $this->player = Auth::user()->player;
        return view('livewire.player.basic-details');
    }

    public function save() {

        $this->validate();

        // $imageName = $this->photo->storePublicly('players/images');
        // $this->player->photo = $imageName;

        $this->player->save();

        $this->emit('basicDetailsSaved');
    }
    
}
