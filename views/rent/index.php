<?php

include_once '../../app/Controllers/RentController.php';
include_once '../../app/Controllers/PersonController.php';
include_once '../../app/Controllers/MovieController.php';

use Controllers\MovieController;
use Controllers\PersonController;
use Controllers\RentController;

$controller = new RentController();
$rents = $controller->index();

function personName(int $id): string
{
    $person = (new PersonController())->show($id);

    return $person->getName();
}

function movieName(int $id): string
{
    $movie = (new MovieController())->show($id);

    return $movie->getName();
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de locações</title>
</head>
<body>
<h1>Lista de locações</h1>

<a href="/index.php">Menu</a>

<br><br>

<a href="/views/rent/create.php">Cadastrar</a>

<br><br>

<table>
    <thead>
    <tr>
        <th>Pessoa</th>
        <th>Filme</th>
        <th>Data de locação</th>
        <th>Data de devolução</th>
        <th>Preço</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rents as $rent): ?>
        <tr>
            <td><?= personName($rent['person_id']) ?></td>
            <td><?= movieName($rent['movie_id']) ?></td>
            <td><?= $rent['rent_date'] ?></td>
            <td><?= $rent['return_date'] ?></td>
            <td><?= $rent['price'] ?></td>
            <td>
                <a href="/views/rent/edit.php?id=<?= $rent['id'] ?>">Editar</a>
                <a href="/views/rent/delete.php?id=<?= $rent['id'] ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
