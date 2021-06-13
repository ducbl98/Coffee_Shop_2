<?php


namespace App\Models;


class BillModel extends Model
{
    public function getView($page)
    {
        $record = 10;
        $recordPage = $record * ($page - 1);
        $sql = "SELECT * FROM listBill LIMIT ?,?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $recordPage, \PDO::PARAM_INT);
        $stmt->bindValue(2, $record, \PDO::PARAM_INT);
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
    }

    public function payment($bill)
    {
        $timePayment = date("Y-m-d H:i:s");
        $sql = "UPDATE Orders SET timePayment = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $timePayment);
        $stmt->bindParam(2, $bill);
        $stmt->execute();
    }

    public function search($value)
    {
        $sql = "SELECT * FROM listBill WHERE `timeOrder` LIKE"."'%".$value."%' OR `timeOrder` LIKE"."'%".$value."%'";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}