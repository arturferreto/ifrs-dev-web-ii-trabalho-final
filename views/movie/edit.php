<?php

include_once '../../app/Controllers/MovieController.php';
include_once '../../app/Models/Movie.php';

use Controllers\MovieController;
use Models\Movie;

$controller = new MovieController();

$movie = $controller->edit($_GET['id']);

if ($movie === null) {
    header('Location: /views/movie/index.php');
}

if (isset($_GET['update'])) {
    $movie = new Movie();
    $movie->setId($_GET['id']);
    $movie->setName($_POST['name']);
    $movie->setGenre($_POST['genre']);
    $movie->setDuration($_POST['duration']);

    $controller = new MovieController();
    $controller->update($movie);

    header('Location: /views/movie/index.php');
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Filme</title>
</head>
<body>
<h1>Editar Filme</h1>

<form action="?update&id=<?= $_GET['id'] ?>" method="post">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="<?= $movie->getName() ?>">

    <br><br>

    <label for="genre">Gênero</label>
    <input type="text" name="genre" id="genre" value="<?= $movie->getGenre() ?>">

    <br><br>

    <label for="duration">Duração</label>
    <input type="text" name="duration" id="duration" value="<?= $movie->getDuration() ?>">

    <br><br>

    <button type="submit">Editar</button>

    <a href="/views/movie/index.php">Voltar</a>
</form>
</body>
</html>