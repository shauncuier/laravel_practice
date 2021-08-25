<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

//Route::get('/', MyController::class);


Route::resource('photos', PhotoController::class);

