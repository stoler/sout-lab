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
    'uses' => 'AdminController@index',
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

Route::post('admin/file-upload',[
    'uses' => 'JQueryFileUpload@index',
    'as' => 'file-upload'
]);

Route::get('admin/file-upload',[
    'uses' => 'JQueryFileUpload@index',
    'as' => 'file-upload'
]);

Route::delete('admin/file-upload',[
    'uses' => 'JQueryFileUpload@index',
    'as' => 'file-upload'
]);

Route::post('admin/seo-upload',[
    'uses' => 'JQueryFileUpload@index',
    'as' => 'seo-upload'
]);

Route::get('admin/seo-upload',[
    'uses' => 'JQueryFileUpload@index',
    'as' => 'seo-upload'
]);

Route::delete('admin/seo-upload',[
    'uses' => 'JQueryFileUpload@index',
    'as' => 'seo-upload'
]);

/*************** Users *********************/
Route::get('admin/user',[
    'uses' => 'UserController@getList',
    'as' => 'user-list'
]);

Route::get('admin/user-item/{id}',[
    'uses' => 'UserController@getItem',
    'as' => 'user-item'
]);

Route::post('admin/user',[
    'uses' => 'UserController@addItem',
    'as' => 'user-add'
]);

Route::post('admin/user-update/{id}',[
    'uses' => 'UserController@updateItem',
    'as' => 'user-update'
]);

Route::get('admin/user-delete/{id}',[
    'uses' => 'UserController@deleteItem',
    'as' => 'user-delete'
]);

/*************** /Users ********************/
/*************** Advant ********************/
Route::post('admin/advant-update/{id}',[
    'uses' => 'AdvantController@updateItem',
    'as' => 'advant-update'
]);
/*************** /Advant ********************/