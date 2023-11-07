<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/paciente', function () {
    return view('paciente');
});

Route::get('/profissional', function () {
    return view('profissional');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/pacientes', function () {
    return view('pacientes');
});