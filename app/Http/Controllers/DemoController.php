<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($firstName, $middleName, $lastName)
    {
        return view('demo', ['firstkey' => $firstName, "middlekey" => $middleName, "lastkey" => $lastName]);
    }
}
