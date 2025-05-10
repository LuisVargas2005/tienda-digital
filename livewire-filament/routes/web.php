<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [HomeController::class, 'index']);

Route::get('/', function () {
    return view('app.frontend.index');
});

Route::get('/catalogo', function () {
    return view('layouts.catalogo');
});

Route::get('/agendar', function () {
    return view('layouts.agendar');
});

Route::get('/contacto', function () {
    return view('layouts.contacto');
});

Route::get('/manual', function () {
    return view('layouts.manual');
});


