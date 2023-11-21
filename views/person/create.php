<?php

include_once '../../app/Controllers/PersonController.php';

$controller = new PersonController();

if (isset($_GET['store'])) {
    $controller->store($_POST);
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <h1>Cadastrar Pessoa</h1>

    <form action="?store" method="post">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">

        <br><br>

        <label for="phone">Telefone</label>
        <input type="text" name="phone" id="phone">

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>