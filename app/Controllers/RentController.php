<?php

namespace Controllers;

include_once '../../app/DAO/RentDAO.php';
include_once '../../app/Models/Rent.php';

use DAO\RentDAO;
use Models\Rent;

class RentController
{
    public function index(): array
    {
        $rentDAO = new RentDAO();

        return $rentDAO->selectAll();
    }

    public function store(Rent $data): void
    {
        $rentDAO = new RentDAO();

        $rentDAO->insert($data);
    }

    public function edit(int $id): ?Rent
    {
        $rentDAO = new RentDAO();

        return $rentDAO->selectById($id);
    }

    public function update(Rent $data): void
    {
        $rentDAO = new RentDAO();

        $rentDAO->update($data);
    }

    public function show(int $id): ?Rent
    {
        $rentDAO = new RentDAO();

        return $rentDAO->selectById($id);
    }

    public function delete(int $id): void
    {
        $rentDAO = new RentDAO();

        $rentDAO->delete($id);
    }
}