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
    public $heard_from, $photo, $document;
    
    protected $rules = [
        'heard_from' => 'required',
        'photo' => 'required|image|max:1024',
        'document' => 'required|mimes:pdf,png,jpg,doc|max:1024',
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
        
        // $docName = $this->document->storePublicly('players/documents');
        // $this->player->document = $docName;

        $this->player->heard_from = $this->heard_from;
        $this->player->save();

        $this->emit('basicDetailsSaved');
    }
    
}
