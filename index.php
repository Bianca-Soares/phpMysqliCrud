<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
  <title>Crud PHP com MySQli</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){
          $(document).ready(function(){
            $("#telefone").mask("(00) 0000-0000");
          });

          $(".btnRegistrar").click(function(){
            
          });
      });
  </script>

 </head>
 <body>
    <?php  
        //exibir menu
        require 'menu.php';
    ?>   
    <div class="container p-5 shadow mt-5">
        <form id="form_cadastro" >
            <label class ="h4">Cadastro de Usuário:</label>
            <div class="form-group">
                <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder ="Nome completo" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(91) 9999-9999" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Logradouro, Número da Casa" required>
            </div>
            <button class="btnRegistrar btn btn-primary" type="submit">Registrar</a>
        </form>

        <div class="lista_usuario">
			
        </div>

    </div>
    <script src="js/script.js"></script>  
 </body>
</html>