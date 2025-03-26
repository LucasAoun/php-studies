<?php
 
require '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id');

if(isEmpty()){
    flash('message', 'Preencha todos os campos', 'success');
    return redirect("edit_user&id={$id}");
}


$validate = validate([
    "name" => "s",
    "email" => "e",
    'password' => "s"
]);

$user = update('users', $validate, ['id', $id]);

if($user){
    flash('message', 'cadastrado com sucesso', 'success');
    return redirect("edit_user&id={$id}");
}

flash('message', 'Erro ao cadastrar');
redirect("edit_user&id={$id}");

