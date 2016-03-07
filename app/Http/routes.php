<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/", ["uses" => "DrustvoController@index"]);

Route::get("prijavljeni", ["uses" => "DrustvoController@prijavljeni"]);

Route::get("shranjeno", ["uses" => "DrustvoController@shranjeno"]);

Route::get("smarna", ["uses" => "DrustvoController@smarna"]);
Route::post("smarna", ["uses" => "DrustvoController@store"]);

Route::get("/{id}", ["uses" => "DrustvoController@detajli"]);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
