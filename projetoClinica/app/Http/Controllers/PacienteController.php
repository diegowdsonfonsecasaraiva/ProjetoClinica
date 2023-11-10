<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Cidade;
use App\Models\Sexo;
use App\Models\Orientacao;
use App\Models\EstadoCivil;
use App\Models\Convenio;
use App\Models\Abordagem;

class PacienteController extends Controller
{
    function incluir(Request $request){
        //RECEPCIONAR DADOS VINDOS DA VIEW
        $dadosFormulario = $request->all();
        //VALIDAÇÃO

        //INCLUIR NO DB
        $pacientes = Paciente::create($dadosFormulario);
        //EXIBE ID INSERIDO NO BANCO
        //echo $passageiroInserido->id;

        return redirect('/pacientes')->with('mensagem', 'Passageiro incluido com sucesso! ')
            ->with('id', $pacientes->id);
    }

    function listar(){
        $dados = Paciente::all();
        return view('/listarPacientes', compact('dados')); //DADOS será enviado à view, para listagem das linhas
        //LEMBRETE: passageiros.listar = passageiros -> nome da pasta dentro da pasta view, listar -> arquivo PHP propriamente da view.
    }

    function deletar($id){
        //LOCALIZA O REGISTRO
        $paciente = Paciente::find($id);
        //REMOVE O REGISTRO
        $paciente->delete();
        return redirect('/listarPacientes');
    }

    function index(){
        //cidade
        $cidade = new Cidade();
        $listaCidades = $cidade->getCidades();
        //sexo
        $sexo = new Sexo();
        $listaSexo = $sexo->getSexo();
        //orientação
        $orientacao = new Orientacao();
        $listaOrientacao = $orientacao->getOrientacao();
        //EstadoCivil
        $estadocivil = new EstadoCivil();
        $listaEstadoCivil = $estadocivil->getEstadoCivil();
        //Convenio
        $convenio = new Convenio();
        $listaConvenio = $convenio->getConvenio();
        //Abordagem
        $abordagem = new Abordagem();
        $listaAbordagem = $abordagem->getAbordagem();
        //Retorna para view
        return view('pacientes', compact('listaCidades', 'listaSexo','listaOrientacao','listaEstadoCivil','listaConvenio','listaAbordagem'));
    }
}