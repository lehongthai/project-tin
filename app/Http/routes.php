<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*get list post*/
Route::group(['prefix' => 'admin'/*, 'middleware' => 'auth'*/], function (){
	Route::group(['prefix' => 'post'], function () {
		Route::get('list', ['as' => 'admin.post.list', 'uses' => 'PostController@getList']);
		Route::get('add', ['as' => 'admin.post.getAdd', 'uses' => 'PostController@getAdd']);
		Route::post('add', ['as' => 'admin.post.postAdd', 'uses' => 'PostController@postAdd']);
		Route::get('delete/{id?}', ['as' => 'admin.post.getDelete', 'uses' => 'PostController@getDelete']);
		Route::get('edit/{id?}', ['as' => 'admin.post.getEdit', 'uses' => 'PostController@getEdit']);
		Route::post('edit/{id?}', ['as' => 'admin.post.postEdit', 'uses' => 'PostController@postEdit']);
	});
});