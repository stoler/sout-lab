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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
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

/*
Route::group(['middleware' => ['web']], function () {
    //
});
*/
Route::get('/', [
    'uses' => 'ContentController@index',
    'as' => 'index'
]);

Route::get('admin', [
    'uses' => 'UserController@index',
    'as' => 'admin',
]);

Route::get('admin/download', [
    'uses' => 'ContentController@importToExcel',
    'as' => 'download',
]);

Route::get('admin/content-up', [
    'uses' => 'ContentController@exportFromExcel',
    'as' => 'content-up',
]);

Route::get('login', [
    'uses' => 'AuthController@getLogin',
    'as' => 'user-login'
]);

Route::post('login', [
    'uses' => 'AuthController@postLogin',
    'as' => 'user-login'
]);

Route::get('logout',[
    'uses' => 'AuthController@getLogout',
    'as' => 'logout'
]);
