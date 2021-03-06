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

Route::get('/', function () {
	return View::make('index');
});
Route::get('register', array('as' => 'postregister', 'uses' => 'PassportController@register'));
Route::get('myaccount', array('as' => 'myaccount', 'uses' => 'PassportController@myaccount'));

Route::get('hello', function () {
	return View::make('index');
});
