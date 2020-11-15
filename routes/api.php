<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
//     Route::get('/logout', 'meController');
    
// });

// Route::middleware('auth:api')->group(function () {
//     Route::get('/logout', 'meController');
// });

// Route::group(['middleware' => 'auth:api'], function(){
//     // Users
//     Route::get('users', 'UserController@index')->middleware('isAdmin');
//     Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
// });



// Группа в которой прописанны Ссылки и маршруты для blog/app/Http/Controllers/Api/Auth/
Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Auth'], function () {

        // Route::get('register', 'RegisterController@registerWiews')->name('register');
        Route::post('register/submit', 'RegisterController@store');
        Route::get('login', 'LoginController@loginWiews')->name('home');
        Route::post('login/submit', 'LoginController@suBmit');
        // Route::post('logout', function (){Auth::logout(); return redirect('/');})->name('logout');
   
        Route::get('/logout', 'meController');
   
  
    });
    });


    