<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blog() {
        return $this->belongsTo(Blog::class);
    }

    public function getCreatedAtAttribute($val) {
        return \Carbon\Carbon::parse($val)->format('d-m-y, H:i');
        
    }
}
