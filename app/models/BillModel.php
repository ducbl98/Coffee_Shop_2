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
}