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
    $data = [
        'sections' => [
            'comics', 'books', 'movies', 'action figures', 'mofos'
        ],
        'comics' => include(config_path('comics.php'))
    ];

    
    return view('home', $data);
});

Route::get('/comic{id}', function ($id) {
    $data = [
        'comics' => include(config_path('comics.php')),
        'id' => $id,
        'sections' => [
            'comics', 'books', 'movies', 'action figures', 'mofos'
        ],
    ];
    return view('show', $data);
})->name('comic.show');

