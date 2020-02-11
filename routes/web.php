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

Route::get('/', 'WWWController@portfolio')->name('www.portfolio');
Route::get('/about', 'WWWController@about')->name('www.about');

Route::get('/rendersurfer', function() {
    return view('rendersurfer');
})->name('rendersurfer.index');
