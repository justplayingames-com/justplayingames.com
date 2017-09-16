<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'fw-block-bl'], function () 
{
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/games', function () {
        return view('games');
    });

    Route::group(['middleware' => 'fw-allow-wl'], function () 
    {
        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('auth/github', 'Auth\SocialiteController@redirectToProvider');
        Route::get('auth/github/callback', 'Auth\SocialiteController@handleProviderCallback');
    });
});
