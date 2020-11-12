<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API-маршруты
|--------------------------------------------------------------------------
|
| Здесь вы можете зарегистрировать маршруты API для своего приложения. Эти
| маршруты загружаются RouteServiceProvider в группе, которая
| назначается группа промежуточного программного обеспечения "api". Наслаждайтесь созданием вашего API!
|нет, так как роут определять в файле routes/api.php - то префикс "api" будет добавлен ко всем роутам автоматически
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    // Route::get('logout', 'LogoutController@loGout')->name('logout');
});

// Группа в которой прописанны Ссылки для blog/resources/views/include/header.blade.php
Route::group(['namespace' => 'Links'], function () {

    Route::get('/', 'PassportController')->name('home');
    Route::get('/profile', 'AboutMeController@about')->name('profile');
     Route::get('/section', 'PassportController')->name('section');
    Route::get('/contact/date', 'PassportController@ut')->name('contact-date');
   Route::get('/signup', 'PassportController@oi')->name('signup');
});

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


    