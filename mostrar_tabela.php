<tr>
    <td><?=$usuario['id']?></td>
    <td><?=$usuario['nome'] ?></td>
    <td><?= $usuario['idade'] ?></td>
    <td><?=$usuario['email']?></td>
    <td>
        <a href="" class="btn btn-success">Editar</a>
        <a href="usuario_view.php?id=<?=$usuario['id']?>" class="btn btn-secondary">Visualizar</a>
        <form action="" method="POST" class="d-inline">
            <button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm">Excluir</button>
        </form>
    </td>
</tr>