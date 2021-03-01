<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
  <style>
    div.container6 {
        display: flex;
        align-items: center;
        justify-content: center 
    }

    .navpage{
        display: flex;
        justify-content: center 
    }
  </style>
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
        
// número de registro por página
        $limite = "3";

// Verifica se tem valor em página ou exibi  1

    $pagina = 1;
    $pagina= $_GET['pagina'];

    if(!$pagina){
        $pagAtual = "1";
    }else{
        $pagAtual = $pagina;
    }

// Determinar o valor inicial
    $inicio = $pagAtual - 1;
    $inicio = $inicio * $limite;

?>
    
    <div class="container mt-5">

    <div class="lista_usuario">
        
    </div>
        <label class ="h4">Lista de Usuário:</label>
        <div class="card"  >
            <div class="card-body ">
            <?php

//Selecionar os dados                    
                  $usuariosLimitado = DBExecute("SELECT * FROM `tb_usuario` ORDER BY nome_usuario ASC LIMIT {$inicio}, {$limite}");
                  
                  $usuarios = DBExecute("SELECT * FROM `tb_usuario` ORDER BY nome_usuario ASC");                      
//verificar qunantidade de páginas
                  $quantidadeRegistro = mysqli_num_rows($usuarios);
                  $totalPaginas = $quantidadeRegistro / $limite;
                     
                    if($quantidadeRegistro == 0){
                        echo "Sem registro";
                    }else{
                        
//Visualização                   
                        while ($dados = mysqli_fetch_array($usuariosLimitado)) {
                            
                            echo 'Nome: '.$dados["nome_usuario"].'<br>';
                            echo 'Telefone: '.$dados['telefone'].'<br>';
                            echo 'Endereço: '.$dados['endereco'].'<br><br>';
                            
                            $_GET['id_usuario'] = $dados['id_usuario'];
                            
                            echo '<a class="btn btn-primary" href="formularioedita.php?id_usuario='.$dados['id_usuario'].'&pagina='.$pagina.'" role="button" >Editar</a>
                                <a class="btn btn-primary" href="delete.php?id_usuario='.$dados['id_usuario'].'&pagina='.$pagina.'"  role="button" >Excluir</a> <br><hr>';                   
                    }   
            ?>

        <?php    
 //Exibir com paginação
 
// agora vamos criar os botões "Anterior e próximo"
            $anterior = $pagAtual -1;
            $proximo = $pagAtual +1;
            
            
            if ($pagAtual > 1) {
                echo " <a  href='?pagina=$anterior'><- Anterior</a>  | ";
            }
                
            if ($pagAtual < $totalPaginas) {
                echo " <a href='?pagina=$proximo'>Próxima -></a>";
            }

            }
        ?>
                
            </div>
        </div>    
    </div>
    <script src="js/script.js"></script>
</body>
</html>