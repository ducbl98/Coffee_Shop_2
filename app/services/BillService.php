<?php


namespace App\Services;


use App\Models\BillModel;
use App\Bill;

class BillService
{
    protected BillModel $billModel;

    public function __construct()
    {
        $this->billModel = new BillModel();
    }

    public function getBill()
    {
        $data = $this->billModel->getView();
//        echo "<pre>";
//        var_dump($data);
//        echo "</pre>";
//        exit;
        $bills = [];
        foreach ($data as $item) {
            $bill = new Bill($item);
            $bill->setOrderNumber($item['orderNumber']);
            $bills[] = $bill;
        }
//        echo "<pre>";
//        var_dump($bills);
//        echo "</pre>";
//        exit;
        return $bills;
    }

}