<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', MyController::class);


Route::resource('photos', PhotoController::class);




Route::get('myself', [HomeController::class,'MySelf']);
Route::get('yourself', [HomeController::class,'YourSelf']);






















