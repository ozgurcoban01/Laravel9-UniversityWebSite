<?php

namespace App\Http\Controllers;

use App\Models\Announces;
use App\Models\Comment;
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
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public static function mainCategoryList($id){

        return Faculties::where('parent_id','=',$id)->with('children')->get();
    }



    public function ourteachers(Faculties $faculties,Teachers $Teachers,Degrees $Degrees){

        $faculties=Faculties::all();

        $teachers=Teachers::all();

        $degrees=Degrees::all();

        $settings=Setting::first();


        return view('home.ourteachers',['teachers'=>$teachers,'degrees'=>$degrees,'settings'=>$settings,'faculties'=>$faculties]);
    }

    public function aboutus(){

        $settings=Setting::first();

        return view('home.aboutus',['settings'=>$settings]);
    }
    public function contact(){

        $settings=Setting::first();

        return view('home.contactus',['settings'=>$settings]);
    }
    public function faqs(){

        $data=FAQ::all();
        $settings=Setting::first();

        return view('home.faq',['data'=>$data,'settings'=>$settings]);
    }
    public function storemessage(Request $request){

        $data=new Message();

        $data->user_id=Auth::id();
        $data->teacher_id=$request->input('teacher_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->note=$request->input('note');
        $data->ip=request->ip();

        $data->save();

        return redirect()->route('teacher',['id'=>$request->input('teacher_id')])->with('info','Your Message Has Been Sent!!!');

    }
    public function termsofuse(){

        $settings=Setting::first();

        return view('home.termofuse',['settings'=>$settings]);
    }
    public function privacy(){

        $settings=Setting::first();

        return view('home.privacy',['settings'=>$settings]);
    }



    public function index(){

        $faculties=Faculties::all();
        $sliderdata=Teachers::all();
        $eventdata=Events::all();
        $announcedata=Announces::limit(6)->get();
        $news=News::all();
        $faq=Faq::limit(3)->get();
        $settings=Setting::first();

        return view('home.index',['teachers'=>$sliderdata,'eventdata'=>$eventdata,'announces'=>$announcedata,'news'=>$news,'settings'=>$settings,'faq'=>$faq,'faculties'=>$faculties]);
    }

    public function eventlist(Request $request, Events $Events){

        $data=Events::all();
        $settings=Setting::first();

        return view('home.eventlist',['data'=>$data,'settings'=>$settings]);
    }
    public function announcelist(Request $request, Announces $announces){

        $data=Announces::all();
        $settings=Setting::first();

        return view('home.ANNOUNCElist',['data'=>$data,'settings'=>$settings]);
    }
    public function newslist(Request $request, News $news,Events $events){

        $data=News::all();
        $events=Events::all();
        $settings=Setting::first();

        return view('home.newslist',['data'=>$data,'settings'=>$settings,'events'=>$events]);
    }
    public function teacherlist(Request $request, Teachers $teachers,Events $events){

        $data=Teachers::all();
        $events=Events::all();

        $settings=Setting::first();

        return view('home.teachers',['data'=>$data,'settings'=>$settings,'events'=>$events]);
    }
    public function news(Request $request, News $News,$id){

        $data=News::find($id);
        $othernews=News::all();
        $images=Images::all();
        $settings=Setting::first();

        return view('home.newsdetail',['data'=>$data,'settings'=>$settings,'othernews'=>$othernews,'images'=>$images]);
    }
    public function event(Request $request, Events $Events,$id){

        $data=Events::find($id);
        $otherevent=Events::all();
        $settings=Setting::first();

        return view('home.eventdetail',['data'=>$data,'settings'=>$settings,'otherevent'=>$otherevent]);
    }

    public function teacher(Request $request, Teachers $Teachers,$id){

        $data=Teachers::find($id);
        $reviews=Comment::where('teacher_id',$id)->get();
        $settings=Setting::first();

        return view('home.teacherdetail',['data'=>$data,'settings'=>$settings,'reviews'=>$reviews]);
    }

    public function announce(Request $request,Announces $announce,$id){

        $data=Announces::find($id);
        $otherannounces=Announces::all();
        $settings=Setting::first();

        return view('home.announcedetail',['data'=>$data,'settings'=>$settings,'otherannounces'=>$otherannounces]);
    }
    public function faculty(Request $request,Faculties $faculties, Teachers $Teachers,$id){

        $faculty=Faculties::find($id);
        $allfaculties=Faculties::all();

        $pdata=self::mainCategoryList(0);

        $teacher=$faculty->teachers;

        $settings=Setting::first();

        $flist=self::mainCategoryList($id);

        return view('home.faculties',['data'=>$faculty,'teac'=>$teacher,'flist'=>$flist,'settings'=>$settings,'pdata'=>$pdata,'allfaculties'=>$allfaculties]);
    }

}
