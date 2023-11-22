<?php

include_once '../../app/Controllers/MovieController.php';

use Controllers\MovieController;

$controller = new MovieController();
$movies = $controller->index();

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de filmes</title>
</head>
<body>
<h1>Lista de filmes</h1>

<a href="/index.php">Menu</a>

<br><br>

<a href="/views/movie/create.php">Cadastrar</a>

<br><br>

<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Gênero</th>
        <th>Duração</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($movies as $movie): ?>
        <tr>
            <td><?= $movie['name'] ?></td>
            <td><?= $movie['genre'] ?></td>
            <td><?= $movie['duration'] ?></td>
            <td>
                <a href="/views/movie/edit.php?id=<?= $movie['id'] ?>">Editar</a>
                <a href="/views/movie/delete.php?id=<?= $movie['id'] ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
