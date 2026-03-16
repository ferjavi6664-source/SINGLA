<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function saludar($nombre = 'invitado')
    {
        if (request()->ajax()) {
            return view('partials.saludo', compact('nombre'));
        }

        return view('saludo', compact('nombre'));
    }
}
