<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    // Route::get('logout', 'LogoutController@loGout')->name('logout');
    
});

// Route::group(['middleware' => 'auth:api'], function(){
//     // Users
//     Route::get('users', 'UserController@index')->middleware('isAdmin');
//     Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
// });



// Группа в которой прописанны Ссылки и маршруты для blog/app/Http/Controllers/Api/Auth/
Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Auth'], function () {

        Route::get('register', 'RegisterController@registerWiews')->name('register');
        Route::post('register/submit', 'RegisterController@store')->name('registerSubmit');
        Route::get('login', 'LoginController@loginWiews')->name('login');
        Route::post('login/submit', 'LoginController@suBmit')->name('loginSubmit');
        // Route::post('logout', function (){Auth::logout(); return redirect('/');})->name('logout');
        // Route::post('logout', 'LogoutController@logout')->middleware('auth:api')->name('logout');
        Route::post('logout', 'LogoutController@loGout')->name('logout');

    });
    });


    