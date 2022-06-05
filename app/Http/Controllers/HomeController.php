<?php

namespace App\Http\Controllers;

use App\Models\Announces;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Courses;
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

    public function faculty(Request $request,Faculties $faculties,$id){

        $allfaculties=Faculties::all();

        $faculty=Faculties::find($id);
        $content=$faculty->content;

        $news=Content::where('type','=','News')->get();
        $ann=Content::where('type','=','Announce')->get();
        $event=Content::where('type','=','Event')->get();

        $teacher=$faculty->teachers;


        $settings=Setting::first();

        $flist=self::mainCategoryList($id);

        return view('home.faculties',['data'=>$faculty,'settings'=>$settings,'teac'=>$teacher,'allfaculties'=>$allfaculties,'flist'=>$flist,'content'=>$content,'news'=>$news,'ann'=>$ann,'event'=>$event]);
    }

    public function faqs(){

        $data=FAQ::all();
        $settings=Setting::first();

        return view('home.faq',['data'=>$data,'settings'=>$settings]);
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
    public function termsofuse(){

        $settings=Setting::first();

        return view('home.termofuse',['settings'=>$settings]);
    }
    public function privacy(){

        $settings=Setting::first();

        return view('home.privacy',['settings'=>$settings]);
    }



    public function index(){

        $content=Content::all();
        $faculties=Faculties::all();
        $sliderdata=Teachers::all();
        $eventdata=Events::all();
        $announcedata=Announces::limit(6)->get();
        $news=News::all();
        $faq=Faq::limit(3)->get();
        $settings=Setting::first();

        return view('home.index',['teachers'=>$sliderdata,'eventdata'=>$eventdata,'content'=>$content,'announces'=>$announcedata,'news'=>$news,'settings'=>$settings,'faq'=>$faq,'faculties'=>$faculties]);
    }



    public function teacher(Request $request, Teachers $Teachers,$id){

        $data=Teachers::find($id);
        $reviews=Comment::where('teachers_id',$id)->get();
        $settings=Setting::first();

        return view('home.teacherdetail',['data'=>$data,'settings'=>$settings,'reviews'=>$reviews]);
    }

    public function teacherlist(Request $request, Teachers $teachers,Events $events){

        $data=Teachers::all();
        $events=Events::all();

        $settings=Setting::first();

        return view('home.teachers',['data'=>$data,'settings'=>$settings,'events'=>$events]);
    }

    public function eventlist(Request $request, Events $Events){

        $data=Content::where('type','=','Event')->get();
        $settings=Setting::first();

        return view('home.eventlist',['data'=>$data,'settings'=>$settings]);
    }
    public function event(Request $request, Events $Events,$id){

        $data=Content::find($id);
        $otherevent=Content::where('type','=','Event')->get();
        $images=Images::all();
        $settings=Setting::first();

        return view('home.eventdetail',['data'=>$data,'settings'=>$settings,'otherevent'=>$otherevent,'images'=>$images]);
    }

    public function announcelist(Request $request, Announces $announces){

        $data=Content::where('type','=','Announce')->get();
        $settings=Setting::first();

        return view('home.announcelist',['data'=>$data,'settings'=>$settings]);
    }
    public function announce(Request $request,Announces $announce,$id){

        $data=Content::find($id);
        $otherannounces=Content::where('type','=','Announce')->get();
        $images=Images::all();
        $settings=Setting::first();

        return view('home.announcedetail',['data'=>$data,'settings'=>$settings,'otherannounces'=>$otherannounces,'images'=>$images]);
    }

    public function newslist(Request $request, News $news,Events $events){

        $data=Content::where('type','=','News')->get();
        $events=Content::where('type','=','Event')->get();
        $settings=Setting::first();

        return view('home.newslist',['data'=>$data,'settings'=>$settings,'events'=>$events]);
    }

    public function news(Request $request, News $News,$id){

        $data=Content::find($id);
        $othernews=Content::where('type','=','News')->get();
        $images=Images::all();
        $settings=Setting::first();

        return view('home.newsdetail',['data'=>$data,'settings'=>$settings,'othernews'=>$othernews,'images'=>$images]);
    }






    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function logoutuseradmin(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
//        dd($request);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
