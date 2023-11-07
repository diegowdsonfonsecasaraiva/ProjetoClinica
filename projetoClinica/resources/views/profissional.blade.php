

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
            <div class="nav">
                <nav>
                    <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Cadastro do Paciente</a></li>
                    <li><a href="">Cadastro do Profissional</a></li>
                    <li><a href="">Consulta da Listagem</a></li>
                    </ul>
                </nav>
            </div>

        
        
        <div id="formulario">

            
            <h1 class="h1">Cadastro Profissional</h1>
        
            <form action="acoes/cadprof.php" method="post">
                <div class="input-grup">
                    <label for="">Nome do  Profissional:</label>
                    <input type="text" name="nome">
                </div>
                <div class="input-grup">
                    <label for="">Telefone:</label>
                    <input type="number" name="telefone">
                </div>
                <div class="input-grup">
                    <label for="">Cidade:</label>
                    <select name="cidade" id="">
                   
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Sexo:</label>
                    <select name="sexo" id="">
                    
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Orientação</label>
                    <select name="orientacao" id="">
                   
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Estado Civil:</label>
                    <select name="estado_civil" id="">
                
                        
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Especialidades</label>
                    <select name="especialidades">
                       
                    </select>
    
                </div>

                <div class="input-grup">
                    <label for="">Conselho de Classe:</label>
                    <select name="conselho_classe">

                    </select>

                    
                </div>

                <div class="input-grup">
                    <label for="numero_Conselho">Numero do Conselho</label>
                    <input id="numero_Conselho" type="number" value="Numero do Conselho" name="numero_Conselho"  required>
                </div>


                <div class="input-grup">
                    <label for="">Abordagem</label>
                    <select name="abordagem" id="">

                   
                        
                            
                    
                    </select>
                </div>

                <div class="button">
                    <button type="submit">Cadastrar</button>
                    
                </div>

            

            </form>

        </div>

        
</body>
</html>