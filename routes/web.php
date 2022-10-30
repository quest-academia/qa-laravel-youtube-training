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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'MovieController@index')->name('home');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('login','Auth\LoginController@login')->name('login.post');
});

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('login/new','Auth\LoginController@showLoginForm')->name('loginnew');
Route::get('login/new/{pw}','Auth\DetailController@showDetailForm')->name('detail');
Route::post('login/new/{pw}','Auth\DetailController@signup')->name('signup.post');

Route::get('users', 'UserController@list')->name('user.list');

Route::get('movie', 'MovieController@index')->name('movie.index');
