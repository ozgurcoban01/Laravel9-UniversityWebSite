<?php

namespace App\Models;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Courses extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->belongsTo(Teachers::class);
    }
}
