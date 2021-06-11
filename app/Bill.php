<?php

namespace App;

class Bill
{
    public $orderNumber;
    public $nameBev;
    public $image;
    public $quantity;
    public $priceEach;
    public $total;

    public function __construct($data)
    {
        $this->nameBev = $data['name'];
        $this->image = $data['image'];
        $this->quantity = $data['quantity'];
        $this->priceEach = $data['priceEach'];
        $this->total = $data['total'];
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

}