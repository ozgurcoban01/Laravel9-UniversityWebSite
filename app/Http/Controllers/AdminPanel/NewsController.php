<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=News::all();
        return view('admin.news.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news.create');
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
        $data=new News();

        $data->name=$request->name;
        $data->location=$request->location;
        $data->date=$request->date;
        $data->aboutnews=$request->aboutnews;
        $data->description=$request->description;

        if($request->file('image')){
            $data->image=$request->file('image')->store('news_images');
        }

        $data->save();
        return redirect('admin/news');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News $News
     * @return \Illuminate\Http\Response
     */
    public function show(News $News,$id)
    {
        //
        $data=News::find($id);
        return view('admin.news.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News $News
     * @return \Illuminate\Http\Response
     */
    public function edit(News $News,$id)
    {
        //
        $data=News::find($id);
        return view('admin.news.edit',['data'=>$data]);
    }
    public function sedit(News $News,$id)
    {
        //
        $data=News::find($id);
        return view('admin.news.sedit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News $News
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $News,$id)
    {
        //
        $data=News::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->location=$request->location;
        $data->date=$request->date;
        $data->aboutnews=$request->aboutnews;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('news_images');
        }

        $data->save();
        return redirect('admin/news');
    }

    public function supdate(Request $request, News $News,$id)
    {
        //
        $data=News::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->location=$request->location;
        $data->date=$request->date;
        $data->aboutnews=$request->aboutnews;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('news_images');
        }

        $data->save();
        return redirect()->route('admin.news.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News $News
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $News,$id)
    {
        //
        $data=News::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/news');
    }
    public function description(News $News,$id)
    {
        //
        $data=News::find($id);
        return view('admin.newsblade.descriptionpage',['data'=>$data]);
    }
}
