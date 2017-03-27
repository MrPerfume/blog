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



Route::group(['middleware' => ['web']], function () {

    Route::get('/test', 'IndexController@index');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::any('admin/index', 'Admin\IndexController@index');
    Route::any('admin/info', 'Admin\IndexController@info');
    Route::any('admin/crypt', 'Admin\LoginController@crypt');

    Route::any('admin/login', 'Admin\LoginController@login');
    Route::get('admin/code', 'Admin\LoginController@code');
    Route::get('admin/getcode', 'Admin\LoginController@getcode');


});