<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WWWController extends Controller
{
    /**
     * Show the website portfolio page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * Show the website contact/about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }
}
