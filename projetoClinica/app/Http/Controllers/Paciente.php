<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paciente extends Controller
{
    //
    public function pacientes() {
        $dados = Paciente::all(); 
        return view('pacientes', compact('dados'));
    }
    
    
}
