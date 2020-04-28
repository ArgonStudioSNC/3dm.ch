<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Office;
use App\Models\Type;
use App\Models\Style;
use App\Models\Seasontime;
use App\Models\Weather;
use App\Models\Daytime;
use App\Models\Light;
use App\Models\Composition;
use App\Models\Assignement;
use App\Models\Country;

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
        $offices = Office::all();
        $types = Type::all();
        $styles = Style::all();
        $seasontimes = Seasontime::all();
        $weathers = Weather::all();
        $daytimes = Daytime::all();
        $lights = Light::all();
        $compositions = Composition::all();
        $assignements = Assignement::all();
        $countries = Country::all();
        return response()->json( [
            'offices' => $offices,
            'types' => $types,
            'styles' => $styles,
            'seasontimes' => $seasontimes,
            'weathers' => $weathers,
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
        $offices = Office::all();

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
        $types = Type::all();

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
        $styles = Style::all();

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
        $seasontimes = Seasontime::all();

        return response()->json( $seasontimes );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Weathers
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/weathers
    | Method:         GET
    | Description:    Gets all of the weathers in the application
    */
    public function weathers(){
        $weathers = Weather::all();

        return response()->json( $weathers );
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
        $daytimes = Daytime::all();

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
        $lights = Light::all();

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
        $compositions = Composition::all();

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
        $assignements = Assignement::all();

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
        $countries = Country::all();

        return response()->json( $countries );
    }

}
