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

Auth::routes(['register' => false, 'password.request' => false, 'password.reset' => false]);

Route::namespace('Web')->domain('rendersurfer.' . env('APP_URL'))->group(function () {
    Route::get('/{vueroute?}', 'RendersurferController@index')->where('vueroute', '[\/\w\.-]*')->name('rendersurfer.index');
});

Route::namespace('Web')->domain(env('APP_URL'))->group(function () {
    Route::get('/', 'SiteController@portfolio')->name('www.portfolio');
    Route::get('/about', 'SiteController@about')->name('www.about');

    Route::get('/2021/', function () {
        return view('portfolio2021');
    });
    Route::get('/2021/about', function () {
        return view('about2021');
    });
});
