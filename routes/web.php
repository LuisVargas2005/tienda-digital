<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

Route::get('/agendar/paso1', [AgendaController::class, 'paso1'])->name('agendar.paso1');
Route::post('/agendar/paso2', [AgendaController::class, 'paso2'])->name('agendar.paso2');
Route::post('/agendar/paso3', [AgendaController::class, 'paso3'])->name('agendar.paso3');
Route::post('/agendar/paso4', [AgendaController::class, 'paso4'])->name('agendar.paso4');
Route::post('/agendar/paso5', [AgendaController::class, 'paso5'])->name('agendar.paso5');
Route::post('/agendar/confirmar', [AgendaController::class, 'confirmar'])->name('agendar.confirmar');


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


