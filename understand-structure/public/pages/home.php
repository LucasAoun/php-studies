<a href="?page=create_user">Cadastrar novo usuário</a>

<h2>home</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php $users = all('users'); ?>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->ID ?></td>
                <td><?= $user->NAME ?></td>
                <td><?= $user->EMAIL ?></td>
                <td><a href="?page=edit_user&id=<?= $user->ID ?>" class="btn btn-primary">Editar</a></td>
                <td><a href="/pages/forms/delete_user.php?id=<?= $user->ID ?>" class="btn btn-danger">Deletar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>