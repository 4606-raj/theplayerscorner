<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerPlayingDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['position', 'second_position', 'foot', 'traits'];

    public function getPositionAttribute() {
        return config('constants.dropdowns.positions')[$this->morph_position_id];
    }

    public function getSecondPositionAttribute() {
        return config('constants.dropdowns.second_positions')[$this->morph_second_position_id];
    }

    public function getFootAttribute() {
        return config('constants.dropdowns.feet')[$this->morph_foot_id];
    }

    public function getTraitsAttribute() {
        return config('constants.dropdowns.traits');
    }
}
