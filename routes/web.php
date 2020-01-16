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

Route::get('/', 'WWWController@splashscreen')->name('www.splashscreen');
Route::get('/portfolio', 'WWWController@portfolio')->name('www.portfolio');
Route::get('/more', 'WWWController@more')->name('www.more');

Auth::routes(['register' => false]);

Route::get('/rendersurfer', 'RenderSurferController@index')->name('rendersurfer.index');
