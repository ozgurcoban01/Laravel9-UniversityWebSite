<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index(){
        return view('admin.index');

    }
    public function settings(){

        $data=Setting::first();
        if($data===null)
        {
            $data=new Setting;
            $data->title='Project Title';
            $data->save();
            $data=Setting::first();
        }

        return view('admin.teachers.settings',['data'=>$data]);

    }

    public function update(Request $request){

        $id=$request->input('id');

        $data=Setting::find($id);

        if($data->image!=null){
            Storage::delete($data->image);
        }


        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->address=$request->input('address');
        $data->phone=$request->input('phone');
        $data->fax=$request->input('fax');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtppassword=$request->input('smtppassword');
        $data->smtpport=$request->input('smtpport');
        $data->facebook=$request->input('facebook');
        $data->instagram=$request->input('instagram');
        $data->youtube=$request->input('youtube');
        $data->aboutus=$request->input('aboutus');
        $data->terms=$request->input('terms');
        $data->privacy=$request->input('privacy');
        $data->status=$request->input('status');



        if($request->file('icon')){
            $data->icon=$request->file('icon')->store('settings_icon');
        }

        $data->save();

        return redirect()->route('admin.settings');


    }

}
