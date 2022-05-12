<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teachers;

class Faculties extends Model
{
    use HasFactory;

    protected $appends=['parent',];

    public function teachers(){
        return $this->hasMany(Teachers::class);
    }

    public function parent(){
        return $this->belongsTo(Faculties::class,'parent_id');
    }

    public function children(){
        return $this->hasMany(Faculties::class,'parent_id');
    }
}

