<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Listar Passageiros</title>
</head>
<body>
    <div class="container">
        <h3>Listagem de Pacientes</h3>
        <a href="/pacientes"  class="btn btn-success">Incluir +</a>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome do  Paciente</th>
                    <th>Telefone</th>
                    <th>Numero da carteira</th>
                    <th>Cidade</th>
                    <th>Sexo</th>
                    <th>Orientação</th>
                    <th>Estado Civil</th>
                    <th>Convenio Paciente</th>
                    <th>Abordagem</th>
        
                </tr>   
            </thead>
            <tbody>
                <!-- LAÇO DE REPETIÇÃO PARA EXIBIR OS REGISTROS DO BANCO --> 
                @foreach ($dados as $linha)
                <tr>
                    <td>{{ $linha->cod_paciente }}</td>
                    <td>{{ $linha->nome_paciente }}</td>
                    <td>{{ $linha->tel_paciente }}</td>
                    <td>{{ $linha->carterinha }}</td>
                    <td>{{ $linha->cidade->estado }}</td>
                    <td>{{ $linha->sexo->sexo }}</td>
                    <td>{{ $linha->orientacao->orientacao }}</td>
                    <td>{{ $linha->estadoCivil->estado_civil }}</td>
                    <td>{{ $linha->convenio->convenio }}</td>
                    <td>{{ $linha->abordagem->Abordagem }}</td>
                    <td><a href="{{ route('listarPacientes.remover', ['id' => $linha->cod_paciente]) }}" class="btn btn-small btn-danger">-</a>
                        <a href="{{ route('pacientes.edit', ['id' => $linha->cod_paciente]) }}" class="btn btn-small btn-warning">!</a></td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>