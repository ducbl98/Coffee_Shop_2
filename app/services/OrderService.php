<?php

namespace App\Services;

use App\Models\BeverageModel;
use App\Models\OrderModel;
use App\Models\orders;

class OrderService
{
    public $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function createOrder($table, $date, $employee)
    {
        return $this->orderModel->createOrder($table, $date, $employee);
    }

    public function createdetail()
    {
        $list = new BeverageModel();
        $results = $list->getAllData();
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include "resources/views/orders/test.php";
//            include "resources/views/orders/createOrder.php";
        } else {
            $table = $_POST['table'];
            $date = date("Y-m-d h:i:s ");
            $employee = (int)$_SESSION['userLogin']['id'] = null;

            $orders = $this->createOrder($table, $date, $employee);
            $order = new orders($orders);
            $order->setId($orders);
            $order->setTimePayment($orders);
            $quantities = $_POST['quantity'];
            $prices = $_POST['price'];
            foreach ($_POST['listId'] as $key => $idBeverage) {
                $this->orderModel->createOrderDetail((int)$order->id, (int)$idBeverage, (int)$quantities[$key], (int)$prices[$key]);
            }
            $orderDetails = $this->orderModel->updateOrderDetail((int)$order->id);
            $totalPay = $this->orderModel->totalPay((int)$order->id);
            include_once "resources/views/orders/orderDetail.php";
        }
    }

    public function create()
    {
        $this->createdetail();
    }

}