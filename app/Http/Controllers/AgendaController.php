<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function paso1()
    {
        $categorias = ['Mobile', 'Desktop', 'Tablet / iPad', 'Camera Repair'];
        return view('agendar.agendar', ['step' => 1, 'categorias' => $categorias]);
    }

    public function paso2(Request $request)
    {
        session(['categoria' => $request->categoria]);
        $marcas = ['Apple', 'Samsung', 'Google'];
        return view('agendar.agendar', ['step' => 2, 'marcas' => $marcas]);
    }

    public function paso3(Request $request)
    {
        session(['marca' => $request->marca]);
        $modelos = ['iPhone 15', 'Pixel 6a', 'Galaxy S23'];
        return view('agendar.agendar', ['step' => 3, 'modelos' => $modelos]);
    }

    public function paso4(Request $request)
    {
        session(['modelo' => $request->modelo]);
        $problemas = ['Battery Replacement', 'Water Damage', 'LCD Replacement'];
        return view('agendar.agendar', ['step' => 4, 'problemas' => $problemas]);
    }

    public function paso5(Request $request)
    {
        session(['problemas' => $request->problemas]);
        return view('agendar.agendar', ['step' => 5]);
    }

    public function confirmar(Request $request)
    {
        session([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'notas' => $request->notas,
            'preferencia' => $request->preferencia,
        ]);

        return view('agendar.agendar', ['step' => 6]);
    }
}
