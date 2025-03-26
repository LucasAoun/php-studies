<?php
 
require '../../../bootstrap.php';


if(isEmpty()){
    flash('message', 'Preencha todos os campos', 'success');
    return redirect('create_user');
}


$validate = validate([
    "name" => "s",
    "email" => "e",
    'password' => "s"
]);

$user = create('users', $validate);

if($user){
    flash('message', 'cadastrado com sucesso', 'success');
    return redirect('create_user');
}

flash('message', 'Erro ao cadastrar');
redirect('create_user');

