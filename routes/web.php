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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// FB oauth routes

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

// Application auth protected routes

Route::group(['middleware' => ['auth:web']], function () {

    // Contact Routes

    Route::get('/contact/',       'ContactController@index');

    Route::get('/contact/create', 'ContactController@create');
    Route::post('/contact/create', 'ContactController@store');
    

});

