<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
 </head>
 <body>   
 <div class="container mt-5">
        <a class="btn btn-primary" href="consulta.php" role="button" >Consultar Registros</a>
</div>
    <div class="container p-5 shadow mt-5">
    <form method="post" action="controle.php">
            <label class ="h4">Cadastro de Usuário:</label>
            <div class="form-group">
                <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder ="Nome completo" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(91) 9 9999-9999" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Logradouro, Número da Casa" required>
            </div>
            <button class="btn btn-primary" type="submit">Registrar</a>
        </form>
    </div> 
 </body>
</html>