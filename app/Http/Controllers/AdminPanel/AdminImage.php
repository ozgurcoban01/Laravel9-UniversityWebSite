<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminImage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nid)
    {
        $news=News::find($nid);
       // $images=Image::where('news_id',$nid);
        $images=DB::table('images')->where('news_id',$nid)->get();

        return view('admin.image.index',[
            'news'=>$news,
            'images'=>$images

        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$nid)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$nid)
    {
        $data=new Images();

        $data->news_id=$nid;
        $data->title=$request->title;

        if($request->file('image')){
            $data->image=$request->file('image')->store('news_galery');
        }

        $data->save();
        return redirect()->route('admin.image.list',['nid'=>$nid]);
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

    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nid,$id)
    {
        //
        $news=News::find($nid);
        $images=Images::find($id);

        return view('admin.image.edit',['news'=>$news,'images'=>$images]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$nid, $id)
    {
        //
        $data=Images::find($id);

        Storage::delete($data->image);

        $data->news_id=$nid;

        $data->title=$request->title;

        if($request->file('image')){
            $data->image=$request->file('image')->store('news_galery');
        }

        $data->save();
        return redirect()->route('admin.image.list',['nid'=>$nid]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nid,$id)
    {
        //
        $data=Images::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect()->route('admin.image.list',['nid'=>$nid]);
    }
}
