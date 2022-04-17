<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\teachers;
use Illuminate\Http\Request;

class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=teachers::all();
        return view('admin.teachers.index',['data'=>$data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
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
        $data=new teachers();


        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->bdate=$request->bdate;
        $data->rdate=$request->rdate;
        $data->email=$request->email;
        $data->degree=$request->degree;
        $data->lessons=$request->lessons;
        $data->description=$request->description;

        $data->save();

        return redirect('admin/teachers');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show(teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function edit(teachers $teachers)
    {
        //

        return view('admin.teachers.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teachers $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(teachers $teachers)
    {
        //
    }
}
