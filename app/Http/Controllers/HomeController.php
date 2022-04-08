<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function test(){
        echo view('home.test');
    }

    public function param($id,$id2){
        echo 'param one is',$id,'<br>';
        echo 'param two is',$id2;
        return view('home.test2',
            [
                'id'=>$id
            ]);
    }

    public function save(){
        echo 'save function';
        echo 'Name: ',$_REQUEST['fname'],'<br>',
            'Last Name: ',$_REQUEST['lname'];
    }
}
