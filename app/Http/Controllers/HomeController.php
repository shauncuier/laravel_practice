<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowHome(){
        $NewsHeadLine = "<h1>Home Page</h1>";
        return view('home', ['NewsHeadLineKey'=>$NewsHeadLine]);
    }
}
