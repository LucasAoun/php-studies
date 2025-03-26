<h2>Contato</h2>
<?= get('message')?>
<form action="/pages/forms/contato.php" method="post">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" id="" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" id="" placeholder="Digite seu Email">
    </div>
    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" name="subject" class="form-control" id="" placeholder="Digite seu Assunto">
    </div>
    <br>
    <div class="form-group">
        <textarea name="message" id="" class="form-control" rols="10" cols="30">Digite sua mensagem</textarea>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>

</form>