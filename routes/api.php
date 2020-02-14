<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('API')->prefix('v1')->group(function(){
    Route::get('/user', function( Request $request ){
        return $request->user();
    });

    /*
    |-------------------------------------------------------------------------------
    | Get All Renders
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Controller:     API\RendersController@index
    | Method:         GET
    | Description:    Gets all of the renders in the application
    */
    Route::get('/renders', 'RendersController@index');

    /*
    |-------------------------------------------------------------------------------
    | Get An Individual Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Controller:     API\RendersController@show
    | Method:         GET
    | Description:    Gets an individual render
    */
    Route::get('/renders/{id}', 'RendersController@show');

    /*
    |-------------------------------------------------------------------------------
    | Adds a New Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Controller:     API\RendersController@store
    | Method:         POST
    | Description:    Adds a new render to the application
    */
    Route::post('/renders', 'RendersController@store');
});
