<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home()
    {
        // Getting Trending
        $trendings =  Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/trending/all/day')->json()['results'];
        // Top Rated
        $topRateds  = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/top_rated')->json()['results'];
        // Getting Genres
        $genreLists = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];
        $genres = collect($genreLists)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        return view('layouts.home', compact('trendings', 'topRateds', 'genres'));
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
