<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Faculties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacultyController extends Controller
{


    protected $appends=[

        'getParentsTree'

    ];

    public static function getParentsTree($faculty,$name){

        if($faculty->parent_id==0){
            return $name;
        }
        $parent=Faculties::find($faculty->parent_id);
        $name=$parent->name .' > '. $name;
        return FacultyController::getParentsTree($parent,$name);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Faculties::all();
        return view('admin.faculty.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Faculties::all();
        return view('admin.faculty.create',['data'=>$data]);
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
        $data=new Faculties();

        $data->parent_id=$request->parent_id;
        $data->name=$request->name;
        $data->aboutfaculty=$request->aboutfaculty;

        if($request->file('image')){
            $data->image=$request->file('image')->store('faculty_images');
        }

        $data->save();
        return redirect('admin/faculty');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculties $Faculties
     * @return \Illuminate\Http\Response
     */
    public function show(Faculties $Faculties,$id)
    {
        //
        $data=Faculties::find($id);
        $datalist=Faculties::all();
        return view('admin.faculty.show',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculties $Faculties
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculties $Faculties,$id)
    {
        //
        $data=Faculties::find($id);
        $datalist=Faculties::all();
        return view('admin.faculty.edit',['data'=>$data,'datalist'=>$datalist]);
    }
    public function sedit(Faculties $Faculties,$id)
    {
        //
        $data=Faculties::find($id);
        $datalist=Faculties::all();
        return view('admin.faculty.sedit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculties $Faculties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculties $Faculties,$id)
    {
        //
        $data=Faculties::find($id);

        Storage::delete($data->image);

        $data->parent_id=$request->parent_id;
        $data->name=$request->name;
        $data->aboutfaculty=$request->aboutfaculty;

        if($request->file('image')){
            $data->image=$request->file('image')->store('faculty_images');
        }

        $data->save();
        return redirect('admin/faculty');
    }

    public function supdate(Request $request, Faculties $Faculties,$id)
    {
        //
        $data=Faculties::find($id);

        Storage::delete($data->image);

        $data->parent_id=$request->parent_id;
        $data->name=$request->name;
        $data->aboutfaculty=$request->aboutfaculty;

        if($request->file('image')){
            $data->image=$request->file('image')->store('faculty_images');
        }

        $data->save();
        return redirect()->route('admin.faculty.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculties $Faculties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculties $Faculties,$id)
    {
        //
        $data=Faculties::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/faculty');
    }
}
