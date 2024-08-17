<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerClubDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['current_level', 'highest_level'];

    public function getCurrentLevelAttribute() {
        return config('constants.dropdowns.current_levels')[$this->morph_current_level_id];
    }

    public function getHighestLevelAttribute() {
        return config('constants.dropdowns.highest_levels')[$this->morph_highest_level_id];
    }
    
}
