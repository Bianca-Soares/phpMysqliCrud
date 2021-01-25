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

        $id = $_GET['id_usuario'];
        $where = "'id_usuario=".$id."'";
        $nome;
        $telefone;
        $endereco;
   
        //consulta da tabela de usuário
            $usuario = DBRead('tb_usuario');
            //var_dump($usuario);
        //foreach para trabalhar com array
            foreach($usuario as $user){
                if($user['id_usuario'] == $id){
                    $nome = $user['nome_usuario'];
                
                    $telefone = $user['telefone'];

                    $endereco = $user['endereco'];}
                }
                
               
    ?>
    
    <div class="container p-5 shadow mt-5">
        <?php  echo '<form method="post" action="edita.php?id='.$id.'">';?>
            <label class ="h4">Editar de Usuário:</label>
            <div class="form-group">
                <label for="nome">Nome: </label>

                <?php  echo '<input type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="'.$nome.'" required>';?>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>

                <?php  echo '<input type="number" class="form-control" id="telefone" name="telefone" value ="'.$telefone.'">';?>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>

                <?php  echo '<input type="text" class="form-control" id="endereco" name="endereco" value="'.$endereco.'">';?>
            </div>
            <button class="btn btn-primary" type="submit">Editar</a>
        </form>
    </div>
</body>
</html>