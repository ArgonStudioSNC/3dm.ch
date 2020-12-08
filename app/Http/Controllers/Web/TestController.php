<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    /**
     * Get the Rendersurfer SPA.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo "CONSISTENT";
        foreach (Models\Render::all() as $render) {
            if (!Storage::disk('rendersurfer')->exists("original".DIRECTORY_SEPARATOR.$render->filename))
            {
                echo "\n";
                echo $render->filename;
            }
        }

        return;
    }
}
