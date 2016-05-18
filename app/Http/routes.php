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

Route::get('/', 'IndexController@index');
Route::get('login', 'IndexController@login');
Route::post('user/login', 'AuthController@login');
Route::post('user/register', 'AuthController@register');
Route::get('complaint', 'IndexController@complaint')->middleware('login');
Route::get('social/redirect/{provider}', 'AuthController@socialRedirect');
Route::get('social/handle/{provider}', 'AuthController@socialHandle');
Route::get('me', ['as' => 'profile', 'uses' => 'IndexController@me'])->middleware('login');
