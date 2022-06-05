<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Courses::all();
        return view('admin.courses.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers=Teachers::all();
        return view('admin.courses.create',['teachers'=>$teachers]);
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
        $data=new Courses();

        $data->name=$request->name;
        $data->teachers_id=$request->teachers_id;
        $data->price=$request->price;
        $data->aboutcourse=$request->aboutcourse;

        if($request->file('image')){
            $data->image=$request->file('image')->store('courses_images');
        }

        $data->save();
        return redirect('admin/courses');
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
        $data=Courses::find($id);
        return view('admin.courses.show',['data'=>$data]);
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
        $teachers=Teachers::all();
        $data=Courses::find($id);
        return view('admin.courses.edit',['data'=>$data,'teachers'=>$teachers]);
    }

    public function sedit($id)
    {
        //
        $teachers=Teachers::all();
        $data=Courses::find($id);
        return view('admin.courses.sedit',['data'=>$data,'teachers'=>$teachers]);
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
        $data=Courses::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->price=$request->price;
        $data->teachers_id=$request->teachers_id;
        $data->aboutcourse=$request->aboutcourse;
        if($request->file('image')){
            $data->image=$request->file('image')->store('courses_images');
        }

        $data->save();
        return redirect('admin/courses');
    }

    public function supdate(Request $request, Courses $Courses,$id)
    {
        //
        $data=Courses::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->price=$request->price;
        $data->teachers_id=$request->teachers_id;
        $data->aboutcourse=$request->aboutcourse;
        if($request->file('image')){
            $data->image=$request->file('image')->store('courses_images');
        }

        $data->save();
        return redirect()->route('admin.courses.show', ['id' => $id]);
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
        $data=Courses::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/courses');
    }
    public function description(Courses $Courses,$id)
    {
        //
        $data=Courses::find($id);
        return view('admin.coursesblade.descriptionpage',['data'=>$data]);
    }
}
