<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCoverImageAttribute($val) {
        return asset('storage/images/blog-covers/' . $val);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
    
}
