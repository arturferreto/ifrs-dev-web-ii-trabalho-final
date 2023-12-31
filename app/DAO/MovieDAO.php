<?php

namespace DAO;

include_once '../../app/Database/Connection.php';
include_once '../../app/Models/Movie.php';

use Database\Connection;
use Models\Movie;

class MovieDAO
{
    public function insert(Movie $movie): void
    {
        $sql = 'INSERT INTO movies (name, genre, duration) VALUES (:name, :genre, :duration)';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(':name', $movie->getName());
        $stmt->bindValue(':genre', $movie->getGenre());
        $stmt->bindValue(':duration', $movie->getDuration());
        $stmt->execute();
    }

    public function update(Movie $movie): void
    {
        $sql = 'UPDATE movies SET name = :name, genre = :genre, duration = :duration WHERE id = :id';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(':name', $movie->getName());
        $stmt->bindValue(':genre', $movie->getGenre());
        $stmt->bindValue(':duration', $movie->getDuration());
        $stmt->bindValue(':id', $movie->getId());
        $stmt->execute();
    }

    public function delete(int $id): void
    {
        $sql = 'DELETE FROM movies WHERE id = :id';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function selectAll(): array
    {
        $sql = 'SELECT * FROM movies';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectById(int $id): ?Movie
    {
        $sql = 'SELECT * FROM movies WHERE id = :id';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!isset($result['id'])) {
            return null;
        }

        $movie = new Movie();
        $movie->setId($result['id']);
        $movie->setName($result['name']);
        $movie->setGenre($result['genre']);
        $movie->setDuration($result['duration']);

        return $movie;
    }
}
