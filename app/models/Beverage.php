<?php


namespace App\Models;


class Beverage
{

    public function setCategory($category): void
    {
        $this->category = $category;
    }


    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public $id;
    public $category;
    public $name;
    public $price;
    public $cost;
    public $image;
    public $status;


    public function __construct($data)
    {
        $this->category = $data['category'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->cost = $data['cost'];
        $this->status = $data['status'];
    }


    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

}