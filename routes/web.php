<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/name/{firstName}/{middleName}/{lastName}', [DemoController::class, 'MyName']);
