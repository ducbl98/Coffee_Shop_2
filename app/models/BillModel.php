<?php


namespace App\Models;


class BillModel extends Model
{
    public function getView()
    {
        $sql = "SELECT * FROM listBill";
        $stmt = $this->connection->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getDetail($id)
    {
        $sql = "CALL getDetailBill(:id)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getTotal($id)
    {
        $sql = "CALL getTotalBillDetail(:id,@total)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $total = $this->connection->query("SELECT @total")->fetch(\PDO::FETCH_ASSOC);
        return $total;
    }

    public function getBillCustom($day)
    {
        $sql = "CALL getListBillCustom(:day)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':day', $day);
        $stmt->execute();
        return $stmt->fetchAll();
//        $total = $this->connection->query("SELECT @total")->fetch(\PDO::FETCH_ASSOC);
    }
}