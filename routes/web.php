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
    return view('crni-rizot-restorani'); // ovde stavi ime Blade fajla za crni rižot
});



// Stranica sa brodetom
Route::get('/brodet-restorani', function () {
    return view('brodet-restorani'); // ovde stavi ime odgovarajućeg Blade fajla
});

// Stranica sa pasticadom
Route::get('/pasticada-restorani', function () {
    return view('pasticada-restorani'); // ovde stavi ime Blade fajla za pasticadu
});

// Stranica sa pečenjem
Route::get('/peka-restorani', function () {
    return view('peka-restorani'); // ovde stavi ime odgovarajućeg Blade fajla
});

// Stranica sa punjenom paprikom
Route::get('/punjena-paprika-restorani', function () {
    return view('punjena-paprika-restorani'); // ovde stavi ime Blade fajla za punjenu papriku
});

// Stranica sa sarma
Route::get('/sarma-restorani', function () {
    return view('sarma-restorani'); // ovde stavi ime odgovarajućeg Blade fajla
});

// Stranica sa soparnikom
Route::get('/soparnik-restorani', function () {
    return view('soparnik-restorani'); // ovde stavi ime Blade fajla za soparnik
});

// Stranica sa brodetom
Route::get('/o-nama', function () {
    return view('o-nama'); // ovde stavi ime odgovarajućeg Blade fajla
});

// Stranica sa pasticadom
Route::get('/login', function () {
    return view('login'); // ovde stavi ime Blade fajla za login
});

// Stranica sa brodetom
Route::get('/kontakt', function () {
    return view('kontakt'); // ovde stavi ime odgovarajućeg Blade fajla
});

