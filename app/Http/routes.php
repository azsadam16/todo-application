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

Route::get('/', 'TodoController@index');
Route::post('/', 'TodoController@store');

Route::get('/{id}/edit',['as'=>'getEditRoute','uses'=>'TodoController@edit']);
Route::post('/{id}/edit',['as'=>'postEditRoute','uses'=>'TodoController@update']);

Route::post('/{id}/delete',['as'=>'deleteTask','uses'=>'TodoController@destroy']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
