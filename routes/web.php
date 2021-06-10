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

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/hosting', 'App\Http\Controllers\MainController@hosting');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::get('/about-us', 'App\Http\Controllers\MainController@about_us');

Route::post('/check', 'App\Http\Controllers\MainController@review_check');



