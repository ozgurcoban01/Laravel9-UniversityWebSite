<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Events;
use App\Models\News;
use App\Models\Teachers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $sliderdata=Teachers::limit(6)->get();
        $eventdata=Events::all();
        $announcedata=Announce::limit(8)->get();
        $news=News::all();

        return view('home.index',['sliderdata'=>$sliderdata,'eventdata'=>$eventdata,'announcedata'=>$announcedata,'news'=>$news]);
    }


    public function event(Request $request, Events $Events,$id){

        $data=Events::find($id);

        return view('home.event',['data'=>$data]);
    }

}
