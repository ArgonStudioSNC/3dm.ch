<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Show the website portfolio page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        return view('website/portfolio-2021');
    }

    /**
     * Show the website contact/about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('website/about');
    }

    /**
     * Show the website calculator page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function calculator()
    {
        return view('website/calculator');
    }
}
