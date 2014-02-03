<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Route to Contacts List CRUD
// Route::resource('contacts', 'ContactsController');

// Routes to Blog post CRUD
Route::get('posts', array('as' => 'index', 'uses' => 'PostController@index'));

Route::get('post/{id}', array('as' => 'post', 'uses' => 'PostController@show'));

Route::get('posts/new', array('as' => 'new', 'uses' => 'PostController@create'));

Route::post('posts/create', array('as' => 'create', 'uses' => 'PostController@store'));

Route::get('post/edit/{id}', array('as' => 'edit', 'uses' => 'PostController@edit'));

Route::put('post/update/{id}', array('as' => 'update', 'uses' => 'PostController@update'));

Route::delete('post/destroy/{id}', array('as' => 'destroy', 'uses' => 'PostController@destroy'));

// Route::resource('post', 'PostController');
