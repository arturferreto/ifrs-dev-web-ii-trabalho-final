<?php

namespace Models;

class Rent
{
    private int $id;
    private int $person_id;
    private int $movie_id;
    private string $rent_date;
    private string $return_date;
    private float $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPersonId(): int
    {
        return $this->person_id;
    }

    public function setPersonId(int $person_id): void
    {
        $this->person_id = $person_id;
    }

    public function getMovieId(): int
    {
        return $this->movie_id;
    }

    public function setMovieId(int $movie_id): void
    {
        $this->movie_id = $movie_id;
    }

    public function getRentDate(): string
    {
        return $this->rent_date;
    }

    public function setRentDate(string $rent_date): void
    {
        $this->rent_date = $rent_date;
    }

    public function getReturnDate(): string
    {
        return $this->return_date;
    }

    public function setReturnDate(string $return_date): void
    {
        $this->return_date = $return_date;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
