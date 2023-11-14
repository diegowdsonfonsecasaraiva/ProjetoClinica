<?php

namespace App\Http\Controllers;

use App\Models\Evolucao_enf;
use Illuminate\Http\Request;


class EvolucaoEnfController extends Controller
{
    public function listar()
    {
        $evolucoes = Evolucao_enf::all();
        return view('/evolucaoEnfermagem/listar', ['evolucoes' => $evolucoes]);
    }

    public function index()
    {
        return view('evolucaoEnfermagem.incluir');
    }

    public function incluir(Request $request)
    {
         //RECEPCIONAR DADOS VINDOS DA VIEW
         $dadosFormulario = $request->all();
         //VALIDAÇÃO
 
         //INCLUIR NO DB
         $evolucoes = Evolucao_enf::create($dadosFormulario);

         return redirect('/evolucaoEnfermagem/incluir')->with('mensagem', 'Evolução incluida com sucesso! ')
         ->with('id', $evolucoes->id);
    }

    public function deletar($id)
    {
        $evolucao = Evolucao_enf::find($id);
        $evolucao->delete();

        return redirect('/evolucaoEnfermagem/listar')->with('mensagem', 'Evolução removida com sucesso!');
    }
}

