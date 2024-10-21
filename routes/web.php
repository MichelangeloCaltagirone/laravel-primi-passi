<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {

    $title = "Primi passi in Laravel";
    $subtitle = "View with associate Route creation";
    $fakeList = [
        "Eliminare la view preimpostata",
        "Creare una nuova View denominata Home",
        "Indicare nelle Route la View appena creata",
        "Aggiungere dei dati nella route, che passerà alla view chiamata",
        "Popolare la view con i dati"
    ];

    return view('home',
    [
        "titolo" => $title,
        "sottotitolo" => $subtitle,
        "lista" => $fakeList
    ]
);
});
