<?php

use App\Http\Controllers\IncidenciaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IncidenciaController::class, 'index'])
    ->name('incidencias.index');
