<?php

  //requisição das variáveis do banco
    require 'init.php';
  //requisição da conexão com banco
    require 'connection.php';
  //requisição para querys
    require 'database.php';

  $id= "'".$_GET['id_usuario']."'";
  $where = "id_usuario= ".$id;
  $delete = DBDelete('tb_usuario', $where);
  if($delete){ 
    header('Location:consulta.php?pagina='.$_GET['pagina']);
  }else{
    echo"erro";
    echo mysqli_error($conexao);
  }
?>
