<?php
//requisição das variáveis do banco
  require 'init.php';
//requisição da conexão com banco
  require 'connection.php';
//requisição das querys
  require 'database.php';
  
  $pagina = $_GET['pagina'];
  $id= $_GET['id'];
  $where = "id_usuario = ".$id;
  
  $nome = $_POST['nome_usuario'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  
    $usuario = array(
      'nome_usuario'  => $nome,
      'telefone'      => $telefone,
      'endereco'      => $endereco
  );
      
  $edita = DBUpDate('tb_usuario', $usuario, $where);
  
if($edita){ 
  header('Location:consulta.php?pagina='.$_GET['pagina']);

}else{
  echo"erro";
  echo mysqli_error($conexao);
}
?>
 