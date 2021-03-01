<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
  
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  
  <script>
      $(document).ready(function(){
          $(document).ready(function(){
        $('#telefone').mask('(00) 0000-0000');
        });
      });
  </script>
 </head>
 <body>   
    <?php  
        //exibir menu
        require 'menu.php';
        
        //requisição das variáveis do banco
        require 'init.php';

        //requisição da conexão com banco
        require 'connection.php';

        //requisição das querys
        require 'database.php';

        $id = $_GET['id_usuario'];
        $where = "'id_usuario=".$id."'";
   
     //consulta da tabela de usuário
        $usuario = DBRead('tb_usuario','*', " WHERE id_usuario = {$id}");

     //$usuario = $usuario[0];
        $usuario = current($usuario);

        $nome = $usuario['nome_usuario'];
        
        $telefone = $usuario['telefone'];

        $endereco = $usuario['endereco'];
                       
    ?>
    
    <div class="container p-5 shadow mt-5">
    <?php  echo '<form method="post" action="edita.php?id='.$id.'&pagina='.$_GET['pagina'].'">';?>
            <label class ="h4">Editar de Usuário:</label>
            <div class="form-group">
                <label for="nome">Nome: </label>

                <?php  echo '<input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder ="Nome completo" value="'.$nome.'" required>';?>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>

                <?php  echo '<input type="text" class="form-control" id="telefone" name="telefone" placeholder ="(91) 9999-9999" value ="'.$telefone.'" required>';?>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>

                <?php  echo '<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Logradouro, Número da Casa" value="'.$endereco.'" required>';?>
            </div>
            <button class="btn btn-primary" type="submit">Editar</a>
        </form>
    </div>
</body>
</html>