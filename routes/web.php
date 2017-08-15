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


Route::get('/', 'PostsController@index');
Route::get('/post/{post}','PostsController@show');
Route::group(['prefix'=>'admin/','middleware' => 'auth'],function () {
    Route::get('/','AdminController@index');
	Route::get('post/create','PostsController@create');
    Route::get('post/edit/{post}','PostsController@edit');
    Route::post('/post','PostsController@store');
    Route::patch('/post/{post}','PostsController@update');
    Route::delete('/post/{post}','PostsController@destroy');
    Route::post('/post/{post}/comment/','CommentController@store');
    Route::patch('/post/{post}/comment/{comment_id}','CommentController@update');
    Route::delete('/post/{post}/comment/{comment_id}','CommentController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
