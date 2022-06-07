<?php

namespace App\Models;

use App\Models\Announces;
use App\Models\News;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teachers;
use App\Models\Content;

class Faculties extends Model
{
    use HasFactory;

    protected $appends=['parent'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function teachers(){
        return $this->hasMany(Teachers::class);
    }

    public function content(){
        return $this->hasMany(Content::class);
    }

    public function news(){
        return $this->hasMany(News::class);
    }

    public function announces(){
        return $this->hasMany(Announces::class);
    }

    public function parent(){
        return $this->belongsTo(Faculties::class,'parent_id');
    }

    public function children(){
        return $this->hasMany(Faculties::class,'parent_id');
    }
}

