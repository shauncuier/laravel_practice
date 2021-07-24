<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function __invoke()
    {
        return "I am single action controller";
    }
}
