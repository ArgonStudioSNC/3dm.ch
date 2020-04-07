<?php

use Illuminate\Support\Facades\Storage;
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
    | Get An Render Image
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/p/{filename}
    | Method:         GET
    | Description:    Gets a render image
    */
    Route::middleware('auth:api')->get('/renders/p/{filename}', function ($filename)
    {
        $disk = Storage::disk('rendersurfer');
        if($disk->exists($filename)){
            $file = $disk->get($filename);
            $meta = $disk->mimeType($filename);
            $response = Response::make($file, 200);
            $response->header("Content-Type", $meta);
            return $response;
        }
        abort(404);
    });

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

Route::namespace('API')->prefix('v1/filters')->group(function(){
    /*
    |-------------------------------------------------------------------------------
    | Get All Filters
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters
    | Controller:     API\FiltersController@index
    | Method:         GET
    | Description:    Gets all of the filters in the application
    */
    Route::get('/', 'FiltersController@index');

    /*
    |-------------------------------------------------------------------------------
    | Get All Offices
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/offices
    | Controller:     API\FiltersController@offices
    | Method:         GET
    | Description:    Gets all of the offices in the application
    */
    Route::get('/offices', 'FiltersController@offices');

    /*
    |-------------------------------------------------------------------------------
    | Get All Render Types
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/types
    | Controller:     API\FiltersController@types
    | Method:         GET
    | Description:    Gets all of the render types in the application
    */
    Route::get('/types', 'FiltersController@types');

    /*
    |-------------------------------------------------------------------------------
    | Get All Render Styles
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/styles
    | Controller:     API\FiltersController@styles
    | Method:         GET
    | Description:    Gets all of the render styles in the application
    */
    Route::get('/styles', 'FiltersController@styles');

    /*
    |-------------------------------------------------------------------------------
    | Get All Seasontimes
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/seasontimes
    | Controller:     API\FiltersController@seasontimes
    | Method:         GET
    | Description:    Gets all of the seasontimes in the application
    */
    Route::get('/seasontimes', 'FiltersController@seasontimes');

    /*
    |-------------------------------------------------------------------------------
    | Get All Weathers
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/weathers
    | Controller:     API\FiltersController@weathers
    | Method:         GET
    | Description:    Gets all of the weathers in the application
    */
    Route::get('/weathers', 'FiltersController@weathers');

    /*
    |-------------------------------------------------------------------------------
    | Get All Daytimes
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/daytimes
    | Controller:     API\FiltersController@daytimes
    | Method:         GET
    | Description:    Gets all of the daytimes in the application
    */
    Route::get('/daytimes', 'FiltersController@daytimes');

    /*
    |-------------------------------------------------------------------------------
    | Get All Lights
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/lights
    | Controller:     API\FiltersController@lights
    | Method:         GET
    | Description:    Gets all of the light types in the application
    */
    Route::get('/lights', 'FiltersController@lights');

    /*
    |-------------------------------------------------------------------------------
    | Get All Compositions
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/compositions
    | Controller:     API\FiltersController@compositions
    | Method:         GET
    | Description:    Gets all of the composition arts in the application
    */
    Route::get('/compositions', 'FiltersController@compositions');

    /*
    |-------------------------------------------------------------------------------
    | Get All Assignements
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/assignements
    | Controller:     API\FiltersController@assignements
    | Method:         GET
    | Description:    Gets all of the assignements types in the application
    */
    Route::get('/assignements', 'FiltersController@assignements');

    /*
    |-------------------------------------------------------------------------------
    | Get All Countries
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/countries
    | Controller:     API\FiltersController@countries
    | Method:         GET
    | Description:    Gets all of the countries in the application
    */
    Route::get('/countries', 'FiltersController@countries');
});
