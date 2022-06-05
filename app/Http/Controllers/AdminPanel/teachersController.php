<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Degrees;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Faculties;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Teachers::all();
        return view('admin.teachers.index',['data'=>$data]);
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
        $degree=Degrees::all();
        return view('admin.teachers.create',['facultylist'=>$facultylist,'degree'=>$degree]);
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
        $data=new Teachers();

        $data->faculties_id=$request->faculties_id;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->bdate=$request->bdate;
        $data->rdate=$request->rdate;
        $data->degree=$request->degree;
        $data->email=$request->email;
        $data->description=$request->description;

        if($request->file('image')){
            $data->image=$request->file('image')->store('teacher_images');
        }

        $data->save();
        return redirect('admin/teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show(Teachers $teachers,$id)
    {
        //
        $data=Teachers::find($id);

        return view('admin.teachers.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function edit(Teachers $teachers,$id)
    {
        //
        $facultylist=Faculties::all();
        $degree=Degrees::all();
        $data=Teachers::find($id);
        return view('admin.teachers.edit',['data'=>$data,'facultylist'=>$facultylist,'degree'=>$degree]);
    }

    public function sedit(Teachers $teachers,$id)
    {

        //
        $facultylist=Faculties::all();
        $degree=Degrees::all();
        $data=Teachers::find($id);
        return view('admin.teachers.sedit',['data'=>$data,'facultylist'=>$facultylist,'degree'=>$degree]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teachers $teachers,$id)
    {
        //
        $data=Teachers::find($id);

        Storage::delete($data->image);

        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->bdate=$request->bdate;
        $data->faculties_id=$request->faculties_id;
        $data->rdate=$request->rdate;
        $data->degree=$request->degree;
        $data->email=$request->email;

        $data->description=$request->description;

        if($request->file('image')){
            $data->image=$request->file('image')->store('teacher_images');
        }

        $data->save();
        return redirect('admin/teachers');
    }

    public function supdate(Request $request, Teachers $teachers,$id)
    {
        //
        $data=Teachers::find($id);

        Storage::delete($data->image);
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->bdate=$request->bdate;
        $data->faculties_id=$request->faculties_id;
        $data->rdate=$request->rdate;
        $data->degree=$request->degree;
        $data->email=$request->email;

        if($request->file('image')){
            $data->image=$request->file('image')->store('teacher_images');
        }

        $data->description=$request->description;

        $data->save();
        return redirect()->route('admin.teachers.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teachers $teachers,$id)
    {
        //
        $data=Teachers::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/teachers');
    }
    public function description(Teachers $teachers,$id)
    {
        //
        $data=Teachers::find($id);
        return view('admin.teachersblades.descriptionpage',['data'=>$data]);
    }
}
