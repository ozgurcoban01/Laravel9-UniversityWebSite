<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use Illuminate\Http\Request;

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
        return view('admin.teachers.create');
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

        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->bdate=$request->bdate;
        $data->rdate=$request->rdate;
        $data->degree=$request->degree;
        $data->lessons=$request->lessons;
        $data->email=$request->email;
        $data->description=$request->description;

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
        $data=Teachers::find($id);
        return view('admin.teachers.edit',['data'=>$data]);
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

        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->bdate=$request->bdate;
        $data->rdate=$request->rdate;
        $data->degree=$request->degree;
        $data->lessons=$request->lessons;
        $data->email=$request->email;
        $data->description=$request->description;

        $data->save();
        return redirect('admin/teachers');
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

        $data->delete();
        return redirect('admin/teachers');
    }
}
