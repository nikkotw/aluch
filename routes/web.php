<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});
Route::get('registro', function () {
    return view('auth.register');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register', 'UserController@create')->name('register');
Route::post('acceso', 'UserController@login')->name('login');

Route::post('logout', 'UserController@logout')->name('logout');
