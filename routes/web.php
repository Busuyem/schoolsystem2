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

Route::get('/', 'StudentsController@login')->name('login');

Route::post('/login', 'StudentsController@postLogin')->name('login.post');

Route::group(['Middleware' => 'access'], function(){

Route::get('/apply', 'StudentsController@apply')->name('apply')->middleware('access');

Route::post('/apply', 'StudentsController@registerStudent')->name('student.register');

Route::get('/confirm', 'StudentsController@recover')->name('recover');

Route::post('/confirm', 'StudentsController@recoverCheck')->name('recover.check');

Route::get('/confirm/{student}', 'StudentsController@getConfirm')->name('recover.get');

Route::get('/confirm/{id}', 'StudentsController@confirm')->name('confirm');

Route::get('/confirm/{student}/status', 'StudentsController@status')->name('status');

Route::get('/confirm/{student}/detail', 'StudentsController@detail')->name('detail');



});


