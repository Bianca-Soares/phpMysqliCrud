<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
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

        $table = "tb_usuario";

        //$usuario = DBRead('tb_usuario',"WHERE nome_usuario LIKE '%$pesquisa%'");
        $nome = "João Silva";
    ?>
    <div class="container p-5 shadow mt-5">
        <form method="post" action="pesquisa.php">
            <label class ="h4">Pesquisar pelo nome:</label>
            <div class="form-group">
                <label for="telefone">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" require>
            </div>
            <button class="btn btn-primary" type="submit">Pesquisar</a>
        </form>
    </div>

    <div class="container mt-5">
        <label class ="h4">Lista da pesquisa pelo nome:</label>
        <div class="card">
            <div class="card-body ">
                <?php
                //consulta pelo nome na tabela de usuário
                    $usuario = DBRead('tb_usuario');
                //foreach para trabalhar com array
                    foreach($usuario as $user){
                        echo 'Nome: '.$user['nome_usuario'].'<br>';
                        echo 'Telefone: '.$user['telefone'].'<br>';
                        echo 'Endereço: '.$user['endereco'].'<br><br>';
    //MUDAR PARA O MÉTODO POST                   
                        echo '<a class="btn btn-primary" href="editar.php?id_usuario='.$user['id_usuario'].'" role="button" value="editar">Editar</a>
                            <a class="btn btn-primary" href="delete.php?id_usuario='.$user['id_usuario'].'" role="button" value="excluir">Excluir</a> <br><hr>';
                }
                
                ?>
            </div>
        <div>    
    </div>
</body>
</html>