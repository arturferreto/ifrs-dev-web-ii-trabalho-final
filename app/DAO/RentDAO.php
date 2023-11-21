<?php

namespace DAO;

use Database\Connection;
use Models\Rent;

class RentDAO
{
    public function insert(Rent $rent): void
    {
        $sql = 'INSERT INTO rents (person_id, movie_id, rent_date, return_date, price) VALUES (:person_id, :movie_id, :rent_date, :return_date, :price)';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':person_id', $rent->getPersonId());
        $statement->bindValue(':movie_id', $rent->getMovieId());
        $statement->bindValue(':rent_date', $rent->getRentDate());
        $statement->bindValue(':return_date', $rent->getReturnDate());
        $statement->bindValue(':price', $rent->getPrice());
        $statement->execute();
    }

    public function update(Rent $rent): void
    {
        $sql = 'UPDATE rents SET person_id = :person_id, movie_id = :movie_id, rent_date = :rent_date, return_date = :return_date, price = :price WHERE id = :id';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':person_id', $rent->getPersonId());
        $statement->bindValue(':movie_id', $rent->getMovieId());
        $statement->bindValue(':rent_date', $rent->getRentDate());
        $statement->bindValue(':return_date', $rent->getReturnDate());
        $statement->bindValue(':price', $rent->getPrice());
        $statement->bindValue(':id', $rent->getId());
        $statement->execute();
    }

    public function delete(int $id): void
    {
        $sql = 'DELETE FROM rents WHERE id = :id';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

    public function selectAll(): array
    {
        $sql = 'SELECT * FROM rents';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectById(int $id): Rent
    {
        $sql = 'SELECT * FROM rents WHERE id = :id';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
}
