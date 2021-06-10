<?php


namespace App\Models;


class Model
{
    protected \PDO $connection;

    public function __construct()
    {
        $DBConnection= new DBConnection();
        $this->connection=$DBConnection->connect();
    }
}