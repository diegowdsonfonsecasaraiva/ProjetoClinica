<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
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


Route::get('/profissionais', function () {
    return view('profissionais');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes');
Route::post('/pacientes/incluir', [PacienteController::class, 'incluir'])->name('pacientes.incluir');


