<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Faculties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Content::all();
        return view('admin.content.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $facultylist=Faculties::all();
        return view('admin.content.create',['facultylist'=>$facultylist]);
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
        return redirect('admin/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Content $Content,$id)
    {
        //
        $data=Content::find($id);

        return view('admin.content.show',['data'=>$data]);
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
        $data=Content::find($id);
        $facultylist=Faculties::all();
        return view('admin.content.edit',['data'=>$data,'facultylist'=>$facultylist]);
    }
    public function sedit($id)
    {
        //
        $data=Content::find($id);
        $facultylist=Faculties::all();
        return view('admin.content.sedit',['data'=>$data,'facultylist'=>$facultylist]);
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

        $data=Content::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->location=$request->location;
        $data->status=$request->status;
        $data->date=$request->date;
        $data->aboutcontent=$request->aboutcontent;
        $data->description=$request->description;
        $data->type=$request->type;
        $data->faculties_id=$request->faculties_id;

        if($request->file('image')){
            $data->image=$request->file('image')->store('content_images');
        }

        $data->save();
        return redirect('admin/content');
    }

    public function supdate(Request $request, $id)
    {
        //

        $data=Content::find($id);

        $data->status=$request->status;

        $data->save();
        return redirect()->route('admin.content.show', ['id' => $id]);
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
        $data=Content::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/content');
    }
    public function description(Content $Content,$id)
    {
        //
        $data=Content::find($id);
        return view('admin.contentblade.descriptionpage',['data'=>$data]);
    }
}
