<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function MySelf(){
        return "I love Programming";
    }
    
    function YourSelf(){
        return "Do you love Programming?";
    }
}
