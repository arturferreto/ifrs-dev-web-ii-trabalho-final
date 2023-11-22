<?php

namespace Controllers;

include_once '../../app/DAO/PersonDAO.php';
include_once '../../app/Models/Person.php';

use DAO\PersonDAO;
use Models\Person;

class PersonController
{
    public function index(): array
    {
        $personDAO = new PersonDAO();

        return $personDAO->selectAll();
    }

    public function store(Person $data): void
    {
        $personDAO = new PersonDAO();

        $personDAO->insert($data);
    }

    public function edit(int $id): ?Person
    {
        $personDAO = new PersonDAO();

        return $personDAO->selectById($id);
    }

    public function update(Person $data): void
    {
        $personDAO = new PersonDAO();

        $personDAO->update($data);
    }

    public function show(int $id): ?Person
    {
        $personDAO = new PersonDAO();

        return $personDAO->selectById($id);
    }

    public function delete(int $id): void
    {
        $personDAO = new PersonDAO();

        $personDAO->delete($id);
    }
}