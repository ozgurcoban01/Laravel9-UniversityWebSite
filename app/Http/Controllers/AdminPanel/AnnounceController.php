<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Announces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Announces::all();

        return view('admin.announce.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.announce.create');
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
        $data=new Announces();

        $data->sdate=$request->sdate;
        $data->aboutannounce=$request->aboutannounce;
        $data->description=$request->description;

        $data->save();
        return redirect('admin/announce');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News $Announce
     * @return \Illuminate\Http\Response
     */
    public function show(Announces $Announce, $id)
    {
        //
        $data=Announces::find($id);
        return view('admin.announce.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News $Announce
     * @return \Illuminate\Http\Response
     */
    public function edit(Announces $Announce, $id)
    {
        //
        $data=Announces::find($id);
        return view('admin.announce.edit',['data'=>$data]);
    }
    public function sedit(Announces $Announce, $id)
    {
        //
        $data=Announces::find($id);
        return view('admin.announce.sedit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News $Announce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announces $Announce, $id)
    {
        //
        $data=Announces::find($id);

        $data->sdate=$request->sdate;
        $data->udate=$request->udate;
        $data->aboutannounce=$request->aboutannounce;
        $data->description=$request->description;

        $data->save();
        return redirect('admin/announce');
    }

    public function supdate(Request $request, Announces $Announce, $id)
    {
        //
        $data=Announces::find($id);

        $data->sdate=$request->sdate;
        $data->udate=$request->udate;
        $data->aboutannounce=$request->aboutannounce;
        $data->description=$request->description;

        $data->save();
        return redirect()->route('admin.announce.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News $Announce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announces $Announce, $id)
    {
        //
        $data=Announces::find($id);

        $data->delete();
        return redirect('admin/announce');
    }
}
