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

    if (Auth::guest()) {
        return view('auth.login');
    } elseif (Auth::user()) {
        return view('home');
    } else {
        return response('NOT FOUND', 404);
    }

});

Auth::routes();

Route::get('/inicio', 'HomeController@index');
