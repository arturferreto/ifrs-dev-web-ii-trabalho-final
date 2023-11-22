<?php

namespace DAO;

include_once '../../app/Database/Connection.php';
include_once '../../app/Models/Person.php';

use Database\Connection;
use Models\Person;

class PersonDAO
{
    public function insert(Person $person): void
    {
        $sql = 'INSERT INTO people (name, phone) VALUES (:name, :phone)';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':name', $person->getName());
        $statement->bindValue(':phone', $person->getPhone());
        $statement->execute();
    }

    public function update(Person $person): void
    {
        $sql = 'UPDATE people SET name = :name, phone = :phone WHERE id = :id';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':name', $person->getName());
        $statement->bindValue(':phone', $person->getPhone());
        $statement->bindValue(':id', $person->getId());
        $statement->execute();
    }

    public function delete(int $id): void
    {
        $sql = 'DELETE FROM people WHERE id = :id';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

    public function selectAll(): array
    {
        $sql = 'SELECT * FROM people';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectById(int $id): ?Person
    {
        $sql = 'SELECT * FROM people WHERE id = :id';
        $statement = Connection::getConnection()->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!isset($result['id'])) {
            return null;
        }

        $person = new Person();
        $person->setId($result['id']);
        $person->setName($result['name']);
        $person->setPhone($result['phone']);

        return $person;
    }
}
