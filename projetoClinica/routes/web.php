<?php

use App\Http\Controllers\EvolucaoEnfController;
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


// Route::get('/profissionais', function () {
//     return view('profissionais');
// });

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/listarPacientes', function () {
//     return view('listarPacientes');
// });

// Route::resource('pacientes', 'PacientesController');
Route::resource('pacs', 'PacientesController');
/**
 * Index - GET /pacientes
 * Create - GET /pacientes/create
 * Store - POST /pacientes
 * Show - GET /pacientes/1
 * Edit - GET /pacientes/1/edit
 * Update - PUT pacientes/1
 * Destroy - DELETE /pacientes/1
 * 
 * Controller -> Plural
 * Model -> Singular
 * Migration -> Plural - php artisan make:migration create_pacientes_table 
 * 
 * php artisan make:controller PacientesControlller --resource
 * 
 * 
 * action('pacintescontroller@index')
 * route('pacs.index')
 * route('pacs.create')
 * 
 * 
 */

//Pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes');
Route::post('/pacientes/incluir', [PacienteController::class, 'incluir'])->name('pacientes.incluir');
Route::get('/atualizar-pacientes/{id}', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::post('/pacientes/atualizar', [PacienteController::class, 'atualizar'])->name('pacientes.atualizar');
//ROTA DE LISTAGEM
Route::get('/listarPacientes', [PacienteController::class, 'listar'])->name('listarPacientes.listar');
//ROTA PARA REMOÇÃO
Route::get('/listarPacientes/remover/{id}', [PacienteController::class, 'deletar'])->name('listarPacientes.remover');
//
//Profissional
// Route::get('/profissionais', [ProfissionalController::class, 'index'])->name('profissionais');
// Route::post('/profissionais/incluir', [ProfissionalController::class, 'incluir'])->name('profissionais.incluir');

//Enfermagem -Evolução
Route::get('/evolucaoEnfermagem/listar', [EvolucaoEnfController::class, 'listar'])->name('evolucaoenf.listar');
//exibir form de inclusao
Route::get('/evolucaoEnfermagem/incluir', [EvolucaoEnfController::class, 'index'])->name('evolucaoenf.index');
//rota de inclusao
Route::post('/evolucaoEnfermagem/incluir', [EvolucaoEnfController::class, 'incluir'])->name('evolucaoenf.incluir');
Route::get('/evolucaoEnfermagem/remover/{id}', [EvolucaoEnfController::class, 'deletar'])->name('evolucaoenf.remover');
