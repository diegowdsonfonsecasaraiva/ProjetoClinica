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

Route::get('/listarPacientes', function () {
    return view('listarPacientes');
});

//Pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes');
Route::post('/pacientes/incluir', [PacienteController::class, 'incluir'])->name('pacientes.incluir');
//
//Profissional
Route::get('/profissionais', [ProfissionalController::class, 'index'])->name('profissionais');
Route::post('/profissionais/incluir', [ProfissionalController::class, 'incluir'])->name('profissionais.incluir');


//ROTA DE LISTAGEM
Route::get('/listarPacientes', [PacienteController::class, 'listar'])->name('pacientes.listar');

//ROTA PARA REMOÇÃO
Route::get('/pacientes/remover/{id}', [PacienteController::class, 'deletar'])->name('pacientes.remover');

