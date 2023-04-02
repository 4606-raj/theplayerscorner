<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamSubType;
use App\Models\Team;

class TeamType extends Model
{
    use HasFactory;

    public function teams() {
        return $this->hasMany(Team::class);
    }

    public function subTypes() {
        return $this->hasMany(TeamSubType::class);
    }

    public function getImageAttribute($image) {
        return asset("assets/images/slider/$image");
    }
}
