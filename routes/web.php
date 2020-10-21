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

    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::post('/admin/uploadFile', 'AdminController@uploadFile')->name('admin.uploadFile');
});

Route::namespace('Web')->domain(env('APP_URL'))->group(function () {
    Route::get('/', 'SiteController@portfolio')->name('www.portfolio');
    Route::get('/about', 'SiteController@about')->name('www.about');
    Route::get('/about', 'SiteController@about')->name('www.about');
});
