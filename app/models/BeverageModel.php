<?php


namespace App\Models;


class BeverageModel extends Model implements BasicFunction
{
    public function show()
    {
        $sql="select * from Beverages ";
        $stmt=$this->connection->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}