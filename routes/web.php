<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'account'], function(){

    Route::get('/profile', function(){
        return "Profile";
    });
    Route::get('/login',function(){
        return "Login";
    });
    Route::get('/logout',function(){
        return "Logout";
    });
    Route::get('/singup',function(){
        return "Signup";
    });
    Route::get('/updateprofile',function(){
        return "updateprofile";
    });
});
