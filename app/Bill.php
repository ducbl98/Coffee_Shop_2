<?php

namespace App;

class Bill
{
    public $orderNumber;
    public $nameBev;
    public $image;
    public $quantiy;
    public $priceEach;

    public function __construct($data)
    {
        $this->nameBev = $data['name'];
        $this->image = $data['image'];
        $this->quantiy = $data['quantity'];
        $this->priceEach = $data['priceEach'];
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

}