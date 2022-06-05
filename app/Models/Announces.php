<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculties;

class Announces extends Model
{
    use HasFactory;
    public function faculties(){
        return $this->belongsTo(Faculties::class);
    }
}
