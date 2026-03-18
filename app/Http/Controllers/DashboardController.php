<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function inicio()
    {
        if (request()->header('X-Requested-With') === 'XMLHttpRequest') {
            return view('dashboard.partials.inicio-content');
        }

        return view('dashboard.inicio');
    }

    public function reportes()
    {
        if (request()->header('X-Requested-With') === 'XMLHttpRequest') {
            return view('dashboard.partials.reportes');
        }

        return view('dashboard.reportes');
    }

    public function usuarios()
    {
        if (request()->header('X-Requested-With') === 'XMLHttpRequest') {
            return view('dashboard.partials.usuarios');
        }

        return view('dashboard.usuarios');
    }
    public function servicios()
    {
        return view('servicios');
    }
}
