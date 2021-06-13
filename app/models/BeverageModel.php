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
        $sql = 'INSERT INTO `Beverages`(`name`,`price`,`status`,`cost`,`image`,`category`) 
                VALUES (:name,:price,:status,:cost,:image,:category)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":name", $beverage->name);
        $stmt->bindParam(":price", $beverage->price);
        $stmt->bindParam("status", $beverage->status);
        $stmt->bindParam("cost", $beverage->cost);
        $stmt->bindParam("image", $beverage->image);
        $stmt->bindParam("category", $beverage->category);
        return $stmt->execute();
    }


    public function getCategoryName($id): array
    {
        $sql = 'SELECT `name` FROM `Categories` WHERE `id` =:id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam("id", $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAllCategoryName(): array
    {
        $sql = 'SELECT `id`,`name` FROM `Categories`';
        $stmt = $this->connection->prepare($sql);
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
        $sql = 'UPDATE `Beverages` 
                  SET `name` =:name,
                      `cost`=:cost,
                      `price`=:price,
                      `status`=:status,
                      `image`=:image,
                      `category`=:category
                  WHERE `id`=:id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $beverage->name);
        $stmt->bindParam(":price", $beverage->price);
        $stmt->bindParam(":status", $beverage->status);
        $stmt->bindParam(":cost", $beverage->cost);
        $stmt->bindParam(":image", $beverage->image);
        $stmt->bindParam(":category", $beverage->category);
        return $stmt->execute();
    }

    public function deleteData($id): bool
    {
        $sql = 'DELETE FROM `Beverages` WHERE id = :id;
                SET @autoid=0;
                UPDATE `Beverages` SET id=@autoid:=(@autoid +1 );
                ALTER TABLE `Beverages` AUTO_INCREMENT =1;';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function findData($keyword): array
    {
        $sql = 'SELECT * FROM `Beverages` WHERE `name` LIKE :keyword';
        $stmt = $this->connection->prepare($sql);
        $findKey = '%' . $keyword . '%';
        $stmt->bindParam(":keyword", $findKey);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}