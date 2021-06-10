<?php


namespace App\Models;


class Beverage
{
    /**
     * @param mixed $category
     */
    public function setCategory(mixed $category): void
    {
        $this->category = $category;
    }
    public int $id;
    public mixed $category;
    public string $name;
    public float $price;
    public float $cost;
    public mixed $image;
    public mixed $status;


    public function __construct($data)
    {
        $this->category = $data['category'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->cost = $data['cost'];
        $this->status = $data['status'];
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $image
     */
    public function setImage(mixed $image): void
    {
        $this->image = $image;
    }

}