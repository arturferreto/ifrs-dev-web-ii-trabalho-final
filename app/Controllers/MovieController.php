<?php

namespace Controllers;

include_once '../../app/DAO/MovieDAO.php';
include_once '../../app/Models/Movie.php';

use DAO\MovieDAO;
use Models\Movie;

class MovieController
{
    public function index(): array
    {
        $movieDAO = new MovieDAO();

        return $movieDAO->selectAll();
    }

    public function store(Movie $data): void
    {
        $movieDAO = new MovieDAO();

        $movieDAO->insert($data);
    }

    public function edit(int $id): ?Movie
    {
        $movieDAO = new MovieDAO();

        return $movieDAO->selectById($id);
    }

    public function update(Movie $data): void
    {
        $movieDAO = new MovieDAO();

        $movieDAO->update($data);
    }

    public function show(int $id): ?Movie
    {
        $movieDAO = new MovieDAO();

        return $movieDAO->selectById($id);
    }

    public function delete(int $id): void
    {
        $movieDAO = new MovieDAO();

        $movieDAO->delete($id);
    }
}