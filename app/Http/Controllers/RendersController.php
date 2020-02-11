<?php

namespace App\Http\Controllers;

use App\Render;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RenderController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return response(Render::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function create()
    {
        $render = new Render();
        $render->name = 'newName';
        $render->filename = 'newFileName';
        $render->save();

        return response($render->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function destroy($id)
    {
        Render::destroy($id);

        return response(null, Response::HTTP_OK);
    }
}
