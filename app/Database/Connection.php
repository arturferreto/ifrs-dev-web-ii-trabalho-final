<?php

namespace Database;

class Connection
{
    private static \PDO $connection;

    public static function getConnection(): \PDO
    {
        if (empty(self::$connection)) {
            self::$connection = new \PDO('mysql:host=127.0.0.1;dbname=video_place', 'root', 'password');
        }

        return self::$connection;
    }
}