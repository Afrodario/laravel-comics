<?php

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

    $comics = config('comics');

    return view('home', ['fumetti' => $comics]);
})->name('home');

Route::get('/comic/{comic_id}', function ($comic_id) {

    $comics = config('comics');

    if (is_numeric($comic_id) && $comic_id >= 0 && $comic_id < count($comics)) {

        $currentComic = $comics[$comic_id];

        return view('comic', ['fumetto' => $currentComic]);
    } else {
        abort(404);
    }

    
})->name('comic');
