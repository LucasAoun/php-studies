<h2>Edição de usuario</h2>

<?php 
 $user = find('users', 'id', $_GET['id']);
?>

<?= get('message')?>
<form action="/pages/forms/update_user.php" method="post">
    <input type="hidden" name="id" value="<?= $user->ID ?>">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" id="" placeholder="Digite seu nome" value="<?= $user->NAME ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" id="" placeholder="Digite seu Email" value="<?= $user->EMAIL ?>">
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" name="password" class="form-control" id="" placeholder="Digite seu Assunto" value="<?= $user->PASSWORD ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Atualizar</button>

</form>