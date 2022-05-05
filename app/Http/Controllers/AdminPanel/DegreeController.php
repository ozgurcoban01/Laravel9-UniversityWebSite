<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Degrees;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Degrees::all();
        return view('admin.degree.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.degree.create');
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
        $data=new Degrees();

        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();
        return redirect('admin/degree');
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
        $data=Degrees::find($id);

        return view('admin.degree.show',['data'=>$data]);
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
        $data=Degrees::find($id);
        return view('admin.degree.edit',['data'=>$data]);
    }
    public function sedit($id)
    {
        //
        $data=Degrees::find($id);
        return view('admin.degree.sedit',['data'=>$data]);
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
        $data=Degrees::find($id);

        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();
        return redirect('admin/degree');
    }

    public function supdate(Request $request, $id)
    {
        //
        $data=Degrees::find($id);

        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();
        return redirect()->route('admin.degree.show', ['id' => $id]);
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
        $data=Degrees::find($id);
        $data->delete();
        return redirect('admin/degree');
    }
}
