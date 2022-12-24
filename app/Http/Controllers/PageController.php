<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('layouts.home');
    }

    public function discovery()
    {
        return view('layouts.discovery');
    }

    public function trending()
    {
        return view('layouts.trending');
    }

    public function toprated()
    {
        return view('layouts.top-rated');
    }

    public function movies()
    {
        return view('layouts.movies');
    }

    public function series()
    {
        return view('layouts.series');
    }

    public function settings()
    {
        return view('layouts.settings');
    }
}
