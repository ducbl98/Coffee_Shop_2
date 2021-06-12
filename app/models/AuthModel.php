<?php


namespace App\Models;


class AuthModel extends Model
{
    public function findByEmailPassword($request)
    {
        $sql = "SELECT `id`, `name`, `email`, `phone`, `role` FROM Users WHERE `email` = ? AND `password` = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['password']);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function checkEmailExist($email)
    {
        $sql = "SELECT `id`, `name`, `email`, `phone`, `role` FROM Users WHERE `email` = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function createUser(
        $name,
        $email,
        $phone,
        $password
    )
    {
        $sql = "INSERT INTO Users(`name`, `email`, `phone`, `password`) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $phone);
        $stmt->bindParam(4, $password);
        return $stmt->execute();
    }
}