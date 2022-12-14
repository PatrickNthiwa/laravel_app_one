<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/profile/{user}', '\App\Http\Controllers\ProfilesController@index')->name('profile.show');


Route::get('/p/create', '\App\Http\Controllers\PostsController@create');


Route::post('/p', '\App\Http\Controllers\PostsController@store');
