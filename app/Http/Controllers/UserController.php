<?php

namespace App\Http\Controllers;

use App\Models\Ccomment;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Faculties;
use App\Models\Setting;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings=Setting::first();
        return view('home.user.index',['settings'=>$settings]);
    }

    public function comments()
    {
        //
        $comments=Ccomment::where('user_id','=',Auth::id())->get();
        $settings=Setting::first();
        $content=Content::all();

        return view('home.user.comments',['settings'=>$settings,'data'=>$comments,'content'=>$content]);
    }

    public function faculties()
    {
        //
        $comments=Faculties::where('user_id','=',Auth::id())->get();
        $settings=Setting::first();
        $teacher=Teachers::all();

        return view('home.user.faculties',['settings'=>$settings,'data'=>$comments,'teacher'=>$teacher]);
    }
    public function facultiesform(Request $request)
    {
        //
        $settings=Setting::first();
        $data=Faculties::all();
        return view('home.user.facultiesform',['settings'=>$settings,'data'=>$data]);
    }
    public function facultiesstore(Request $request)
    {
        //
        $data=new Faculties();

        $data->parent_id=$request->parent_id;
        $data->user_id=Auth::id();
        $data->name=$request->name;
        $data->aboutfaculty=$request->aboutfaculty;

        if($request->file('image')){
            $data->image=$request->file('image')->store('faculty_images');
        }

        $data->save();
        return redirect('userpanel/faculties');
    }

    public function contents()
    {
        //
        $comments=Content::where('user_id','=',Auth::id())->get();
        $settings=Setting::first();
        $teacher=Teachers::all();
        $facultylist=Faculties::all();

        return view('home.user.contents',['settings'=>$settings,'data'=>$comments,'teacher'=>$teacher,'facultylist'=>$facultylist]);
    }
    public function contentsform(Request $request)
    {
        //
        $settings=Setting::first();
        $data=Faculties::all();
        return view('home.user.contentsform',['settings'=>$settings,'facultylist'=>$data]);
    }
    public function contentsstore(Request $request)
    {
        //
        $data=new Content();

        $data->name=$request->name;
        $data->user_id=Auth::id();
        $data->location=$request->location;
        $data->date=$request->date;
        $data->aboutcontent=$request->aboutcontent;
        $data->description=$request->description;
        $data->type=$request->type;
        $data->faculties_id=$request->faculties_id;

        if($request->file('image')){
            $data->image=$request->file('image')->store('content_images');
        }

        $data->save();
        return redirect('userpanel/contents');
    }
    public function contentsdestroy($id)
    {
        $data=Content::find($id);
        $data->delete();

        return redirect(route('userpanel.contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function commentdestroy($id)
    {
        $data=Ccomment::find($id);
        $data->delete();

        return redirect(route('userpanel.comments'));
    }
    public function facultiesdestroy($id)
    {
        $data=Faculties::find($id);
        $data->delete();

        return redirect(route('userpanel.faculties'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
