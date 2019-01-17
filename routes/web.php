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

Route::get('/home', 'UserController@index')->name('home')->middleware('user');

Route::group(['prefix' => '/', 'middleware' => 'user'], function(){
    Route::get('home', 'UserController@home')->name('user.home');
    Route::get('message', 'UserController@message')->name('user.message');
    Route::get('profil/edit', 'UserController@profilEdit')->name('user.edit');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('home', 'AdminController@home')->name('admin.home');
    Route::get('message', 'AdminController@listOfMessage')->name('admin.list.of.message');
    Route::get('chat/with', 'AdminController@chatWith')->name('admin.chat.with');
});
