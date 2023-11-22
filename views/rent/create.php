<?php

include_once '../../app/Controllers/RentController.php';
include_once '../../app/Controllers/PersonController.php';
include_once '../../app/Controllers/MovieController.php';
include_once '../../app/Models/Rent.php';

use Controllers\MovieController;
use Controllers\PersonController;
use Controllers\RentController;
use Models\Rent;

$people = (new PersonController())->index();
$movies = (new MovieController())->index();

if (isset($_GET['store'])) {
    $rent = new Rent();
    $rent->setPersonId($_POST['person_id']);
    $rent->setMovieId($_POST['movie_id']);
    $rent->setRentDate($_POST['rent_date']);
    $rent->setReturnDate($_POST['return_date']);
    $rent->setPrice($_POST['price']);

    $controller = new RentController();
    $controller->store($rent);

    header('Location: /views/rent/index.php');
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar locações</title>
</head>
<body>
    <h1>Cadastrar locações</h1>

    <form action="?store" method="post">
        <label for="person_id">Pessoa</label>
        <ul>
            <?php foreach ($people as $person): ?>
                <li>
                    <input type="radio" name="person_id" id="person_id" value="<?= $person['id'] ?>" required>
                    <label for="person_id"><?= $person['name'] ?></label>
                </li>
            <?php endforeach; ?>
        </ul>

        <br><br>

        <label for="movie_id">Filme</label>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <input type="radio" name="movie_id" id="movie_id" value="<?= $movie['id'] ?>" required>
                    <label for="movie_id"><?= $movie['name'] ?></label>
                </li>
            <?php endforeach; ?>
        </ul>

        <br><br>

        <label for="rent_date">Data de locação</label>
        <input type="date" name="rent_date" id="rent_date" required>

        <br><br>

        <label for="return_date">Data de devolução</label>
        <input type="date" name="return_date" id="return_date" required>

        <br><br>

        <label for="price">Preço</label>
        <input type="number" name="price" id="price" required>

        <br><br>

        <button type="submit">Cadastrar</button>
        <a href="/views/rent/index.php">Voltar</a>
    </form>
</body>
</html>