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
Route::get('profile', 'HomeController@profile')->name('profile');

Route::get('comments', 'Admin\CommentsController@index')->name('comments.index');
Route::delete('comments/{id}/destroy', 'Admin\CommentsController@destroy')->name('comments.destroy');
Route::put('comments/{id}/change', 'Admin\UsersController@changeStatus')->name('comments.updateStatus');


Route::get('users', 'Admin\Userscontroller@index')->name('users.index');


Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware'	=>	'auth'], function(){


});

