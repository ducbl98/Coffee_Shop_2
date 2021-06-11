<?php


namespace App\Models;


class BillModel extends Model
{
    public function getView()
    {
        $sql = "SELECT * FROM billOrder";
        $stmt = $this->connection->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getDetail($id)
    {
        $sql = "SELECT * FROM Orders WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}