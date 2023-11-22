<?php

include_once '../../app/Controllers/PersonController.php';

use Controllers\PersonController;

$controller = new PersonController();
$people = $controller->index();

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de clientes</title>
</head>
<body>
    <h1>Lista de clientes</h1>

    <a href="/index.php">Menu</a>

    <br><br>

    <a href="/views/person/create.php">Cadastrar</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
                <tr>
                    <td><?= $person['name'] ?></td>
                    <td><?= $person['phone'] ?></td>
                    <td>
                        <a href="/views/person/edit.php?id=<?= $person['id'] ?>">Editar</a>
                        <a href="/views/person/delete.php?id=<?= $person['id'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
