<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('/', 'LandingController');
Route::resource('lorem', 'LoremController');
Route::resource('users', 'UsersController');
Route::resource('landing', 'LandingController');
Route::resource('custom', 'CustomController');