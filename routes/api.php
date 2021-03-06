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

Route::namespace('Auth')->prefix('v1')->group(function () {
      Route::get('permissions', 'PermissionController')->name('permissions');;
      Route::get('roles', 'RoleController')->name('roles');;
});


Route::namespace('API')->prefix('v1')->group(function(){
    Route::get('/user', function( Request $request ){
        return $request->user();
    });
});


Route::namespace('API')->domain('rendersurfer.' . env('APP_URL'))->prefix('v1')->group(function(){
    /*
    |-------------------------------------------------------------------------------
    | Get All Renders
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Controller:     API\RendersController@index
    | Method:         GET
    | Description:    Gets all of the renders in the application
    */
    Route::get('/renders', 'RendersController@index')->name('rendersurfer.renders.index');

    /*
    |-------------------------------------------------------------------------------
    | Get An Individual Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Controller:     API\RendersController@show
    | Method:         GET
    | Description:    Gets an individual render
    */
    Route::get('/renders/{id}', 'RendersController@show')->name('rendersurfer.renders.show');

    /*
    |-------------------------------------------------------------------------------
    | Adds a New Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Controller:     API\RendersController@store
    | Method:         POST
    | Description:    Adds a new render to the application
    */
    Route::post('/renders', 'RendersController@store')->name('rendersurfer.renders.store');

    /*
    |-------------------------------------------------------------------------------
    | Updates an Existing Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Controller:     API\RendersController@update
    | Method:         PUT
    | Description:    Updates an existing render
    */
    Route::put('/renders/{id}', 'RendersController@update')->name('rendersurfer.renders.update');

    /*
    |-------------------------------------------------------------------------------
    | Delete an Existing Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Controller:     API\RendersController@delete
    | Method:         DELETE
    | Description:    Deletes an existing render
    */
    Route::delete('/renders/{id}', 'RendersController@delete')->name('rendersurfer.renders.delete');

    /*
    |-------------------------------------------------------------------------------
    | Get An Render Image
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/p/{size}/{filename}
    | Method:         GET
    | Description:    Gets a render image at the specified size
    */
    Route::get('/renders/p/{size}/{filename}', function ($size, $filename)
    {
        $filepath = $size.DIRECTORY_SEPARATOR.$filename;

        if (!Storage::disk('rendersurfer')->exists($filepath))
        {
            abort('404');
        }
        return response()->file(storage_path('app'.DIRECTORY_SEPARATOR.'rendersurfer'.DIRECTORY_SEPARATOR.($filepath)));
    })->name('rendersurfer.renders.picture');
});

Route::namespace('API')->domain('rendersurfer.' . env('APP_URL'))->prefix('v1/filters')->group(function(){
    /*
    |-------------------------------------------------------------------------------
    | Get All Filters
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters
    | Controller:     API\FiltersController@index
    | Method:         GET
    | Description:    Gets all of the filters in the application
    */
    Route::get('/', 'FiltersController@index')->name('rendersurfer.filters.index');

    /*
    |-------------------------------------------------------------------------------
    | Get All Offices
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/offices
    | Controller:     API\FiltersController@offices
    | Method:         GET
    | Description:    Gets all of the offices in the application
    */
    Route::get('/offices', 'FiltersController@offices')->name('rendersurfer.filters.offices');

    /*
    |-------------------------------------------------------------------------------
    | Get All Render Types
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/types
    | Controller:     API\FiltersController@types
    | Method:         GET
    | Description:    Gets all of the render types in the application
    */
    Route::get('/types', 'FiltersController@types')->name('rendersurfer.filters.types');

    /*
    |-------------------------------------------------------------------------------
    | Get All Render Styles
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/styles
    | Controller:     API\FiltersController@styles
    | Method:         GET
    | Description:    Gets all of the render styles in the application
    */
    Route::get('/styles', 'FiltersController@styles')->name('rendersurfer.filters.styles');

    /*
    |-------------------------------------------------------------------------------
    | Get All Seasontimes
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/seasontimes
    | Controller:     API\FiltersController@seasontimes
    | Method:         GET
    | Description:    Gets all of the seasontimes in the application
    */
    Route::get('/seasontimes', 'FiltersController@seasontimes')->name('rendersurfer.filters.seasontimes');

    /*
    |-------------------------------------------------------------------------------
    | Get All Weather
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/weather
    | Controller:     API\FiltersController@weather
    | Method:         GET
    | Description:    Gets all of the weather in the application
    */
    Route::get('/weather', 'FiltersController@weather')->name('rendersurfer.filters.weather');

    /*
    |-------------------------------------------------------------------------------
    | Get All Daytimes
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/daytimes
    | Controller:     API\FiltersController@daytimes
    | Method:         GET
    | Description:    Gets all of the daytimes in the application
    */
    Route::get('/daytimes', 'FiltersController@daytimes')->name('rendersurfer.filters.daytimes');

    /*
    |-------------------------------------------------------------------------------
    | Get All Lights
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/lights
    | Controller:     API\FiltersController@lights
    | Method:         GET
    | Description:    Gets all of the light types in the application
    */
    Route::get('/lights', 'FiltersController@lights')->name('rendersurfer.filters.lights');

    /*
    |-------------------------------------------------------------------------------
    | Get All Compositions
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/compositions
    | Controller:     API\FiltersController@compositions
    | Method:         GET
    | Description:    Gets all of the composition arts in the application
    */
    Route::get('/compositions', 'FiltersController@compositions')->name('rendersurfer.filters.compositions');

    /*
    |-------------------------------------------------------------------------------
    | Get All Assignements
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/assignements
    | Controller:     API\FiltersController@assignements
    | Method:         GET
    | Description:    Gets all of the assignements types in the application
    */
    Route::get('/assignements', 'FiltersController@assignements')->name('rendersurfer.filters.assignements');

    /*
    |-------------------------------------------------------------------------------
    | Get All Countries
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters/countries
    | Controller:     API\FiltersController@countries
    | Method:         GET
    | Description:    Gets all of the countries in the application
    */
    Route::get('/countries', 'FiltersController@countries')->name('rendersurfer.filters.countries');
});
