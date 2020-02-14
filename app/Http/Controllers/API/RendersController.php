<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Render;

class RendersController extends Controller
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
    | Get All Renders
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Method:         GET
    | Description:    Gets all of the renders in the application
    */
    public function index(){
        $renders = Render::all();

        return response()->json( $renders );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get An Individual Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Method:         GET
    | Description:    Gets an individual render
    | Parameters:
    |   $id   -> ID of the render we are retrieving
    */
    public function show( $id ){
        $render = Render::where('id', '=', $id)->first();

        return response()->json( $render );
    }

    /*
    |-------------------------------------------------------------------------------
    | Adds a New Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Method:         POST
    | Description:    Adds a new render to the application
    */
    public function store(){
        $render = new Render();

        $render->name     = Request::get('name');
        $render->filename  = Request::get('filename');

        $render->save();

        return response()->json($render, 201);
    }
}
