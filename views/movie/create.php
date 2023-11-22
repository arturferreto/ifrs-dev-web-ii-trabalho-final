<?php

include_once '../../app/Controllers/MovieController.php';
include_once '../../app/Models/Movie.php';

use Controllers\MovieController;
use Models\Movie;

if (isset($_GET['store'])) {
    $movie = new Movie();
    $movie->setName($_POST['name']);
    $movie->setGenre($_POST['genre']);
    $movie->setDuration($_POST['duration']);

    $controller = new MovieController();
    $controller->store($movie);

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
    <title>Cadastrar Filmes</title>
</head>
<body>
    <h1>Cadastrar Filmes</h1>

    <form action="?store" method="post">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">

        <br><br>

        <label for="genre">Gênero</label>
        <input type="text" name="genre" id="genre">

        <br><br>

        <label for="duration">Duração</label>
        <input type="text" name="duration" id="duration">

        <br><br>

        <button type="submit">Cadastrar</button>
        <a href="/views/movie/index.php">Voltar</a>
    </form>
</body>
</html>