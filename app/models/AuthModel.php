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
}