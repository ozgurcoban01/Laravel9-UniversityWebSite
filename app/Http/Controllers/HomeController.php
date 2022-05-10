<?php

namespace App\Http\Controllers;

use App\Models\Announces;
use App\Models\Degrees;
use App\Models\Events;
use App\Models\Faculties;
use App\Models\Faq;
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
    public function faqs(){

        $data=FAQ::all();
        $settings=Setting::first();

        return view('home.faqs',['data'=>$data,'settings'=>$settings]);
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
        $settings=Setting::first();

        return view('home.ourteachers',['teachers'=>$teachers,'degrees'=>$degrees,'settings'=>$settings]);
    }


    public function index(){

        $sliderdata=Teachers::limit(6)->get();
        $eventdata=Events::all();
        $announcedata=Announces::limit(8)->get();
        $news=News::all();
        $faq=Faq::limit(3)->get();
        $settings=Setting::first();

        return view('home.index',['sliderdata'=>$sliderdata,'eventdata'=>$eventdata,'announcedata'=>$announcedata,'news'=>$news,'settings'=>$settings,'faq'=>$faq]);
    }


    public function event(Request $request, Events $Events,$id){

        $data=Events::find($id);
        $settings=Setting::first();

        return view('home.event',['data'=>$data,'settings'=>$settings]);
    }

    public function teacher(Request $request, Teachers $Teachers,$id){

        $data=Teachers::find($id);
        $settings=Setting::first();

        return view('home.teacher',['data'=>$data,'settings'=>$settings]);
    }
    public function announce(Request $request,Announces $announce,$id){

        $data=Announces::find($id);
        $settings=Setting::first();

        return view('home.announce',['data'=>$data,'settings'=>$settings]);
    }
    public function news(Request $request,Images $image,News $news,$id){

        $data=News::find($id);
        $image=Images::all();
        $settings=Setting::first();
        return view('home.news',['data'=>$data,'image'=>$image,'settings'=>$settings]);
    }
    public function faculty(Request $request,Faculties $faculties, Teachers $Teachers,$id){

        $data=Faculties::find($id);

        $pdata=Faculties::find($data->parent_id);

        $rs=$data->teachers;
        $settings=Setting::first();

        $flist=self::mainCategoryList($id);

        return view('home.faculties',['data'=>$data,'teac'=>$rs,'flist'=>$flist,'pdata'=>$pdata,'settings'=>$settings]);
    }

}
