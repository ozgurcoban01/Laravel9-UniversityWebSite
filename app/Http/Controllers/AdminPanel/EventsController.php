<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Events::all();
        return view('admin.events.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.events.create');
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
        $data=new Events();

        $data->name=$request->name;
        $data->location=$request->location;
        $data->sdate=$request->sdate;
        $data->edate=$request->edate;
        $data->stime=$request->stime;
        $data->etime=$request->etime;
        $data->aboutevent=$request->aboutevent;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('event_images');
        }

        $data->save();
        return redirect('admin/events');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events,$id)
    {
        //
        $data=Events::find($id);
        return view('admin.events.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events,$id)
    {
        //
        $data=Events::find($id);
        return view('admin.events.edit',['data'=>$data]);
    }
    public function sedit(Events $events,$id)
    {
        //
        $data=Events::find($id);
        return view('admin.events.sedit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events,$id)
    {
        //
        $data=Events::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->location=$request->location;
        $data->sdate=$request->sdate;
        $data->edate=$request->edate;
        $data->stime=$request->stime;
        $data->etime=$request->etime;
        $data->aboutevent=$request->aboutevent;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('event_images');
        }

        $data->save();
        return redirect('admin/events');
    }

    public function supdate(Request $request, Events $events,$id)
    {
        //
        $data=Events::find($id);

        Storage::delete($data->image);
        $data->name=$request->name;
        $data->location=$request->location;
        $data->sdate=$request->sdate;
        $data->edate=$request->edate;
        $data->stime=$request->stime;
        $data->etime=$request->etime;
        $data->aboutevent=$request->aboutevent;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('event_images');
        }

        $data->save();
        return redirect()->route('admin.events.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events,$id)
    {
        //
        $data=Events::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/events');
    }
}
