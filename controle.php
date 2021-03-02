    
<?php
//requisição das variáveis do banco
  require 'init.php';
//requisição da conexão com banco
  require 'connection.php';
//requisição das querys
  require 'database.php';

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
