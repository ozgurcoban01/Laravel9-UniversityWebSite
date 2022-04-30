<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Events;
use App\Models\Faculties;
use App\Models\News;
use App\Models\Teachers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public static function mainCategoryList($id){

        return Faculties::where('parent_id','=',$id)->with('children')->get();
    }

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

    public function teacher(Request $request, Teachers $Teachers,$id){

        $data=Teachers::find($id);

        return view('home.teacher',['data'=>$data]);
    }
    public function faculty(Request $request,Faculties $faculties, Teachers $Teachers,$id){

        $data=Faculties::find($id);

        $rs=$data->teachers;

        $flist=self::mainCategoryList($id);

        return view('home.faculties',['data'=>$data,'teac'=>$rs,'flist'=>$flist]);
    }

}
