<?php

namespace App\Models;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculties;
use App\Models\Comment;


class Teachers extends Model
{
    use HasFactory;

    public function faculties(){
        return $this->belongsTo(Faculties::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function courses(){
        return $this->hasMany(Courses::class);
    }
}
