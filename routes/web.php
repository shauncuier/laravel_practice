<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/name/{namevalue}',[DemoController::class, 'MyName'] );

