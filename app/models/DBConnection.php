<?php


namespace App\Models;


class DBConnection
{
    protected string $dsn;
    protected string $user;
    protected string $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=coffee_shop_management';
        $this->user = 'root';
        $this->password = '1234';
    }

    public function connect(): \PDO
    {
        try {
            return new \PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $PDOException) {
            echo $PDOException->getMessage();
            die();
        }
    }
}