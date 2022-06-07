<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Livewire\Component;

class Search extends Component
{

    public $search='';
    public $contents;
    public function render()
    {
        if(empty($this->search)){
            $this->contents=Content::where('name',$this->search)->get();
        }else{
            $this->contents=Content::where('name','like','%'.$this->search.'%')->get();
        }

        return view('livewire.search');
    }
}
