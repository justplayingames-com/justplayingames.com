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

Route::group(['middleware' => 'fw-block-bl'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/games', function () {
        return view('games');
    });

    Route::group(['middleware' => 'fw-allow-wl'], function () {
        
        // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');
        
        Route::get('auth/{oauth_provider}', 'Auth\SocialiteController@redirectToProvider');
        Route::get('auth/{oauth_provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

        Route::get('/user', 'UserController@index')->name('user');
    });
});
