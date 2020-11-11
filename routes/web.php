<?php

use Illuminate\Support\Facades\Route;



Route::get('/{any}', function () {
    return view('Index');
})->where('any','.*');



// Route::group(['namespace' => 'Ajax'], function () {
//     Route::resource('/article', 'ArticleController');
    
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
