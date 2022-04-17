<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        return view('admin.index');
    }

    public function blank(){
        return view('admin.blank');
    }
}
