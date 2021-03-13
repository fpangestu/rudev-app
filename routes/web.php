<?php

use Illuminate\Support\Facades\Route;

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
<<<<<<< HEAD
    return view('welcome');
});
=======
    return view('web');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 2339f7a0bddd9bb5e8f5bca638673e13ec5f190e
