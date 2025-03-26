<h2>Cadastro de usuario</h2>
<?= get('message')?>
<form action="/pages/forms/create_user.php" method="post">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" id="" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" id="" placeholder="Digite seu Email">
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" name="password" class="form-control" id="" placeholder="Digite seu Assunto">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>

</form>