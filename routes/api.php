<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Группа в которой прописанны Ссылки и маршруты для test/app/Http/Controllers/Api/Auth/
Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Auth'], function () {

        Route::post('register/submit', 'RegisterController@suBmit');
        Route::post('login/submit', 'LoginController@suBmit');
        Route::get('/logout/submit', 'LogoutController@suBmit');
   
    });
    });


    
