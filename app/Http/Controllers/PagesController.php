<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home(){
       
        return view('myapp.home');
    }
    function welcome(){
        return view('myapp.hello');
    }
}
