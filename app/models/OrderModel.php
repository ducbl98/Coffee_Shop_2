<?php


namespace App\Models;


class OrderModel extends Model
{
    public function createOrder($table,$date,$employee)
    {
        $employeeId=(int)$employee+1;
        $sql="INSERT INTO Orders(timeOrder,employeeId,tableNumber) values (?,?,?)";
        $stmt=$this->connection->prepare($sql);
        $stmt->bindParam(1,$date);
        $stmt->bindParam(2,$employeeId);
        $stmt->bindParam(3,$table);
        $stmt->execute();

        $sql2="select * from Orders where timeOrder= ? and employeeId=? and tableNumber= ? ";
        $stmt2=$this->connection->prepare($sql2);
        $stmt2->bindParam(1,$date);
        $stmt2->bindParam(2,$employeeId);
        $stmt2->bindParam(3,$table);
        $stmt2->execute();
        return $stmt2->fetch();
    }


    public function createOrderDetail($idOrder,$idBeverage, $quantity,$price)
    {
        $sql="INSERT INTO OrderDetails(orderNumber,beverageId, quantity,priceEach) values (?,?,?,?)";
        $stmt=$this->connection->prepare($sql);
        $stmt->bindParam(1,$idOrder);
        $stmt->bindParam(2,$idBeverage);
        $stmt->bindParam(3,$quantity);
        $stmt->bindParam(4,$price);
        return $stmt->execute();
    }

    public function updateOrderDetail($id)
    {
        $sql="SELECT `orderNumber`,`beverageId`,`quantity`,Beverages.name,Beverages.price
              FROM `OrderDetails` JOIN Beverages 
              ON Beverages.id=OrderDetails.beverageId
              where    orderNumber= ? ";
        $stmt=$this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function totalPay($id)
    {
        $sql="SELECT SUM(OrderDetails.quantity*Beverages.price) AS TongTien FROM OrderDetails JOIN Beverages
               ON OrderDetails.beverageId=Beverages.id WHERE OrderDetails.orderNumber= :id ";
        $stmt=$this->connection->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }


}