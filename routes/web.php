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
Route::get('/index', function () {
    return view('index');
});
Route::group(['prefix' => 'admin'], function() {
   Route::get('chats/{id}', 'ChatController@showChat');
   Route::get('chats', 'ChatController@create');
   Route::post('chats/storage', 'ChatController@store');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/index', 'ChatController@index');

Route::get('/index/{id?}', 'ChatController@show');

Route::get('/show/{id}', function () {
    return view('show');
});

Route::get('/show/{id}', 'ChatController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
