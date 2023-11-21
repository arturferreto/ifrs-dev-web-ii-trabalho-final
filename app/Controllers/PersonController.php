<?php

namespace Controllers;

include_once '../../app/DAO/PersonDAO.php';

use DAO\PersonDAO;

class PersonController
{
    public function index(): array
    {
        $personDAO = new PersonDAO();

        return $personDAO->selectAll();
    }
}