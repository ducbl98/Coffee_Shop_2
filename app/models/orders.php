<?php


namespace App\Models;


class orders
{
    public $id;
    public $timeOrder;
    public $timePayment;
    public $employeeId;
    public $tableNumber;
    public function __construct($data)
    {
        $this->timeOrder=$data['timeOrder'];
        $this->employeeId=$data['employeeId'];
        $this->tableNumber=$data['tableNumber'];
    }

    public function setId($data)
    {
        $this->id=$data['id'];
    }

    public function setTimePayment($data)
    {
        $this->timePayment=$data['timePayment'];
    }


}