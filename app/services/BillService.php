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
        $bills = [];
        foreach ($data as $item) {
            $bill = new Bill($item);
            $bill->setOrderNumber($item['orderNumber']);
            $bills[] = $bill;
        }
        return $bills;
    }

    public function getDetail($id)
    {
        $data = $this->billModel->getDetail($id);

    }

}