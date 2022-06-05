<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function faculties(){
        return $this->belongsTo(Faculties::class);
    }

    public function comments(){
        return $this->hasMany(Ccomment::class);
    }
}
