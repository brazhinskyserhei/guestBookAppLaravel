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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('profile', 'ProfileController@store')->name('profile.store');
    Route::post('comment', 'Admin\CommentsController@store')->name('comments.store');

});

Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('comments', 'CommentsController@index')->name('comments.index');
    Route::delete('comments/{id}/destroy', 'CommentsController@destroy')->name('comments.destroy');
    Route::put('comments/{id}/change', 'UsersController@changeStatus')->name('comments.updateStatus');
    Route::get('users', 'UsersController@index')->name('users.index');
});

