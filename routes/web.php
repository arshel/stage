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
route::get('/', 'TasksController@index');

route::get('/task', 'TasksController@index');

route::get('task/insert', 'TasksController@create');

route::post('task/store', 'TasksController@store');

route::post('/task/update/{id}', 'TasksController@update');

route::get('/task/{id}/destroy', 'TasksController@destroy');

route::get('/task/{task}', 'TasksController@show');

route::get('/task/{id}/edit', 'TasksController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
