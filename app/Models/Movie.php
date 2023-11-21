<?php

namespace Models;

class Movie
{
    private int $id;
    private string $name;
    private string $genre;
    private int $duration;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre($genre): void
    {
        $this->genre = $genre;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }
}
