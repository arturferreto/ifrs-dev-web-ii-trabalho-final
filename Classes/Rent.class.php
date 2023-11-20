<?php

class Rent
{
    private $id = null;
    private $person_id = null;
    private $movie_id = null;
    private $rent_date = null;
    private $return_date = null;
    private $price = null;

    public function getId()
    {
        return $this->id;
    }

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function getMovieId()
    {
        return $this->movie_id;
    }

    public function getRentDate()
    {
        return $this->rent_date;
    }

    public function getReturnDate()
    {
        return $this->return_date;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setPersonId($person_id): void
    {
        $this->person_id = $person_id;
    }

    public function setMovieId($movie_id): void
    {
        $this->movie_id = $movie_id;
    }

    public function setRentDate($rent_date): void
    {
        $this->rent_date = $rent_date;
    }

    public function setReturnDate($return_date): void
    {
        $this->return_date = $return_date;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }
}
