<?php

class Movie
{
    private $id = null;
    private $name = null;
    private $genre = null;
    private $duration = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre): void
    {
        $this->genre = $genre;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }
}