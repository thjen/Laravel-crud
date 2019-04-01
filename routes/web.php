<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'TaskController@index');
Route::post('login', 'TaskController@login')->name('login');
Route::get('add', 'TaskController@add');
Route::post('insert/request', 'TaskController@insert')->name('insert');

Route::get('edit/{task_id}', 'TaskController@edit');
Route::post('update/{task_id}', 'TaskController@update')->name('update');
Route::get('delete/{task_id}', 'TaskController@delete');

Route::get('upload', 'TaskController@upload');
Route::post('upload/request', 'TaskController@uploadRequest')->name('upload');
Route::get('file/{uuid}/download', 'TaskController@download')->name('download');
