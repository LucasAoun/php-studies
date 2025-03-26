<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete("users", "id", $id);

if($deletado){
    flash("message", "Usuário deletado com sucesso", "success");
    return redirectHome();
}

flash("message", "Erro ao deletar usuário", "danger");
redirectHome();





