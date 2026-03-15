<?php

namespace App\Infrastructure;

use PDO;
use PDOException;

class Database {

    public static function connect(): PDO{
        $host = 'localhost';
        $port = 5432;
        $dbname = 'slim_product_search_demo';
        $username = 'perseus_app';
        $password = '1234';
        
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

        try {
            return new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }

}


