<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

############################Router Auth Laravel###################################
Auth::routes();

############################Router Login Page####################################
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});





############################Router Dashboard Basic###################################
Route::group(['middleware' => ['auth']], function () {

    //Home Router
    Route::get('/dashboard', 'HomeController@index')->name('home');

    //Complete Information Router
    Route::resource('completeInfo', 'completeInfoController');
});



