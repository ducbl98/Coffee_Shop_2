<?php

namespace App;

class Bill
{
    public $id;
    public $nameBev;
    public $image;
    public $quantity;
    public $priceEach;
    public $total;
    public $tableNumber;
    public $timeOrder;
    public $timePayment;

    public function __construct($data)
    {
        $this->nameBev = $data['name'];
        $this->image = $data['image'];
        $this->quantity = $data['quantity'];
        $this->priceEach = $data['priceEach'];
        $this->tableNumber = $data['tableNumber'];
        $this->timeOrder = $data['timeOrder'];
        $this->timePayment = $data['timePayment'];
        $this->total = $data['total'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

}