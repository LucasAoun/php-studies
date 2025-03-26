<?php
 
require '../../../bootstrap.php';


if(isEmpty()){
    flash('message', 'Preencha todos os campos', 'success');
    return redirect('contato');
}


$validate = validate([
    "name" => "s",
    "email" => "e"
]);