<?php

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=cursophp;charset=utf8", 'root', 'secret');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create($table, $data){
    $pdo = connect();

    if(!is_array($data)){
        $data = (array) $data;
    }

    $sql = "insert into {$table}";
    $sql .= "(" . implode(',', array_keys($data)) . ")";
    $sql .= " values(:" . implode(',:',array_keys($data)) . ")";

    $insert = $pdo->prepare($sql);
    return $insert->execute($data);

}

function all($table){
    $pdo = connect();

    $sql = "select * from {$table}";
    $select = $pdo->query($sql);
    $select->execute();
    return $select->fetchAll();
}

function update($table, $fields, $where){

    if(!is_array($fields)){
        $fields = (array) $fields;
    }

    foreach($fields as $key => $field){
        $serialized[] = " {$key} = :{$key}";
    } 

    $pdo = connect();
    
    $sql = "update {$table} set ";
    $sql .= implode(',', $serialized);
    $sql .= " where {$where['0']} = :{$where['0']}";

    $update = $pdo->prepare($sql);

    // Bind field values
    foreach($fields as $key => $value) {
        $update->bindValue(":{$key}", $value);
    }

    // Bind where value
    $update->bindValue(":{$where['0']}", $where['1']);

    $update->execute();
    
    return $update->rowCount();

}

function find($table, $column, $value){
    $pdo = connect();

    $sql = "select * from {$table} where {$column} = :{$column}";

    $list = $pdo->prepare($sql);
    $list->bindValue($column, $value);
    $list->execute();

    return $list->fetch();
}

function delete($table, $field, $value){
    $pdo = connect();

    $sql = "delete from {$table} ";
    $sql .= "where {$field} = :{$field}";

    $delete = $pdo->prepare($sql);

    $delete->bindValue(":{$field}", $value);
    $delete->execute();
}