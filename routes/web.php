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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    /*     Route::get('/admin', 'AdminController@index')->name('home.admin');
    Route::get('/user', 'UserController@index')->name('home.user'); */
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/about', 'HomeController@about')->name('home.about');
    Route::get('/home/post', 'HomeController@post')->name('home.post');
    Route::get('/home/post2', 'HomeController@post2')->name('home.post2');
    Route::get('/add/post', 'PostController@create')->name('add.post');
    Route::Post('/add/post', 'PostController@store')->name('add.post');
});
