<?php

include_once '../../app/Controllers/PersonController.php';
include_once '../../app/Models/Person.php';

use Controllers\PersonController;
use Models\Person;

$controller = new PersonController();

$person = $controller->edit($_GET['id']);

if ($person === null) {
    header('Location: /views/person/index.php');
}

if (isset($_GET['update'])) {
    $person = new Person();
    $person->setId($_GET['id']);
    $person->setName($_POST['name']);
    $person->setPhone($_POST['phone']);

    $controller = new PersonController();
    $controller->update($person);

    header('Location: /views/person/index.php');
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Pessoa</title>
</head>
<body>
<h1>Editar Pessoa</h1>

<form action="?update&id=<?= $_GET['id'] ?>" method="post">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="<?= $person->getName() ?>">

    <br><br>

    <label for="phone">Telefone</label>
    <input type="text" name="phone" id="phone" value="<?= $person->getPhone() ?>">

    <br><br>

    <button type="submit">Editar</button>

    <a href="/views/person/index.php">Voltar</a>
</form>
</body>
</html>