<?php

include_once '../../app/Controllers/RentController.php';

use Controllers\RentController;

if (!isset($_GET['id'])) {
    header('Location: /views/rent/index.php');
}

$controller = new RentController();
$rent = $controller->show($_GET['id']);

if ($rent === null) {
    header('Location: /views/rent/index.php');
}

$controller->delete($_GET['id']);

header('Location: /views/rent/index.php');