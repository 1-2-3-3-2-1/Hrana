<?php

use Illuminate\Support\Facades\Route;

// Početna stranica
Route::get('/', function () {
    return view('hrana'); // naziv Blade fajla bez .blade.php
});

// Stranica sa ćevapima
Route::get('/cevapi-restorani', function () {
    return view('cevapi-restorani'); // ovde stavi ime odgovarajućeg Blade fajla
});

// Stranica sa crnim rižotom
Route::get('/crni-rizot-restorani', function () {
    return view('crni-rizot-restorani'); // ovde stavi ime Blad fajla za crni rižot
});


