<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function playerClubDetails() {
        return $this->hasOne(PlayerClubDetail::class);
    }

    public function playerPlayingDetails() {
        return $this->hasOne(PlayerPlayingDetail::class);
    }

    public function getHeightAttribute($height) {

        if($this->height_unit == 'feet') {

            $feet = floor($height);
            $inches = round(($height - $feet) * 12);

            $height = $feet . "'" . $inches . '"';
        }

        return $height;
    }
    
}
