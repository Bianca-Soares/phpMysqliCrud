<?php
    
    header('Content-Type: application/json');
    require 'init.php';
    require 'connection.php';
    
    //requisição das querys
    require 'database.php';
    
    $table = "tb_usuario";
    $pesquisa = $_GET['nome_pesquisa'];
    $query = " WHERE nome_usuario LIKE '%$pesquisa%'";

    if(!trim($pesquisa)){
        echo "";
    }else{
        
        $usuario = DBRead('tb_usuario', '*', $query);
        //die(var_dump($usuario));
            if(!$usuario){
                
                echo "Pesquisa vazia";   
            }else{
                echo json_encode($usuario);
            }
    }
    
        
