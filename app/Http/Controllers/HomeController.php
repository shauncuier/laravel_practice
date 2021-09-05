<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowHome(){
        $Data=array('Bangladesh','India', 'Canada','Usa','UAE');
        return view('home', ['DataKey'=>$Data]);
    }
}
