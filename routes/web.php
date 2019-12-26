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
Route::get('/kviz_create', 'KvizController@getCreate')->name('create');
Route::post('quiz/add','KvizController@postAdd');
Route::get('quiz/show/{id}','KvizController@getShow');
Route::get('quiz/all','KvizController@getAll');
Route::post('question/add','KvizController@postAdd');
Route::get('/my_kviz', 'KvizController@getView')->name('View');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('{url}', 'Staticcontroller@getindex');

