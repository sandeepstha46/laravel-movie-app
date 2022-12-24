<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});


Route::group([], function(){
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/discovery', [PageController::class, 'discovery'])->name('discovery');
    Route::get('/trending', [PageController::class, 'trending'])->name('trending');
    Route::get('/top-rated', [PageController::class, 'toprated'])->name('top-rated');
    Route::get('/movies', [PageController::class, 'movies'])->name('movies');
    Route::get('/series', [PageController::class, 'series'])->name('series');
    Route::get('/settings', [PageController::class, 'settings'])->name('settings');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
