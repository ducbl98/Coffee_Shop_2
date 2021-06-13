<?php

namespace App\Controllers;

use App\Services\OrderService;

class OrderController
{
    public $orderService;

    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function create()
    {
        $this->orderService->create();
    }

}