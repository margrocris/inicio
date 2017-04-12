<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('agregar-usuario', [
    'uses' => 'HomeController@getCreateUser',
    'as'    => 'admin.getCreateUser'
]);

Route::post('agregar-usuario', [
    'uses'  => 'HomeController@postCreateUser',
    'as'    => 'admin.postCreateUser'
]);

Route::get('listar-usuarios', [
    'uses'  => 'HomeController@getListUser',
    'as'    => 'admin.getListUser'
]);