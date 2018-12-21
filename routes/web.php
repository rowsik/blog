<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
// |
// */
// // //Authenticationgin
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

//Registration 
Route::get('auth/register','Auth\Auth\AuthController@getRegister');
Route::post('auth/register','Auth\Auth\AuthController@postRegister');
Auth::routes();

Route::get('blog/{slug}',['as' => 'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogController@getindex','as'=>'blog.index']);
Route::get('/','PagesController@getIndex');  
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::resource('posts',"PostController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
