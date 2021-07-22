<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($firstName, $middleName, $lastName)
    {
        return 'First Name: ' . $firstName . '<br><br>Middle Name: ' . $middleName . '<br><br>Last Name: ' . $lastName;
    }
}
