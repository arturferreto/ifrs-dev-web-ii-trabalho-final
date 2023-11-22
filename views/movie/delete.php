<?php

include_once '../../app/Controllers/MovieController.php';

use Controllers\MovieController;

if (!isset($_GET['id'])) {
    header('Location: /views/movie/index.php');
}

$controller = new MovieController();
$movie = $controller->show($_GET['id']);

if ($movie === null) {
    header('Location: /views/movie/index.php');
}

$controller->delete($_GET['id']);

header('Location: /views/movie/index.php');