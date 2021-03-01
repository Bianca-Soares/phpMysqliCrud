<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>

 </head>
 <body>
    <div class="container mt-5">
        
      <?php
      //requisição das variáveis do banco
        require 'init.php';
      //requisição da conexão com banco
        require 'connection.php';
      //requisição das querys
        require 'database.php';

        require 'menu.php';

        $nome= $_POST['var_usuario'];
        $telefone= $_POST['var_telefone'];
        $endereco= $_POST['var_endereco'];
        

        $usuario = array(
            'nome_usuario'  => $nome,
            'telefone'      => $telefone,
            'endereco'      => $endereco
        );
            
        $salva = DBCreate('tb_usuario', $usuario);
        if($salva){
          console_log( "Salvo true");            
        }else{
            echo"erro";
            echo mysqli_error($conexao);
        }
      ?>
    </div>    
 </body>
</html>