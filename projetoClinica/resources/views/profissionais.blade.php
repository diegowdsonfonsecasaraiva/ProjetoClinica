<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="container  margin-top   border bg-info p-2 text-dark bg-opacity-10">
    <div>
    <h1>Cadastro Profissional</h1>
    <hr>
    </div>
    <form class="row g-3">
    <div class="col-md-4">
        <label for="validationServer01" class="form-label">Nome do  Profissional:</label>
        <input type="text"  name="nome_paciente" class="form-control is-valid" >
    </div>
    <div class="col-md-4">
    <label for="validationServer02" class="form-label">Telefone:</label>
    <input type="number" name="tel_paciente" class="form-control is-valid" >
    <div class="valid-feedback">
    
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Numero do Conselho</label>
    <div class="input-group has-validation">
      <input type="text" name="carterinha" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer03" class="form-label">Cidade:</label>
    <select class="form-select is-invalid" name="cidade_paciente" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">Sexo:</label>
    <select class="form-select is-invalid" name="sexo_paciente" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Orientação</label>
    <select class="form-select is-invalid" name="orientacao_paciente" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Estado Civil:</label>
    <select class="form-select is-invalid" name="estado_civil_paciente" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Conselho de Classe:</label>
    <select class="form-select is-invalid" name="convenio_paciente" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Abordagem:</label>
    <select class="form-select is-invalid"  name="abordagem_paciente"id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Especialidades</label>
    <select class="form-select is-invalid"  name="abordagem_paciente"id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>