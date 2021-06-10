<?php


namespace App\Models;


class BeverageModel extends Model implements BasicFunction
{
    public function getAllData(): array
    {
        $sql = 'SELECT * FROM `Beverages`';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertData(Beverage $beverage): bool
    {
        $checkExist = $this->checkExistCategory($beverage->category);
        if (!$checkExist) {
            $sql = 'INSERT INTO `Beverages`(`name`,`price`,`status`,`cost`,`image`,`category`) 
                VALUES (:name,:price,:status,:cost,:image,
                (SELECT `id` FROM `Categories` WHERE `name` =:name1))';
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(":name", $beverage->name);
            $stmt->bindParam(":price", $beverage->price);
            $stmt->bindParam("status", $beverage->status);
            $stmt->bindParam("cost", $beverage->cost);
            $stmt->bindParam("image", $beverage->image);
            $stmt->bindParam("name1", $beverage->category);
        } else {
            $sql = 'INSERT INTO `Categories`(`name`) 
                  VALUES (:name );
                  INSERT INTO `Beverages` (`name`,`price`,`status`,`cost`,`image`,`category`)
                  VALUES (:name,:price,:status,:cost,:image, LAST_INSERT_ID())';
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(":name", $beverage->name);
            $stmt->bindParam(":price", $beverage->price);
            $stmt->bindParam("status", $beverage->status);
            $stmt->bindParam("cost", $beverage->cost);
            $stmt->bindParam("image", $beverage->image);
        }
        return $stmt->execute();
    }

    public function checkExistCategory($name): bool
    {
        $sql = 'SELECT `id` FROM `Categories` WHERE `name` =:name1';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam("name1", $name);
        $stmt->execute();
        return empty($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }
    public function getCategoryName($id): array
    {
        $sql='SELECT `name` FROM `Categories` WHERE `id` =:id';
        $stmt=$this->connection->prepare($sql);
        $stmt->bindParam("id",$id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getDataById($id): array
    {
        $sql = 'SELECT * FROM `Beverages` WHERE id =:id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function updateData($id, Beverage $beverage): bool
    {
        $checkExist = $this->checkExistCategory($beverage->category);
        if (!$checkExist) {
            $sql = 'UPDATE `Beverages` 
                  SET `name`=:name,
                      `cost`=:cost,
                      `price`=:price,
                      `status`:status,
                      `image`=:image, 
                  WHERE `id`=:id';
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $beverage->name);
            $stmt->bindParam(":price", $beverage->price);
            $stmt->bindParam("status", $beverage->status);
            $stmt->bindParam("cost", $beverage->cost);
            $stmt->bindParam("image", $beverage->image);
            return $stmt->execute();
        }
    }
}