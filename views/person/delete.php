<?php

include_once '../../app/Controllers/PersonController.php';

use Controllers\PersonController;

if (!isset($_GET['id'])) {
    header('Location: /views/person/index.php');
}

$controller = new PersonController();
$person = $controller->show($_GET['id']);

if ($person === null) {
    header('Location: /views/person/index.php');
}

$controller->delete($_GET['id']);

header('Location: /views/person/index.php');