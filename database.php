<?php
//Criar a função consultar por id
// Leitura de Registro
    function DBRead($table,  $fields = '*', $params = null){
        $params = ($params) ? " {$params}" : null; // Se()  então ? senão : null
        $query = "SELECT {$fields} FROM {$table}{$params}";

        $result = DBExecute($query);

        if(!mysqli_num_rows($result))
            return false;
        else{
            //var_dump(mysqli_fetch_assoc($result)); //Exibi em array os campos da tabela
            while ($res = mysqli_fetch_assoc($result)) {
                $data[] = $res;
            } 
        }

        return $data;
    }

// Salva Registro
    function DBCreate($table, array $data){

        $data = DBEscape($data);

        $fields = implode(', ', array_keys($data));
        $values = "'".implode("', '", $data)."'";

        $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
        return DBExecute($query);
    }

// Alterar Registro
    function DBUpdate($table, array $data, $where = null){
       foreach ($data as $key => $value){
            $fields[] = "{$key} = '{$value}'";
        }

        $fields = implode(', ', $fields);

        $where = ($where) ? " WHERE {$where}" : null;//alternário se ? senão recebe null
        $query = "UPDATE {$table} SET {$fields}{$where}";
        return DBExecute($query);
    }

// Excluir Registro
    function DBDelete($table, $where){
        $query = "DELETE FROM {$table} WHERE {$where}";
        return DBExecute($query);
    }

// Executa Querys
    function DBExecute($query){
        $link = DBConnect();
        $result = @mysqli_query($link, $query) or die(mysqli_error($link));
        DBClose($link);
        return $result;
    }
?>