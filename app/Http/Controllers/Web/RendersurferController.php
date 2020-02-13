<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RendersurferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the Rendersurfer SPA.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getApp()
    {
        return view('rendersurfer');
    }
}
