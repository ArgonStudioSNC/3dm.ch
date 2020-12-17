<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models;

class FiltersController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Filters
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/filters
    | Method:         GET
    | Description:    Gets all the filters in the application
    */
    public function index(){
        $offices = Models\Office::all();
        $types = Models\Type::all();
        $styles = Models\Style::all();
        $seasontimes = Models\Seasontime::all();
        $weather = Models\Weather::all();
        $daytimes = Models\Daytime::all();
        $lights = Models\Light::all();
        $compositions = Models\Composition::all();
        $assignements = Models\Assignement::all();
        $countries = Models\GeoCountry::all();
        return response()->json( [
            'offices' => $offices,
            'types' => $types,
            'styles' => $styles,
            'seasontimes' => $seasontimes,
            'weather' => $weather,
            'daytimes' => $daytimes,
            'lights' => $lights,
            'compositions' => $compositions,
            'assignements' => $assignements,
            'countries' => $countries,
        ]);
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Offices
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/offices
    | Method:         GET
    | Description:    Gets all of the offices in the application
    */
    public function offices(){
        $offices = Models\Office::all();

        return response()->json( $offices );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Render Types
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/types
    | Method:         GET
    | Description:    Gets all of the render types in the application
    */
    public function types(){
        $types = Models\Type::all();

        return response()->json( $types );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Render Styles
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/styles
    | Method:         GET
    | Description:    Gets all of the render styles in the application
    */
    public function styles(){
        $styles = Models\Style::all();

        return response()->json( $styles );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Seasontimes
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/seasontimes
    | Method:         GET
    | Description:    Gets all of the seasontimes in the application
    */
    public function seasontimes(){
        $seasontimes = Models\Seasontime::all();

        return response()->json( $seasontimes );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Weather
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/weather
    | Method:         GET
    | Description:    Gets all of the weather in the application
    */
    public function weather(){
        $weather = Models\Weather::all();

        return response()->json( $weather );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Daytimes
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/daytimes
    | Method:         GET
    | Description:    Gets all of the daytimes in the application
    */
    public function daytimes(){
        $daytimes = Models\Daytime::all();

        return response()->json( $daytimes );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Lights
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/lights
    | Method:         GET
    | Description:    Gets all of the light types in the application
    */
    public function lights(){
        $lights = Models\Light::all();

        return response()->json( $lights );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Compositions
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/compositions
    | Method:         GET
    | Description:    Gets all of the composition arts in the application
    */
    public function compositions(){
        $compositions = Models\Composition::all();

        return response()->json( $compositions );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Assignements
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/assignements
    | Method:         GET
    | Description:    Gets all of the assignements types in the application
    */
    public function assignements(){
        $assignements = Models\Assignement::all();

        return response()->json( $assignements );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Countries
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/countries
    | Method:         GET
    | Description:    Gets all of the countries in the application
    */
    public function countries(){
        $countries = Models\GeoCountry::all();

        return response()->json( $countries );
    }

}
