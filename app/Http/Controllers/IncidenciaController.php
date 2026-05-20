<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\View\View;

class IncidenciaController extends Controller
{
    public function index(): View
    {
        $incidencias = Incidencia::query()
            ->orderByDesc('created_at')
            ->get();

        return view('incidencias.index', compact('incidencias'));
    }
}
