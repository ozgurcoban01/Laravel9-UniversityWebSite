<?php

namespace App\Http\Controllers;

use App\Models\Announces;
use App\Models\Degrees;
use App\Models\Events;
use App\Models\Faculties;
use App\Models\Images;
use App\Models\Message;
use App\Models\News;
use App\Models\Setting;
use App\Models\Teachers;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public static function mainCategoryList($id){

        return Faculties::where('parent_id','=',$id)->with('children')->get();
    }

    public function aboutus(){

        $settings=Setting::first();

        return view('home.aboutus',['settings'=>$settings]);
    }
    public function contact(){

        $settings=Setting::first();

        return view('home.contactuspage',['settings'=>$settings]);
    }
    public function storemessage(Request $request){

        $data=new Message();

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->note=$request->input('note');
        $data->ip=$request->ip();

        $data->save();

        return redirect()->route('contact')->with('info','Your Message Has Been Sent!!!');

    }
    public function references(){

        $settings=Setting::first();

        return view('home.references',['settings'=>$settings]);
    }
    public function ourteachers(Teachers $Teachers,Degrees $Degrees){

        $teachers=Teachers::all();
        $degrees=Degrees::all();

        return view('home.ourteachers',['teachers'=>$teachers,'degrees'=>$degrees]);
    }


    public function index(){

        $sliderdata=Teachers::limit(6)->get();
        $eventdata=Events::all();
        $announcedata=Announces::limit(8)->get();
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
    public function announce(Request $request,Announces $announce,$id){

        $data=Announces::find($id);

        return view('home.announce',['data'=>$data]);
    }
    public function news(Request $request,Images $image,News $news,$id){

        $data=News::find($id);
        $image=Images::all();

        return view('home.news',['data'=>$data,'image'=>$image]);
    }
    public function faculty(Request $request,Faculties $faculties, Teachers $Teachers,$id){

        $data=Faculties::find($id);

        $pdata=Faculties::find($data->parent_id);

        $rs=$data->teachers;

        $flist=self::mainCategoryList($id);

        return view('home.faculties',['data'=>$data,'teac'=>$rs,'flist'=>$flist,'pdata'=>$pdata]);
    }

}
